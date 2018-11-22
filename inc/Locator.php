<?php

namespace App;

/**
 * Classe de localisation des fichiers JS
 */
class Locator
{
    /**
     * Adresse du manifest.json
     */
    static $manifest = 'js/manifest.json';

    /**
     * Permet de retrouver le chemin courant d'un fichier JS
     *
     * @param string $key
     * @return string
     */
    public static function findPath($key) : string
    {
        if (!\file_exists(self::$manifest)) {
            throw new \Exception("Le fichier {self::$manifest} n'existe pas !");
        }

        $manifest = json_decode(file_get_contents(self::$manifest), true);
        return array_key_exists($key, $manifest) ? $manifest[$key] : $key;
    }
}
