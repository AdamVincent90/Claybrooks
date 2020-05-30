<!-- Generic header content -->

<!-- PHP logic displays the correct title of the page -->
<!DOCTYPE html>
<head>
    <title>ClayBrooks Zoo: <?php echo $this->layout_title; ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
</head>
<body class="landing is-preload">
<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1><a href="index.html">Spectral</a></h1>
        <nav id="nav">
            <ul>
                <li class="special">
                    <a href="#menu" class="menuToggle"><span>Menu</span></a>
                    <div id="menu">
                        <ul>
                            <li><a href="/page/home" <?php echo($this->layout_name == 'home/home' ? 'class=active' : '') ?> >Home</a></li>
                            <li><a href="/animal/main" <?php echo($this->layout_name == 'animal/main' ? 'class=active' : '') ?>>Our Animals</a></li>
                            <li><a href="/page/about" <?php echo($this->layout_name == 'home/about' ? 'class=active' : '') ?>>About Us</a>
                            </li>
                            <li><a href="/page/contact" <?php echo($this->layout_name == 'home/contact' ? 'class=active' : '') ?>>Business Sponsors</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <h2>Claybrook's Zoo</h2>
            <ul class="actions special">
                <li><a href="#" class="button primary">View Events</a></li>
            </ul>
        </div>
    </section>

    <section id="one" class="wrapper style1 special">
        <div class="inner">
            <header class="major">






