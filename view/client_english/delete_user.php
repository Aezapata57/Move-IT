<?php
    require_once('../../controller/homeController.php');
    require_once("../user/session_started.php");

    $obj = new homeController();

    $email = $_SESSION['datas'];
    $obj->eliminarCuenta($email);
    header("Location: ../user_english/logout_eng.php");
?>