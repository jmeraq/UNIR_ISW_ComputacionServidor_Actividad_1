<?php

//Incluyo los archivos necesarios
require("./model/Animal.php");
require("./model/Pokemon.php");
require("./model/Pokemons.php");
require("./controller/PokemonController.php");

$route="";
if(isset($_GET['route'])) {
    $route=$_GET['route'];
}
$controller = new PokemonController;
switch ($route) {
    case "formulario":
        $controller->form();
        break;
    case "save":
        $controller->save();
        break;
    case "delete":
        $controller->delete();
        break;
    default:
        $controller->index();
}
