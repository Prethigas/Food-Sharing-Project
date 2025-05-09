	<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
		$id=$_REQUEST['id'];
		$qry1=mysqli_query($conn,"delete from tregister where id='$id'");
	if($qry1 ){?>
		 <script> alert('Volunteer removed successfully')
window.location.href=(" viewv.php");</script>
<?php } ?>
		
		
