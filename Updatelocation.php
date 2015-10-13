<?php
$username="root";
$password="toor";
$database="location";


$connection=mysql_connect ('localhost', $username, $password);
/////////////////////// Check connection/////////////////////////////
if (!$connection) {
  die('Not connected : ' . mysql_error());
}




///////////////////////////////////////////////////////////////////

///////////////////////////////Retrieve html params////////////////////////////////////
//$lastupdate		= mysqli_real_escape_string($con, $_POST['lastupdate']);
$host			= $_GET["host"];
$lat			= $_GET["lat"];
$lng			= $_GET["lng"];
$Model			= $_GET["Model"];
$active			= $_GET["active"];
$batterystatus	= $_GET["batterystatus"];
$phone	= $_GET["phone"];
///////////////////INSERT AND SEND QUERRY////////////////////////////////
$sql1="INSERT INTO gps (host,lat,lng,batterystatus,Model,active,phone)

VALUES ('$host','$lat','$lng','$batterystatus','$Model','$active','$phone')";

$sql="UPDATE gps
SET lat='$lat',lng='$lng',batterystatus='$batterystatus',Model='$Model',active='$active',phone='$phone'
WHERE host='$host'";

//////////////////////////////////////////////////////////////////////////




$db_selected = mysql_select_db($database, $connection);

if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}



$query = "SELECT host from gps where host='$host'";
$result = mysql_query($query);
if(mysql_num_rows($result) > 0)
{
    // row exists. do whatever you would like to do. 

	$result = mysql_query($sql);
	if (!$result) {
	  die('Invalid query: ' . mysql_error());
	}	
	
}
else
{
	
	$result = mysql_query($sql1);	
		if (!$result) {
	  die('Invalid query: ' . mysql_error());
	}
}
/////////////////////////////////////////////////////////////////////////




///////////////////////////////Close connection/////////////////////////////////////////
mysqli_close($con);



//Usage example :http://digital-dragons.net/gps/GpsTracker/Updatelocation.php?host=google.com&lat=25.805538&lng=21.00&BatteryStatus=70&Model=Samsung&active=1
?>
