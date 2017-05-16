<?php
 $file = 'private/Messages';
 file_put_contents($file, print_r($_POST, true), FILE_APPEND);
 ?>
 <body onLoad="myFunction()">
 <script>
function myFunction() {
    alert("Your message send successfully");
}
</script>
 <meta http-equiv="refresh" content="0; url=/" />