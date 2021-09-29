<?php
header('Content-Type: application/json');
include "../flutter_api/db.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = (int) $_POST['harga'];

$stmt = $db->prepare("UPDATE produk SET nama = ?, harga = ? WHERE id = ?");
$result =  $stmt->execute([$nama, $harga, $id]);

echo json_encode([
'success' => $result
]);