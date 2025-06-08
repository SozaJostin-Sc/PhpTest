<?php
require '../db.php';

$data = json_decode(file_get_contents("php://input"));

if(isset($data->ID) && isset($data->nameUser)) {
    $stmt = $pdo->prepare("UPDATE Usuario SET nameUser =? WHERE ID=?");
    if ($stmt->execute([$data->nameUser, $data->ID])) {
        echo json_encode(["message" => "User update!"]);
    } else {
        echo json_encode(["message" => "Error"]);
    }
} else {
    echo json_encode(["message" => "Data incomplete"]);
}
?>
