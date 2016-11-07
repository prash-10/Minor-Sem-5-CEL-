<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <style>
    .div{
      margin: 10px;
      width: 100px;
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

<body>
<div class="jumbotron">
  <h1>View Files</h1>
</div>
<div style="margin-left: 200px;">
  <h2>Divisions</h2>
  <a class="btn btn-warning div" href="Test Project/ECD"><span><i class="fa-folder-open"></i></span>ECD</a><br />
  <a class="btn btn-warning div">FAD</a><br />
  <a class="btn btn-warning div">HRD</a><br />
  <a class="btn btn-warning div">MED</a><br />
  <a class="btn btn-warning div">MMD</a><br />
  <a class="btn btn-warning div">SPD</a><br />
  <a class="btn btn-warning div">SPV</a><br />
  <form>
    <input type="text" size="30" onkeyup="showResult(this.value)" placeholder="Type here" >
    <button type="Submit" class="btn btn-primary"> Submit </button>
    <div id="livesearch"></div>
  </form>
  </div>
</body>
</html>