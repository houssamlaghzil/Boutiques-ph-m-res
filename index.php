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
<link rel="stylesheet" href="CSS/section.css">
<link rel="stylesheet" href="CSS/sectionpopulaire.css">


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
                                    <img src="import/logo_boutique_ephemere.png"
                                         alt="Boutiques Ephemeres CCI Seine et Marne">
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
                                                                         class="nav-link dropdown-toggle leftheader"
                                                                         data-toggle="dropdown" aria-haspopup="true"
                                                                         aria-expanded="false">Results</a>
                                            <div class="dropdown-menu animated">
                                                <a href="index.php/fr/6/map.html" class="dropdown-item  ">Map</a><a
                                                        href="index.php/fr/174/no_map_version.html"
                                                        class="dropdown-item  ">No Map Version</a></div>
                                        <li class="nav-item "><a href="index.php/fr/169/agents.html"
                                                                 class="nav-link  leftheader">Agents</a>
                                        </li>
                                        <li class="nav-item "><a href="index.php/fr/4/contact.html"
                                                                 class="nav-link  leftheader">Contact</a>
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
                                                            or
                                                        <a href="index.php/frontend/login/fr.html#sw_register" class="">
                                                            <b class="reg-op">Register</b>
                                                        </a>
                                                    </span>
                                                </span>
                                            </li>

                                            <li class="nav-item submit-btn">
                                                <a href="index.php/fquick/submission/fr.html"
                                                   class="my-2 my-sm-0 nav-link sbmt-btn">
                                                    <i class="icon-plus"></i>
                                                    <span class="spanitem">Submit Listing</span>
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

    <section class="banner widget_edit_enabled">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content">
                        <h1 class="title-banner">Vous cherchez une boutique éphémère ?</h1>
                    </div>
                    <form action="#" class="row banner-search search-form top-search banner-search_init">


                        <div class="banner-search_box banner-search row">


                            <div class="form_field  " style="">
                                <div class="form-group">
                                    <div class="winter_dropdown_tree color-secondary">
                                        <div class="btn-group ">
                                            <button class="btn btn-default color-secondary" type="button">Localisation
                                            </button>
                                            <button type="button"
                                                    class="btn btn-default dropdown-toggle color-secondary"><span
                                                        class="glyphicon glyphicon-menu-down"></span></button>
                                        </div>
                                        <div class="list_container color-primary" style="display: none;">
                                            <div class="list_scroll">
                                                <ul class="list_items">
                                                    <li key="">Localisation</li>
                                                    <li key="France -">France</li>
                                                    <li key="France - Abbeville -">&nbsp;&nbsp;|-Abbeville</li>
                                                    <li key="France - Achères -">&nbsp;&nbsp;|-Achères</li>
                                                    <li key="France - Agde -">&nbsp;&nbsp;|-Agde</li>
                                                    <li key="France - Agen -">&nbsp;&nbsp;|-Agen</li>
                                                    <li key="France - Aix-en-Provence -">&nbsp;&nbsp;|-Aix-en-Provence
                                                    </li>
                                                    <li key="France - Aix-les-Bains -">&nbsp;&nbsp;|-Aix-les-Bains</li>
                                                    <li key="France - Ajaccio -">&nbsp;&nbsp;|-Ajaccio</li>
                                                    <li key="France - Albi -">&nbsp;&nbsp;|-Albi</li>
                                                    <li key="France - Alençon -">&nbsp;&nbsp;|-Alençon</li>
                                                    <li key="France - Alès -">&nbsp;&nbsp;|-Alès</li>
                                                    <li key="France - Alfortville -">&nbsp;&nbsp;|-Alfortville</li>
                                                    <li key="France - Allauch -">&nbsp;&nbsp;|-Allauch</li>
                                                    <li key="France - Amiens -">&nbsp;&nbsp;|-Amiens</li>
                                                    <li key="France - Angers -">&nbsp;&nbsp;|-Angers</li>
                                                    <li key="France - Anglet -">&nbsp;&nbsp;|-Anglet</li>
                                                    <li key="France - Angoulême -">&nbsp;&nbsp;|-Angoulême</li>
                                                    <li key="France - Annecy -">&nbsp;&nbsp;|-Annecy</li>
                                                    <li key="France - Annemasse -">&nbsp;&nbsp;|-Annemasse</li>
                                                    <li key="France - Antibes -">&nbsp;&nbsp;|-Antibes</li>
                                                    <li key="France - Antony -">&nbsp;&nbsp;|-Antony</li>
                                                    <li key="France - Arcueil -">&nbsp;&nbsp;|-Arcueil</li>
                                                    <li key="France - Argenteuil -">&nbsp;&nbsp;|-Argenteuil</li>
                                                    <li key="France - Arles -">&nbsp;&nbsp;|-Arles</li>
                                                    <li key="France - Armentières -">&nbsp;&nbsp;|-Armentières</li>
                                                    <li key="France - Arras -">&nbsp;&nbsp;|-Arras</li>
                                                    <li key="France - Athis-Mons -">&nbsp;&nbsp;|-Athis-Mons</li>
                                                    <li key="France - Aubagne -">&nbsp;&nbsp;|-Aubagne</li>
                                                    <li key="France - Aubervilliers -">&nbsp;&nbsp;|-Aubervilliers</li>
                                                    <li key="France - Auch -">&nbsp;&nbsp;|-Auch</li>
                                                    <li key="France - Aulnay-sous-Bois -">
                                                        &nbsp;&nbsp;|-Aulnay-sous-Bois
                                                    </li>
                                                    <li key="France - Aurillac -">&nbsp;&nbsp;|-Aurillac</li>
                                                    <li key="France - Auxerre -">&nbsp;&nbsp;|-Auxerre</li>
                                                    <li key="France - Avignon -">&nbsp;&nbsp;|-Avignon</li>
                                                    <li key="France - Bagneux -">&nbsp;&nbsp;|-Bagneux</li>
                                                    <li key="France - Bagnolet -">&nbsp;&nbsp;|-Bagnolet</li>
                                                    <li key="France - Bastia -">&nbsp;&nbsp;|-Bastia</li>
                                                    <li key="France - Bayonne -">&nbsp;&nbsp;|-Bayonne</li>
                                                    <li key="France - Beaune -">&nbsp;&nbsp;|-Beaune</li>
                                                    <li key="France - Beausoleil -">&nbsp;&nbsp;|-Beausoleil</li>
                                                    <li key="France - Beauvais -">&nbsp;&nbsp;|-Beauvais</li>
                                                    <li key="France - Bègles -">&nbsp;&nbsp;|-Bègles</li>
                                                    <li key="France - Belfort -">&nbsp;&nbsp;|-Belfort</li>
                                                    <li key="France - Bergerac -">&nbsp;&nbsp;|-Bergerac</li>
                                                    <li key="France - Besançon -">&nbsp;&nbsp;|-Besançon</li>
                                                    <li key="France - Béthune -">&nbsp;&nbsp;|-Béthune</li>
                                                    <li key="France - Béziers -">&nbsp;&nbsp;|-Béziers</li>
                                                    <li key="France - Bezons -">&nbsp;&nbsp;|-Bezons</li>
                                                    <li key="France - Biarritz -">&nbsp;&nbsp;|-Biarritz</li>
                                                    <li key="France - Blagnac -">&nbsp;&nbsp;|-Blagnac</li>
                                                    <li key="France - Blois -">&nbsp;&nbsp;|-Blois</li>
                                                    <li key="France - Bobigny -">&nbsp;&nbsp;|-Bobigny</li>
                                                    <li key="France - Bois-Colombes -">&nbsp;&nbsp;|-Bois-Colombes</li>
                                                    <li key="France - Bondy -">&nbsp;&nbsp;|-Bondy</li>
                                                    <li key="France - Bordeaux -">&nbsp;&nbsp;|-Bordeaux</li>
                                                    <li key="France - Boulogne-Billancourt -">&nbsp;&nbsp;|-Boulogne-Billancourt</li>
                                                    <li key="France - Boulogne-sur-Mer -">
                                                        &nbsp;&nbsp;|-Boulogne-sur-Mer
                                                    </li>
                                                    <li key="France - Bourg-en-Bresse -">&nbsp;&nbsp;|-Bourg-en-Bresse
                                                    </li>
                                                    <li key="France - Bourg-la-Reine -">&nbsp;&nbsp;|-Bourg-la-Reine
                                                    </li>
                                                    <li key="France - Bourges -">&nbsp;&nbsp;|-Bourges</li>
                                                    <li key="France - Bourgoin-Jallieu -">
                                                        &nbsp;&nbsp;|-Bourgoin-Jallieu
                                                    </li>
                                                    <li key="France - Brest -">&nbsp;&nbsp;|-Brest</li>
                                                    <li key="France - Brétigny-sur-Orge -">&nbsp;&nbsp;|-Brétigny-sur-Orge</li>
                                                    <li key="France - Brive-la-Gaillarde -">&nbsp;&nbsp;|-Brive-la-Gaillarde</li>
                                                    <li key="France - Bron -">&nbsp;&nbsp;|-Bron</li>
                                                    <li key="France - Brunoy -">&nbsp;&nbsp;|-Brunoy</li>
                                                    <li key="France - Bussy-Saint-Georges -">&nbsp;&nbsp;|-Bussy-Saint-Georges</li>
                                                    <li key="France - Cachan -">&nbsp;&nbsp;|-Cachan</li>
                                                    <li key="France - Caen -">&nbsp;&nbsp;|-Caen</li>
                                                    <li key="France - Cagnes-sur-Mer -">&nbsp;&nbsp;|-Cagnes-sur-Mer
                                                    </li>
                                                    <li key="France - Calais -">&nbsp;&nbsp;|-Calais</li>
                                                    <li key="France - Caluire-et-Cuire -">
                                                        &nbsp;&nbsp;|-Caluire-et-Cuire
                                                    </li>
                                                    <li key="France - Cambrai -">&nbsp;&nbsp;|-Cambrai</li>
                                                    <li key="France - Cannes -">&nbsp;&nbsp;|-Cannes</li>
                                                    <li key="France - Carcassonne -">&nbsp;&nbsp;|-Carcassonne</li>
                                                    <li key="France - Carpentras -">&nbsp;&nbsp;|-Carpentras</li>
                                                    <li key="France - Carrières-sur-Seine -">&nbsp;&nbsp;|-Carrières-sur-Seine</li>
                                                    <li key="France - Castelnau-le-Lez -">
                                                        &nbsp;&nbsp;|-Castelnau-le-Lez
                                                    </li>
                                                    <li key="France - Castres -">&nbsp;&nbsp;|-Castres</li>
                                                    <li key="France - Cavaillon -">&nbsp;&nbsp;|-Cavaillon</li>
                                                    <li key="France - Cenon -">&nbsp;&nbsp;|-Cenon</li>
                                                    <li key="France - Cergy -">&nbsp;&nbsp;|-Cergy</li>
                                                    <li key="France - Challans -">&nbsp;&nbsp;|-Challans</li>
                                                    <li key="France - Chalon-sur-Saône -">
                                                        &nbsp;&nbsp;|-Chalon-sur-Saône
                                                    </li>
                                                    <li key="France - Châlons-en-Champagne -">&nbsp;&nbsp;|-Châlons-en-Champagne</li>
                                                    <li key="France - Chambéry -">&nbsp;&nbsp;|-Chambéry</li>
                                                    <li key="France - Chamonix-Mont-Blanc -">&nbsp;&nbsp;|-Chamonix-Mont-Blanc</li>
                                                    <li key="France - Champigny-sur-Marne -">&nbsp;&nbsp;|-Champigny-sur-Marne</li>
                                                    <li key="France - Champs-Sur-Marne -">
                                                        &nbsp;&nbsp;|-Champs-Sur-Marne
                                                    </li>
                                                    <li key="France - Charenton-le-Pont -">&nbsp;&nbsp;|-Charenton-le-Pont</li>
                                                    <li key="France - Charleville-Mézières -">&nbsp;&nbsp;|-Charleville-Mézières</li>
                                                    <li key="France - Chartres -">&nbsp;&nbsp;|-Chartres</li>
                                                    <li key="France - Châteauroux -">&nbsp;&nbsp;|-Châteauroux</li>
                                                    <li key="France - Châtellerault -">&nbsp;&nbsp;|-Châtellerault</li>
                                                    <li key="France - Châtenay-Malabry -">
                                                        &nbsp;&nbsp;|-Châtenay-Malabry
                                                    </li>
                                                    <li key="France - Châtillon -">&nbsp;&nbsp;|-Châtillon</li>
                                                    <li key="France - Chatou -">&nbsp;&nbsp;|-Chatou</li>
                                                    <li key="France - Chaumont -">&nbsp;&nbsp;|-Chaumont</li>
                                                    <li key="France - Chaville -">&nbsp;&nbsp;|-Chaville</li>
                                                    <li key="France - Chelles -">&nbsp;&nbsp;|-Chelles</li>
                                                    <li key="France - Cherbourg -">&nbsp;&nbsp;|-Cherbourg</li>
                                                    <li key="France - Chilly-Mazarin -">&nbsp;&nbsp;|-Chilly-Mazarin
                                                    </li>
                                                    <li key="France - Choisy-le-Roi -">&nbsp;&nbsp;|-Choisy-le-Roi</li>
                                                    <li key="France - Cholet -">&nbsp;&nbsp;|-Cholet</li>
                                                    <li key="France - Clamart -">&nbsp;&nbsp;|-Clamart</li>
                                                    <li key="France - Clermont-Ferrand -">
                                                        &nbsp;&nbsp;|-Clermont-Ferrand
                                                    </li>
                                                    <li key="France - Clichy -">&nbsp;&nbsp;|-Clichy</li>
                                                    <li key="France - Clichy-sous-Bois -">
                                                        &nbsp;&nbsp;|-Clichy-sous-Bois
                                                    </li>
                                                    <li key="France - Colmar -">&nbsp;&nbsp;|-Colmar</li>
                                                    <li key="France - Colombes -">&nbsp;&nbsp;|-Colombes</li>
                                                    <li key="France - Colomiers -">&nbsp;&nbsp;|-Colomiers</li>
                                                    <li key="France - Combs-la-Ville -">&nbsp;&nbsp;|-Combs-la-Ville
                                                    </li>
                                                    <li key="France - Comines -">&nbsp;&nbsp;|-Comines</li>
                                                    <li key="France - Compiègne -">&nbsp;&nbsp;|-Compiègne</li>
                                                    <li key="France - Conflans-Sainte-Honorine -">&nbsp;&nbsp;|-Conflans-Sainte-Honorine</li>
                                                    <li key="France - Corbeil-Essonnes -">
                                                        &nbsp;&nbsp;|-Corbeil-Essonnes
                                                    </li>
                                                    <li key="France - Cormeilles-en-Parisis -">&nbsp;&nbsp;|-Cormeilles-en-Parisis</li>
                                                    <li key="France - Coudekerque-Branche -">&nbsp;&nbsp;|-Coudekerque-Branche</li>
                                                    <li key="France - Couëron -">&nbsp;&nbsp;|-Couëron</li>
                                                    <li key="France - Courbevoic -">&nbsp;&nbsp;|-Courbevoic</li>
                                                    <li key="France - Courcouronnes -">&nbsp;&nbsp;|-Courcouronnes</li>
                                                    <li key="France - Cournon-d’Auvergne -">&nbsp;&nbsp;|-Cournon-d’Auvergne</li>
                                                    <li key="France - Coutances -">&nbsp;&nbsp;|-Coutances</li>
                                                    <li key="France - Creil -">&nbsp;&nbsp;|-Creil</li>
                                                    <li key="France - Créteil -">&nbsp;&nbsp;|-Créteil</li>
                                                    <li key="France - Croix -">&nbsp;&nbsp;|-Croix</li>
                                                    <li key="France - Dammarie-lè-Lys -">&nbsp;&nbsp;|-Dammarie-lè-Lys
                                                    </li>
                                                    <li key="France - Dax -">&nbsp;&nbsp;|-Dax</li>
                                                    <li key="France - Décines-Charpieu -">
                                                        &nbsp;&nbsp;|-Décines-Charpieu
                                                    </li>
                                                    <li key="France - Delle -">&nbsp;&nbsp;|-Delle</li>
                                                    <li key="France - Deuil-la-Barre -">&nbsp;&nbsp;|-Deuil-la-Barre
                                                    </li>
                                                    <li key="France - Dieppe -">&nbsp;&nbsp;|-Dieppe</li>
                                                    <li key="France - Dijon -">&nbsp;&nbsp;|-Dijon</li>
                                                    <li key="France - Dole -">&nbsp;&nbsp;|-Dole</li>
                                                    <li key="France - Douai -">&nbsp;&nbsp;|-Douai</li>
                                                    <li key="France - Draguignan -">&nbsp;&nbsp;|-Draguignan</li>
                                                    <li key="France - Drancy -">&nbsp;&nbsp;|-Drancy</li>
                                                    <li key="France - Draveil -">&nbsp;&nbsp;|-Draveil</li>
                                                    <li key="France - Dreux -">&nbsp;&nbsp;|-Dreux</li>
                                                    <li key="France - Dunkerque -">&nbsp;&nbsp;|-Dunkerque</li>
                                                    <li key="France - Eaubonne -">&nbsp;&nbsp;|-Eaubonne</li>
                                                    <li key="France - Échirolles -">&nbsp;&nbsp;|-Échirolles</li>
                                                    <li key="France - Élancourt -">&nbsp;&nbsp;|-Élancourt</li>
                                                    <li key="France - Épernay -">&nbsp;&nbsp;|-Épernay</li>
                                                    <li key="France - Épinal -">&nbsp;&nbsp;|-Épinal</li>
                                                    <li key="France - Épinay-sur-Seine -">
                                                        &nbsp;&nbsp;|-Épinay-sur-Seine
                                                    </li>
                                                    <li key="France - Ermont -">&nbsp;&nbsp;|-Ermont</li>
                                                    <li key="France - Étampes -">&nbsp;&nbsp;|-Étampes</li>
                                                    <li key="France - Évreux -">&nbsp;&nbsp;|-Évreux</li>
                                                    <li key="France - Eysines -">&nbsp;&nbsp;|-Eysines</li>
                                                    <li key="France - Ferney-Voltaire -">&nbsp;&nbsp;|-Ferney-Voltaire
                                                    </li>
                                                    <li key="France - Fleury-les-Aubrais -">&nbsp;&nbsp;|-Fleury-les-Aubrais</li>
                                                    <li key="France - Fontaine -">&nbsp;&nbsp;|-Fontaine</li>
                                                    <li key="France - Fontenay-aux-Roses -">&nbsp;&nbsp;|-Fontenay-aux-Roses</li>
                                                    <li key="France - Fontenay-sous-Bois -">&nbsp;&nbsp;|-Fontenay-sous-Bois</li>
                                                    <li key="France - Forbach -">&nbsp;&nbsp;|-Forbach</li>
                                                    <li key="France - Fougères -">&nbsp;&nbsp;|-Fougères</li>
                                                    <li key="France - Franconville -">&nbsp;&nbsp;|-Franconville</li>
                                                    <li key="France - Fréjus -">&nbsp;&nbsp;|-Fréjus</li>
                                                    <li key="France - Fresnes -">&nbsp;&nbsp;|-Fresnes</li>
                                                    <li key="France - Frontignan -">&nbsp;&nbsp;|-Frontignan</li>
                                                    <li key="France - Gagny -">&nbsp;&nbsp;|-Gagny</li>
                                                    <li key="France - Gap -">&nbsp;&nbsp;|-Gap</li>
                                                    <li key="France - Gardanne -">&nbsp;&nbsp;|-Gardanne</li>
                                                    <li key="France - Garges-lès-Gonesse -">&nbsp;&nbsp;|-Garges-lès-Gonesse</li>
                                                    <li key="France - Gennevilliers -">&nbsp;&nbsp;|-Gennevilliers</li>
                                                    <li key="France - Gif-sur-Yvette -">&nbsp;&nbsp;|-Gif-sur-Yvette
                                                    </li>
                                                    <li key="France - Givet -">&nbsp;&nbsp;|-Givet</li>
                                                    <li key="France - Gonesse -">&nbsp;&nbsp;|-Gonesse</li>
                                                    <li key="France - Goussainville -">&nbsp;&nbsp;|-Goussainville</li>
                                                    <li key="France - Gradignan -">&nbsp;&nbsp;|-Gradignan</li>
                                                    <li key="France - Grande-Synthe -">&nbsp;&nbsp;|-Grande-Synthe</li>
                                                    <li key="France - Grasse -">&nbsp;&nbsp;|-Grasse</li>
                                                    <li key="France - Grenoble -">&nbsp;&nbsp;|-Grenoble</li>
                                                    <li key="France - Grigny -">&nbsp;&nbsp;|-Grigny</li>
                                                    <li key="France - Gujan-Mestras -">&nbsp;&nbsp;|-Gujan-Mestras</li>
                                                    <li key="France - Guyancourt -">&nbsp;&nbsp;|-Guyancourt</li>
                                                    <li key="France - Haguenau -">&nbsp;&nbsp;|-Haguenau</li>
                                                    <li key="France - Halluin -">&nbsp;&nbsp;|-Halluin</li>
                                                    <li key="France - Hazebrouck -">&nbsp;&nbsp;|-Hazebrouck</li>
                                                    <li key="France - Hendaye -">&nbsp;&nbsp;|-Hendaye</li>
                                                    <li key="France - Hénin-Beaumont -">&nbsp;&nbsp;|-Hénin-Beaumont
                                                    </li>
                                                    <li key="France - Hérouville-Saint-Clair -">&nbsp;&nbsp;|-Hérouville-Saint-Clair</li>
                                                    <li key="France - Houilles -">&nbsp;&nbsp;|-Houilles</li>
                                                    <li key="France - Huningue -">&nbsp;&nbsp;|-Huningue</li>
                                                    <li key="France - Hyères -">&nbsp;&nbsp;|-Hyères</li>
                                                    <li key="France - Illkirch-Graffenstaden -">&nbsp;&nbsp;|-Illkirch-Graffenstaden</li>
                                                    <li key="France - Issy-les-Moulineaux -">&nbsp;&nbsp;|-Issy-les-Moulineaux</li>
                                                    <li key="France - Istres -">&nbsp;&nbsp;|-Istres</li>
                                                    <li key="France - Ivry-sur-Seine -">&nbsp;&nbsp;|-Ivry-sur-Seine
                                                    </li>
                                                    <li key="France - Jeumont -">&nbsp;&nbsp;|-Jeumont</li>
                                                    <li key="France - Joué-lés-Tours -">&nbsp;&nbsp;|-Joué-lés-Tours
                                                    </li>
                                                    <li key="France - L’Haÿ-les-Roses -">&nbsp;&nbsp;|-L’Haÿ-les-Roses
                                                    </li>
                                                    <li key="France - La Celle-Saint-Cloud -">&nbsp;&nbsp;|-La
                                                        Celle-Saint-Cloud
                                                    </li>
                                                    <li key="France - La Ciotat -">&nbsp;&nbsp;|-La Ciotat</li>
                                                    <li key="France - La Courneuve -">&nbsp;&nbsp;|-La Courneuve</li>
                                                    <li key="France - La Garde -">&nbsp;&nbsp;|-La Garde</li>
                                                    <li key="France - La Garenne-Colombes -">&nbsp;&nbsp;|-La
                                                        Garenne-Colombes
                                                    </li>
                                                    <li key="France - La Madeleine -">&nbsp;&nbsp;|-La Madeleine</li>
                                                    <li key="France - La Roche-sur-Yon -">&nbsp;&nbsp;|-La
                                                        Roche-sur-Yon
                                                    </li>
                                                    <li key="France - La Rochelle -">&nbsp;&nbsp;|-La Rochelle</li>
                                                    <li key="France - La Seyne-sur-Mer -">&nbsp;&nbsp;|-La
                                                        Seyne-sur-Mer
                                                    </li>
                                                    <li key="France - La Teste-de-Buch -">&nbsp;&nbsp;|-La
                                                        Teste-de-Buch
                                                    </li>
                                                    <li key="France - La Valette-du-Var -">&nbsp;&nbsp;|-La
                                                        Valette-du-Var
                                                    </li>
                                                    <li key="France - Lambersart -">&nbsp;&nbsp;|-Lambersart</li>
                                                    <li key="France - Lanester -">&nbsp;&nbsp;|-Lanester</li>
                                                    <li key="France - Laon -">&nbsp;&nbsp;|-Laon</li>
                                                    <li key="France - Laval -">&nbsp;&nbsp;|-Laval</li>
                                                    <li key="France - Le Blanc-Mesnil -">&nbsp;&nbsp;|-Le Blanc-Mesnil
                                                    </li>
                                                    <li key="France - Le Bouscat -">&nbsp;&nbsp;|-Le Bouscat</li>
                                                    <li key="France - Le Cannet -">&nbsp;&nbsp;|-Le Cannet</li>
                                                    <li key="France - Le Creusot -">&nbsp;&nbsp;|-Le Creusot</li>
                                                    <li key="France - Le Grand-Quevilly -">&nbsp;&nbsp;|-Le
                                                        Grand-Quevilly
                                                    </li>
                                                    <li key="France - Le Havre -">&nbsp;&nbsp;|-Le Havre</li>
                                                    <li key="France - Le Kremlin-Bicêtre -">&nbsp;&nbsp;|-Le
                                                        Kremlin-Bicêtre
                                                    </li>
                                                    <li key="France - Le Mans -">&nbsp;&nbsp;|-Le Mans</li>
                                                    <li key="France - Le Mée-sur-Seine -">&nbsp;&nbsp;|-Le
                                                        Mée-sur-Seine
                                                    </li>
                                                    <li key="France - Le Perreux-Sur-Marne -">&nbsp;&nbsp;|-Le
                                                        Perreux-Sur-Marne
                                                    </li>
                                                    <li key="France - Le Petit-Quevilly -">&nbsp;&nbsp;|-Le
                                                        Petit-Quevilly
                                                    </li>
                                                    <li key="France - Le Plessis-Robinson -">&nbsp;&nbsp;|-Le
                                                        Plessis-Robinson
                                                    </li>
                                                    <li key="France - Le Plessis-Trévise -">&nbsp;&nbsp;|-Le
                                                        Plessis-Trévise
                                                    </li>
                                                    <li key="France - Leers -">&nbsp;&nbsp;|-Leers</li>
                                                    <li key="France - Lens -">&nbsp;&nbsp;|-Lens</li>
                                                    <li key="France - Les Lilas -">&nbsp;&nbsp;|-Les Lilas</li>
                                                    <li key="France - Les Mureaux -">&nbsp;&nbsp;|-Les Mureaux</li>
                                                    <li key="France - Les Pavillons-sous-Bois -">&nbsp;&nbsp;|-Les
                                                        Pavillons-sous-Bois
                                                    </li>
                                                    <li key="France - Les Pennes-Mirabeau -">&nbsp;&nbsp;|-Les
                                                        Pennes-Mirabeau
                                                    </li>
                                                    <li key="France - Les Sables-d’Olonne -">&nbsp;&nbsp;|-Les
                                                        Sables-d’Olonne
                                                    </li>
                                                    <li key="France - Levallois-Perret -">
                                                        &nbsp;&nbsp;|-Levallois-Perret
                                                    </li>
                                                    <li key="France - Libourne -">&nbsp;&nbsp;|-Libourne</li>
                                                    <li key="France - Liévin -">&nbsp;&nbsp;|-Liévin</li>
                                                    <li key="France - Lille -">&nbsp;&nbsp;|-Lille</li>
                                                    <li key="France - Limeil-Brévannes -">
                                                        &nbsp;&nbsp;|-Limeil-Brévannes
                                                    </li>
                                                    <li key="France - Limoges -">&nbsp;&nbsp;|-Limoges</li>
                                                    <li key="France - Lisieux -">&nbsp;&nbsp;|-Lisieux</li>
                                                    <li key="France - Livry-Gargan -">&nbsp;&nbsp;|-Livry-Gargan</li>
                                                    <li key="France - Longjumeau -">&nbsp;&nbsp;|-Longjumeau</li>
                                                    <li key="France - Loos -">&nbsp;&nbsp;|-Loos</li>
                                                    <li key="France - Lorient -">&nbsp;&nbsp;|-Lorient</li>
                                                    <li key="France - Lormont -">&nbsp;&nbsp;|-Lormont</li>
                                                    <li key="France - Lunel -">&nbsp;&nbsp;|-Lunel</li>
                                                    <li key="France - Lyon -">&nbsp;&nbsp;|-Lyon</li>
                                                    <li key="France - Mâcon -">&nbsp;&nbsp;|-Mâcon</li>
                                                    <li key="France - Maisons-Alfort -">&nbsp;&nbsp;|-Maisons-Alfort
                                                    </li>
                                                    <li key="France - Maisons-Laffitte -">
                                                        &nbsp;&nbsp;|-Maisons-Laffitte
                                                    </li>
                                                    <li key="France - Malakoff -">&nbsp;&nbsp;|-Malakoff</li>
                                                    <li key="France - Mandelieu-la-Napoule -">&nbsp;&nbsp;|-Mandelieu-la-Napoule</li>
                                                    <li key="France - Manosque -">&nbsp;&nbsp;|-Manosque</li>
                                                    <li key="France - Mantes-la-Jolie -">&nbsp;&nbsp;|-Mantes-la-Jolie
                                                    </li>
                                                    <li key="France - Mantes-la-Ville -">&nbsp;&nbsp;|-Mantes-la-Ville
                                                    </li>
                                                    <li key="France - Marcq-en-Baroeul -">
                                                        &nbsp;&nbsp;|-Marcq-en-Baroeul
                                                    </li>
                                                    <li key="France - Marignane -">&nbsp;&nbsp;|-Marignane</li>
                                                    <li key="France - Marseille -">&nbsp;&nbsp;|-Marseille</li>
                                                    <li key="France - Martigues -">&nbsp;&nbsp;|-Martigues</li>
                                                    <li key="France - Massy -">&nbsp;&nbsp;|-Massy</li>
                                                    <li key="France - Maubeuge -">&nbsp;&nbsp;|-Maubeuge</li>
                                                    <li key="France - Meaux -">&nbsp;&nbsp;|-Meaux</li>
                                                    <li key="France - Menton -">&nbsp;&nbsp;|-Menton</li>
                                                    <li key="France - Mérignac -">&nbsp;&nbsp;|-Mérignac</li>
                                                    <li key="France - Metz -">&nbsp;&nbsp;|-Metz</li>
                                                    <li key="France - Meudon -">&nbsp;&nbsp;|-Meudon</li>
                                                    <li key="France - Meyzieu -">&nbsp;&nbsp;|-Meyzieu</li>
                                                    <li key="France - Millau -">&nbsp;&nbsp;|-Millau</li>
                                                    <li key="France - Miramas -">&nbsp;&nbsp;|-Miramas</li>
                                                    <li key="France - Mons-en-Baroeul -">&nbsp;&nbsp;|-Mons-en-Baroeul
                                                    </li>
                                                    <li key="France - Mont-de-Marsan -">&nbsp;&nbsp;|-Mont-de-Marsan
                                                    </li>
                                                    <li key="France - Mont-Saint-Martin -">&nbsp;&nbsp;|-Mont-Saint-Martin</li>
                                                    <li key="France - Montauban -">&nbsp;&nbsp;|-Montauban</li>
                                                    <li key="France - Montbéliard -">&nbsp;&nbsp;|-Montbéliard</li>
                                                    <li key="France - Montélimar -">&nbsp;&nbsp;|-Montélimar</li>
                                                    <li key="France - Montereau-faut-Yonne -">&nbsp;&nbsp;|-Montereau-faut-Yonne</li>
                                                    <li key="France - Montfermeil -">&nbsp;&nbsp;|-Montfermeil</li>
                                                    <li key="France - Montgeron -">&nbsp;&nbsp;|-Montgeron</li>
                                                    <li key="France - Montigny-le-Bretonneux -">&nbsp;&nbsp;|-Montigny-le-Bretonneux</li>
                                                    <li key="France - Montigny-lès-Cormeilles -">&nbsp;&nbsp;|-Montigny-lès-Cormeilles</li>
                                                    <li key="France - Montigny-lès-Metz -">&nbsp;&nbsp;|-Montigny-lès-Metz</li>
                                                    <li key="France - Montluçon -">&nbsp;&nbsp;|-Montluçon</li>
                                                    <li key="France - Montmorency -">&nbsp;&nbsp;|-Montmorency</li>
                                                    <li key="France - Montpellier -">&nbsp;&nbsp;|-Montpellier</li>
                                                    <li key="France - Montreuil -">&nbsp;&nbsp;|-Montreuil</li>
                                                    <li key="France - Montrouge -">&nbsp;&nbsp;|-Montrouge</li>
                                                    <li key="France - Morsang-sur-Orge -">
                                                        &nbsp;&nbsp;|-Morsang-sur-Orge
                                                    </li>
                                                    <li key="France - Mulhouse -">&nbsp;&nbsp;|-Mulhouse</li>
                                                    <li key="France - Muret -">&nbsp;&nbsp;|-Muret</li>
                                                    <li key="France - Nancy -">&nbsp;&nbsp;|-Nancy</li>
                                                    <li key="France - Nanterre -">&nbsp;&nbsp;|-Nanterre</li>
                                                    <li key="France - Nantes -">&nbsp;&nbsp;|-Nantes</li>
                                                    <li key="France - Narbonne -">&nbsp;&nbsp;|-Narbonne</li>
                                                    <li key="France - Neuilly-Plaisance -">&nbsp;&nbsp;|-Neuilly-Plaisance</li>
                                                    <li key="France - Neuilly-sur-Marne -">&nbsp;&nbsp;|-Neuilly-sur-Marne</li>
                                                    <li key="France - Neuilly-sur-Seine -">&nbsp;&nbsp;|-Neuilly-sur-Seine</li>
                                                    <li key="France - Nevers -">&nbsp;&nbsp;|-Nevers</li>
                                                    <li key="France - Nice -">&nbsp;&nbsp;|-Nice</li>
                                                    <li key="France - Nîmes -">&nbsp;&nbsp;|-Nîmes</li>
                                                    <li key="France - Niort -">&nbsp;&nbsp;|-Niort</li>
                                                    <li key="France - Nogent-sur-Marne -">
                                                        &nbsp;&nbsp;|-Nogent-sur-Marne
                                                    </li>
                                                    <li key="France - Nogent-sur-Oise -">&nbsp;&nbsp;|-Nogent-sur-Oise
                                                    </li>
                                                    <li key="France - Noisy-le-Grand -">&nbsp;&nbsp;|-Noisy-le-Grand
                                                    </li>
                                                    <li key="France - Noisy-le-Sec -">&nbsp;&nbsp;|-Noisy-le-Sec</li>
                                                    <li key="France - Olivet -">&nbsp;&nbsp;|-Olivet</li>
                                                    <li key="France - Orange -">&nbsp;&nbsp;|-Orange</li>
                                                    <li key="France - Orléans -">&nbsp;&nbsp;|-Orléans</li>
                                                    <li key="France - Orly -">&nbsp;&nbsp;|-Orly</li>
                                                    <li key="France - Orvault -">&nbsp;&nbsp;|-Orvault</li>
                                                    <li key="France - Oullins -">&nbsp;&nbsp;|-Oullins</li>
                                                    <li key="France - Oyonnax -">&nbsp;&nbsp;|-Oyonnax</li>
                                                    <li key="France - Ozoir-la-Ferrière -">&nbsp;&nbsp;|-Ozoir-la-Ferrière</li>
                                                    <li key="France - Palaiseau -">&nbsp;&nbsp;|-Palaiseau</li>
                                                    <li key="France - Pantin -">&nbsp;&nbsp;|-Pantin</li>
                                                    <li key="France - Paris -">&nbsp;&nbsp;|-Paris</li>
                                                    <li key="France - Pau -">&nbsp;&nbsp;|-Pau</li>
                                                    <li key="France - Périgueux -">&nbsp;&nbsp;|-Périgueux</li>
                                                    <li key="France - Perpignan -">&nbsp;&nbsp;|-Perpignan</li>
                                                    <li key="France - Pertuis -">&nbsp;&nbsp;|-Pertuis</li>
                                                    <li key="France - Pessac -">&nbsp;&nbsp;|-Pessac</li>
                                                    <li key="France - Petite-Rosselle -">&nbsp;&nbsp;|-Petite-Rosselle
                                                    </li>
                                                    <li key="France - Pierrefitte-sur-Seine -">&nbsp;&nbsp;|-Pierrefitte-sur-Seine</li>
                                                    <li key="France - Plaisir -">&nbsp;&nbsp;|-Plaisir</li>
                                                    <li key="France - Poissy -">&nbsp;&nbsp;|-Poissy</li>
                                                    <li key="France - Poitiers -">&nbsp;&nbsp;|-Poitiers</li>
                                                    <li key="France - Pontoise -">&nbsp;&nbsp;|-Pontoise</li>
                                                    <li key="France - Puteaux -">&nbsp;&nbsp;|-Puteaux</li>
                                                    <li key="France - Quiévrechain -">&nbsp;&nbsp;|-Quiévrechain</li>
                                                    <li key="France - Quimper -">&nbsp;&nbsp;|-Quimper</li>
                                                    <li key="France - Rambouillet -">&nbsp;&nbsp;|-Rambouillet</li>
                                                    <li key="France - Reims -">&nbsp;&nbsp;|-Reims</li>
                                                    <li key="France - Rennes -">&nbsp;&nbsp;|-Rennes</li>
                                                    <li key="France - Rezé -">&nbsp;&nbsp;|-Rezé</li>
                                                    <li key="France - Rillieux-la-Pape -">
                                                        &nbsp;&nbsp;|-Rillieux-la-Pape
                                                    </li>
                                                    <li key="France - Ris-Orangis -">&nbsp;&nbsp;|-Ris-Orangis</li>
                                                    <li key="France - Roanne -">&nbsp;&nbsp;|-Roanne</li>
                                                    <li key="France - Rochefort -">&nbsp;&nbsp;|-Rochefort</li>
                                                    <li key="France - Rodez -">&nbsp;&nbsp;|-Rodez</li>
                                                    <li key="France - Roissy-en-Brie -">&nbsp;&nbsp;|-Roissy-en-Brie
                                                    </li>
                                                    <li key="France - Romainville -">&nbsp;&nbsp;|-Romainville</li>
                                                    <li key="France - Romans-sur-Isère -">
                                                        &nbsp;&nbsp;|-Romans-sur-Isère
                                                    </li>
                                                    <li key="France - Rosny-sous-Bois -">&nbsp;&nbsp;|-Rosny-sous-Bois
                                                    </li>
                                                    <li key="France - Roubaix -">&nbsp;&nbsp;|-Roubaix</li>
                                                    <li key="France - Rouen -">&nbsp;&nbsp;|-Rouen</li>
                                                    <li key="France - Rueil-Malmaison -">&nbsp;&nbsp;|-Rueil-Malmaison
                                                    </li>
                                                    <li key="France - Saint-Brieuc -">&nbsp;&nbsp;|-Saint-Brieuc</li>
                                                    <li key="France - Saint-Chamond -">&nbsp;&nbsp;|-Saint-Chamond</li>
                                                    <li key="France - Saint-Cloud -">&nbsp;&nbsp;|-Saint-Cloud</li>
                                                    <li key="France - Saint-Denis -">&nbsp;&nbsp;|-Saint-Denis</li>
                                                    <li key="France - Saint-Dizier -">&nbsp;&nbsp;|-Saint-Dizier</li>
                                                    <li key="France - Saint-Étienne -">&nbsp;&nbsp;|-Saint-Étienne</li>
                                                    <li key="France - Saint-Étienne-du-Rouvray -">&nbsp;&nbsp;|-Saint-Étienne-du-Rouvray</li>
                                                    <li key="France - Saint-Genis-Laval -">&nbsp;&nbsp;|-Saint-Genis-Laval</li>
                                                    <li key="France - Saint-Germain-en-Laye -">&nbsp;&nbsp;|-Saint-Germain-en-Laye</li>
                                                    <li key="France - Saint-Gratien -">&nbsp;&nbsp;|-Saint-Gratien</li>
                                                    <li key="France - Saint-Herblain -">&nbsp;&nbsp;|-Saint-Herblain
                                                    </li>
                                                    <li key="France - Saint-Jean-de-Braye -">&nbsp;&nbsp;|-Saint-Jean-de-Braye</li>
                                                    <li key="France - Saint-Laurent-du-Var -">&nbsp;&nbsp;|-Saint-Laurent-du-Var</li>
                                                    <li key="France - Saint-Louis -">&nbsp;&nbsp;|-Saint-Louis</li>
                                                    <li key="France - Saint-Malo -">&nbsp;&nbsp;|-Saint-Malo</li>
                                                    <li key="France - Saint-Mandé -">&nbsp;&nbsp;|-Saint-Mandé</li>
                                                    <li key="France - Saint-Martin-d’Hères -">&nbsp;&nbsp;|-Saint-Martin-d’Hères</li>
                                                    <li key="France - Saint-Maur-des-Fossés -">&nbsp;&nbsp;|-Saint-Maur-des-Fossés</li>
                                                    <li key="France - Saint-Médard-en-Jalles -">&nbsp;&nbsp;|-Saint-Médard-en-Jalles</li>
                                                    <li key="France - Saint-Nazaire -">&nbsp;&nbsp;|-Saint-Nazaire</li>
                                                    <li key="France - Saint-Ouen -">&nbsp;&nbsp;|-Saint-Ouen</li>
                                                    <li key="France - Saint-Ouen-l’Aumône -">&nbsp;&nbsp;|-Saint-Ouen-l’Aumône</li>
                                                    <li key="France - Saint-Priest -">&nbsp;&nbsp;|-Saint-Priest</li>
                                                    <li key="France - Saint-Quentin -">&nbsp;&nbsp;|-Saint-Quentin</li>
                                                    <li key="France - Saint-Raphaël -">&nbsp;&nbsp;|-Saint-Raphaël</li>
                                                    <li key="France - Saint-Sébastien-sur-Loire -">&nbsp;&nbsp;|-Saint-Sébastien-sur-Loire</li>
                                                    <li key="France - Sainte-Foy-lès-Lyon -">&nbsp;&nbsp;|-Sainte-Foy-lès-Lyon</li>
                                                    <li key="France - Sainte-Geneviève-des-Bois -">&nbsp;&nbsp;|-Sainte-Geneviève-des-Bois</li>
                                                    <li key="France - Saintes -">&nbsp;&nbsp;|-Saintes</li>
                                                    <li key="France - Salon-de-Provence -">&nbsp;&nbsp;|-Salon-de-Provence</li>
                                                    <li key="France - Sannois -">&nbsp;&nbsp;|-Sannois</li>
                                                    <li key="France - Sarcelles -">&nbsp;&nbsp;|-Sarcelles</li>
                                                    <li key="France - Sarreguemines -">&nbsp;&nbsp;|-Sarreguemines</li>
                                                    <li key="France - Sartrouville -">&nbsp;&nbsp;|-Sartrouville</li>
                                                    <li key="France - Saumur -">&nbsp;&nbsp;|-Saumur</li>
                                                    <li key="France - Savigny-le-Temple -">&nbsp;&nbsp;|-Savigny-le-Temple</li>
                                                    <li key="France - Savigny-sur-Orge -">
                                                        &nbsp;&nbsp;|-Savigny-sur-Orge
                                                    </li>
                                                    <li key="France - Schiltigheim -">&nbsp;&nbsp;|-Schiltigheim</li>
                                                    <li key="France - Seine-et-Marne -">&nbsp;&nbsp;|-Seine-et-Marne
                                                    </li>
                                                    <li key="France - Seine-et-Marne - Melun -">&nbsp;&nbsp;&nbsp;&nbsp;|-Melun</li>
                                                    <li key="France - Seine-et-Marne - Moissy-Cramayel -">&nbsp;&nbsp;&nbsp;&nbsp;|-Moissy-Cramayel</li>
                                                    <li key="France - Seine-et-Marne - Provins -">&nbsp;&nbsp;&nbsp;&nbsp;|-Provins</li>
                                                    <li key="France - Sens -">&nbsp;&nbsp;|-Sens</li>
                                                    <li key="France - Sète -">&nbsp;&nbsp;|-Sète</li>
                                                    <li key="France - Sevran -">&nbsp;&nbsp;|-Sevran</li>
                                                    <li key="France - Sèvres -">&nbsp;&nbsp;|-Sèvres</li>
                                                    <li key="France - Six-Fours-les-Plages -">&nbsp;&nbsp;|-Six-Fours-les-Plages</li>
                                                    <li key="France - Soissons -">&nbsp;&nbsp;|-Soissons</li>
                                                    <li key="France - Sotteville-lès-Rouen -">&nbsp;&nbsp;|-Sotteville-lès-Rouen</li>
                                                    <li key="France - Stains -">&nbsp;&nbsp;|-Stains</li>
                                                    <li key="France - Strasbourg -">&nbsp;&nbsp;|-Strasbourg</li>
                                                    <li key="France - Sucy-en-Brie -">&nbsp;&nbsp;|-Sucy-en-Brie</li>
                                                    <li key="France - Suresnes -">&nbsp;&nbsp;|-Suresnes</li>
                                                    <li key="France - Talence -">&nbsp;&nbsp;|-Talence</li>
                                                    <li key="France - Tarbes -">&nbsp;&nbsp;|-Tarbes</li>
                                                    <li key="France - Tassin-la-Demi-Lune -">&nbsp;&nbsp;|-Tassin-la-Demi-Lune</li>
                                                    <li key="France - Taverny -">&nbsp;&nbsp;|-Taverny</li>
                                                    <li key="France - Thiais -">&nbsp;&nbsp;|-Thiais</li>
                                                    <li key="France - Thionville -">&nbsp;&nbsp;|-Thionville</li>
                                                    <li key="France - Thonon-les-Bains -">
                                                        &nbsp;&nbsp;|-Thonon-les-Bains
                                                    </li>
                                                    <li key="France - Thorigny-sur-Marne -">&nbsp;&nbsp;|-Thorigny-sur-Marne</li>
                                                    <li key="France - Torcy -">&nbsp;&nbsp;|-Torcy</li>
                                                    <li key="France - Toulon -">&nbsp;&nbsp;|-Toulon</li>
                                                    <li key="France - Toulouse -">&nbsp;&nbsp;|-Toulouse</li>
                                                    <li key="France - Tourcoing -">&nbsp;&nbsp;|-Tourcoing</li>
                                                    <li key="France - Tournefeuille -">&nbsp;&nbsp;|-Tournefeuille</li>
                                                    <li key="France - Tours -">&nbsp;&nbsp;|-Tours</li>
                                                    <li key="France - Trappes -">&nbsp;&nbsp;|-Trappes</li>
                                                    <li key="France - Troyes -">&nbsp;&nbsp;|-Troyes</li>
                                                    <li key="France - Valence -">&nbsp;&nbsp;|-Valence</li>
                                                    <li key="France - Valenciennes -">&nbsp;&nbsp;|-Valenciennes</li>
                                                    <li key="France - Vallauris -">&nbsp;&nbsp;|-Vallauris</li>
                                                    <li key="France - Vandœuvre-lès-Nancy -">&nbsp;&nbsp;|-Vandœuvre-lès-Nancy</li>
                                                    <li key="France - Vannes -">&nbsp;&nbsp;|-Vannes</li>
                                                    <li key="France - Vanves -">&nbsp;&nbsp;|-Vanves</li>
                                                    <li key="France - Vaulx-en-Velin -">&nbsp;&nbsp;|-Vaulx-en-Velin
                                                    </li>
                                                    <li key="France - Vélizy-Villacoublay -">&nbsp;&nbsp;|-Vélizy-Villacoublay</li>
                                                    <li key="France - Vénissieux -">&nbsp;&nbsp;|-Vénissieux</li>
                                                    <li key="France - Vernon -">&nbsp;&nbsp;|-Vernon</li>
                                                    <li key="France - Versailles -">&nbsp;&nbsp;|-Versailles</li>
                                                    <li key="France - Vertou -">&nbsp;&nbsp;|-Vertou</li>
                                                    <li key="France - Vichy -">&nbsp;&nbsp;|-Vichy</li>
                                                    <li key="France - Vienne -">&nbsp;&nbsp;|-Vienne</li>
                                                    <li key="France - Vierzon -">&nbsp;&nbsp;|-Vierzon</li>
                                                    <li key="France - Vigneux-sur-Seine -">&nbsp;&nbsp;|-Vigneux-sur-Seine</li>
                                                    <li key="France - Villefranche-sur-Saône -">&nbsp;&nbsp;|-Villefranche-sur-Saône</li>
                                                    <li key="France - Villejuif -">&nbsp;&nbsp;|-Villejuif</li>
                                                    <li key="France - Villemomble -">&nbsp;&nbsp;|-Villemomble</li>
                                                    <li key="France - Villenave-d’Ornon -">&nbsp;&nbsp;|-Villenave-d’Ornon</li>
                                                    <li key="France - Villeneuve-la-Garenne -">&nbsp;&nbsp;|-Villeneuve-la-Garenne</li>
                                                    <li key="France - Villeneuve-le-Roi -">&nbsp;&nbsp;|-Villeneuve-le-Roi</li>
                                                    <li key="France - Villeneuve-Saint-Georges -">&nbsp;&nbsp;|-Villeneuve-Saint-Georges</li>
                                                    <li key="France - Villeneuve-sur-Lot -">&nbsp;&nbsp;|-Villeneuve-sur-Lot</li>
                                                    <li key="France - Villeparisis -">&nbsp;&nbsp;|-Villeparisis</li>
                                                    <li key="France - Villepinte -">&nbsp;&nbsp;|-Villepinte</li>
                                                    <li key="France - Villeurbanne -">&nbsp;&nbsp;|-Villeurbanne</li>
                                                    <li key="France - Villiers-le-Bel -">&nbsp;&nbsp;|-Villiers-le-Bel
                                                    </li>
                                                    <li key="France - Villiers-sur-Marne -">&nbsp;&nbsp;|-Villiers-sur-Marne</li>
                                                    <li key="France - Vincennes -">&nbsp;&nbsp;|-Vincennes</li>
                                                    <li key="France - Viry-Châtillon -">&nbsp;&nbsp;|-Viry-Châtillon
                                                    </li>
                                                    <li key="France - Vitrolles -">&nbsp;&nbsp;|-Vitrolles</li>
                                                    <li key="France - Vitry-sur-Seine -">&nbsp;&nbsp;|-Vitry-sur-Seine
                                                    </li>
                                                    <li key="France - Voiron -">&nbsp;&nbsp;|-Voiron</li>
                                                    <li key="France - Wasquehal -">&nbsp;&nbsp;|-Wasquehal</li>
                                                    <li key="France - Wattrelos -">&nbsp;&nbsp;|-Wattrelos</li>
                                                    <li key="France - Wervicq-Sud -">&nbsp;&nbsp;|-Wervicq-Sud</li>
                                                    <li key="France - Wissembourg -">&nbsp;&nbsp;|-Wissembourg</li>
                                                    <li key="France - Yerres -">&nbsp;&nbsp;|-Yerres</li>
                                                </ul>
                                            </div>
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

                            <ul class="menu-onmap tabbed-selector">
                                <li class="all-button active">
                                    <label>
                                        Tout <input type="radio" rel="Tout" name="search_option_4" value="">
                                    </label>
                                </li>
                            </ul>

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

                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>Surface</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" id="search_option_3" name="search_option_3" value="">
                                        <ul class="dropeddown">
                                            <li>Surface</li>
                                            <li data-value="Moins que 50m2">Moins que 50m2</li>
                                            <li data-value="50-100m2">50-100m2</li>
                                            <li data-value="Plus que 100m2">Plus que 100m2</li>
                                        </ul>
                                    </div>
                                </div><!-- /.form-group -->
                            </div>


                            <div class="form_field srch-btn  form_field_save ">
                                <a href="#" class="btn btn-outline-primary sw-search-start">
                                    <i class="la la-search"></i>
                                    <span>Chercher</span>
                                    <i class="fa fa-spinner fa-spin fa-ajax-indicator hidden"></i>
                                </a>
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
                                <div class="front face"><i class="fa fa-building"></i></div>
                                <div class="back face"><i class="fa fa-building"></i></div>
                                <div class="marker-arrow"></div>
                            </div>
                        </div>
                    </div>
                    <div class="leaflet-marker-icon open_steet_map_marker google_marker leaflet-zoom-animated leaflet-interactive"
                         tabindex="0"
                         style="margin-left: -20px; margin-top: -46px; width: 40px; height: 46px; opacity: 1; transform: translate3d(435px, 147px, 0px); z-index: 147;">
                        <div class="marker-container">
                            <div class="marker-card">
                                <div class="front face"><i class="fa fa-building"></i></div>
                                <div class="back face"><i class="fa fa-building"></i></div>
                                <div class="marker-arrow"></div>
                            </div>
                        </div>
                    </div>
                    <div class="leaflet-marker-icon open_steet_map_marker google_marker leaflet-zoom-animated leaflet-interactive"
                         tabindex="0"
                         style="margin-left: -20px; margin-top: -46px; width: 40px; height: 46px; opacity: 1; transform: translate3d(539px, 341px, 0px); z-index: 341;">
                        <div class="marker-container">
                            <div class="marker-card">
                                <div class="front face"><i class="fa fa-building"></i></div>
                                <div class="back face"><i class="fa fa-building"></i></div>
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
                        <h3>Le plus populaire</h3>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <a href="https://boutiquesephemeres.cdconnect.fr/index.php/property/30/fr/la_passerelle" title="La Passerelle">
                            <div class="img-block ">
                                <div class="overlay"></div>
                                <img src="https://boutiquesephemeres.cdconnect.fr/files/strict_cache/851x678boutique_moissy_cramayel_01.jpeg" alt="La Passerelle" class="img-fluid">
                                <div class="rate-info">
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <a href="https://boutiquesephemeres.cdconnect.fr/index.php/property/30/fr/la_passerelle" title="La Passerelle">
                                <h3>La Passerelle</h3>
                                <p><i class="la la-map-marker"></i>251 avenue philippe bur 77550 moissy-cramayel</p>
                            </a>
                            <ul>
                                <li class="">- Point d'eau</li>
                                <li class="">- -</li>
                                <li class="">Surface 75 m2</li>
                            </ul>
                        </div>
                        <a href="https://boutiquesephemeres.cdconnect.fr/index.php/property/30/fr/la_passerelle" title="La Passerelle" class="ext-link"></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <a href="https://boutiquesephemeres.cdconnect.fr/index.php/property/31/fr/le_dix_neuf" title="Le Dix Neuf">
                            <div class="img-block ">
                                <div class="overlay"></div>
                                <img src="https://boutiquesephemeres.cdconnect.fr/files/strict_cache/851x678147_1png.jpeg" alt="Le Dix Neuf" class="img-fluid">
                                <div class="rate-info">
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <a href="https://boutiquesephemeres.cdconnect.fr/index.php/property/31/fr/le_dix_neuf" title="Le Dix Neuf">
                                <h3>Le Dix Neuf</h3>
                                <p><i class="la la-map-marker"></i>19 rue Pouteau 77000 Melun</p>
                            </a>
                            <ul>
                                <li class="">true Point d'eau</li>
                                <li class="">- -</li>
                                <li class="">Surface 60 m2</li>
                            </ul>
                        </div>
                        <a href="https://boutiquesephemeres.cdconnect.fr/index.php/property/31/fr/le_dix_neuf" title="Le Dix Neuf" class="ext-link"></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <a href="https://boutiquesephemeres.cdconnect.fr/index.php/property/32/fr/en_cours" title="En cours">
                            <div class="img-block ">
                                <div class="overlay"></div>
                                <span class="listing_badge badge-en_projet"></span>                                                        <img src="https://boutiquesephemeres.cdconnect.fr/files/strict_cache/851x678no_image.jpg" alt="En cours" class="img-fluid">
                                <div class="rate-info">
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <a href="https://boutiquesephemeres.cdconnect.fr/index.php/property/32/fr/en_cours" title="En cours">
                                <h3>En cours</h3>
                                <p><i class="la la-map-marker"></i>77160 Provins</p>
                            </a>
                            <ul>
                                <li class="">- Point d'eau</li>
                                <li class="">- -</li>
                                <li class="">Surface - m2</li>
                            </ul>
                        </div>
                        <a href="https://boutiquesephemeres.cdconnect.fr/index.php/property/32/fr/en_cours" title="En cours" class="ext-link"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="load-more-posts">
                        <a href="https://boutiquesephemeres.cdconnect.fr/index.php/fr/145" title="" class="btn2">Voir plus</a>
                    </div><!--load-more end-->
                </div>
            </div>
        </div>
    </section>


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
