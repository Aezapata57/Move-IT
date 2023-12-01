<?php

require_once("../../controller/homeController.php");
require_once("../user/session_started.php");

$obj = new homeController();

$email = $_SESSION['datas'];

$obj->verficarServicio($email);

$message .= "<li><b>YOUR SERVICE HAS BEEN CONFIRMED SUCCESSFULLY, WE ALREADY ASSIGNED YOU A DRIVER</b></li>";

header("Location: panel_control_client.php?message=" . $message);
exit();


?>