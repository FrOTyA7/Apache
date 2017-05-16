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
  <h5> ==> Tbadel 7 Project coded by Khalid <== </h5>
   
      <form action = "<?php $_PHP_SELF ?>" method = "POST" class = "" >

      <label for="inputEmail3" class="col-sm-2 col-form-label">Elements</label>

<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="Type between elements a space like :A B C" name = "el0" style = "width: 70%;">


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Boxs<br>

                 <input class="btn btn-outline-info" name = "b" value = "Download"  type = "submit" style="" />

  <input name="boxs" class="btn btn-secondary" style = "background-color: #ffffff;border-color: #5bc0de;">
  
</input>
<Button class="btn btn-outline-info" style = "">
                View <input class="" type = "submit" style="display: none; " />
</Button>

         
      </form>
<span style = "font-size: 1.5rem;">
<?php
error_reporting(E_ERROR); // Prevent Errors


if( isset($_POST["el0"]) or isset($_POST["b"]) or isset($_POST["boxs"])  ) {
	
$el0 = $_POST["el0"];
$boxs = $_POST["boxs"];
$b = $_POST["b"];


if (!$boxs){
	echo ' <div class="alert alert-danger" style = "width: 60%;">
  Don\'t Fuck with Me.
</div> ';
}

function A(){
	GLOBAL $el0;
	GLOBAL $boxs;
file_put_contents("nexta.php","");
$fpa = fopen('nexta.php', 'w');

#
#

$space = '	';
fwrite($fpa, '<?php'."\n");
fwrite($fpa, "\n");
#
fwrite($fpa, '$el0 = "' . $el0 . '";'."\n"."\n");
fwrite($fpa, '$number = explode(\' \', $el0);     // Extend'."\n");
fwrite($fpa, '$number = array_unique($number);  // Remove duplicates '."\n");
fwrite($fpa, '$number = array_values($number);  // re-index'."\n");
#
fwrite($fpa, '$boxs = "'.$boxs . '";'."\n"."\n");
#

fwrite($fpa, '	echo (\'Number of possibilities is \' . (count($number))**intval($boxs) . "<br>");'."\n");
foreach ( range(1, $boxs ) as $n1 ) {
	fwrite($fpa, str_repeat($space, $n1).'	foreach ( range(0, (count($number)-1) ) as $n' .$n1. ') {'."\n");

}
fwrite($fpa, str_repeat($space, ($n1)+2) . 'echo ("$number[$n1]"');
foreach ( range(2, $boxs ) as $n2 ) {
fwrite($fpa, '."$number[$n' . $n2 . ']"');
}
fwrite($fpa, '."<br>");');
foreach ( range($boxs-1,0 ) as $n3 ) {
	fwrite($fpa, "\n".str_repeat($space, ($n3)+2) . '}');
	
}



fwrite($fpa, "\n".'?>'."\n");
fclose($fpa);

include 'nexta.php';
unlink('nexta.php');
}
#
#
#

function B(){
	GLOBAL $el0;
	GLOBAL $boxs;

file_put_contents("nextb.php","");
$fpb = fopen('nextb.php', 'w');

#
#


$space = '	';
fwrite($fpb, '<?php'."\n");
fwrite($fpb, "\n");
fwrite($fpb,'$fptxt = fopen(\'Download.txt\', \'w\');'."\n");
#
fwrite($fpb, '$el0 = "' . $el0 . '";'."\n"."\n");
fwrite($fpb, '$number = explode(\' \', $el0);     // Extend'."\n");
fwrite($fpb, '$number = array_unique($number);  // Remove duplicates '."\n");
fwrite($fpb, '$number = array_values($number);  // re-index'."\n");
#
fwrite($fpb, '$boxs = "'.$boxs . '";'."\n"."\n");
#

fwrite($fpb, '	echo (\'Number of possibilities is \' . (count($number))**intval($boxs) . "<br>");'."\n");
foreach ( range(1, $boxs ) as $n1 ) {
	fwrite($fpb, str_repeat($space, $n1).'	foreach ( range(0, (count($number)-1) ) as $n' .$n1. ') {'."\n");

}
fwrite($fpb, str_repeat($space, ($n1)+2) );
fwrite($fpb,'fwrite($fptxt,"$number[$n1]"'   );               #
foreach ( range(2, $boxs ) as $n2 ) {
fwrite($fpb, '."$number[$n' . $n2 . ']"');
}
fwrite($fpb,'."\n"');
fwrite($fpb, ');');
foreach ( range($boxs-1,0 ) as $n3 ) {
	fwrite($fpb, "\n".str_repeat($space, ($n3)+2) . '}');
	
}

fwrite($fpb, 'fclose($fptxt);');   #
fwrite($fpb, "\n".'?>'."\n");
fwrite($fpb, "\n".'<form action="Download.txt"><input class="btn btn-outline-info" type="submit" value="Download !" /></form>'."\n");

fclose($fpb);
include 'nextb.php';
unlink('nextb.php');

}
if ($b == "Download"){
	B();
}
else{
	A();
}


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