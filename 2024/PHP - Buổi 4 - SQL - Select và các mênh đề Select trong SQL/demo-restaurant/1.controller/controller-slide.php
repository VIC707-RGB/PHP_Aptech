<?php 
    require_once('../2.data/data-slide.php');

    function getDanhSachSlideController(){
        $slides = getDanhSachSlide();
        $html = '';
        foreach($slides as $s){
            $html .= '
            <!--slider-post-->
            <div class="slider-post slider-item-box-bkg">
                <div class="slider-img slide-3" style="background-image: url('.$s['hinhAnh'].')"></div>
                <div class="slider-caption">
                    <div class="slider-text">
                        <div class="intro-txt">'.$s['tieuDeNho'].'</div>
                        <h2>'.$s['tieuDeLon'].'</h2>
                        <p> '.$s['subTieuDe'].'<br />
                            <a href="'.$s['urlDuongDan'].'" class="slider-btn">'.$s['tieuDeDuongDan'].'</a>
                        </p>
                    </div>
                </div>
            </div>
            ';

        }
        return $html;
    }
?>