<?php

//Incluyo los archivos necesarios
require("./model/Pokemon.php");
require("./model/Pokemons.php");
require("./controller/PokemonController.php");

$route="";
if(isset($_GET['route'])) {
    $route=$_GET['route'];
}

switch ($route) {
    case "formulario":
        $controller = new PokemonController;
        $controller->form();
        break;
    case "save":
        $controller = new PokemonController;
        $controller->save();
        break;
    case "delete":
        $controller = new PokemonController;
        $controller->delete();
        break;
    default:
        $controller = new PokemonController;
        $controller->index();
}
