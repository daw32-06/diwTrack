<?php
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
    protected $freqMin;
    protected $freqSprint;
    protected $freqVelocidad;
    protected $freqCardio;
    protected $freqFitness;
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
    public function __construct($username, $password, $email, $nombreApellidos, $fechaNac, $estatura, $peso, $sexo, $tipoCorredor, $freqMin, $freqSprint, $freqVelocidad, $freqCardio, $freqFitness, $cmf5km, $cmf10km, $cmfMediaMaraton, $cfMejorMarca, $cfMejorMaraton, $ctNombre, $cfDistancia,$ctDesnivel,$ctTiempo,$metaCalorias,$metaDistancia,$freqMinima,$freqSencillo,$freqCardio,$freqFitness,$freqVelocidad,$freqSprint)
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
        $this->freqMin=$freqMin;
        $this->freqSprint=$freqSprint;
        $this->freqVelocidad=$freqVelocidad;
        $this->freqCardio=$freqCardio;
        $this->freqFitness=$freqFitness;
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
}
