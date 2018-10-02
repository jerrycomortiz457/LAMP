<?php
    class Animal
    {
        public $name;
        public $health = 100;

        public function __get($property)
        {
            if(property_exists($this, $property))
            {
                return $this->property;
            }
        }

        public function __set($property,$value)
        {
            if(property_exists($this,$property))
            {
                $this->$property = $value;
            }
            return $this;
        }

        public function walk()
        {
            echo "<br>$this->name walked..<br>";
            $this->health -= 1;
            return $this;
        }     
        public function run()
        {
            echo "<br>$this->name ran..<br>";
            $this->health -= 5;
            return $this;
        }     

        public function displayHealth()
        {
            echo "<br><mark>Name: $this->name <br> Health: $this->health</mark><br>";
        }

        public function __construct($name)
        {
            $this->name = $name;        
        }
    }
    
    class Dog extends Animal
    {
        public $health = 150;

        public function pet()
        {
            echo "<br>$this->name was petted..<br>";
            $this->health += 5;
            return $this;
        }
    }

    class Dragon extends Animal
    {
        public $health = 170;

        public function fly()
        {
            echo "<br>$this->name flew..<br>";
            $this->health -= 10;
            return $this;
        }

        public function displayHealth()
        {
            parent::displayHealth();
            echo "<mark>This is a dragon!</mark>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animal</title>
    <style>
        mark{
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>

    <?php
         $animal = new Animal('Cheetah');
         $animal->walk()->walk()->walk()->run()->run()->displayHealth();
           
         $chow_chow = new Dog('Cotton');
         $chow_chow->walk()->walk()->walk()->run()->run()->pet()->displayHealth();
      
         $shenron = new Dragon('Shenron');
         $shenron->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();
        
    ?>
    
</body>
</html>