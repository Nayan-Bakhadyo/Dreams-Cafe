<?php
include_once('connection.php');

$sql = 'SELECT * FROM order_detail';
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysqli_fetch_array($retval)) {
        $sql2 = 'SELECT food_name FROM foods WHERE food_id=1';
            $result=mysqli_query( $conn, $sql2 );
            $food_name= mysqli_fetch_array($result);
   }
   
   echo "Fetched data successfully\n";
   
   mysqli_close($conn);

?>