<?php

require_once '../../gateway.php';

$username = "Elon Musk";
$name = str_replace(" ", "_", $username);

// File name
echo $filename = $_FILES['file']['name'];
echo '<br>';

$imagetypes = array(
    'image/png' => '.png',
    'image/gif' => '.gif',
    'image/tiff' => '.tiff',
    'image/jpeg' => '.jeg',
    'image/jpeg' => '.jpg',
    'image/bmp' => '.bmp');
$ext = $imagetypes[$_FILES['file']['type']];

$newfilename = $name.$ext;

// Valid file extensions
$valid_extensions = array("jpg","jpeg","png","gif", "tiff", "bmp" );

// File extension
$extension = pathinfo($filename, PATHINFO_EXTENSION);

// Check extension
if(in_array(strtolower($extension),$valid_extensions) ) {

    // Upload file
    if(move_uploaded_file($_FILES['file']['tmp_name'], USER_PICS . $newfilename)){
        echo 1;
    }else{
        echo 0;
    }
}else{
echo 0;
}

?>