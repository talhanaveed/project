<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mytest extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        
    }

    public function index(){
        $this->load->view('myembed');
    }

    public function img(){
    	$this->load->view('myimg');
    }
    
};
?>