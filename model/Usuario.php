<?php
include_once('UsuarioPDO.php');

/**
 * Clase usuario
 * @author Juan José Rubio Iglesias
 * Fecha de última modificación: 04/03/2017
 */

class Usuario
{
    protected $username;
    protected $password;
    protected $email;
    protected $nombreApellidos;
    protected $fechaNac;
    protected $estatura;
    protected $peso;
    protected $sexo;
    protected $tipoCorredor;
    protected $cmf5km;
    protected $cmf10km;
    protected $cmfMediaMaraton;
    protected $cfMejorMarca;
    protected $cfMejorMaraton;
    protected $ctNombre;
    protected $cfDistancia;
    protected $ctDesnivel;
    protected $ctTiempo;
    protected $metaCalorias;
    protected $metaDistancia;
    protected $freqMinima;
    protected $freqSencillo;
    protected $freqCardio;
    protected $freqFitness;
    protected $freqVelocidad;
    protected $freqSprint;
    protected $foto;

    /**
     * Constructor
     */
    public function __construct($username, $password, $email, $nombreApellidos, $fechaNac, $estatura, $peso, $sexo, $tipoCorredor, $cmf5km, $cmf10km, $cmfMediaMaraton, $cfMejorMarca, $cfMejorMaraton, $ctNombre, $cfDistancia,$ctDesnivel,$ctTiempo,$metaCalorias,$metaDistancia,$freqMinima,$freqSencillo,$freqCardio,$freqFitness,$freqVelocidad,$freqSprint)
    {
        $this->username=$username;
        $this->password=$password;
        $this->email=$email;
        $this->nombreApellidos=$nombreApellidos;
        $this->fechaNac=$fechaNac;
        $this->estatura=$estatura;
        $this->peso=$peso;
        $this->sexo=$sexo;
        $this->tipoCorredor=$tipoCorredor;
        $this->cmf5km=$cmf5km;
        $this->cmf10km=$cmf10km;
        $this->cmfMediaMaraton=$cmfMediaMaraton;
        $this->cfMejorMarca=$cfMejorMarca;
        $this->cfMejorMaraton=$cfMejorMaraton;
        $this->ctNombre=$ctNombre;
        $this->cfDistancia=$cfDistancia;
        $this->ctDesnivel=$ctDesnivel;
        $this->ctTiempo=$ctTiempo;
        $this->metaCalorias=$metaCalorias;
        $this->metaDistancia=$metaDistancia;
        $this->freqMinima=$freqMinima;
        $this->freqSencillo=$freqSencillo;
        $this->freqCardio=$freqCardio;
        $this->freqFitness=$freqFitness;
        $this->freqVelocidad=$freqVelocidad;
        $this->freqSprint=$freqSprint;

        $defaultFoto = "img";
        $this->foto=$defaultFoto;
        //$username, $password, $email, $nombreApellidos, $fechaNac, $estatura, $peso, $sexo, $tipoCorredor, $freqMin, $freqSprint, $freqVelocidad, $freqCardio, $freqFitness, $cmf5km, $cmf10km, $cmfMediaMaraton, $cfMejorMarca, $cfMejorMaraton, $ctNombre, $cfDistancia,$ctDesnivel,$ctTiempo,$metaCalorias,$metaDistancia,$freqMinima,$freqSencillo,$freqCardio,$freqFitness,$freqVelocidad,$freqSprint,$foto
    }

    /*
    * Metodo magico get
    */
    public function __get($property)
    {
        if (property_exists($this, $property))
        {
            return $this->$property;
        }
    }
    /*
    * Metodo magico set
    *
    */
    public function __set($property, $value)
    {
        if (property_exists($this, $property))
        {
            $this->$property = $value;
        }
    }


    /** FUNCIONES BBDD **/


    /**
    * Funcion que llama a UsuarioPDO para validar el usuario
    * @param String $codUsuario : Codigo del usuario
    * @param String $password : Contraseña del usuario
    * @return array[String] : Array del usuario
    **/

    public static function getFotoUsuario($username)
    {
        //Inicializamos objUsuario
        $objUsuario = null;
        //Consultamos que el usuario existe
        $url = UsuarioPDO::getFotoUsuario($username);
        return $url;
    }
    
    public static function validarUsuario($username,$password)
    {
        //Inicializamos objUsuario
        $objUsuario = null;
        //Consultamos que el usuario existe
        $arrayUsuarios = UsuarioPDO::validarUsuario($username,$password);
        //Si el array de usuarios contiene algun usuario instancia el objUsuario;
        if($arrayUsuarios){
            $objUsuario = new Usuario(
                $username,
                $password,
                $arrayUsuarios['email'],
                $arrayUsuarios['nombreApellidos'],
                $arrayUsuarios['fechaNac'],
                $arrayUsuarios['estatura'],
                $arrayUsuarios['peso'],
                $arrayUsuarios['sexo'],
                $arrayUsuarios['tipoCorredor'],
                $arrayUsuarios['cmf5km'],
                $arrayUsuarios['cmf10km'],
                $arrayUsuarios['cmfMediaMaraton'],
                $arrayUsuarios['cfMejorMarca'],
                $arrayUsuarios['cfMejorMaraton'],
                $arrayUsuarios['ctNombre'],
                $arrayUsuarios['cfDistancia'],
                $arrayUsuarios['ctDesnivel'],
                $arrayUsuarios['ctTiempo'],
                $arrayUsuarios['metaCalorias'],
                $arrayUsuarios['metaDistancia'],
                $arrayUsuarios['freqMinima'],
                $arrayUsuarios['freqSencillo'],
                $arrayUsuarios['freqCardio'],
                $arrayUsuarios['freqFitness'],
                $arrayUsuarios['freqVelocidad'],
                $arrayUsuarios['freqSprint']
            );
        }
        //Devolvemos el objeto usuario
        return $objUsuario;
    }
}
