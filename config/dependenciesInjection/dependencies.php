<?php

//dependencies est un tableau contenant des dépendances
use Twig\Environment;
use App\Z\Routing\Router;
use Twig\Loader\FilesystemLoader;
use App\Z\Routing\RouterInterface;
use App\Controller\ErrorController;
use App\Controller\CountryController;
use Symfony\Component\HttpFoundation\Request;

    return [

        Request::class => Request::createFromGlobals(),

        'controllers' => [
            "CountryController" => CountryController::class,
            "ErrorController"   => ErrorController::class
        ],

        RouterInterface::class => DI\create(Router::class)->constructor(DI\get(Request::class), DI\get('controllers')),

        Environment::class => function(){
            $loader = new FilesystemLoader(__DIR__.'/../../templates');
            $twig = new Environment($loader, [
                'cache' => __DIR__."/../../var/cache/dev/twig", //en mettant le cache, ça sauvegarde les données dans le dossier var... et donc il ne va pas vider le cache++ alors on met le script dans le composer.json
            ]);
            return $twig;
        }
    ];