<?php
$host="localhost";
$user="root";
$password="";
$db="addcustomer";
$con=mysqli_connect($host,$user,$password,$db);
if(!$con){
	echo 'error to connect database';
}



if(isset($_POST['update'])){
	$hn=$_POST['hn'];
	$fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
	$mobileno=$_POST['mobileno'];
	$email=$_POST['emailid'];
	$address=$_POST['address'];
	

$query2=mysqli_query($con,"UPDATE customers SET fname='$fname',  lname='$lname'   , mobileno='$mobileno',   email='$email',  address='$address' WHERE hn = '$hn'");
if($query2){
	echo 'updated all';
	
}else{
	echo 'eror';
	
}}

if(isset($_POST['ufname'])){
	$hn=$_POST['hn'];
	$fname = $_POST['firstname'];
    
	

$query2=mysqli_query($con,"UPDATE customers SET fname='$fname' WHERE hn = '$hn'");
if($query2){
	echo 'updation';
	
}else{
	echo 'eror';
	
}}

if(isset($_POST['ulname'])){
	$hn=$_POST['hn'];
	$lname = $_POST['lastname'];
    
	

$query2=mysqli_query($con,"UPDATE customers SET lname='$lname' WHERE hn = '$hn'");
if($query2){
	echo 'updation';
	
}else{
	echo 'eror';
	
}}
if(isset($_POST['umob'])){
	$hn=$_POST['hn'];
	$mob = $_POST['mobileno'];
    
	

$query2=mysqli_query($con,"UPDATE customers SET mobileno='$mob' WHERE hn = '$hn'");
if($query2){
	echo 'updation';
	
}else{
	echo 'eror';
	
}}
if(isset($_POST['emailid'])){
	$hn=$_POST['hn'];
	$email = $_POST['emailid'];
    
	

$query2=mysqli_query($con,"UPDATE customers SET email='$email' WHERE hn = '$hn'");
if($query2){
	echo 'updation';
	
}else{
	echo 'eror';
	
}}
if(isset($_POST['uaddress'])){
	$hn=$_POST['hn'];
	$add = $_POST['address'];
    
	

$query2=mysqli_query($con,"UPDATE customers SET address='$add' WHERE hn = '$hn'");
if($query2){
	echo 'updation';
	
}else{
	echo 'eror';
	
}}
if(isset($_POST['uid'])){
	$hn=$_POST['hn'];
	$id = $_POST['id'];
    
	

$query2=mysqli_query($con,"UPDATE customers SET id='$id' WHERE hn = '$hn'");
if($query2){
	echo 'updation';
	
}else{
	echo 'eror';
	
}}






?>




<!DOCTYPE html>
<html>
<head>
<title>update customers</title>
<style type="text/css">
body{
	background-image:url(wjoint.jpg);
}
h3{
text-align:center;
text-font:solid ;
color:red;
font-size:30px;
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
		margin:33px;
	}
	p4{
		margin:48px;
	}
	p5{
		margin:34px;
	}
	p6{
		margin:50px;
	}
	p7{
		margin:37px;
	}
	p8{
		
		text-align:center;
		border:3px solid brown;
		padding:1%;
		
		
		
		
		
	}
	



</style>
</head>
<body >
<h3>UPDATE CUSTOMER</h3>
<form method="POST" action="updater.php">
<pos>

<p8>
<label>house no:</label>
<input type="number" name="hn" value="">
</p8>
<br>
</br>
<br>
</br>


<label><p2>first name:</p2></label>
<input type="text" name="firstname" value="">
<input type="submit"  id="btn" value="update fname" style=" background:#cc6600; border:black 3px solid; ; font-size:25px;  " name="ufname">
</p>
<p>
<label><p3>last name:</p3></label>
<input type="text" name="lastname" value="">
<input type="submit"  id="btn" value="update lname" style=" background:#cc6600; border:black 3px solid; ; font-size:25px;  " name="ulname">
</p>
<p>
<label><p4>mobile no:</p4></label>
<input type="number" name="mobileno" value="">
<input type="submit"  id="btn" value="update mobileno" style=" background:#cc6600; border:black 3px solid; ; font-size:25px;  " name="umob">
</p>
<p>
<label><p5>email id:</p5></label>
<input type="text" name="emailid" value="">
<input type="submit"  id="btn" value="update email" style=" background:#cc6600; border:black 3px solid; ; font-size:25px;  " name="uemail">
</p>

<p>
<label><p6>address:</p6></label>
<input type="text" name="address" value="">
<input type="submit"  id="btn" value="update address" style=" background:#cc6600; border:black 3px solid; ; font-size:25px;  " name="uaddress">
</p>
<p>
<label><p7> id:</p7></label>
<input type="number" name="id" value="">
<input type="submit"  id="btn" value="update id" style=" background:#cc6600; border:black 3px solid; ; font-size:25px;  " name="uid">
</p>
<p style="margin-left:100px; margin-top:50px;">




<input type="submit"  id="btn" value="update all" style=" background:#cc6600; border:black 3px solid; ; font-size:25px;  " name="update">
</p>
</form>

</pos>


</body>




</html>
