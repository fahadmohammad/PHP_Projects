<!DOCTYPE html>
<html>
<BODY>
<script type="text/javascript">
				function validate()
				{
					flag=true;
					if(document.mfm.fname.value.length==0)
					{
						alert("you must type something");
						flag=false;
					}
					return flag;
				}
</script>
<?php
	
	
	/*
	if($_REQUEST["fname"] ==null || $_REQUEST["lname"]==null|| $_REQUEST["DOBMonth"] == "Select month" || $_REQUEST["DOBDay"]=="Select Day"||$_REQUEST["DOBYear"]=="Select Year"||$_REQUEST["phone"]==null ||$_REQUEST["email"]==null||$_REQUEST["pass"] ==null||$_REQUEST["cpass"] ==null)
	{
		
		
		
		
		
		if($_REQUEST["pass"] !=$_REQUEST["cpass"] || (strlen($_REQUEST["pass"])<4) )
		{
			echo "password no match or empty";
		}
		else{
			echo "Empty field";
		}
	}
	else{
		if(strlen($_REQUEST["pass"])<=3){
			echo "password length too short";
		}
		else if($_REQUEST["pass"] != $_REQUEST["cpass"]){
			echo "Both password are not same";
		}
		*/
		
		
			echo "OK";
			
			$conn = mysqli_connect("localhost", "root", "", "bankdb");
			if (!$conn) 
			{
				die("Connection failed: " . mysqli_connect_error());
			}
			
			/*
			if(mysqli_query($conn, $sql)) {
				echo "New records updated successfully";
			}
			
			else
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			*/
			
			
			//$sql="INSERT INTO user VALUES ('".$_REQUEST['fname']."','".$_REQUEST['lname']."','".$_REQUEST['uid']."','".$_REQUEST['fname']."','".$_REQUEST['phone']."','".$_REQUEST['email']."')";
			  
			  
			  $sql="INSERT INTO userinfo  (FirstName , LastName , Email , Phone , AccountNo , UserId , password, Branch ,DOBDay,DOBMonth,DOBYear,Gender) 
			  VALUES ('".$_REQUEST['fname']."' ,'".$_REQUEST['lname']."' , '".$_REQUEST['email']."', '".$_REQUEST['phone']."' , 
			  '".$_REQUEST['ano']."' , '".$_REQUEST['uid']."' , '".$_REQUEST['pass']."' , '".$_REQUEST['branch']."' , 
			  '".$_REQUEST['DOBDay']."' , '".$_REQUEST['DOBMonth']."' , '".$_REQUEST['DOBYear']."' , '".$_REQUEST['gender']."') " ;
			
			
			
			
			
			if(mysqli_query($conn, $sql)) {
				header('Location:login.html');
				echo "New records inserted successfully";
			}
			else{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			
			/*
			$u_id = $_REQUEST['uid'];
			//$sql = "DELETE FROM userinfo WHERE UserId = $u_id " ;
			
			$sql = "DELETE FROM userinfo WHERE Id = 2" ;
			
			if(mysqli_query($conn, $sql)) {
				echo "New records Deleted successfully";
			}
			else{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			*/
			
			
			
			
			/*
			function getJSONFromDB($sql){
			$conn = mysqli_connect("localhost", "root", "","bank1");
	//echo $sql;
			$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
			$arr=array();
			while($row = mysqli_fetch_assoc($result)) {
				$arr[]=$row;
	}
		return json_encode($arr);
		}
	$jsonData= getJSONFromDB("select * from user");

/*$jsonData='[{"id":"10","name":"test","cgpa":"9.99"},
{"id":"123","name":"xyz","cgpa":"3.90"},
{"id":"1256","name":"test2","cgpa":"2.30"}]';*/

//echo $jsonData;
			

/*$jsonData='[{"id":"10","name":"test","cgpa":"9.99"},
{"id":"123","name":"xyz","cgpa":"3.90"},
{"id":"1256","name":"test2","cgpa":"2.30"}]';*/


			//$sql = "INSERT INTO user VALUES ('fahad' , 'laname' , '0125' , 's@ymail.com')" ; 
			//echo $sql;
			
			//echo "<table border = '1px'>";
			/*
			foreach($_REQUEST as $key => $value)
			{
				echo "<tr> <td>".$key."</tr> <tr></td> <td>".$value."</td> </tr>";
			}
			echo "</table>";
			*/		
		
	
	
	
	

?>
</BODY>
</html>