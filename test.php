<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div>
	<!-- 	<H1 style="color:#3498db";>PADMIN </H1>
		<H2 style="color:#16a085";>Institutional </H1>
		<h3 style="color: #e74c3c">Directives</h3> -->
		<?php
		include 'function/php/core.php';
		date_default_timezone_set("Asia/Singapore");
		echo date("Y/m/d h:i A");
		/*	$path="";
		   $sql = "SELECT * FROM vw_file where uid=11";
                  $res = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_array($res)){
                 	 	$path=$row['path'].$row['name_file'].'.'.$row['type_file'];
                  		echo $path;
                  }
                  echo '<br><a href="'.$path.'">South Cotabato Investment Code-2019</a><br><br>';

*/
		/*		$ppdo_path="";
				$error_id="";
		         $sql = "SELECT * FROM tbl_path where uid_path=7";
                  $res = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_array($res)){
                  		$ppdo_path=$row['name_path'];
                  		$error_id=$row['uid_path'];
                  }

                 */


/*		$dir = dirname(__FILE__).$ppdo_path;
		$scn = array_diff(scandir($dir), array('..', '.'));
		foreach ($scn as $f ) {
			echo substr($f,0,-4)."<br>";
			echo $f."<br>";
		}
		echo $dir;
		echo "<br><br>";
		echo '<h1> Path id ='.$error_id.'</H1>';
		echo "<br><br>";
		echo ",,pdf,".$error_id.",2";*/
		?>

	<!-- 	<?php
		$dir1 = dirname(__FILE__).'\PGSC\data\PADMIN\Provicial Resolutions';
		$scn2 = array_diff(scandir($dir1), array('..', '.'));
		foreach ($scn2 as $f1 ) {
			echo substr($f1,0,-4)."<br>";
		}
		echo "<br>";
		?>
		<h3 style="color: #e74c3c">Provincial Governors Executive Orders</h3> -->
	

	<!-- 	<?php
		$dir2 = dirname(__FILE__).'\PGSC\data\PADMIN\Provincial Governors Executive Orders';
		$scn2 = array_diff(scandir($dir2), array('..', '.'));
		foreach ($scn2 as $f2 ) {
			echo substr($f2,0,-4)."<br>";
		}
		?> -->
		
	</div>

	<div>

	</div>
	        <script src="assets/jquery/jquery-3.4.1.js"></script>
	        <script type="text/javascript">
	        	$(document).ready(function() {

	        	} );
	        </script>
</body>
</html>
