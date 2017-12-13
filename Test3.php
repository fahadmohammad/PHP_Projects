<?php
// Start the session
session_start();
?>
<html>
<body>
	<?php
		$conn = mysqli_connect("localhost", "root", "", "bankdb");
			if (!$conn) 
			{
				die("Connection failed: " . mysqli_connect_error());
			}
			
			$sql = "UPDATE userinfo SET Password = '".$_REQUEST['upass']."'  WHERE UserId = '".$_SESSION['id']."'" ;
			
			if(mysqli_query($conn, $sql)) {
				echo "New records updated successfully";
			}
			else{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
	?>
</body>
</html>