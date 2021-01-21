(function($){
	$(document).ready(function(){
		$(document).on('click','#add_user_button',function(){
			$('#add_user_modal').modal('show');
			return false;
		});

	// showing student modal

		$(document).on('click', '#add_student_button', function(){
			$('#add_student_modal').modal('show');
			return false;
		})
		
	// showing result modal

		$(document).on('click', '#add_result_button', function(){
			$('#add_result_modal').modal('show');
			return false;
		})
	
	


		// show all user data
		function all_data(){
			$.ajax({
				url : 'templates/ajax/show_users.php',
				success : function(data){
					$('tbody#tbody_all_data').html(data);
					all_data();
				}
			});
		}
		all_data();

		// add new user's form submitting

		$(document).on('submit','form#add_user_form', function(event){
			event.preventDefault();

			$.ajax({
				url : 'templates/ajax/add_user.php',
				method : "POST",
				data : new FormData(this),
				contentType : false,
				processData : false,
				success : function(data) {
					 $('#add_user_modal').modal('hide');
					 $('form#add_user_form')[0].reset();
					 $('.mess').html(data);
				}
			});
		});

		/**
		* delete a user 
		**/
		$(document).on('click', 'a#del_user', function(){
			
		});

		
		// add student
		$(document).on('submit', 'form#add_student_form', function(e){
			e.preventDefault();
			let name = $('form#add_student_form input[name= "name"]').val();
			let roll = $('form#add_student_form input[name = "roll"]').val();
			let reg = $('form#add_student_form input[name = "reg"]').val();

			if(name == '' || roll == '' || reg == ''){
				$('.student_mess').html("<p class = 'alert alert-danger'>Field must not be empty!! <button class= 'close' data-dismiss ='alert'>&times </button></p>");
			}
			else {
				$.ajax({
					url : 'templates/ajax/student_add.php',
					method : "POST",
					data : new FormData(this),
					contentType : false,
					processData : false,
					success : function(data){
						$('form#add_student_form')[0].reset();
						$('#add_student_modal').modal('hide');
						$('mess').html("<p class = 'alert alert-danger'>Field must not be empty!! <button class= 'close' data-dismiss ='alert'>&times </button></p>");
						allStudents();

					}
				});
			}
		});


		//show students
		function allStudents() {
			$.ajax({
			url : 'templates/ajax/student_show.php',
			success : function (data){
				$('table tbody#all_student').html(data);

			}
		});

		}
		allStudents();


		// student search information hide>>initial stage

		$('.student_search_info').hide();
		// search student 
		$(document).on('keyup', 'input#stu_search', function(){
			let student_search = $('input#stu_search').val();
			$.ajax({
				url : 'templates/ajax/search_student.php',
				method : 'POST',
				data : { student_search : student_search},
				success : function( data) {
					$('.search_student').html(data);
				}
			});

		});

		// getting search student id
		$(document).on('click', 'li#search_stu', function(){

			// search student information
			let stu_id = $(this).attr('student_id');
			let stu_name = $(this).attr('student_name');
			let stu_roll = $(this).attr('student_roll');
			let stu_reg = $(this).attr('student_reg');



			$('input#stu_search').val(stu_id);
			$('.search_student').hide();
			$('label#search_label').text('Student Id');
			$('input#stu_search').attr('disabled', '');
			$('.student_search_info').show();
			$('.student_search_info h2').html(stu_name);
			$('.student_search_info h4').html("<strong> ROll :</strong>" + stu_roll + "<strong> REG :</strong>" + stu_reg);
			
		});

		// submit student result

		$(document).on('submit', 'form#add_student_result', function(e){
			e.preventDefault();
			$('input#stu_search').removeAttr('disabled');

			$.ajax({
					url : 'templates/ajax/result_add.php',
					method : "POST",
					data : new FormData(this),
					contentType : false,
					processData : false,
					success : function(data){
						$('form#add_student_result')[0].reset();
						$('#add_result_modal').modal('hide');
						$('.student_search_info').hide();
						$('.mess_result').html("<p class = 'alert alert-success'>Result Added successfully !!! <button class= 'close' data-dismiss ='alert'>&times </button></p>");
						

					}
				});

		})
		
	});
})(jQuery)