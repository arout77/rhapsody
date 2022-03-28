<?php
/* Smarty version 3.1.44, created on 2022-03-25 14:27:49
  from '/home2/arout77/public_html/rhapsody/public/template/default/views/forms/signup_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_623e09a50c12a8_65443715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28e34924c5642fdb8b82056391fbc017982febb4' => 
    array (
      0 => '/home2/arout77/public_html/rhapsody/public/template/default/views/forms/signup_form.tpl',
      1 => 1648232864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623e09a50c12a8_65443715 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
label { font-weight: bold; }
.signup label span.error { color: red; }
.error {
    margin-left: 20px;
    font-size: 15px;
        font-weight: normal;
}

.register-box {
  width: 460px;
}

#email_availability_result {
    color: red;
}

.modal-header {
    border-bottom: 1px solid #c9cbcd !important;
}

.modal-footer {
    border-top: 1px solid #bbbbbb !important;
}
</style>

<body class="hold-transition register-page" 
style="background-image: url(<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/images/backgrounds/ab519334d4cb25dd5df881417eb473fb.jpg);
background-repeat: none; background-size: cover;">
<div class="register-box" id="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
" class="doodoo-brown"><span class="h2">Rhapsody<br> <small class="h3">Support Portal</small></span></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Create new account</p>
      <p><div id="email_availability_result"></div></p>

      <form id="signup" method="post">
        <div class="input-group mb-3">
          <input type="text" name="name" id="name" class="form-control" placeholder="First and last name">
          <div class="input-group-append">
            <div class="input-group-text bg-doodoo-brown">
              <span class="fas fa-user burnt-orange"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text bg-doodoo-brown">
              <span class="fas fa-envelope burnt-orange"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text bg-doodoo-brown">
              <span class="fas fa-lock burnt-orange"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text bg-doodoo-brown">
              <span class="fas fa-lock burnt-orange"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input list="companies" name="company" id="company" class="form-control" placeholder="Company/Website Name">
          
          <div class="input-group-append">
            <div class="input-group-text bg-doodoo-brown">
              <span class="far fa-copyright burnt-orange"></span>
            </div>
          </div>
          <datalist id="companies"></datalist>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="companyid" id="companyid" class="form-control" placeholder="Company ID">
          <div class="input-group-append">
            <div class="input-group-text bg-doodoo-brown">
              <span class="fas fa-hashtag burnt-orange"></span>
            </div>
          </div>
        </div>
        <div style="margin-top: -13px; margin-bottom: 20px;" class="text-center"><span>If you already have a company ID, enter it now</span></div>
        <hr>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
login" class="text-center">I already have an account</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->


<div class="modal fade" id="modal-success" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header lemonlime">
        <h4 class="modal-title" id="myModalLabel">Registration Complete</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Before you can login to your account, please check your email and click on the "Verify" button.</p>
        <p>Once you have verified your email address, you may begin submitting support tickets, view progress on 
        existing tickets, message the development team and enjoy many other features as well!</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" id="close-success" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-error" role="dialog" aria-labelledby="myModalErrorLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header redvelvet">
        <h4 class="modal-title white" id="myModalErrorLabel"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body" id="modal-error-message">
        
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
 type = "text/javascript"> 
$(document).ready(function() {}); 
<?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
> 
$(document).ready(function() {
  var min_chars = 6;
  //result texts  
  var characters_error = '';
  var checking_html = 'Checking email...';
  //when button is clicked  
  $('#email').change(function() {
    //run the character number check  
    if($('#email').val().length < min_chars) {
      //if it's below the minimum show characters_error text '  
      $('#email_availability_result').html(characters_error);
    } else {
      //else show the checking_text and run the function to check  
      $('#email_availability_result').html(checking_html);
      check_email_availability();
    }
  });
});
//function to check email availability  
function check_email_availability() {
  //get the email  
  var email = $('#email').val();
  //use ajax to run the check  
  $.post(" <?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
block/check_email/", {
    email: email
  }, function(result) {
    //if the result is 0
    if(result == 0) {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: email + ' is available',
        preventDuplicates: true,
        autohide: true,
        delay: 5750,
        body: 'You may continue registration with this email address'
      })
      $('#email_availability_result').html('');
      //$('#email_availability_result').removeClass("btn btn-danger btn-sm").addClass("btn btn-success btn-sm").html(email + ' is available');  
      $(':input[type="submit"]').prop('disabled', false);
    } else {
      $(document).Toasts('create', {
        class: 'bg-danger',
        title: 'Email address not available',
        preventDuplicates: true,
        autohide: true,
        delay: 8000,
        body: 'This email address is already in use. <br>Forgot your login information? <a class="yellow" href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
login/password_reset">Click here</a> to reset your password.'
      })
      $('#email_availability_result').html('');
      //$('#email_availability_result').removeClass("btn btn-success btn-sm").addClass("btn btn-danger btn-sm").html(email + ' is already registered. <br>Please <a style="color:yellow" href=" <?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
login">reset your password</a> if you have forgotten it.');  
      $(':input[type="submit"]').prop('disabled', true);
    }
  });
}
$(document).ready(function() {
  $("#company").keyup(function() {
    var company = $(this).val();
    $.ajax({
      url: " <?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
block/check_company/",
      type: "post",
      data: {
        company: $(this).val()
      },
      success: function(response) {
        function appends(element) {
          // appends company name and value to the datalist input.
          // First checks to make sure it hasn't already been added
          // to avoid duplicates
          var optionExists = ($('#companies option[value="' + element + '"]').length > 0);
          if(!optionExists) {
            $('<option/>').val(element).text(element).appendTo('#companies');
          }
        }
        // Loop through response and append each company to datalist
        let arr = JSON.parse(response);
        arr.forEach(element => appends(element));
      }
    });
  });
}); 
<?php echo '</script'; ?>
> 

<?php echo '<script'; ?>
>
  // Submit signup form
  $(document).ready(function() {
    $("#signup").submit(function(event) {
      // First validate the form //
      $("#signup").validate({
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
          name: {
            required: true,
            minlength: 6,
            maxlength: 60
          },
          email: {
            required: true,
            email: true
          },
          password: {
            required: true,
            minlength: 6
          },
          cpassword: {
            required: true,
            equalTo: "#password"
          },
          company: {
            required: true
          }
        },
        messages: {
          name: "Please enter your name",
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 6 characters long"
          },
          cpassword: {
            required: "Please re-enter your password",
            equalTo: "Password confirmation does not match given password"
          },
          email: "Please enter a valid email address",
          company: {
            required: "Company is required. If this is not applicable, you may use your website name, without the domain extension (.com, .org, etc)."
          },
        }
        // form.submit();
      });
      // End form validation //
      
      var formData = {
        name: $("#name").val(),
        email: $("#email").val(),
        password: $("#password").val(),
        cpassword: $("#cpassword").val(),
        company: $("#company").val(),
        companyid: $("#companyid").val()
      };
      $.ajax({
        type: "POST",
        url: "<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
signup/submit",
        data: formData,
        dataType: "json",
        encode: true,
        success: function(data, response) {
          // $("#register-box").hide();
          $("#myModalLabel").html("Registration Complete");
            $("#modal-body").html(response);
            $("#modal-success").modal("show");
            $("#register-box").hide();
            $("#close-success").click(function() {
              $(location).attr('href'," <?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
signup/complete");
            });
        },
        error: function (request, status, error) {
            // alert(request.responseText);
            $("#myModalErrorLabel").html("We ran into a problem");
            $("#modal-error-message").html(request.responseText);
            $("#modal-error").modal("show");
        }

      });
      event.preventDefault();
    });
  }); 
<?php echo '</script'; ?>
>

<?php }
}
