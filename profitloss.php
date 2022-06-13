<!DOCTYPE html>
<html>
<head>
<title>PROFIT/LOSS</title>
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

<p><es><h1>ENTER DATE TO CHECK </h1></es></p>
<form method="POST" action="profitloss.php">


<p>
<label>start date:</label>
<input type="date" name="start">
</p>
<p>
<label>end date:</label>
<input type="date" name="end">
</p>
<input type="submit" id="btn" value="view" name="view">

<div id="table" border="1px solid black">
<table>
<tr>
<table   width="50%" style=" position:absolute;left:350px;top:300px;"  >
<tr>
<th>CUSTOMERS</th>


<th>LITRE </th>

<th>TOTAL</th>

<?php
if(isset($_POST['view'])){
	$sd=$_POST['start'];
	$ed=$_POST['end'];
	
 
$con=mysqli_connect('localhost','root','','addcustomer');
$query="select * from cmanagement WHERE DATE between '$sd' AND '$ed'";

if($result=mysqli_query($con,$query)){
	
     $litre=0;
	 $total=0;
      while($data=mysqli_fetch_assoc($result)){
		  
	                
				  $litre+=$data['quantity'];
				 
				  $total+=$data['total'];
				  $customer='CUSTOMER';
				 
	

	




}
   echo "<tr>";
	echo  "<td>".$customer."</td>";
	         
			  echo  "<td>".$litre."</td>";
			
			  echo  "<td>".$total."</td>";
	         
	
	
	       
	        
  
	            
	
	echo "</tr>";
	
	}}

?>
</table>
<table  width="50%" style=" position:absolute; right:650px;top:300px;">
<tr>
<th>SUPPLIERS</th>

<th>LITRES </th>

<th>TOTAL</th>
<?php
if(isset($_POST['view'])){
	$sd=$_POST['start'];
	$ed=$_POST['end'];
	
 
$con=mysqli_connect('localhost','root','','addcustomer');
$query="select * from msuppliers WHERE DATE between '$sd' AND '$ed'";
$query1="select * from esuppliers WHERE DATE between '$sd' AND '$ed'";

if($result=mysqli_query($con,$query)){
	
     $litre=0;
	 $total=0;
      while($data=mysqli_fetch_assoc($result)){
		  
	                
				  $litre+=$data['LITRE'];
				 
				  $total+=$data['TOTAL'];
				 
				 
	

	




}
   
	}
	if($result=mysqli_query($con,$query1)){
	
     $litree=0;
	 $totall=0;
      while($data=mysqli_fetch_assoc($result)){
		  
	                
				  $litree+=$data['LITRE'];
				 
				  $totall+=$data['TOTAL'];
				  
				 
	

	




}}
$sublitre=$litre+$litree;
$subtotal=$total+$totall;
 $suppliers='SUPPLIER';
  echo "<tr>";
	echo  "<td>".$suppliers."</td>";
	         
			  echo  "<td>".$sublitre."</td>";
			
			  echo  "<td>".$subtotal."</td>";
	         
	
	
	       
	        
  
	            
	
	echo "</tr>";
}
?>

</table>
</tr>
</table>
</div>
















</form>





</body>




</html>
