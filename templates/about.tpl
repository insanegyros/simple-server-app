{extends file='layout.tpl'}
{block name=title}Team{/block}
{block name=body}

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">About
            <small>Our Backend</small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">About</li>
        </ol>

        <!-- Intro Content -->
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-4" src="http://placehold.it/750x450" alt="">
            </div>
            <div class="col-lg-6">
                <h2>About Simple server</h2>
                <p>This is Simple Server</p>
                <p>It makes Servers Simple.</p>
                <p>Be like Simple Server</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        <h2>Our Team</h2>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="https://minotar.net/bust/JandyCZ/750.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title">JandyCZ</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Owner/Dev</h6>
                        <p class="card-text">JandyCZ is proud owner of Simple Server. He put a lot of effort in his work.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">Contact</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="https://minotar.net/bust/SilenZ/750.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title">SilenZ</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Side Dev</h6>
                        <p class="card-text">SilenZ was helping JandyCZ with development of this project.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">Contact</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="https://minotar.net/bust/Ghorien001/750.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Ghorien001</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Community Manager</h6>
                        <p class="card-text">He is answering questions. Ask him one...</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
{/block}