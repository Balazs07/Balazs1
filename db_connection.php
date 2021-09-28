<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "balazs1";
 $dbpass = "Sommarlov44!";
 $dbname = "balazsdatabas";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }

?>
