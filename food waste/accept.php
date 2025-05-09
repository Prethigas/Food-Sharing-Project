<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
		$tid=$_SESSION['tid'];
		$id=$_REQUEST['id'];
		$qry1=mysqli_query($conn,"update  food  set st='1' where id='$id'");
		$q=mysqli_query($conn,"insert into stt values('','$id','$tid','1')");
	if($qry1 && $q){?>
		 <script> alert('Accepted successfully')
window.location.href=(" trusthome.php");</script>
<?php } ?>
		
		
