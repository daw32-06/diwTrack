<?php
    /**
    * Controlador de Login y Registro de la pagina de inicio
    * @author Juan Jose Rubio Iglesias <admin@tallernt.es>
    * Ultima revision 05/03/2017
    **/


    // Comprobamos si existe una sesion iniciada por si el usuario ha cambiado la url a la fuerza
    /*if(SessionController::logueado())
    {
        header("Location: index.php?location=main");
    }*/

    include 'view/indexView.php';



    // Comprobamos si se han enviado todos los campos
    if(isset($_POST['signin']))
    {

        // Comprobamos que se han enviado todos los campos
        if($_POST['username'] && $_POST['password']){

            // Cargamos el modelo del Usuario y comprobamos si existe
            require_once "model/Usuario.php";

            // LLamada al modelo
            $usuario = Usuario::validarUsuario(trim($_REQUEST['username']), hash('sha256', $_REQUEST['password']));

            // Si no se han encontrado resultados revolvera null
            if(is_null($usuario))
            {
                $loginCorrecto = false;
            }else{
                $loginCorrecto = true;
            }

            // Si el login es correcto creamos cargamos el valor usuario en la sesion y redirigimos a la pagina principal
            // Si se detecta un error mostrara un mensaje de error justo debajo de los input
            if($loginCorrecto)
            {
                //pasar array de usuario
                $_SESSION['usuario']=$usuario;
                header('Location: index.php?location=main');

            } else {
                echo "<script>alert('El usuario no existe!!!!');</script>";
                echo "<script>document.getElementById('msg').innerHTML='Usuario no encontrado!';</script>";
            }
        // Esta es una comprobacion por si se ha pulsado el boton enviar sin haber introducido todos los campos
        }else if(isset($_POST['signin'])){
            echo "<script>document.getElementById('msg').innerHTML='Introduce todos los campos';</script>";
        }
    }

    if(isset($_POST['signup']))
    {
        die("Has pulsado el boton de registro! :D");
    }

    // Incluimos la vista del index (Login)
?>
