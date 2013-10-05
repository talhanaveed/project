<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class verify_model extends CI_Model
{
	function __construct()
  {
		parent::__construct();
		 $this->load->helper('url'); 
	}

  function verify($data)
  {


    $this->db->where('email', $data);
    // Run the query
    $query = $this->db->get('users');
    if($query->num_rows == 1)
    {



      return $query->result_array();
    }
    else
      return 0;
  }

    function get_detail($data)
  {

    if($data['position']=="Employed")
    {
       $this->db->where('email', $data['email']);
       $this->db->select('jtitle');
       $query=$this->db->get('employed');

    }
    else if($data['position']=="Seeker")
    {
       $this->db->where('email', $data['email']);
       $this->db->select('jtitle');
       $query=$this->db->get('seeker');

    }
     else if($data['position']=="Student")
    {
       $this->db->where('email', $data['email']);
       $this->db->select('institute');
       $query=$this->db->get('stu');

    }

    if($query->num_rows == 1)
    {
      return $query->result_array();
    }
    else
      return 0;
  }
};
	
?>