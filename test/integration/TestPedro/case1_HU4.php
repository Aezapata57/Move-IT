<?php
declare(strict_types=1);
require_once(__DIR__ . '/../../controller/homeController.php');

use PHPUnit\Framework\TestCase;

class SignupTest extends TestCase
{
    // Test cases definidos en el formato proporcionado
    public function testSuccessfulSignup(): void
    {
        // ...
    }

    public function testInvalidEmailSignup(): void
    {
        // Simular una solicitud POST a signup.php con datos inválidos
        $_POST['EMAIL'] = 'usuario'; // El correo electrónico no es válido
        // ... otros campos necesarios

        // Ejecutar signup.php
        ob_start();
        include 'signup.php';
        ob_end_clean();

        // Verificar que el usuario no haya sido registrado correctamente
        $homeController = new homeController();
        $isUserRegistered = $homeController->verificarEmail('usuario');
        $this->assertFalse($isUserRegistered, 'El usuario se registró incorrectamente');
    }

    public function testExistingEmailSignup(): void
    {
        // Simular una solicitud POST a signup.php con datos válidos, pero con un correo electrónico que ya existe
        $_POST['EMAIL'] = 'usuario@dominio.com';
        // ... otros campos necesarios

        // Ejecutar signup.php
        ob_start();
        include 'signup.php';
        ob_end_clean();

        // Verificar que el usuario no haya sido registrado correctamente
        $homeController = new homeController();
        $isUserRegistered = $homeController->verificarEmail('usuario@dominio.com');
        $this->assertFalse($isUserRegistered, 'El usuario se registró incorrectamente');
    }
}
