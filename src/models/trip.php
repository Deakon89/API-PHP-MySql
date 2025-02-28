<?php

class Trip {
    protected $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    // Metodo per aggiungere un viaggio
    public function addTrip($availableSeats) {
        $stmt = $this->db->prepare('INSERT INTO trips (available_seats) VALUES (?)');
        $stmt->execute([$availableSeats]);
    }
}