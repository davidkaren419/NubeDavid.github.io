<?php
$conn = new mysqli("localhost", "root", "", "papeleria_rosa");
$conn->set_charset("utf8");

$res = $conn->query("SELECT * FROM productos");
$data = [];

while ($row = $res->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>
