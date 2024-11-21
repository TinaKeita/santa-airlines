<?php
class Flight {
    public function __construct(public $flightCode,
                                public $origin,
                                public $destination,
                                public $departureTime,
                                public $aircraft) {
        
    }

    public function getDistance(){
        
        $earthRadius = 6371;

        // Izlidošanas un galamērķa lidostu koordinātes (platums un garums)
        $lat1 = deg2rad($this->origin->platums); 
        $lon1 = deg2rad($this->origin->garums); 
        $lat2 = deg2rad($this->destination->platums); 
        $lon2 = deg2rad($this->destination->garums); 
    
        // Atšķirības aprēķins
        $deltaLat = $lat2 - $lat1;
        $deltaLon = $lon2 - $lon1;
    
        // Haversine formula
        $a = sin($deltaLat / 2) * sin($deltaLat / 2) +
             cos($lat1) * cos($lat2) *
             sin($deltaLon / 2) * sin($deltaLon / 2);
    
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    
        // Attālums starp lidostām (kilometros)
        $distance = $earthRadius * $c;
    
        return round($distance, 2);
    }

    public function getDuration() {
        $attalums = $this->getDistance();
        $atrums = $this->aircraft->speed;
        $laiks = ($attalums / $atrums) * 60 + 30;
        return round ($laiks, 2);
    }
}