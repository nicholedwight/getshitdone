<?php

class Category_Controller extends CI_Controller {

  function __construct() {
    parent::__construct();

  }


  function input() {
    $this->load->helper('form');
    $this->load->model('category');
    if ($this->input->post('submit')) {
      $this->category->create_category();
    }
    redirect('site/members_area');
  }

}
?>
