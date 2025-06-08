<?php
require '../db.php';

$data = json_decode(file_get_contents("php://input"));

if(isset($data->ID) && isset($data->nameUser)) {
    $stmt = $pdo->prepare("INSERT INTO Usuario (ID, nameUser) VALUES (?, ?)");
    if ($stmt->execute([$data->ID, $data->nameUser])) {
        echo json_encode(["message" => "User added!"]);
    } else {
        echo json_encode(["message" => "Error"]);
    }
} else {
    echo json_encode(["message" => "Data incomplete"]);
}
?>
