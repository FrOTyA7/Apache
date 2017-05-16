<?php
    $yourfile = base64_decode($_GET['file']);  
    $file_name = basename($yourfile);
    header("Content-Disposition: attachment; filename=$file_name");
    header("Content-Length: " . filesize($yourfile));
    readfile($yourfile);
    exit;
?>