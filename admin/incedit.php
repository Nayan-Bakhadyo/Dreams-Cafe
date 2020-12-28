<?php 
include('header.php');
include('sidebar.php');
include('connection.php');

if(isset($_POST['submit'])){
    $id=$_GET['id'];
    $category = mysqli_real_escape_string($conn,$_POST['category']);
    $amount = $_POST['amount'];

    $sqledit= "update income set amount=$amount, category='$category' where date='$id'  ";
                      
    $query = mysqli_query($conn,$sqledit);
if($query){

?>
<script type="text/javascript"> 
alert("Edited!!"); location="editincexpui.php";
</script>

<?php

}else{
?>
<script type="text/javascript"> 
alert("Cannot Edit"); 
location="editincexpui.php";
</script>

<?php

} 
  }
        $id=$_GET['id'];
        $sql= "select * from income where date='$id' ";
        $query1 = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($query1);
      
   ?>

<div class="row" style="margin-bottom:20px;">


                    <div class="container-fluid" style="width:400px; height:auto; float:left; display:inline">
                        <div class="column">
                                <form name="income_form" action="" method="post">
                                        <div><i style="font-size:40px; margin-bottom:20px;" class="fas fa-file-invoice-dollar"></i></div>
                                        <h5> Daily Income </h5>
                                        <div class="form-group"><input type="date" class="form-control" name="date" value="<?php echo $id; ?>" required="" placeholder="Date" /></div>
                                        <div class="form-group"><input type="number" class="form-control" name="amount" value="<?php echo $row['amount']; ?>" required="" placeholder="Amount" /></div>
                                        <div class="form-group"><input type="text" class="form-control" name="category" value="<?php echo $row['category']; ?>" required="" placeholder="Category" /></div>
                                        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button></div>
                                        </form>
                                        </div>
                                </div>
                        </div>

<?php 
include('footer.php');
?>
