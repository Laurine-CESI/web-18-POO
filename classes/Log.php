<?php 

class Log
{
    public static function logWrite()
    {
        // Chemin vers le répertoire 'logs'
        $directory = "/logs/";

        $file = date('Y-m-d') . ".logs";
    }
}