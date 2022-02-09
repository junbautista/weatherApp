@include('header');

        <!-- header -->
        <header class = "flex header-sm">
            <div class = "container">
                <div class = "header-title">
                    <h1>About</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus rerum maxime enim odit illum in molestias beatae doloremque, ratione optio.</p>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- about section -->
        <section id = "about" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">things to know about us</span>
                    <h2 class = "lg-title">our story</h2>
                </div>

                <div class = "about-row">
                    <div class = "about-left my-2">
                        <img src = "images/about-img.jpg" alt = "about img">
                    </div>
                    <div class = "about-right">
                        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit</h2>
                        <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae sed aperiam qui repudiandae earum voluptatem. Modi at inventore omnis veniam necessitatibus exercitationem vel nesciunt delectus ex officiis, culpa doloremque odit illo saepe placeat. Delectus consequuntur reprehenderit omnis accusantium officiis!</p>
                        <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique explicabo blanditiis quidem consequuntur qui quaerat fuga iste tenetur consequatur porro. Aliquam maiores alias doloribus at quisquam quo numquam perferendis. Odit!</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->

        <!-- facts section -->
        <section id = "facts" class = "py-4 flex">
            <div class = "container">
                <div class = 'title-wrap'>
                    <span class = "sm-title">know some facts about Japan</span>
                    <h2 class = "lg-title">Fun facts about food in Japan</h2>
                </div>

                <div class = "facts-row">
                    <div class = "facts-item">
                        <span class = "fas fa-yen-sign facts-icon"></span>
                        <div class = "facts-info">
                            <p class = "text">Japanese melons can cost you over $200</p>
                        </div>
                    </div>

                    <div class = "facts-item">
                        <span class = "fas fa-ship facts-icon"></span>
                        <div class = "facts-info">
                            <p class = "text">Japan imports over 80% of Jamaica's annual coffee production</p>
                        </div>
                    </div>

                    <div class = "facts-item">
                        <span class = "fas fa-fish facts-icon"></span>
                        <div class = "facts-info">
                            <p class = "text">It once had the world’s largest fish market</p>
                        </div>
                    </div>

                    <div class = "facts-item">
                        <span class = "fas fa-horse facts-icon"></span>
                        <div class = "facts-info">
                            <p class = "text">They have a meat dish made of horse</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of facts section -->
        

        @include('footer');

        <!-- js -->
        <script src = "js/script.js"></script>
        <script>
            
        </script>
    </body>
</html>