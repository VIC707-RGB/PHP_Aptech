<!-- kết nối đén csdl -->
<?php
function connectDB()
{
    //nếu đã có csdl
    //chuỗi kết nối đến csdl
    $conn = new mysqli("localhost", "root", "", "user_management");
    if ($conn->connect_error) {
        die("Failed connection: " . $conn->connect_error);
    } else {
        // echo "Successfully connected";
        return $conn;
    }
}

function createDB()
{
    //  tạo csdl nếu chưa có
    //1. chuỗi kết nối đến server
    $conn_server = new mysqli("localhost", "root", "");
    if ($conn_server->connect_error) {
        die("Failed connection: " . $conn_server->connect_error);
    } else {
        // chuỗi kết nối có trả về kết quả là server
        echo "Successfully connected";
        $sql = "CREATE DATABASE IF NOT EXISTS user_management";
        $result = $conn_server->query($sql);
        if (!$result) {
            echo "failed creating db";
        } else {
            echo "success creating db";
        }
    }
}

function createTableIfNotExists($conn)
{
    $sql = "
    CREATE TABLE IF NOT EXISTS user(
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100),
        email VARCHAR(100)
    );
    ";
    $result = $conn->query($sql);
    if (!$result) {
        echo "failed creating table";
    } else {
        // echo "success creating table if not existed";
    }
}

?>