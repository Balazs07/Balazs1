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

//Hero.php
$query = mysqli_query($conn, "SELECT * FROM contact");
while($row = mysqli_fetch_assoc($query))
{
  $this_is = $row['this_is'];
  $android = $row['android'];
  $Cool_Features = $row['Cool_Features'];
  $Try_My_Features = $row['Try_My_Features'];
  $HTML_Hero = $row['HTML_Hero'];

}
//Header.php
$query = mysqli_query($conn, "SELECT * FROM header");
while($row = mysqli_fetch_assoc($query))
{
  $awsome_portfolio = $row['awsome_portfolio'];


//Footer.php
$query = mysqli_query($conn, "SELECT * FROM footer");
  while($row = mysqli_fetch_assoc($query))
  {
    $android_robot = $row['android_robot'];
    $one23_street = $row['one23_street'];
    $tel_number = $row['tel_number'];
    $info_email = $row['info_email'];
    $copyright = $row['copyright'];
    $your_site_name = $row['your_site_name'];
    $all_right_reserved = $row['all_right_reserved'];

}

//Experience.php
$query = mysqli_query($conn, "SELECT * FROM experience");
while($row = mysqli_fetch_assoc($query))
{
  $my_resume = $row['my_resume'];
  $working_experience = $row['working_experience'];
  $t2045_2050 = $row['t2045_2050'];
  $web_developer = $row['web_developer'];
  $soft_agency = $row['soft_agency'];
  $lorem_ipsum = $row['lorem_ipsum'];
?>
