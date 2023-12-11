<?php
declare(strict_types=1);
require_once(__DIR__ . '/../../controller/homeController.php');

use PHPUnit\Framework\TestCase;

class SignupTest extends TestCase
{
    // ...

    public function testValidAdditionalProductsAndServices(): void
    {
        // Simular una solicitud POST a la página de selección de productos y servicios adicionales
        $_POST['EMBALAJE'] = '1';
        $_POST['DESMONTAJE'] = '0';
        $_POST['REMONTAJE'] = '0';
        $_POST['ALMACENAMIENTO'] = '0';

        // Ejecutar la página de selección de productos y servicios adicionales
        ob_start();
        include 'additionalProductsAndServices.php';
        ob_end_clean();

        // Verificar que los productos y servicios seleccionados se muestren correctamente
        $selectedProductsAndServices = $_POST['PRODUCTOS_Y_SERVICIOS_SELECCIONADOS'];
        $this->assertArrayHasKey('embalaje', $selectedProductsAndServices, 'El embalaje no se seleccionó correctamente');
        $this->assertArrayHasKey('desmontaje', $selectedProductsAndServices, 'El desmontaje no se seleccionó correctamente');
        $this->assertArrayHasKey('remontaje', $selectedProductsAndServices, 'El remontaje no se seleccionó correctamente');
        $this->assertArrayHasKey('almacenamiento', $selectedProductsAndServices, 'El almacenamiento no se seleccionó correctamente');
    }
}