<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class signup extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
			if($this->session->userdata('validated'))
		{
			redirect('temp', 'refresh');
		}
	}

	function index(){

		   $fb_config = array(
            'appId'  => '455028367944208',
            'secret' => 'a068ba88465c46e31b26bda33c5dc188'
        );

        $this->load->library('facebook', $fb_config);

        $user = $this->facebook->getUser();
        $access_token = $this->facebook->getAccessToken();

        if ($user) {
            try {
                $data['user_profile'] = $this->facebook
                    ->api('/me?fields=name,first_name,last_name,username,email');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }

        if ($user) {
            $params=array('next' => 'main/viewMain');
            $data['logout_url'] = $this->facebook->getLogoutUrl($params);
          //   $data['login_url'] = $this->facebook->getLoginUrl();
              $this->load->view('signup/signup',$data);
   
           

        } else {
        	$urli= 'http://localhost/Project/index.php/signup/signup';

            $data['login_url'] = $this->facebook->getLoginUrl(array(
        'scope'         => 'email',
        'redirect_uri'  => $urli,
        ));
                      $this->load->view('signup/signup',$data);
        }
                  $this->DestroySession();


       
	}
	public function save_info(){

		$this->load->model('signup/signup_model');
		$valid = $this->signup_model->verify();

		if($valid){
			$data=array(
			'fname'=>$this->input->post('firstname'),
			'lname'=>$this->input->post('lastname'),
			'email'=>$this->input->post('email-field'),
			'password'=>$this->input->post('pass-field'),
			);
			
			$this->session->set_userdata($data);
        	$this->load->view('signup/signup_step1', $data);
		}
		else
			echo "!..EMAIL ALREADY EXISTS..!";
	}

	public function process()
	{	 
		//	Load the model
	
		$eid['email']=$this->session->userdata('email');
		$this->load->model('signup/signup_model');
		$this->signup_model->insert();
//		$this->session->sess_destroy();
		$this->load->view('signup/signup_step2',$eid);
	 }
	 public function callstep4()
	 {
	 	$this->load->view('signup/signup_step4');
	 }
	  public function callstep5()
	 {
	 	$this->load->view('signup/signup_step5');
	 }
       
	 public function processAgain()
	 {
	 	$data=array(
	 		'email'=>$this->input->post('user-email'));
	 	$this->session->set_userdata($data);
	 	$eid['email']=$this->input->post('user-email');
	 	$this->load->view('signup/gmail_login', $eid);
	 }

		public function DestroySession()
		{
		$this->load->helper('url');


		$fb_config = array(
		'appId'  => '455028367944208',
		'secret' => 'a068ba88465c46e31b26bda33c5dc188'
		);

		$this->load->library('facebook', $fb_config);
		//Get User ID
		$user = $this->facebook->getUser();

		if ($user)
		{
		try
		{
		// Proceed knowing you have a logged in user who's authenticated.
		$user_profile = $this->facebook->api('/me');

		//   print_r($user_profile);
		} catch (FacebookApiException $e)
		{

		log_message('eror', $e);

		$user = null;
		}
		}

		// Login or logout url will be needed depending on current user state.
		if ($user)
		{
		if( session_id() )
		{} 
		else { 
		session_start() ; 
		}

		//   $logoutUrl = $this->facebook->getLogoutUrl($params = array('next' => base_url()));
		//echo 'Logout; '.($logoutUrl);
		$this->facebook->destroySession();
		// redirect($logoutUrl, 'refresh');
		}

		}

}
?>