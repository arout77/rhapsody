<?php
/* Smarty version 3.1.44, created on 2022-03-25 00:43:41
  from '/home2/arout77/public_html/rhapsody/public/template/default/views/forms/login_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_623d487d28bd40_82483523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cdee414942818d9417e0faaff4089ae15e30e19' => 
    array (
      0 => '/home2/arout77/public_html/rhapsody/public/template/default/views/forms/login_form.tpl',
      1 => 1648183413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623d487d28bd40_82483523 (Smarty_Internal_Template $_smarty_tpl) {
?><body class="hold-transition login-page" style="background-image: url(<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/images/backgrounds/ab519334d4cb25dd5df881417eb473fb.jpg);
background-repeat: none; background-size: cover;">

<?php if (strstr($_smarty_tpl->tpl_vars['uri']->value,'login/index/verify')) {?>

<div class="alert alert-danger text-center"><h3>Account not verified</h3>
You have registered on our site, but have not confirmed your account yet. Please check your email inbox for instructions on verifying your account.</div>

<?php } elseif (strstr($_smarty_tpl->tpl_vars['uri']->value,'login/password_reset_complete')) {?>


<section class="">
  <div class="main" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
    <div class="form-block center-block">
      <form action="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
login/login_validate" id="client-login" method="post"> 
      <?php if ($_smarty_tpl->tpl_vars['route']->value == 'error_math') {?>
                        <div class="alert alert-danger text-center"><button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error: </strong>Math answer is incorrect</div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['route']->value == 'error') {?>
          <div class="alert alert-danger text-center"><button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Error: </strong>Email or password incorrect</div>

                      <?php }?>
        
<div class="login-box" style="width: 460px;">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
" class="h2 burnt-orange"><b>Password Successfully Reset</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
        <div class="input-group mb-3">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['login_math']->value) {?>
        <p>Are you human? Solve a math problem</p>
        <div class="input-group mb-3">  
          <div class="input-group-prepend">
            <div class="input-group-text">
              <strong><?php echo $_smarty_tpl->tpl_vars['a']->value;?>
 x <?php echo $_smarty_tpl->tpl_vars['b']->value;?>
 =</strong>
            </div>
          </div>
          <input type="number" name="math" class="form-control" placeholder="Enter answer" required=required>
        </div>
        <?php }?>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
         <input type="hidden" name="math_answer" value="<?php echo $_smarty_tpl->tpl_vars['a']->value*$_smarty_tpl->tpl_vars['b']->value;?>
">
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
signup" class="text-center">Register a new membership</a>
      </p>

            <div>
        <legend>Forgot Password?</legend>
        <div class="white-row">
          <p> Enter your email address below and follow the instructions to reset your password </p>
          <h6>Email Address</h6>
          <form class="input-group" method="post" action="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
login/forgot_password">
            <input type="text" class="form-control" name="email" id="email" placeholder="Email Address" required=required />
            <span class="input-group-btn"><button class="btn btn-primary" style="margin-top: 0px" type="submit">Reset Password</button></span>
          </form>
        </div>
      </div>
      </div>
    </div>
    <p class="text-center space-top">Don't have an account yet? <a href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
signup">Sign up</a> now.</p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->


    <!-- LOGIN -->


</section>

<?php } else { ?>
  
  <section class="">
  <div class="main" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
    <div class="form-block center-block">
      <form action="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
login/login_validate" id="client-login" method="post"> 
        
<div class="login-box" style="width: 460px;">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
" class="h2 burnt-orange"><b>Rhapsody Task Management</b></a>
    </div>
    <div class="card-body">
    <?php if ($_smarty_tpl->tpl_vars['route']->value == 'error_math') {?>
                        <div class="alert alert-danger text-center"><button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error: </strong>Math answer is incorrect</div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['route']->value == 'error') {?>
          <div class="alert alert-danger text-center"><button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Error: </strong>Email or password incorrect</div>
      <?php }?>
      <p class="login-box-msg">Sign in to start your session</p>
        <div class="input-group mb-3">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['login_math']->value) {?>
        <p>Are you human? Solve a math problem</p>
        <div class="input-group mb-3">  
          <div class="input-group-prepend">
            <div class="input-group-text">
              <strong><?php echo $_smarty_tpl->tpl_vars['a']->value;?>
 x <?php echo $_smarty_tpl->tpl_vars['b']->value;?>
 =</strong>
            </div>
          </div>
          <input type="number" name="math" class="form-control" placeholder="Enter answer" required=required>
        </div>
        <?php }?>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
         <input type="hidden" name="math_answer" value="<?php echo $_smarty_tpl->tpl_vars['a']->value*$_smarty_tpl->tpl_vars['b']->value;?>
">
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
signup" class="text-center">Register a new membership</a>
      </p>

            <div>
        <legend>Forgot Password?</legend>
        <div class="white-row">
          <p> Enter your email address below and follow the instructions to reset your password </p>
          <h6>Email Address</h6>
          <form class="input-group" method="post" action="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
login/forgot_password">
            <input type="text" class="form-control" name="email" id="email" placeholder="Email Address" required=required />
            <span class="input-group-btn"><button class="btn btn-primary" style="margin-top: 0px" type="submit">Reset Password</button></span>
          </form>
        </div>
      </div>
      </div>
    </div>
    <p class="text-center space-top">Don't have an account yet? <a href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
signup">Sign up</a> now.</p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->


    <!-- LOGIN -->


</section>

<?php }?>



<div class="modal fade" id="modal-error" role="dialog" aria-labelledby="myModalErrorLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header redvelvet">
        <h4 class="modal-title white" id="myModalErrorLabel"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body red" id="modal-error-message">
        
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<?php echo '<script'; ?>
>

$(document).ready(function() {
    $("#client-login").submit(function(event) {
      // First validate the form //
      $("#client-login").validate({
        errorPlacement: function(error, element) {
          // Append error within linked label
          /* 
            $( element )
        .closest( "form" )
          .find( "label[for='" + element.attr( "id" ) + "']" )
            .append( error );
            */
          $(document).Toasts('create', {
            class: 'bg-danger',
            title: 'There was a problem submitting the form',
            preventDuplicates: true,
            autohide: true,
            delay: 6000,
            body: error
          })
        },
        errorElement: "span",
        rules: {
          email: {
            email: true
          },
          password: {
            required: true,
            minlength: 6
          }
        },
        messages: {
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 6 characters long"
          },
          email: "Please enter a valid email address",
        }
        // form.submit();
      });
      // End form validation //
      var formData = {
        email: $("#email").val(),
        password: $("#password").val(),
      };
      $.ajax({
        type: "POST",
        url: "<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
login/login_validate",
        data: formData,
        dataType: "json",
        encode: true,
        success: function(data, response) {
          $(location).attr('href'," <?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
client/dashboard");
        },
        error: function (request, status, error) {
            $("#myModalErrorLabel").html("We ran into a problem");
            $("#modal-error-message").html(request.responseText);
            if(request.responseText.length >= 1){
                $("#modal-error").modal("show");
            }
            
        }

      });
      event.preventDefault();
    });
  }); 

<?php echo '</script'; ?>
><?php }
}
