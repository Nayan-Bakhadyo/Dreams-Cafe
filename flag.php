<?php
include_once('connection.php');
$order_id=$_GET['order_id'];
$flag= $_GET['flag'];
// $from=$_GET['from'];
// echo $from;

$sql = "UPDATE order_detail SET flag=$flag WHERE order_id=$order_id";
if ($conn->query($sql) === TRUE) {
    if($flag==1){
        header('Location: kitchen/kitchen.php?order_id='.$order_id );
    }
    else if($flag ==2){
        header('Location: admin/admin.php');
    }
}else{
    echo 'alert(ERROR! Could not flag on database!)';
}
?>