<?php include 'config/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

   <link href="<?php assets($s3,"assets/open-iconic-master/font/css/open-iconic-bootstrap.css");?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php assets($s3,"function/css/mycss.css");?>">
    <link rel="stylesheet" href="<?php assets($s3,"function/css/AdminLTE.css");?>">

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
                            <th>Details</th>
                            <th width="5%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                <?php  include 'function/php/fetchData.php'?>
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