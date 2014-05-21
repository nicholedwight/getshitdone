<h2>Welcome Back, <?php echo $this->session->userdata('username'); ?>!</h2>
<div class="logout-button">
  <h4><?php echo anchor('login/logout', 'Logout'); ?></h4>
</div>
   <div class="categories">
    <h1>Your Lists</h1>
    <?php
    foreach ($categories as $category) {
    ?>
      <ul class="category-list">
        <li><a href="#">
          <?php echo $category->name; ?>
        </a></li>
      </ul>
    <?php
    }
    ?>
    <p><a href="#" class="icon-plus19"></a></p>
    <div id="new_category">
      <?php
      echo form_open('category_controller/input');
      echo form_label('Name', 'category_name');
      echo form_input('category_name', '');
      echo form_hidden('user_id', $this->session->userdata('user_id'));

      echo form_submit('submit', 'Submit');
      ?>
    </div>
 </div>

  <div class="list">
    <h2>List test</h2>
    <p><a href="#" class="add-icon">Add Item</a></p>
    <div id="new_list_item">
      <?php
      echo form_open('todo_controller/input');
      echo form_label('To do:', 'todo_name');
      echo form_input('todo_name', '');
      echo form_hidden('user_id', $this->session->userdata('user_id'));
      echo form_hidden('category_id', $category_id);

      echo form_submit('submit', 'Submit');
      ?>
    </div>
  </div>
