<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="get" target="./getdoor.php">
		<input type="text" name="token" value="IOTLAB.UCC.DOOR.1234567890.qwertyuiop.asdfghjkl.zxcvbnm.client">
		<button type="submit">Submit</button>
	</form>
	<hr>
	<form method="get" target="./setdoor.php">
		<input type="text" name="token" value="IOTLAB.UCC.DOOR.1234567890.qwertyuiop.asdfghjkl.zxcvbnm.client">
		<input type="text" name="opened" value="1">
		<button type="submit">Submit</button>
	</form>
</body>
</html>
