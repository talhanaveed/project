<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
        
    public function get_profile_data($data)
    {
      
         if($data['pos']=='Employed'||$data['pos']=='Seeker')
                        {
                            $this->db->select('jtitle, ci');
                            
//                            $this->db->join('employed', 'users.email = employed.email');
                            if($data['pos']=='Employed')
                            {
                                $this->db->from('employed');
                           
                            }
                            else 
                            {
                                $this->db->from('seeker');
                                
                            }
                             $this->db->where('email', $data['email']);
                            $query2=$this->db->get();

                        }
                        else
                        {
                             $this->db->select('jtitle, institute as ci');
                             $this->db->from('stu');
                             $this->db->where('email', $data['email']);
                             $query2=$this->db->get();
                        }
                       return $query2->result_array();
    }
    public function get_search($find)
    {
        //$email=$this->session->userdata('email');

        $this->db->select('users.email, fname, lname, Country, Position, imgpath, employed.jtitle as ejtitle, employed.ci as eci, seeker.ci as sci, seeker.jtitle as xjtitle, stu.jtitle as sjtitle, institute, stu.sdate as ssdate, stu.edate as sedate');
        $this->db->from('users');
        $this->db->join('employed', 'employed.email = users.email', 'left');
        $this->db->join('stu', 'stu.email = users.email', 'left');
        $this->db->join('seeker','seeker.email = users.email', 'left');
        $this->db->like('fname', $find, 'after');
        $this->db->or_like('lname', $find);
        //$this->db->or_where('Country', $find);
        $query=$this->db->get();
        
        return $query->result_array();
        
    }
    public function check_connection($find)
    {
        $this->db->from('connections');
        $this->db->where('member1',$find);
        $this->db->where('member2', $this->session->userdata('email'));
       $query= $this->db->get();
        if($query->num_rows==1)
        {
            return true;
        }
        $this->db->from('connections');
        $this->db->where('member2',$find);
        $this->db->where('member1', $this->session->userdata('email'));
       $query2= $this->db->get();
        if($query2->num_rows==1)
        {
            return true;
        }
         $this->db->from('invitations');
        $this->db->where('from_id',$find);
        $this->db->where('to_id', $this->session->userdata('email'));
       $query3= $this->db->get();
        if($query3->num_rows==1)
        {
            return true;
        }
        $this->db->from('invitations');
        $this->db->where('to_id',$find);
        $this->db->where('from_id', $this->session->userdata('email'));
       $query4= $this->db->get();
        if($query4->num_rows==1)
        {
            return true;
        }
       return false;
    }
    public function get_adv($fname, $lname, $country, $company, $key){
        $this->db->select('users.email, fname, lname, Country, Position, imgpath, employed.jtitle as ejtitle, employed.ci as eci, seeker.ci as sci, seeker.jtitle as xjtitle,stu.jtitle as sjtitle, institute, stu.sdate as ssdate, stu.edate as sedate');
        $this->db->from('users');
        $this->db->join('employed', 'employed.email = users.email', 'left');
        $this->db->join('stu', 'stu.email = users.email', 'left');        
        $this->db->join('seeker','seeker.email = users.email', 'left');
        if($key != NULL){
            $this->db->like('fname', $key);
            $this->db->or_like('lname', $key);
            $this->db->or_like('employed.ci', $key);
            $this->db->or_like('seeker.ci', $key);
            
        }

        if($fname != NULL){
            $this->db->where('fname', $fname);
        }

        if($lname != NULL){
            $this->db->where('lname', $lname);   
        }

        if($company != NULL){
            $this->db->or_where('ci', $company);
        }

        if($country != NULL){
            $this->db->where('Country', $country);
        }        
        
        $query=$this->db->get();
        
        return $query->result_array();
    }
};

?>
