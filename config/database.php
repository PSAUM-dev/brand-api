
<?php

$host     = "localhost";
$database = "brands_database";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host; dbname=$database; charset=utf8", $username, $password);

    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e) {
    http_response_code(500);
    
    echo json_encode(["error" => "Erreur de connexion à la bd" . $e -> getMessage()]);

}