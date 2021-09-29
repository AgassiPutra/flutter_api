<?php
header('Content-Type: application/json');
include "../flutter_api/db.php";


$nama = $_POST['nama'];

$stmt = $db->prepare("INSERT INTO kategori (nama) VALUES (?)");
$result = $stmt->execute([$nama]);

echo json_encode([
'success' => $result
]);