
<head>
    <link href="/css/toolkit-rtl.min.css" rel="stylesheet">
    <link href="/css/application-rtl.min.css" rel="stylesheet">
</head>
<h3>
<center>


<?php
 header("Content-Type: text/html; charset=utf-8"); 

// Count # of uploaded files in array
$total = count($_FILES['upload']['name']);
// Loop through each file
for($i=0; $i<$total; $i++) {
  //Get the temp file path
  $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
  

  //Make sure we have a filepath
  if ($tmpFilePath != ""){
    //Setup our new file path
//$xyxy = ($_GET['dir']);
    $newFilePath = $_FILES['upload']['name'][$i];
    $newFilePath2 = " The File " . " <img width=\"40\" height=\"40\" src=\"/files/Hand.png\" alt=\"error\"> " . $_FILES['upload']['name'][$i] . " <img width=\"40\" height=\"40\" src=\"/files/HandR.png\" alt=\"error\"> " . "uploaded successfully"." <img width=\"40\" height=\"40\" src=\"/files/hand2.png\" alt=\"error\">" . "<br>";
    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath )) {
$x = $i + 1;
	  echo " <img width=\"40\" height=\"40\" src=\"/files/1f60f.png\" alt=\"error\">"." "."(" . $x . ")"." <img width=\"40\" height=\"40\" src=\"/files/1f60f.png\" alt=\"error\">" ." ". $newFilePath2 . " ";
  

	 
    }
  }
  
}
?>


<a class="btn btn-default" href="/Upload" role="button">Back</a>

</center>
<h3>