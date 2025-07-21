<?php
    include_once("../data/connection.php");

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $conn = getConnectionString();
        $stmt = $conn->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
        $stmt->bind_param(':email', $email);
        $stmt->bind_param(':password', $password);
        $stmt->execute();

        if($stmt->get_result() == TRUE){
            while($row = $stmt->fetch()){
                if($row['verified'] == 0){
                    echo 'Not verified';
                }else{
                    echo 'Login successfully';
                }
            }
        }
    }
?>