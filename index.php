<?php
/**
 * Boutiques éphémères
 **/

//Structure de page
session_start();
$idsession = session_id();
?>
<link rel="stylesheet" href="CSS/MediaScreen.css">
<link rel="stylesheet" href="CSS/header.css">
<link rel="stylesheet" href="CSS/importcss.css">


<body class='modal-backdrop-effect dissable-sticky '>
<div class="wrapper">
    <header>
        <div class="wpart">
            <div class="header widget_edit_enabled">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <a href="index-2.html" class="navbar-brand">
                                    <img src="import/logo_boutique_ephemere.png" alt="Boutiques Ephemeres CCI Seine et Marne">
                                </a>

                                <button class="menu-button" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
                                    <span class="icon-spar"></span>
                                    <span class="icon-spar"></span>
                                    <span class="icon-spar"></span>
                                </button>
                                <div class="navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto" id="main-menu">
                                        <li class="nav-item dropdown"><a href="index.php/fr/175/results.html"
                                                                         class="nav-link dropdown-toggle"
                                                                         data-toggle="dropdown" aria-haspopup="true"
                                                                         aria-expanded="false">Results</a>
                                            <div class="dropdown-menu animated">
                                                <a href="index.php/fr/6/map.html" class="dropdown-item  ">Map</a><a
                                                        href="index.php/fr/174/no_map_version.html"
                                                        class="dropdown-item  ">No Map Version</a></div>
                                        <li class="nav-item "><a href="index.php/fr/169/agents.html" class="nav-link  ">Agents</a>
                                        </li>
                                        <li class="nav-item "><a href="index.php/fr/4/contact.html" class="nav-link  ">Contact</a>
                                        </li>
                                    </ul>
                                    <div class="d-inline my-2 my-lg-0">


                                        <ul class="navbar-nav">
                                            <li class="nav-item signin-btn">

                                     <span class="nav-link">
                                        <i class="la la-sign-in"></i>
                                        <span>
                                            <a href="index.php/frontend/login/fr.html#sw_login"
                                               class="login_popup_enabled ">
                                                <b class="signin-op">S'identrifier</b>
                                            </a>
                                            or                                            <a
                                                    href="index.php/frontend/login/fr.html#sw_register" class="">
                                                <b class="reg-op">Register</b>
                                            </a>
                                        </span>



                                </span>
                                            </li>
                                            <li class="nav-item submit-btn">
                                                <a href="index.php/fquick/submission/fr.html"
                                                   class="my-2 my-sm-0 nav-link sbmt-btn">
                                                    <i class="icon-plus"></i>
                                                    <span>Submit Listing</span>
                                                </a>
                                            </li>
                                            <li class="nav-item signin-btn d-sm-block d-md-none">


                                                <div class="language-menu-mobile">
                                                    <ul>
                                                        <li class="fr"><a href="index-2.html" class="dropdown-item">&nbsp;
                                                                <img src="templates/selio/assets/img/flags/fr.webp"
                                                                     alt="fr"/>france</a></li>
                                                        <li class="en"><a href="index.php/en.html"
                                                                          class="dropdown-item">&nbsp; <img
                                                                        src="templates/selio/assets/img/flags/en.webp"
                                                                        alt="en"/>english</a></li>
                                                        <li class="hr"><a href="index.php/hr.html"
                                                                          class="dropdown-item">&nbsp; <img
                                                                        src="templates/selio/assets/img/flags/hr.webp"
                                                                        alt="hr"/>croatian</a></li>
                                                    </ul>
                                                </div><!-- /.lang menu -->
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#" title="" class="close-menu"><i class="la la-close"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!--header end-->


</body>
