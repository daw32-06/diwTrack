<?php
    /**
    *   @author Juan José Rubio Iglesias
    *   Esta API para comprobar un usuario mediante REST
    *   Recibe varios parametros
    *   Metodo             URL
    *   GET      /usuarioWS.php?username={usuario}
    **/

    // Recogemos el metodo de la peticion GET POST ..
    $method = $_SERVER['REQUEST_METHOD'];

    // Indicamos en la cabecera el que la respuesta sera de tipo JSON
    header("Content-Type: application/json");


    // Codigos error REST https://www.ibm.com/support/knowledgecenter/es/SSQP76_8.5.1/com.ibm.odm.dserver.events.ref/topics/ref_dse_restapi_responsecodes_errormsgs.html

    $json ="";
    $operacion = "";

    // Este seria el codigo de error HTTP que devolveriamos si es 0 no mostraremos error
    $error = 200;

    if($method=="GET")
    {
        if(isset($_GET['username']))
        {

            include_once("model/Usuario.php");

            $foto = Usuario::getFotoUsuario($_GET['username']);
            if ($foto)
            {
                $respuesta = array("url"=>$foto);
                //$json = json_encode($respuesta);
                $json = json_encode($foto);
                header("HTTP/1.1 200 200");
            }else{
                $error = 400;
            }


        }else{
            $error = 400;
        }



        if($error!=200){
            header("HTTP/1.1 $error $error");

            $msg = array("error"=>"La solicitud no fue valida.");
            $json = json_encode($msg);
        }
        echo $json;




    }
