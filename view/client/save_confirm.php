<?php

require_once("../../controller/homeController.php");
require_once("../user/session_started.php");
require_once("../../config/config.php");
require_once("../../vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

$obj = new homeController();

$email = $_SESSION['datas'];

$base = "7500";
$articulos = $obj->traerArticulos($email);

$origen = $obj->recogerOrigen($email);
$destino = $obj->recogerDestino($email);
$fecha = $obj->recogerFecha($email);
$hora = $obj->recogerHora($email);

$preciosPorTipo = [
    "Sofá"=>  0.6,
    "Silla"=>  0.4,
    "Mesa"=>  0.6,
    "Cama"=>  0.8,
    "Colchón"=>  0.8,
    "Armario"=>  0.8,
    "Escritorio"=>  0.6,
    "Estantería"=>  0.6,
    "Nevera/Refrigerador"=>  0.8,
    "Lavadora"=>  0.8,
    "Microondas"=>  0.6,
    "Secadora"=>  0.6,
    "Televisión"=>  0.6,
    "Computador"=>  0.6,
    "Ollas y sartenes"=>  0.4,
    "Vajilla"=>  0.4,
    "Pequeños electrodomésticos"=>  0.4,
    "Ropa"=>  0.4,
    "Zapatos"=>  0.4,
    "Artículos de aseo personal"=>  0.4,
    "Lámparas"=>  0.4,
    "Espejos"=>  0.4,
    "Cuadros/Decoraciones de pared"=>  0.4,
    "Plantas de interior"=>  0.4,
    "Herramientas básicas"=>  0.4,
    "Equipo de jardinería"=>  0.6,
    "Artículos deportivos"=>  0.6,
];

$precioPorKilometro = 750;
$costoTotal = $base;

// Calcular el costo total basado en los artículos y la distancia (reemplaza 'distancia' con tu valor real)
$distancia = 15; // Ejemplo de distancia en kilómetros obtenida de algún lugar

// Crear el mensaje con el costo total y los detalles del cálculo
$title = "<b>TU PEDIDO HA SIDO GUARDADO CON EXITO, NO OLVIDES VERIFICARLO POR MEDIO DE TU CORREO ELECTRONICO PARA QUE SE TE ASIGNE UN CONDUCTOR</b><br>";
$message = "Tarifa base: $" . number_format($base, 2) . " COP<br>";
$message .= "Detalle de artículos y sus precios:<br>";

foreach ($articulos as $articulo) {
    $tipo = $articulo['ARTICULO']; // Obtener el tipo del artículo
    $cantidad = $articulo['CANTIDAD']; // Obtener la cantidad del artículo

    if (isset($preciosPorTipo[$tipo])) {
        $subtotalArticulo = $base * $preciosPorTipo[$tipo] * $cantidad;
        $message .= "&nbsp;&nbsp;&nbsp;&nbsp;- $tipo x $cantidad: $" . number_format($subtotalArticulo, 2) . " COP<br>";
        $costoTotal += $subtotalArticulo;
    }
}

$subtotalDistancia = $distancia * $precioPorKilometro;
$message .= "Costo por distancia ($distancia km a $precioPorKilometro COP/km): $" . number_format($subtotalDistancia, 2) . " COP<br>";

$costoTotal += $subtotalDistancia;
$message .= "Costo total: $" . number_format($costoTotal, 2) . " COP";

$confirmbutton = "http://localhost/move-it/view/client/succes_confirm.php";


$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = SMTP_HOST;
$mail->Port = SMTP_PORT;
$mail->SMTPAuth = true;
$mail->Username = SMTP_USERNAME;
$mail->Password = SMTP_PASSWORD;
$mail->SMTPSecure = SMTP_SECURE;

$mail->setFrom(EMAIL_FROM, EMAIL_NAME);

$mail->addAddress($email);
$mail->Subject = 'Confirma tu pedido';
$mail->isHTML(true);
$mail->Body = "
    <html>
        <head>
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Fredoka&family=Lexend+Giga&family=Poppins&display=swap');
                /* Agrega estilos CSS si es necesario */
                /* Por ejemplo: */
                .container {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    padding: 20px;
                    text-align: center;
                }
                .cont {
                    margin: 0 auto;
                    display: fixed;
                    align-items: center;         
                    font-family: 'Lexend Giga', sans-serif;
                    font-style: normal;
                    font-weight: 400;
                    font-size: 24px;
                    line-height: 30px;
                    letter-spacing: 0.325em;
                    color: #000000;
                }
                .message {
                    font-size: 16px;
                    color: #333;
                    margin-top: 20px;
                }
                /* ...otros estilos... */
            </style>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
            integrity='sha384-MrcW6ZMFYlzcLA8NlNl+NtUVUyJoyZ8j9WamEScpJ8H4/FFWzw33PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
            <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js' integrity='sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r' crossorigin='anonymous'></script>
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js' integrity='sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+' crossorigin='anonymous'></script>
        </head>
        <body>
            <div class='container-fluid'>
                <div class='container'>
                    <div class='row' style='margin: 0 auto;display: fixed;width: 350px;margin-top: 20px;align-items: center;text-align: center;'>
                        <div class='col-4' style='width: 100px;margin: 0 auto;display: fixed;align-items: center;'>
                            <div style='width: 100px;'>
                                <img src='https://i.imgur.com/WEulCzV.png' alt='Logo' style='width: 100px;'>
                            </div>
                        </div>
                        <div class='cont col-8'>
                            <div>MOVE-IT</div>
                        </div>
                    </div>
                    <p class='message'>
                        Tu servicio ha sido ingresado correctamente, puedes verificar aqui tus articulos y el valor total de este:<br>
                        $message<br>
                    </p>
                    <a href='$confirmbutton'>Confirmar pedido</a>
                    <p class='message'>
                        ¡Gracias por usar nuestros servicios, estaremos atentos a tu servicio!
                    </p>
                </div>
            </div>
        </body>
    </html>
";

if (!$mail->send()) {
    echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
} else {
    header("Location: panel_control_client.php?message=" . $title . urlencode($message));
    exit();
}

?>