<?php

class Site extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->is_logged_in();

    $this->load->model('category');
    $this->load->model('membership_model');
    $this->load->model('todo');
  }

  function members_area() {
    $data['main_content'] = 'members_area';
    $data['user_id'] = membership_model::get_userID($this->session->userdata('username'));
    $data['categories'] = $this->category->getCategory($data['user_id']);
    $data['list_items'] = $this->todo->getListItems($data['user_id']);
    $data['cat_id'] = $this->todo->getItemsByCategory();
    $this->load->view('includes/template', $data);
  }

  function is_logged_in() {
    $is_logged_in = $this->session->userdata('is_logged_in');

    if(!isset($is_logged_in) || $is_logged_in != true) {
      echo 'You don\'t have permission to access this page. <a href="../login">Login</a>';
      $this->load->view('login_form');
    }
  }

  




}
?>
