<?php

require_once("../../controller/homeController.php");
require_once("../user/session_started.php");

$obj = new homeController();

$email = $_SESSION['datas'];

$obj->servicioCompleto($email);

$message .= "<li><b>TU SERVICIO HA SIDO CONFIRMADO CON EXITO, YA TE ASIGNAMOS UN CONDUCTOR</b></li>";

header("Location: panel_control_client.php?message=" . $message);
exit();


?>