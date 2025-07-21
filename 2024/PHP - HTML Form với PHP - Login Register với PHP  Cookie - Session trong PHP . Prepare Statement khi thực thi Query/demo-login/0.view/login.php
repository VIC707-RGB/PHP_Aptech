<?php 
    //Kiem tra xem co cai key loggin cua cookie hay khong
    session_start();
    if (isset($_COOKIE['logged_in']) || isset($_SESSION['logged_in_session'])){
        header("Location: ". 'dashboard.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="khoi-dang-nhap" method="post" action="../1.controller/loginController.php">
        Username: <input type="text"  name="ipUsername">
        Password: <input type="password"  name="ipPassword">
        Keep logged in: <input type="checkbox" name="cbxLogin" value="keepLogin">
        <button type="submit">Login</button>
        <?php 
            if (isset($_REQUEST['message'])){
                $accessDenied = $_REQUEST['message'];
                echo $accessDenied;
            }
        ?>
    </form>
</body>
</html>