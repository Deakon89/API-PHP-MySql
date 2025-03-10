<?php

class TripCountry {
    protected $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    public function addTripCountry($tripId, $countryId) {
        $stmt = $this->db->prepare("INSERT INTO trip_country (trip_id, country_id) VALUES (?, ?)");
        $stmt->execute([$tripId, $countryId]);
    }

    public function deleteTripCountry($tripId, $countryId) {
        $stmt = $this->db->prepare("DELETE FROM trip_country WHERE trip_id = ? AND country_id = ?");
        $stmt->execute([$tripId, $countryId]);
    }
}