<?php
header('Content-Type: application/json');
include "../flutter_api/db.php";

$id = (int) $_POST['id'];

$stmt = $db->prepare("SELECT nama, harga FROM produk WHERE ID = ?");
$stmt->execute([$id]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode([
'result' => $result
]);