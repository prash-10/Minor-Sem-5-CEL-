<?php 
			session_start();
			$x=$_POST['val'];
			//echo "dvjbjfnb".$x;
			if($_SESSION['count']>0){

				$_SESSION['data']=$_SESSION['data'].'/'.$x;
				$_SESSION['count']++;
				//echo $_SESSION['data'].'<br/>';
			}
			
			include 'create_dir.php';
			createDirectory($_SESSION['data']);

?>