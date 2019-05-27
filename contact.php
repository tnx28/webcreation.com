<!DOCTYPE html>
<html>
<head>
	<title>contact.php</title>
</head>
<body>
	<?php
		$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			print("not connected=".mysql_error());
		}
		mysql_select_db("mysite",$con);

		$firstname=$_REQUEST['firstname'];
		$lastname=$_REQUEST['lastname'];
		$phone=$_REQUEST['phone'];
		$country=$_REQUEST['country'];
		$subject=$_REQUEST['subject'];

		$count=mysql_query("insert into contactlist values('$firstname','$lastname','$phone','$country','$subject')",$con);
		

		if($count>=1)
		{
			print('Thank You! We will contact you soon!');
		}
		mysql_close($con);
	?>
</body>
</html>