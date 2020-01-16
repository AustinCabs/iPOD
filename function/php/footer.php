
<!-- jQuery -->
<script src="<?php assets($s3,$environment,"../assets/AdminLTE/plugins/jquery/jquery.min.js");?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php assets($s3,$environment,"../assets/AdminLTE/plugins/jquery-ui/jquery-ui.min.js");?>"></script>

<!-- Bootstrap 4 -->
<script src="<?php assets($s3,$environment,"../assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js");?>"></script>
<!-- overlayScrollbars -->
<script src="<?php assets($s3,$environment,"../assets/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js");?>"></script>
<!-- AdminLTE App -->
<script src="<?php assets($s3,$environment,"../assets/AdminLTE/dist/js/adminlte.js");?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php assets($s3,$environment,"../assets/AdminLTE/dist/js/pages/dashboard.js");?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php assets($s3,$environment,"../assets/AdminLTE/dist/js/demo.js");?>"></script>
<script type="text/javascript">
	window.addEventListener("beforeunload", function (e) {
  var confirmationMessage = "Are want to change window? or Want to Close tab ? Dont forget to signout";

  (e || window.event).returnValue = confirmationMessage; //Gecko + IE
  return confirmationMessage;                            //Webkit, Safari, Chrome
});
</script>