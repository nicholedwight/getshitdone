<?php

class Todo extends CI_Model {

  function getListItems($user_id) {
    $this->db->where('name', $this->input->post('todo_name'));
    $listquery = $this->db->get_where('todo', array('user_id' => $user_id));
    return $listquery->result();
  }

  function getListItemsByUserIdAndCategory($user_id, $category_id) {
    $query_conditions = array(
      'user_id' => $user_id,
      'cat_id' => $category_id
    );
    $query = $this->db->where($query_conditions);
    return $query->result();
  }

  function getItemsByCategory($user_id) {
    $query = $this->db->get('todo');
    foreach ($query->result() as $row) {
      return $row->cat_id;
    }
    $array = array(
      'user_id' => $user_id,
      'cat_id' => $row->cat_id
    );
    $this->db->where($array);
  }

  function create_list_item() {
    $this->load->database();
    $name = $this->input->post('todo_name');
    $user_id = $this->input->post('user_id');
    $todo_item = array(
      'name' => $name,
      'user_id' => $user_id,
      'cat_id' => $this->input->post('list_categories')
    );
    $q = $this->db->insert('todo', $todo_item);
  }

}

?>
