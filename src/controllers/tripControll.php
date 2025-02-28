<?php

// File: /src/controllers/TripController.php
require_once '../models/Trip.php';

class TripController {
    private $tripModel;

    public function __construct($pdo) {
        $this->tripModel = new Trip($pdo);
    }

    // Aggiungi metodi per CRUD
}