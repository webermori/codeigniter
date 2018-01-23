<?php 
defined('BASEPATH') OR exit('No direct script..');

if (!function_exists('set_msg')):
	function set_msg($msg=NULL) {
		$ci = & get_instance();
		$ci->session->set_userdata('aviso', $msg);
	}
endif;

if (!function_exists('get_msg')):
	function get_msg($destroy=true) {
		$ci = & get_instance();
		$retorno = $ci->session->userdata('aviso');
		if ($destroy) $ci->session->unset_userdata('aviso');
		return $retorno;
	}
endif;
