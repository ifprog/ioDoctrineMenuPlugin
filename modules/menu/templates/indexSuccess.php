<div id="sf_admin_container" class="clearfix">

  <h1 class="admin-title">Menus</h1>

  <div id="sf_admin_content">
    <div id="sf_admin_actions_container">
      <ul class="sf_admin_actions">
        <li class="sf_admin_action_new"><?php echo link_to('New', 'menu/new') ?></li>
      </ul>

      <?php include_partial('menu/list', array('name' => $name)) ?>
    </div>

  </div>
</div>