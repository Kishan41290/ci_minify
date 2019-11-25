<?php 

function _pre($str){
	echo '<pre>';
	print_r($str);
	exit;
}

$ci =& get_instance();
$ci->load->library('minify');



?>