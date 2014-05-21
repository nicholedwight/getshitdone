<?php

class Todo_Controller extends CI_Controller {

  function __construct() {
    parent::__construct();

  }


  function input() {
    $this->load->helper('form');
    $this->load->model('todo');
    if ($this->input->post('submit')) {
      $this->todo->create_list_item();
    }
    redirect('site/members_area');
  }

}
?>
