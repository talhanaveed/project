<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('files_model');
          if($this->session->userdata('validated'))
		{
			
		}
                else
                {
                    redirect('main/viewMain');
                }
        
    }
    
    public function index(){
        // $this->load->view('profile_header');
        // $this->load->view('newsfeed');
        $this->load_feed();
    }
    
    public function find_alumni()
	{
		$array['imgpath'] = $this->session->userdata('imgpath');
    $array['fname']= $this->session->userdata('fname');
    $array['lname']= $this->session->userdata('lname');
    $this->load->view('profile_header', $array);
		$this->load->view('find_alumini');
	}

    public function load_feed(){

        $this->load->model('feed_model');
        $this->load->model('search_model');
        $array['result'] = $this->feed_model->get_feed();
        // $array['comment'] = $this->feed_model->get_comments();
        // $array['known'] = $this->feed_model->get_know();
        $this->load->model('alumni_model');
        $array['known'] = $this->alumni_model->get_alumni();
        $array['valid']= array();
        foreach ($array['known'] as $row)
        {
            array_push($array['valid'], $this->search_model->check_connection($row['eemail']));
           
      //      $row['valid']=$this->search_model->check_connection($row['email']);
        }
        $array['imgpath'] = $this->session->userdata('imgpath');
        $array['fname'] = $this->session->userdata('fname');
        $array['lname'] = $this->session->userdata('lname');
        $this->load->view('profile_header', $array);
        $this->load->view('newsfeed', $array);
    }

    function userAgreement()
    {
         $array['imgpath'] = $this->session->userdata('imgpath');
        $array['fname']= $this->session->userdata('fname');
        $array['lname']= $this->session->userdata('lname');
      $this->load->view('profile_header', $array);
      $this->load->view('user_agreement');
      $this->load->view('footer');
    }

    function viewPolicy()
    {
         $array['imgpath'] = $this->session->userdata('imgpath');
        $array['fname']= $this->session->userdata('fname');
        $array['lname']= $this->session->userdata('lname');
      $this->load->view('profile_header', $array);
      $this->load->view('privacy_policy');
      $this->load->view('footer');
    }

    public function text(){
        $image = $_POST['image'];
        $msg = $_POST['msg'];
        $status= $_POST['status'];
        $link= $_POST['link'];
       $msg= htmlspecialchars($msg);
      
        $this->load->model('feed_model');
        $this->feed_model->post_text($image, $msg, $status, $link);
        $array['result'] = $this->feed_model->get_feed();
        // $array['comment'] = $this->feed_model->get_comments();
        $this->load->view('feed_update', $array);
        // $this->load_feed();
 
    }
    public function like()
    {
      $id = $_POST['id'];
      $this->load->model('feed_model');
      $like = $this->feed_model->hit_like($id);
      echo $like;
    }
    public function comment(){

        $id = $_POST['id'];
        // $id= 226;
        $msg = $_POST['msg'];
        $msg= htmlspecialchars($msg);
        $this->load->model('feed_model');
        $this->feed_model->post_comment($id, $msg);
        $array['comment'] = $this->feed_model->get_comments($id);
        $array['feedID'] = $id;
        $this->load->view('map-comm',$array);
        // redirect('home');
        // $array['result'] = $this->feed_model->get_feed();
        // $array['comment'] = $this->feed_model->get_comments();
        // $this->load->view('feed_update', $array);
        // $this->load_feed();
 
    }
    public function display_com()
    {
        $id = $_POST['id'];

        $this->load->model('feed_model');
        $array['comment'] = $this->feed_model->get_comments($id);
        $array['feedID'] = $id;
        $this->load->view('map-comm',$array);
    }
    public function attach()
    {
        echo $this->input->post('userfile');
    }
    
    public function upload_file(){
       
       $status = "";
       $msg = "";
       $file_element_name = 'userfile';
        
       // if (empty($_POST['title']))
       // {
       //    $status = "error";
       //    $msg = "Please enter a title";
       // }
        
       if ($status != "error")
       {
          $config['upload_path'] = './uploads/feed/';
          $config['allowed_types'] = 'gif|jpg|png|doc|txt';
          $config['max_size']  = 1024 * 8;
          $config['encrypt_name'] = TRUE;
     
          $this->load->library('upload', $config);
     
          if (!$this->upload->do_upload($file_element_name))
          {
             $status = 'error';
             $msg = $this->upload->display_errors('', '');
          }
          else
          {
             $data = $this->upload->data();
             $file_id = $this->files_model->insert_file($data['file_name']);
             if($file_id)
             {
                $status = "success";
                $msg = "File successfully uploaded";
             }
             else
             {
                unlink($data['full_path']);
                $status = "error";
                $msg = "Something went wrong when saving the file, please try again.";
             }
          }
          @unlink($_FILES[$file_element_name]);
       }
       echo json_encode(array('status' => $status, 'msg' => $msg));
    }


    public function files(){
      $files = $this->files_model->get_files();
      $img['filename'] = $files->filename;
      $this->load->view('img_container', $img);
    }

};
?>
