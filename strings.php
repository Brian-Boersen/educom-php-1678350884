<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    
    //strlen returns string lenght
    echo strlen("hello world");//11

    //word count in string
    echo str_word_count("hello world");//2

    //reverse a string
    echo strrev("hello world");//dlow olleh

    //search for a text in a string. returns first character position
    echo strpos("hello world", "hello");//6

    //replace a text within a string. !!!case sensitive!!!
    echo str_replace("hello", "new", "hello world");//replace a with b in string: output new world



    ?>
</head>
<body>
    
</body>
</html>