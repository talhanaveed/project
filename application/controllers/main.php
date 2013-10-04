<?php
	class main extends CI_Controller{
		function main(){
			parent :: __construct();
		}

		function viewMain(){
			$this->load->helper('url');
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
		function login()
		{
			$this->load->view('header');
			$this->load->view('login');

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

		function signup_step1()
		{
			$this->load->view('signup_step1');
		}

		function signup_step2()
		{
			$this->load->view('signup_step2');
		}

		function signup_step3()
		{
			$this->load->view('signup_step3');
		}

	};
?>