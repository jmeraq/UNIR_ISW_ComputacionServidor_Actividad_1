<?php
class PokemonController
{
    var $pokemons;

    function __construct()
    {
        $this->pokemons = [
            1 => new Pokemon("Wolkswagen","Polo","negro","Rebeca"),
            2 => new Pokemon("Toyota","Corolla","verde","Marcos"),
            3 => new Pokemon("Skoda","Octavia","gris","Mario"),
            4 => new Pokemon("Kia","Niro","azul","Jairo")
        ];
    }

    public function index(){

        //Asigno los coches a una variable que estará esperando la vista
        $rowset = $this->pokemons;


        //Le paso los datos a la vista
        require("view/index.php");

    }

}