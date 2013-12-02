<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test2 extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        
    }

    public function index(){
        $this->load->view('myttt2');
    }

    public function go(){
        $this->load->view('mine2');
    }
    
};
?>