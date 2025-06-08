<?php
require '../db.php';

$data = json_decode(file_get_contents("php://input"));

if(isset($data->ID)) {
    $stmt = $pdo->prepare("DELETE FROM Usuario WHERE ID = ?");
    if ($stmt->execute([$data->ID])) {
        echo json_encode(["message" => "User deleted"]);
    } else {
        echo json_encode(["message" => "Error"]);
    }
} else {
    echo json_encode(["message" => "ID is missing"]);
}
?>
