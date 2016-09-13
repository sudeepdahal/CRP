<body>


<div class="container">
<h1>Send Question Page</h1>
	<div class="row">
		<div class="col-md-12">
			<p class="sucmsg"><?php echo $sucmsg; ?>
			</p>
		</div>
	</div>
	
	<?php echo form_open('index.php/staff/sendquestion/sendQuestion','id="addForm"'); ?>		
	<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label>Enter Subject Id</label>
					<input type="text" name="subject_id" class="form-control" placeholder="Subject Id" required>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Enter Subject Name</label>
					<input type="text" name="subject_name" class="form-control" placeholder="Subject Name" required>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Enter Full Marks</label>
					<input type="text" name="fullmarks" class="form-control" placeholder="Full Marks" required>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Enter Pass Marks</label>
					<input type="text" name="passmarks" class="form-control" placeholder="Pass Marks" required>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Enter Time</label>
					<input type="text" name="time" class="form-control" placeholder="Time" required>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Enter Year</label>
					<input type="text" name="year" class="form-control" placeholder="Year" required>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Post By</label>
					<input type="text" name="teacher_id" class="form-control" 
							placeholder="<?php echo $mail; ?>" disabled>
				</div>
			</div>
			<div class="col-sm-4">
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
			<div class="col-sm-4">
				<div class="form-group">
					<label>Select Term</label>
					<select class="form-control" name="term">
						<option value="1" name="term">First Term</option>
						<option value="2" name="term">Second Term</option>
						<option value="3" name="term">Third Term</option>
					</select>
				</div>
			</div>
		</div>


		<!-- ckeditor -->
		<div class="row">
			<div class="col-sm-12">	
				<div class="form-group">
					<label>Question Body</label>
					<textarea name="qbody"></textarea>
        			<script>
           			CKEDITOR.replace( 'qbody' );
        			</script>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-1">
				<button class="btn btn-primary">Send</button>
			</div>
		</div>
	<?php echo form_close(); ?>
</div>


<script>
  $(function(){
    $("#addForm").validate({
      rules:{
        subject_id: "required",
        subject_name: "required",
        fullmarks: "required",
        passmarks: "required",
        time: "required",
        year: "required",
        },
        messages:{
          sid: 'Please Enter User Id',
          bid: 'Please Book Book Id',
          due_date: 'Please Due Day',
        }
    });
  }); 
</script>