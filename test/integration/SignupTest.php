<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ ."/../../controller/homeController.php";

class SignupTest extends TestCase {

    private $homeController;

    protected function setUp(): void {
        $this->homeController = new homeController();
    }

    //---------------------------REGISTRO---------------------------------//
    public function testGuardarUsuario1() {
        // Definir datos de prueba
        $nombre = "John";
        $apellidos = "Doe";
        $email = "john.doe@example.com";
        $telefono = "123456789";
        $ciudad = "Ciudad";
        $contraseña = "password123";
        $fecha = "2023-01-01";
        $cc = "123456789";
        $tipo = "cliente";
        $token = "";
        $verificado = "";
        $intentos = "";
        $ultimo_intento = "";
        $recuperacion_token = "";
        $recuperacion_expiracion = "";

        // Ejecutar el método que se va a probar
        $result = $this->homeController->guardarUsuario(
            $nombre, $apellidos, $email, $telefono, $ciudad, $contraseña, $fecha, $cc,
            $tipo, $token, $verificado, $intentos, $ultimo_intento, $recuperacion_token,
            $recuperacion_expiracion
        );

        // Verificar el resultado
        $this->assertTrue($result, "Failed to save user data");
    }

    public function testGuardarUsuario2() {
        // Definir datos de prueba
        $nombre = "Marco";
        $apellidos = "Perez";
        $email = "marquito.doe@example.com";
        $telefono = "23456789";
        $ciudad = "Bogota";
        $contraseña = "password123123";
        $fecha = "2023-01-01";
        $cc = "123456789";
        $tipo = "cliente";
        $token = "";
        $verificado = "";
        $intentos = "";
        $ultimo_intento = "";
        $recuperacion_token = "";
        $recuperacion_expiracion = "";

        // Ejecutar el método que se va a probar
        $result = $this->homeController->guardarUsuario(
            $nombre, $apellidos, $email, $telefono, $ciudad, $contraseña, $fecha, $cc,
            $tipo, $token, $verificado, $intentos, $ultimo_intento, $recuperacion_token,
            $recuperacion_expiracion
        );

        // Verificar el resultado
        $this->assertTrue($result, "Failed to save user data");
    }

    public function testLimpiarCadena() {
        $input = "<script>alert('Hello');</script>";
        $cleaned = $this->homeController->limpiarcadena($input);
        $this->assertStringNotContainsString("<script>", $cleaned, "Failed to clean string");
    }

    public function testLimpiarCorreo() {
        $input = "john.doe@example.com<script>";
        $cleaned = $this->homeController->limpiarcorreo($input);
        $this->assertEquals("john.doe@example.com", $cleaned, "Failed to clean email");
    }

    // Add more tests for other methods in the HomeController class

    //---------------------------VERIFICAR-REGISTRO---------------------------------//

    public function testVerificarToken() {
        // Create a test token and validate it
        $_GET['token'] = "test_token";
        $result = $this->homeController->verificarToken();
        $this->assertFalse($result, "Failed to verify token");
    }

    //---------------------------INICIO DE SESION---------------------------------//

    public function testVerificarEmail() {
        $email = "john.doe@example.com";
        $result = $this->homeController->verificarEmail($email);
        $this->assertFalse($result, "Correo ya existente");
    }

    // Add more tests for other methods in the HomeController class

    //-----------------------------BLOQUEO---------------------------------//

    public function testActualizarIntentos() {
        $email = "john.doe@example.com";
        $intentos = 3;
        $ultimoIntento = time();
        $result = $this->homeController->actualizarIntentos($email, $intentos, $ultimoIntento);
        $this->assertTrue($result, "Failed to update login attempts");
    }

    // Add more tests for other methods in the HomeController class

    // ... Add more test cases for other functionalities ...

    //-----------------------------CLEANUP---------------------------------//

    protected function tearDown(): void {
        // Cleanup, if necessary
    }
}