<nav class="sb-topnav navbar navbar-expand <?= $_SESSION["main_navbar"];?>">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.php">Light Class For All</a>
    <!-- Sidebar Toggle-->
    <ul class="navbar-nav order-1 md-0 order-lg-0 me-4 me-lg-0 d-none d-sm-block d-md-none">
        <li class="nav-item dropdown">
            <button class="btn btn-link btn-sm nav-link dropdown-toggle" id="navbarDropdown" href="#!" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars"></i></button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Dashboard</a></li>
                <li><a class="dropdown-item" href="#!">Students</a></li>
                <li><a class="dropdown-item" href="#!">Student Registration</a></li>
                <li><a class="dropdown-item" href="#!">Completed</a></li>
                <li><a class="dropdown-item" href="#!">enrolled</a></li>
                <li><a class="dropdown-item" href="#!">Dropout</a></li>
                <li><a class="dropdown-item" href="#!">Courses</a></li>
            </ul>
        </li>
    </ul>
    
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                
                <li><a class="dropdown-item" href="#!">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>

<!--<li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>-->