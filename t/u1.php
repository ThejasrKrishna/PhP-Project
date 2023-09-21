<?php
$connect= new mysqli("localhost","root","","data") or die("Connection Failed");
	$sqlget="UPDATE t1 SET Name='".$_POST['Name']."', Email='".$_POST['Email']."' WHERE id='".$_GET['id']."'";
	$sqldata=mysqli_query($connect,$sqlget);

if($sqldata) 
{
echo json_encode($sqldata);
header ('location: http://localhost/t/index.php');
}
else
echo "error";
	

?>