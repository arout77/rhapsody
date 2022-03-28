<?php
/* Smarty version 3.1.44, created on 2022-03-19 23:36:40
  from '/home2/arout77/public_html/rhapsody/public/template/default/views/error/controller.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_6236a148baef73_35041012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23eae123bf589a0e84cfe595365b8f351651aa51' => 
    array (
      0 => '/home2/arout77/public_html/rhapsody/public/template/default/views/error/controller.tpl',
      1 => 1646793077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6236a148baef73_35041012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/arout77/public_html/rhapsody/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<style media="screen">
	pre {
		background-color: #242424;
		color: lime;
		font-size: 16px;
		font-family: "Lucida Console", Monaco, monospace;
		padding: 10px;
	}
	h3 { color: #242424; background-color: lime; width: 25%; text-align: center; margin-left: auto; margin-right: auto; }
</style>


<pre>
<h3>DEBUG CONSOLE</h3>
>  <strong>MESSAGE: CONTROLLER NOT FOUND</strong>
>
>  How to fix this error: make sure that <span class="btn-danger"><?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
_Controller.php</span> exists in your Controllers directory:
> 
>  <?php echo (defined('CONTROLLERS_PATH') ? constant('CONTROLLERS_PATH') : null);?>

>
>  If the file already exists, ensure that the server has read permissions to the file. 
>  Also ensure that the class name matches the file name -- <?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
_Controller, 
>  as well as extends the core controller class:
>
   <strong><span style="color: #ff6666">&lt?php 
       namespace Web\Controller;
       use App\Controller\Base_Controller;
 
       class <?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
_Controller extends Base_Controller{}</span></strong>
>
>  Finally, ensure that the index() method exists within the <?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
 class. Each controller falls back
>  on the index() method as the default action.
>
>  View <a href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
documentation/mvc/controllers" style="color: #ff6666">the Controllers documentation</a> for more information.

</pre>

<div style="width: 40%; margin-left: auto; margin-right: auto;">
	&copy; <?php echo smarty_modifier_date_format(time(),"%G");?>
 DiamondPHP<br>
	DiamondPHP is an open source framework distributed under the M.I.T. license by Andrew Rout. The source code and other information may be obtained from the 
	<a href="https://github.com/arout77/diamondphp">GitHub repository</a>.
</div>
<?php }
}
