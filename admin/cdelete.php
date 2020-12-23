<?php 
require_once "connection.php";

$id = $_GET['id'];
$sql = "delete from categories where category_id=$id";
$query = mysqli_query($conn,$sql);
if($query){
?>
<script type="text/javascript"> 
			alert("Deleted Sucessfully!!"); location="vedit.php";
		</script>
	<?php }else{ ?>
 <script type="text/javascript"> 
			alert("Not Deleted !!"); location="vedit.php";

		</script>
		<?php } ?>