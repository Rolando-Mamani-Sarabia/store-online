<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mascota = $_POST["mascota"];

$servicios = [
  "Consulta general - Bs 60",
  "Vacuna antirrabica - Bs 40",
  "Bano y corte - Bs 50"
];

echo "<h1>Turno reservado en Veterinaria Patitas</h1>";

echo "<p>Nombre: " . $nombre . "</p>";
echo "<p>Correo: " . $correo . "</p>";
echo "<p>Mascota: " . $mascota . "</p>";

echo "<h2>Nuestros servicios</h2>";
echo "<ul>";
foreach ($servicios as $servicio) {
  echo "<li>" . $servicio . "</li>";
}
echo "</ul>";

echo "<p>Te atiende Rolando Mamani Sarabia :)</p>";
?>