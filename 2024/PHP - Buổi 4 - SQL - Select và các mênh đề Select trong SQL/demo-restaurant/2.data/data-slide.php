<?php 
    require_once('connection.php');
// Tao ra ket noi voi sql


 //Thuc thi ham

function getDanhSachSlide(){
    //B1: Tao connection
    $conn = connection_mysql();
    //B2: Viet cau query
    $querySQL = "select * from Slides";

    //Gui xuong SQL
    $prepare = $conn -> prepare($querySQL);

    // Thuc thi cau SQL
    $result = $prepare -> execute();
    // B5: Tao ra 1 mang rong de chua du lieu
    $result = array();

    //B6: :Lap qua tung dong du lieu de them vao du lieu chinh xac
    if($result > 0){ // Thanh cong!
        $prepare -> bind_result($id, $tieuDeNho, $tieuDeLon, $subTieuDe, $tieuDeDuongDan, $urlDuongDan, $hinhAnh);
        while ($prepare->fetch()){ // Duyet qua moi dong du lieu
            $d = array(
                "id" => $id,
                "tieuDeNho" => $tieuDeNho,
                "tieuDeLon" => $tieuDeLon,
                "subTieuDe" => $subTieuDe,
                "tieuDeDuongDan" => $tieuDeDuongDan,
                "urlDuongDan" => $urlDuongDan,
                "hinhAnh" => $hinhAnh

            );
            array_push($result, $d); // Them du lieu o dang mang lien ket vao mang ket qua
        }
    }
    return $result;
}


?>