<?php

require_once("../../controller/homeController.php");
require_once("../user_english/session_started_eng.php");

$obj = new homeController();

$email = $_SESSION['datas'];

$obj->crearTabla($email);
header("Location:inventary.php");

?>