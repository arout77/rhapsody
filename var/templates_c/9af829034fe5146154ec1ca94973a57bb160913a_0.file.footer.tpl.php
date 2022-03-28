<?php
/* Smarty version 3.1.44, created on 2022-03-27 19:37:28
  from '/home2/arout77/public_html/rhapsody/public/template/default/views/template/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_6240f5380af392_21695045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9af829034fe5146154ec1ca94973a57bb160913a' => 
    array (
      0 => '/home2/arout77/public_html/rhapsody/public/template/default/views/template/footer.tpl',
      1 => 1648424243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6240f5380af392_21695045 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/arout77/public_html/rhapsody/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <a href="https://diamondphp.org">Powered by DiamondPHP</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery UI 1.11.4 -->
<?php echo '<script'; ?>
 src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"><?php echo '</script'; ?>
>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<?php echo '<script'; ?>
>
  $.widget.bridge('uibutton', $.ui.button)
<?php echo '</script'; ?>
>
<!-- Bootstrap 4 -->
<?php echo '<script'; ?>
 src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<!-- ChartJS -->
<?php echo '<script'; ?>
 src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/chart.js/Chart.min.js"><?php echo '</script'; ?>
>
<!-- Sparkline -->
<?php echo '<script'; ?>
 src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/sparklines/sparkline.js"><?php echo '</script'; ?>
>
<!-- JQVMap -->
<?php echo '<script'; ?>
 src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/jqvmap/jquery.vmap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/jqvmap/maps/jquery.vmap.usa.js"><?php echo '</script'; ?>
>
<!-- jQuery Knob Chart -->
<?php echo '<script'; ?>
 src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/jquery-knob/jquery.knob.min.js"><?php echo '</script'; ?>
>
<!-- daterangepicker -->
<?php echo '<script'; ?>
 src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/moment/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
<!-- Tempusdominus Bootstrap 4 -->
<?php echo '<script'; ?>
 src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"><?php echo '</script'; ?>
>
<!-- Summernote -->
<?php echo '<script'; ?>
 src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/summernote/summernote-bs4.min.js"><?php echo '</script'; ?>
>
<!-- overlayScrollbars -->
<?php echo '<script'; ?>
 src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/dist/js/adminlte.js"><?php echo '</script'; ?>
>
<!-- AdminLTE for demo purposes -->
<?php echo '<script'; ?>
 src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/dist/js/demo.js"><?php echo '</script'; ?>
>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?php echo '<script'; ?>
 src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/dist/js/pages/dashboard.js"><?php echo '</script'; ?>
>

<?php if ($_SESSION['email'] != '') {?>
  <?php if ($_smarty_tpl->tpl_vars['param1']->value != 'lock' && $_smarty_tpl->tpl_vars['action']->value != 'lock') {?>
    <?php echo '<script'; ?>
 type="text/javascript">
      var idleTime = 0;
      $(document).ready(function () {
          // Increment the idle time counter every minute.
          var idleInterval = setInterval(timerIncrement, 60000); // 1 minute

          // Zero the idle timer on mouse movement.
          $(this).mousemove(function (e) {
              idleTime = 0;
          });
          $("#continuesession").click(function (e) {
              idleTime = 0;
          });
      });

      function timerIncrement() {
          idleTime = idleTime + 1;
          if (idleTime > 13) { // 14 minutes
              $("#session").modal("show");
          }
          if (idleTime > 14) { // 15 minutes
              <?php if ($_SESSION['permissions'] == 'client') {?>
                window.location.replace( "<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
login/lock" );
              <?php } else { ?>
                window.location.replace( "<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
employees/login/lock" );
              <?php }?>
          }
      }
  <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
    var idleInterval = setInterval(updateOnline, 300000); // 5 minutes

    function updateOnline() {

      let email = "<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
";
      $.ajax({
        type: "POST",
        url: "<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
block/updateonline",
        data: {
          email: email,
        },
        dataType: "json",
        encode: true,
        success: function(data, response) {
          // $(location).attr('href'," <?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
employees/");
          // $(location).attr('href'," <?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
employees/dashboard");
        },
        error: function (request, status, error) {
            // alert(request.responseText);
            // $("#myModalErrorLabel").html("We ran into a problem");
            // $("#modal-error-message").html(request.responseText);
            // $("#modal-error").modal("show");
        }

      });
    }

  <?php echo '</script'; ?>
>
  <?php }
}
}
}
