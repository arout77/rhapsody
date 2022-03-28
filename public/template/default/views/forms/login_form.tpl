<body class="hold-transition login-page" style="background-image: url({$smarty.const.SITE_URL}media/images/backgrounds/ab519334d4cb25dd5df881417eb473fb.jpg);
background-repeat: none; background-size: cover;">

{if $uri|strstr:'login/index/verify'}

<div class="alert alert-danger text-center"><h3>Account not verified</h3>
You have registered on our site, but have not confirmed your account yet. Please check your email inbox for instructions on verifying your account.</div>

{elseif $uri|strstr:'login/password_reset_complete'}

{* Password reset form was submitted and successfully completed *}

<section class="">
  <div class="main" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
    <div class="form-block center-block">
      <form action="{$smarty.const.SITE_URL}login/login_validate" id="client-login" method="post"> 
      {if $route eq 'error_math'}
            {* Previous login attempt failed *}
            <div class="alert alert-danger text-center"><button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error: </strong>Math answer is incorrect</div>
      {/if}

      {if $route eq 'error'}
          <div class="alert alert-danger text-center"><button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Error: </strong>Email or password incorrect</div>

              {*
                 Since the login attempt failed, we want to protect ourselves against brute force hacking attempts.
                 We don't want to annoy users with CAPTCHA forms, and we don't want to resort to locking members out or
                 not letting them attempt to login again for X-amount of time either, which not only also annoys users, but also
                 uses up system resources.
                 The best solution for protecting ourselves while keeping our users happy is to simply delay the execution of the script
                 when a failed login attempt occurs. By delaying the processing of the request, the time it takes to successfully
                 crack an account is enormous and unattainable for all intents and purposes.
                 We don't want to delay the processing too long either, else the user may get frustrated with high page load times.
                 We can modify how long this delay occurs in the sleep() function below. The value of the number is in seconds, so by
                 default we delay failed login attempts for 2 seconds. The higher we set this number, the more secure we are, however,
                 it also means the user has to wait that much longer for the page to reload. Keep in mind that a delay of just 10 milliseconds
                 greatly lengthens any brute force or dictionary attack. A value of 2 seconds should be a good compromise, as it gives
                 terrific protection while being practically unnoticeable to users, but any value between 1 - 5 should be reasonable.
                 Any more than that starts using up resources, as well as annoying people!
               *}
        {/if}
        
<div class="login-box" style="width: 460px;">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{$smarty.const.SITE_URL}" class="h2 burnt-orange"><b>Password Successfully Reset</b></a>
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
        {if $login_math}
        <p>Are you human? Solve a math problem</p>
        <div class="input-group mb-3">  
          <div class="input-group-prepend">
            <div class="input-group-text">
              <strong>{$a} x {$b} =</strong>
            </div>
          </div>
          <input type="number" name="math" class="form-control" placeholder="Enter answer" required=required>
        </div>
        {/if}
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
         <input type="hidden" name="math_answer" value="{$a * $b}">
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="{$smarty.const.SITE_URL}signup" class="text-center">Register a new membership</a>
      </p>

            <div>
        <legend>Forgot Password?</legend>
        <div class="white-row">
          <p> Enter your email address below and follow the instructions to reset your password </p>
          <h6>Email Address</h6>
          <form class="input-group" method="post" action="{$smarty.const.SITE_URL}login/forgot_password">
            <input type="text" class="form-control" name="email" id="email" placeholder="Email Address" required=required />
            <span class="input-group-btn"><button class="btn btn-primary" style="margin-top: 0px" type="submit">Reset Password</button></span>
          </form>
        </div>
      </div>
      </div>
    </div>
    <p class="text-center space-top">Don't have an account yet? <a href="{$smarty.const.SITE_URL}signup">Sign up</a> now.</p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->


    <!-- LOGIN -->


</section>

{else}
  
  <section class="">
  <div class="main" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
    <div class="form-block center-block">
      <form action="{$smarty.const.SITE_URL}login/login_validate" id="client-login" method="post"> 
        
<div class="login-box" style="width: 460px;">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{$smarty.const.SITE_URL}" class="h2 burnt-orange"><b>Rhapsody Task Management</b></a>
    </div>
    <div class="card-body">
    {if $route eq 'error_math'}
            {* Previous login attempt failed *}
            <div class="alert alert-danger text-center"><button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error: </strong>Math answer is incorrect</div>
      {/if}

      {if $route eq 'error'}
          <div class="alert alert-danger text-center"><button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Error: </strong>Email or password incorrect</div>
      {/if}
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
        {if $login_math}
        <p>Are you human? Solve a math problem</p>
        <div class="input-group mb-3">  
          <div class="input-group-prepend">
            <div class="input-group-text">
              <strong>{$a} x {$b} =</strong>
            </div>
          </div>
          <input type="number" name="math" class="form-control" placeholder="Enter answer" required=required>
        </div>
        {/if}
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
         <input type="hidden" name="math_answer" value="{$a * $b}">
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="{$smarty.const.SITE_URL}signup" class="text-center">Register a new membership</a>
      </p>

            <div>
        <legend>Forgot Password?</legend>
        <div class="white-row">
          <p> Enter your email address below and follow the instructions to reset your password </p>
          <h6>Email Address</h6>
          <form class="input-group" method="post" action="{$smarty.const.SITE_URL}login/forgot_password">
            <input type="text" class="form-control" name="email" id="email" placeholder="Email Address" required=required />
            <span class="input-group-btn"><button class="btn btn-primary" style="margin-top: 0px" type="submit">Reset Password</button></span>
          </form>
        </div>
      </div>
      </div>
    </div>
    <p class="text-center space-top">Don't have an account yet? <a href="{$smarty.const.SITE_URL}signup">Sign up</a> now.</p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->


    <!-- LOGIN -->


</section>

{/if}



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

<script>

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
        url: "{$smarty.const.SITE_URL}login/login_validate",
        data: formData,
        dataType: "json",
        encode: true,
        success: function(data, response) {
          $(location).attr('href'," {$smarty.const.SITE_URL}client/dashboard");
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

</script>