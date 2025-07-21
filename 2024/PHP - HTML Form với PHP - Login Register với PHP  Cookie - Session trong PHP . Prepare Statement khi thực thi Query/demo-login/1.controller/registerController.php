<?php 
    require_once('../2.dataAccess/registerDataAccess.php');
    // Kiem tra phuong thuc
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $username = "";
        $password = "";
        $confirmPassword = "";
        // Lay cac thong tin tu request
        if (isset($_REQUEST['ipUsername'])){
            $username = $_REQUEST['ipUsername'];
        }
        if (isset($_REQUEST['ipPassword'])){
            $password = $_REQUEST['ipPassword'];
        }
        if (isset($_REQUEST['ipConfirmPassword'])){
            $confirmPassword = $_REQUEST['ipConfirmPassword'];
        }

        // Tien hanh dang ky dang nhap gi thi tuy
        if($username != "" && $password != "" && $confirmPassword != ""){
            if($password == $confirmPassword){
                //Cho dang ky
                doRegisterDataAccess($username, $password);

            }
            else{
                //2 thong tin phai trung nhau va bao loi
            }
        }
    }

?>