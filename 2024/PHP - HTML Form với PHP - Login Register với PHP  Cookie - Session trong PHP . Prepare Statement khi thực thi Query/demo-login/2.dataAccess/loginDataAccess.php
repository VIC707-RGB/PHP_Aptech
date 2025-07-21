<?php 
    require_once('../2.dataAccess/connection.php');

    function doLoginDataAccess($username, $password){
        $conn = createConnection();
        $query = "select * from users where username like ? and password like ?"; //SQL Injection
        echo $query;
        

        $prepare = $conn -> prepare($query);
        $prepare ->bind_param("ss", $username, $password);
        
        $execute = $prepare -> execute();
        if($execute > 0){
            $result  = array();
            $prepare -> bind_result($id, $username, $password, $role);
            while ($prepare->fetch()){ // Duyet qua moi dong du lieu
                $d = array(
                    "id" => $id,
                    "username" => $username,
                    "password" => $password,
                    "role" => $role
                );
                array_push($result, $d); // Them du lieu o dang mang lien ket vao mang ket qua
            }
            return $result;
        }
        return null;
    }
?>