<?php
namespace App\Z\Routing;

    Interface RouterInterface
    {
        /**
         * cette méthode du routeur récupère les contrôleurs, les trie et les sauvegarde dans l'armoire à routes en fonction de leur nom
         * @param array $controllers
         * @return void
         */
        public function sortRoutesByName($controllers) : void;

        /**
         * Cette méthode du routeur permet de l'exécuter
         * Et elle nous retourne une réponse qui peut être :
         *  - nulle di l'uri de l'url ne match pas avec l'uri de la route dont l'application attend la réception
         *  - un tableau contenant le contrôleur censé gérer la requête si match
         * 
         * URI ==> c'est ce qui se trouve après le nom de domaine dans la barre d'adresse
         *
         * @return array|null
         */
        public function run() : ?array;//?==> peut être null ou bien un tableau
    }