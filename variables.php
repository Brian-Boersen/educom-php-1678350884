<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php 
    //global variables
    $txt = "w3schools.com";
    $x = 5;
    $y = 10.5;


    //variables can be directly called in a string, cool!
    echo "I love $txt!";
    // same result different way
    echo "I love " . $txt . "!";
    
    //outut sum of 2 vars
    echo $x + $y;

    function usingAGlobalScopeInside(){
        //variables outside a function can only be called outside a function and variables inside, inside.
        //wiil output an error
        echo "<p>Global variable x inside this function is: $x</p>";
    }
    usingAGlobalScopeInside();

    echo "<p>Global variable x this this function is: $x</p>";

    function localVar(){
        $xLocal = 5;//local scope
        echo "<p>Local variable x inside this function is: $xLocal</p>";
    }

    echo "<p>Local variable x inside this function is: $xLocal</p>";

    function globalKeyword(){
        //getting global variables inside function
        global $x, $y;
        $y = $x + $y;
    }
    globalKeyword();

    echo $y;// outputs 15.5

    function globalArray(){
        //getting global variables inside function directly through an array
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    globalArray();

    echo $y . "<br>";//outputs added values

    ///static variables stay in memmory unlike local variables////////////////////////////////
    function staticVars(){
        static $xStatic = 0;
        echo $xStatic. "<br>";

        $xStatic++;
    }

    staticVars();
    staticVars();
    staticVars();
    ?>
</head>
<body>
    
</body>
</html>