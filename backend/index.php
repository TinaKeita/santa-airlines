<?php 
include "Aircraft.php";
include "Airport.php";
include "Flight.php";
echo "Es mācos visu no jauna 🎇 <br><br>";

//veidojam lidojuma pieredzi

$manaLidmasina = new Aircraft("Airbuss", "A220-300", 120, 850);
var_dump($manaLidmasina);

echo "<br><br>";

$origin = new Airport ("RIX", 56.924, 23.971);
$destination = new Airport("JFK", 40.6413, -73.7781);
var_dump($destination);

echo "<br><br>";

$departureTime = new DateTime("2024-12-15 12:30:00", new DateTimeZone('Europe/Riga'));
$flight = new Flight("SA503", $origin, $destination, $departureTime, $manaLidmasina);

var_dump($flight);
echo "<br><br>";

echo $flight->getDistance();

echo "<br>" . $flight->getDuration();

