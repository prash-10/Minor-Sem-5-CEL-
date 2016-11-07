<!--  <?php

if(isset($_POST["submit1"])) 
{
    echo "hello";
    $to = $_POST["email"];
    $subject = "Verification mail for logging";

    $message = "Click on the link below for verifying mail /n ";

    $header = "This mail has been sent by CEL portal admin";

    $query = mail("$to,$subject,$message,$header");

    if($query == TRUE)
    {
        echo "Email has been sent to your specified mail";
    }
    else 
    {
        echo "System Failure. Try Again Later";
    }

}

?>
-->

<?php

include 'connection.php';

function input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST["submit1"]))
{
  $fnameErr = $lnameErr = $passErr = $emailErr = $divErr = "";
  $fname = $lname = $pass = $email = $div = "" ;

  $email=$_POST['email'];
  
  if (empty($_POST["fname"]) OR $_POST["fname"]== "" ) 
  {
    $fnameErr = "First Name is required <br><br>";
    echo $fnameErr;
  }
  else if (!preg_match("/^[a-zA-Z ]*$/",$_POST["fname"]))
  {
    $fnameErr = "Only letters and white space allowed<br><br>"; 
    echo $fnameErr;
  }
  else
  {
    $fname = input($_POST["fname"]);
  }

  if (empty($_POST["lname"]) OR $_POST["lname"]== "" )
  {
     $lnameErr = "Last Name is required <br><br>";
     echo $lnameErr;
  } 
  else if (!preg_match("/^[a-zA-Z ]*$/",$_POST["lname"])) 
  {
    $lnameErr = "Only letters and white space allowed<br><br>"; 
    echo $lnameErr;
  }
  else 
  {
     $lname = input($_POST["lname"]);
  }


  if (empty($_POST["pass"] OR $_POST["pass"] == ""))
  {
    $passErr="Please enter password";
    echo $passwordErr;
  }
  else if (strlen($_POST["pass"]) < 8 && strlen($_POST["pass"]) >= 0)
  {
    $passErr = "Your Password Must Contain At Least 8 Characters!";
    echo $passErr;
  }
  else 
  {
    $pass=input($_POST["pass"]);
  }

  if (empty($_POST["div"]) OR $_POST["div"]== "" )
  {
     $divErr = "Division is required <br><br>";
     echo $divErr;
  } 
  else
  {
    $div = input($_POST["div"]);
  }

  
if ($lnameErr == "" AND $fnameErr == "" AND $emailErr == "" AND $passErr == "" AND $divErr == "")
{

  $pass=md5($pass);
  $sql = "INSERT into Register (Fname,Lname,Id,Password,Division)
  VALUES ('$fname','$lname','$email','$pass','$div' )";

  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
  } else 
  {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
   mysqli_close($conn);
}
}
?>

<?php
date_default_timezone_set('Etc/UTC');

require 'PHPMailer/PHPMailerAutoload.php';
echo !extension_loaded('openssl')?"Not Available":"Available";
 
$mail = new PHPMailer;
 
$mail->isSMTP();
$mail->SMTPDebug = 4;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "prashantsingh1896@gmail.com";
$mail->Password = "";
 
$mail->setFrom = '1prashant1singh1@gmail.com';
$mail->FromName = 'Prashant Singh';
$mail->addAddress('prashantsingh1896@gmail.com', 'Prash');
 
$mail->addReplyTo('prashantsingh1896@gmail.com', 'Prash');
 
$mail->WordWrap = 50;
$mail->isHTML(true);
 
$mail->Subject = 'Password Verification';
$mail->Body    = 'Click on the link 
<a href = "https://www.google.com/settings/security/lesssecureapps"> Here </a>';
 
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
}
 else{
echo 'Message has been sent';
}
echo "<script>window.location.assign('home.php');</script>"
?>