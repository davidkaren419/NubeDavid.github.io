<?php
session_start();

// Verifica que exista el ticket
if (!isset($_SESSION["ticket"])) {
    echo "No hay ticket generado.";
    exit;
}

// Convertimos los saltos de línea a <br>
$ticket = nl2br($_SESSION["ticket"]);

// Fecha y hora automática
$fecha = date("d/m/Y");
$hora = date("H:i:s");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ticket de compra</title>
<style>
body {
    background: #ffe6f2;
    font-family: 'Courier New', monospace;
    display: flex;
    justify-content: center;
    padding-top: 40px;
}

.ticket {
    background: white;
    width: 350px;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    border: 2px dashed #ff8ac1;
}

.ticket h2 {
    text-align: center;
    margin-top: 0;
    font-size: 22px;
    color: #ff4fa3;
}

.subinfo {
    text-align: center;
    font-size: 14px;
    color: #ff4fa3;
    margin-bottom: 10px;
}

.ticket pre {
    font-size: 16px;
    white-space: pre-wrap;
    padding: 15px;
    background: #fff4fb;
    border-radius: 10px;
    border-left: 4px solid #ff4fa3;
}

.btn {
    display: block;
    text-align: center;
    margin-top: 15px;
    padding: 10px;
    background: #ff4fa3;
    color: white;
    text-decoration: none;
    border-radius: 10px;
    font-size: 16px;
    transition: 0.2s;
}

.btn:hover {
    background: #ff006e;
}
</style>
</head>

<body>

<div class="ticket">
    <h2>📄 Ticket de Compra</h2>

    <!-- Fecha y hora -->
    <div class="subinfo">
        Fecha: <?php echo $fecha; ?><br>
        Hora: <?php echo $hora; ?>
    </div>

    <pre><?php echo $ticket; ?></pre>

    <a href="Papeleria.php" class="btn">Regresar</a>
</div>

</body>
</html>

