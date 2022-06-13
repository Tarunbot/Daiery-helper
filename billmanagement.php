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
<title>bill management</title>
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
	
	
}
es{
	text-align:center;
	
	color:red;
	
	
}
th{
	color:red;
}
td{
	color:white;
}
label{
	color:red;
	
}



</style>
</head>
<body>
<h1>enter details to search in database</h1>
<p><es><h1>enter house no  </h1></es></p>
<form method="POST" action="billmanagement.php">
<p>
<label>house no:</label>
<input type="number" name="hn">
</p>
<p>
<input type="submit"  id="btn" value="view" name="view">
</p>

<table width="50%" cellpadding="1" cellspacing="1" border="1" style="background-image:url(sjoint.jpg); margin-left:25%; margin-top:10%;">

<tr>
<th>NAME</th>
<th>HOUSE NO</th>
<th>QUANTITY</th>
<th>TOTAL</th>

</tr>



<?php
if(isset($_POST['view'])){
$con=mysqli_connect('localhost','root','','addcustomer');
$hn=$_POST['hn'];
$query="select * from `cmanagement` WHERE hn='$hn'";
$query1="select * from `customers` WHERE hn='$hn'";
$qty=0;
if($result=mysqli_query($con,$query1)){
	if($result1=mysqli_query($con,$query)){

      while($data=mysqli_fetch_assoc($result)){
		  
	$name=$data['fname'].$data['lname'];
	
	         while($data1=mysqli_fetch_assoc($result1)){
				 
				  $hn=$data1['hn'];
				 @ $totalr+=$data1['total'];
				 @ $quantityr+=$data1['quantity'];
				  
	
	
}}
}}
            echo "<tr>";
	
	          echo  "<td>".$name."</td>";
	         
	
	
	       
	          echo  "<td>".$hn."</td>";
			   echo  "<td>".$quantityr."</td>";
  
	            echo  "<td>".$totalr."</td>";
	
	echo "</tr>";
	



}



?>
</table>

















</form>





</body>




</html>
