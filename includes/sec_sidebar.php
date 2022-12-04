<div id="layoutSidenav_nav">
        <?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],'/')+1) ?>
        <nav class="sb-sidenav accordion <?=$_SESSION["main_sidebar"] ?>" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Settings</div>
                    <a class="nav-link <?= $page == 'setting.php'?'active':''?>" href="setting.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-table-cells-large"></i></div>Themes
                    </a>
                    <a class="nav-link  <?= $page == 'user.php'?'active':''?>" href="includes/users.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>Users
                    </a>
                    <a class="nav-link  <?= $page == 'password.php'?'active':''?>" href="includes/password.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-key"></i></div>Password
                    </a>
                    <a class="nav-link  <?= $page == 'connect.php'?'active':''?>" href="connnect.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-star"></i></div>Connect
                    </a>
                    <a style="opacity: 0;">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-chart-simple"></i></div>Enrolled
                    </a>
                    <a style="opacity: 0;">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-trash"></i></div>Dropout
                    </a>
                    <a style="opacity: 0;">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-paperclip"></i></div>Connect
                    </a>
                    <hr>
                    <a class="nav-link" href="#">
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