<div id="layoutSidenav_content">
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-2">Themes</h1>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card mb-4" style="height: 100%; padding-bottom:0; background-color:#005176; color:aliceblue; border: 1px solid yellow;">
                    <div class="card-body">
                        Text color : <span class="understudies">white</span><br>
                        Background color : <span class="understudies">white</span><br>
                        Navbar color : <span class="understudies">blue</span><br>
                        Sidebar color : <span class="understudies">blue</span>
                    </div>
                    <div class="card-footer theme d-flex align-items-center justify-content-between" style="background-color: rosybrown;">
                        <input type="button" value="Change now" class="theme1 btn btn-success">
                        <div class="small" style="text-decoration: none;color:black;"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card mb-4" style="height: 100%; padding-bottom:0; background-color:#201E20; color:aliceblue; border: 1px solid yellow;">
                    <div class="card-body">
                        Text color : <span class="understudies">white</span><br>
                        Background color : <span class="understudies">white</span><br>
                        Navbar color : <span class="understudies">black brown</span><br>
                        Sidebar color : <span class="understudies">black brown</span>
                    </div>
                    <div class="card-footer theme d-flex align-items-center justify-content-between" style="background-color: rosybrown;">
                        <input type="button" value="Change now" class="theme2 btn btn-success">
                        <div class="small" style="text-decoration: none;color:black;"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
<script>
        $('input .theme1').on('click',function(){
            window.alert('hello');
        });
        $('input .theme2').on('click',function(){
            $('nav .sb-topnav ').removeClass(<?= $_SESSION["main_navbar1"];?>);
            $(this).addClass(<?= $_SESSION["main_navbar"];?>);
            $('nav .sb-sidenav ').removeClass(<?= $_SESSION["main_navbar1"];?>);
            $(this).addClass(<?= $_SESSION["main_sidebar"];?>);
            header("Refresh:0");
        })
    </script>
