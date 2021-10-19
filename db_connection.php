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

//Select specific column from DB
$query = mysqli_query($conn, "SELECT * FROM tbl_articles");
while($row = mysqli_fetch_assoc($query))
{
  $title = $row['title'];
  $content = $row['content'];
}

//Select specific column from DB
$query = mysqli_query($conn, "SELECT * FROM contact");
while($row = mysqli_fetch_assoc($query))
{
  $contact_title = $row['contact_title'];
  $android = $row['android'];
}
?>
