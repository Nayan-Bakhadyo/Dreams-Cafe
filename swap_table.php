<?php
include_once('connection.php');
$order_id=$_GET['order_id'];
$swap_count =$_GET['swap_count'];
$table_no=$_GET['table'];
$initial_table = $_GET['init_table'];

$sql = "UPDATE order_detail SET table_no=$table_no WHERE order_id=$order_id";
if ($conn->query($sql) === TRUE) {
   
        setcookie("swap", 0, time() - (86400), "/");
        setcookie("swap", $swap_count, time() + (86400), "/");
        header( 'Location: admin/billing.php?id='.$initial_table.'&table_id='.$table_no);
  }
else{
    echo 'alert(ERROR! Could not flag on database!)';
}
?>