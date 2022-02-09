require('./bootstrap');

/*window.Vue = require('vue');
Vue.component('weather-app', require('./components/WeatherApp.vue').default);*/

import { createApp } from 'vue';
import WeatherApp from './components/WeatherApp.vue';

const app = createApp({});
app.component('weather-app', WeatherApp);
app.mount('#weather-app'); 