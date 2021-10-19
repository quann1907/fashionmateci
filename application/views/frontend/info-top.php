<?php
	$info = $this->Information_model->getInfoByType('info_header');
	$info = json_decode($info, true);
	$string = '<li>';
	$string.= '<p class="links_list-label">';
	$string.= 'Địa chỉ';
	$string.= '</p>';
	$string.= '<p class="links_list-value" style="color: #ffffff;">'.$info[0]['address'].'</p>';
	$string.= '</li>';
	$string.= '<li>';
	$string.= '<p class="links_list-label">';
	$string.= 'Liên hệ';
	$string.= '</p>';
	$string.= '<p class="links_list-value" style="color: #ffffff;">'.$info[0]['email'].'</p>';
	$string.= '</li>';
	$string.= '<li>';
	$string.= '<p class="links_list-label">';
	$string.= 'Điện thoại';
	$string.= '</p>';
	$string.= '<p class="links_list-value" style="color: #ffffff;">'.$info[0]['hotline'].'</p>';
	$string.= '</li>';
	echo $string;
?>