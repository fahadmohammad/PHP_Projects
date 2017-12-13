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
		//$sql = "select UserId from userinfo";
		$_SESSION["id"] = $_REQUEST['uid'];
		echo "Session variables are set.";
		function getJSONFromDB($sql)
		{
			$conn = mysqli_connect("localhost", "root", "","bankdb");
			//echo $sql;
			$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
			$arr=array();
			while($row = mysqli_fetch_assoc($result)) {
				$arr[]=$row;
	}
		return json_encode($arr);
		}
		
		$jd=getJSONFromDB("select UserId from userinfo");
		echo $jd;
		$jsn=json_decode($jd);
		//echo "<pre>";print_r($jsn);echo "</pre>";
		
		for($i=0;$i<sizeof($jsn);$i++)
		{
			if($jsn[$i]->UserId == $_REQUEST['uid'])
			{
				
				//echo  "user id matched\n" ;
				
				break;
			}
			if($i == (sizeof($jsn)-1))
			{
				echo "user-id doesnot match" ;
			}
		}
		
		
		
		$jd1=getJSONFromDB("select Password from userinfo");
		//echo $jd1;
		$jsn1=json_decode($jd1);
		//echo "<pre>";
		//print_r($jsn1);
		//echo "</pre>";
		
		for($i=0;$i<sizeof($jsn1);$i++)
		{
			if($jsn1[$i]->Password == $_REQUEST['pass'])
			{
				//echo "Password matched" ;
				header('Location:homepage.html');
				break;
			}
			if($i == (sizeof($jsn)-1))
			{
				echo "Password doesnot match" ;
			}
		}
		
		//$res = mysql_query ($sql);
		//$row = mysql_fetch_array ($res);
		/*
		if(mysqli_query($conn, $sql))
		{
			//if (!strcmp ($row['UserId'], $_REQUEST['uid']))
			//{
				echo "UserId doesnot match" ;
			//}
			//else
				//echo "UserId  match" ;
				
		}
		*/
	?>
</body>
</html>