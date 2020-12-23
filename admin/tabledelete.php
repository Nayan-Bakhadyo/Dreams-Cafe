<?php 
require_once "connection.php";

$id = $_GET['id'];
$sql = "delete from table_detail where table_no=$id";
$query = mysqli_query($conn,$sql);
if($query){
?>
<script type="text/javascript"> 
			alert("Deleted Sucessfully!!"); location="table.php";
		</script>
	<?php }else{ ?>
 <script type="text/javascript"> 
			alert("Not Deleted !!"); location="table.php";

		</script>
		<?php } ?>