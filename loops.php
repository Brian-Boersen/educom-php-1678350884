<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    
    //while loop

    $x = 1;
    while ($x <= 100){
        echo "the number is: $x <br>";
        $x +=10;
    }
    
    //do....while loop
    $x = 1;
    do{
        echo "the number is: $x <br>";
        $x++;
    }while( $x <= 5);
    //will execute atleast once even if condition is false
    do{
        echo "the number is: $x <br>";
        $x++;
    }while( $x <= 3);


    //for loop
    for ($i = 0; $i <= 10; $i++){
        echo "the number is: $i <br>";
    }
    //or
    for ($i = 0; $i <= 10; $i+=10){
        echo "the number is: $i <br>";
    }

    //foreach loop for arrays
    $colors = array("red", "green", "blue");

    foreach($colors as $value){
        echo "the color is: $value <br>";
    }

    //with both key and value
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $key => $value){
        echo "the key is: $key <br>";
        echo "the value is: $value <br>";
    }

    foreach($colors as  $key => $value ){
        echo "the key is: $key <br>";
        echo "the value is: $value <br>";
    }

    ///break and continue
    //break stops the loop after condition has been met
    for ($i = 0; $i <= 10; $i++){
        if($i == 4){
            break;
        }
        echo "the number is: $i <br>";
    }
    //continue stops the loop after condition has been met and continue to the next iteration
    for ($i = 0; $i <= 10; $i++){
        if($i == 4){
            continue;
        }
        echo "the number is: $i <br>";
    }

    $x = 0;
    //break and continue is also usable in a while loop
    while($x < 10) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
        $x++;
    }
    while($x < 10) {
        if ($x == 4) {
            continue;
        }
        echo "The number is: $x <br>";
        $x++;
    }
    ?>
</head>
<body>
    
</body>
</html>