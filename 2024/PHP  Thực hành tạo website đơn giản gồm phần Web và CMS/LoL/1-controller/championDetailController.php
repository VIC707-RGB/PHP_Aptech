<?php 
    require_once('../2-dataAccess/championDataAccess.php');
    $id = 0;
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
    }


    function getChampionDetailById(){
        //Su dung 1 bien global trong ham
        global $id;
        $champion = getChampionDetailByIdDataAccess($id);
        return $champion;
    }
    function renderSkillOfChampions($champion){
        $html = '';
        foreach($champion['skills'] as $s){
            $html = $html . '
            <tr>
                <td>'.$s['id'].'</td>
                <td>'.$s['name'].'</td>
                <td>'.$s['ability'].'</td>
            </tr>   
            ';
        }
        return $html;
    }
    function renderRoleOfChampion($champion){
        $html = '';
        foreach($champion['roles'] as $r){
            $html = $html . '
                <li>'.$r['name'].'</li>
            ';
        }
        return $html;
    }
    
?>