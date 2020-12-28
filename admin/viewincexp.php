<?php include('header.php');
include('sidebar.php'); ?>
<div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0" style="display:inline">Income Table</h5>
                                <a class="btn btn-primary" href="editincexpui.php"
                                onclick="return confirm('You can only edit last 5 entries. Do you still want to proceed?')"
                                style="color:white; float:right; padding: 3px 8px ;">EDIT</a>
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Category</th>
                                                <th>Amount</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>                           
                                            <?php 
                                            include('connection.php');
                                            $sql = "select * from income";
                                            $query = mysqli_query($conn,$sql);
                                            if (mysqli_num_rows($query) > 0) {              
                                                while($row = mysqli_fetch_assoc($query)) {                                             
                                            ?>
                                            <tr>
                                                <td><?php echo $row['date']; ?></td>
                                                <td><?php echo $row['category']; ?></td>
                                                <td><?php echo $row['amount']; ?></td>
                                               
                                               
                                            </tr>
                                                <?php }} ?>
                                        </tbody>
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0" style="display:inline">Expense Table</h5>
                                <a class="btn btn-primary btnedit"  href="editincexpui.php"
                                style="color:white; float:right; padding: 3px 8px ;">EDIT</a>
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                    <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Category</th>
                                                <th>Amount</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>                           
                                            <?php 
                                            include('connection.php');
                                            $sql = "select * from expense";
                                            $query = mysqli_query($conn,$sql);
                                            if (mysqli_num_rows($query) > 0) {              
                                                while($row = mysqli_fetch_assoc($query)) {                                             
                                            ?>
                                            <tr>
                                                <td><?php echo $row['date']; ?></td>
                                                <td><?php echo $row['category']; ?></td>
                                                <td><?php echo $row['amount']; ?></td>
                                                
                                               
                                            </tr>
                                                <?php }} ?>
                                        </tbody>
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <div class="goback"><a href="incexpui.php">&#8592; Go Back</a></div>
</div></div>

<style>
 .goback{
            font-size:20px;
     
            margin-left:12px;
        }
  
</style>
                    <?php include('footer.php'); ?>