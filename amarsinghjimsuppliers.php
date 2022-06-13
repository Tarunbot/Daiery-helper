<?php
$host="localhost";
$user="root";
$password="";
$db="addcustomer";
$con=mysqli_connect($host,$user,$password,$db);
if(!$con){
	echo 'error to connect database';
}






if (isset($_POST['submit'])) {
		$date = $_POST['date'];
		$litre = $_POST['litre'];
		$fate=$_POST['fate'];
		$rate1=$_POST['rate'];
		$rate=$fate*$rate1;
		@$id=$_POST['id'];
		
		$total=$litre*$rate;
		
		
		$save=mysqli_query($con, "INSERT INTO `amarsinghjimsuppliers` (`id`, `DATE`, `LITRE`, `FATE`, `FATE/RATE`, `RATE`, `TOTAL`) VALUES (NULL, '$date', '$litre', '$fate', '$rate1', '$rate', '$total')"); 
	    if($save){
			
			echo "it saves the data in customers database";
		}else{
			echo " error";
		}
	}






?>




<!DOCTYPE html>
<html>
<head>
<title>add supplier</title>
<style type="text/css">
h1{
text-align:center;
color:orange;
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
	
	color:orange;
	
	
}
label{
	color:orange;
}



</style>
</head>
<body>
<h1>AMAR SINGH JI</h1>
<p><es><h1>MORNING SUPPLIERS</h1></es></p>
<form method="POST" action="amarsinghjimsuppliers.php">
<p>
<label>DATE:</label>
<input type="date" name="date" value="">
</p>
<p>
<label>Litre:</label>
<input type="number"step="any" name="litre" value="">
</p>
<p>
<label>fate :</label>
<input type="number" step="any" name="fate" value="">
</p>
<p>
<label>Rate:</label>
<input type="number" step="any" name="rate" value="">
</p>


<p>
<input type="submit"  id="btn" value="submit" name="submit" style=" background:#cc6600; border:black 3px solid; ; font-size:25px;  ">
</p>


</form>





</body>




</html>
