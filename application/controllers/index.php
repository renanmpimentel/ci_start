<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$data['title'] = "Start CI - PT-BR";
		$this->load->view('template/header', $data);
		$this->load->view('example/start');
		$this->load->view('template/footer');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */