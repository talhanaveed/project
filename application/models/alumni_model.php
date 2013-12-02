<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumni_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
        
    public function get_alumni(){
        $Position = $this->session->userdata('type');
        
        // $Position = 'employed';
        // $Company = 'TRG';
        $i = 0;
        $item = array();

        $data=$this->check_connection();
        
        if($data){
        // print_r($item);
            foreach ($data as $row){
                foreach($row as $member){

                    $item[$i] = $member;
                    $i++;
                }
            }
        }
        if($Position == 'employed' || $Position == 'Employed'){
            $Company = $this->session->userdata('fplace');

            $this->db->select('employed.email as eemail, fname, lname, Position, Country, ci, employed.jtitle as ejtitle');
            $this->db->from('employed');
            $this->db->join('users', 'employed.email = users.email');
            $this->db->where('ci',$Company);
            $this->db->where('employed.email !=', $this->session->userdata('email'));
            //$this->db->or_where_in('eemail',$data);
            // $this->db->or_where('employed.email',$this->session->userdata('email'));
            if($data)
            {
                $this->db->where_not_in('employed.email', $item);
            }
            
            //
            $query=$this->db->get();
            return $query->result_array();
        }
        
        if($Position == 'student' || $Position == 'Student'){
            $Institute = $this->session->userdata('fplace');
            
            $this->db->select('stu.email as eemail, fname, lname, Country, institute as ci, stu.jtitle as ejtitle,Position');
            $this->db->from('stu');
            $this->db->join('users', 'stu.email = users.email');
            $this->db->where('institute',$Institute);
             $this->db->where('stu.email !=', $this->session->userdata('email'));
             if($data)
            {
                $this->db->where_not_in('stu.email', $item);
            }
            $query=$this->db->get();
            return $query->result_array();
        }
        if($Position == 'seeker' || $Position == 'Seeker'){
            $Company = $this->session->userdata('fplace');
            
            $this->db->select('seeker.email as eemail, fname, lname, Country, ci, seeker.jtitle as ejtitle,Position');
            $this->db->from('seeker');
            $this->db->join('users', 'seeker.email = users.email');
               $this->db->where('ci',$Company);
             $this->db->where('seeker.email !=', $this->session->userdata('email'));
             if($data)
            {
                $this->db->where_not_in('seeker.email', $item);
            }
            $query=$this->db->get();
            return $query->result_array();
        }
        // if($Position == 'seeker' || $Position == 'Seeker'){
        //     $Company = $this->session->userdata('ci');

        //     $this->db->select('seeker.email as eemail, fname, lname, Position, Country, ci, seeker.jtitle as ejtitle');
        //     $this->db->from('seeker');
        //     $this->db->join('users', 'seeker.email = users.email');
        //     $this->db->where('ci',$Company);
        //     $query=$this->db->get();
        //     return $query->result_array();
        // }

        // $this->db->select('users.email, fname, lname, Country, Position, imgpath, employed.jtitle as ejtitle, ci, stu.jtitle as sjtitle, institute, sdate, edate');
        // $this->db->from('users');
        // $this->db->join('employed', 'employed.email = users.email', 'left');
        // $this->db->join('stu', 'stu.email = users.email', 'left');
        // $this->db->where('fname', $find);
        // $this->db->or_where('lname', $find);
        // //$this->db->or_where('Country', $find);
        // $query=$this->db->get();
        // return $query->result_array();
        
    }

    public function check_connection(){
      
        $this->db->select('member1');
        $this->db->from('connections');
        $this->db->where('member2',$this->session->userdata('email'));
      
         $query= $this->db->get();

          $this->db->select('member2');
        $this->db->from('connections');
        $this->db->where('member1',$this->session->userdata('email'));
      
         $query2= $this->db->get();

         $result= array_merge($query->result_array(), $query2->result_array());
  
        return $result;
   
    }
};

?>
