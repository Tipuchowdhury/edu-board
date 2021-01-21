<?php require_once "../config.php"; ?>
<?php require_once "../vendor/autoload.php"; ?>
<?php 
    use Edu\board\Support\Authentication;
    $auth = new Authentication;
?>

<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title><?php echo $_SESSION['name']; ?></title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
    <link rel="stylesheet" href="css/custom.css" type="text/css" />
    <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
</head>

<body class="">

<!-- logout section -->
<?php 
    if (isset($_GET['logout']) AND $_GET['logout']='success') {
        $auth -> UserLogout();
    }

 ?>



    <section class="vbox">
        <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
            <div class="navbar-header aside-md dk">
                <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a>
                <a href="index.html" class="navbar-brand"> <img src="images/logo.png" class="m-r-sm" alt="scale"> <span class="hidden-nav-xs">Scale</span> </a>
                <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a>
            </div>
            
            
            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
                 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/<?php echo $_SESSION['photo']; ?>" alt="..."> </span> <?php echo $_SESSION['name']; ?> <b class="caret"></b> </a>
                    <ul class="dropdown-menu animated fadeInRight">
                        <li> <span class="arrow top"></span> <a href="password_change.php">Password Change</a> </li>
                        <li> <a href="profile.html">Profile</a> </li>
                        
                        <li> <a href="?logout=success" >Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </header>



<section>
<section class="hbox stretch">
    <!-- .aside -->
    <aside class="bg-black aside-md hidden-print hidden-xs" id="nav">
        <section class="vbox">
            <section class="w-f scrollable">
                <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                    <div class="clearfix wrapper dk nav-user hidden-xs">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb avatar pull-left m-r"> <img src="images/<?php echo $_SESSION['photo']; ?>" class="dker" alt="..."> <i class="on md b-black"></i> </span> <span class="hidden-nav-xs clear"> <span class="block m-t-xs"> <strong class="font-bold text-lt"><?php echo $_SESSION['name']; ?></strong> <b class="caret"></b> </span> <span class="text-muted text-xs block">Art Director</span> </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li> <span class="arrow top hidden-nav-xs"></span> <a href="password_change.php">Password Change</a> </li>
                                <li> <a href="profile.html">Profile</a> </li>
                                
                                <li> <a href="?logout=success">Logout</a> </li>
                            </ul>
                        </div>
                    </div>












                    <!-- nav -->
                    <nav class="nav-primary hidden-xs">
                        <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                        <ul class="nav nav-main" data-ride="collapse">
                            <li class="">
                                <a href="dashboard.php" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Dashboard</span> </a>
                            </li>
                            <li class="">
                                <a href="student.php" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Students</span> </a>
                            </li>
                            <li class="">
                                <a href="results.php" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Results</span> </a>
                            </li>
                            <li class="">
                                <a href="users.php" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Users</span> </a>
                            </li>
                            
                        </ul>

                        <div class="line dk hidden-nav-xs"></div>
                        <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Lables</div>
                        <ul class="nav">
                            <li>
                                <a href="mail.html#work"> <i class="i i-circle-sm text-info-dk"></i> <span>Work space</span> </a>
                            </li>
                            <li>
                                <a href="mail.html#social"> <i class="i i-circle-sm text-success-dk"></i> <span>Connection</span> </a>
                            </li>
                            <li>
                                <a href="mail.html#projects"> <i class="i i-circle-sm text-danger-dk"></i> <span>Projects</span> </a>
                            </li>
                        </ul>
                        <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Circles</div>
                        <ul class="nav">
                            <li>
                                <a href="#"> <i class="i i-circle-sm-o text-success-lt"></i> <span>College</span> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="i i-circle-sm-o text-warning"></i> <span>Social</span> </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- / nav -->
                </div>
            </section>













                        <footer class="footer hidden-xs no-padder text-center-nav-xs">
                            <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"> <i class="i i-logout"></i> </a>
                            <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a>
                        </footer>
                    </section>
                </aside>
                <!-- /.aside -->