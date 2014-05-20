<?php

class Category extends CI_Model {

    function getCategory() {
      $this->db->where('name', $this->input->post('category_name'));
      $catquery = $this->db->get('categories');

      if($query->num_rows == 1) {
        return true;
      }
    }

    function create_category() {
      $this->load->database();
      $name = $this->input->post('category_name');
      $user_id = $this->input->post('user_id');
      // die(var_dump($this->input->post('category_name')));
      $category = array(
        'name' => $name,
        'user_id' => $user_id
      );
      $this->db->insert('categories', $category);
    }

    

}

?>
