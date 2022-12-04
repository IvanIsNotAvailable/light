<?php include_once('../config/function.php'); ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-2">Courses</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Course Information</li>
        </ol>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card mb-4 data-card">
                    <div class="card-body">Understudies : <span class="understudies"><?=numberOfstudent($con);?></span></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small stretched-link" href="student.php" style="text-decoration: none;color: #000;">View Details</a>
                        <div class="small"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</main>
