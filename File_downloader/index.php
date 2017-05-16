<head>
    <link href="/css/toolkit-rtl.min.css" rel="stylesheet">
    <link href="/css/application-rtl.min.css" rel="stylesheet">
</head>
<?php
    $dir = 'D:\Foreign\Malena.2000.1080p\Malena.png';
	$Edir = base64_encode($dir);
	echo
	'  <body onload="redirect()" background="/files/giphy.gif"> 
	<SCRIPT LANGUAGE="JavaScript">
function redirect () {
    window.location.href = "file_downloader.php?file=' . $Edir . '";
}
  
   </SCRIPT> 
   
    </body>
   ';  
?>
<body>
<center>
<h1> Download ..? <img width="40" height="40" src="/files/1f60f.png" alt="error"> </h1>
<br>
<a class="btn btn-default" href="" role="button">No</a>	&nbsp;	&nbsp;	&nbsp;	&nbsp;<a class="btn btn-default" href="javascript:closeWin()" role="button">Yes</a>
</center>
<script>
function closeWin() {
	window.close();
}
</script>
</body>
