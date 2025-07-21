<?php require_once('../2.data/data-menu-do-an.php') ;

function getDanhSachDanhMucController(){
    $danhMucs = getDanhSachDanhMucDatabase();
    $html = '';
    foreach($danhMucs as $dm){
        $html .= '
        <div class="col-md-6 margin-b54">
            <div class="image-container menu5-img1" style="background-color: black;">
            <div class="smalltitle white no-margin">1</div>
            <h2 class="white no-margin">'.$dm['name'].'</h2>
            </div>
            <ul class="food-menu menu-1cols">
                '.getMonAnByDanhMucIdController($dm['id']).'
            </ul>
        </div>
        ';
    }
    return $html;
}

function getMonAnByDanhMucIdController($idDanhMuc){
    $monAns = getMonAnByDanhMucId($idDanhMuc);
    $html = '';
    foreach($monAns as $m){
        $html .= '
        <li>
            <h4><span class="menu-title">'.$m['name'].'</span><span class="menu-price">$ '.$m['price'].'</span></h4>
            <div class="menu-text">'.$m['materials'].'</div>
        </li>
        ';
    }
    return $html;
}



?>