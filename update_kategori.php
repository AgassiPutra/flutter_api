<?php
header('Content-Type: application/json');
include "../flutter_api/db.php";

$id = $_POST['id'];
$nama = $_POST['nama'];

$stmt = $db->prepare("UPDATE kategori SET nama = ? WHERE id = ?");
$result =  $stmt->execute([$nama, $id]);

echo json_encode([
'success' => $result
]);