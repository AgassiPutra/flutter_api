<?php
header('Content-Type: application/json');
include "../flutter_api/db.php";

$id_warung = $_GET['id'];
$stmt = $db->prepare("SELECT s.id as id, p.nama as nama_produk FROM stok_warung s INNER JOIN produk p ON s.produk = p.id WHERE s.warung = $id_warung");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);