<?php
$host="localhost";
$user="root";
$password="";
$db="addcustomer";
$con=mysqli_connect($host,$user,$password,$db);
if(!$con){
	echo 'error to connect database';
}


if (isset($_POST['submit'])) {
	
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$mobileno=$_POST['mobileno'];
		$email=$_POST['emailid'];
		$address=$_POST['address'];
		$cname=$fname.$lname;
		$hn=$_POST['hn'];
		
		
		
		$save=mysqli_query($con, "INSERT INTO `customers` (`id`, `hn`, `fname`, `lname`, `mobileno`, `email`, `address`) VALUES (NULL, '$hn', '$fname', '$lname', '$mobileno', '$email', '$address')"); 
	    
		
		if($save ){
			
			echo "saved";
		}else{
			echo " error";
		}
	}



?>


 



<!DOCTYPE html>
<html>
<head>
<title>add customers</title>
<style type="text/css">
body{
	background-image:url(wjoint.jpg);
}
h1{
text-align:center;
text-font:solid ;
color:silver;
font-size:40px;
padding-left:80px;



}
form{
	
	text-align:center;
	margin-top:8%;
	
}
label{
	color:silver;
	font:bold;
	font-size:20px;
	padding:60px;
}

	
	p1{
		margin:40px;
	}
	p2{
		margin:33px;
	}
	p3{
		margin:37px;
	}
	p4{
		margin:33px;
	}
	p5{
		margin:44px;
	}
	p6{
		margin:48px;
	}
	p7{
		margin:80px;
	}
	



</style>
</head>
<body >
<h1>ADD CUSTOMER</h1>
<form method="POST" action="addc.php">
<pos>
<p>
<label><p1>house no:</p1></label>
<input type="number" name="hn" value="">
</p>
<p>
<label><p2>first name:</p2></label>
<input type="text" name="firstname" value="">
</p>
<p>
<label><p3>last name:</p3></label>
<input type="text" name="lastname" value="">
</p>
<p>
<label><p4>mobile no:</p4></label>
<input type="number" name="mobileno" value="">
</p>
<p>
<label><p5>email id:</p5></label>
<input type="text" name="emailid" value="">
</p>

<p>
<label><p6>address:</p6></label>
<input type="text" name="address" value="">
</p>

<p style="margin-left:100px; margin-top:80px;">
<input type="submit"  id="btn" value="submit" style=" background:#cc6600; border:black 3px solid; ; font-size:25px;  " name="submit">



</p>
</form>

</pos>


</body>




</html>
