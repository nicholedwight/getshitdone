<div id="login_form">
  <h1>Login, Fool!</h1>
  <?php
  echo form_open('login/validate_credentials');
  echo form_label('Username', 'username');
  echo form_input('username', '');
  echo form_label('Password', 'password');
  echo form_password('password', '');
  echo form_submit('submit', 'Login');
  echo anchor('login/register', 'Create Account');

  ?>
</div>
