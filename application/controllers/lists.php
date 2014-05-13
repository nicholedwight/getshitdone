<?php

class Lists extends CI_Controller {

  public function work() {
    $this->load->view('templates/header');
    $this->load->view('work');
    $this->load->view('templates/footer');
  }

  public function workCreate() {

    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Create a Work item';


    $this->form_validation->set_rules('text', 'text', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('work_create');
      $this->load->view('templates/footer');
    }

    else {     $this->news_model->set_news();
      redirect('home_view', 'refresh');
    }
  }

  public function school() {
    $this->load->view('templates/header');
    $this->load->view('school');
    $this->load->view('templates/footer');
  }

  public function groceries() {
    $this->load->view('templates/header');
    $this->load->view('groceries');
    $this->load->view('templates/footer');
  }


}
