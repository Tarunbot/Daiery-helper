
<?php
session_start();
require 'config.php';
if(isset($_POST['submit'])){
	
	$hn=$_POST['hn'];
	$quantity=$_POST['quantity'];
	
	$rate=$_SESSION['rate'];
	$date=$_SESSION['date'];
	$total=$rate*$quantity;
	
	$query="INSERT INTO `cmanagement` (`id`, `date`, `hn`, `quantity`, `rate`, `total`) VALUES (NULL, '$date', '$hn', '$quantity', '$rate', '$total')";
	
	
	
	
	if($run=mysqli_query($con,$query)){
		
		
		echo 'ENTRY DONE:)';
		
		
		
		
		
		
	}else {
		
		
		echo 'INVALID ATTEMPT';
	}
	
	
	
	
	
	
	
}







?>












<!DOCTYPE html>
<html>
<head>
<title>entry</title>
<style type="text/css">
body{
	background-image:url(wjoint.jpg);
}
h2{
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
<h2>REGULAR ENTRY</h2>
<form method="POST" action="entry2.php">
<pos>
<p>
<label><p1>HOUSE NO:</p1></label>
<input type="number" name="hn" value="">
</p>



<p>
<label><p3>QUANTITY:</p3></label>
<input type="number" step="any" name="quantity" value="">
</p>
<p>

<p style="margin-left:100px; margin-top:80px;">
<input type="submit"  id="btn" value="submit" style=" background:#cc6600; border:black 3px solid; ; font-size:25px;  " name="submit">



</p>
</form>

</pos>


</body>




</html>
