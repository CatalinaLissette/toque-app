<?php

class Database{
    public static function connect(){
        $servidor = 'localhost:3306';
        $user = 'root';
        $pass = '';
        $nom_db = 'toque_web';

        $db = new mysqli($servidor, $user, $pass, $nom_db);
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}