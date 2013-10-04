<?php
class Example extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $fb_config = array(
            'appId'  => '455028367944208',
            'secret' => 'a068ba88465c46e31b26bda33c5dc188'
        );

        $this->load->library('facebook', $fb_config);

        $user = $this->facebook->getUser();

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

        } else {

            $data['login_url'] = $this->facebook->getLoginUrl();
        }

        $this->load->view('view',$data);
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

    $logoutUrl = $this->facebook->getLogoutUrl($params = array('next' => base_url()));
    //echo 'Logout; '.($logoutUrl);
    $this->facebook->destroySession();
    redirect($logoutUrl, 'refresh');
}

}
}
?>