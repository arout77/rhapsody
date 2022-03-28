<style>
label { font-weight: bold; }
.signup label span.error { color: red; }
.error {
    margin-left: 20px;
    font-size: 15px;
    background: #FFDFDF;
    border: 1px solid #FFCACA;
    border-radius: 5px;
    font-weight: normal;
}
</style>

<div class="contact_wrapper information_head">
    <p class="lead">Create an account in order to access the site. Your information is secure, and never sold to third parties.</p>
    <h3 class="margin-bottom-25 margin-top-none">SIGNUP</h3>
    <div class="form_contact margin-bottom-20">
        
        <form id="signup" name="signup" class="signup" method="post" action="{$smarty.const.SITE_URL}signup/signup_validate">

        <div id="signup_form" class="table-responsive">
            <table class="table table-striped">
            <tr>
                <td align="right"><span id="username_availability_result"><label for="username">Username</label></span></td>
                <td width="20px;"></td>
                <td><input style="width: 200px !important;" type="text" id="username" name="username" class="form-control" placeholder="Create a username  (Required)" />
                </td>
            </tr>
            <tr>
                <td align="right"><label for="first_name">First Name</label></td>
                <td width="20px;"></td>
                <td><input style="width: 200px !important;" type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name  (Required)" /></td>
            </tr>
            <tr>
                <td align="right"><label for="last_name">Last Name</label></td>
                <td width="20px;"></td>
                <td><input style="width: 200px !important;" type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name (Required)" /></td>
            </tr>
            <tr>
                <td align="right"><span id="email_availability_result"><label for="email">Email</label></span></td>
                <td width="20px;"></td>
                <td><input style="width: 200px !important;" type="email" id="email" name="email" class="form-control" placeholder="Use a real one  (Required)" /></td>
            </tr>
            <tr>
                <td align="right"><label for="password">Password</label></td>
                <td width="20px;"></td>
                <td><input style="width: 200px !important;" type="password" name="password" id="password" class="form-control" minlength="6" placeholder="Password  (Min 6 characters)" /></td>
            </tr>
            <tr>
                <td align="right"><label for="confirm_password">Confirm Password</label></td>
                <td width="20px;"></td>
                <td><input style="width: 200px !important;" type="password" name="confirm_password" id="confirm_password" class="form-control" minlength="6" placeholder="Confirm Password" /></td>
            </tr>
            <tr>
                <td align="right"><label for="dob">Date of Birth (Must be 18+)</label></td>
                <td width="20px;"></td>
                <td><input style="width: 200px !important;" type="date" id="dob" name="dob" class="form-control" placeholder="(Required)" /></td>
            </tr>
            <tr>
                <td align="right"><label for="gender">I am a</label></td>
                <td width="20px;"></td>
                <td><select style="width: 200px !important;" id="gender" name="gender" class="form-control" required />
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"><label for="seek_gender">Seeking a</label></td>
                <td width="20px;"></td>
                <td><select style="width: 200px !important;" id="seek_gender" name="seek_gender" class="form-control" required />
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"><label for="zip">Zip Code</label></td>
                <td width="20px;"></td>
                <td><input style="width: 200px !important;" type="number" id="zip" name="zip" class="form-control" placeholder="Zip Code  (Required)" maxlength="5" /></td>
            </tr>
            <tr>
                <td align="right"><label for="city">City</label></td>
                <td width="20px;"></td>
                <td><select style="width: 200px !important;" id="city" name="city" class="form-control" required /></select></td>
            </tr>
            <tr>
                <td align="right"><label for="state">State</label></td>
                <td width="20px;"></td>
                <td><input style="width: 200px !important;" type="text" id="state" name="state" class="form-control" placeholder="State  (Required)" readonly /></td>
            </tr>
            <tr>
                <td align="right">By registering, you agree to our 
                <a class="red" style="cursor: pointer;" data-toggle="modal" data-target="#myModal" onclick="showModal();">Terms of Service</a></td><td></td><td><input id="submit_btn" type="submit" value="Complete Registration"></td>
            </tr>
            </table>
        </div>
        </form>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="{$smarty.const.SITE_URL}media/mutiny/js/bootstrap.min.js"></script>

<script type="text/javascript">

jQuery.validator.addMethod("greaterThan", 
function(value, element, params) {
    /* 
        value = User submitted date
        element = The date input field
        params = The value passed from validation rules
    */

    /* 18 years ago today */
    var minDob = "{$bornOnOrBeforeDate}";

    /* verify that (1) submitted year is equal to or less than minDob, and that (2) birth month and date are no larger than minDob month and day */
    if ( 
            /* 
                If the submitted year is equal to or lower than the year prior to min DOB year,
                no need for further validation. 
                (If the submitted year and min DOB year are the same, we go to the next step and check month/day)
            */
            (minDob.substring(0,4) - 1) >= value.substring(0,4)
     ){ return true; }

     if (
            /* 
                If the submitted year is equal to or lower than the year prior to min DOB year 
                AND submitted month is earlier than min DOB month, no need for further validation. 
            */
            (minDob.substring(0,4) >= value.substring(0,4)) &&
            (value.substring(6,7) < minDob.substring(6,7)) 
     ){ return true; } 

     if (
            /* 
                Submitted year and month are same as min DOB year and month,
                so we need to make sure the day equals or is lower than min DOB day 
            */
            (minDob.substring(0,4) >= value.substring(0,4)) &&
            (value.substring(6,7) == minDob.substring(6,7)) && 
            (value.substring(9, 10) <= minDob.substring(9, 10)) 
    ) { return true; } 
    else {
            /* 
                Only other possible submissions result in user being under 18 years old.
            */
            return false;
    } 
},'Must be 18 or older to register');

