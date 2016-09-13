<body>


<div class="container">
<h1>Manage User Page</h1>

	<div class="row">
		<div class="col-md-12">
		<p class="sucmsg"><?php echo $sucmsg; ?>
			</p>
		</div>
	</div>

	<div class="row">
	
		<div class="col-sm-12">
			<h3>Add User</h3>
		</div>
		<?php echo form_open('index.php/club/manageuser/addMember','id="addForm"'); ?>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Enter Student Id</label>
					<input type="text" name="sid" class="form-control" placeholder="Student Id">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Enter Student Name</label>
					<input type="text" name="sname" class="form-control" placeholder="Student Name">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Enter Post</label>
					<input type="text" name="post" class="form-control" placeholder="Enter Post">
				</div>
			</div>
			<div class="col-sm-12">
				<button class="btn btn-primary">Add</button>
			</div>
		<?php echo form_close(); ?>
	</div>


	<div class="row">
		<div class="col-sm-12">
			<h3>Update Status</h3>
		</div>
		<?php echo form_open('index.php/club/manageuser/updateStatus','id="statusForm"'); ?>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Enter Student Id</label>
				<input type="text" name="sid" class="form-control">
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Status</label>
				<select class="form-control" name="status">
					<option name="status" value="">Status</option>
					<option name="status" value="0">Inactive</option>
					<option name="status" value="1">Active</option>
				</select>
			</div>
		</div>
		<div class="col-sm-4">
		<br>
			<button class="btn btn-primary">Update</button>
		</div>
		<?php echo form_close(); ?>
	</div>



	<div class="row">
		<div class="col-sm-8">
			<h3>All Members</h3>
		</div>
			<?php echo form_open(''); ?>
			<div class="form-group">
			<div class="col-sm-2">
				<select name="status" class="form-control">
					<option value="">Status</option>
					<option value="1">Active</option>
					<option value="0">Inactive</option>
				</select>
			</div>
			<div class="col-sm-2">
				<button class="btn btn-primary">Search</button>
			</div>
			</div>
			<?php form_close(); ?>
		</div>
		<br>
			<table class="table">
				<tr>
					<th>S.N.</th>
					<th>Student Id </th>
					<th>Member Name</th>
					<th>Active Date</th>
					<th>Post</th>
					<th>Inactive date</th>
					<th>Status</th>
				</tr>
				<tr>
				<?php 
					$i=0;	
					foreach ($member->result() as $row) {   
				?>
				
					<td><?php echo $i+1; ?></td>
					<td><?php echo $row->userid; ?></td>
					<td><?php echo $row->name; ?></td>
					<td><?php echo $row->active_date; ?></td>
					<td><?php echo $row->post; ?></td>
					<td><?php echo $row->inactive_date; ?></td>
					<td><?php if($row->status==0) echo "Inactive"; else echo "Active"; ?></td>
				<?php } ?>
				</tr>
			</table>
		</div>
	</div>

</div>

<script>
  $(function(){
    $("#addForm").validate({
      rules:{
        sid: "required",
        sname: "required",
        post: "required",
        },
        messages:{
          sid: 'Please Enter Student Id',
          sname: 'Please Enter Name',
          post: 'Please Enter post',
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