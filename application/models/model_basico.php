<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_basico extends CI_Model {

	public function __construct()
	{
		parent::__construct();	
	}

	/**
	 * [consultaSimplesBanco description]
	 * @param  [type] $param [description]
	 * @return [type]        [description]
	 */
	public function consultaSimplesBanco($param = null) 
	{
		$query = $this->db->query("select * from table where {$param}");

		if($query->num_rows() > 0)
			return $query->result_array();
	}
}

/* End of file model_basico.php */
/* Location: ./application/models/model_basico.php */