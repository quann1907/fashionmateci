<?php
    $listCategory = $this->Category_model->getCategoryMenu(0);
        $html_menu = '';
        foreach ($listCategory as $menu) {
            $parentid = $menu['id'];
            $submenu = $this->Category_model->getCategoryMenu($parentid);
                if(!empty($submenu)){
                	$html_menu.='<li class="menu-item-has-children">';
           			$html_menu.='<a>'.$menu['name'].'</a>';
                }
                else {
                	$html_menu.='<li>';
           			$html_menu.="<a>".$menu['name']."</a>";
                }
                
                    $html_menu.='<ul class="sub-menu">';
                        foreach ($submenu as $menu1){
                            $html_menu.='<li>';
                            $html_menu.='<a href="">'.$menu1['name'].'</a>';
                            $html_menu.="</li>";    
                        }
                    $html_menu.="</ul>";
                
            $html_menu.="</li>";
        }
    echo $html_menu;
?>