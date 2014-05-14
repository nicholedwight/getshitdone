<h1>Create an Account</h1>
<form class="register">
  <h3>Personal Information</h3>
  <?php
  echo form_open('login/create_member');
  echo form_label('First Name', 'first_name');
  echo form_input('first_name', set_value('first_name', ''));
  echo form_label('Last Name', 'last_name');
  echo form_input('last_name', set_value('last_name', ''));
  echo form_label('Email', 'email_address');
  echo form_input('email_address', set_value('email_address', ''));
  ?>
  <h3>Login Info</h3>
  <?php
  echo form_label('Username', 'username');
  echo form_input('username', set_value('username', ''));
  echo form_label('Password', 'password');
  echo form_password('password', set_value('password', ''));
  echo form_label('Confirm Password', 'password2');
  echo form_password('password2', set_value('password2', ''));

  echo form_submit('submit', 'Create Account');
  ?>

  <?php echo validation_errors('<p class="error">'); ?>
</form>

<div id="login-register-redirect">
  <p>Already have an account?<a href="login/login">Login</a></p>
</div>
