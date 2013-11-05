<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invitations extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}
        
        public function index()
        {
            $this->load->model('invitations_model');
            $array['result']= $this->invitations_model->get_invitations();
            $this->load->view('profile_header');
            $this->load->view('invitations',$array);
            $this->load->view('footer');
//             echo '<pre>';
//    print_r ($array);
//    echo '</pre>';
//            foreach ($array as $row)
//            {
//               echo $row['fname'];
//               echo $row['lname'];
//               echo $row['fposition'];
//            }
            
        }
        public function add()
        {
           $email = $this->input->get('var1');
       
            $this->load->model('invitations_model');
            $this->invitations_model->add_connection($email);
            
        }
};
?>
