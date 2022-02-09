<template>
	<div align="center" class="text-white mb-8">
		<div class="places-input text-gray-800">
			<input type="text" id="address" class="form-control" 
			style="color: black; border: 1px solid black; border-radius: 2;" 
			placeholder="Where are we going?"
			v-model="qry"
			v-on:Keyup="autoComplete">

			<div 
			v-for = "results in places" 
			:key  = "results" 
			class = "text-white text-sm w-128 max-w-lg bg-gray-800 px-3 py-3 border-2 overflow-hidden">
			
				<button 
				v-on:click="
				getPlace(results.geo.name); 
				getLatitude(results.geo.center.latitude); 
				getLogitude(results.geo.center.longitude);
				fetchData()">

					{{ results.geo.name }} 

				</button>
			</div>
		</div>





		<div class="weather-container font-sans w-128 max-w-lg rounded-lg overflow-hidden bg-gray-900 shadow-lg mt-4">
			<div class="flex items-center justify-between px-6 py-8 ">
				<div>
					<div class="text-6xl font-semibold">{{ currentTemperature.actual }}°C</div>
					<div>Feels like {{ currentTemperature.feels_like }}°C</div>
				</div>
				<div class="mx-5">
					<div class="font-semibold">{{ currentTemperature.description }}</div>
					<div>{{ location.name }}</div>
					<div><i>({{ location.lat }}, {{ location.lon }})</i></div>
				</div>
				<div>
					<img v-bind:src="'http://openweathermap.org/img/wn/' + currentTemperature.icon +'.png'" /> 
				</div>
			</div> 		
		</div> <!-- end weather container -->

		<div class="future-weather text-sm w-128 max-w-lg bg-gray-800 px-6 py-8 rounded-lg overflow-hidden">
			<div 
			v-for  = "(day, index) in dailyFiveDays"
			:key   = "day.dt"
			class  = "flex items-center"
			:class = "{ 'mt-8' : index > 0 }"
			>
				<div class="w-1/6 text-lg text-gray-200">{{ toDayOfWeek(day.dt) }}</div>
				<div class="w-4/6 px-4 flex items-center">
					<div><img v-bind:src="'http://openweathermap.org/img/wn/' + day.weather[0].icon +'.png'" /></div>
					<div class="ml-3">{{ day.weather[0].description }}</div>
				</div>
				<div class="w-1/6 text-right">
					<div>{{ Math.round(day.temp.max) }}°C</div>
					<div>-{{ Math.round(day.temp.min) }}°C</div>
				</div>
			</div>
		</div> <!-- end future-weather -->
	</div>
</template>


<script>
	export default {
		mounted() {
			this.autoComplete()
			this.fetchData()			
		},

		data() {
			return {
				qry:'',
				results:[],
				
				currentTemperature: {
					actual: '',
					feels_like: '',
					description: '',
					icon: '',
				},
				daily: [],
				location: {
					name: 'Manila, National Capital Region',
					lat: 14.6042,
					lon: 120.9822,
				}
			}
		},

		computed: {
			dailyFiveDays() {
				return this.daily.filter((day, index) => index < 5 )
			},

			places() {
				return this.results.filter((results, index) => index < 5 )
			}
		},

		methods: {
			getPlace: function(place) {
		       this.location.name = place
		    },

		    getLatitude: function(latitude) {
		       this.location.lat = latitude
		    },

		    getLogitude: function(longitude) {
		       this.location.lon = longitude
		    },

			autoComplete() {
				this.results=[];
				//alert(this.qry);
				const options = {
				  method: 'GET',
				  headers: {
				    Accept: 'application/json',
				    Authorization: 'fsq3sb4Oybig0Y+bgL6Xosb2mryCK0UClPPRTS4OO0ICYTA='
				  }
				};

				fetch(`https://api.foursquare.com/v3/autocomplete?query=${this.qry}&types=geo`, options)
				  .then(response => response.json())
				  .then(data => {
					//console.log(data);
					this.results = data.results
				})
			},
			
			fetchData() {
				fetch(`https://api.openweathermap.org/data/2.5/onecall?lat=${this.location.lat}&lon=${this.location.lon}&appid=c59c7d4f760778b4dc883a76e1a690bd&units=metric`)
				.then(response => response.json())
				.then(data => {
					//console.log(data);
					this.currentTemperature.actual 		= Math.round(data.current.temp)
					this.currentTemperature.feels_like 	= Math.round(data.current.feels_like)
					this.currentTemperature.description = data.current.weather[0].description //??
					this.currentTemperature.icon 		= data.current.weather[0].icon //??

					this.daily = data.daily
				})
			},

			toDayOfWeek(timestamp) {
				const newDate = new Date(timestamp*1000)
				const days 	  = ['SUN','MON','TUE','WED','THU','FRI','SAT']

				return days[newDate.getDay()]
			}
		}
	}
</script>