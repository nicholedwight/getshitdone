<?php

class Login extends CI_Controller {
  function index() {
    $data['main_content'] = 'login_form';
    $this->load->view('includes/template', $data);
  }

  function validate_credentials() {
    $this->load->model('membership_model');
    $query = $this->membership_model->validate();

    if($query) {
      $user_id = $this->membership_model->get_userID($this->input->post('username'));
      $data = array(
        'username' => $this->input->post('username'),
        'is_logged_in' => true,
        'user_id' => $user_id
      );

      $this->session->set_userdata($data);
      redirect('site/members_area');
    }

    else {
      $this->index();
    }
  }

  function register() {
    $data['main_content'] = 'register_form';
    $this->load->view('includes/template', $data);
  }

  function create_member() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('first_name', 'Name', 'trim|required');
    $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
    $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');

    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
    $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');

    if($this->form_validation->run() == FALSE) {
      $this->register();
    }
    else {
      $this->load->model('membership_model');
      if($query = $this->membership_model->create_member()) {
        $data['main_content'] = 'register_successful';
        $this->load->view('includes/template', $data);
      }
      else {
        $this->load->view('register_form');
      }
    }
  }

  function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}

}
?>
