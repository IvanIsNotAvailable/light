<main>
    <div class="card table-card" style="height: 100%;">
        <div class="card-header">Information table of students who completed class</div>
        <div class="card-body">
            <table class="display">
                <thead>
                    <tr>
                        <th>Stu.No</th>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Grade</th>
                        <th>Student Ph.no</th>
                        <th>Guardian</th>
                        <th>Guardian Ph.no</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include_once('../config/dbcon.php');
                        $query = mysqli_query($con,"select * from complete");
                        while($row=mysqli_fetch_array($query))
                            {  
                        ?>
                    <tr>
                        <td> <?php echo ucwords($row['roll_no']) ?> </td>
                        <td> <?php echo ucwords($row['student_name']) ?> </td>
                        <td> <?php echo ucwords(strtolower($row['subjects']), ',') ?> </td>
                        <td> <?php echo ucwords($row['grade']) ?> </td>
                        <td> <?php echo $row['student_ph'] ?> </td>
                        <td> <?php echo ucwords($row['guardian_name']) ?> </td>
                        <td> <?php echo $row['guardian_ph'] ?> </td>
                        <td> <input class="btn btn-danger" type="button" style="width:100px;" value="Edit" data-toggle="modal" data-target="#editModal"><input class="btn btn-success" type="button" style="width:100px;margin-left:10px;"  value='Add'></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            <div class="modal fade" id="editModal" role="dialog">
                <div class="modal-content">
                    <h4 class="modal-title">Edit</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form  enctype='multipart/form-data' action="./controller/addCatController.php" method="POST">
                        <div class="form-group">
                            <label for="c_name">Category Name:</label>
                            <input type="text" class="form-control" name="c_name" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Category</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
</div>
<script>
    $(document).ready(function () {
        $('table.display').DataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false
        });
            
    });
</script>
