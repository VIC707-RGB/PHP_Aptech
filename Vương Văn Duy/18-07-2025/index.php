<?php
    //save login info
    //create cookies
    error_reporting(0);
    // setcookie("user", $_POST['name'], time() + 3600);

    //create sessions
    //lifecycle:
        //1. session start:
    session_start();
        //2. Init session variable/data
    // if(isset($_POST['name'])){
        //init session
    // }
    echo $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="welcome.php" method="post">
        Name: <input type="text" name="name"><br>
        email: <input type="email" name="email"><br>
        phone: <input type="tel" name="phone" required><br>
        Password: <input type="password" name="password">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>