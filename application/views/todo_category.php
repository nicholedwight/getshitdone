<h2 id="welcome-heading">Get Shit Done, <?php echo $this->session->userdata('username'); ?>!</h2>
<div class="logout-button">
  <h4><?php echo anchor('login/logout', 'Logout'); ?></h4>
</div>
   <div class="categories">
    <h1>Your Lists</h1>
      <ul class="category-list">
        <li><?php echo anchor('site/members_area', 'All'); ?></li>
    <?php
    foreach ($categories as $category) {
    ?>
        <li>
          <?php echo anchor('todo_controller/todo_category/' . $category->id, $category->name); ?>
        </li>
    <?php
    }
    ?>
      </ul>
    <p><a href="#" class="icon-plus19"></a></p>
    <div id="new_category">
      <?php
      echo form_open('category_controller/input');
      echo form_label('Name', 'category_name');
      echo form_input('category_name', '');
      echo form_hidden('user_id', $this->session->userdata('user_id'));

      echo form_submit('submit', 'Submit');
      echo form_close('');
      ?>
    </div>
 </div>

  <div class="list">
    <h2>List test</h2>
    <?php
    echo $category_id;
    foreach ($cat_id as $cat_item) {
    ?>
      <ul>
        <li><?php echo $cat_item->name; ?></li>
      </ul>
    <?php
    }
    ?>
    <p><a href="#" class="add-icon">+ Add Item</a></p>
    <div id="new_list_item">
      <?php
      echo form_open('todo_controller/input');
      echo form_label('To do:', 'todo_name');
      echo form_input('todo_name', '');
      echo form_hidden('user_id', $this->session->userdata('user_id'));
      $cats = [];

      foreach($categories as $category) {
        $cats[$category->id] = $category->name;
      }

      echo form_dropdown('list_categories', $cats);
      echo form_submit('submit', 'Submit');
      echo form_close('');
      ?>
    </div>
  </div>