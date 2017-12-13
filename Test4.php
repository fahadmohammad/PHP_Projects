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
			
			$sql = "DELETE  from userinfo  WHERE UserId = '".$_SESSION['id']."'" ;
			
			if(mysqli_query($conn, $sql)) {
				echo "New records DELETE successfully";
			}
			else{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
	?>
</body>
</html>