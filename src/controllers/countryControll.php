<?php
// File: /src/controllers/CountryController.php
require_once '../models/Country.php';

class CountryController {
    private $countryModel;

    public function __construct($pdo) {
        $this->countryModel = new Country($pdo);
    }


    public function addCountry($name) {
        $this->countryModel->addCountry($name);
        return ['status' => 'success', 'message' => 'Country added successfully'];
    }

    public function getAllCountries() {
        $countries = $this->countryModel->getAllCountries();
        return $countries;
    }

    public function updateCountry($id, $name) {
        $this->countryModel->updateCountry($id, $name);
        return ['status' => 'success', 'message' => 'Country updated successfully'];
    }

    public function deleteCountry($id) {
        $this->countryModel->deleteCountry($id);
        return ['status' => 'success', 'message' => 'Country deleted successfully'];
    }
}

