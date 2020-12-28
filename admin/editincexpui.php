<?php include('header.php');
include('sidebar.php'); ?>
<div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Income Table</h5>
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Category</th>
                                                <th>Ammount</th>
                                                <th>Operation</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>                           
                                            <?php 
                                            include('connection.php');
                                            $sql = "select * from income ORDER BY date DESC LIMIT 5";
                                            $query = mysqli_query($conn,$sql);
                                            if (mysqli_num_rows($query) > 0) {              
                                                while($row = mysqli_fetch_assoc($query)) {                                             
                                            ?>
                                            <tr>
                                                <td><?php echo $row['date']; ?></td>
                                                <td><?php echo $row['category']; ?></td>
                                                <td><?php echo $row['amount']; ?></td>
                                                <td><a type="submit" href="incedit.php?id=<?php  echo $row['date']; ?>">
                                                EDIT</a> || <a href="incdelete.php?id=<?php  echo $row['date']?>" 
                                                onclick="return confirm('Are you sure?')" >DELETE</></a></td> 
                                               
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
                                <h5 class="mb-0">Expense Table</h5>
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                    <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Category</th>
                                                <th>Ammount</th>
                                                <th>Operation</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>                           
                                            <?php 
                                            include('connection.php');
                                            $sql = "select * from expense ORDER BY date DESC LIMIT 5";
                                            $query = mysqli_query($conn,$sql);
                                            if (mysqli_num_rows($query) > 0) {              
                                                while($row = mysqli_fetch_assoc($query)) {                                             
                                            ?>
                                            <tr>
                                                <td><?php echo $row['date']; ?></td>
                                                <td><?php echo $row['category']; ?></td>
                                                <td><?php echo $row['amount']; ?></td>
                                            <td><a type="submit" href="expedit.php?id=<?php  echo $row['date']; ?>">
                                                EDIT</a> || <a href="expdelete.php?id=<?php  echo $row['date']?>" 
                                                onclick="return confirm('Are you sure?')" >DELETE</></a></td> 
                                               
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
                    <div class="goback"><a href="viewincexp.php">&#8592; Go Back</a></div>
</div></div>

<style>
 .goback{
            font-size:20px;
     
            margin-left:12px;
        }
</style>
                    <?php include('footer.php'); ?>