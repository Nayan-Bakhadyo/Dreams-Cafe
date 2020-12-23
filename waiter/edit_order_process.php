<?php
include_once("../connection.php");
$order_id=$_GET['order_id'];
$q=$_POST['quantity'];
$table_no= $_POST['table_no'];
$remark= $_POST['remark'];

$sql = "UPDATE order_detail SET table_no=$table_no, quantity= $q, remark='$remark' WHERE order_id= $order_id;";
$retval = mysqli_query( $conn, $sql );
if(! $retval ) {
die('Could not update data: ' . mysql_error());
}else{
    header('Location: edit_order.php');
}
?>