<?php 
require_once "connection.php";

$id = $_GET['id'];
$sql = "delete from specials where special_id=$id";
$query = mysqli_query($conn,$sql);
if($query){
?>
<script type="text/javascript"> 
			alert("Deleted Sucessfully!!"); location="editspec.php";
		</script>
	<?php }else{ ?>
 <script type="text/javascript"> 
			alert("Not Deleted !!"); location="editspec.php";

		</script>
		<?php } ?>