function showModal(e) {
    e = e || window.event;
    e.preventDefault();
    $('#modal').modal('show');
}

$(document).ready(function() {
    
    $("#signup").validate({
            errorPlacement: function(error, element) {
			// Append error within linked label
			$( element )
				.closest( "form" )
					.find( "label[for='" + element.attr( "id" ) + "']" )
						.append( error );
		},
		errorElement: "span",
            rules: {
                username: { 
                    required: true,
                    minlength: 6, 
                    maxlength: 50 
                },
                first_name: { 
                    required: true,
                    maxlength: 50 
                },
                last_name: { 
                    required: true,
                    maxlength: 50  
                },
                email: {
                    required: true,
                    email: true
                },
                dob: {
                    required: true,
                    date: true,
                    greaterThan: 18
                },
                gender: {
                    required: true
                },
                seek_gender: {
                    required: true
                },
                password: { 
                    required: true,
                    minlength: 6
                },
                confirm_password: {
                    equalTo: "#password"
                },
                zip: {
                    required: true,
                    minlength: 5,
                    maxlength: 5
                },
                city: {
                    required: true
                },
                state: {
                    required: true
                }
            },
            messages: {
				first_name: "Please enter your first name",
                last_name: "Please enter your last name",
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 6 characters long"
				},
				confirm_password: {
					equalTo: "Password confirmation does not match given password"
				},
				email: "Please enter a valid email address",
                zip: {
					required: "Please provide a password",
					minlength: "Zip code must be five digits long",
                    maxlength: "Zip code must be five digits long"
				},
			}

            // form.submit();
    });
});
</script>





<script>
$(document).ready(function()
 {  
    $("#zip").change(function()
     {  
        var zip = $(this).val();
        $.ajax(
         {  
            url:" {$smarty.const.SITE_URL}block/get_city/" + zip,
            type:"post",
            data: { zip:$(this).val()},
            success:function(response)
             { 
                $("#city").html(response);
            }
        } );
    } );
} );
        
$(document).ready(function()
 {  
    $("#zip").change(function()
     {  
        var zip = $(this).val();
        $.ajax(
         {  
            url:" {$smarty.const.SITE_URL}block/get_state/" + zip,
            type:"post",
            data: { zip:$(this).val()},
            success:function(response)
             { 
                $("#state").val(response);
            }
        } );
    } );
} );


$(document).ready(function() 
 {  
    //the min chars for username  
    var min_chars = 6;  

    //result texts  
    var characters_error = '';  
    var checking_html = 'Checking username...';  

    //when button is clicked  
    $('#username').change(function() {   
        //run the character number check  
        if($('#username').val().length < min_chars) {   
            //if it's below the minimum show characters_error text '  
            $('#username_availability_result').html(characters_error);  
        }else {   
            //else show the cheking_text and run the function to check  
            $('#username_availability_result').html(checking_html);  
            check_availability();  
        }  
    } );  

} );  
  
//function to check username availability  
function check_availability() 
 {  
    //get the username  
    var username = $('#username').val();  

    //use ajax to run the check  
    $.post(" {$smarty.const.SITE_URL}block/check_username/" + username,  {  username: username },  
        function(result) {   
            //if the result is 0
            if(result == 0) {   
                $('#username_availability_result').removeClass("btn btn-danger btn-sm").addClass("btn btn-success btn-sm").html('Username ' + username + ' is available');  
                $(':input[type="submit"]').prop('disabled', false);
            }else {   
                $('#username_availability_result').removeClass("btn btn-success btn-sm").addClass("btn btn-danger btn-sm").html('Username ' + username + ' is not available. Please choose another username.');  
                $(':input[type="submit"]').prop('disabled', true);
            }  
    } );  
  
}


$(document).ready(function() 
 {  
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
        }else {   
            //else show the cheking_text and run the function to check  
            $('#email_availability_result').html(checking_html);  
            check_email_availability();  
        }  
    });

});  
  
//function to check email availability  
function check_email_availability() 
 {  
    //get the email  
    var email = $('#email').val();  

    //use ajax to run the check  
    $.post(" {$smarty.const.SITE_URL}block/check_email/",  {  email: email },
        function(result) {   
            //if the result is 0
            if(result == 0) {   
                $('#email_availability_result').removeClass("btn btn-danger btn-sm").addClass("btn btn-success btn-sm").html(email + ' is available');  
                $(':input[type="submit"]').prop('disabled', false);
            }else {   
                $('#email_availability_result').removeClass("btn btn-success btn-sm").addClass("btn btn-danger btn-sm").html(email + ' is already registered. <br>Please <a style="color:yellow" href=" {$smarty.const.SITE_URL}login">reset your password</a> if you have forgotten it.');  
                $(':input[type="submit"]').prop('disabled', true);
            }  
    } );  
  
}
</script>
