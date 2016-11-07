<?php
include 'connection.php';
$check=0;
session_start();
$_SESSION['count']=0;
function print_table()
{ 
    $admin_check="SELECT gpass FROM Admin";
    $res = $GLOBALS['conn']->query($admin_check);
    
    if ($res->num_rows > 0) 
    {   
        while($row = $res->fetch_assoc()) 
        {
            
            if (isset($_POST["graph"]))
            {
                if ($row["gpass"]==$_POST["graph"])
                {
                    $GLOBALS['check']=1;
                    $sql = "SELECT * FROM Register WHERE Approved=0";
                    $result = $GLOBALS['conn']->query($sql);
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
                    } 
                    else 
                    {
                        echo "0 results";
                    }                
                }
                 else{
                        echo "Sorry, only Admin can Login";
                    }             
            }
        }
        
    }   
        $GLOBALS['conn']->close();
    }
?>
<html>
<head>
    <title>Pending Requests</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <style>
        a{
            margin-left: 20px;
        }
        </style>
</head>
<body>
<div class="jumbotron" style="background-color: #1a1a1a; color: white;">
<h1 style="margin-left: 20px;">Welcome Admin!!</h1>
</div>

<table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Division</th>
                    <th>Approve</th>
                    <th>Verified</th>
                </tr>
                <tr id="table">
                    <?php
                        print_table();
                    ?>
</table>
<button type='submit' class='btn btn-success'>Submit</button></form>
<?php 
if ($GLOBALS['check']==1){
    echo '<a type="button" class="btn btn-primary" href="readdir.php">View Files</a>';
    echo '<a type="button" class="btn btn-danger" href="log.php">View Log</a>';       
}
?>
</body>
</html>