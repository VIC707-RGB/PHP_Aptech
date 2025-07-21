<?php
session_start();
$_SESSION['name'] = $_REQUEST['name'];
echo $_SESSION['name'];
?>
<form action="index.php" method="post">
    <button type="submit">Logout</button>
</form>


<?php
setcookie("user", '', time() - 3600);
// unset($_SESSION['name']);

//3. destroy session
session_destroy();

echo $_SESSION['name'];

?>