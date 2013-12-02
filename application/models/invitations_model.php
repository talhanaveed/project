<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invitations_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
        
        public function get_invitations()
        {
            $email=$this->session->userdata('email');

            $this->db->select('email,fname,lname, fposition, fplace, date, imgpath, msg');
            $this->db->from('invitations');
            $this->db->join('users', 'users.email = invitations.from_id');
            $this->db->where('to_id', $email);
            $query=$this->db->get();
            
            return $query->result_array();
            
        }
         public function get_not_count()
        {
            $email=$this->session->userdata('email');

            $this->db->select('email,fname,lname, fposition, fplace, date, imgpath, msg');
            $this->db->from('invitations');
            $this->db->join('users', 'users.email = invitations.from_id');
            $this->db->where('to_id', $email);
            $query=$this->db->get();
            
            return $query->num_rows;
        }
        public function send_invite()
        {
 
            $to_id=$this->input->post('email');
            $msg=$this->input->post('greeting');
            $data = array(
                    'from_id' =>$this->session->userdata('email'),
                    'to_id' =>$to_id,
                    'fposition' => $this->session->userdata('fposition'),
                    'fplace' =>$this->session->userdata('fplace'),
                   
                    'msg' => $msg
            );
            $this->db->set('date', 'NOW()', FALSE);
            
            $this->db->insert('invitations',$data);
            
   
        }
         public function add_connection($email)
        {
 
//            $id=$email;
            $data = array(
                    'member1' =>$this->session->userdata('email'),
                    'member2' =>$email
                 
            );
            
            $this->db->insert('connections',$data);
            
            if($email)
            {
            $this->db->where('from_id', $email);
            $this->db->where('to_id',$this->session->userdata('email') );
            $this->db->delete('invitations'); 
            }
               
        }
        public function ignore($email)
        {
            $this->db->where('from_id', $email);
            $this->db->where('to_id',$this->session->userdata('email') );
            $this->db->delete('invitations'); 
        }
};
?>
