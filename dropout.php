<main>
    <div class="card table-card" style="height: 100%;">
        <div class="card-header">Information table of Dropot students in class</div>
        <div class="card-body">
            <table id="mytable" class="display table-striped" style="width: 100%;">
            <thead>
                <tr>            
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Grade</th>
                    <th>Guardian</th>
                    <th>Ph.no</th>
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