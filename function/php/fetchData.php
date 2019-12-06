<?php

$search=null;

if (isset($_POST["search_data"])) {

	$search= $_POST['search_data'];


	$sql="SELECT file_id,file_name,office_abbreviation,sub_office_abbreviation,file_type,path FROM files
	f LEFT JOIN sub_offices s ON f.sub_office_id = s.sub_office_id
	LEFT JOIN offices o ON f.office_id = o.office_id";

$res = mysqli_query($conn,$sql);			

if ($res->num_rows > 0) {	

    while($row = mysqli_fetch_array($res)) {
        $path= $row['path'].$row['name_file'].'.'.$row['type_file'];
        $download = '<a href="'.$path.'"  class="btn btn-success" target="_blank"><span class="oi oi-cloud-download"></span> Download</a>';

        echo '
				
						<tr> 
							<td>'.$row['name_file'].' </td>
							<td>'.$row['acro_office'].' </td>
							<td>'.$row['type_file'].' </td>
							<td>'.$download.' </td>
						</tr>
					
				';

    }//while
}//if
}//isset
else {
	
}
?>