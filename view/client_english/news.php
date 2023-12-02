<?php
require_once("../head_english/header_client.php");
require_once("../../controller/homeController.php");

$obj = new homeController();

if (empty($_SESSION['datas'])) {
    header("Location:../user_english/login_eng.php");
}

$email = $_SESSION['datas'];
$type = $obj->RecogerTipo($email);

if ($type != "Cliente") {
    header("Location:../driver_english/panel_control_driver.php");
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
            <p class="text_title_inventory">Do you have any updates on your service?</p>
        </div>
        <p class="separate_inventory"></p>
        <div class="text text-center pt-1 pb-1">
            <p class="text-muted conditions mx-2">Tell us what you want to do with your service.</p>
        </div>
        <p class="separate_inventory"></p>
        <div class="agregar text-center pt-1 pb-1">
            <button type="button" class="btn next" data-bs-toggle="modal" data-bs-target="#cancelar">Cancel service</button>
        </div>
        <div class="modal fade" id="cancelar" data-bs-backdrop="false" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-modal">
                        <h1 class="modal-title fs-5" id="cancelar">Alert</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-modal">
                        Are you sure you want to cancel your service? Remember that you won't be able to recover what's been saved in it.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary text-modal" data-bs-dismiss="modal">No, close</button>
                        <button type="button" class="btn btn-danger text-modal" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#confirmarCancelar">Yes, I want to cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="confirmarCancelar" data-bs-backdrop="false" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-modal">
                        <h1 class="modal-title fs-5" id="confirmarCancelar">Service Cancellation</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="cancel.php" method="POST">
                        <div class="modal-body text-modal">
                            Tell us the reason for your cancellation
                        </div>
                        <div class="article form-outline mb-2" id="motivos" name="motivos">
                            <select name="motivo" id="motivo" class="form-select form-outline input-mo" required>
                                <option value="" selected disabled>Select a reason</option>
                                <option value="Ya no necesito el servicio">No longer need the service</option>
                                <option value="Problemas con el conductor asignado">Issues with assigned driver</option>
                                <option value="Problemas con el servicio">Problems with the service</option>
                                <option value="Otro">Other</option>
                            </select>
                        </div> 
                        <div class="article form-outline mb-2">
                            <input type="text" name="descripcion" id="descripcion" class="form-control input-des" placeholder="Description" style="display: block; white-space: wrap; overflow: auto;">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary text-modal" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger text-modal" data-bs-toggle="modal">Send and cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="agregar text-center pt-1 pb-1">
            <button type="button" class="btn next" data-bs-toggle="modal" data-bs-target="#posponer">Postpone service</button>
        </div>
        <div class="modal fade" id="posponer" data-bs-backdrop="false" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-modal">
                        <h1 class="modal-title fs-5" id="posponer">Postpone</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="save_time_p.php" method="POST">
                        <div class="modal-body text-modal">
                            Sure, adjust the date and time of your order here
                        </div>
                        <div class="title_date row">
                            <p class="text_title_date">Date:</p>
                        </div>
                        <div class="article form-outline mb-2">
                            <input type="date" name="fecha" id="fecha" class="form-control input-mo" placeholder="Select a date" value="<?php echo $fecha_antigua ?>" required>
                        </div>
                        <div class="title_date row">
                            <p class="text_title_date">Time:</p>
                        </div>
                        <div class="article form-outline mb-2">
                            <input type="time" name="hora" id="hora" class="form-control input-mo" placeholder="Select a time" value="" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary text-modal" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success text-modal">Change time</a>
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
require_once("../head_english/footer.php");
?>