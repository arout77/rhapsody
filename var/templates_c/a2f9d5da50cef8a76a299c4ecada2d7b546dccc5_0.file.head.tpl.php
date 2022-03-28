<?php
/* Smarty version 3.1.44, created on 2022-03-27 19:38:24
  from '/home2/arout77/public_html/rhapsody/public/template/default/views/template/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_6240f5709d85d6_81040521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2f9d5da50cef8a76a299c4ecada2d7b546dccc5' => 
    array (
      0 => '/home2/arout77/public_html/rhapsody/public/template/default/views/template/head.tpl',
      1 => 1648424294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6240f5709d85d6_81040521 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
	<meta charset="utf-8">
	<title>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10676962476240f5709b15f4_07997466', 'title');
?>

	</title>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12103347606240f5709c68b4_70013413', 'head');
?>

</head><?php }
/* {block 'title'} */
class Block_10676962476240f5709b15f4_07997466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10676962476240f5709b15f4_07997466',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php } else { ?> DiamondPHP | Framework for PHP 8+ <?php }?>
		<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_12103347606240f5709c68b4_70013413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_12103347606240f5709c68b4_70013413',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<meta name="author" content="Andrew Rout">
	<meta name="description" content="DiamondPHP | Framework for PHP 8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/summernote/summernote-bs4.min.css">
	<link href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/dist/css/custom.css" rel="stylesheet">
	<!-- jQuery -->
	<?php echo '<script'; ?>
 src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
	<!-- Vuejs -->
	<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://unpkg.com/axios/dist/axios.min.js"><?php echo '</script'; ?>
>
	<!-- Image uploader -->
	<!-- Documentation:  https://docs.dropzone.dev/getting-started/installation/stand-alone -->
	<?php echo '<script'; ?>
 src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
	<?php
}
}
/* {/block 'head'} */
}
