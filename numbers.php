<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    
    //check if its an int// other way is is_integer() or is_long()
    $x = 5985;
    var_dump(is_int($x));

    $x = 59.85;
    var_dump(is_int($x));//FALSE is a float now

    //check if it's a float// also is_double() exist
    $x = 10.365;
    var_dump(is_float($x));

    //if a number is larger than a float can represent, then it gets converted to infinate
    //hier is how to check if it's infinate: is_infinate()
    //can also check if finite with is_infinite()
    //however var_dump returns the data type anyway
    $x = 1.9e411;
    var_dump($x);

    //NaN means it is not a number or a complex mathimatical operation
    //you can check with is_nan()
    //however......
    $x = acos(8);
    var_dump($x);

    //The PHP is_numeric() function can be used to find whether a variable is numeric. 
    //The function returns true if the variable is a number or a numeric string, false otherwise.
    $x = 5985;
    var_dump(is_numeric($x));//true

    $x = "5985";
    var_dump(is_numeric($x));//true

    $x = "59.85" + 100;
    var_dump(is_numeric($x));//true

    $x = "Hello";
    var_dump(is_numeric($x));//false

    //Sometimes you need to cast a numerical value into another data type.
    //The (int), (integer), or intval() function are often used to convert a value to an integer.
    //float to int
    $x = 23456.789;
    $int_cast = intval($x);
    echo $int_cast."\n";

    //string to int
    $x = "23456.789";
    $int_cast = intval($x);
    echo $int_cast."\n";
    ?>
</head>
<body>
    
</body>
</html>