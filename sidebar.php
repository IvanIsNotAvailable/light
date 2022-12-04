
<div id="layoutSidenav_nav">
    <?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],'/')+1);
    ?>
    <nav class="sb-sidenav accordion <?=$_SESSION["main_sidebar"] ?>" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Options</div>
                <a class="nav-link active" href="index.php">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-table-cells-large"></i></div>Dashboard
                </a>
                <a class="nav-link" href="#student" onclick="showStudents()">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>Students
                </a>
                <a class="nav-link" href="#add_student" onclick="showADDSTU()">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-plus"></i></div>Add Students
                </a>
                <a class="nav-link" href="#complete" onclick="showStudentsComplete()">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-star"></i></div>Completed
                </a>
                <a class="nav-link" href="#enroll" onclick="showEnroll()">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-chart-simple"></i></div>Enrolled
                </a>
                <a class="nav-link" href="#dropout" onclick="showDropout()">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-trash"></i></div>Dropout
                </a>
                <a class="nav-link" href="#course" onclick="showCourses()">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-paperclip"></i></div>Courses
                </a>
                <hr>
                <a class="nav-link" href="#logout" onclick="logout()">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-right-from-bracket"></i></div>Logout
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Light
        </div>
    </nav>
</div>
<script>
    $('.nav-link').on('click',function(){
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
    });
</script>