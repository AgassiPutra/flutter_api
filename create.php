<?php
header('Content-Type: application/json');
include "../flutter_api/db.php";


$nama = $_POST['nama'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
$stok = $_POST['stok'];

$stmt = $db->prepare("INSERT INTO produk (nama, harga_beli,harga_jual,stok) VALUES (?, ?, ?, ?)");
$result = $stmt->execute([$nama, $harga_beli,$harga_jual,$stok]);

echo json_encode([
'success' => $result
]);