<?php 
    require_once('connection.php');

    function doRegisterDataAccess($username, $password){
        $conn = createConnection();
        $query = "insert into users (username, password) values (?, ?)";
        $prepare = $conn -> prepare($query);
        $prepare -> bind_param("ss",$username, $password);
        $execute = $prepare -> execute();
        echo $execute;
    }
?>