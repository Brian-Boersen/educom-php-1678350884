 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    
    //A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
    //A valid constant name starts with a letter or underscore (no $ sign before the constant name).
    ///Note: Unlike variables, constants are automatically global across the entire script.

    //define(name, value, case-insensitive)// or define(name, value)
    define("GREETING","welcome to educom");
    echo GREETING;

    define("GREETING2", "welcome to educom again",true);
    echo greeting;

    //constant array
    define("cars", ["alfa Romeo", "BMW", "Ford", "Toyota"]);
    echo cars[0];

    //constants are global across the entire script.
    define("GREETING3", "welcome to educom.....again");

    function myTest(){
      echo GREETING3;
    }

    myTest();

    
    ?>
 </head>
 <body>
    
 </body>
 </html>