<!doctype html>
<?php
    $dir = 'D:\Foreign\Jack the Giant Slayer (2013) [1080p]';
	$Edir = base64_encode($dir);
	?>
<head>

   <!-- player skin -->
   <link rel="stylesheet" href="hide/skin/skin.css">

   <!-- site specific styling -->
   <style>
   body { font: 12px "Myriad Pro", "Lucida Grande", sans-serif; text-align: center; padding-top: 5%; }
   .flowplayer { width: 80%; }
   </style>

   <!-- for video tag based installs flowplayer depends on jQuery 1.7.2+ -->
   <script src="hide/jquery-1.11.2.min.js"></script>

   <!-- include flowplayer -->
   <script src="hide/flowplayer.min.js"></script>

</head>

<body>

   <!-- the player -->
   <div class="flowplayer" data-swf="hide/flowplayer.swf" data-ratio="0.4167">
   <?php
   
      echo '<video>
         <source type="video/mp4" src="hide/file_viewer.php?file=' . $Edir . '">
      </video>';
	  ?>
   </div>

</body>




