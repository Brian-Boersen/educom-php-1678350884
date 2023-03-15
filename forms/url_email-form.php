<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    $test_txt = "submitted";

    $name = $email = $gender = $comment = $website = "";
    $nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<script> console.log(".json_encode($test_txt).")</script>";
        if(empty($_POST["name"])){
            $nameErr = "Please enter your name";
        } else {
            $name = test_input($_POST["name"]);
            //preg_match checks for a pattern. if matching sends true.
            if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
                $nameErr = "Please enter a valid name";
            }
        }
        if(empty($_POST["email"])){
            $emailErr = "Please enter your email";
        } else {
            $email = test_input($_POST["email"]);
            //send true if email is valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "please enter a valid email";
            }
        }
        if(empty($_POST["gender"])){
            $genderErr = "Please enter your gender";
        } else {
            $gender = test_input($_POST["gender"]);
        }
        if(empty($_POST["comment"])){
            $commentErr = "Please enter your comment";
        } else {
            $comment = test_input($_POST["comment"]);
        }
        if(empty($_POST["website"])){
            $websiteErr = "Please enter your website";
        } else {
            $website = test_input($_POST["website"]);
            if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
                $websiteErr = "Please enter a valid website";
            }
        }
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
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail:
    <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Website:
    <input type="text" name="website">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>