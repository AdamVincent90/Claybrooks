<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="/admin/css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="/admin/css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body id="reportsPage">
<div class="" id="home">
    <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
                <h3 style="color: #dae0e5" class="tm-site-title mb-0">Hello <?php echo $_SESSION['admin']?></h3>
            <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars tm-nav-icon"></i>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto h-100">
                    <li class="nav-item">
                        <a class="nav-link" <?php echo($this->layout_name == 'admin/home' ? 'class=active' : '')?> href="/admin/home">
                            Sponsor Requests
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="nav-link" href="/admin/animals" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false" <?php echo($this->layout_name == 'admin/animals' ? 'class=active' : '')?>>
                            Animals
                        </a>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="/admin/species" role="button"
                           aria-haspopup="true" aria-expanded="false" <?php echo($this->layout_name == 'admin/species' ? 'class=active' : '')?>>
                            Species
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/staff" <?php echo($this->layout_name == 'admin/staff' ? 'class=active' : '')?>>
                            Manage Staff
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin/news" <?php echo($this->layout_name == 'admin/news' ? 'class=active' : '')?>>
                            Add News
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link d-block" href="/login/dashboard"><b>Logout</b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>