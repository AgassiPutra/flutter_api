<?php
header('Content-Type: application/json');
include "../flutter_api/db.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
$stok = $_POST['stok'];

$stmt = $db->prepare("UPDATE produk SET nama = ?, harga_beli = ? , harga_jual = ? , stok = ?  WHERE id = ?");
$result =  $stmt->execute([$nama, $harga_beli,$harga_jual,$stok, $id]);

echo json_encode([
'success' => $result
]);