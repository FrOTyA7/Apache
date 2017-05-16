<?php
    $dir = 'D:\Foreign\Malena.2000.1080p\Malena.png';
	$Edir = base64_encode($dir);
	echo
	'<img src="file_viewer.php?file=' . $Edir . '" alt="' . $Edir . '"/>';  
?>