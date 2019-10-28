<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

   <link href="assets/open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">
   <link rel="stylesheet" href="assets/animate.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="function/css/mycss.css">
    <link rel="stylesheet" href="function/css/AdminLTE.css">

</head>
<body>
    
    <div class="col-md-12 col-md-offset-2">
        <div class="box box-primary ">
            
            <div class="box-header"> 
            <a id="back"  class="btn btn-defualt" ><span class="oi oi-arrow-circle-left"></span> Search Again </a> 
            </div>

                <div class="box-body">
                    <table id="example" class="table table-striped table-bordered"  style="width:100%">
                        <thead>
                        <tr>
                            <th>File Name</th>
                            <th>Office</th>
                            <th>Sector</th>
                            <th>file type</th>
                            <th>file size</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            	<tr>
                            		<td>secondary gad related data</td>
                            		<td>PPO</td>
                            		<td>Social</td>
                            		<td>odt</td>
                            		<td>61kb</td>
                            		<td>
                            			<a href="sample/secondary gad related data.odt" class="btn btn-success"><span class="oi oi-cloud-download"></span></a>
                            			<a href="Viewer/#../sample/secondary gad related data.odt" target="_blank" class="btn btn-primary"><span class="oi oi-eye"></span></a>
                            		</td>
                            	</tr>

                            	<tr>
                            		<td>SoCot Demographic Presentation</td>
                            		<td>PPO</td>
                            		<td>Social</td>
                            		<td>odp</td>
                            		<td>7.6mb</td>
                            		<td>
                            			<a href="sample/SoCot Demographic Presentation.odp" class="btn btn-success"><span class="oi oi-cloud-download"></span></a>
                            			<a href="Viewer/#../sample/SoCot Demographic Presentation.odp" target="_blank" class="btn btn-primary"><span class="oi oi-eye"></span></a>
                            		</td>
                            	</tr>

                            	<tr>
                            		<td>Statement of Comparison of Budget and Actual Amount</td>
                            		<td>PPO</td>
                            		<td>Social</td>
                            		<td>ods</td>
                            		<td>20kb</td>
                            		<td>
                            			<a href="sample/Statement of Comparison of Budget and Actual Amount.ods" class="btn btn-success"><span class="oi oi-cloud-download"></span></a>
                            			<a href="Viewer/#../sample/Statement of Comparison of Budget and Actual Amount.ods" target="_blank" class="btn btn-primary"><span class="oi oi-eye"></span></a>
                            		</td>
                            	</tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
   <script >
       $(document).ready(function() {
           $('#example').DataTable(
           );

           $("#back").click(function(){
            window.location.href="pgscois.php";
            }); 
       } );
   </script>

</body>
</html>