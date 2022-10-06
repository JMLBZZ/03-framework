<?php
namespace App\Z\HttpKernel;

use Symfony\Component\HttpFoundation\Response;

    Interface HttpKernelInterface
    {
        /**
         * Cette méthode du noyau lui permet de soumettre la requête
         * et de récupérer la réponse correspondante
         * 
         * grâce au Router
         *
         * @return Response
         */
        
        public function handleRequest() : Response;
    }


