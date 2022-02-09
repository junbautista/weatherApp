@include('header');
        <!-- header -->
        <header class = "flex header-sm">
            <div class = "container">
                <div class = "header-title">
                    <h1>Weather</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus rerum maxime enim odit illum in molestias beatae doloremque, ratione optio.</p>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- contact section -->
        <section id = "contact" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">Check the Latest Updates</span>
                    <h2 class = "lg-title">Weather</h2>
                </div>

                {{-- <link rel="stylesheet" href="css/main.css"> --}}
                <script src="https://cdn.tailwindcss.com"></script>
                <div id="weather-app">
                    <weather-app></weather-app>
                </div>
                <script src="js/app.js"></script>
                

            </div>
        </section>
        <!-- end of contact section -->
        

        @include('footer');

        <!-- js -->
        <script src = "js/script.js"></script>
        <script>
            
        </script>
    </body>
</html>