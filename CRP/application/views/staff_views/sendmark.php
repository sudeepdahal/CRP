

<body>


<div class="container">
	<h1>Send Marks Page</h1>
	
	<div class="row">
		<div class="col-md-12">
			<p class="sucmsg"><?php echo $sucmsg; ?>
			</p>
		</div>
	</div>

	<div class="row">

		<?php echo form_open('index.php/staff/sendmark/sendMarksDisplay','id="searchForm"'); ?>
		<div class="col-lg-3 col-md-3">
			<div class="form-group">
				<label>Enter No of Student</label>
				<input type="text" name="student_number" class="form-control">
			</div>
			<button class="btn btn-success">Send</button>
		</div>
		<?php echo form_close(); ?>
	</div>
	<div class="row">
		<div class="col-lg-9 col-md-9 col-sm-9" ></div>
			<?php echo form_open('index.php/staff/sendmark/sendMarks/'.$no,'id="addForm"'); ?>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Subject Id</label>
					<input type="text" name="subjectid" class="form-control" placeholder="Subject Id">
				</div>
			</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Post By</label>
				<input type="text" name="teacher_id" class="form-control" placeholder="<?php echo $mail; ?>" disabled>
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
				</select>
			</div>
		</div>
		<div class="col-sm-6">
			<table class= "">
				<tr>
					<th>Student Id</th>
					<th>Obtain Marks</th>
				</tr>
				<?php for($i=0; $i < $no; $i++){ ?>
				<tr>
					<td>
						<input type="text" name="<?php echo "sid".$i; ?>"class="form-control">						
					</td>
					<td>
						<input type="text" name="<?php echo "oid"+$i; ?>"class="form-control">
					</td>
				</tr>
				<?php } ?>
			</table>
		</div>
			
		<div class="col-lg-12 col-md-12 col-sm-12">
			<button class="btn btn-primary">Send</button>
		</div>
			
		<?php echo form_close(); ?>
	</div>
</div>

<script>
  $(function(){
    $("#addForm").validate({
      rules:{
        subjectid: "required",
        subject_name: "required",
        fullmarks: "required",
        passmarks: "required",
        sid0: "required",
        0: "required",
        },
        messages:{
          sid: 'Please Enter User Id',
          bid: 'Please Book Book Id',
          due_date: 'Please Due Day',
        }
    });
  }); 
</script>


<script>
  $(function(){
    $("#searchForm").validate({
      rules:{
        student_number: "required",
        },
        messages:{
          sid: 'Please Enter User Id',
        }
    });
  }); 
</script>