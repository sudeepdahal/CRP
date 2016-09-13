<body>


<div class="container">
	<h1>Manage Course Page</h1>
	
	<div class="row">
		<div class="col-md-12">
			<p class="sucmsg"><?php echo $sucmsg; ?>
			</p>
		</div>
	</div>
	<div class="row">

		<div class="col-md-12">
			<h3>Add New Course</h3>
		</div>
		<?php echo form_open('index.php/department/managecourse/addCourse','id="addForm"'); ?>
		<div class="col-md-3">
			<div class="form-group">
				<label>Course Id</label>
				<input type="text" name="course_id" class="form-control" placeholder="Subject Id">
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Course Name</label>
				<input type="text" name="course_name" class="form-control" placeholder="Subject Name ">
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Credit Hour</label>
				<input type="text" name="credit" class="form-control" placeholder="Credit Hour">
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Select Semester</label>
				<select class="form-control" name="semester">
					<option value="1" name="semester">First </option>
					<option value="2" name="semester">Second </option>
					<option value="3" name="semester">Third </option>
					<option value="4" name="semester">Forth </option>
					<option value="5" name="semester">Fifth </option>
					<option value="6" name="semester">Sixth </option>
					<option value="7" name="semester">Seventh </option>
					<option value="8" name="semester">Eighth </option>
				</select>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label>Course Detail</label>
				<textarea name="body"></textarea>
        			<script>
           				CKEDITOR.replace( 'body' );
        			</script>
			</div>
		</div>
		<div class="col-md-12">
			<button class="btn btn-primary">Add</button>
		</div>
		<?php echo form_close(); ?>
	</div>

	<!-- <div class="row">
		<div class="col-md-12">
			<h3>Delete Course</h3>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<input type="text" name="subject_id" class="form-control" placeholder="Subject Id">
			</div>
		</div>
		<div class="col-md-2">
			<button class="btn btn-primary">Delete</button>
		</div>
	</div> -->
</div>

<script>
  $(function(){
    $("#addForm").validate({
      rules:{
        course_id: "required",
        course_name: "required",
        credit: "required",
        },
        messages:{
          course_id: 'Please Enter Course Id',
          course_name: 'Please Course Name',
          credit: 'Please Enter credit',
        }
    });
  }); 
</script>


<script>
  $(function(){
    $("#statusForm").validate({
      rules:{
        sid: "required",
        },
        messages:{
          sid: 'Please Enter Student Id',
        }
    });
  }); 
</script>