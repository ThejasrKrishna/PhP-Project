
<?php
	$connect= new mysqli("localhost","root","","data") or die("Connection Failed");
	$sqlget="delete from t1 where id='".$_GET['id']."'";
	$sqldata=mysqli_query($connect,$sqlget);
if($sqldata) 
header ('location: http://localhost/t/index.php');
//echo "succes";
else
echo "error";
	
		
?>



