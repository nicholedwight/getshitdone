<?php

class Category extends CI_Model {

    function getCategory($user_id) {
      $this->db->where('name', $this->input->post('category_name'));
      $catquery = $this->db->get_where('categories', array('user_id' => $user_id));
      return $catquery->result();
    }

    function create_category() {
      $this->load->database();
      $name = $this->input->post('category_name');
      $user_id = $this->input->post('user_id');
      $category = array(
        'name' => $name,
        'user_id' => $user_id
      );
      $this->db->insert('categories', $category);
    }

    function delete_category($category_id) {
      $this->load->database();
      $category = array(
        'id' => $category_id
      );
      $this->db->delete('categories', $category);
    }

}

?>
