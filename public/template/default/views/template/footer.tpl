  <footer class="main-footer">
    <strong>Copyright &copy; {$smarty.now|date_format:"%Y"} <a href="https://diamondphp.org">Powered by DiamondPHP</a>.</strong>
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
<script src="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/moment/moment.min.js"></script>
<script src="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{$smarty.const.SITE_URL}media/{$_template_name}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{$smarty.const.SITE_URL}media/{$_template_name}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{$smarty.const.SITE_URL}media/{$_template_name}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{$smarty.const.SITE_URL}media/{$_template_name}/dist/js/pages/dashboard.js"></script>

{if $smarty.session.email neq ''}
  {if $param1 neq 'lock' && $action neq 'lock'}
  {* Detect keypress and mousemovement events to determine if user is idle/away from keyboard. 
  End session if no activity for more than 15 minutes *}
  <script type="text/javascript">
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
              {if $smarty.session.permissions eq 'client'}
                window.location.replace( "{$smarty.const.SITE_URL}login/lock" );
              {else}
                window.location.replace( "{$smarty.const.SITE_URL}employees/login/lock" );
              {/if}
          }
      }
  </script>

  {* Update online users last_ping *}
  <script>
    var idleInterval = setInterval(updateOnline, 300000); // 5 minutes

    function updateOnline() {

      let email = "{$email}";
      $.ajax({
        type: "POST",
        url: "{$smarty.const.SITE_URL}block/updateonline",
        data: {
          email: email,
        },
        dataType: "json",
        encode: true,
        success: function(data, response) {
          // $(location).attr('href'," {$smarty.const.SITE_URL}employees/");
          // $(location).attr('href'," {$smarty.const.SITE_URL}employees/dashboard");
        },
        error: function (request, status, error) {
            // alert(request.responseText);
            // $("#myModalErrorLabel").html("We ran into a problem");
            // $("#modal-error-message").html(request.responseText);
            // $("#modal-error").modal("show");
        }

      });
    }

  </script>
  {/if}
{/if}