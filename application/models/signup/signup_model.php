<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class signup_model extends CI_Model{
	function __construct(){
		parent::__construct();
		 $this->load->helper('url'); 
	}

  function verify(){

    $email = $this->input->post('email-field');
    $this->db->where('email', $email);
    // Run the query
    $query = $this->db->get('users');
    if($query->num_rows == 1)
      return 0;
    else
      return 1;
  }
	
	function insert()
	{

    $this->load->database();

    $user = array(
              'fname'=>$this->session->userdata('fname'),
              'lname'=>$this->session->userdata('lname'),
              'email'=>$this->session->userdata('email'),
              'password'=>$this->session->userdata('password'),
              'Position'=>$this->input->post('selectType'),
              'Country'=>$this->input->post('country-select'),
              'PostalCode'=>$this->input->post('postal-code'),
            );

    $position= $this->input->post('selectType');
    $checkbox= $this->input->post('check');

    $data=array();
    
    if($position == "Employed"){

      $data['email'] = $this->session->userdata('email');
      $data['jtitle'] = $this->input->post('job-title');
      
      if($checkbox=="on")
      {
        $data['self'] = 1;
        $data['ci'] = $this->input->post('industry');
      }
      else{
        $data['self'] = 0;
        $data['ci'] = $this->input->post('company');
      }

      $this->db->insert('users',$user);
      $this->db->insert('employed',$data);
    }
    else if($position == "Seeker"){

      $data['email'] = $this->session->userdata('email');
      $data['jtitle'] = $this->input->post('sjob');
      
      if($checkbox=="on")
      {
        $data['self'] = 1;
        $data['ci'] = $this->input->post('industry');
      }
      else{
        $data['self'] = 0;
        $data['ci'] = $this->input->post('scompany');
      }

      $data['sdate'] = $this->input->post('syear');
      $data['edate'] = $this->input->post('eyear');

      $this->db->insert('users',$user);
      $this->db->insert('seeker',$data);
    }
    else{
      $data['email'] = $this->session->userdata('email');
      $data['institute'] = $this->input->post('school');
      $data['sdate'] = $this->input->post('sY');
      $data['edate'] = $this->input->post('eY');

      $this->db->insert('users',$user);
      $this->db->insert('stu',$data);
    }
  }


}
?>