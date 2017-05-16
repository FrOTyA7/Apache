<!DOCTYPE html>
<html>
<head>
   <link rel="shortcut icon" href="resources/themes/bootstrap/img/folder.png">
		<link rel="icon" href="resources/themes/bootstrap/img/folder.png" type="image/x-icon"/>
<link rel="stylesheet" href="/css/bootstrapE.css">
<link href="/css/toolkit-rtl.min.css" rel="stylesheet">
    <link href="/css/application-rtl.min.css" rel="stylesheet">
</head>
<script>
function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	var file = _("file1").files[0];
	// alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("file1", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "upload.php");
	ajax.send(formdata);
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}
</script>
<span style="text-align:center;">
<body>
<style>
.center {
  margin-top: 80px;
 }
 .left {
 float: left; 
 margin-left: 19%; 
 }
 .right {
 float: right;  
 margin-right: 19%; 
 }
</style>
<div class='right'>
<h3>Upload One File</h3>

<form id="upload_form" enctype="multipart/form-data" method="post">
<label class="btn btn-danger">
                <h4>Browse&hellip;</h4> <input  type="file"  name="file1" id="file1" style="display: none;">
            </label>
  
  <h2>
  <input  type="button" class="btn btn-primary btn-lg" value="Upload File" onclick="uploadFile()"><br>
<br>

  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
</form>

</div>
<div class='left'>
<h3>Upload Multi Files</h3>
<form action="upload3.php"  enctype="multipart/form-data" method="post">
<label class="btn btn-danger">
                <h4>Browse&hellip;</h4> <input id='upload' value="put files"  name="upload[]" type="file" multiple style="display: none;" />
            </label><br>
       
<br>

        <input type="submit" class="btn btn-primary btn-lg" id="btnSubmit" value="Upload Files" >
</form>
<br>

</div>
</body>
<div class='center'>

<h2>Put your files her and download it.</h2>
  <progress id="progressBar"  value="0" max="100" class="progress" style="width:25%"></progress>
<html >
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="flex-container">

    <div class="heart">
      <div class="heart-piece-0"></div>
      <div class="heart-piece-1"></div>
      <div class="heart-piece-2"></div>
      <div class="heart-piece-3"></div>
      <div class="heart-piece-4"></div>
      <div class="heart-piece-5"></div>
      <div class="heart-piece-6"></div>
      <div class="heart-piece-7"></div>
      <div class="heart-piece-8"></div>
    </div>
  </div>

  
  
</body>
</html>
<br>

  </div>
</span>

</html>
</div>
<br><br><br>

<?php

    // Include the DirectoryLister class
    require_once('resources/DirectoryLister.php');

    // Initialize the DirectoryLister object
    $lister = new DirectoryLister();
	

    // Restrict access to current directory
    ini_set('open_basedir', getcwd());

    // Return file hash
    if (isset($_GET['hash'])) {

        // Get file hash array and JSON encode it
        $hashes = $lister->getFileHash($_GET['hash']);
        $data   = json_encode($hashes);

        // Return the data
        die($data);

    }

    if (isset($_GET['zip'])) {

        $dirArray = $lister->zipDirectory($_GET['zip']);

    } else {

        // Initialize the directory array
        if (isset($_GET['dir'])) {
            $dirArray = $lister->listDirectory($_GET['dir']);
        } else {
            $dirArray = $lister->listDirectory('.');
        }

        // Define theme path
        if (!defined('THEMEPATH')) {
            define('THEMEPATH', $lister->getThemePath());
        }

        // Set path to theme index
        $themeIndex = $lister->getThemePath(true) . '/index.php';

        // Initialize the theme
        if (file_exists($themeIndex)) {
            include($themeIndex);
        } else {
            die('ERROR: Failed to initialize theme');
        }

    }





