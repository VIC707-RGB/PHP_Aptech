<?php 
    require_once("../2-dataAccess/championDataAccess.php");

    function getAllChampionController(){
        $result = getAllChampionsDataAccess();
        $html = "";
        foreach($result as $r){
            $html = $html. '
            <tr>
                <td>'.$r['id'].'</td>
                <td>'.$r['name'].'</td>
                <td>
                    <img src="'.$r['avatar'].'"
                        class="img-fluid">
                </td>
                <td>'.$r['nationality_name'].'</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-primary">Delete</button>
                        
                    </div>
                </td>

            </tr>
            ';

        } 
        return $html;
    }
?>