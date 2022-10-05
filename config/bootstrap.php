<?php
    //Chargement de l'autoloader de Composer q'une seule fois
    require_once __DIR__. "/../vendor/autoload.php";

    //Chargement des variables d'environnement
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
    $dotenv->load();