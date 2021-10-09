<?php
	$info = $this->Information_model->getInfoByType('info_header');
	$info = json_decode($info, true);
	$string = '<li>';
	$string.= '<p class="links_list-label">';
	$string.= 'Địa chỉ';
	$string.= '</p>';
	$string.= '<p class="links_list-value">';
	$string.= '<a href="http://maps.google.com/" target="_blank" rel="nofollow">'.$info[0]['address'].'</a>';
	$string.= '</p>';
	$string.= '</li>';
	$string.= '<li>';
	$string.= '<p class="links_list-label">';
	$string.= 'Liên hệ';
	$string.= '</p>';
	$string.= '<p class="links_list-value">';
	$string.= '<p style="color: #ffffff;">'.$info[0]['email'].'</p>';
	$string.= '</p>';
	$string.= '</li>';
	$string.= '<li>';
	$string.= '<p class="links_list-label">';
	$string.= 'Liên hệ';
	$string.= '</p>';
	$string.= '<p class="links_list-value">';
	$string.= '<p style="color: #ffffff;">'.$info[0]['hotline'].'</p>';
	$string.= '</p>';
	$string.= '</li>';
	echo $string;
?>