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

    public function getAllTrips() {
        $stmt = $this->db->query("SELECT * FROM trips");
        return $stmt->fetchAll();
    }

    public function updateTrip($id, $availableSeats, $price) {
        $stmt = $this->db->prepare("UPDATE trips SET available_seats = ?, price = ? WHERE id = ?");
        $stmt->execute([$availableSeats, $price, $id]);
    }

    public function deleteTrip($id) {
        $stmt = $this->db->prepare("DELETE FROM trips WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function getCheapestTrip() {
        $stmt = $this->db->query("SELECT * FROM trips ORDER BY price ASC LIMIT 1");
        return $stmt->fetch();
    }
}