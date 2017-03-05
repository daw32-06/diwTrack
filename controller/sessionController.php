<?php

    /**
    * Libreria para gestionar las sesiones
    * @author Juan José Rubio Iglesias <admin@tallernt.es>
    */

    class SessionController{

        // Con este metodo comprobamos si la sesion esta iniciada
        public static function logueado()
        {
            $r = false;
            if(isset($_SESSION['usuario']) && isset($_SESSION['appId']))
            {
                if($_SESSION['appId']=="diwTrack")
                {
                    $r = true;
                }
            }else{
                $r = false;
            }
            return $r;
        }
        // Con este metodo destruimos la sesion y volvemos al login
        public static function cerrarSesion()
        {
            session_destroy();
            header('Location: index.php?location=indexView.php');
        }
    }
