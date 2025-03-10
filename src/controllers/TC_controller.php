<?php

class TripCountryController {
    private $tripCountryModel;

    public function __construct($pdo) {
        $this->tripCountryModel = new TripCountry($pdo);
    }

    public function linkTripToCountry($tripId, $countryId) {
        $this->tripCountryModel->addTripCountry($tripId, $countryId);
    }

    public function unlinkTripFromCountry($tripId, $countryId) {
        $this->tripCountryModel->deleteTripCountry($tripId, $countryId);
    }
}