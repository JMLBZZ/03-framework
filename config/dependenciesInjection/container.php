<?php
// nouvelle instance du constructeur du conteneur
    $builder = new DI\ContainerBuilder();

// Ajout des définitions (ce sont des dépendances internes dont notre application)
    $builder->addDefinitions(__DIR__ . "/dependencies.php");

// Création du conteneur grêce à son builder
    $container = $builder->build();

//dès que ce fichier container sera appelé (require) quelquepart, il doit nous retourner le conteneur
    return $container;