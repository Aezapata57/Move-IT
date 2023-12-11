
<?php
declare(strict_types=1);
require_once(__DIR__ . '/../../controller/homeController.php');

use PHPUnit\Framework\TestCase;

class SignupTest extends TestCase
{
    // ...

    public function testValidHistory(): void
    {
        // Simular una solicitud POST a la página de historial de reservas
        $_POST['RESERVA'] = 123456;

        // Ejecutar la página de historial de reservas
        ob_start();
        include 'history.php';
        ob_end_clean();

        // Verificar que los datos de la reserva se muestren correctamente
        $reservationData = $_POST['RESERVA_DATA'];
        $this->assertNotEmpty($reservationData, 'Los datos de la reserva no se muestran correctamente');
        $this->assertEquals('123456', $reservationData['numero'], 'El número de reserva no se muestra correctamente');
        $this->assertEquals('2023-08-02', $reservationData['fecha_inicio'], 'La fecha de inicio de la reserva no se muestra correctamente');
        $this->assertEquals('2023-08-03', $reservationData['fecha_fin'], 'La fecha de finalización de la reserva no se muestra correctamente');
        $this->assertEquals('Bogotá', $reservationData['origen'], 'El origen de la reserva no se muestra correctamente');
        $this->assertEquals('Medellín', $reservationData['destino'], 'El destino de la reserva no se muestra correctamente');
        $this->assertEquals(1000, $reservationData['peso'], 'El peso de la reserva no se muestra correctamente');
        $this->assertEquals(10, $reservationData['volumen'], 'El volumen de la reserva no se muestra correctamente');
        $this->assertEquals('Embalaje: Sí', $reservationData['productos_y_servicios_adicionales'], 'Los productos y servicios adicionales de la reserva no se muestran correctamente');
    }
}