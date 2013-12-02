<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invitations extends CI_Controller{
	
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
        
        public function index()
        {
            $this->load->model('invitations_model');
            $array['result']= $this->invitations_model->get_invitations();
             $array['imgpath'] = $this->session->userdata('imgpath');
        $array['fname'] = $this->session->userdata('fname');
        $array['lname'] = $this->session->userdata('lname');
        $array['msg'] = null;
            $this->load->view('profile_header',$array);
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
            $array['result']= $this->invitations_model->get_invitations();
             $array['imgpath'] = $this->session->userdata('imgpath');
        $array['fname'] = $this->session->userdata('fname');
        $array['lname'] = $this->session->userdata('lname');
         $array['msg'] = "New Contact Added";
            $this->load->view('profile_header',$array);
            $this->load->view('invitations',$array);
            $this->load->view('footer');
            
        }
        public function fetch()
        {
             $this->load->model('invitations_model');
            $array['result']= $this->invitations_model->get_invitations();
            $this->load->view('invitations_droplist',$array);
                  
        }
        public function ignore()
        {
            $email = $this->input->get('var1');
             $this->load->model('invitations_model');
            $this->invitations_model->ignore($email);
            $array['result']= $this->invitations_model->get_invitations();
             $array['imgpath'] = $this->session->userdata('imgpath');
            $array['fname'] = $this->session->userdata('fname');
            $array['lname'] = $this->session->userdata('lname');
            $array['msg'] = "Contact Request Ignored";
            $this->load->view('profile_header',$array);
            $this->load->view('invitations',$array);
            $this->load->view('footer');
                  
        }
         public function fetch_not_count()
        {
             $this->load->model('invitations_model');
            echo $this->invitations_model->get_not_count();
        
                  
        }
        
        public function send_invite()
        {
                    
                   $data=array(
                       'email' => $this->input->get('var1'),                       
                     'fname' => $this->input->get('var2'),
                       'myfname'=>$this->session->userdata('fname'),
                       'mylname'=>$this->session->userdata('lname')
                           );
                   
                    $array['imgpath'] = $this->session->userdata('imgpath');
        $array['fname'] = $this->session->userdata('fname');
        $array['lname'] = $this->session->userdata('lname');
                    $this->load->view('profile_header',$array);
                    $this->load->view('send_invite',$data);
                    $this->load->view('footer');
        }
        public function process()
        {
            $this->load->model('invitations_model');
            $this->invitations_model->send_invite();

        // $array['comment'] = $this->feed_model->get_comments();
        // $array['known'] = $this->feed_model->get_know();
$array['result']= $this->invitations_model->get_invitations();
        $array['imgpath'] = $this->session->userdata('imgpath');
 
        $array['fname'] = $this->session->userdata('fname');
        $array['lname'] = $this->session->userdata('lname');
        $array['msg'] = "Contact Request Sent";
        $this->load->view('profile_header',$array);
          $this->load->view('invitations',$array);
            $this->load->view('footer');
                  
              
        }
};
?>
