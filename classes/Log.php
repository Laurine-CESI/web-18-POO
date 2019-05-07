<?php 

class Log
{
    public static function logWrite($data)
    {
        // Chemin vers le répertoire 'logs'
        $directory = "/logs/";
        // On définit le nom du fichier de log en fonction de la date du jour
        $file = date('Y-m-d') . ".logs";
        // On définit le nom du fichier avec son chemin complet depuis la racine
        $path = dirname(__DIR__) . $directory . $file;
        // Défintion horodatage du message d'erreur passé en argument
        $data = date('H:i:s') . " " . $data;
        // Création de "ressource" après ouverture du fichier horodaté
        $handle = fopen($path, "a");
        // Si la ressource est disponible : 
        if(flock($handle, LOCK_EX)) {
            // On écrit dans le fichier ($data + retour chariot)
            fwrite($handle, $data . PHP_EOL);
            // On débloque le fichier
            flock($handle, LOCK_UN);
        }
        // On ferme le fichier précédemment ouvert
        fclose($handle);

    }
}