<?php
include('header.html');
?>
    <section class="banner widget_edit_enabled">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content">
                        <h1 class="title-banner" id="title_on_banner">Vous cherchez une boutique éphémère ?</h1>
                    </div>
                    <div class="row banner-search search-form top-search banner-search_init">

                        <div class="banner-search_box banner-search row">

                            <div class="form_field  ">
                                <div class="form-group">
                                    <div class="winter_dropdown_tree color-secondary">
                                        <select class="btn-group " id="select_city">
                                            <option id="option_city" value="default">Sélectionner la ville</option>
                                            <form action="#"
                                                  class="row banner-search search-form top-search banner-search_init">


                                                <div class="banner-search_box banner-search row">


                                                    <div class="form_field  " style="">
                                                        <div class="form-group">
                                                            <div class="winter_dropdown_tree color-secondary">
                                                                <select class="btn-group " id="select_city">
                                                                    <!--
											<?php
                                                                    /*/*												//Connexion a la BDD
                                                                                                                    include('../connect_bases.php');

                                                                                                                    //Recuperation des polygones dans la BDD
                                                                                                                    $rq_communes = "SELECT nom_com,
                                                                                                                                    st_y(st_centroid(st_transform(geom, 4326))) As geom_y,
                                                                                                                                    st_x(st_centroid(st_transform(geom, 4326))) As geom_x
                                                                                                                                    FROM territoires_communes
                                                                                                                                    WHERE LEFT(code_com,2) LIKE '77%'
                                                                                                                                    OR LEFT(code_com,2) LIKE '75%'
                                                                                                                                    OR LEFT(code_com,2) LIKE '78%'
                                                                                                                                    OR LEFT(code_com,2) LIKE '91%'
                                                                                                                                    OR LEFT(code_com,2) LIKE '92%'
                                                                                                                                    OR LEFT(code_com,2) LIKE '93%'
                                                                                                                                    OR LEFT(code_com,2) LIKE '94%'
                                                                                                                                    OR LEFT(code_com,2) LIKE '95%'
                                                                                                                                    ORDER BY nom_com;";
                                                                                                                    $communes = $siteos_bdd->prepare($rq_communes);
                                                                                                                    $communes->execute();
                                                                                                                    $liste_communes=$communes->fetchall(PDO::FETCH_ASSOC);

                                                                                                                    foreach($liste_communes AS $commune){
                                                                                                                        echo '<option value="'.$commune['geom_y'].','.$commune['geom_x'].'">'.$commune['nom_com'].'</option>';
                                                                                                                    }
                                                                                                                */ ?>
                                            -->
                                                                </select>
                                                                <div class="list_container color-primary"
                                                                     style="display: none;">
                                                                    <div class="input-group"><input type="text"
                                                                                                    class="form-control color-secondary search_term"
                                                                                                    placeholder="Chercher"
                                                                                                    aria-describedby="basic-addon2"
                                                                                                    autocomplete="nope"><span
                                                                            class="input-group-addon color-secondary"><i
                                                                                class="loader-spiner fa fa-search"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input name="search_option_64" value="" type="text"
                                                                   id="search_option_64"
                                                                   class="form-control locationautocomplete" readonly=""
                                                                   style="display: none;">
                                                        </div><!-- /.select-wrapper -->
                                                    </div><!-- /.form-group -->
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
                                                                <option id="option_activity" value="surface">Sectionner
                                                                    l'activité
                                                                </option>
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
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--ancien form-->
                </div>
            </div>
        </div>
    </section>

    <section id="map-container" class="fullwidth-home-map wmap widget_edit_enabled">

        <div id="map">
        </div>
    </section>

    <section class="popular-listing hp2 section-padding widget_edit_enabled">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading">
                        <span>Découvrir</span>
                        <h3>Les boutiques</h3>
                    </div>
                </div>
            </div>
            <div class="row" id="list_popular">
            </div>
        </div>
    </section>

    <section class="">
        <div class="parallel_div1">
            <div class="child1_parallel_div1">
                <img src="../import/commercant.png">
            </div>
            <div class="child2_parallel_div1">
                <h1 class="h1_paralleldiv1">Vous êtes commerçant</h1>
                <p>Visualisez en un clin d'œil l'ensemble des locaux pouvant recevoir une activité éphémère.</p>
                <p>Votre CCI vous propose un programme d'accompagnement à l'installation ou au développement de votre
                    activité.</p>
            </div>
        </div>
        <div class="parallel_div1">

            <div class="child2_parallel_div1">
                <h1 class="h1_paralleldiv1">Vous êtes une collectivité</h1>
                <p>Dynamisez et animez l'activité sur votre territoire.</p>
                <p>Diversifiez votre offre en valorisant vos locaux d'activité éphémère.</p>
                <p>Votre CCI vous accompagne dans l'animation de l'activité de votre boutique éphémère et sécurise votre
                    dispositif.</p>
            </div>
            <div class="child1_parallel_div2">
                <img src="../import/collectivite.png">
            </div>
        </div>
    </section>


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
          integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
            integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
            crossorigin=""></script>
    <script src="../boutiques_fmr.js"></script>


<?php
include('footer.html');
?>