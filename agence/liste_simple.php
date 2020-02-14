<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$host = "localhost";
$db_name = "agences";
$username = "root";
$password = "";
try{
    $db = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
    $db->exec("set names utf8");
}catch(PDOException $exception){
    echo "Erreur de connexion : " . $exception->getMessage();
}

$sql = "SELECT * FROM agences";

// On prépare la requête
$query = $db->prepare($sql);

// On exécute la requête
$query->execute();

while($row = $query->fetch(PDO::FETCH_ASSOC)){
    extract($row);

    $agen = [
        "id" => $id,
        "nom" => $nom,
        "lat" => $lat,
        "lon" => $lon,
    ];

    $tableauAgences['agences'][] = $agen;
}

// On encode en json et on envoie
echo json_encode($tableauAgences);
