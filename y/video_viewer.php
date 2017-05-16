<?php
$dir = 'E:\A8ani\3la rem4.mp4';
$Edir = base64_encode($dir);
echo 
'
<video controls="" autoplay="" name="media">
          <source alt="" src="file_viewer.php?file=' . $Edir . '">
     </video>
';
?>