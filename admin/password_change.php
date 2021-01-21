<?php include_once "templates/header.php"; ?>
<?php 
	use Edu\board\Controller\Users;
	$users = new Users;

 ?>



<!-- MAIN CONTENT  -->
<section id="content">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">



	<section class="row m-b-md">
	<div class="col-sm-6">
	    <h3 class="m-b-xs text-black">Setting</h3> <small>Welcome back, <?php echo $_SESSION['name']; ?>, <i class="fa fa-map-marker fa-lg text-primary"></i> <?php echo $_SESSION['email']; ?></small> </div>
	<div class="col-sm-6 text-right text-left-xs m-t-md">
	    <div class="btn-group"> 
	        
	    
	</section>


    <!-- password change panel -->
    <?php 
    if (isset($_POST['submit'])) {
    	$old = $_POST['old'];
    	$new = $_POST['new'];
    	$confirm = $_POST['confirm-pass'];
    	$id = $_SESSION['id'];
    	

    	// old password check
    	if ( password_verify($old, $_SESSION['pass']) ) {
    		$old_pass = true;
    	 }
    	 else {
    	 	$old_pass = false;
    	 }
    	 // matching old password & new password
    	 if ($new == $_SESSION['pass']) {
    		$new_pass = false;
    	 }
    	 else {
    	 	$new_pass = true;
    	 }
    	 //matching new pass & confirm pass

    	 if ($new == $confirm) {
    	 	$new_password = true;
    	 }
    	 else {
    	 	$new_password = false;
    	 }
    	 //check old pass & new pass
    	 if ($old == $new) {
    	 	$match_pass = true;
    	 }
    	 else {
    	 	$match_pass = false;
    	 }	    	 
    	// form validation
    	if (empty($old) || empty($new) || empty($confirm)) {
    		$mess = "<p class = 'alert alert-danger'>Field must not be empty!! <button class= 'close' data-dismiss ='alert'>&times </button></p>";
    	}
    	elseif ($old_pass == false) {
    		$mess = "<p class = 'alert alert-warning'>Old password didn't match!!! <button class= 'close' data-dismiss ='alert'>&times </button></p>";
    	}
    	elseif ($new_pass == false) {
    		$mess = "<p class = 'alert alert-warning'>Please set a different password <button class= 'close' data-dismiss ='alert'>&times </button></p>";
    	}
    	elseif (! $new == $confirm) {
    		$mess = "<p class = 'alert alert-warning'>Password didn't match <button class= 'close' data-dismiss ='alert'>&times </button></p>";
    	}
    	elseif ($new_password == false) {
    		$mess = "<p class = 'alert alert-warning'>New password & Confirm password didn't match <button class= 'close' data-dismiss ='alert'>&times </button></p>";
    	}
    	elseif ($match_pass == true) {
    		$mess = "<p class = 'alert alert-warning'>Please sat another new password <button class= 'close' data-dismiss ='alert'>&times </button></p>";
    	}
    	else {
    		$mess = $users-> Update_Password($id, $new);
    	}

    }

     ?>

    <div class="row">
        <div class="col-sm-6">
        <!-- showing message -->
        <?php 
        	if (isset($mess)) {
        		echo $mess;
        	}
        ?>
            
   <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method= "POST">


    <div class="list-group">
        <div class="list-group-item">
            <input name = "old" placeholder="Old Password" type="password" class="form-control no-border"> 
        </div>
        <div class="list-group-item">
            <input name = "new" type="password" placeholder="New Password" type="text" class="form-control no-border"> 
        </div>
        <div class="list-group-item">
            <input name = "confirm-pass" type="password" placeholder="Confirm Password" type="password" class="form-control no-border"> 
        </div>
    </div>
    <button name = "submit" type="submit" class="btn btn-lg btn-primary btn-block">Password Change</button>  
</form>
                   
        </div>    
    </div> 

</section>
</section>
</section>

    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>



<?php include_once "templates/footer.php"; ?>














           