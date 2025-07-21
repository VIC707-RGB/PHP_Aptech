<?php 
    require_once('../2-dataAccess/championDataAccess.php');

    function getAllChampions(){
        $champions = getAllChampionsDataAccess();
        $html = '';
        foreach($champions as $c){
            $html = $html . '
            <div class="champion-item">
                <a href="/LoL/0-view/championDetail.php?id='.$c['id'].'">
                    <div class="champion-avatar">
                        <img src="../uploads/'.$c['avatar'].'" class="img-full-width">
                    </div>
                    <div class="champion-name">
                        <h3>'.$c['name'].'</h3>
                    </div>
                    <div class="champion-nationality">
                        <i>'.$c['nationality_name'].'</i>
                    </div>
                </a>
                
            </div>
            ';
        }
        //
        echo $html;
    }
?>