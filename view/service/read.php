<?php
    require_once('../head/headerservice.php');
    require_once('../head/head.php');
    require_once('../../controller/homeController.php');
    $obj = new homeController();
    $date = $obj->readservice($_GET['ID']);
?>

<h2 class="text-center mt-3">Detalles del servicio</h2>

<div class="pb-3">
    <a href="show.php" class="btn btn-primary mx-3">Regresar</a>
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Eliminar
    </a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Una vez eliminado no se podra recuperar el registro 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                    <a href="delete.php?ID=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Origen</th>
            <th scope="col">Destino</th>
            <th scope="col">Hora</th>
            <th scope="col">Fecha</th>
            <th scope="col">Tipo</th>
            <th scope="col">Cantidad</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th><?= $date[0] ?></th>
            <th><?= $date[1] ?></th>
            <th><?= $date[2] ?></th>
            <th><?= $date[3] ?></th>
            <th><?= $date[4] ?></th>
            <th><?= $date[5] ?></th>
            <th><?= $date[6] ?></th>
        </tr>
    </tbody>
</table>
<?php
    require_once('../head/footer.php');

?>