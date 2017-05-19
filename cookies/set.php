<?php


//        set coockies      ( "name"  , "value" );
setcookie("c_user", "FrOTy.A7");


// get by name     echo $_COOKIE["name"];
echo $_COOKIE["c_user"];


echo "\n<br>\n";


// get all    print_r($_COOKIE);           ARRAY
print_r($_COOKIE);
?>