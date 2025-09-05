<?php
if (!isset($_SESSION)) {
    session_start();
}

define('__ROOT__', dirname(__FILE__));
require_once __ROOT__ . '/class.epcinnAE.php';

$conexion = new accesoclase();
$con = $conexion->db();

// Obtener todo el contenido de la tabla para generar un checksum
$result = mysqli_query($con, "SELECT * FROM 02SUBETUFACTURA");
$rows = $result ? mysqli_fetch_all($result, MYSQLI_ASSOC) : [];

// El checksum cambiará ante cualquier inserción, actualización o eliminación
$checksum = md5(json_encode($rows));

header('Content-Type: application/json');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');

echo json_encode(['checksum' => $checksum]);
?>