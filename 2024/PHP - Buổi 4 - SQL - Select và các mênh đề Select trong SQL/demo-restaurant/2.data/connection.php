<?php 

function connection_mysql(){
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "ql_menu";

    // Create a connection to the database
    $conn = new mysqli($serverName, $username, $password, $databaseName);

    // Check the connection
    if ($conn->connect_error) { // Truong hop khong ket noi thanh cong.
        die("Connection failed: " . $conn->connect_error);
    }
    else{ // Truong hop ket noi thanh cong
        // echo "Connection success!";
        return $conn; // Tra ve ket noi de tien hanh thuc thi cau querya
    }
}

?>