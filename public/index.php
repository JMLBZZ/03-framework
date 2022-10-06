<?php

// ##################################################################### //
// ############# Bienvenue dans notre framework fait maison ############ //
// ##################################################################### //

/*----------------------------------------------------------------------
L'index.php représente le "FRONT CONTROLLER"
Ses rôles sont :
    - Charger le fichier de configuration
    - Créer une nouvelle instance du noyau
    - Récupérer la réponse qui sera ensuite envoyée au navigateur
----------------------------------------------------------------------*/

// Chargement du fichier de configuration
require_once dirname(__DIR__). "/config/bootstrap.php";
dump($_ENV);
dd("Hello");//équivaut à Dump and Die ==> affiche et stop l'exécution


    // Création d'une nouvelle instance du noyau de l'application
    

    // Soumission de la requête au noyau
    // Récupération de la réponse


    // Envoi de la réponse au navigateur