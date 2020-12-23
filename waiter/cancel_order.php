<?php
include_once('../connection.php');
if (isset($_GET['order_id'])){
    $order_id= $_GET['order_id'];

    $sql =   $query= "DELETE FROM order_detail WHERE order_id=$order_id;";
    $retval = mysqli_query( $conn, $sql );
        if(! $retval ) {
            die('Could not get data: ' . mysql_error());
        }else{
            echo ('<script>alert("Order Cancelled Successfully!!");
            </script>');
            header('Location: edit_order.php');

        }
}else{
    header('Location: ../index.php'); 
}
?>