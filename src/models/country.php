<?php
// File: /src/models/Country.php
class Country {
    protected $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    // Metodo per aggiungere un paese
    public function addCountry($name) {
        $stmt = $this->db->prepare('INSERT INTO countries (name) VALUES (?)');
        $stmt->execute([$name]);
    }
}