<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class temp extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->check_isvalidated();


		
	}

	public function index()
	{
				$this->check_isvalidated();
		$this->viewTemp();
	}
	private function check_isvalidated()
	{
		$this->load->helper('url');
		if(! $this->session->userdata('validated')){
			redirect('main/login', 'refresh');
		}
	}
	function viewTemp()
	{
			$this->load->view('header');
			$this->load->view('under_construction');
			$this->load->view('footer');

	}
}
?>