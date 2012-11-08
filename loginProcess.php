<?php
$con = mysql_connect("sce.engr.sjsu.edu", "sce", "`sce123");
if(!$con)
{
	die('Could not connect: ' . mysql_error());
}else{
echo 'connected successfully';
}
mysql_select_db("sce", $con);

$result = mysql_query("SELECT * FROM sce_alumni");

while($row = mysql_fetch_array($result))
  {
  echo $row['Username'] . " " . $row['JoinDate'];
  echo "<br />";
  }

mysql_close($con);

?>
