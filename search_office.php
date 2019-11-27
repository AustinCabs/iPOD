<?php include 'config/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.3.0/css/fixedColumns.dataTables.min.css">
  <link rel="stylesheet" href="<?php assets($s3,"assets/bootstrap-4.3.1/css/bootstrap.min.css");?>">
  <link href="<?php assets($s3,"assets/open-iconic-master/font/css/open-iconic-bootstrap.css");?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php assets($s3,"function/css/mycss.css");?>">
  <link rel="stylesheet" href="<?php assets($s3,"function/css/AdminLTE.css");?>">

</head>
<body>
    
    <div class="col-md-12 col-md-offset-2">
        <div class="box box-primary ">
            
            <div class="box-header"> 
              <?php  
              /*    require_once 'function/php/core.php';*/
                  $office= $_GET['office'];
                  $sql1="SELECT name_office,name_sector FROM tbl_office o inner join tbl_sector s on o.uid_sector = s.uid_sector 
                  where o.acro_office = '$office' ";
                  $res1 = mysqli_query($conn,$sql1);
                   while($row1 = mysqli_fetch_array($res1)) {
                        echo ' <H3> '.$row1["name_office"].' <BR> <h4>'.$row1["name_sector"].' Data</h4></H3>';
                   }

              ?>
           
         <!--    <a id="back"  class="btn btn-defualt" ><span class="oi oi-arrow-circle-left"></span> Search Again </a>  -->
            </div>

                <div class="box-body">
                    <table id="example" class="stripe row-border order-column" >
                        <thead>
                        <tr>
                          <th>File Name</th>
                          <th>Details</th>
                          <th>file type</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                <?php  include 'function/php/fetchDatabyOffice.php'?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/fixedcolumns/3.3.0/js/dataTables.fixedColumns.min.js"></script>
   <script >
    $(document).ready(function() {
   /*   var table = $('#example').removeAttr('width').DataTable( {
        responsive: true,
        scrollY:  "400px",
        scrollX:        true,
        scrollCollapse: true,
        paging: false,
        fixedColumns:   {
          leftColumns: 0,
          rightColumns: 1
        },
        columnDefs: [
            { "width": "20%" },
                null,
                null,
                null,
                null,
                nul
        ]

      } );// table*/
      $('#example').DataTable(
      );

    } );//document reacy
   </script>

</body>
</html>