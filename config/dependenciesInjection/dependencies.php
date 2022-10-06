<?php
//dependencies est un tableau contenant des dépendances
use Symfony\Component\HttpFoundation\Request;

    return 
    [
        Request::class => Request::createFromGlobals()
    ];