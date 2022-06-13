<?php
$host="localhost";
$user="root";
$password="";
$db="addcustomer";
$con=mysqli_connect($host,$user,$password,$db);
if(!$con){
	echo 'error to connect database';
}

if(isset($_POST['delete'])){
	$hn=$_POST['hn'];
$query=mysqli_query($con,"DELETE FROM `customers` WHERE hn=$hn");
if($query){
	echo 'deleted';
	
}else{
	echo 'error';
	
}}




?>


 



<!DOCTYPE html>
<html>
<head>
<title>delete customers</title>
<style type="text/css">
body{
	background-image:url(wjoint.jpg);
}
h1{
text-align:center;
text-font:solid ;
color:red;
font-size:50px;
padding-left:80px;



}
form{
	
	text-align:center;
	margin-top:8%;
	
}
label{
	color:red;
	font:bold;
	font-size:30px;
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
<h1>DELETE  CUSTOMER</h1>
<form method="POST" action="deletec.php">
<pos>
<p>
<label><p1>house no:</p1></label>
<input type="number" name="hn" value="">
</p>

<p style="margin-left:100px; margin-top:80px;">
<input type="submit"  id="btn" value="delete" style=" background:#cc6600; border:black 3px solid; ; font-size:25px;  " name="delete">



</p>
</form>

</pos>


</body>




</html>
