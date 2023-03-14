<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    
    //if statment
    //Output "Have a good day!" if the current time (HOUR) is less than 20:
    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    }

    //if else
    if($t < "20") {
        echo "Have a good day!";
    }else{
        echo "Have a good night!";
    }


    //if elseif else
    if($t < "10"){
        echo "Have a good morning!";
    }elseif($t < "20") {
        echo "Have a good day!";
    }else{
        echo "Have a good night!";
    }

    ?>
</head>
<body>
    
</body>
</html>