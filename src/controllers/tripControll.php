<?php

// File: /src/controllers/TripController.php
require_once '../models/Trip.php';

class TripController {
    private $tripModel;

    public function __construct($pdo) {
        $this->tripModel = new Trip($pdo);
    }
    public function addTrip($availableSeats, $price) {
        $this->tripModel->addTrip($availableSeats, $price);
        return ['status' => 'success', 'message' => 'Trip added successfully'];
    }

    public function getAllTrips() {
        $trips = $this->tripModel->getAllTrips();
        return $trips;
    }

    public function updateTrip($id, $availableSeats, $price) {
        $this->tripModel->updateTrip($id, $availableSeats, $price);
        return ['status' => 'success', 'message' => 'Trip updated successfully'];
    }

    public function deleteTrip($id) {
        $this->tripModel->deleteTrip($id);
        return ['status' => 'success', 'message' => 'Trip deleted successfully'];
    }

    public function getCheapestTrip() {
        $cheapestTrip = $this->tripModel->getCheapestTrip();
        return $cheapestTrip;
    }
}