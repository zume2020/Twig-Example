<?php

// Load the autoloader
require_once __DIR__.'/vendor/autoload.php';

// Twig templates location
$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');

 // Instantiate Twig
$twig = new Twig_Environment($loader);
