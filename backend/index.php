<?php 
include "Aircraft.php";
include "Airport.php";
include "Flight.php";
echo "Es mācos visu no jauna 🎇 <br><br>";

//veidojam lidmasinu

$manaLidmasina = new Aircraft("Airbuss", "A220-300", 120, 850);
var_dump($manaLidmasina);

echo "<br><br>";

$destination = new Airport("RIX", 56.924, 23.971);
var_dump($destination);

echo "<br><br>";

$departureTime = new DateTime('2023-10-10 15:30:00');
$flight = new Flight("SA503", "Riga", "London", $departureTime, $manaLidmasina);
var_dump($flight);
