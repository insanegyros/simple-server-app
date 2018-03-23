{extends file='layout.tpl'}
{block name=title}Home{/block}
{block name=body}
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('../assets/img/carousel1.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>First Slide</h3>
                        <p>This is a description for the first slide.</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('../assets/img/carousel2.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Second Slide</h3>
                        <p>This is a description for the second slide.</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('../assets/img/carousel3.png')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Third Slide</h3>
                        <p>This is a description for the third slide.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Welcome to Simple Server</h1>

        <div class="card h-100">
            <h3 class="card-header">Server Info</h3>
            <div class="card-body">
                <div class="display-4">Server is: <span class="badge badge-info">ONLINE</span></div>
                <div class="font-italic">on version: {$serverInfo.Version}</div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Players: {$serverInfo.Players}/{$serverInfo.MaxPlayers}</li>
                <li class="list-group-item">
                    <a href="#" class="btn btn-primary">Play!</a>
                </li>
            </ul>
        </div>
        <hr>


        <div class="row">
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            Custom Webshop
                        </h4>
                        <p class="card-text">You can buy all kind of items in our web shop!!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            User Friendly
                        </h4>
                        <p class="card-text">We are trying to make our website as user friendly, as possible!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            Website Settings
                        </h4>
                        <p class="card-text">You can set up your profile directly from our website!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>Simple Server Features</h2>
                <p>What this project is made of?</p>
                <ul>
                    <li>
                        <strong>High Quality servers</strong>
                    </li>
                    <li>Custom Website</li>
                    <li>Great dev team</li>
                    <li>User friendly team</li>
                    <li>We have response time 0 seconds</li>
                </ul>
                <p>If you have some questions, just go and contact us.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->
{/block}
