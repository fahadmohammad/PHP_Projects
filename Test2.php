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
			//echo "Favorite id is " . $_SESSION["id"] . ".<br>";
			
			function getJSONFromDB($sql)
			{
				$conn = mysqli_connect("localhost", "root", "","bankdb");
				//echo $sql;
				$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
				$arr=array();
				while($row = mysqli_fetch_assoc($result)) 
				{
					$arr[]=$row;
				}
				return json_encode($arr);
			}
			//$ss = $_SESSION["id"];
			
			//$jd=getJSONFromDB("select * from userinfo where UserId = '10-50' ");
			$jd=getJSONFromDB("select * from userinfo where UserId = '".$_SESSION['id']."'");
			//echo $jd;
			$jsn1=json_decode($jd);
			//echo "<pre>";
			//print_r($jsn1);
			//echo "</pre>";
			for($i=0;$i<sizeof($jsn1);$i++)
			{
	
				echo "First Name :- ".$jsn1[$i]->FirstName;
				echo "<br>";
				echo "Last Name :- ".$jsn1[$i]->LastName;
				echo "<br>";
				echo "Gender :- ".$jsn1[$i]->Gender;
				echo "<br>";
				echo "Email :- ".$jsn1[$i]->Email;
				echo "<br>";
				echo "Phone :- ".$jsn1[$i]->Phone;
				echo "<br>";
				echo "Account No:- ".$jsn1[$i]->AccountNo;
				echo "<br>";
				echo "Branch :- ".$jsn1[$i]->Branch;
				echo "<br>";
				echo "Balance :- ".$jsn1[$i]->Balance;
				echo "<br>";
				
			}	
		?>
	<body>
</html>