<?php 
    require_once('../2.data/data-menu.php');
    function render_monAn($arrMonAn){
        $html = '';
        for($i = 0; $i < count($arrMonAn); $i++){
            $item = $arrMonAn[$i];
            $html .= '
            <li>
                <h4><span class="menu-title">'.$item['tenMon'].'</span><span class="menu-price"> '.$item['giaTien'].' VND</span></h4>
                <div class="menu-text">'.$item['nguyenLieu'].'</div>
            </li>
            ';
        }
        return $html;
    }
?>