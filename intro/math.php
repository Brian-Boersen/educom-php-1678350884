<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    
    //returns pi
    echo(pi());// 3.1415926535898

    //return highest or lowwesr number with
    echo(min(0, 150, 30, 20, -8, -200));
    echo(max(0, 150, 30, 20, -8, -200));

    //returns the absolute (positive) value of a number
    echo(abs(-6.7));//returns 6.7

    //get squereroot of a number
    echo(sqrt(64));// returns 8

    //round a float to the nearest integer
    echo(round(6.7));// returns 6
    echo(round(0.49));// returns 0

    //generate a random number
    echo(rand());// returns a random number

    echo(rand(0, 100));// returns random number between 0 and 100
    
    ?>
</head>
<body>
    
</body>
</html>