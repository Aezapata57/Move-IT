<?php
declare(strict_types=1);
require_once(__DIR__ . '/../../controller/homeController.php');

use PHPUnit\Framework\TestCase;

class SignupTest extends TestCase
{
    // ...

    public function testValidReservation(): void
    {
        // Simular una solicitud POST a la página de reserva de mudanza
        $_POST['FECHA_INICIO'] = '2023-08-02';
        $_POST['FECHA_FIN'] = '2023-08-03';
        $_POST['HORA_INICIO'] = '10:00 AM';
        $_POST['HORA_FIN'] = '10:00 AM';
        $_POST['ORIGEN'] = 'Bogotá';
        $_POST['DESTINO'] = 'Medellín';
        $_POST['PESO'] = 1000;
        $_POST['VOLUMEN'] = 10;
        // ... otros campos necesarios

        // Ejecutar la página de reserva de mudanza
        ob_start();
        include 'reservation.php';
        ob_end_clean();

        // Verificar que la reserva se haya realizado correctamente
        $reservationConfirmation = $_POST['RESERVATION_CONFIRMATION'];
        $this->assertNotEmpty($reservationConfirmation, 'La reserva no se realizó correctamente');
    }
}