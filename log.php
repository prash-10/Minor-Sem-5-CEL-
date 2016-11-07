<?php
include 'connection.php';
echo '<table class="table table-striped">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>';
$query="SELECT email,name,date,time FROM log Order By date DESC, time DESC";
$results = mysqli_query($conn,$query);

while ($row = mysqli_fetch_assoc($results)) {
    
    	echo '<tr>';
    	echo "<td>" . $row["name"]."</td>";
        echo "<td>" . $row["email"]."</td>";
        echo "<td>" .$row["date"]. "</td>";
        echo "<td>" .$row["time"]. "</td>";
    	echo '</tr>';
       
}

?>
<html>
<head>
    <title>Log Files</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <style>
        a{
            margin-left: 20px;
        }
        </style>
</head>
<body>
<div class="jumbotron" style="background-color: #1a1a1a; color: white;">
<h1 style="margin-left: 20px;">Log Files</h1>
</div>
</body>
</html>