<?php
require_once 'core.php';

$search=null;

if (isset($_POST["search_data"])) {

	$search= $_POST['search_data'];


$sql="SELECT * FROM vw_file WHERE name_file LIKE '%$search%' OR acro_office LIKE '%$search%' 
OR name_sector LIKE '%$search%' OR year_file LIKE '%$search%' OR type_file LIKE '%$search%'";

$res = mysqli_query($conn,$sql);

if ($res->num_rows > 0) {

    while($row = mysqli_fetch_array($res)) {
        $path= $row['path'].$row['name_file'].'.'.$row['type_file'];
        $download = '<a href="'.$path.'"  class="btn btn-success" target="_blank"><span class="oi oi-cloud-download"></span> Download</a>';

        echo '
				
						<tr> 
							<td>'.$row['name_file'].' </td>
							<td>'.$row['acro_office'].' </td>
							<td>'.$row['name_sector'].' </td>
							<td>'.$row['type_file'].' </td>
							<td>'.$row['detail_path'].' </td>
							<td>'.$download.' </td>
						</tr>
					
				';

    }//while
}//if
}//isset
else {
	
}
?>