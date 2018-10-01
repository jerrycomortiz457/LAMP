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
            echo "<br>$this->name did Walked..<br>";
            $this->health -= 1;
            return $this;
        }     
        public function run()
        {
            echo "<br>$this->name did Ran..<br>";
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
         $animal->walk()->walk()->walk()->run()->run();
         $animal->displayHealth();
     
         $chow_chow = new Dog('Cotton');
         $chow_chow->walk()->walk()->walk()->run()->run()->pet();
         $chow_chow->displayHealth();
    ?>
    
</body>
</html>