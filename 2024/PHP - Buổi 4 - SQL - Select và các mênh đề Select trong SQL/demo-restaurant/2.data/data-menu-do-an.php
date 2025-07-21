<?php 

    require_once('connection.php');
 //Thuc thi ham

// Thuc hien cau query lay ra du lieu

function getDanhSachDanhMucDatabase(){
    $conn = connection_mysql();
    $querySQL = "select * from DanhMucs";

    //Gui xuong SQL
    $prepare = $conn -> prepare($querySQL);

    // Thuc thi cau SQL
    $result = $prepare -> execute();

    $result = array();

    if($result > 0){ // Thanh cong!
        $prepare -> bind_result($id, $name, $avatar);
        while ($prepare->fetch()){ // Duyet qua moi dong du lieu
            $d = array(
                "id" => $id,
                "name" => $name,
                "avatar" => $avatar
            );
            array_push($result, $d); // Them du lieu o dang mang lien ket vao mang ket qua
        }
    }
    return $result;

}

function getMonAnByDanhMucId($idDanhMuc){
    $conn = connection_mysql();
    $querySQL = "SELECT * from monans where DanhMucId = ".$idDanhMuc." order by Price desc;";



    //Gui xuong SQL
    $prepare = $conn -> prepare($querySQL);
    // // Truyen tham so vao ? de thuc thi cau sql 
    // // ? duoc goi la parameter
    // $prepare -> bind_param("d", $idDanhMuc);


    // Thuc thi cau SQL
    $result = $prepare -> execute();

    $result = array();

    if($result > 0){ // Thanh cong!
        $prepare -> bind_result($id, $name, $price, $materials, $danhMucId);
        while ($prepare->fetch()){ // Duyet qua moi dong du lieu
            $d = array(
                "id" => $id,
                "name" => $name,
                "price" => $price,
                "materials" => $materials,
                "danhMucId" => $danhMucId
            );
            array_push($result, $d); // Them du lieu o dang mang lien ket vao mang ket qua
        }
    }
    return $result;
}


// Tra du lieu ve tang controller -> view

?>