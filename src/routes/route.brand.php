
<?php

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../controller/controller.brand.php';
require_once __DIR__ . '/../utils.function.php';

$brandController = new BrandController($pdo);
$serverMethod    = $_SERVER['REQUEST_METHOD'];
$serverPath      = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

$ressource = $serverPath[1] ?? '';
$id = $serverPath[2] ?? null;

if ($ressource != 'brands') {
    jsonResponse(404, ["message" => "Ressource not found"]);
    return;
}

switch ($serverMethod) {

    case 'GET' :
        $id != null ? $brandController -> get($id) : $brandController -> getAll();
        break;

    case 'POST' :
        $brandController -> create();
        break;

    case 'PUT' :
        $id != null ? $brandController -> update($id) : jsonResponse(404, ["message" => "Brand id missing"]);
        break;

    case 'DELETE' :
        $id != null ? $brandController -> delete($id) : jsonResponse(404, ["message" => "Brand id missing"]);
        break;

}
