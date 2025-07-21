<?php
require_once('../2.dataAccess/loginDataAccess.php');

//B1: Kiem tra xem phuong thuc truyen du lieu la GET hay POST
// Quy dinh viec login chi hoat dong voi phuong thuc POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Bat thong tin duoc gui di tu form
    // Kiem tra tiep cai key co ton tai hay khong

    $username = "";
    $password = "";

    if (isset($_REQUEST['ipUsername'])) { // Kiem tra xem key 'ipUsername' co ton tai trong request khong?
        $username = $_REQUEST['ipUsername'];
    } else {
        echo "Chung toi khong tim thay key ipUsername";
    }


    if (isset($_REQUEST['ipPassword'])) { // Kiem tra xem key 'ipPassword' co ton tai trong request khong?
        $password = $_REQUEST['ipPassword'];
    } else {
        echo "Chung toi khong tim thay key ipPassword";
    }

    if ($username != "" && $password != "") {

        // Gia su toi co username la 'admin' va password la '123456'. Neu nhap dung username va password thi thong bao dang nhap thanh cong
        // Neu nhap sai thi thong bao dang nhap that bai
        $result = doLoginDataAccess($username, $password);
        if (count($result) > 0) {
            // Chuyen sang trang dashboard
            if(isset($_REQUEST['cbxLogin'])){
                if($_REQUEST['cbxLogin'] == "keepLogin"){
                    // Tao ra 1 cookie de luu tru thong tin dang nhap
                    setcookie("logged_in",$username, time()+3600,"/");
                }
            }
            else{
                session_start();
                $_SESSION['logged_in_session'] = $username;
            }
            
            $dashboardLink = "../0.view/dashboard.php?user=" . $username;
            header("Location: " . $dashboardLink);
        } else {
            echo "Ban da dang nhap khong thanh cong!";
            $loginLink = "../0.view/login.php?message=WrongData";
            header('Location: ' . $loginLink);
        }
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "Chung toi khong ho tro dang nhap qua phuong thuc GET";
}
