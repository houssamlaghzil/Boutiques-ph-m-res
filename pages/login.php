<?php
/**
 * Boutiques éphémères
 **/

?>
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
<div class="popup active" id="sign-popup">
    <h3>Veuillez vous identifier</h3>
    <div class="popup-form form-wr">
        <form id="popup_form_login">
            <div class="alerts-box"></div>
            <div class="form-field">
                <input type="text" name="username" value="" class="form-control" id="inputUsername"
                       placeholder="Nom utilisateur"></div>
            <div class="form-field">
                <input type="password" name="password" value="" class="form-control" id="inputPassword"
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
                <a href="" class="forgot-password" title="Mot de Passe Oublié?">Mot de Passe Oublié?</a>
            </div><!--form-cp end-->
            <button type="submit" class="btn2">S'identifier<i
                        class="fa fa-spinner fa-spin fa-ajax-indicator hidden ajax-indicator"></i></button>
        </form>
        <a href="register.php" class="link-bottom">Créer un nouveau compte</a>
    </div>
</div>
