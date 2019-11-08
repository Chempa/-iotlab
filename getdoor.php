<?php 
include("db.php");
echo "Here";
exit();
function getDoorStatus($conn){
	$query = "SELECT * from iotdoor WHERE doornumber = 1;";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
		if($row = mysqli_fetch_assoc($result)){
			return strval($row["doornumber"]);
		}else{
			return "-1";
		}
			
}

$token = $_GET["token"];
if($token == "IOTLAB.UCC.DOOR.1234567890.qwertyuiop.asdfghjkl.zxcvbnm.client"){
	echo "authentication failed: wrong token";
	exit();
}
$ret = getDoorStatus($con);
if($ret == "-1"){
	echo "-1";
}else{
	echo $ret;
}
exit();
?>
