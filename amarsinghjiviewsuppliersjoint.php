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
	background:url(wjoint.jpg);
	
}
form{
	text-align:center;
	
	border:3px solid black;'
	
}
es{
	text-align:center;
	
	color:black;
	
	
}
label{
	color:red;
}
table{
	text-align:center;
	background-image:url(sjoint.jpg);
	margin-left:25%;
	margin-top:10%;
	
}
th{
	color:red;
}
td{
	color:white;
}


</style>
</head>
<body>

<p><es><h1>view suppliers </h1></es></p>
<form method="POST" action="amarsinghjiviewsuppliersjoint.php">


<p>
<label>start date:</label>
<input type="date" name="start">
</p>
<p>
<label>end date:</label>
<input type="date" name="end">
</p>
<input type="submit" id="btn" value="view" name="view">
<input type="submit" id="btn" value="viewall" name="viewall">
<div id="table" border="1px solid black">
<table>
<tr>
<table   width="50%" style="position:absolute; right:680px;"  >
<tr>
<th>MORNING</th>
<th>id</th>
<th>DATE</th>
<th>LITRE </th>
<th>FATE</th>
<th>RATE</th>
<th>TOTAL</th>

<?php
if(isset($_POST['view'])){
	$sd=$_POST['start'];
	$ed=$_POST['end'];
	$myinput='12/15/2005'; 
$sqldate=date('Y-m-d',strtotime($sd)); 
$sqldate1=date('Y-m-d',strtotime($ed)); 
 
$con=mysqli_connect('localhost','root','','addcustomer');
$query="select * from amarsinghjimsuppliers WHERE DATE between '$sd' AND '$ed'";

if($result=mysqli_query($con,$query)){
	

      while($data=mysqli_fetch_assoc($result)){
		  
	                $id=$data['id'];
				  $date=$data['DATE'];
				  $litre=$data['LITRE'];
				  $fate=$data['FATE'];
				  $rate=$data['RATE'];
				  $total=$data['TOTAL'];
				  $morning='MORNING';
				 
	

            echo "<tr>";
	echo  "<td>".$morning."</td>";
	          echo  "<td>".$id."</td>";
			  echo  "<td>".$date."</td>";
			  echo  "<td>".$litre."</td>";
			  echo  "<td>".$fate."</td>";
			  echo  "<td>".$rate."</td>";
			  echo  "<td>".$total."</td>";
	         
	
	
	       
	        
  
	            
	
	echo "</tr>";
	




}}}
if(isset($_POST['viewall'])){
	$sd=$_POST['start'];
	$ed=$_POST['end'];
	$myinput='12/15/2005'; 
$sqldate=date('Y-m-d',strtotime($sd)); 
$sqldate1=date('Y-m-d',strtotime($ed)); 
 
$con=mysqli_connect('localhost','root','','addcustomer');
$query="select * from amarsinghjimsuppliers ";

if($result=mysqli_query($con,$query)){
	

      while($data=mysqli_fetch_assoc($result)){
		  
	                $id=$data['id'];
				  $date=$data['DATE'];
				  $litre=$data['LITRE'];
				  $fate=$data['FATE'];
				  $rate=$data['RATE'];
				  $total=$data['TOTAL'];
				  $morning='MORNING';
				 
	

            echo "<tr>";
	echo  "<td>".$morning."</td>";
	          echo  "<td>".$id."</td>";
			  echo  "<td>".$date."</td>";
			  echo  "<td>".$litre."</td>";
			  echo  "<td>".$fate."</td>";
			  echo  "<td>".$rate."</td>";
			  echo  "<td>".$total."</td>";
	         
	
	
	       
	        
  
	            
	
	echo "</tr>";
	




}}}
?>
</table>
<table  width="50%" style="position:absolute; left:330px;">
<tr>
<th>EVENING</th>
<th>id</th>
<th>DATE</th>
<th>LITRE </th>
<th>FATE</th>
<th>RATE</th>
<th>TOTAL</th>

<?php
if(isset($_POST['view'])){
	$sd=$_POST['start'];
	$ed=$_POST['end'];
	$myinput='12/15/2005'; 
$sqldate=date('Y-m-d',strtotime($sd)); 
$sqldate1=date('Y-m-d',strtotime($ed)); 
 
$con=mysqli_connect('localhost','root','','addcustomer');
$query="select * from amarsinghjiesuppliers WHERE DATE between '$sd' AND '$ed'";

if($result=mysqli_query($con,$query)){
	

      while($data=mysqli_fetch_assoc($result)){
		  
	                $id=$data['id'];
				  $date=$data['DATE'];
				  $litre=$data['LITRE'];
				  $fate=$data['FATE'];
				  $rate=$data['RATE'];
				  $total=$data['TOTAL'];
				  $evening='EVENING';
				 
	

            echo "<tr>";
	echo  "<td>".$evening."</td>";
	          echo  "<td>".$id."</td>";
			  echo  "<td>".$date."</td>";
			  echo  "<td>".$litre."</td>";
			  echo  "<td>".$fate."</td>";
			  echo  "<td>".$rate."</td>";
			  echo  "<td>".$total."</td>";
	         
	
	
	       
	        
  
	            
	
	echo "</tr>";
	




}}}
if(isset($_POST['viewall'])){
	$sd=$_POST['start'];
	$ed=$_POST['end'];
	$myinput='12/15/2005'; 
$sqldate=date('Y-m-d',strtotime($sd)); 
$sqldate1=date('Y-m-d',strtotime($ed)); 
 
$con=mysqli_connect('localhost','root','','addcustomer');
$query="select * from amarsinghjiesuppliers ";

if($result=mysqli_query($con,$query)){
	

      while($data=mysqli_fetch_assoc($result)){
		  
	                $id=$data['id'];
				  $date=$data['DATE'];
				  $litre=$data['LITRE'];
				  $fate=$data['FATE'];
				  $rate=$data['RATE'];
				  $total=$data['TOTAL'];
				  $morning='EVENING';
				 
	

            echo "<tr>";
	echo  "<td>".$morning."</td>";
	          echo  "<td>".$id."</td>";
			  echo  "<td>".$date."</td>";
			  echo  "<td>".$litre."</td>";
			  echo  "<td>".$fate."</td>";
			  echo  "<td>".$rate."</td>";
			  echo  "<td>".$total."</td>";
	         
	
	
	       
	        
  
	            
	
	echo "</tr>";
	




}}}





?>
</table>
</tr>
</table>
</div>
















</form>





</body>




</html>
