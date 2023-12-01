<?php

if(empty($_SESSION['datas'])){
    header("Location:../user/login.php");
    exit();
}

header("Location:panel_control_client.php");

?>