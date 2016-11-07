<?php

include "connection.php";

echo $_POST['graph'];
$check="SELECT COUNT(*) FROM admin WHERE Gpass = $gpass";

if (mysqli_query($con,$check)>=1)
{
    echo "User Already in Exists<br/>";
}
else
{
   
   echo "Error <br/>";
 
}

?>


