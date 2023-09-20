<?php
	$connect= new mysqli("localhost","root","","data") or die("Connection Failed");
	$sqlget="SELECT * FROM t1";
	$sqldata=mysqli_query($connect,$sqlget);
	$data=[];
	while ($row=mysqli_fetch_assoc($sqldata))
	{
		$data[]=$row;
	}

echo json_encode($data);
		
?>