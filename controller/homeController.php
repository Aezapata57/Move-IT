<?php
    class homeController{
        private $MODEL;
        public function __construct()
        {
            require_once __DIR__ . '../../model/homeModel.php';
            $this->MODEL = new homeModel();
        }
        //---------------------------REGISTRO---------------------------------//
        public function guardarUsuario($nombre, $apellidos, $email, $telefono, $ciudad, $contraseña, $fecha, $cc, $tipo, $token, $verificado, $intentos, $ultimo_intento, $recuperacion_token, $recuperacion_expiracion) {
            $valor = $this->MODEL->agregarNuevoUsuario($nombre, $apellidos, $this->limpiarcorreo($email), $telefono, $ciudad, $this->encriptarcontraseña($this->limpiarcadena($contraseña)), $fecha, $cc, $tipo, $token, $verificado, $intentos, $ultimo_intento, $recuperacion_token, $recuperacion_expiracion);
            return $valor;
        }

        public function limpiarcadena($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_UNSAFE_RAW);
            $campo = htmlspecialchars($campo);
            return $campo;
        }
        public function limpiarcorreo($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_SANITIZE_EMAIL);
            $campo = htmlspecialchars($campo);
            return $campo;
        }
        public function encriptarcontraseña($contraseña){
            return password_hash($contraseña,PASSWORD_DEFAULT);
        }

        public function verificarEmail($email){
            $result = $this->MODEL->verificarRegistroEmail($email);
            return $result;
        }
        public function verificarCC($cc){
            $result = $this->MODEL->verificarRegistroCC($cc);
            return $result;
        }
        public function verificarTelefono($telefono){
            $result = $this->MODEL->verificarRegistroTelefono($telefono);
            return $result;
        }

        //---------------------------VERIFICAR-REGISTRO---------------------------------//
        public function verificarToken(): bool {
            if (isset($_GET['token'])) {
                $token = $_GET['token'];
                $result = $this->MODEL->validarToken($token);
        
                return $result;
            } else {
                return false;
            }
        }

        //---------------------------INICIO DE SESION---------------------------------//
        public function verificarusuario($email,$contraseña){
            $keydb = $this->MODEL->obtenerclave($email);
            return (password_verify($contraseña, $keydb)) ? $keydb : false;
        }

        public function validarVerificacion($email){
            $result = $this->MODEL->leerVerificacion($email);
            return $result;
        }

        public function RecogerTipo($email){
            $result = $this->MODEL->leerTipo($email);
            return $result;
        }

        //-----------------------------BLOQUEO---------------------------------//

        public function actualizarIntentos($email, $intentos, $ultimoIntento) {
            return $this->MODEL->actualizarIntentos($email, $intentos, $ultimoIntento);
        }

        public function obtenerDatosIntentos($email) {
            return $this->MODEL->obtenerDatosIntentos($email);
        }


        //------------------------------RECUPERACION-TOKEN------------------------------//

        public function generarTokenRecuperacion($email){
            return $this->MODEL->generarTokenRecuperacion($email);
        }

        public function VerificarTokenRecuperacion($token){
            return $this->MODEL->VerificarTokenRecuperacion($token);
        }

        public function obtenerEmailPorTokenRecuperacion($token) {
            $statement = $this->MODEL->obtenerEmailPorTokenRecuperacion($token);
            return $statement;
        }

        //------------------------------RECUPERACION-CONTRASEÑA------------------------------//

        public function actualizarContraseñaYTokenRecuperacion($email, $contraseña) {
            $this->MODEL->actualizarContraseñaYTokenRecuperacion($email, $contraseña);
        }

        //-----------------------------------------------------------------//

        public function crearTabla($email) {
            $this->MODEL->crearTabla($email);
        }

        public function obtenerDatosTabla($email){
            return $this->MODEL->obtenerDatosTabla($email);
        }

        public function guardarArticulos($email, $tipo, $opciones, $cantidad){
            $this->MODEL->guardarArticulos($email, $tipo, $opciones, $cantidad);
        }

        public function eliminarArticulo($id, $email){
            $this->MODEL->eliminarArticulo($id, $email);
        }

        public function tablaExiste($email){
            $result = $this->MODEL->tablaExiste($email);
            return $result;
        }



        public function verificarDireccionEmail($email){
            $result = $this->MODEL->verificarDireccionEmail($email);
            return $result;
        }

        public function recogerOrigen($email){
            $result = $this->MODEL->recogerOrigen($email);
            return $result;
        }

        public function recogerDestino($email){
            $result = $this->MODEL->recogerDestino($email);
            return $result;
        }

        public function recogerFecha($email){
            $result = $this->MODEL->recogerFecha($email);
            return $result;
        }

        public function recogerHora($email){
            $result = $this->MODEL->recogerHora($email);
            return $result;
        }

        public function guardarDirecciones($email, $origen, $destino, $fecha, $hora){
           $result = $this->MODEL->guardarDirecciones($email, $origen, $destino, $fecha, $hora); 
           return $result;
        }

        public function actualizarDirecciones($email, $origen, $destino){
            $result = $this->MODEL->actualizarDirecciones($email, $origen, $destino); 
            return $result;
        }
    
        public function guardarFechaHora($email, $fecha, $hora){
            $result = $this->MODEL->guardarFechaHora($email, $fecha, $hora); 
            return $result;
         }


        public function traerArticulos($email){
            return $this->MODEL->traerArticulos($email);
        }

        //------------------------------ELIMINAR-CUENTA------------------------------//

        public function eliminarCuenta($email){
            $result = $this->MODEL->tablaExiste($email);

            if($result){
                $this->MODEL->borrarInventario($email);
            }
            $this->MODEL->borrarDetalles($email);
            return $this->MODEL->borrarUsuario($email);
        }

        public function borrarInventario($email){
            $this->MODEL->borrarInventario($email);
        }

        public function borrarDetalles($email){
            $this->MODEL->borrarDetalles($email);
        }



        //------------------------------SERVICIO------------------------------//

        public function servicioCompleto($email){
            $this->MODEL->servicioCompleto($email);
        }
        public function servicioCancelado($email,$afectacion,$descripcion){
            $this->MODEL->servicioCancelado($email,$afectacion,$descripcion);
        }

        public function servicioFecha($email, $fecha){
            $this->MODEL->servicioFecha($email, $fecha);
        }

        public function verificarConfirmacion($email){
            return $this->MODEL->verificarConfirmacion($email);
        }

        public function verificarCancelacion($email){
            return $this->MODEL->verificarCancelacion($email);
        }
    }
?>