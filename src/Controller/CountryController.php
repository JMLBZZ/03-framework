<?php
namespace App\Controller;

use App\Z\Routing\Route;

    class CountryController
    {
        #[Route('/test/{id}', name: 'country.index', methods: ['GET'])]//le dièze veut dire qu'on veut créer un "attribut php8" ==> cette ligne de code est une programmation évènementielle
        public function index()
        {
            dd('page index');
        }
    }