<?php require_once "../config.php"; ?>
<?php require_once "../vendor/autoload.php"; ?>
<?php 

    use Edu\board\Support\Authentication;
    $auth  = new Authentication;

 ?>
<!DOCTYPE html>
<html lang="en" class=" ">
<head>
    <meta charset="utf-8" />
    <title>Scale | Web Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
</head>

<body class="">
    <?php
    if (isset($_POST['submit'])) {
        $ue =$_POST['ue'];
        $pass =$_POST['pass'];
        if (empty($ue) || empty($pass)) {
            $mess = "<p class = 'alert alert-danger'>Field must not be empty!! <button class= 'close' data-dismiss ='alert'>&times </button></p>";
        }
        else {
            $mess = $auth-> LoginToAdmin($ue, $pass);
        }
    }

    ?>
    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        <div class="container aside-xl"> <a class="navbar-brand block" href="index.html">Admin Panel</a>
            <section class="m-b-lg">
                <header class="wrapper text-center"> <strong>Sign in to get in touch</strong> </header>
                <?php
                    if (isset($mess)) {
                         echo $mess;
                     } 

                 ?>
                <form action=" <?php echo $_SERVER['PHP_SELF'];?>" method = "POST">
                    <div class="list-group">
                        <div class="list-group-item">
                            <input name= "ue" type="text" placeholder="Email / Username" class="form-control no-border"> </div>
                        <div class="list-group-item">
                            <input name= "pass" type="password" placeholder="Password" class="form-control no-border"> </div>
                    </div>
                    <button name= "submit" type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                    </form>
            </section>
        </div>
    </section>
    <!-- footer -->
    
    <!-- / footer -->
    <!-- Bootstrap -->
    <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/app.plugin.js"></script>
</body>
</html>