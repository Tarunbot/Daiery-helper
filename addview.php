<?php
$host="localhost";
$user="root";                                                                                                                                                                                                                                                                                                                                                                                                                                              
$password="";
$db="addcustomer";
$con=mysqli_connect($host,$user,$password,$db);
if(!$con){
	echo 'error to connect database';
}






?>





<!DOCTYPE html>
<html>
<head>
<title>details</title>
<style type="text/css">
h1{
text-align:center;
color:red;
}
body{
	background-image:url(wjoint.jpg);
	
}
form{
	text-align:center;
	
	border:3px solid black;'
	
}
es{
	text-align:center;
	
	color:black;
	
	
}
table{
	text-align:center;
	background-image:url(sjoint.jpg);
	margin-left:25%;
	margin-top:10%;
	
}
label{
	color:red;
}
th{
	color:red
}
td{
	color:white;
}


</style>
</head>
<body>

<p><es><h1>enter house no  </h1></es></p>
<form method="POST" action="addview.php">


<p>

<input type="number" name="hn">
</p>
<input type="submit" id="btn" value="find" name="view" style=" background:#cc6600; border:black 3px solid; ; font-size:25px;  ">
<input type="submit" id="btn" value="viewall" name="viewall" style=" background:#cc6600; border:black 3px solid; ; font-size:25px;  ">

<table width="600" cellpadding="1" cellspacing="1" border="1">
<tr>
<th>id</th>
<th>HOUSE NO</th>
<th>FNAME </th>
<th>LNAME</th>
<th>MOBILE NO</th>
<th>EMAIL ID</th>
<th>ADDRESS</th>




</tr>



<?php
if(isset($_POST['view'])){
	$hn=$_POST['hn'];
$con=mysqli_connect('localhost','root','','addcustomer');
$hn=$_POST['hn'];
$query="select * from customers WHERE hn='$hn'";

if($result=mysqli_query($con,$query)){
	

      while($data=mysqli_fetch_assoc($result)){
		  
	                $id=$data['id'];
				  $hn=$data['hn'];
				  $fname=$data['fname'];
				  $lname=$data['lname'];
				  $mobile=$data['mobileno'];
				  $email=$data['email'];
				  $address=$data['address'];
	
	
}}
            echo "<tr>";
	
	          echo  "<td>".$id."</td>";
			  echo  "<td>".$hn."</td>";
			  echo  "<td>".$fname."</td>";
			  echo  "<td>".$lname."</td>";
			  echo  "<td>".$mobile."</td>";
			  echo  "<td>".$email."</td>";
	         
	
	
	       
	          echo  "<td>".$address."</td>";
  
	            
	
	echo "</tr>";
	



}
if(isset($_POST['viewall'])){
	
$con=mysqli_connect('localhost','root','','addcustomer');

$query="SELECT * FROM customers";

if($result=mysqli_query($con,$query)){
	

      while($data=mysqli_fetch_array($result)){
		  
	              $id=$data['id'];
				  $hn=$data['hn'];
				  $fname=$data['fname'];
				  $lname=$data['lname'];
				  $mobile=$data['mobileno'];
				  $email=$data['email'];
				  $address=$data['address'];
	
	

            echo "<tr>";
	
	          echo  "<td>".$id."</td>";
			  echo  "<td>".$hn."</td>";
			  echo  "<td>".$fname."</td>";
			  echo  "<td>".$lname."</td>";
			  echo  "<td>".$mobile."</td>";
			  echo  "<td>".$email."</td>";
	         
	
	
	       
	          echo  "<td>".$address."</td>";
  
	            
	
	echo "</tr>";
	
}}


}



?>
<input type="submit" id="btn" value="update" name="update" style=" background:#cc6600; border:black 3px solid; ; font-size:25px;  ">

<?php


if(isset($_POST['update'])){
	header("Location: updater.php");
exit();

	}








?>
</table>



















</form>





</body>




</html>
