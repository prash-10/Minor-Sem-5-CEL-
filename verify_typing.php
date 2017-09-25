<?php
$error=0.3;
session_start();
//echo $_POST['CPS'];
$id=$_SESSION['id'];
$current_cps=$_POST['CPS'];
$current_words=$_POST['words'];
$current_shift=$_POST['shift'];
include 'connection.php';

$sql="SELECT * FROM register WHERE Id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
	$row = mysqli_fetch_assoc($result);
    $cps= $row["cps"];
    $words=$row['words'];
    $shift=$row['shift'];    
} 
else 
{
    echo "0 results";
}
function CPSChecker($current_cps,$cps){

	if($current_cps>$cps)
	{
		$limit=1+$GLOBALS['error'];
		if($current_cps < ($limit*$cps))
			$cps_check=1;
		else
			$cps_check=0;
	}

	else if($current_cps < $cps)
	{
		$limit=1-$GLOBALS['error'];
		if($current_cps > ($limit*$cps))
			$cps_check=1;
		else
			$cps_check=0;
	}
	else
		$cps_check=1;

	return $cps_check;
}

function shiftChecker($current_shift,$shift){
	if($current_shift==$shift)
		$shift_checker=1;
	else 
		$shift_checker=0;

	return $shift_checker;
}

function wordsChecker($current_words,$words){
	$words_array=explode("_",$words);
	$current_words_array=explode("_",$current_words);
	$words_check_array=array();
	for ($i=0;$i<9;$i++)
	{
		if($current_words_array[$i] > $words_array[$i])
		{
			$limit=1+$GLOBALS['error'];
			if($current_words_array[$i] < ($words_array[$i]*$limit))
				$words_check_array[$i]=1;
			else
				$words_check_array[$i]=0;
		}
		else if($current_words_array[$i] < $words_array[$i])
		{
			$limit=1-$GLOBALS['error'];
			if($current_words_array[$i] > ($words_array[$i]*$limit))
				$words_check_array[$i]=1;
			else
				$words_check_array[$i]=0;	
		}
		else
			$words_check_array[$i]=1;
	}

	return $words_check_array;
}
$words_check_array=array();
$cps_check=CPSChecker($current_cps,$cps);
$shift_checker=shiftChecker($current_shift,$shift);
$words_check_array=wordsChecker($current_words,$words);

/*echo $cps_check;
echo "<br>";
echo $shift_checker;
echo "<br>";
echo implode("_",$words_check_array);*/
$count=0;
for ($j=0;$j<9;$j++)
{
	if($words_check_array[$j]==1)
		$count++;
}

function updateTable($words,$current_words,$cps,$current_cps)
{	
	$id=$GLOBALS['id'];
	$conn=$GLOBALS['conn'];
	$words_array=explode("_",$words);
	$current_words_array=explode("_",$current_words);
	$new_cps=(floatval($cps)+floatval($current_cps))/2;
	$new_words=array();
	for($i=0;$i<9;$i++)
	{
		$new_words[$i]=($words_array[$i]+$current_words_array[$i])/2;
	}
	$words_string=implode("_",$new_words);
	$query="UPDATE register SET cps='$new_cps',words='$words_string' WHERE Id='$id'";
	if (mysqli_query($conn, $query)) 
	{
	    //echo "Record updated successfully";
	} 
	else 
	{
	    echo "Error updating record: " . mysqli_error($conn);
	}

	mysqli_close($conn);	
}
//echo $count;

if($cps_check==1 and $shift_checker and $count>4)
{
	echo "Login Success";
	updateTable($words,$current_words,$cps,$current_cps);
}
else
	echo "Login Failed";	
?>