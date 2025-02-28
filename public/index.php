<?php
require_once '../config/config.php';
require_once '../src/controllers/CountryController.php';
require_once '../src/controllers/TripController.php';

// Semplice router
$uri = trim($_SERVER['REQUEST_URI'], '/');
$method = $_SERVER['REQUEST_METHOD'];

// Esempio di gestione delle rotte
if ($uri == 'countries' && $method == 'POST') {
    $countryController = new CountryController($pdo);
    // gestire la richiesta
}