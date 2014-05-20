<h2>Welcome Back, <?php echo $this->session->userdata('username'); ?>!</h2>
<div class="logout-button">
  <h4><?php echo anchor('login/logout', 'Logout'); ?></h4>
</div>
   <div class="categories">
    <h2>TEST</h2>
    <p><a id="new-cat-button" href="#">New Category</a></p>
    <div id="new_category">
      <?php
      echo form_open('category_controller/input');
      echo form_label('Name', 'category_name');
      echo form_input('category_name', '');
      echo form_hidden('user_id', '$this->session->userdata("user_id")')

      echo form_submit('submit', 'Submit');
      ?>
    </div>
 </div>

  <div class="list">
    <h2>List test</h2>
  </div>
