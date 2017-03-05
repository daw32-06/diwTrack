<?php
    include_once("config/config.php");
    if(!DEBUG)
    {
        die("¿Que pretendes hacer?, la depuracion esta deshabilitada");
    }

    if(!isset($_GET['class']))
    {
        echo "Error! Introduce como parametro get la variable class y la clase que quieres depurar";
    }else{
        if($_GET['class']=="usuario")
        {
            include_once("testUsuario.php");
        }
    }
