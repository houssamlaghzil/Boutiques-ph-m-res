<?php
/**
 * Boutiques éphémères
 **/
?>
<head>
    <meta charset="UTF-8">
    <title>ajoutez votre boutique</title>
    <link rel="stylesheet" href="../CSS/addShop.css">
</head>
<body>
<?php
include('header.html');
?>

<div class="alldiv">
    <div class="content" id="content">
        <?php
        include('styleform.php');
        ?>
        <!--
                <div class="content-box local-form">
                    <div class="box-alert">
                        <p class="alert alert-info">
                            Déjà enregistré?
                            <a href="#" style="color: inherit;">
                                Ensuite, ouvrez une session ici
                            </a>
                        </p>
                    </div>

                    <form action="#" method="post" accept-charset="utf-8" class="form-estate form-editproperty" role="form"
                          id="property-submition" data-h5-instanceid="0" novalidate="novalidate">


                        <div style="margin-bottom: 0px;" class="tabbable">
                            <div style="padding-top: 9px;" class="tab-content">
                                <div id="3" class="tab-pane active">

                                    <div class="form-group">
                                        <label class="control-label">*Votre courriel</label>
                                        <div class="controls">
                                            <input type="text" name="mail" value="" class="form-control" id="input_mail"
                                                   placeholder="Votre courrier"></div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label">Organisation - Nom de la collectivité</label>
                                        <div class="controls">
                                            <input type="text" name="address" value="" class="form-control" id="input_address"
                                                   placeholder="Organisation - Nom de la collectivité"></div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Nom et Prénom du responsable</label>
                                        <div class="controls">
                                            <input type="text" name="option10_3" value="" class="form-control INPUTBOX"
                                                   id="inputOption_3_10" strlen="0" placeholder="Nom et Prénom du responsable"
                                                   maxlength="20">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label">Téléphone du responsable</label>
                                        <div class="controls">
                                            <input type="number" name="option8_3" cols="40" rows="3"
                                                   class="ckeditor form-control"
                                                   id="inputOption_3_8" strlen="0"
                                                   placeholder="Téléphone du responsable"></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label">Code postal du local</label>
                                        <div class="controls">
                                            <input type="text" name="option17_3" cols="40" rows="3"
                                                   class="ckeditor form-control"
                                                   id="inputOption_3_17" strlen="0"
                                                   placeholder="Code postal du local"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Nom du local</label>
                                        <div class="controls">
                                            <input type="text" name="option17_3" cols="40" rows="3"
                                                   class="ckeditor form-control"
                                                   id="inputOption_3_17" strlen="0"
                                                   placeholder="Nom du local (si existant)"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Activité (s) acceptée (s)</label>
                                        <div class="controls">
                                            <input type="text" name="option17_3" cols="40" rows="3"
                                                   class="ckeditor form-control"
                                                   id="inputOption_3_17" strlen="0"
                                                   placeholder="Activité (s) acceptée (s)"></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label">Description de la boutique et/ou de l'activité de la
                                            boutique</label>
                                        <div class="controls">
                                            <textarea name="option17_3" cols="40" rows="3"
                                                      class="ckeditor form-control"
                                                      id="inputOption_3_17" strlen="0"
                                                      placeholder="5 lignes d'accroche"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Adresse du local</label>
                                        <div class="controls">
                                            <input type="text" name="option17_3" cols="40" rows="3"
                                                   class="ckeditor form-control"
                                                   id="inputOption_3_17" strlen="0"
                                                   placeholder="numéro et nom de la rue"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Complément d'adresse</label>
                                        <div class="controls">
                                            <input type="text" name="option17_3" cols="40" rows="3"
                                                   class="ckeditor form-control"
                                                   id="inputOption_3_17" strlen="0"
                                                   placeholder="Complément d'adresse"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Localisation</label>
                                        <div class="controls">
                                            <input type="text" name="option17_3" cols="40" rows="3"
                                                   class="ckeditor form-control"
                                                   id="inputOption_3_17" strlen="0"
                                                   placeholder="Zone d'activités, centre-ville, centre commercial..."></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Type de bail</label>
                                        <div class="controls">
                                            <input type="text" name="option17_3" cols="40" rows="3"
                                                   class="ckeditor form-control"
                                                   id="inputOption_3_17" strlen="0" placeholder="Type de bail"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Surface de réserve</label>
                                        <div class="controls">
                                            <input type="text" name="option17_3" cols="40" rows="3"
                                                   class="ckeditor form-control"
                                                   id="inputOption_3_17" strlen="0" placeholder="Surface de réserve"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Surface de vente</label>
                                        <div class="controls">
                                            <input type="text" name="option17_3" cols="40" rows="3"
                                                   class="ckeditor form-control"
                                                   id="inputOption_3_17" strlen="0" placeholder="Surface de vente"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Date de fin de location</label>
                                        <div class="controls">
                                            <input type="date" name="option17_3" cols="40" rows="3"
                                                   class="ckeditor form-control"
                                                   id="inputOption_3_17" strlen="0" placeholder="Durée de location"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Loyer</label>
                                        <div class="controls">
                                            <input type="text" name="option17_3" cols="40" rows="3"
                                                   class="ckeditor form-control"
                                                   id="inputOption_3_17" strlen="0" placeholder="Loyer"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Charges</label>
                                        <div class="controls">
                                            <input type="text" name="option17_3" cols="40" rows="3"
                                                   class="ckeditor form-control"
                                                   id="inputOption_3_17" strlen="0" placeholder="Charges"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Equipements intérieurs</label>
                                        <div class="controls">
                                            <input type="text" name="option17_3" cols="40" rows="3"
                                                   class="ckeditor form-control"
                                                   id="inputOption_3_17" strlen="0"
                                                   placeholder="Climatisation, type de chauffage, internet..."></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Equipements extérieur</label>
                                        <div class="controls">
                                            <input type="text" name="option17_3" cols="40" rows="3"
                                                   class="ckeditor form-control"
                                                   id="inputOption_3_17" strlen="0"
                                                   placeholder="Parking, terrasse..."></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Distances</label>
                                        <div class="controls">
                                            <input type="text" name="option17_3" cols="40" rows="3"
                                                   class="ckeditor form-control"
                                                   id="inputOption_3_17" strlen="0"
                                                   placeholder="Distances du centre-ville, du métro, Bus, train.."></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Le + de la boutique</label>
                                        <div class="controls">
                                            <input type="text" name="option17_3" cols="40" rows="3"
                                                   class="ckeditor form-control"
                                                   id="inputOption_3_17" strlen="0"
                                                   placeholder="Le + de la boutique"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Autres Informations utiles</label>
                                        <div class="controls">
                                            <textarea name="option17_3" cols="40" rows="3"
                                                      class="ckeditor form-control"
                                                      id="inputOption_3_17" strlen="0"
                                                      placeholder="Autres Informations utiles"></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label">Images de présentation de la boutique (6 images maximum,
                                            format png ou jpg)</label>
                                        <div class="controls">
                                            <input type="file" name="option6_3" class="form-control" id="inputOption_3_6"
                                                   placeholder="Images de présentation de la boutique (6 images maximum, format png ou jpg)">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Marqueur<i
                                                class="icon-question-sign hint"
                                                data-hint="Pin/Marker/Icon for location on map"></i></label>
                                        <div class="controls">
                                            <select name="option6_3" class="form-control" id="inputOption_3_6"
                                                    placeholder="Marqueur">
                                                <option value="empty">
                                                            vide</option>
                                                <option value="commercial">
                                                            commercial</option>
                                                <option value="house">
                                                            loger</option>
                                                <option value="land">
                                                            atterrir</option>
                                                <option value="apartment">
                                                            appartement</option>
                                            </select></div>
                                    </div>
                                </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <div class="controls">
                                        <input
                                            type="submit" name="" value="Sauvegarder" class="btn btn-success">
                                    </div>
                                </div>

                            </div>

                    </form>
                --></div>
    </div>
<div class="block">

</div>

</body>
<?php
include('footer.html');
?>
