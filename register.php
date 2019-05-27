<!DOCTYPE html>
<html>
<head>
	<title>register.php</title>
</head>
<body>
	<?php
		$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			print("not connected=".mysql_error());
		}
		mysql_select_db("mysite",$con);

		$fname=$_REQUEST['fname'];
		$lname=$_REQUEST['lname'];
		$email=$_REQUEST['email'];
		$phone=$_REQUEST['phone'];
		$city=$_REQUEST['city'];
		$district=$_REQUEST['district'];
		$post=$_REQUEST['post'];
		$username=$_REQUEST['username'];
		$password=$_REQUEST['password'];

		$count=mysql_query("insert into registerlist values('$fname','$lname','$email','$phone','$city','$district','$post','$username','$password')",$con);
		

		if($count>=1)
		{
			include"msg.html";
		}
		mysql_close($con);
	?>
</body>
</html>