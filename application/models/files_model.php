<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Files_Model extends CI_Model {
 
   public function insert_file($filename)
   {
      $this->db->empty_table('files');
      $data = array(
         'filename'     => $filename
      );
      $this->db->insert('files', $data);
      return $this->db->insert_id();
   }

   public function get_files(){

      return $this->db->select()
            ->from('files')
            ->get()
            ->row();
   }
 
};

?>