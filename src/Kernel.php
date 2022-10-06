<?php
namespace App;

use Psr\Container\ContainerInterface;
use App\Z\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

    /**
     * --------------------------------------------------------------------------
     * Kernel
     * 
     * C'est le noyau de notre application
     * 
     * Ses rôles pricipaux : 
     *              - Soummettre la requête
     *              - Récupérer la réponse correspondante
     *              - Retourner cette réponse au "FrontController" (index.php)
     * 
     * @author: Jamel BOUAZZA <jamel.bouazza@hotmail.fr>
     * @version: 1.0.0
     * --------------------------------------------------------------------------
    */

    class Kernel implements HttpKernelInterface
    {
        /**
         * Cette propriété représente le conteneur de dépendances
         *
         * @var ContainerInterface
         */
        //private ContainerInterface $container;// A REMETTRE LORS DE LINSTALLATION PHP 8 VIA HOMEBREW

        private $container;//à supprimer le non typage après l'installation de php 8

        /**
         * A chaque fois qu'une nouvelle instance du noyau est créé : 
         *      - On récupère le conteneur de dépendances
         *
         * @param ContainerInterface $container
         */
        public function __construct(ContainerInterface $container)
        {
            $this->container = $container;
            //dd($container);
        }
        
        
        /**
         * Cette méthode du noyau lui permet de soumettre la requête
         * et de récupérer la réponse correspondante
         * 
         * grâce au Router
         *
         * @return Response
         */
        
        public function handleRequest() : Response
        {
            dd($this->container->get(Request::class));
        }
    }