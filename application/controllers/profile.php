<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller{
    
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
    
    public function open(){
         $con=$this->input->get('var5');
       $email=$this->input->get('var4');
       $pos=$this->input->get('var3');
       $lname=$this->input->get('var2');
       $fname=$this->input->get('var1');
       $myemail=$this->session->userdata('email');
       $this->load->model('search_model');
       $data=array('email'=>$email,
           'pos'=>$pos);
       $array= $this->search_model->get_profile_data($data);
       $valid=$this->search_model->check_connection($email);
       $record=array('fname'=>$fname,
           'lname'=>$lname,
           'email'=>$email,
           'position'=>$pos,
           'country'=>$con,
           'title'=>$array[0]['jtitle'],
           'place'=>$array[0]['ci'],
           'valid'=>$valid,
           'myemail'=>$myemail);
         $array['imgpath'] = $this->session->userdata('imgpath');
        $array['fname'] = $this->session->userdata('fname');
        $array['lname'] = $this->session->userdata('lname');
        $this->load->view('profile_header',$array);
        $this->load->view('profile',$record);
        $this->load->view('footer');
    }
    public function edit_profile()
    {
      $data['imgpath'] = $this->session->userdata('imgpath');
       $array['imgpath'] = $this->session->userdata('imgpath');
        $array['fname'] = $this->session->userdata('fname');
        $array['lname'] = $this->session->userdata('lname');
      $this->load->view('profile_header',$array);
      $this->load->view('upload', $data);
      $this->load->view('footer');
    }

     public function upload_file2()
    {
   $status = "";
   $msg = "";
   $file_element_name = 'userfile';
    
   if ($status != "error")
   {
      $config['upload_path'] = './uploads/dp/';
      $config['allowed_types'] = 'gif|jpg|png|doc|txt';
      $config['max_size']  = 1024 * 8;
      $config['encrypt_name'] = TRUE;
      $this->load->model('signup/signup_model');
 
      $this->load->library('upload', $config);
      
      if (!$this->upload->do_upload($file_element_name))
      {
         $status = 'error';
         $msg = $this->upload->display_errors('', '');
      }
      else
      {
         $data = $this->upload->data();

         $file_id = $this->signup_model->add_image($data['file_name']);
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
          $config['upload_path'] = './uploads/dp/';
          $config['allowed_types'] = 'gif|jpg|png|doc|txt';
          $config['max_size']  = 1024 * 8;
          $config['encrypt_name'] = TRUE;
     
          $this->load->library('upload', $config);
          $this->load->model('files_model');
     
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
      $this->load->model('files_model');
      $files = $this->files_model->get_files();
      $this->load->model('signup/signup_model');
      $img['filename'] = $files->filename;
      $file_id = $this->signup_model->add_image($img['filename']);
      $this->session->set_userdata('imgpath', $img['filename']);
      $this->load->view('dp', $img);
    }

};
?>