<?php
    require_once("head.php");
    

?>
<div class="container-fluid primer-div">
    <div class="row">
        <div class="col-3 px-1">
            <div class="row logo-col">
                <div class="logo-text col">MOVE-IT</div>
                <div class="logo col-3"></div>
            </div>
        </div>
        <div class="col-1 language-col px-3">
            <select class="form-select" onchange="changeLanguage(this)">
                <option value="" disabled selected>ES</option>
                <option value="EN">EN</option>
            </select>
        </div>
        <div class="col-2 about-col px-4">
            <a title="Informacion" href="" class="about">Sobre nosotros</a>
        </div>
        <div class="col-2 contact-col px-5">
            <a title="Contacto" href="" class="contact">Contactanos</a>
        </div>
        <div class="col-4 session-col">
            <div>
                <?php if(empty($_SESSION['datas'])): ?>
                    <div class="row session">
                        <div class="col login">
                            <a title="Entrar a la pagina" href="view/user/login.php" class="login-a" id="loader_page">Iniciar sesión</a>
                        </div>
                        <div class="col-2 separate"></div>
                        <div class="col register">
                            <a title="Registarse en la pagina" href="view/user/signup.php" class="register-a" id="loader_page">Registrarse</a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="row session">
                        <div class="col login">
                            <a title="Ir al inicio del perfil" href="view/client/panel_control_client.php" class="home-a" id="loader_page">Ir al inicio</a>
                        </div>
                        <div class="col-2 separate"></div>
                        <div class="col register">
                            <a title="Cerrar tu cuenta de usuario" href="view/user/logout.php" class="logout-a" id="loader_page">Cerrar Sesion</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>