<?php

require_once("../../controller/homeController.php");
require_once("../user/session_started.php");

$obj = new homeController();

$email = $_SESSION['datas'];

$obj->borrarInventario($email);
$obj->borrarDetalles($email);

header("Location: create_service.php");

?>