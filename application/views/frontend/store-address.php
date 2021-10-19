<?php
    $list = $this->Information_model->getInfoByType('store');
    $list = json_decode($list, true);
    $string = '';
    for ($i=0; $i < count($list) ; $i++) { 
        $string.='<li>';
        $string.='<a>'.($i+1). '. ' .$list[$i]['address'].'</a>';
        $string.='</li>';
    }
    echo $string;
?>