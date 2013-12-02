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
			redirect('home', 'refresh');
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
                   
//                    $data=array(
//                         'fname'=>$this->session->userdata('fname'),
//               'lname'=>$this->session->userdata('lname'),
//               'title'=>$this->session->userdata('fposition'),
//               'place'=>$this->session->userdata('fplace'),
//                             'country'=>$this->session->userdata('country')
//                        
//             
//                            );
                  $this->load_feed();
               
		}		
	}
	public function load_feed(){

        $this->load->model('feed_model');
        $this->load->model('search_model');
        $array['result'] = $this->feed_model->get_feed();
       
        $this->load->model('alumni_model');
        $array['known'] = $this->alumni_model->get_alumni();
        $array['valid']= array();
        foreach ($array['known'] as $row)
        {
            array_push($array['valid'], $this->search_model->check_connection($row['eemail']));
           
      //      $row['valid']=$this->search_model->check_connection($row['email']);
        }
        
        $array['imgpath'] = $this->session->userdata('imgpath');
        $array['fname'] = $this->session->userdata('fname');
        $array['lname'] = $this->session->userdata('lname');
        $this->load->view('profile_header',$array);
        $this->load->view('newsfeed', $array);

    }
	public function do_logout(){
		$this->session->sess_destroy();
		redirect('main/viewMain','refresh');
	}
}
?>