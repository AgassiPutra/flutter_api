<?php
header('Content-Type: application/json');
include "../flutter_api/db.php";


$nama = $_POST['nama'];
$harga = (int) $_POST['harga'];

$stmt = $db->prepare("INSERT INTO produk (nama, harga) VALUES (?, ?)");
$result = $stmt->execute([$nama, $harga]);

echo json_encode([
'success' => $result
]);