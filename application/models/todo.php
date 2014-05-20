<?php

class Todo extends CI_Model {
  
  function create_todo() {
    $todo_item = array(
      'name' => $this->input->post('todo-name'),
      'user_id' => $this->input->post('user_id');
      'cat_id' => $this->input->post('category');
    );

    $insert = $this->db->insert('todo', $todo_item);
    return $insert;
  }

}

?>
