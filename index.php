<?php
session_start();

$_SESSION["main_navbar"] = "theme-1-nav";
$_SESSION["main_sidebar"] = "sb-sidenav-blue";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="data/bootstrap.min.css">
    <link rel="stylesheet" href="style/mystyle.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://kit.fontawesome.com/ec36b18654.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="data/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="data/js/ajax.js"></script>
    <script src="config/function.php"></script>
    
</head>
<body>
    <?php include('includes/nav-top.php'); 
    require('./config/dbcon.php');
    include('./config/function.php');
    ?>
    <div id="layoutSidenav">
        <?php include('sidebar.php');?>
        <div id="layoutSidenav_content">
            <?php include('dashboard.php');?>
        
    
</body>
</html>
