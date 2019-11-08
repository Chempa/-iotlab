<?php 
  include("db.php");
  function updateDoorStatus($conn,$opened){
	$query = "UPDATE iotdoor SET opened = '$opened' WHERE doornumber = 1;";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	return 1
}
  $state = $_GET["opened"];
  $token = $_GET["token"];
  if($token != "IOTLAB.UCC.DOOR.1234567890.qwertyuiop.asdfghjkl.zxcvbnm.server"){
    echo "authentication failed: wrong token";
    exit();
  }
  updateDoorStatus($con, $state)
  echo "success";
  exit();
?>
