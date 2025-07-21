<?php require_once("../data/connection.php"); ?>
<?php
function verify($verify_code, $email)
{
    if ($verify_code) {
        // $verify_code = $_POST["code"];

        //ket noi csdl
        $conn = getConnectionString();

        $stmt = $conn->prepare("SELECT * FROM users WHERE verify_code = :verify_code AND email = :email");
        $stmt->bind_param(":verify_code", $verify_code);
        $stmt->bind_param(":email", $email);
        $stmt->execute();

        if ($stmt->get_result() === TRUE) {
            $sql = $conn->prepare("ALTER TABLE users
            UPDATE verified = 1
            WHERE email = :email");
            $sql->bind_param(":email", $email);
            $sql->execute();
            if( $sql->get_result() === TRUE) {
                echo "Xac nhan thanh cong";
            }
        } else {
            echo "Xac nhan khong hop le";
        }
    }
}

?>