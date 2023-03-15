<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    
    echo "Name: " . $_POST['name'];
    echo "<br>";
    echo "Email: " . $_POST['email'];

    ?>
</head>
<body>
<form action="handling.php" method="post">
    Name: <input type="text" name="name">
    Email: <input type="text" name="email">
    <input type="submit">
</form>
</body>
</html>