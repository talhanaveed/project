<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feed_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
    

    public function get_feed(){
        
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
   
        $this->db->select('feed.email as email, id, feed.msg as msg, fname, lname, Position, Country, img_path,imgpath,link, COUNT(feedID) as num, like, imgpath');
        $this->db->from('feed');
        $this->db->join('users', 'feed.email = users.email', 'left');
        $this->db->join('comments', 'feed.id = comments.feedID', 'left');
        $this->db->where('status','public');
        $this->db->or_where('feed.email',$this->session->userdata('email'));
        $this->db->or_where_in('feed.email',$item);
        $this->db->group_by('id');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        }
        else
        {
            $this->db->select('feed.email as email, id, feed.msg as msg, fname, lname, Position, Country,img_path, imgpath,link, COUNT(feedID) as num, like, imgpath');
        $this->db->from('feed');
        $this->db->join('users', 'feed.email = users.email', 'left');
        $this->db->join('comments', 'feed.id = comments.feedID', 'left');
        $this->db->where('status','public');
        $this->db->or_where('feed.email',$this->session->userdata('email'));
          $this->db->group_by('id');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        }

        return $query->result_array();
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

    public function get_comments($id)
    {
        $this->db->select('comments.email as email, feedID as id, Position, Country, comments.msg as msg, fname, lname, imgpath');
      //  $this->db->from('feed');
        // $this->db->join('users', 'feed.email = users.email', 'left');
      //  $this->db->join('comments', 'feed.id = comments.feedID', 'left');
        $this->db->from('comments');
        $this->db->join('users', 'comments.email = users.email', 'left');
        $this->db->where('feedID',$id);
        $this->db->order_by('id', 'desc');

        $query = $this->db->get();

        return $query->result_array();
    }

    public function post_text($image, $msg, $status, $link){
        // $image = $this->input->post('image');
        // $msg = $this->input->post('postText');
        // $image = $_POST['image'];,
        // $message = $this->input->post('postText');
        $email = $this->session->userdata('email');
        $feed = array(
                    'email' => $email,
                    'msg' => $msg,
                    'status' => $status,
                    'img_path'=> $image,
                    'link'=> $link
            );

        $this->db->insert('feed', $feed);
    }
    public function post_comment($id, $msg){
        // $image = $this->input->post('image');
        // $msg = $this->input->post('postText');
        // $image = $_POST['image'];
        // $message = $this->input->post('postText');
        $email = $this->session->userdata('email');
        $comment = array(
                    'feedID' => $id,
                    'email' => $email,
                    'msg' => $msg
                    
            );

        $this->db->insert('comments', $comment);
    }

    public function hit_like($id)
    {
         $email= $this->session->userdata('email');
         $data= array(
            'feedID' => $id,
            'email' =>$email
            );
         $like;
        $this->db->select('feedID');
        $this->db->from('likes');
        $this->db->where('feedID', $id);
        $this->db->where('email', $email);
        $query = $this->db->get();
        if($query->num_rows==1)
        {
            $this->db->where('feedID', $id);
            $this->db->where('email', $email);
            $this->db->delete('likes'); 

             $this->db->select('like');
            $this->db->from('feed');
            $this->db->where('id', $id);
            $query2 = $this->db->get();
             $row=$query2->row();
            $like = $row->like;
            $like = $like-1;
             $this->db->set('like',$like);
             $this->db->where('id',$id);
            $this->db->update('feed');
        }
         else{

            $this->db->insert('likes',$data);

            $this->db->select('like');
            $this->db->from('feed');
            $this->db->where('id', $id);
            $query2 = $this->db->get();
             $row=$query2->row();
            $like = $row->like;
            $like = $like+1;
             $this->db->set('like',$like);
             $this->db->where('id',$id);
            $this->db->update('feed');

        }

        return $like;
        
    }
    public function get_know(){
        $Position = $this->session->userdata('Position');
        
        $Position = 'employed';
        $Company = 'TRG';

        if($Position == 'employed' || $Position == 'Employed'){
            $Company = $this->session->userdata('ci');

            $this->db->select('employed.email as eemail, fname, lname, Country, ci, employed.jtitle as ejtitle', 'Position', 'Company');
            $this->db->from('employed');
            $this->db->join('users', 'employed.email = users.email');
            $this->db->where('ci',$Company);
            $query=$this->db->get();
            return $query->result_array();
        }
        
        if($Position == 'student' || $Position == 'Student'){
            $Institute = $this->session->userdata('institute');
            
            $this->db->select('stu.email as eemail, fname, lname, Country, ci, stu.jtitle as ejtitle');
            $this->db->from('stu');
            $this->db->join('users', 'stu.email = users.email');
            $this->db->where('institute',$Institute);
            $query=$this->db->get();
            return $query->result_array();
        }

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

};

?>
