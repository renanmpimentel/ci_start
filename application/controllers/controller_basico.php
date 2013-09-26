<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller_basico extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_basico');
	}

	public function index()
	{
		
	}

}

/* End of file controller_basico.php */
/* Location: ./application/controllers/controller_basico.php */