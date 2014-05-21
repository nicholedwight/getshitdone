<?php

class Todo extends CI_Model {

  function getListItems($user_id) {
    $this->db->where('name', $this->input->post('todo_name'));
    $listquery = $this->db->get_where('todo', array('user_id' => $user_id));
    return $listquery->result();
  }

  function create_list_item() {
    $this->load->database();
    $name = $this->input->post('todo_name');
    $user_id = $this->input->post('user_id');
    $todo_item = array(
      'name' => $name,
      'user_id' => $user_id
    );
    $q = $this->db->insert('todo', $todo_item);
  }

}

?>
