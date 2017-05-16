<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link href="/css/application-rtl.min.css" rel="stylesheet">
</head>
   <body style = "font-family: sukar;">
<title>Anonymous</title>
   <center>
   <br>
  <h5> ==> TaWaFik 1 Project coded by Khalid <== </h5>
   
      <form action = "<?php $_PHP_SELF ?>" method = "POST" class = "" >

      <label for="inputEmail3" class="col-sm-2 col-form-label">Elements</label>

<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="Type between elements a space like :A B C" name = "el0" style = "width: 70%;">


Boxs	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;<br>
  <input name="boxs" class="btn btn-secondary" style = "background-color: #ffffff;border-color: #5bc0de;">
  
</input>
<Button class="btn btn-outline-info" style = "">
                Submit <input class="" type = "submit" style="display: none; " />
</Button>

         
      </form>
<span style = "font-size: 1.5rem;">
<?php
error_reporting(E_ERROR); // Prevent Errors

if( isset($_POST["el0"]) or isset($_POST["boxs"])  ) {
	
$el0 = $_POST["el0"];
$boxs = $_POST["boxs"];


if (!$boxs){
	echo ' <div class="alert alert-danger" style = "width: 60%;">
  Don\'t Fuck with Me.
</div> ';
}



file_put_contents("next.php","");
$fp = fopen('next.php', 'w');

#
#

$space = '	';
fwrite($fp, '<?php'."\n");
fwrite($fp, "\n");
#
fwrite($fp, '$el0 = "' . $el0 . '";'."\n"."\n");
fwrite($fp, '$number = explode(\' \', $el0);     // Extend'."\n");
fwrite($fp, '$number = array_unique($number);  // Remove duplicates '."\n");
fwrite($fp, '$number = array_values($number);  // re-index'."\n");
#
fwrite($fp, '$boxs = "'.$boxs . '";'."\n"."\n");
#

fwrite($fp, '	echo (\'Number of possibilities is \' . (count($number))**intval($boxs) . "<br>");'."\n");
foreach ( range(1, $boxs ) as $n1 ) {
	fwrite($fp, str_repeat($space, $n1).'	foreach ( range(0, (count($number)-1) ) as $n' .$n1. ') {'."\n");

}
#
fwrite($fp, str_repeat($space, $n1).'if ($n1 == $n2 ');
foreach ( range(2, $boxs-1 ) as $n9 ) {
 
 fwrite($fp," or \$n$n9==\$n" );
 fwrite($fp,$n9+1 ); 
}
fwrite($fp,"){\n" ); 
fwrite($fp,str_repeat($space, $n1)."continue;" ); 
fwrite($fp,str_repeat($space, $n1)."}\n" ); 
#
fwrite($fp, str_repeat($space, ($n1)+2) . ' echo ("$number[$n1]" ');
foreach ( range(2, $boxs ) as $n2 ) {
fwrite($fp, '."$number[$n' . $n2 . ']"');
}
fwrite($fp, '."<br>");');
foreach ( range($boxs-1,0 ) as $n3 ) {
	fwrite($fp, "\n".str_repeat($space, ($n3)+2) . '}');
	
}



fwrite($fp, "\n".'?>'."\n");
fclose($fp);



include 'next.php';
unlink('next.php');
}

?>
</span>
<br>

        <p style="color: #bbbbbb; display:inline;">Copyright ©</p>
		<a style="color: #79aad4;" href="/">Anonymous</a>
		<p style="color: #bbbbbb; display:inline;">. All rights reserved.</p>
		
   </center>
   </body>
</html>
