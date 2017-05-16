<span id="upfinished" style="text-align:center;font-size: 15px;">
<?php
error_reporting(E_ERROR); // Prevent Errors
$fileName = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true

if (!$fileTmpLoc) { // if file not chosen
    echo ' <div class="alert alert-danger">
  <strong>ERROR! &nbsp; </strong> Please browse for a file before clicking the upload button.
</div> ';
    exit();
}
$newFilePath = '' . $fileName;
if(move_uploaded_file($fileTmpLoc, "$newFilePath")){
    echo '<div class="alert alert-success" role="alert"><strong>' . $fileName .  ' </strong>upload is complete</div>';
} else {
    echo "move_uploaded_file function failed";
}

?>
 
</span>