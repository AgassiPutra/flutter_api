<?php
header('Content-Type: application/json');
include "../flutter_api/db.php";

$stmt = $db->prepare("SELECT w.id as id, w.nama_warung as nama_warung, COUNT(s.produk) as jumlah_produk FROM warung w LEFT JOIN stok_warung s ON w.id = s.warung GROUP BY w.nama_warung");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);