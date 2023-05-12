<?php
?>
<link rel="stylesheet" href="../CSS/form.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    //button next
    $(document).ready(function () {

        $(".form-wrapper .button").click(function () {
            var button = $(this);
            var currentSection = button.parents(".section");
            var currentSectionIndex = currentSection.index();
            var headerSection = $('.steps li').eq(currentSectionIndex);
            currentSection.removeClass("is-active").next().addClass("is-active");
            headerSection.removeClass("is-active").next().addClass("is-active");

            $(".form-wrapper").submit(function (e) {
                e.preventDefault();
            });

            if (currentSectionIndex === 3) {
                $(document).find(".form-wrapper .section").first().addClass("is-active");
                $(document).find(".steps li").first().addClass("is-active");
            }
        });
    });
    //button previous
    $(document).ready(function () {
        $(".form-wrapper .button-back").click(function () {
            var button = $(this);
            var currentSection = button.parents(".section");
            var currentSectionIndex = currentSection.index();
            var headerSection = $('.steps li').eq(currentSectionIndex);
            currentSection.removeClass("is-active").prev().addClass("is-active");
            headerSection.removeClass("is-active").prev().addClass("is-active");

            $(".form-wrapper").submit(function (e) {
                e.preventDefault();
            });

            if (currentSectionIndex === 3) {
                $(document).find(".form-wrapper .section").first().addClass("is-active");
                $(document).find(".steps li").first().addClass("is-active");
            }
        });
    });


</script>
<div class="container-form">
    <div class="wrapper">
        <ul class="steps">
            <li class="is-active">Step 1</li>
            <li>Step 2</li>
            <li>Step 3</li>
        </ul>
        <form class="form-wrapper">
            <fieldset class="section is-active">
                <h3>Details</h3>
                <div class="form-group">
                    <label class="control-label">Votre courriel</label>
                    <div class="controls">
                        <input type="text" name="mail" value="" class="form-control" id="input_mail"
                               placeholder="Votre courrier" autofocus></div>
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

                <div class="button">Next</div>
            </fieldset>

            <fieldset class="section">
                <h3>Account Type</h3>
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

                <div class="button">Next</div>
                <div class="button-back">back</div>
            </fieldset>

            <fieldset class="section">
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
                        <input type="file" name="option6_3" class="form-control input-file" id="inputOption_3_6"
                               placeholder="Images de présentation de la boutique (6 images maximum, format png ou jpg)">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label">Activité<i
                            class="icon-question-sign hint"
                            data-hint="Pin/Marker/Icon for location on map"></i></label>
                        <input type="text" name="option6_3" class="form-control" id="inputOption_3_6"
                               placeholder="Activité">
                </div>

                <div class="button">Reset Form</div>
            </fieldset>

        </form>
    </div>
</div>