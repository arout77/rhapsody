<?php
/* Smarty version 3.1.44, created on 2022-03-28 10:46:23
  from '/home2/arout77/public_html/rhapsody/public/template/default/views/template/body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_6241ca3f264024_66491383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a58cf5e19211464a9425764806876c4e3332600' => 
    array (
      0 => '/home2/arout77/public_html/rhapsody/public/template/default/views/template/body.tpl',
      1 => 1648478726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/head.tpl' => 1,
    'file:template/employee_menu.tpl' => 1,
    'file:template/client_menu.tpl' => 1,
    'file:template/footer.tpl' => 1,
  ),
),false)) {
function content_6241ca3f264024_66491383 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:template/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['_controller']->value != 'login' && $_smarty_tpl->tpl_vars['_controller']->value != 'signup' && $_smarty_tpl->tpl_vars['_action']->value != 'login') {?>
	<body class="hold-transition sidebar-mini layout-fixed">
		<div class="wrapper">

		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__shake" src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/images/logo-lg.png" alt="Rhapsody" height="240" width="240">
		</div>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19471737616241ca3f2525b2_05808095', 'body');
?>


	<?php } else { ?>

	<!-- Preloader -->
	<div class="preloader flex-column justify-content-center align-items-center">
		<img class="animation__shake" src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/images/logo-lg.png" alt="Rhapsody" height="240" width="240">
	</div>

	<style>
	.main-footer {
		margin-left: 0px;
		background-color: transparent;
		border-top: none;
	}
	body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .content-wrapper, body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-footer, body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-header 
	{
		margin-left: 0px;
	}
	</style>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, 'tpl');
$_smarty_tpl->tpl_vars['tpl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tpl']->value) {
$_smarty_tpl->tpl_vars['tpl']->do_else = false;
?>
		<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }?>

	<?php $_smarty_tpl->_subTemplateRender("file:template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
/* {block 'body'} */
class Block_19471737616241ca3f2525b2_05808095 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19471737616241ca3f2525b2_05808095',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
	<?php if ($_SESSION['permissions'] == 'admin' || $_SESSION['permissions'] == 'employee') {?>
		<?php $_smarty_tpl->_subTemplateRender("file:template/employee_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender("file:template/client_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Dashboard</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active">Dashboard v1</li>
				</ol>
			</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<section class="content">
		<div class="container-fluid">

		<div class="modal fade" id="session" role="dialog" aria-labelledby="sessionLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header alert-warning-light">
				<h4 class="modal-title" id="sessionLabel">Your Session Is About To Expire</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body" id="session-message">
				We haven't detected any activity for a while, so for your security, you will be logged out of 
				the system automatically.
				<?php echo '<script'; ?>
>
				var timeleft = 120;
				var downloadTimer = setInterval(function(){
					if(timeleft <= 0){
					clearInterval(downloadTimer);
					document.getElementById("countdown").innerHTML = "[ Logging out... ]";
					} else {
					document.getElementById("countdown").innerHTML = "[ Logging out in " + timeleft + " seconds ]";
					}
					timeleft -= 1;
				}, 1000);
				<?php echo '</script'; ?>
>
				<p>To stay logged in, click the button below. Do nothing if you wish to let the system log you out automatically in a moment.</p>
			</div>
			<div class="modal-footer">
				<button type="button" id="continuesession" class="btn btn-block btn-warning" data-dismiss="modal">
					Continue Session <span style="float: right;" id="countdown"></span>
				</button>
			</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
		</div>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, 'tpl');
$_smarty_tpl->tpl_vars['tpl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tpl']->value) {
$_smarty_tpl->tpl_vars['tpl']->do_else = false;
?>
			<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		</div>
		</section>
		<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

	<?php
}
}
/* {/block 'body'} */
}
