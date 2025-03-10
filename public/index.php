<?php

require_once '../routes/web.php';
require_once '../config/config.php';  // Assicurati che il percorso sia corretto
require_once '../src/controllers/countryControll.php';
require_once '../src/controllers/tripControll.php';
require_once '../src/controllers/TC_controller.php';  // Se hai creato anche questo controller

// Semplice implementazione di un router
$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Parsing dell'URI per ottenere la rotta
$path = parse_url($request, PHP_URL_PATH);
$path = trim($path, '/');

// Gestione delle rotte
switch ($path) {
    case 'countries':
        $countryController = new CountryController($pdo);
        if ($method == 'POST') {
            $name = $_POST['name']; // Sanitizza e valida questo input
            $response = $countryController->addCountry($name);
            echo json_encode($response);
        } elseif ($method == 'GET') {
            $response = $countryController->getAllCountries();
            echo json_encode($response);
        }
        break;

    case 'trips':
        $tripController = new TripController($pdo);
        if ($method == 'POST') {
            $availableSeats = $_POST['availableSeats']; // Sanitizza e valida
            $price = $_POST['price']; // Sanitizza e valida
            $response = $tripController->addTrip($availableSeats, $price);
            echo json_encode($response);
        } elseif ($method == 'GET') {
            $response = $tripController->getAllTrips();
            echo json_encode($response);
        }
        break;

    // Aggiungi altre rotte qui

    default:
        header("HTTP/1.0 404 Not Found");
        echo json_encode(['status' => 'error', 'message' => 'Endpoint not found']);
        break;
}

// Implementa qui eventuali headers CORS o sicurezza aggiuntivi
header("Content-Type: application/json");
