<?php
ob_start();
?>


<?php

$host="localhost";
$user="root";
$password="";
$db="addcustomer";
$con=mysqli_connect($host,$user,$password,$db);
if(!$con){
	echo 'error to connect database';
}

if(isset($_POST['submit'])){
	
$username=$_POST['username'];
$password=$_POST['password'];
}

@$query="SELECT *  FROM login where user = '$username' AND pass = '$password'";


if($run=mysqli_query($con,$query)){
	
	while($row=mysqli_fetch_assoc($run)){
		
	$user=$row['user'];
	$pass=$row['pass'];
	
	if($user==$username AND $pass==$password){
		
		header("location:designhome.php");
		
		
		
	}
	

	}
}
	
	
	
	
	
	







ob_end_flush();
?>

























<!DOCTYPE html>
<html>
<head>

<title>login</title>
<style type="text/css">

	



body{
	
	
	background-image:url(wjoint.jpg) ;
	
	
}


div{
	margin-top:15%;
	padding-right:30%;
	padding-left:30%;
	
	
	
	
}
h1{
	color:red;
}
form{
	background-image:url(wjoint.jpg) ;
	 border:3px solid black;
	
	width:70%;
	height:80%;
}
label{
	color:red;
}
input[type="text"]
{
   background-color:black;
    border:none;
color:brown;
	
	
	
}
input[type="submit"]
{
   background-color:black;
    border:none;
color:silver;
width:25%;
	
	
	
}
input[type="password"]
{
    
    border:none;
	color:brown;
background-color:black
	
	
}
</style>


</head>
<body>


<div align="center" border="3px solid black" >

<form method="POST" action="index.php">
<p ><h1>USER LOGIN</h1></p>
<p>
<label>username:</label>
</p>
<p>
<input type="text" name="username" >
</p>

<p>
<label>password:</label>
</p>
<p>
<input type="password" name="password">
</p>
<p>
<input type="submit" id="btn" name="submit" value="LOGIN">
</p>
</form>







</body>
</html>