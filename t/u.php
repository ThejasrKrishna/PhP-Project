<?php
$connect= new mysqli("localhost","root","","data") or die("Connection Failed");
$id=$_GET['id'];
$sqlget="select * from t1 where id='$id'";
$sqldata=mysqli_query($connect,$sqlget);
if($sqldata)
{
echo json_encode($sqldata);
}
else{
	echo "error";
}
?>
		


