<?php
session_start(); // Necesario para guardar el ticket

// Verificar que llegaron los datos
if (!isset($_POST["productos"]) || !isset($_POST["total"])) {
    die("No llegaron datos.");
}

// Conexión
$conn = new mysqli("localhost", "root", "", "papeleria_rosa");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recibir productos y total
$productosArray = json_decode($_POST["productos"], true);
$total = floatval($_POST["total"]);

// Guardar en DB
$productosJSON = $conn->real_escape_string(json_encode($productosArray));
$sql = "INSERT INTO ventas (productos, total) VALUES ('$productosJSON', $total)";
$conn->query($sql);

// Crear ticket
$ticket = "тι¢кєт ∂є ¢σмρяα ──★ ˙🍓 !!\n";
$ticket .= "-----------------------------\n";

foreach ($productosArray as $p) {
    $linea = $p["nombre"] . " x" . $p["cantidad"] . 
             " = $" . ($p["precio"] * $p["cantidad"]);
    $ticket .= $linea . "\n";
}

$ticket .= "-----------------------------\n";
$ticket .= "TOTAL: $" . $total . "\n";
$ticket .= "gяα¢ιαѕ ρσя ѕυ ¢σмρяα🪼⋆.ೃ࿔*:･\n";

// Guardar ticket en sesión
$_SESSION["ticket"] = $ticket;

// Redirigir a ticket.php
header("Location: ticket.php");
exit;
?>

