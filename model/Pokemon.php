<?php

class Pokemon
{
    //Variables o atributos
    var $nombre;
    var $altura;
    var $categoria;
    var $peso;
    var $habilidad;
    var $tipo;
    var $debilidad;

    /**
     * @param $nombre
     * @param $altura
     * @param $categoria
     * @param $peso
     * @param $habilidad
     * @param $tipo
     * @param $debilidad
     */
    public function __construct($nombre,$altura, $categoria, $peso, $habilidad, $tipo, $debilidad)
    {
        $this->nombre = $nombre;
        $this->altura = $altura;
        $this->categoria = $categoria;
        $this->peso = $peso;
        $this->habilidad = $habilidad;
        $this->tipo = $tipo;
        $this->debilidad = $debilidad;
    }


    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    /**
     * @return mixed
     */
    public function getHabilidad()
    {
        return $this->habilidad;
    }

    /**
     * @param mixed $habilidad
     */
    public function setHabilidad($habilidad)
    {
        $this->habilidad = $habilidad;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getDebilidad()
    {
        return $this->debilidad;
    }

    /**
     * @param mixed $debilidad
     */
    public function setDebilidad($debilidad)
    {
        $this->debilidad = $debilidad;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


}