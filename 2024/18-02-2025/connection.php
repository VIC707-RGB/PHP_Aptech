<?php
function connectionString()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "studentdb";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Kết nối thành công!";
    } catch (PDOException $e) {
        echo "Kết nối thất bại: " . $e->getMessage();
    }

    return $conn;
}

function create(){
    //NOTE: Gọi chuỗi PDO/Connection String vào trc 
    $conn = connectionString();
    //thêm/tạo 1 hs mới trong csdl học sinh

    //mô hình chung
    //1. Xác định đc chức năng -> ghi ra lệnh SQL tương ứng
    $SQLAdd = "INSERT INTO students(name, age, grade) VALUES ('AAA', 13, 'C')";

    //2. Sử dụng lệnh SQL trong PHP
    $conn->beginTransaction();
    $result = $conn->exec($SQLAdd);

    //3. Kiểm tra kết quả
    if(!$result){
        $conn->rollBack();
    }
}

create();
