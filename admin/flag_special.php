<?php
include_once('connection.php');
$special_id=$_GET['special_id'];
$flag= $_GET['flag'];
// $from=$_GET['from'];
// echo $from;

$sql = "UPDATE specials SET flag=$flag WHERE special_id=$special_id";
if ($conn->query($sql) === TRUE) {
        header('Location: vspecial.php');
}else{
    echo 'alert(ERROR! Could not change flag on database!)';
}
?>