<?php 
function createDirectory($next)
{	
	$i=0;
	$list=array();
	$current =getcwd();
	//echo 'current '.$current.'<br/>';
	$dir=$current.$next;
	//echo 'next '.$next.'<br/>';
	//echo 'dir '.$dir.'<br/>';
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	//echo 'actual '.$actual_link.'<br/>';
	$num=strripos($actual_link,'/');
	//echo $num.'<br/>';
	$path=substr($actual_link,0,$num);
	//echo $path.'<br/>';
	if (is_dir($dir)) 
	{
	    if ($dh = opendir($dir)) 
	    {
	        while (($file = readdir($dh)) !== false) 
	        {	
	        	if($i==0 || $i==1) {
	        		$i++;
	        		continue; 
	        	}
		            $list[$i]=$file;
		            $x="<a class='btn btn-warning div' onclick='setSession(this.id, this.innerHTML)' id='".$path.$next.'/'.$file."'>".$file."</a><br />";
		            echo $x;
		            $i++;
	        	
	        }
	    }
	}
}

?>
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/bootstrap.css" />
		<style>
	    .div{
	      margin: 10px;
	      width: 200px;
	      z-index: 10;
	    }
	    #heading{
	    	margin-left: 20px;
	    }
	  	</style>
		<script src="js/jquery.js"></script>
		<script>
			function setSession(x,y)
				{	
//					alert(x);
					z=y.split('.').pop();

					if(z=='docx' || z=='pdf' || z=='doc')
						window.open(x);
					
					$("#heading").html(y);
					$(".div").remove();
					$.ajax({
				        type: 'POST',
				        url: 'session_set.php',
				        data: { val: y },
				        success: function(response) {
				        	$('#result').html(response);
				            $('#result').css({'margin-top':'-100px'});
				        }
				    });		
			}
		</script>
	</head>
	<body>
	</body>
</html>