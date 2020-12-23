<?php include('header.php');
include('sidebar.php'); ?>
<div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Category Table</h5>
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Category</th>
                                                <th>Operation</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>                           
                                            <?php 
                                            include('connection.php');
                                            $sql = "select * from categories";
                                            $query = mysqli_query($conn,$sql);
                                            if (mysqli_num_rows($query) > 0) {              
                                                while($row = mysqli_fetch_assoc($query)) {                                             
                                            ?>
                                            <tr>
                                                <td><?php echo $row['category_name']; ?></td>
                                                <td><a type="submit" href="editcat.php?id=<?php  echo $row['category_id']; ?>">
                                                EDIT</a> || <a href="cdelete.php?id=<?php  echo $row['category_id']?>" 
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
                                <h5 class="mb-0">Food Table</h5>
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Category</th>
                                                <th>Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>                           
                                            <?php 
                                             include('connection.php');
                                            $sql = "select * from foods";
                                            $query = mysqli_query($conn,$sql);
                                            if (mysqli_num_rows($query) > 0) {              
                                                while($row = mysqli_fetch_assoc($query)) {                                             
                                            ?>
                                            <tr>
                                                <td><?php echo $row['food_name']; ?></td>
                                                <td><?php echo $row['food_price']; ?></td>
                                                <td><?php echo $row['food_category']; ?></td>
                                                <td><a type="submit" href="editfood.php?id=<?php  echo $row['food_id']; ?>">
                                                EDIT</a> || <a href="fdelete.php?id=<?php  echo $row['food_id']?>" 
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
                    <div class="goback"><a href="editmenu.php">&#8592; Go Back</a></div>
</div></div>

<style>
 .goback{
            font-size:20px;
     
            margin-left:12px;
        }
</style>
                    <?php include('footer.php'); ?>