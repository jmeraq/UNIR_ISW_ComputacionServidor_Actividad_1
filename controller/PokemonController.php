<?php
class PokemonController
{
    var $pokemons;

    function __construct()
    {
        $this->pokemons = [
            1 => new Pokemon("Bulbasaur","0.7 m","Semilla","6.9 kg", "Espesura","Planta","Fuego"),
            2 => new Pokemon("Charmander","0.6 m","Lagartija","8.5 kg", "Mar Llamas","Fuego","Agua"),
            3 => new Pokemon("Squirtle","0.5 m","Tortuguita","9.0 kg", "Torrente","Agua","PLanta"),
            4 => new Pokemon("Caterpie","0.3 m","Gusano","2.9 kg", "Polvo Escudo","Bicho","Fuego"),
            5 => new Pokemon("Pidgey","0.3 m","Pajarito","1.8 kg", "Tumbos","Volador","Electrico")
        ];
    }

    public function index(){

        //Asigno los coches a una variable que estará esperando la vista
        $rowset = $this->pokemons;


        //Le paso los datos a la vista
        require("view/index.php");

    }

}