<?php
    require_once('../2.data/data-menubar.php');

    function render_menu($menus){
        $html = '';
        $parents = array();
        foreach($menus as $item){
            if($item['parentId'] == 0){
                array_push($parents, $item);
            }
        }
        $count = 0;
        foreach($parents as $item){
            //current-menu-item
            $html .= '
            <li class="menu-item menu-item-has-children '.($count == 0 ? 'current-menu-item' : '').'">
                <a href="index-2.html">'.$item['name'].'</a>
                '.render_menu_children($menus, $item).'
            </li>
            ';
            $count++;
        }
        return $html;
    }

    function render_menu_children($menus, $currentMenu){
        $childs = array();
        foreach($menus as $item){
            if($item['parentId'] == $currentMenu['id']){
                array_push($childs, $item);
            }
        }
        $html = '';
        if(count($childs) > 0){
            $html .= '<ul class="sub-menu">';
            foreach($childs as $c){
                $html .= '
                    <li class="menu-item"><a href="index-2.html">'.$c['name'].'</a></li>
                ';
            }
            $html .= '</ul>';
            return $html;
        }
    }