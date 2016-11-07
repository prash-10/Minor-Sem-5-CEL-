<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <style type="text/css">
  	#livesearch{
  		margin-left: 850px;
  		margin-right: 100px;
  		background-color: white;
  		border-radius: 5px; 
  	}
  	#search_box{
  		margin-left: 850px;
  	}
  </style>
  <script>
  function showResult(str) {
    if (str.length==0) { 
      document.getElementById("livesearch").innerHTML="";
      document.getElementById("livesearch").style.border="0px";
      return;
    }
    if (window.XMLHttpRequest) {
      xmlhttp=new XMLHttpRequest();
    } else { 
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("livesearch").innerHTML=this.responseText;
        document.getElementById("livesearch").style.border="1px solid #A5ACB2";
      }
    }
    xmlhttp.open("GET","search.php?q="+str,true);
    xmlhttp.send();
  }
  </script>
</head>
<div class="container">
<div class="jumbotron" style="position: absolute; left: 0; top: 0; width: 100%; background-color: #1a1a1a; color: white;">
	<h1 style="margin-left: 20px;">TEST PROJECT</h1>
	<form class="form-inline">
	    <input class="form-control" type="text" size="30" onkeyup="showResult(this.value)" id="search_box" placeholder="Search for file" >
	    <button type="Submit" class="btn btn-primary"> Submit </button>
	    <div id="livesearch"></div>
  	</form>
</div>
</div>
<body style="margin-top: 250px;">
<?php
include "create_dir.php";
session_start();
if ($_SESSION['count']==0)
{
  	$_SESSION['data']='/TEST PROJECT';
  	$_SESSION['count']++;
}
createDirectory($_SESSION['data']);
?>
 
<div id="result"></div>
</body>
</html>