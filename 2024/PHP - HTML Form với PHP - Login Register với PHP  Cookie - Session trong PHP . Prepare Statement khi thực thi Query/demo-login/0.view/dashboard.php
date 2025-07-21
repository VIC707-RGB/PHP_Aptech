<?php 
    session_start();
    $user = "";
    if (isset($_COOKIE['logged_in']) || isset($_SESSION['logged_in_session'])){
        if(isset($_SESSION['logged_in_session'])){
            $user = $_SESSION['logged_in_session']; // Lay gia tri cua cookie va gan vao bien $user
        }
        if(isset($_COOKIE['logged_in'])){
            $user = $_COOKIE['logged_in']; // Lay gia tri cua cookie va gan vao bien $user
        }
    }
    else{
        header("Location: " . "login.php");
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
    <?php 
        if(isset($_REQUEST['user'])){
            $user = $_REQUEST['user'];
        }
    ?>
    <h1>HELLO WORLD</h1>
    <h3>Welcome back! <?php echo $user ?></h3>
    <a href="javascript:void(0)" onclick="deleteCookie('logged_in')">Log out with JS</a>
    <br>
    <a href="logout.php">Log Out with PHP</a>

    <script>

        
        function deleteCookie(name) {
            document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";


            window.location.href = "login.php"
        }


    </script>
</body>
</html>