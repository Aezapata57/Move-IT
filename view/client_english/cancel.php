<?php

require_once("../../controller/homeController.php");
require_once("../user/session_started.php");

$obj = new homeController();

$email = $_SESSION['datas'];

$afectacion = $_POST["motivo"];
$descripcion = $_POST["descripcion"];

$obj->servicioCancelado($email,$afectacion,$descripcion);
$obj->borrarInventario($email);
$obj->borrarDetalles($email);

$message .= "<li><b>YOUR SERVICE HAS BEEN SUCCESSFULLY CANCELED AND YOUR CONSIDERATIONS WILL BE TAKEN</b></li>";
header("Location:panel_control_client.php?message=" . $message);

?>