<?php
function checkLogin() {
	$CI =& get_instance();
	if($CI->session->has_userdata('u_name')) redirect(base_url());
}
?>