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
	    <h3 class="m-b-xs text-black">Students Result</h3> <small>Welcome back, <?php echo $_SESSION['name']; ?>, <i class="fa fa-map-marker fa-lg text-primary"></i> <?php echo $_SESSION['email']; ?></small> </div>
	<div class="col-sm-6 text-right text-left-xs m-t-md">
	    <div class="btn-group"> 
	        
	    
	</section>
    <!-- model for result -->
    <div id= "add_result_modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
               <!--  <div class= "modal-header"></div> -->
                <div class="modal-body">
                    <h2>Add student result</h2>
                    <div class="mess"></div>
                    <hr>
                    <div class="student_search_info">
                        <h2 style="text-align: center;">Name</h2>
                        <h4 style="text-align: center;"></h4>
                    </div>
                    <form id="add_student_result" action="" method="POST">
                        <div class="form-group">
                            
                            <label id = "search_label" for="">Search Student</label>
                            <input id= "stu_search" class="form-control" name="student_id" type="text">
                            <div class="search_student"></div>
                        </div>

                        <div class="form-group">
                            <label for="">Bangla</label>
                            <input class="form-control" name="bangla" type="text">
                        </div>

                        <div class="form-group">
                            <label for="">English</label>
                            <input class="form-control" name="english" type="text">
                        </div>

                        <div class="form-group">
                            <label for="">Math</label>
                            <input class="form-control" name="math" type="text">
                        </div>

                        <div class="form-group">
                            <label for="">Science</label>
                            <input class="form-control" name="science" type="text">
                        </div>

                        <div class="form-group">
                            <label for="">Social Science</label>
                            <input class="form-control" name="ss" type="text">
                        </div>

                        <div class="form-group">
                            <label for="">Religion</label>
                            <input class="form-control" name="religion" type="text">
                        </div>

                        

                        <div class="form-group">
                            <label for=""></label>
                            <input class="btn btn-primary" name="add" type="submit" value="Add student">
                        </div>
                    </form>
                </div>
                <!-- <div class= "modal-footer"></div> -->
            </div>
        </div>
    </div>

    <div class="col-sm-8">
        <div class="mess_result"></div>
        <a id= "add_result_button" class= "btn btn-primary btn-lg" href="#">Add Result</a>

        <br><br>
    <section class="panel panel-default">
        <header class="panel-heading"><span class="label bg-danger pull-right m-t-xs">4 left</span> Users</header>
        <table class="table table-striped m-b-none">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Cell</th>
                    <th>Roll</th>
                    <th>Photo</th>
                    <th>Status</th>
                    <th>Action</th>
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Tipu Chowdhury</td>
                    <td>a.h.chowdhury1@gmail.com</td>
                    <td>01677430707</td>
                    <td>Admin</td>
                    <td><img style= "width: 50px;height: 50px;"src="images/a0.png" alt=""></td>
                    <td>Active</td>
                    <td>
                        <a class= "btn btn-primary btn-sm" href="#">Edit</a>
                        <a class= "btn btn-warning btn-sm" href="#">Update</a>
                        <a class= "btn btn-danger btn-sm" href="#">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
</div>


</section>
</section>
</section>

    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>



<?php include_once "templates/footer.php"; ?>














           