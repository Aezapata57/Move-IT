<?php
    require_once("../head_english/header_client_settings.php");
    require_once("../../controller/homeController.php");

    $obj = new homeController();

    if(empty($_SESSION['datas'])){
        header("Location:../user/login.php");
    }

    $email = $_SESSION['datas'];
    $type = $obj->RecogerTipo($email);

    if ($type != "Cliente") {
        header("Location:../driver/panel_control_driver.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MOVE-IT</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://cdn.jsdelivr.net/gh/zebzhao/jQuery.disableAutoFill/dist/jquery.disableAutoFill.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script src="../../asset/js/main.js"></script>
        <script src="../../asset/js/signup.js"></script>
        <link href="../../asset/css/panel_control_client.css" rel="stylesheet">
        <link href="../../asset/css/settings.css" rel="stylesheet">
    </head>
    <body>
        <div class="row g-0">
            <div class="col-lg-6 gradient">

            </div>
            <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
                    <div class="container-1">
                        <div class="row home text-center" href="../../index.php">
                            <div class="logo-text-settings mb-3">SETTINGS</div>
                        </div>
                        <div class="container-2">
                            <div class="row input-setting">
                                <div class="col text-settings mt-2">Delete account</div>
                                <div class="col">
                                    <button type="button" class="btn btn-danger col" data-bs-toggle="modal" data-bs-target="#staticBackdropDelete">Delete</button>
                                </div>
                                <div class="modal fade" id="staticBackdropDelete" data-bs-backdrop="false" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header text-modal">
                                                <h1 class="modal-title fs-5" id="staticBackdropDelete">Alert</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-modal">
                                                Do you want to delete your account from our page?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary text-modal" data-bs-dismiss="modal">Close</button>
                                                <a type="button" class="btn btn-danger text-modal" href="delete_user.php">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    require_once("../head/footer.php");
?>