<?php

//Incluyo los archivos necesarios
require("./model/Pokemon.php");
require("./controller/PokemonController.php");

//Instancio el controlador
$controller = new PokemonController;

//Ejecuto el método
$controller->index();