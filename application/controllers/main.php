<?php
	class main extends CI_Controller{
		function main(){
			parent :: __construct();
			$this->load->helper('url');
		}

		function viewMain(){
			
			$this->load->view('header');
			$this->load->view('main_screen');
			$this->load->view('footer');
		}

		function viewPolicy()
		{
			$this->load->view('header');
			$this->load->view('privacy_policy');
			$this->load->view('footer');
		}
		function viewTemp()
		{
			$this->load->view('header');
			$this->load->view('under_construction');
			$this->load->view('footer');

		}
		function whatLinked()
		{
			$this->load->view('header');
			$this->load->view('what_linkedin');
			$this->load->view('footer');
		}
		
		function country()
		{
			$this->load->view('header');
			$this->load->view('country');
			
		}
		function userAgreement()
		{
			$this->load->view('header');
			$this->load->view('user_agreement');
			$this->load->view('footer');
		}
		function forgotPassword()
		{
			$this->load->view('header');
			$this->load->view('fgt_pass');
		}

		function joinToday()
		{
			$this->load->view('signup');
		}
		function signup_step4()
		{
			$this->load->view('signup/signup_step4');
		}
		function signup_step3()
		{
			$this->load->view('signup/signup_step3');
		}

	
	};
?>