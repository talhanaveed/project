<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        
    }
    
    public function test1(){
        $this->load->view('myttt');
    }

    public function mmm(){
        
        $this->load->view('mine');
    }

};
?>