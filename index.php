<?php
/**
 * Boutiques éphémères
 **/

//Structure de page
session_start();
$idsession = session_id();
?>
<title>Boutiques éphémères</title>
<link rel="stylesheet" href="../CSS/CSS_to_manage_front/css_var.css">
<link rel="stylesheet" href="import/css/CSS.css">
<link rel="stylesheet" href="import/css/leaflet.css">
<link rel="stylesheet" href="import/css/MarkerCluster.css">
<link rel="stylesheet" href="import/css/MarkerCluster.Default.css">
<link rel="stylesheet" href="import/css/css1.css">
<link rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
<link rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" href="CSS/footer.css">

<body class='modal-backdrop-effect dissable-sticky '>
<div class="wrapper">
    <header>
        <div class="wpart">
            <div class="header widget_edit_enabled">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-xl-12_header">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <a href="/" class="navbar-brand">
                                    <img src="import/logo_boutique_ephemere.png"
                                         alt="Boutiques Ephemeres">
                                </a>
                                <a href="/" class="navbar-brand">
                                    <img src="import/Logo_CCI_Paris_Île-de-France.svg%20(2).png"
                                         alt=" CCI ">
                                </a>

                                <button class="menu-button" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
                                    <span class="icon-spar"></span>
                                    <span class="icon-spar"></span>
                                    <span class="icon-spar"></span>
                                </button>
                                <div class="navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto" id="main-menu">
                                        <div class="dropdown-menu animated">
                                            <a href="in%20progress.html" class="dropdown-item  ">Map</a><a
                                                    href="in%20progress.html"
                                                    class="dropdown-item  ">No Map Version</a></div>
                                        <!--                                        <li class="nav-item "><a href="in%20progress.html"
                                                                                                         class="nav-link  leftheader">Agents</a>
                                                                                </li>-->
                                        <li class="nav-item "><a href="in%20progress.html"
                                                                 class="nav-link  leftheader">Contact</a>
                                        </li>
                                    </ul>

                                    <div class="d-inline my-2 my-lg-0">
                                        <ul class="navbar-nav">
                                            <li class="nav-item signin-btn">
                                                <span class="nav-link">
                                                    <span>
                                                        <a href="pages/login.php"
                                                           class="login_popup_enabled ">
                                                                <b class="signin-op">Espace membre</b>
                                                        </a>
                                                    </span>
                                                </span>
                                            </li>

                                            <!--                                            <li class="nav-item submit-btn">
                                                                                            <a href="in%20progress.html"
                                                                                               class="my-2 my-sm-0 nav-link sbmt-btn">
                                                                                                <span class="spanitem"><i class="las la-plus-circle"></i>Submit Listing</span>
                                                                                            </a>
                                                                                        </li>-->
                                            <li class="nav-item signin-btn d-sm-block d-md-none">


                                                <div class="language-menu-mobile">
                                                    <ul>
                                                        <li class="fr"><a href="in%20progress.html"
                                                                          class="dropdown-item">&nbsp;
                                                                <img src="templates/selio/assets/img/flags/fr.webp"
                                                                     alt="fr"/>france</a></li>
                                                        <li class="en"><a href="in%20progress.html"
                                                                          class="dropdown-item">&nbsp; <img
                                                                        src="templates/selio/assets/img/flags/en.webp"
                                                                        alt="en"/>english</a></li>
                                                        <li class="hr"><a href="in%20progress.html"
                                                                          class="dropdown-item">&nbsp; <img
                                                                        src="templates/selio/assets/img/flags/hr.webp"
                                                                        alt="hr"/>croatian</a></li>
                                                    </ul>
                                                </div><!-- /.lang menu -->
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#" title="" class="close-menu"><i class="las la-times"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!--header end-->

    <section class="banner widget_edit_enabled">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content">
                        <h1 class="title-banner" id="title_on_banner">Vous cherchez une boutique éphémère ?</h1>
                    </div>
                    <form action="#" class="row banner-search search-form top-search banner-search_init">


                        <div class="banner-search_box banner-search row">


                            <div class="form_field  " style="">
                                <div class="form-group">
                                    <div class="winter_dropdown_tree color-secondary">
                                        <select class="btn-group " id="select_city">
                                            <option id="option_city" value="activite">Sectionner la ville</option>
                                        </select>
                                        <div class="list_container color-primary" style="display: none;">
                                            <div class="input-group"><input type="text"
                                                                            class="form-control color-secondary search_term"
                                                                            placeholder="Chercher"
                                                                            aria-describedby="basic-addon2"
                                                                            autocomplete="nope"><span
                                                        class="input-group-addon color-secondary"><i
                                                            class="loader-spiner fa fa-search"></i></span></div>
                                        </div>
                                    </div>
                                    <input name="search_option_64" value="" type="text" id="search_option_64"
                                           class="form-control locationautocomplete" readonly="" style="display: none;">
                                </div><!-- /.select-wrapper -->
                            </div><!-- /.form-group -->

                            <!--                            <ul class="menu-onmap tabbed-selector">
                                                            <li class="all-button active">
                                                                <label class="if-filter">
                                                                    Tout afficher <input type="radio" rel="Tout" name="search_option_4" value="">
                                                                </label>
                                                            </li>
                                                        </ul>-->

                            <style>
                                .banner-content {
                                    margin-bottom: 65px;
                                }

                                .form_sec {
                                    padding-top: 70px;
                                }

                                @media (max-width: 767px) {
                                    .banner-content {
                                        margin-bottom: 20px;
                                    }
                                }
                            </style>


                            <div class="form_field  sf_input">
                                <div class="form-group  field_search_3" style="">

                                    <select id="select_activity" class="drop-menu">
                                        <option id="option_activity" value="surface">Sectionner l'activité</option>
                                    </select>
                                </div><!-- /.form-group -->
                            </div>


                            <div class="form_field srch-btn  form_field_save ">
                                <a href="#" class="btn btn-outline-primary sw-search-start">
                                    <i class="las la-search"></i>
                                    <span>Chercher</span>
                                    <i class="fa fa-spinner fa-spin fa-ajax-indicator hidden"></i>
                                </a>
                                <!--                                <button type="button" id="search-save"
                                                                        class="btn btn-custom btn-savesearch btn-custom-secondary btn-icon"><i
                                                                            class="las la-save icon-white fa-ajax-hide"></i><span>sauvgarde</span><i
                                                                            class="las la-circle-notch fa-ajax-indicator" style="display: none;"></i>
                                                                </button>-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="map-container" class="fullwidth-home-map wmap widget_edit_enabled">
        <h3 class="vis-hid">Invisible</h3>
        <div id="main-map"
             class="map leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
             tabindex="0" style="position: relative;">
            <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(-326px, 0px, 0px);">
                <div class="leaflet-pane leaflet-tile-pane">
                    <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                        <div class="leaflet-tile-container leaflet-zoom-animated"
                             style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt=""
                                                                                                       role="presentation"
                                                                                                       src="https://a.tile.openstreetmap.org/11/1040/706.png"
                                                                                                       class="leaflet-tile leaflet-tile-loaded"
                                                                                                       style="width: 256px; height: 256px; transform: translate3d(760px, 6px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://b.tile.openstreetmap.org/11/1041/706.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1016px, 6px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://c.tile.openstreetmap.org/11/1040/705.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(760px, -250px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://a.tile.openstreetmap.org/11/1041/705.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1016px, -250px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://b.tile.openstreetmap.org/11/1040/707.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(760px, 262px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://c.tile.openstreetmap.org/11/1041/707.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1016px, 262px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://c.tile.openstreetmap.org/11/1039/706.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(504px, 6px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://c.tile.openstreetmap.org/11/1042/706.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1272px, 6px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://b.tile.openstreetmap.org/11/1039/705.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(504px, -250px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://b.tile.openstreetmap.org/11/1042/705.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1272px, -250px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://a.tile.openstreetmap.org/11/1039/707.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(504px, 262px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://a.tile.openstreetmap.org/11/1042/707.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1272px, 262px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://b.tile.openstreetmap.org/11/1038/706.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(248px, 6px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://a.tile.openstreetmap.org/11/1043/706.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1528px, 6px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://a.tile.openstreetmap.org/11/1038/705.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(248px, -250px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://c.tile.openstreetmap.org/11/1043/705.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1528px, -250px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://c.tile.openstreetmap.org/11/1038/707.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(248px, 262px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://b.tile.openstreetmap.org/11/1043/707.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1528px, 262px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://a.tile.openstreetmap.org/11/1037/706.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(-8px, 6px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://b.tile.openstreetmap.org/11/1044/706.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1784px, 6px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://c.tile.openstreetmap.org/11/1037/705.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(-8px, -250px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://a.tile.openstreetmap.org/11/1044/705.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1784px, -250px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://b.tile.openstreetmap.org/11/1037/707.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(-8px, 262px, 0px); opacity: 1;"><img
                                    alt="" role="presentation" src="https://c.tile.openstreetmap.org/11/1044/707.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1784px, 262px, 0px); opacity: 1;">
                        </div>
                    </div>
                    <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                        <div class="leaflet-tile-container leaflet-zoom-animated"
                             style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt=""
                                                                                                       role="presentation"
                                                                                                       src="https://cartodb-basemaps-a.global.ssl.fastly.net/light_all/11/1040/706.png"
                                                                                                       class="leaflet-tile leaflet-tile-loaded"
                                                                                                       style="width: 256px; height: 256px; transform: translate3d(760px, 6px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-b.global.ssl.fastly.net/light_all/11/1041/706.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1016px, 6px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-c.global.ssl.fastly.net/light_all/11/1040/705.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(760px, -250px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-a.global.ssl.fastly.net/light_all/11/1041/705.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1016px, -250px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-b.global.ssl.fastly.net/light_all/11/1040/707.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(760px, 262px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-c.global.ssl.fastly.net/light_all/11/1041/707.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1016px, 262px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-c.global.ssl.fastly.net/light_all/11/1039/706.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(504px, 6px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-c.global.ssl.fastly.net/light_all/11/1042/706.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1272px, 6px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-b.global.ssl.fastly.net/light_all/11/1039/705.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(504px, -250px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-b.global.ssl.fastly.net/light_all/11/1042/705.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1272px, -250px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-a.global.ssl.fastly.net/light_all/11/1039/707.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(504px, 262px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-a.global.ssl.fastly.net/light_all/11/1042/707.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1272px, 262px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-b.global.ssl.fastly.net/light_all/11/1038/706.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(248px, 6px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-a.global.ssl.fastly.net/light_all/11/1043/706.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1528px, 6px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-a.global.ssl.fastly.net/light_all/11/1038/705.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(248px, -250px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-c.global.ssl.fastly.net/light_all/11/1043/705.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1528px, -250px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-c.global.ssl.fastly.net/light_all/11/1038/707.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(248px, 262px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-b.global.ssl.fastly.net/light_all/11/1043/707.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1528px, 262px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-a.global.ssl.fastly.net/light_all/11/1037/706.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(-8px, 6px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-b.global.ssl.fastly.net/light_all/11/1044/706.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1784px, 6px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-c.global.ssl.fastly.net/light_all/11/1037/705.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(-8px, -250px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-a.global.ssl.fastly.net/light_all/11/1044/705.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1784px, -250px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-b.global.ssl.fastly.net/light_all/11/1037/707.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(-8px, 262px, 0px); opacity: 1;"><img
                                    alt="" role="presentation"
                                    src="https://cartodb-basemaps-c.global.ssl.fastly.net/light_all/11/1044/707.png"
                                    class="leaflet-tile leaflet-tile-loaded"
                                    style="width: 256px; height: 256px; transform: translate3d(1784px, 262px, 0px); opacity: 1;">
                        </div>
                    </div>
                </div>
                <div class="leaflet-pane leaflet-shadow-pane"></div>
                <div class="leaflet-pane leaflet-overlay-pane"></div>
                <div class="leaflet-pane leaflet-marker-pane">
                    <div class="leaflet-marker-icon open_steet_map_marker google_marker leaflet-zoom-animated leaflet-interactive"
                         tabindex="0"
                         style="margin-left: -20px; margin-top: -46px; width: 40px; height: 46px; opacity: 1; transform: translate3d(1468px, 294px, 0px); z-index: 294;">
                        <div class="marker-container">
                            <div class="marker-card">
                                <div class="front face"><i class="las la-building"></i></div>
                                <div class="back face"><i class="las la-building"></i></div>
                                <div class="marker-arrow"></div>
                            </div>
                        </div>
                    </div>
                    <div class="leaflet-marker-icon open_steet_map_marker google_marker leaflet-zoom-animated leaflet-interactive"
                         tabindex="0"
                         style="margin-left: -20px; margin-top: -46px; width: 40px; height: 46px; opacity: 1; transform: translate3d(435px, 147px, 0px); z-index: 147;">
                        <div class="marker-container">
                            <div class="marker-card">
                                <div class="front face"><i class="las la-building"></i></div>
                                <div class="back face"><i class="las la-building"></i></div>
                                <div class="marker-arrow"></div>
                            </div>
                        </div>
                    </div>
                    <div class="leaflet-marker-icon open_steet_map_marker google_marker leaflet-zoom-animated leaflet-interactive"
                         tabindex="0"
                         style="margin-left: -20px; margin-top: -46px; width: 40px; height: 46px; opacity: 1; transform: translate3d(539px, 341px, 0px); z-index: 341;">
                        <div class="marker-container">
                            <div class="marker-card">
                                <div class="front face"><i class="las la-building"></i></div>
                                <div class="back face"><i class="las la-building"></i></div>
                                <div class="marker-arrow"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="leaflet-pane leaflet-tooltip-pane"></div>
                <div class="leaflet-pane leaflet-popup-pane"></div>
                <div class="leaflet-proxy leaflet-zoom-animated"
                     style="transform: translate3d(266432px, 180974px, 0px) scale(1024);"></div>
            </div>
            <div class="leaflet-control-container">
                <div class="leaflet-top leaflet-left">
                    <div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in"
                                                                                     href="#" title="Zoom in"
                                                                                     role="button" aria-label="Zoom in">+</a><a
                                class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button"
                                aria-label="Zoom out">−</a></div>
                </div>
                <div class="leaflet-top leaflet-right"></div>
                <div class="leaflet-bottom leaflet-left"></div>
                <div class="leaflet-bottom leaflet-right">
                    <div class="leaflet-control-attribution leaflet-control"><a href="http://leafletjs.com"
                                                                                title="A JS library for interactive maps">Leaflet</a>
                        | © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular-listing hp2 section-padding widget_edit_enabled">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading">
                        <span>Découvrir</span>
                        <h3>Les plus populaires</h3>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <a id="link_to_detail_page1" href="pages/detail.php"
                           title="La Passerelle">
                            <div class="img-block ">
                                <div class="overlay"></div>
                                <img id="img_first_shop1"
                                     src="https://boutiquesephemeres.cdconnect.fr/files/strict_cache/851x678boutique_moissy_cramayel_01.jpeg"
                                     alt="La Passerelle" class="img-fluid">
                                <div class="rate-info">
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <a id="link_to_detail_page_in_card_body1" href="pages/detail.php"
                               title="La Passerelle">
                                <h3 id="title_popular_shop1">"La Passerelle"</h3>
                                <p id="address_popular_shop1">"<i class="las la-map-marked"></i>251 avenue philippe bur
                                    77550 moissy-cramayel"</p>
                            </a>
                            <ul>
                                <li id="activity_popular_shop1" class="">"activité"</li>
                                <li class="">- -</li>
                                <li id="surface_popular_shop1" class="">"Surface 75 m2"</li>
                            </ul>
                        </div>
                        <a id="link_to_detail_page_out_card_body1" href="pages/detail.php"
                           title="La Passerelle" class="ext-link"></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <a id="link_to_detail_page2" href="in%20progress.html"
                           title="Le Dix Neuf">
                            <div class="img-block ">
                                <div class="overlay"></div>
                                <img src="https://boutiquesephemeres.cdconnect.fr/files/strict_cache/851x678147_1png.jpeg"
                                     alt="Le Dix Neuf" class="img-fluid">
                                <div class="rate-info">
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <a id="link_to_detail_page_in_card_body2" href="in%20progress.html"
                               title="Le Dix Neuf">
                                <h3 id="title_popular_shop2">"Le Dix Neuf"</h3>
                                <p id="address_popular_shop2">"<i class="las la-map-marked"></i></i>19 rue Pouteau 77000
                                    Melun"</p>
                            </a>
                            <ul>
                                <li id="activity_popular_shop2" class="">"activité"</li>
                                <li class="">- -</li>
                                <li id="surface_popular_shop2" class="">"Surface 60 m2"</li>
                            </ul>
                        </div>
                        <a id="link_to_detail_page_out_card_body2" href="in%20progress.html"
                           title="Le Dix Neuf" class="ext-link"></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <a id="link_to_detail_page3" href="in%20progress.html"
                           title="En cours">
                            <div class="img-block ">
                                <div class="overlay"></div>
                                <span class="listing_badge badge-en_projet"></span> <img id="img_first_shop3"
                                                                                         src="https://boutiquesephemeres.cdconnect.fr/files/strict_cache/851x678no_image.jpg"
                                                                                         alt="En cours"
                                                                                         class="img-fluid">
                                <div class="rate-info">
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <a id="link_to_detail_page_in_card_body3" href="in%20progress.html"
                               title="En cours">
                                <h3 id="title_first_shop3">"En cours"</h3>
                                <p id="address_popular_shop3">"<i class="las la-map-marked"></i>77160 Provins"</p>
                            </a>
                            <ul>
                                <li id="activity_popular_shop3" class="">"activité"</li>
                                <li class="">- -</li>
                                <li id="surface_popular_shop3" class="">"Surface - m2"</li>
                            </ul>
                        </div>
                        <a id="" href="in%20progress.html"
                           title="En cours" class="ext-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="parallel_div1">
            <div class="child1_parallel_div1">
                <img src="import/11062b_f16f404da81a4c65b25915cb334fe320_mv2.png">
            </div>
            <div class="child2_parallel_div1">
                <h1 class="h1_paralleldiv1">Vous êtes commerçant</h1>
                <p>consiliis armisque regem

                    Ex his quidam aeternitati se commendari posse per statuas aestimantes eas ardenter adfectant quasi
                    plus praemii de figmentis aereis sensu carentibus adepturi, quam ex conscientia honeste recteque
                    factorum, easque auro curant inbracteari, quod Acilio Glabrioni delatum est primo, cum consiliis
                    armisque regem superasset Antiochum. quam autem sit pulchrum exigua haec spernentem et minima ad
                    ascensus verae gloriae tendere longos et arduos, ut memorat vates Ascraeus, Censorius Cato
                    monstravit. qui interrogatus quam ob rem inter multos... statuam non haberet malo inquit ambigere
                    bonos quam ob rem id non meruerim, quam quod est gravius cur inpetraverim mussitare.</p>
            </div>
        </div>
        <div class="parallel_div1">

            <div class="child2_parallel_div1">
                <h1 class="h1_paralleldiv1">Vous êtes une collectivité</h1>
                <p>consiliis armisque regem

                    Ex his quidam aeternitati se commendari posse per statuas aestimantes eas ardenter adfectant quasi
                    plus praemii de figmentis aereis sensu carentibus adepturi, quam ex conscientia honeste recteque
                    factorum, easque auro curant inbracteari, quod Acilio Glabrioni delatum est primo, cum consiliis
                    armisque regem superasset Antiochum. quam autem sit pulchrum exigua haec spernentem et minima ad
                    ascensus verae gloriae tendere longos et arduos, ut memorat vates Ascraeus, Censorius Cato
                    monstravit. qui interrogatus quam ob rem inter multos... statuam non haberet malo inquit ambigere
                    bonos quam ob rem id non meruerim, quam quod est gravius cur inpetraverim mussitare.</p>
            </div>
            <div class="child1_parallel_div2">
                <img src="import/11062b_1a567fd16b6a423b86486a789913cae1_mv2.png">
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Informations légales</h4>
                    <ul>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Nos services</a></li>
                        <li><a href="#">Mentions légales </a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Aide</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Nos réseaux</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <br>
                    <br>
                    <br>
                    <p style="display: block; color: white;">Ce site est une initiative <br>de la CCI SEINE ET MARNE</p>
                </div>
                <div class="footer-col">
                    <img src="import/logo_boutique_ephemere.png" style="width: 100%;" alt="logo boutiques éphémère">
                    <img src="import/Logo_CCI_Paris_Île-de-France.svg%20(2).png" style="border-radius: 5000px;width: 100%;"
                         alt="logo CCI Paris IDF">
                </div>
            </div>
        </div>
    </footer>


</body>
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css">
<script src="https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css">
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css">

<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <div class="description"></div>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>