<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ar_model extends CI_Model {

	function get_ar(){

		$query = $this->$db->get('mybd');
		return $query->result_array();
	}

}
