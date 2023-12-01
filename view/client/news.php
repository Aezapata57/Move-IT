<?php
require_once("../head/header_client.php");
require_once("../../controller/homeController.php");

$obj = new homeController();

if (empty($_SESSION['datas'])) {
    header("Location:../user/login.php");
}

$email = $_SESSION['datas'];
$type = $obj->RecogerTipo($email);

if ($type != "Cliente") {
    header("Location:../driver/panel_control_driver.php");
}
?>

<head>
    <title>MOVE-IT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-MrcW6ZMFYlzcLA8NlNl+NtUVUyJoyZ8j9WamEScpJ8H4/FFWzw33PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="../../asset/css/inventary.css" rel="stylesheet">
    <script src="../../asset/js/main.js"></script>
</head>

<body>
    <div class="overlay">
        <div class="loader"></div>
    </div>
    <div class="container-fluid">
        <div class="title_inventory row">
            <p class="text_title_inventory">¿Tienes alguna novedad con tu servicio?</p>
        </div>
        <p class="separate_inventory"></p>
        <div class="text text-center pt-1 pb-1">
            <p class="text-muted conditions mx-2">Cuentanos que deseas realizar con tu servicio.</p>
        </div>
        <p class="separate_inventory"></p>
        <div class="agregar text-center pt-1 pb-1">
            <button type="button" class="btn next" data-bs-toggle="modal" data-bs-target="#cancelar">Cancelar servicio</button>
        </div>
        <div class="modal fade" id="cancelar" data-bs-backdrop="false" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-modal">
                        <h1 class="modal-title fs-5" id="cancelar">Alerta</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-modal">
                        ¿Estas seguro de cancelar tu servicio?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary text-modal" data-bs-dismiss="modal">No, cerrar</button>
                        <button type="button" class="btn btn-danger text-modal" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#confirmarCancelar">Si, deseo cancelar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="confirmarCancelar" data-bs-backdrop="false" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-modal">
                        <h1 class="modal-title fs-5" id="confirmarCancelar">Cancelación de servicio</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="save_time_p.php" method="POST">
                        <div class="modal-body text-modal">
                            Cuentanos el motivo de tu cancelacion
                        </div>
                        <div class="article form-outline mb-2" id="motivos" name="motivos">
                            <select name="motivo" class="form-select form-outline input-mo" required>
                                <option value="" selected disabled>Selecciona un motivo</option>
                                <option value="inncesario">Ya no necesito el servicio</option>
                                <option value="conductor">Problemas con el conductor asignado</option>
                                <option value="servicio">Problemas con el servicio</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div> 
                        <div class="article form-outline mb-2">
                            <input type="text" name="descripcion" class="form-control input-des" placeholder="Descripción" style="display: block; white-space: wrap; overflow: auto;">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary text-modal" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-danger text-modal" data-bs-toggle="modal">Enviar y cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="agregar text-center pt-1 pb-1">
            <button type="button" class="btn next" data-bs-toggle="modal" data-bs-target="#posponer">Posponer servicio</button>
        </div>
        <div class="modal fade" id="posponer" data-bs-backdrop="false" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-modal">
                        <h1 class="modal-title fs-5" id="posponer">Posponer</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="save_time_p.php" method="POST">
                        <div class="modal-body text-modal">
                            Con gusto, ajusta aqui la fecha y hora de tu pedido
                        </div>
                        <div class="title_date row">
                            <p class="text_title_date">Fecha:</p>
                        </div>
                        <div class="article form-outline mb-2">
                            <input type="date" name="fecha" id="fecha" class="form-control input-mo" placeholder="Selecciona una fecha" value="<?php echo $fecha_antigua ?>" required>
                        </div>
                        <div class="title_date row">
                            <p class="text_title_date">Hora:</p>
                        </div>
                        <div class="article form-outline mb-2">
                            <input type="time" name="hora" id="hora" class="form-control input-mo" placeholder="Selecciona una hora" value="" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary text-modal" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-success text-modal">Cambiar hora</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php if(!empty($_GET['error'])):?>
            <div id="alertError" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : ""?>
            </div>
        <?php endif;?>
    </div>
<?php
require_once("../head/footer.php");
?>