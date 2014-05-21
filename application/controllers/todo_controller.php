<?php

class Todo_Controller extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('category');
    $this->load->model('todo');
    $this->load->model('membership_model');
  }

  function input() {
    $this->load->helper('form');
    $this->load->model('todo');
    if ($this->input->post('submit')) {
      $this->todo->create_list_item();
    }
    redirect('site/members_area');
  }

  function todo_category($id) {
    $data['main_content'] = 'todo_category';
    $data['user_id'] = membership_model::get_userID($this->session->userdata('username'));
    $data['category_id'] = $this->uri->segment(3);
    $data['todos'] = todo::getListItemsByUserIdAndCategory($data['user_id'], $data['category_id']);

    $data['categories'] = $this->category->getCategory($data['user_id']); //fix
    $data['list_items'] = todo::getListItems($data['user_id']);
    $this->load->view('includes/template', $data);
  }

}
?>
