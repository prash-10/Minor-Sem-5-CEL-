<?php

include "connection.php";

$check="SELECT * FROM admin";

$res=$conn->query($check);
if ($res->num_rows > 0) 
    {
        while($row = $res->fetch_assoc())  
        {
        	if (isset($_POST["Id"]))
    		{
    			if (($row["Id"]==$_POST["Id"]) && ($row["Password"]==md5($_POST["password"])))
                {
                	include '2way.php';
                }

                else{
                        echo "Sorry, only Admin can Login";
                    }
            }
        }
    }
?>


