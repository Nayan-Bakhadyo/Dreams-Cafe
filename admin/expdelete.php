<?php 
require_once "connection.php";

$id = $_GET['id'];
$sql = "delete from expense where date='$id'";
$query = mysqli_query($conn,$sql);
if($query){
?>
<script type="text/javascript"> 
			alert("Deleted Sucessfully!!"); location="editincexpui.php";
		</script>
	<?php }else{ ?>
 <script type="text/javascript"> 
			alert("Not Deleted !!"); location="editincexpui.php";

		</script>
		<?php } ?>