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

    public function getAllCountries() {
        $stmt = $this->db->query("SELECT * FROM countries");
        return $stmt->fetchAll();
    }

    public function updateCountry($id, $name) {
        $stmt = $this->db->prepare("UPDATE countries SET name = ? WHERE id = ?");
        $stmt->execute([$name, $id]);
    }

    public function deleteCountry($id) {
        $stmt = $this->db->prepare("DELETE FROM countries WHERE id = ?");
        $stmt->execute([$id]);
    }

}