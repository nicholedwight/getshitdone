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
    $data['main_content'] = 'members_area';
    $this->load->view('includes/template', $data);

    // $this->load->library('form_validation');
    //   $this->form_validation->set_rules('name', 'Name', 'trim|required');
    //
    //   if($this->form_validation->run() == FALSE) {
    //     redirect('site/members_area');
    //     }
    //   else {
    //     $this->load->model('category');
    //   if($catquery = $this->category->create_category()) {
    //     $data['main_content'] = 'members_area';
    //     $this->load->view('includes/template', $data);
    //     }
    //   else {
    //     $this->load->view('members_area');
    //     }
    //   }

  }

}
?>
