<?php
    // Incluimos la clase DBPDO.php que es la que ejecuta las consultas preparadas
    include_once("DBPDO.php");

    /**
    *  Clase para las consultas PDO de la clase Usuario
    *  @author Juan José Rubio <admin@tallernt.es>
    **/




    class UsuarioPDO{
        /**
        * Funcion que consulta en la base de datos si existe el Usuario
        * @param String $codUsuario : Codigo del usuario
        * @param String $password : Contraseña del usuario
        * @return array[String] : Array del usuario
        **/
        public static function validarUsuario($username, $password){
            // Inicializamos el $arrayUsuario
            $arrayUsuario=[];
            // Query de la consulta prepatrada
            $query = "select * from usuario where username=? AND password=?";
            // Ejecutamos la consulta preparada y la guardamos en el $resultSet
            $resultSet=DBPDO::ejecutarConsulta($query,[$username,$password]);
            if($_GET['location']=='debug')
            {
                echo "<hr>";
                echo "Debug UsuarioPDO.php<br>";
                echo '$query='."$query<br>";
                echo '$username='."$username<br>";
                echo '$password='."$password<br>";
                echo 'gettype($resultSet)='.gettype($resultSet)."<br>";
                echo '$resultSet='.print_r($resultSet);
                echo "<hr>";
            }
            // Comprobamos cuantos usuarios se han devuelto
            // Si la consulta devuelve null
            if(!$resultSet)
            {
                return null;
            }
            if($resultSet->rowCount())
            {
                // Guardamos el objeto de cada fila en $usuario
                $usuario = $resultSet->fetchObject();
                print_r($usuario);

                $arrayUsuario['username']=$usuario->username;
                $arrayUsuario['password']=$usuario->password;
                $arrayUsuario['email']=$usuario->email;
                $arrayUsuario['nombreApellidos']=$usuario->nombreApellidos;
                $arrayUsuario['fechaNac']=$usuario->fechaNac;
                $arrayUsuario['estatura']=$usuario->estatura;
                $arrayUsuario['peso']=$usuario->peso;
                $arrayUsuario['sexo']=$usuario->sexo;
                $arrayUsuario['tipoCorredor']=$usuario->tipoCorredor;
                $arrayUsuario['cmf5km']=$usuario->cmf5km;
                $arrayUsuario['cmf10km']=$usuario->cmf10km;
                $arrayUsuario['cmfMediaMaraton']=$usuario->cmfMediaMaraton;
                $arrayUsuario['cfMejorMarca']=$usuario->cfMejorMarca;
                $arrayUsuario['cfMejorMaraton']=$usuario->cfMejorMaraton;
                $arrayUsuario['ctNombre']=$usuario->ctNombre;
                $arrayUsuario['cfDistancia']=$usuario->cfDistancia;
                $arrayUsuario['ctDesnivel']=$usuario->ctDesnivel;
                $arrayUsuario['ctTiempo']=$usuario->ctTiempo;
                $arrayUsuario['metaCalorias']=$usuario->metaCalorias;
                $arrayUsuario['metaDistancia']=$usuario->metaDistancia;
                $arrayUsuario['freqMinima']=$usuario->freqMinima;
                $arrayUsuario['freqSencillo']=$usuario->freqSencillo;
                $arrayUsuario['freqCardio']=$usuario->freqCardio;
                $arrayUsuario['freqFitness']=$usuario->freqFitness;
                $arrayUsuario['freqVelocidad']=$usuario->freqVelocidad;
                $arrayUsuario['freqSprint']=$usuario->freqSprint;

            }
            // Devolvemos el array del usuario
            return $arrayUsuario;
        }

    }
