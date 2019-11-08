<?php 
  include("db.php");
  function updateDoorStatus($conn,$opened){
			$query = "UPDATE iotdoor SET opened = '$opened' WHERE doornumber = 1;";
			$result = mysqli_query($conn,$query) or die(mysql_error());
			if ($conn->query($sql) === TRUE) {
            return 1;
//           echo "Record updated successfully";
      } else {
//           echo "Error updating record: " . $conn->error;
            return 0;
      }
		}
  $state = $_GET["opened"];
  $token = $_GET["token"];
  if($token == "IOTLAB.UCC.DOOR.1234567890.qwertyuiop.asdfghjkl.zxcvbnm"){
    echo "authentication failed: wrong token";
    exit();
  }
  if(updateDoorStatus($con, $state) == 0){
    echo "Update door status failed";
  }else{
    echo "Update success";
  }
  exit();
?>
