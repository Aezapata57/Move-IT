<?php
    require_once("head.php");
    require_once("../../controller/homeController.php");
    

    $obj = new homeController();
    $cancelado = 0;
    $confirmado = 0;
    $cancelado = $obj->verificarCancelacion($_SESSION['datas']);
    if ($cancelado == 0) {
        $confirmado = $obj->verificarConfirmacion($_SESSION['datas']);
    }
    $tabla = $obj->tablaExiste($_SESSION['datas']);
?>
<div class="container-fluid primer-div">
    <div class="row">
        <div class="col-4">
            <div class="row logo-col">
                <div class="logo-text col">MOVE-IT</div>
                <div class="logo col-3"></div>
            </div>
        </div>
        <?php if($confirmado == 1): ?>
            <div class="col-4 service-col">
                <a class="service" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Solicitar servicio</a>
            </div>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="false" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header text-modal">
                            <h1 class="modal-title fs-5" id="staticBackdrop">Alerta</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-modal">
                            Ya cuentas con un servicio confirmado
                            <br>
                            ¿Que deseas hacer?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary text-modal" data-bs-dismiss="modal">Cerrar</button>
                            <a type="button" class="btn btn-danger text-modal" href="news.php" id="loader_page">Cancelación y quejas</a>
                            <a type="button" class="btn btn-warning text-modal" href="inventary.php" id="loader_page">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php elseif($tabla === true): ?>
            <div class="col-4 service-col">
                <a class="service" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Solicitar servicio</a>
            </div>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="false" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header text-modal">
                            <h1 class="modal-title fs-5" id="staticBackdrop">Alerta</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-modal">
                            Ya cuentas con un servicio en proceso
                            <br>
                            ¿Deseas continuar?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary text-modal" data-bs-dismiss="modal">Cerrar</button>
                            <a type="button" class="btn btn-primary text-modal" href="new_service.php" id="loader_page">Crear nuevo</a>
                            <a type="button" class="btn btn-success text-modal" href="inventary.php" id="loader_page">Continuar</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="col-4 service-col">
                <a href="create_service.php" class="service" id="loader_page">Solicitar servicio</a>
            </div>
        <?php endif; ?>
        <div class="col-2 settings-col">
            <a href="settings.php" class="settings">Ajustes</a>
        </div>
        <div class="col-2 session-col">
            <div>
                <?php if(empty($_SESSION['datas'])): ?>
                    <div class="row session">
                        <div class="col login">
                            <a href="view/user/login.php" class="login-a" id="loader_page">Iniciar sesión</a>
                        </div>
                        <div class="col-2 separate"></div>
                        <div class="col register">
                            <a href="view/user/signup.php" class="register-a" id="loader_page">Registrarse</a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="row session">
                        <div class="col register">
                            <a href="../user/logout.php" class="logout-a" id="loader_page">Cerrar Sesion</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php
    require_once("footer.php");
?>