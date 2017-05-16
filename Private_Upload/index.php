<!DOCTYPE html>


<html>
<span style="color:#AFA;text-align:center;">

<head>
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



<body>
<center>
<h2>Upload One File</h2>

<form id="upload_form" enctype="multipart/form-data" method="post">
<label class="btn btn-danger">
                <h4>Browse&hellip;</h4> <input  type="file"  name="file1" id="file1" style="display: none;">
            </label>
  
  <h2>
  <input  type="button" class="btn btn-primary btn-lg" value="Upload File" onclick="uploadFile()"><br>
<br>
  <progress id="progressBar"  value="0" max="100" class="progress" style="width:25%"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
</form>

<html >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/normalize.min.css">
      <link rel="stylesheet" href="css/style.css">
</head>
<br><br>
<body>
<div class="flex-container">
  <div class="unit">
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
    <p></p>
  </div>
</div>
</body>
</html>
<h2>Upload Multi Files</h2>
<form action="upload2.php"  enctype="multipart/form-data" method="post">
<label class="btn btn-danger">
                <h4>Browse&hellip;</h4> <input id='upload' value="put files"  name="upload[]" type="file" multiple style="display: none;" />
            </label><br>
       
<br>

        <input type="submit" class="btn btn-primary btn-lg" id="btnSubmit" value="Upload Files" >
</form>
<br>
 <a class="btn btn-default" href="/" role="button">Back</a>
</center>
</body>

  
</span>
</html>