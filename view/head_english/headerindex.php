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
                <option value="" disabled selected>EN</option>
                <option value="ES">ES</option>
            </select>
        </div>
        <div class="col-2 about-col px-4">
            <a href="" class="about">About us</a>
        </div>
        <div class="col-2 contact-col px-5">
            <a href="" class="contact">Contact us</a>
        </div>
        <div class="col-4 session-col">
            <div>
                <?php if(empty($_SESSION['datas'])): ?>
                    <div class="row session">
                        <div class="col login">
                            <a href="view/user_english/login_eng.php" class="login-a" id="loader_page">Log in</a>
                        </div>
                        <div class="col-2 separate"></div>
                        <div class="col register">
                            <a href="view/user_english/signup_eng.php" class="register-a" id="loader_page">Register</a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="row session">
                        <div class="col login">
                            <a href="view/client_english/panel_control_client.php" class="home-a" id="loader_page">Go to start</a>
                        </div>
                        <div class="col-2 separate"></div>
                        <div class="col register">
                            <a href="view/user_english/logout_eng.php" class="logout-a" id="loader_page">Log out</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>