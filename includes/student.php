<main>
    <div class="card table-card" style="height: 100%;">
        <div class="card-header">Information table of understudies in class</div>
        <div class="card-body">
            <table class="display">
                <thead>
                    <tr>
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
                        $query = mysqli_query($con,"select * from students");
                        while($row=mysqli_fetch_array($query))
                            {  
                        ?>
                    <tr>
                        <td> <?php echo ucwords($row['student_name']) ?> </td>
                        <td> <?php echo ucwords(strtolower($row['subjects']), ',') ?> </td>
                        <td> <?php echo ucwords($row['grade']) ?> </td>
                        <td> <?php echo $row['student_ph'] ?> </td>
                        <td> <?php echo ucwords($row['guardian_name']) ?> </td>
                        <td> <?php echo $row['guardian_ph'] ?> </td>
                        <td>
                            <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" id="edit" value="edit"  style="width:100px;">
                            <input  type="button" onclick="del_data();" class="btn btn-success" style="width:100px;margin-left:10px;" data-toggle="modal" data-target="#removeModal" id="Del" value="remove">
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="editModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content modal-form">
                        <h4 class="modal-title">Edit</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body modal-form-group">
                        <form  enctype='multipart/form-data' action="#" method="POST">
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
    $('#edit').on('click',function(){
        $('#editModal').modal('show');
    });
    $('.close').on('click',function(){
        $('#editModal').modal('hide');
    });
</script>


