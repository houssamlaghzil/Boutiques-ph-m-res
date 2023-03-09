<?php
/**
 * Boutiques éphémères
 **/
?>
<title>Boutiques éphémères</title>
<link rel="stylesheet" href="../CSS/CSS_to_manage_front/css_var.css">
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
<div class="sign-form-wr">
    <div class="sign-form-inner tab-content">
        <!-- Log In -->
        <div class="form-wr log-in-form tab-pane fade" role="tabpanel" id="log-in-form">
            <h3>Veuillez vous identifier</h3>
            <div class="form-wr-content">
                <form method="post" action="#sw_login">
                    <div class="form-field">
                        <input type="text" name="username" value="" class="form-control" id="inputUsername_l"
                               placeholder="Nom utilisateur"></div>
                    <div class="form-field">
                        <input type="password" name="password" value="" class="form-control" id="inputPassword_l"
                               placeholder="Mot de passe"></div>
                    <div class="form-cp">
                        <div class="form-field">
                            <div class="input-field">
                                <input type="checkbox" name="remember" id="remember" value="true">
                                <label for="remember">
                                    <span></span>
                                    <small>Se souvenir</small>
                                </label>
                            </div>
                        </div>
                        <a href="#" class="forgot-password create-op" title="Créer?">Créer?</a> <span
                                class="or"> / </span>
                        <a href="https://boutiquesephemeres.cdconnect.fr/index.php/admin/user/forgetpassword"
                           class="forgot-password" title="Mot de Passe Oublié?">Mot de Passe Oublié?</a>
                    </div><!--form-cp end-->
                    <button type="submit" class="btn2">S'identifier</button>
                </form>
            </div>
        </div>
        <!-- End Log In -->
        <!-- Sign In -->
        <div class="form-wr sign-up-form tab-pane fade active show" role="tabpanel" id="sign-up-form">
            <h3>création de compte</h3>
            <div class="form-wr-content">
                <form method="post" action="#sw_register">
                    <div class="form-field">
                        <select name="type" class="form-control" id="input_type">
                            <option value="USER">UTILISATEUR</option>
                            <option value="AGENT">AGENT CCI</option>
                        </select></div>
                    <div class="form-field">
                        <input type="text" name="name_surname" value="" class="form-control" id="inputNameSurname"
                               placeholder="Prénom et nom"></div>
                    <div class="form-field">
                        <input type="text" name="username" value="" class="form-control" id="inputUsername"
                               placeholder="Nom utilisateur"></div>
                    <div class="form-field">
                        <input type="text" name="mail" value="" class="form-control" id="inputMail" placeholder="Email">
                    </div>
                    <div class="form-field">
                        <input type="password" name="password" value="" class="form-control" id="inputPassword"
                               placeholder="Mot de passe" autocomplete="new-password"></div>
                    <div class="form-field">
                        <input type="password" name="password_confirm" value="" class="form-control"
                               id="inputPasswordConfirm" placeholder="Confirmer mot de passe"
                               autocomplete="new-password"></div>
                    <div class="form-field">
                        <textarea name="address" cols="40" rows="3" placeholder="Adresse"
                                  class="form-control"></textarea></div>

                    <div class="form-field">
                        <input type="text" name="phone" value="" class="form-control" id="inputPhone"
                               placeholder="Téléphone"></div>

                    <div class="form-field {form_error_captcha}">

                    </div>
            </div>
            <button type="submit" class="btn2">Créer Compte</button>
            </form>
        </div>
    </div>
    <!-- End Sign In -->
</div>
</div>
