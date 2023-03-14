<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    
    //make and call function
    function writeMsg(){
        echo "hello";
    }

    writeMsg();

    //with arguments
    function writeMsg2($msg){
        echo "hello $msg";
    }
    writeMsg2("world");
    writeMsg2(123);
    writeMsg2("dddd");

    //2 argumens
    function writeMsg3($msg,$ext){
        echo "hello $msg and $ext";
    }
    writeMsg3("world","hello");
    writeMsg3(123);
    writeMsg3("dddd","aaaa");
    
    //declaring data types
    function addNimb(int $y, int $x){
        return $x + $y;
    }
    addNimb("5 world", 3);//changes "5 world" to 5 because it's a defined int

    //To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file. causes an error for the call from above

    //setting a default value if none is given
    function writeMsg4(string $msg = "default"){
        echo "hello $msg";
    }
    writeMsg4("world");
    writeMsg4();//uses default value

    //return something with a function call
    function addNum(int $x, int $y){
        return $x + $y;
    }
    echo "3 + 3 = ". addNum(3,3) . "<br>";//returns 6

    //declare return type, !!!trows error if strict_types=1 is declared at the top
    function addNum2(float $x, float $y):float{
        return $x + $y;
    }
    echo "3.4 + 3.5 = ". addNum2(3.4,3.5). "<br>";//returns 6.9

    //making it return a different type than input
    function addNum3(float $x, float $y):int{
        return (int)($x + $y);
    }
    echo "3.4 + 3.5 = ". addNum3(3.4,3.5). "<br>";//returns 7
    
    /*In PHP, arguments are usually passed by value, 
    which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.

    When a function argument is passed by reference, changes to the argument also change the variable that was passed in.
    To turn a function argument into a reference, the & operator is used: */

    //change input variable
    $myNum = 1;
    function changeNum(&$num,$to){
        return $num = $to;
    }
    changeNum($myNum,4);//uses $myNum and changes it's value to 4
    echo $myNum. "<br>";//outputs 4

    ?>
</head>
<body>
    
</body>
</html>