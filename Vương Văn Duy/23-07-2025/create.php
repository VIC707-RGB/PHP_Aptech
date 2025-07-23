<?php
include_once 'db.php';
error_reporting(0);
// function addUser($conn){
$conn = connectDB();
$name = $_GET['name'];
$email = $_GET['email'];
if (isset($email) && isset($name)) {
    if ($_SERVER['REQUEST_METHOD'] == "GET") {

        // $sql = "INSERT INTO user VALUES ";
        $sql = $conn->prepare("INSERT INTO user (name, email) VALUES (?,?)");
        $sql->execute([$name, $email]);

        if ($sql->error) {
            die("Failed connection: " . $sql->error);
        } 
            
        header('Location: index.php');
        
    }
}
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="get">
        Name: <input type="text" name="name"><br>
        Email: <input type="email" name="email"><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>