<?php
    // $sql ="CREATE TABLE IF NOT EXISTS users(
    //         id INT AUTO_INCREMENT PRIMARY KEY,
    //         email VARCHAR(255) UNIQUE,
    //         password VARCHAR(255),
    //         verified INT DEFAULT 0
    //     );";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "log_user";
    $conn = new mysqli($servername, $username, $password, $dbname);
    // $result = mysqli_query($conn, $sql);
    if(!$conn){
        echo "Error: ". mysqli_error($conn) ."<br>";
    }else{
        echo "ok";
    }

    return $conn;
?>