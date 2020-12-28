<?php
include_once('connection.php');
$order_id=$_GET['order_id'];
$flag= $_GET['flag'];
$bill =$_GET['bill'];
$table_no=$_GET['table'];
// $from=$_GET['from'];
// echo $from;

$sql = "UPDATE order_detail SET flag=$flag WHERE order_id=$order_id";
if ($conn->query($sql) === TRUE) {
    if($flag==1){
        header('Location: kitchen/kitchen.php?order_id='.$order_id );
    }
     if($flag ==2){
        setcookie("bill", 0, time() - (86400), "/");
        setcookie("bill", $bill, time() + (86400), "/");
        header( 'Location: admin/billing.php?id='.$table_no);
  }
}else{
    echo 'alert(ERROR! Could not flag on database!)';
}
?>