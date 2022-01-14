<?php

class Pokemons
{
    public static function getAllPokemon(){
        $mysqli = new mysqli("localhost", "pokemon", "12345", "pokemon");
        $pokemons=[];
        if (!$mysqli->connect_errno) {
            $query="select * from pokemon";

            $result=$mysqli->query($query);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $pokemon = new pokemon();
                    $pokemon->nombre=$row["nombre"];
                    $pokemon->altura=$row["altura"];
                    $pokemon->categoria=$row["categoria"];
                    $pokemon->peso=$row["peso"];
                    $pokemon->habilidad=$row["habilidad"];
                    $pokemon->tipo=$row["tipo"];
                    $pokemon->debilidad=$row["debilidad"];
                    $pokemon->id=$row["id"];
                    $pokemons[]=$pokemon;
                }
            } else {
                echo "0 results";
            }
        }
        $mysqli->close();
        return $pokemons;
    }
}