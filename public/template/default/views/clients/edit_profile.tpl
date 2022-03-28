<script>
  // Note that the name "myDropzone" is the camelized
  // id of the form.
  Dropzone.options.myDropzone = {
    // Configuration options go here
    paramName: "avatar", // The name that will be used to transfer the file
    maxFilesize: 20, // In MB. Divide $max_size by one million to convert to megabytes
    maxFiles: 1, // How many images to allow uploaded
    resizeHeight: "90px",
    addRemoveLinks: true,
    renameFile: "{$new_file_name}.jpg",
    uploadprogress: function(file, progress, bytesSent) {
        // Display the progress
        $("#progress").val(bytesSent);
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
</script>

<form action="{$smarty.const.SITE_URL}block/edit_avatar" class="dropzone" id="my-dropzone">
    <input type="file" name="avatar" />
    <input type="hidden" name="name" value="{$smarty.session.name}">
    <button class="btn btn-primary" type="submit">Upload Image</button>
</form>

<meter id="progress" style="width: 1000px;">

</meter>