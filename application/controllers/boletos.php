<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Boletos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * [boleto_bancoob description]
	 * @return [type] [description]
	 */
	public function boleto_bancoob()
	{	
		$data = array(
				'dados_cliente'  => '',
				'dados_empresa'  => '',
				'dados_boleto'	 => '',	
				'valores_boleto' => ''
			);

		$this->load->helper('My_boleto_bancoob');  
		boleto_bancoob($data['dados_cliente'], $data['dados_empresa'], $data['dados_boleto'], $data['valores_boleto']);
	}

	/**
	 * [boleto_banespa description]
	 * @return [type] [description]
	 */
	public function boleto_banespa()
	{	
		$data = array(
				'dados_cliente'  => '',
				'dados_empresa'  => '',
				'dados_boleto'	 => '',	
				'valores_boleto' => ''
			);

		$this->load->helper('My_boleto_banespa');  
		boleto_banespa($data['dados_cliente'], $data['dados_empresa'], $data['dados_boleto'], $data['valores_boleto']);
	}

	/**
	 * [boleto_benestes description]
	 * @return [type] [description]
	 */
	public function boleto_benestes()
	{	
		$data = array(
				'dados_cliente'  => '',
				'dados_empresa'  => '',
				'dados_boleto'	 => '',	
				'valores_boleto' => ''
			);

		$this->load->helper('My_boleto_banestes');  
		boleto_banestes($data['dados_cliente'], $data['dados_empresa'], $data['dados_boleto'], $data['valores_boleto']);
	}

	/**
	 * [boleto_bb description]
	 * @return [type] [description]
	 */
	public function boleto_bb()
	{	
		$data = array(
				'dados_cliente'  => '',
				'dados_empresa'  => '',
				'dados_boleto'	 => '',	
				'valores_boleto' => ''
			);

		$this->load->helper('My_boleto_bb');  
		boleto_bb($data['dados_cliente'], $data['dados_empresa'], $data['dados_boleto'], $data['valores_boleto']);
	}

	/**
	 * [boleto_besc description]
	 * @return [type] [description]
	 */
	public function boleto_besc()
	{	
		$data = array(
				'dados_cliente'  => '',
				'dados_empresa'  => '',
				'dados_boleto'	 => '',	
				'valores_boleto' => ''
			);

		$this->load->helper('My_boleto_besc');  
		boleto_besc($data['dados_cliente'], $data['dados_empresa'], $data['dados_boleto'], $data['valores_boleto']);
	}

	/**
	 * [boleto_bradesco description]
	 * @return [type] [description]
	 */
	public function boleto_bradesco()
	{	
		$data = array(
				'dados_cliente'  => '',
				'dados_empresa'  => '',
				'dados_boleto'	 => '',	
				'valores_boleto' => ''
			);

		$this->load->helper('My_boleto_bradesco');  
		boleto_bradesco($data['dados_cliente'], $data['dados_empresa'], $data['dados_boleto'], $data['valores_boleto']);
	}

	/**
	 * [boleto_cef description]
	 * @return [type] [description]
	 */
	public function boleto_cef()
	{	
		$data = array(
				'dados_cliente'  => '',
				'dados_empresa'  => '',
				'dados_boleto'	 => '',	
				'valores_boleto' => ''
			);

		$this->load->helper('My_boleto_cef');  
		boleto_cef($data['dados_cliente'], $data['dados_empresa'], $data['dados_boleto'], $data['valores_boleto']);
	}

	/**
	 * [boleto_cef_sigcb description]
	 * @return [type] [description]
	 */
	public function boleto_cef_sigcb()
	{	
		$data = array(
				'dados_cliente'  => '',
				'dados_empresa'  => '',
				'dados_boleto'	 => '',	
				'valores_boleto' => ''
			);

		$this->load->helper('My_boleto_cef_sigcb');  
		boleto_cef_sigcb($data['dados_cliente'], $data['dados_empresa'], $data['dados_boleto'], $data['valores_boleto']);
	}

	/**
	 * [boleto_cef_sinco description]
	 * @return [type] [description]
	 */
	public function boleto_cef_sinco()
	{	
		$data = array(
				'dados_cliente'  => '',
				'dados_empresa'  => '',
				'dados_boleto'	 => '',	
				'valores_boleto' => ''
			);

		$this->load->helper('My_boleto_cef_sinco');  
		boleto_cef_sinco($data['dados_cliente'], $data['dados_empresa'], $data['dados_boleto'], $data['valores_boleto']);
	}

	/**
	 * [boleto_hsbc description]
	 * @return [type] [description]
	 */
	public function boleto_hsbc()
	{	
		$data = array(
				'dados_cliente'  => '',
				'dados_empresa'  => '',
				'dados_boleto'	 => '',	
				'valores_boleto' => ''
			);

		$this->load->helper('My_boleto_hsbc');  
		boleto_hsbc($data['dados_cliente'], $data['dados_empresa'], $data['dados_boleto'], $data['valores_boleto']);
	}

	/**
	 * [boleto_itau description]
	 * @return [type] [description]
	 */
	public function boleto_itau()
	{	
		$data = array(
				'dados_cliente'  => '',
				'dados_empresa'  => '',
				'dados_boleto'	 => '',	
				'valores_boleto' => ''
			);

		$this->load->helper('My_boleto_itau');  
		boleto_itau($data['dados_cliente'], $data['dados_empresa'], $data['dados_boleto'], $data['valores_boleto']);
	}

	/**
	 * [boleto_real description]
	 * @return [type] [description]
	 */
	public function boleto_real()
	{	
		$data = array(
				'dados_cliente'  => '',
				'dados_empresa'  => '',
				'dados_boleto'	 => '',	
				'valores_boleto' => ''
			);

		$this->load->helper('My_boleto_real');  
		boleto_real($data['dados_cliente'], $data['dados_empresa'], $data['dados_boleto'], $data['valores_boleto']);
	}

	/**
	 * [boleto_santander_banespa description]
	 * @return [type] [description]
	 */
	public function boleto_santander_banespa()
	{	
		$data = array(
				'dados_cliente'  => '',
				'dados_empresa'  => '',
				'dados_boleto'	 => '',	
				'valores_boleto' => ''
			);

		$this->load->helper('My_boleto_santander_banespa');  
		boleto_santander_banespa($data['dados_cliente'], $data['dados_empresa'], $data['dados_boleto'], $data['valores_boleto']);
	}

	/**
	 * [boleto_sicredi description]
	 * @return [type] [description]
	 */
	public function boleto_sicredi()
	{	
		$data = array(
				'dados_cliente'  => '',
				'dados_empresa'  => '',
				'dados_boleto'	 => '',	
				'valores_boleto' => ''
			);

		$this->load->helper('My_boleto_sicredi');  
		boleto_sicredi($data['dados_cliente'], $data['dados_empresa'], $data['dados_boleto'], $data['valores_boleto']);
	}

	/**
	 * [boleto_sudameris description]
	 * @return [type] [description]
	 */
	public function boleto_sudameris()
	{	
		$data = array(
				'dados_cliente'  => '',
				'dados_empresa'  => '',
				'dados_boleto'	 => '',	
				'valores_boleto' => ''
			);

		$this->load->helper('My_boleto_sudameris');  
		boleto_sudameris($data['dados_cliente'], $data['dados_empresa'], $data['dados_boleto'], $data['valores_boleto']);
	}

	/**
	 * [boleto_unibanco description]
	 * @return [type] [description]
	 */
	public function boleto_unibanco()
	{	
		$data = array(
				'dados_cliente'  => '',
				'dados_empresa'  => '',
				'dados_boleto'	 => '',	
				'valores_boleto' => ''
			);

		$this->load->helper('My_boleto_unibanco');  
		boleto_unibanco($data['dados_cliente'], $data['dados_empresa'], $data['dados_boleto'], $data['valores_boleto']);
	}
}

/* End of file boletos.php */
/* Location: ./application/controllers/boletos.php */