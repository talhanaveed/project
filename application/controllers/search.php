<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
          if($this->session->userdata('validated'))
		{
			
		}
                else
                {
                    redirect('main/viewMain');
                }
        
    }
    
   
    public function index(){
        $array['result']=null;
         $array['imgpath'] = $this->session->userdata('imgpath');
        $array['fname'] = $this->session->userdata('fname');
        $array['lname'] = $this->session->userdata('lname');
        $this->load->view('profile_header',$array);
        $this->load->view('advanced_search', $array);
    }
    
    public function get_result(){
        //$find = $this->input->get('search-field');
        $find = $_POST['find'];
        $this->load->model('search_model');
        $array['result'] = $this->search_model->get_search($find);
        $this->load->view('drop_search', $array);
    }
    
    public function get()
    {
        $find = $this->input->get('search-field');
        $this->load->model('search_model');
        $array['result']= $this->search_model->get_search($find);
        $array['valid']= array();
        $array['myemail']=$this->session->userdata('email');
        
        foreach ($array['result'] as $row)
        {
            array_push($array['valid'], $this->search_model->check_connection($row['email']));
           
      //      $row['valid']=$this->search_model->check_connection($row['email']);
        }
         $array['imgpath'] = $this->session->userdata('imgpath');
        $array['fname'] = $this->session->userdata('fname');
        $array['lname'] = $this->session->userdata('lname');
       $this->load->view('profile_header',$array);
        $this->load->view('advanced_search', $array);
    }

    public function get_key()
    {
        $find = $this->input->get('keywords');
        $this->load->model('search_model');
        $array['result'] = $this->search_model->get_search($find);
        $array['valid']= array();
        $array['myemail']=$this->session->userdata('email');
        
        foreach ($array['result'] as $row)
        {
            array_push($array['valid'], $this->search_model->check_connection($row['email']));
           
      //      $row['valid']=$this->search_model->check_connection($row['email']);
        }
        
        $this->load->view('profile_header');
        $this->load->view('advanced_search', $array);
    }

    public function get_advanced()
    {
        $fname = $this->input->post('firstName');
        $lname = $this->input->post('lastName');
        $company = $this->input->post('company');
        $country = $this->input->post('countryCode');
        $key = $this->input->post('keywords');
        $this->load->model('search_model');
        $array['result'] = $this->search_model->get_adv($fname, $lname, $country, $company, $key);
        $array['valid']= array();
        $array['myemail']=$this->session->userdata('email');
        
        foreach ($array['result'] as $row)
        {
            array_push($array['valid'], $this->search_model->check_connection($row['email']));
           
      //      $row['valid']=$this->search_model->check_connection($row['email']);
        }
         $array['imgpath'] = $this->session->userdata('imgpath');
        $array['fname'] = $this->session->userdata('fname');
        $array['lname'] = $this->session->userdata('lname');
        $this->load->view('profile_header',$array);
        $this->load->view('advanced_search', $array);
    }
        



};
?>
