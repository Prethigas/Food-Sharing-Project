	<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
		$tid=$_SESSION['tid'];
		$id=$_REQUEST['id'];
		$qry1=mysqli_query($conn,"update  food  set vid='' where id='$id'");
		$q=mysqli_query($conn,"insert into stt values('','$id','$tid','2')");
	if($qry1 && $q){?>
		 <script> alert('Rejected successfully')
window.location.href=(" trusthome.php");</script>
<?php } ?>
		