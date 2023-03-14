<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <?php
    /*
    PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.

    The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", 
    the form data is sent to the file specified in the action attribute of the <form> tag. In this example, 
    we point to this file itself for processing form data. If you wish to use another PHP file to process form data, 
    replace that with the filename of your choice. 
    Then, we can use the super global variable $_REQUEST to collect the value of the input field: */

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_REQUEST['fname'];
        if (empty($name)) {
          echo "Name is empty";
        } else {
          echo $name;
        }
      }

      //when method is post
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_POST['aname'];
        if (empty($name)) {
          echo "Name is empty";
        } else {
          echo $name;
        }
      }
      echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
    ?>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Name: <input type="text" name="fname">
            <input type="submit">
</form>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="aname">
  <input type="submit">
</form>
<!--PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".
$_GET can also collect data sent in the URL.
Assume we have an HTML page that contains a hyperlink with parameters-->
<a href="superglobals_request_post.php?subject=PHP&web=W3schools.com">Test $GET</a>

</body>
</html>