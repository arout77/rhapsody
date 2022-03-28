<?php
/* Smarty version 3.1.44, created on 2022-03-20 04:42:13
  from '/home2/arout77/public_html/rhapsody/public/template/default/views/codegenie/controller.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_6236e8e51b06a5_01571416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed2a41c56e51c0a872e0d6c1a8b528ddb705ce33' => 
    array (
      0 => '/home2/arout77/public_html/rhapsody/public/template/default/views/codegenie/controller.tpl',
      1 => 1646793076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6236e8e51b06a5_01571416 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
<p></p>
<div class="info-bar info-bar-dark info-bar-bordered">
	<div class="container">

		<div class="row">

			<div class="col-sm-4">
				<i class="glyphicon glyphicon-flag"></i>
				<h3>CREATE CONTROLLER</h3>
				<p class="lime">All files generated for you</p>
			</div>

			<div class="col-sm-4">
				<i class="glyphicon glyphicon-hdd"></i>
				<h3>ADD A MODEL</h3>
				<p class="lime">Optional</p>
			</div>

			<div class="col-sm-4">
				<i class="glyphicon glyphicon-file"></i>
				<h3>VIEW FILES</h3>
				<p class="lime">Optional</p>
			</div>

		</div>

	</div>
</div>
<!-- /INFO BAR -->

<div>
  <form class="white-row" action="<?php echo $_smarty_tpl->tpl_vars['submit_controller']->value;?>
" method="post">
  <h2><small>Specify your controller and options to create</small></h2>
    <div class="row">
      <div class="form-group">
        <div class="col-md-12">
          <label>Controller Name (no underscores, spaces or special characters)</label>
          <input type="text" name="controller_name" placeholder="Name of Controller" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">

    <div class="col-md-4"> 
    <label for="create_model" class="switch switch-primary switch-round">
      <input type="checkbox" id="create_model" name="create_model" checked="checked">
      <span class="switch-label" data-on="YES" data-off="NO"></span>
      Generate a model for this controller?
    </label>
    </div>

    <div class="col-md-4"> 
    <label for="create_view" class="switch switch-primary switch-round">
      <input type="checkbox" id="create_view" name="create_view" checked="checked">
      <span class="switch-label" data-on="YES" data-off="NO"></span>
      Generate a view for this controller?
    </label>
    </div>

      <div class="col-md-4">
        <input type="submit" value="Generate Code" class="btn btn-primary pull-right" data-loading-text="Loading...">
      </div>
    </div>
  </form>
</div>
</div><?php }
}
