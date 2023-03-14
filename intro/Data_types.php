<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    
    $x = "hello world";
    $y = 'hello world';

    echo $x;
    echo "<br>";
    echo $y;

    //int 
    $z = 5985;
    var_dump($z);

    //float
    $xx = 10.365;
    var_dump($xx);
    
    //boolean
    $yy = true;
    $zz = false;

    //array
    $cars = array("Volvo", "BMW", "Audi");
    var_dump($cars);

    //Objects
    class Car
    {
        public $color;
        public $model;

        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }
        public function message() {
            return "my car is a " . $this->color. " ". $this->model . "!";
        }
    }

    
    $mycar = new car("black","Volvo");
    echo $mycar -> message();
    echo "<br>";
    
    $mycar = new car("red","Toyota");
    echo $mycar -> message();

    //null
    $x = "hello world";
    $x = null;
    var_dump($x);

    
    ?>
</head>
<body>
    
</body>
</html>