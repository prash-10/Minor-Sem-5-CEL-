<?php
	include 'connection.php';
	$shift=$_POST['shift'];
	$CPS=$_POST['CPS'];
	$words=$_POST['words'];
	session_start();
	$id=$_SESSION['user_id'];
	
	$sql="UPDATE register SET shift='$shift',cps='$CPS',words='$words' WHERE Id='$id'";
	

	//echo mysqli_query($conn, $sql);
	if (mysqli_query($conn, $sql)) 
	{
	    echo "Record updated successfully";
	} 
	else 
	{
	    echo "Error updating record: " . mysqli_error($conn);
	}

	mysqli_close($conn);
	echo $sql;
?>