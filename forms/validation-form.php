<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    
    $name = $email = $gender = $comment = $website = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $gender = test_input($_POST["gender"]);
        $comment = test_input($_POST["comment"]);
        $website = test_input($_POST["website"]);
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    ?>
</head>
<body>
    <!--
    The htmlspecialchars() function converts special characters to HTML entities. 
    This means that it will replace HTML characters like < and > with &lt; and &gt;.
    This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.-->
    <form action="<?php echo htmlspecialchars($_server["PHP_SELF"]); ?>">

    Name: <input type="text" name="name">
    E-mail: <input type="text" name="email">
    Website: <input type="text" name="website">
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>

    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other

    <input type="submit" value="Submit">
    </form>
</body>
</html>