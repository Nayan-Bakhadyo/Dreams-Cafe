
<?php
include('connection.php');
$date=$_POST['date'];
$amount = $_POST['amount'];
$category = $_POST['category'];
echo ("processing your request......");


$sql = "INSERT INTO expense(date, amount, category) VALUES ( '$date', '$amount', '$category')";
mysqli_query($conn, $sql) or die(mysqli_error($conn));

if (mysqli_affected_rows($conn)>0) {

    echo "<script>alert('Expense Saved Successfully')
        window.location.href='incexp.php';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>