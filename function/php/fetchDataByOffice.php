<?php


	$search = mysqli_real_escape_string($conn,$_GET['office']);

	$sql="SELECT file_name,office_name,office_abbreviation,sub_office_name,sub_office_abbreviation,file_type,path FROM files
	f LEFT JOIN sub_offices s ON f.sub_office_id = s.sub_office_id LEFT JOIN offices o ON f.office_id = o.office_id where office_abbreviation='$search'";

$res = mysqli_query($conn,$sql);			

if ($res->num_rows > 0) {	

    while($row = mysqli_fetch_array($res)) {
        
        $path= file_path ($s3,$environment,$file_url,"").$row['path'].$row['file_name'].'.'.$row['file_type'];
        $download = '<a href="'.$path.'"  class="btn btn-success" target="_blank"><span class="oi oi-cloud-download"></span> Download</a>';
  
        echo '
						<tr> 
							<td>'.$row['file_name'].' </td>
							<td>'.$row['file_type'].' </td>
							<td>'.$download.' </td>
						</tr>
					
				';

    }//while
}//if

else {
	
}
?>