<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FindAlumni extends CI_Controller{
    
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
        $this->load->view('profile_header');
			$this->load->view('find_alumini');
    }
  
};
?>
