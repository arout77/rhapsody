<?php
/* Smarty version 3.1.44, created on 2022-03-28 00:04:27
  from '/home2/arout77/public_html/rhapsody/public/template/default/views/clients/edit_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_624133cb584f01_93977460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2a82fd1496bac05fd0060f9444436767cbb38d8' => 
    array (
      0 => '/home2/arout77/public_html/rhapsody/public/template/default/views/clients/edit_profile.tpl',
      1 => 1648440197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624133cb584f01_93977460 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  // Note that the name "myDropzone" is the camelized
  // id of the form.
  Dropzone.options.myDropzone = {
    // Configuration options go here
    paramName: "avatar", // The name that will be used to transfer the file
    maxFilesize: 20, // In MB. Divide $max_size by one million to convert to megabytes
    maxFiles: 1, // How many images to allow uploaded
    resizeHeight: "90px",
    addRemoveLinks: true,
    renameFile: "<?php echo $_smarty_tpl->tpl_vars['new_file_name']->value;?>
.jpg",
    uploadprogress: function(file, progress, bytesSent) {
        // Display the progress
        while(bytesSent < 20000000) {
            $("#progress").val(bytesSent);
            if(bytesSent == bytesSent) break;
        }
    },
    // previewsContainer: ".dropzone-previews", // CSS class of HTML element displaying previews
    // The setting up of the dropzone
    init: function() {
        var myDropzone = this;

        // First change the button to actually tell Dropzone to process the queue.
        this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
        // Make sure that the form isn't actually being sent.
        e.preventDefault();
        e.stopPropagation();
        myDropzone.processQueue();
        });

        // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
        // of the sending event because uploadMultiple is set to true.
        this.on("sendingmultiple", function() {
        // Gets triggered when the form is actually being sent.
        // Hide the success button or the complete form.
        });
        this.on("successmultiple", function(files, response) {
        // Gets triggered when the files have successfully been sent.
        // Redirect user or notify of success.
        alert('Image uploaded');
        });
        this.on("errormultiple", function(files, response) {
        // Gets triggered when there was an error sending the files.
        // Maybe show form again, and notify user of error
        });
    },
    accept: function(file, done) {
      if (file.name == "justinbieber.jpg") {
        done("Naha, you don't.");
      }
      else { done(); }
    }
  };
<?php echo '</script'; ?>
>

<form action="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
block/edit_avatar" class="dropzone" id="my-dropzone">
    <input type="file" name="avatar" />
    <input type="hidden" name="name" value="<?php echo $_SESSION['name'];?>
">
    <button class="btn btn-primary" type="submit">Upload Image</button>
</form>

<meter id="progress" style="width: 1000px;">

</meter><?php }
}
