<?php
class PokemonController
{

    public function index(){
        $rowset = Pokemons::getAllPokemon();

        require("view/index.php");
    }

    public function form(){
        $pokemon = new Pokemon();
        if(isset($_GET["id"])){
            $pokemon->getPokemon($_GET["id"]);
        }else{
            $pokemon->id=0;
        }
        require("view/form.php");
    }

    public function save(){
        $pokemon = new pokemon();
        $pokemon->nombre=$_POST["nombre"];
        $pokemon->altura=$_POST["altura"];
        $pokemon->categoria=$_POST["categoria"];
        $pokemon->peso=$_POST["peso"];
        $pokemon->habilidad=$_POST["habilidad"];
        $pokemon->tipo=$_POST["tipo"];
        $pokemon->debilidad=$_POST["debilidad"];
        $pokemon->id=$_POST["id"];
        $pokemon->save();

        header('Location: index.php');
    }

    public function delete(){
        $pokemon = new pokemon();
        if(isset($_GET["id"])){
            $pokemon->getPokemon($_GET["id"]);
        }else{
            $pokemon->id=0;
        }
        $pokemon->delete();

        header('Location: index.php');
    }

}