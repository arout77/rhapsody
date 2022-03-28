<style>
.lockscreen-logo {
    font-size: 28px;
    font-weight: 300;
    margin-bottom: 25px;
    text-align: center;
}

.form-control {
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    box-shadow: 4px 4px 8px #333;
}

.lockscreen-item {
    box-shadow: 4px 4px 6px #333;
}

.lockscreen-image {
    box-shadow: 2px 4px 6px #333;
}

input[type="email"]:focus, input[type="password"]:focus {
    background: #f9b1e2;
    box-shadow: 2px 8px 10px #ce69a1;
    border: 2px solid #f70089;
}


</style>

<body onload="formatAMPM(new Date)" class="hold-transition lockscreen white" style="background-image: url({$smarty.const.SITE_URL}media/images/backgrounds/4k-space-wallpaper-1.jpg);
background-repeat: none; background-size: cover; background-repeat: no-repeat;">

<!-- Automatic element centering -->
<div class="lockscreen-wrapper">

<div id='ct' class="text-center" style="color: white; font-size: 3em;"></div>
<div class="text-center" style="color: white; font-size: 1.4em; margin-bottom: 60px;">{$smarty.now|date_format:"%A, %B %e, %Y"}</div>

  <div class="lockscreen-logo white">
    <a style="color: #e84c3d;" href="{$smarty.const.SITE_URL}"><b>{$smarty.const.SITE_NAME}</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name">
    {if $name neq ''} 
        {$name} 
        <input name="email" id="email" type="hidden" value="{$email}">
    {else} 
        Client Login
        <input style="margin-left: 125px; width: 220px;" type="email" id="email" name="email" class="form-control" placeholder="Email">
    {/if}
    </div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
    {if $avatar neq ''}
        <img src="{$smarty.const.USER_PICS_URL}/{$avatar}" alt="User Image">
    {else}
        <img src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png" alt="User Image">
    {/if}
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials">
      <div class="input-group">
        <input type="password" name="password" id="password" class="form-control" placeholder="password">

        <div class="input-group-append">
          <button type="submit" class="btn">
            <i class="fas fa-arrow-right text-muted"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Enter your password to retrieve your session
  </div>
  <div class="text-center">
    <a href="{$smarty.const.SITE_URL}login/">Or sign in as a different user</a>
  </div>
  {* <div class="lockscreen-footer text-center">
    Copyright &copy; 2014-2021 <b><a href="https://adminlte.io" class="text-black">AdminLTE.io</a></b><br>
    All rights reserved
  </div> *}
</div>
<!-- /.center -->

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
    $("form").submit(function(event) {
      // First validate the form //
      $("#employee-login").validate({
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

<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout("formatAMPM(new Date)",refresh)
}

function formatAMPM(date) {
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var seconds = date.getSeconds();
  var ampm = hours >= 12 ? 'pm' : 'am';
  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'
  minutes = minutes < 10 ? '0'+minutes : minutes;
  seconds = seconds < 10 ? '0'+seconds : seconds;
  var strTime = hours + ':' + minutes + ':' + seconds + ' ' + ampm;
  document.getElementById('ct').innerHTML = strTime;
  return tt=display_c();
}
</script>
