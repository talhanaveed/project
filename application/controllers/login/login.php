<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index($msg = NULL)
	{
		// Load our view to be displayed
		// to the user

		if($this->session->userdata('validated')){
			redirect('temp', 'refresh');
		}else{
			$data['msg'] = $msg;
			$this->load->view('header');
			$this->load->view('login',$data);
		
		}

	}
	public function process(){
		// Load the model
		$this->load->model('login_model');
		// Validate the user can login
		$result = $this->login_model->validate();
		// Now we verify the result
		if(! $result){
			// If user did not validate, then show them login page again
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
			$this->index($msg);
		}else{
			// If user did validate, 
			// Send them to members area
			redirect('temp','refresh');
		}		
	}
	public function do_logout(){
		$this->session->sess_destroy();
		redirect('main/login','refresh');
	}
}
?>