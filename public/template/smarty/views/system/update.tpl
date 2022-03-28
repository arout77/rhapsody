{* block : about *}
<div id="section_about" class="section">
    <div class="container">
        <div class="col-12 mb-5">

            <h3 class="fw-bold mb-12">
                <div class="text-info">Installed software version: 
                    <span id="curver"> 
                        {$software_version} 
                    </span>
                </div> <br><br>
                <span id="latestVersion" class="fw-medium">
                    <button class="btn btn-info btn-large" id="checkforupdates">Check for updates</button>
                </span>
            </h3>

            <div id="alertBox" class="alert alert-success mb-30" style="display:none;"><!-- SUCCESS -->
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                
                <h4>New version <strong id="message" class="red"></strong> available</h4>

                <p>
                    Updates are available for your installation of DiamondPHP. Updates provide performance and security improvements, bug fixes and new features. Download updates now. See <a href="{$smarty.const.SITE_URL}documentation/introduction/updates">documentation</a> for instructions on installing updates.
                </p>

                <a href="#purchase" id="downloadBtn" class="btn btn-info btn-sm mt-10">Download Updates</a>
                <a href="#" class="btn btn-default btn-sm mt-10">Cancel</a>
            </div>

        </div>

    </div>
</div>
{* /block : about *}

<script>
$(document).ready(function()
{  
    $("#checkforupdates").click(function()
    {  
      $.ajax(
       { 
          url:"https://diamondphp.org/block/getCurrentVer/",
          type:"post",
          dataType: 'JSON',
          data: { 
            user_version: $('#curver').text()
          },
          success:function(response)
          { 
              if(response == $('#curver').html())
              {
                  $("#latestVersion").html(
                  '<button class="btn btn-success btn-large" id="checkforupdates">You are up to date</button>'
                );
              } else {
                $("#latestVersion").hide();
                $("#alertBox").show();
                $("#latestVersion").html(
                  '<a href="https://diamondphp.org/download/update/'+response+'"><button class="btn btn-danger btn-large" id="checkforupdates">Download Updates</button></a>'
                );
                $("#message").html(response);
                
              }

          }
              
        } );
  } );
} );
</script>



