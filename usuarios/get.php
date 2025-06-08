<?php
require '../db.php';

$stmt = $pdo->query("SELECT * FROM Usuario");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($usuarios);
?>
