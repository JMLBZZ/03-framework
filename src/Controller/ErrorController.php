<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

    class ErrorController
    {
        public function notFound() : Response
        {
            $response = new Response(
                '404 - Page non trouvée',
                Response::HTTP_NOT_FOUND,
                ['content-type' => 'text/html']
            );

            return $response;
        }
    }