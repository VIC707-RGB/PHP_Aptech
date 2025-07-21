<?php 
//Luu toan bo data cua trang index

$language = "vi-VN";

if($language == "vi-VN"){
    $tieuDeNhoSlide1 = "Ăn tối tại";
    $tieuDeLonSlide1 = "APTECH";
}
elseif ($language == 'en-US'){
    $tieuDeNhoSlide1 = "Dinner at";
    $tieuDeLonSlide1 = "APTECH";
}



$slider1 = array(
    "tieuDeNho" => "An toi tai",
    "tieuDeLon" => "APTECH",
    "subTieuDe" => "Cac mon an o day deu rat tuoi ngon",
    "hinhAnh" => "https://image.cdn2.seaart.ai/2023-06-10/32910229536837/c670a0d60ec51a5b93a051e80b9700dc5be089a3_high.webp"
);

$slider2 = array(
    "tieuDeNho" => "Hoi hop tai",
    "tieuDeLon" => "APTECH",
    "subTieuDe" => "Giup anh em khong bi say vi uong nuoc ngot",
    "hinhAnh" => "https://image.cdn2.seaart.ai/2023-08-30/15807509152461829/082a6ca946639360cb05648b4a72e4faa488730f_high.webp"
);

$slides = array(
    $slider1, $slider2
); // 
?>