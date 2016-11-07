<?php
$server="localhost";
$username="root";
$password="";
$database="CEL_registration";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['Approved']) && is_array($_POST['Approved'])) 
    {  
       foreach ($_POST['Approved'] as $value)
       {
           $update="UPDATE Register SET Approved=1 WHERE Id='".$value."'";
            if (mysqli_query($conn, $update))
            {} 
            else
            {
                echo "Error updating record: " . mysqli_error($conn);   
            }
        }
    }
echo '<table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Division</th>
                    <th>Approve</th>
                    <th>Verified</th>
                </tr>';
$sql = "SELECT * FROM Register WHERE Approved=0";
$result = $conn->query($sql);
echo "djdjd";
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {   
        echo "<form method='post' action='result.php'>";
                            echo "<td>" . $row["Id"]."</td>";
                            echo "<td>" . $row["Fname"]. " " . $row["Lname"]."</td>";
                            echo "<td>" .$row["Division"]. "</td>";
                            echo "<td><input type='checkbox' name='Approved[]' value='".$row['Id']."'><td>";
                            if ($row["Verified"]==1)
                            {
                                echo "<input type='checkbox' name='Verified' value='Verified' disabled checked>Verified<br>";   
                            }
                            else
                            {
                                echo "<input type='checkbox' name='Verified' value='Verified' disabled>Verified<br>";   
                            }
                            echo "</tr>";
    }
    echo "</form>";
} 
else 
{
    echo "0 results";
}
$conn->close();
?>
<html>
<head>
    <title>Request Submitted</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <style>
        a{
            margin-left: 20px;
        }
        </style>
</head>
<body>
<div class="jumbotron" style="background-color: #1a1a1a; color: white;">
<h1 style="margin-left: 20px;">Thank You!!</h1>
</div>
<h2> Your Request has been submitted</h2>
<h4> Employees yet to be verifed are:</h4>
</body>
</html>