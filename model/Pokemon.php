<?php

class Pokemon extends Animal
{
    //Variables o atributos
    var $id;
    var $categoria;
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
    public function __construct()
    {
    }

    public function getPokemon($id){
        $mysqli = new mysqli("localhost", "pokemon", "12345", "pokemon");
        if (!$mysqli->connect_errno) {
            $query="select * from pokemon where id=".$id." limit 1";
            $result=$mysqli->query($query);
            if ($result->num_rows > 0) {
                // output data of each row
                $row = $result->fetch_assoc();
                $this->id=$row['id'];
                $this->nombre = $row['nombre'];
                $this->altura = $row['altura'];
                $this->categoria = $row['categoria'];
                $this->peso = $row['peso'];
                $this->habilidad = $row['habilidad'];
                $this->tipo = $row['tipo'];
                $this->debilidad = $row['debilidad'];
            } else {
                $this->id=0;
                echo "0 results";
            }
        }
        $mysqli->close();
    }

    public function delete(){
        $mysqli = new mysqli("localhost", "pokemon", "12345", "pokemon");
        if (!$mysqli->connect_errno) {
            if ($this->id != 0) {
                $query = "DELETE FROM pokemon where id=".$this->id;

                if ($mysqli->query($query) === TRUE) {
                    echo "Pokemon eliminado exitosamente";
                } else {
                    echo "Error al eliminar pokemon";
                    echo $mysqli->error;
                }
            }
        }
        $mysqli->close();
    }

    public function save(){
        $mysqli = new mysqli("localhost", "pokemon", "12345", "pokemon");
        if (!$mysqli->connect_errno) {
            if($this->id==0) {
                $query = "INSERT INTO pokemon (nombre,altura,categoria,peso,habilidad,tipo,debilidad) VALUES ('" . $this->nombre . "','" . $this->altura . "','" . $this->categoria . "','" . $this->peso . "','" . $this->habilidad . "','" . $this->tipo . "','" . $this->debilidad . "' )";
            }else{
                $query = "UPDATE pokemon SET
                    nombre='" . $this->nombre . "',
                    altura='" . $this->altura . "',
                    categoria='" . $this->categoria . "',
                    peso='" . $this->peso . "',
                    habilidad='" . $this->habilidad . "',
                    tipo='" . $this->tipo . "',
                    debilidad='" . $this->debilidad . "'
                    WHERE id = ".$this->id."
                ";
            }

            if ($mysqli->query($query) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error al insertar pokemon";
                echo $mysqli->error;
            }
        }
        $mysqli->close();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $altura
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */

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
}