<?php

class Articles{
 //retourne la liste des Robes triées par prix
    public static function getListeRobes()
    {
        $req = Database::connect()->query("SELECT id,nom, prix FROM robes ORDER BY prix");
        return $req->fetchAll();
    }




}
?>