<?php
    require_once('../data/connection.php');
    require_once('../data/verify.php');

    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];

        //ket noi csdl
        $conn = getConnectionString();

        //kiem tra xem email ton tai chua
        $stmt = $conn->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->bind_param(':email', $email);
        $stmt->execute();

        if( $stmt->get_result() === TRUE ){
            echo "Email has existed!";
            $stmt->close();
        }else{
            $verifyCode=random_int(1000,9999);

            $stmt = $conn->prepare("INSERT INTO users(email, password, verified, verify_code) VALUES (:email, :password, :verify_code)");
            $stmt->bind_param(":email", $email);
            $stmt->bind_param(":password", $password);
            $stmt->bind_param(":verify_code", $verifyCode);
            $stmt->execute();

            //gui email xac nhan
            $subject = "XAC NHAN DANG KY";
            $to = $email;  // Replace with the recipient's email address
            $message = 'VERIFICATION CODE FOR THIS EMAIL: '.$verifyCode;  // Replace with the content of the email
            if(mail($to, $subject, $message)){
                echo 'email sent';
                verify($verifyCode, $email);
            }else{
                echo 'Error'.error_get_last();
            }
            
        }
    }

?>