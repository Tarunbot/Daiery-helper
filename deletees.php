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
	$date=$_POST['date'];
$query=mysqli_query($con,"DELETE FROM `esuppliers` WHERE DATE=$date");
if($query){
	echo 'deleted';
	
}else{
	echo 'error';
	
}}




?>


 



<!DOCTYPE html>
<html>
<head>
<title>DELETE</title>
<style type="text/css">
body{
	background-color:silver;
}
h1{
text-align:center;
text-font:solid ;
color:black;
font-size:50px;
padding-left:80px;



}
form{
	
	text-align:center;
	margin-top:8%;
	
}
label{
	color:black;
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
<h1>DELETE SUPPLIER</h1>
<h3 style="text-align:center;">EVENING SUPPLIER</h3>
<form method="POST" action="deletees.php">
<pos>
<p>
<label><p1>house no:</p1></label>
<input type="date" name="date" value="">
</p>

<p style="margin-left:100px; margin-top:80px;">
<input type="submit"  id="btn" value="delete" style=" background:#cc6600; border:black 3px solid; ; font-size:25px;  " name="delete">



</p>
</form>

</pos>


</body>




</html>
