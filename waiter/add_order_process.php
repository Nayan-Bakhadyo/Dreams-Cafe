<?php
include_once("../connection.php");
$food_id=$_GET['food_id'];
$q=$_POST['quantity'];
$table_no= $_POST['table_no'];
$remark= $_POST['remark'];

$sql = "INSERT INTO order_detail (table_no, food_id, quantity,remark) VALUES ($table_no, $food_id,$q, '$remark')";
$retval = mysqli_query( $conn, $sql );
if(! $retval ) {
die('Could not update data: ' . mysql_error());
}else{
    header('Location: index.php');
}
?>