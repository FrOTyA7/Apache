<html>
   <body>
   ==> Tbadel3 Project coded by Khalid <==
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         el0: <input type = "text" name = "el0" />
		 
		 
		 boxs: <input type = "text" name = "boxs" />
         <input type = "submit" />
      </form>
   
   </body>
</html>
<?php

function boxs3(){
	GLOBAL $number;
	GLOBAL $boxs;
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
       foreach ( range(0, (count($number)-1) ) as $n2 ) {
		 foreach ( range(0, (count($number)-1) ) as $n3 ) {
			 echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."<br>");
		   };
	   };
	};
echo ("<br>".'Number of possibilities is ' . 3**intval($boxs) );
}

/*
if (isset($_POST["el0"]) and isset($_POST["boxs"]) )
{
$el0 = $_POST["el0"];
$number = explode(' ', $el0);

$number = array_unique($number);
$number = array_values($number);
print_r ($number);
}
*/

if( isset($_POST["el0"]) or isset($_POST["boxs"])  ) 
{
$el0 = $_POST["el0"];
$boxs = $_POST["boxs"];

$number = explode(' ', $el0);     // Extend
$number = array_unique($number);  // Remove duplicates 
$number = array_values($number);  // re-index


if ( $boxs == 3 ) 
	boxs3();

}

?>
