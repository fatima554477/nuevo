<?php
session_start();
header('Content-Type: application/json');

$checksumData = [
    $_SESSION['PorfaltaDeFactura12'] ?? '',
    @filemtime(__DIR__ . '/controlador_filtro.php')
];

echo json_encode([
    'checksum' => md5(json_encode($checksumData))
]);
?>