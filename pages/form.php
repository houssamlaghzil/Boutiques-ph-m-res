<?php
/**
 * Boutiques éphémères
 **/
?>
<title>Boutiques éphémères</title>


<link rel="stylesheet" href="../CSS/form.css">
<link rel="stylesheet" href="../import/css/CSS.css">
<link rel="stylesheet" href="../import/css/leaflet.css">
<link rel="stylesheet" href="../import/css/MarkerCluster.css">
<link rel="stylesheet" href="../import/css/MarkerCluster.Default.css">
<link rel="stylesheet" href="../import/css/css1.css">
<link rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
<link rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" href="../CSS/footer.css">


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
                                    <img src="../import/logo_boutique_ephemere.png"
                                         alt="Boutiques Ephemeres">
                                </a>
                                <a href="/" class="navbar-brand">
                                    <img src="../import/Logo_CCI_Paris_Île-de-France.svg%20(2).png"
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
                                            <a href="../in%20progress.html" class="dropdown-item  ">Map</a><a
                                                    href="../in%20progress.html"
                                                    class="dropdown-item  ">No Map Version</a></div>
                                        <!--                                        <li class="nav-item "><a href="in%20progress.html"
                                                                                                         class="nav-link  leftheader">Agents</a>
                                                                                </li>-->
                                        <li class="nav-item "><a href="../in%20progress.html"
                                                                 class="nav-link  leftheader">Contact</a>
                                        </li>
                                    </ul>

                                    <div class="d-inline my-2 my-lg-0">
                                        <ul class="navbar-nav">
                                            <li class="nav-item signin-btn">
                                                <span class="nav-link">
                                                    <span>
                                                        <a href="../pages/login.php"
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
    <div class="popup active form_contact" id="sign-popup">
        <h3>Intéressé par cette boutique ? </h3>
        <div class="popup-form form-wr ">
            <form id="popup_form_login">
                <div class="alerts-box"></div>
                <div class="form-field">
                    <input type="text" name="firstname" value="" class="form-control" id="inputfirstname"
                           placeholder="Prénom"></div>
                <div class="form-field">
                    <input type="text" name="lastname" value="" class="form-control" id="inputlastname"
                           placeholder="Nom"></div>
                <div class="form-field">
                    <input type="text" name="Email" value="" class="form-control" id="inputemail" placeholder="Email">
                </div>
                <div class="form-field">
                    <textarea type="text" name="Message" class="form-control" id="inputMessage"
                              placeholder="Email"></textarea>
                </div>
                <button type="submit" class="btn2">Envoyer<i
                            class="fa fa-spinner fa-spin fa-ajax-indicator hidden ajax-indicator"></i></button>
            </form>
        </div>
    </div>
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
                    <img src="../import/logo_boutique_ephemere.png" style="width: 100%;" alt="logo boutiques éphémère">
                    <img src="../import/Logo_CCI_Paris_Île-de-France.svg%20(2).png"
                         style="border-radius: 5000px;width: 100%;"
                         alt="logo CCI Paris IDF">
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
