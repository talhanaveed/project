<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Login_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function validate(){
		// grab user input
		$email = $this->security->xss_clean($this->input->post('email-field'));
		$password = $this->security->xss_clean($this->input->post('pass-field'));
		
		// Prep the query
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		
		// Run the query
		$query = $this->db->get('users');
               
                
		// Let's check if there are any results
                
		if($query->num_rows == 1)
		{
			// If there is a user, then create session data
			$row = $query->row();
                        if($row->Position=='Employed'||$row->Position='seeker')
                        {
                            $this->db->select('jtitle, ci');
                            
//                            $this->db->join('employed', 'users.email = employed.email');
                            if($row->Position=='Employed')
                            {
                                $this->db->from('employed');
                           
                            }
                            else 
                            {
                                $this->db->from('seeker');
                                
                            }
                             $this->db->where('email', $row->email);
                            $query2=$this->db->get();

                        }
                        $row2=$query2->row();
			$data = array(
					'id' => $row->userid,
					'fname' => $row->fname,
					'lname' => $row->lname,
					'email' => $row->email,
					'validated' => true,
                                        'fposition' =>$row2->jtitle,
                                        'fplace' =>$row2->ci
					);
			$this->session->set_userdata($data);
			return true;
		}
		// If the previous process did not validate
		// then return false.
		return false;
	}
}
?>