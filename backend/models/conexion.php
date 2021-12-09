<?php

class Conexion
{

    static public function conectar()
    {
        $link = new PDO(
            "mysql:host=localhost;dbname=always_glaciers",
            "root",
            ""
        );

        // $link = new PDO(
        //     "mysql:host=localhost;dbname=c2101108_turismo",
        //     "c2101108_turismo",
        //     "FEmo88rede"
        // );

        $link->exec("set names utf8");

        return $link;
    }
}