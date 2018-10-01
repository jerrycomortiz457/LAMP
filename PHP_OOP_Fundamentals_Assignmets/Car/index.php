<?php
      
    class Car
    {
        public $price;
        public $speed;
        public $fuel;
        public $mileage;
        public $tax;

        public function __get($property)
        {
            if(property_exists($this, $property))
            {
                return $this->property;
            }
        }

        public function __set($property, $value)
        {
            if(property_exists($this, $property))
            {
                $this->$property = $value;
            }
            return $this;
        }

        public function display_all()
        {
        
            echo "<div>Price: $$this->price<br>Speed: {$this->speed} mph<br>Fuel: {$this->fuel}<br>Mileage: {$this->mileage} mpg<br>Tax: {$this->tax}<br></div>";
            echo "<br>";
           
        }

        public function __construct($price, $speed, $fuel, $mileage)
        {
            $this->price = $price;
            $this->speed = $speed;
            if($fuel == '3')
            {
                $this->fuel = 'Full';
            }
            if($fuel == '2')
            {
                $this->fuel = 'Kind of Full';
            }
            else if ($fuel == '1')
            {
                $this->fuel = 'Not Full';
            }
            else if ($fuel == '0')
            {
                $this->fuel = 'Empty';
            }
            $this->mileage = $mileage;

            if($price > 10000)
            {
                $this->tax = 0.15;
            }
            else
            {
                $this->tax = 0.12;
            }
            $this->display_all();
        }
    }

    $car1 = new Car(2000,35,'3',15);   
    $car2 = new Car(2000,5,'1',105);   
    $car3 = new Car(2000,15,'2',95);   
    $car4 = new Car(2000,25,'3',25);   
    $car5 = new Car(2000,45,'0',25);   
    $car5 = new Car(200000000,35,'0',15);   
  

?>