<?php
	class test extends CI_Controller{
		function test(){
			parent :: __construct();
		}

		function viewHome(){
			$this->load->view('header');
			$this->load->view('test_view');
			$this->load->view('footer');
		}

		function viewData(){
			$this->load->model('test_model');
			$data['query'] = $this->test_model->test_get();
			$this->load->view('test_view', $data);
			$this->load->view('footer');
		}
	};
?>