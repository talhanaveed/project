<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumni extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        
    }
    
    public function index(){
         $array['imgpath'] = $this->session->userdata('imgpath');
        $array['fname'] = $this->session->userdata('fname');
        $array['lname'] = $this->session->userdata('lname');
        $this->load->view('profile_header',$array);
        $this->load->view('find_alumini');
    }

    public function get(){

        $this->load->model('alumni_model');
        $array['result'] = $this->alumni_model->get_alumni();
         $array['imgpath'] = $this->session->userdata('imgpath');
        $array['fname'] = $this->session->userdata('fname');
        $array['lname'] = $this->session->userdata('lname');
        $this->load->view('profile_header',$array);
        $this->load->view('find_alumini', $array);
    }
};
?>
