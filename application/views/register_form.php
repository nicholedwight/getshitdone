<h1>Create an Account</h1>
<fieldset>
  <legend>Personal Information</legend>
  <?php
  echo form_open('login/create_member');
  echo form_label('First Name', 'first_name');
  echo form_input('first_name', set_value('first_name', 'First Name'));
  echo form_label('Last Name', 'last_name');
  echo form_input('last_name', set_value('last_name', 'Last Name'));
  echo form_label('Email', 'email_address');
  echo form_input('email_address', set_value('email_address', 'Email Address'));
  ?>
</fieldset>
<fieldset>
  <legend>Login Info</legend>
  <?php
  echo form_label('Username', 'username');
  echo form_input('username', set_value('username', 'Username'));
  echo form_label('Password', 'password');
  echo form_password('password', set_value('password', 'Password'));
  echo form_label('Confirm Password', 'password2');
  echo form_password('password2', set_value('password2', 'Password'));

  echo form_submit('submit', 'Create Account');
  ?>

  <?php echo validation_errors('<p class="error">'); ?>
</fieldset>
