<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    
    //array
    $cars = array("volvo", "tesla", "audi", "nissan", "bologna");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    
    //array lenght
    $arrayLenght = count($cars);

    //loop trough indexes
    for($i = 0; $i < $arrayLenght; $i++) {
        echo "I like ". $cars[$i];
        echo "<br>";
    }

    //named key in array
    $age = array("klaas" =>"35","peter" => "20", "jan" => "29");
    echo "peter is ". $age["peter"];

    //looping trough such an array
    foreach($age as $key => $value) {
        echo $key. " is ". $value;
        echo "<br>";
    }

    //multi-dimensional array
    $multiCars = array( array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15));

    //going through a multi-dimensional array
    for($row = 0; $row < 4; $row++) {
        echo "<p>row number: $row</p>";
        echo "<ul>";
        for($col = 0; $col < 3; $col++) {
            echo "<li>". $multiCars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }

    /*sort functions
    sort() -    sort arrays in ascending order
    rsort() -   sort arrays in descending order

    asort() -   sort associative arrays in ascending order, according to the value
    ksort() -   sort associative arrays in ascending order, according to the key

    arsort() -  sort associative arrays in descending order, according to the value
    krsort() -  sort associative arrays in descending order, according to the key
    */

    //alfabetical order sort
    sort($cars);

    //display array contents
    function displayArray(array $arr) {
        foreach($arr as $val) {
            echo $val;
            echo "<br>";
        }
    }

    function displayArrayKey(array $arr) {
        foreach($arr as $val) {
            echo $val.key;
            echo "<br>";
        }
    }

    displayArray($cars);

    //sort in numeric ascending order
    $numbers = array(1,2,9,2,5,8,7,3,9);

    sort($numbers);
    displayArray($numbers);

    //sort descending
    rsort($numbers);
    displayArray($numbers);
    rsort($cars);
    displayArray($cars);

    //sort in ascending order according to value
    asort($age);
    displayArray($age);
    //sort in ascending order according to key
    ksort($age);
    displayArrayKey($age);

    //descending sort in order accoording to value
    arsort($age);
    displayArray($age);
    //descending sort in order accoording to key
    krsort($age);
    displayArrayKey($age);
    
    ?>
</head>
<body>
    
</body>
</html>