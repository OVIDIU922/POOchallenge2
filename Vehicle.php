<?php

class Vehicle
 {
    
    public $color;
    public $seats;
    public $energy;

    public function __construct($color, $seats, $energy) {
        $this->color = $color;
        $this->seats = $seats;
        $this->energy = $energy;
    }
    class Truck extends Vehicle {
        private $storageCapacity; 
        private $load = 0; 
    
        public function __construct($color, $seats, $energy, $storageCapacity) {
            parent::__construct($color, $seats, $energy);
            $this->storageCapacity = $storageCapacity;
        }
    
        // Méthode pour vérifier si le camion est plein
        public function checkLoadStatus() {
            if ($this->load < $this->storageCapacity) {
                return "in filling";
            } else {
                return "full";
            }
        }
    
        
    }
    
    
    $myTruck = new Truck("blue", 2, "diesel", 5000);
    echo "Truck load status: " . $myTruck->checkLoadStatus(); 
    


}

?>
