<?php
session_start();
require 'config.php';
if(isset($_POST['submit'])){
	
	
	$rate=$_POST['rate'];
	$date=$_POST['date'];
	
	$query="INSERT INTO `rate` (`id`, `date`, `rate`) VALUES (NULL, '$date', '$rate')";
	
	if($run=mysqli_query($con,$query)){
		$_SESSION['rate']=$rate;
		$_SESSION['date']=$date;
		
		header('Location:entry2.php');
		
		
		
		
		
		
	}else {
		
		
		echo 'INVALID ATTEMPT';
	}
	
	
	
	
	
	
	
}







?>





<!DOCTYPE html>
<html>
<head>
<title>rate management</title>
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
<h1>ADD rate</h1>

<form method="POST" action="entry1.php">
<pos>
<p>
<label><p1>RATE:</p1></label>
<input type="number" name="rate" step="any" value="">
</p>
<p>
<label><p2>DATE:</p2></label>
<input type="date" name="date" value="">
</p>

<p style="margin-left:100px; margin-top:80px;">
<input type="submit"  id="btn" value="submit" style=" background:#cc6600; border:black 3px solid; ; font-size:25px;  " name="submit">



</p>
</form>

</pos>


</body>




</html>
