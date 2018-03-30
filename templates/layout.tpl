<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SimpleServer - {block name=title}getPageError{/block}</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

</head>

<body onload="renderArray(); startTime();">

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Simple Server</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=contact">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Other Pages
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="index.php?p=faq">FAQ</a>
                    </div>
                </li>
                {if $loggedIn}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Client Zone
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                            <a class="dropdown-item" href="index.php?p=profile">My Profile</a>
                            <a class="dropdown-item" href="index.php?p=shop">Item Shop</a>
                            <a class="dropdown-item" href="index.php?p=vip">VIP</a>
                        </div>
                    </li>
                    <!--If user is admin -->
                    {if $isAdmin}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Admin Zone
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                <a class="dropdown-item" href="index.php?p=playerpanel">Player Panel</a>
                                <a class="dropdown-item" href="index.php?p=serverpanel">Server Panel</a>
                                <a class="dropdown-item" href="index.php?p=webpanel">Web Panel</a>
                            </div>
                        </li>
                    {/if}
                    <span class="badge badge-light">Logged user: <span class="text-info">{$user.realname}</span><br><br>Coins: <span class="text-info">{$fetchCoins}</span></span>
                    <a href="index.php?p=login&action=logout" class="btn btn-danger">LogOut</a>
                {/if}
                {if not $loggedIn}
                    <li class="nav-item">
                        <form method="post" class="form-inline" action="index.php?p=login&action=login">
                            <input class="form-control" type="text" name="nick"/>
                            <input class="form-control" type="password" name="passwd" />
                            <input type="submit" class="btn btn-info" value="LOGIN"/>
                        </form>
                    </li>
                {/if}
            </ul>
        </div>
    </div>
</nav>

{block name=body}{/block}

<footer class="py-5 bg-dark">
    <div class="container">

        <p class="m-0 text-center text-white">
            <span class="text-white">Copyright &copy Jandy</span><br>
            <span class="text-info" id="laws"></span><br>
            <span class="text-warning" id="time"></span>
        </p>

    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js"></script>

</body>

</html>