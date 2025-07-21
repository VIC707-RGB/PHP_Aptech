<?php 
    //Khoi dong lai phien lam viec
    session_start();
    //Xoa tat ca cac bien session
    session_unset();
    // Xoa session
    session_destroy();
    // Xoa Cookie tuong ung
    setcookie('logged_in', '', time() - 3600, '/');
    // Chuyen ve trang login
    header("Location: ". "login.php");
?>