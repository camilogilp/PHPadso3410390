<?php
//se usa para imprimir el php
//http://localhost/ADSO3410390/fechas_test.php
echo "Fecha Actual " . "<br>"; //la fecha queda ordenada de manera vertical en la pagina
echo date('Y - m - d  H : i : s') . "<br>"; //Se coloca 
$dateString = '2026-10-26';
$timestamp = strtotime($dateString);
$formattedDate = date('l, F j, Y', $timestamp);
echo $formattedDate . "<br>";
$now = new DateTime();
$formattedDate = $now->format('l, F j, Y H:i:s');
echo $formattedDate . "<br>";
//Actualizacion automatica de la fecha
echo "Hoy es ";
$diasEspanol = [
    'Sunday'    => 'Domingo',
    'Monday'    => 'Lunes',
    'Tuesday'   => 'Martes',
    'Wednesday' => 'Miércoles',
    'Thursday'  => 'Jueves',
    'Friday'    => 'Viernes',
    'Saturday'  => 'Sábado'
];

$fecha = new DateTime();
$diaIngles = $fecha->format('l5'); // Nombre del día en inglé
// .s
// O usar 'w' (0 al 6) para un array indexado:
$diaNumero = $fecha->format('w');

$diasArray = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
echo $diasArray[$diaNumero];

echo date(' d ');
$dateString = ' 26';

echo " y son las ";

echo date('H : i : s') . "<br>"; //Se coloca 
