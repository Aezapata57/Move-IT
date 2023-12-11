<?php
declare(strict_types=1);
require_once(__DIR__ . '/../../controller/homeController.php');

use PHPUnit\Framework\TestCase;

class SignupTest extends TestCase
{
    // ...

    public function testValidTracking(): void
    {
        // Simular una solicitud POST a la página de seguimiento de vehículos
        $_POST['RESERVA'] = 123456;
        $_POST['FECHA'] = '2023-08-02';
        $_POST['HORA'] = '10:00 AM';

        // Ejecutar la página de seguimiento de vehículos
        ob_start();
        include 'tracking.php';
        ob_end_clean();

        // Verificar que la ubicación del vehículo se muestre correctamente
        $actualLocation = $_POST['UBICACION'];
        $this->assertNotEmpty($actualLocation, 'La ubicación del vehículo no se muestra correctamente');
    }
}