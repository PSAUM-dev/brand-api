<?php

require_once __DIR__ . '/../class/class.brand.php';
require_once __DIR__ . '/../utils.function.php';

class BrandController {
    private $brand;

    public function __construct ($pdo) {
        $this -> brand = new Brand($pdo);
    }

    public function getAll () {
        $country = $_SERVER['HTTP_CF_IPCOUNTRY'] ?? null;

        $data = $this -> brand -> getAll($country);

        jsonResponse(200, $data);
    }

    public function get ($id) {
        $data = $this -> brand -> get($id);
        
        $data ? jsonResponse(200, $data) : jsonResponse(400, ["message" => "Not Found"]);
    }

    public function create () {
        $rawData   = file_get_contents("php://input");
        $inputData = json_decode($rawData);

        if (!$inputData) {
            jsonResponse(400, ["message" => "Invalid data"]);
            return;
        }

        $newBrandId = $this -> brand -> create($inputData);
        jsonResponse(200, ["message" => "Brand created", "brand_id" => $newBrandId]);
    }

    public function delete ($id) {
        $brandDeleted = $this -> brand -> delete($id);
        jsonResponse($brandDeleted ? 200 : 404, ["message" => $brandDeleted ? "Brand deleted" : "Not found"]);
    }

    public function update ($id) {
        $rawData   = file_get_contents("php://input");
        $inputData = json_decode($rawData);

        if (!$inputData) {
            jsonResponse(400, ["message" => "Invalid data"]);
            return;
        }

        $brandUpdated = $this -> brand -> update($id, $inputData);
        jsonResponse(200, ["message" => $brandUpdated]);
    }
}