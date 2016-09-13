<body>


<div class="container">
<h1>Student Account Page</h1>

	<div class="row">
		<div class="col-md-12">
		<p class="sucmsg"><?php echo $sucmsg; ?>
			</p>
		</div>
	</div>

	<div class="row">

	<!-- New Student Entry Part -->
		<div class="col-sm-4">
		<h3>New Student Entry</h3>
			<?php echo form_open('index.php/account/student_account/firstStudentEntry','id="entryForm"'); ?>
				<div class="form-group">
					<label>Student Id</label>
					<input type="text" name="sid" class="form-control" placeholder="Student Id">
				</div>
				<div class="form-group">
					<label>Total Fee</label>
					<input type="text" name="totalfee" class="form-control" placeholder="Total Fee">
				</div>
				<div class="form-group">
					<label>Initial Due</label>
					<input type="text" name="totaldue" class="form-control" placeholder="Initial Due">
				</div>
				<button class="btn btn-primary">Add</button>
			<?php echo form_close(); ?>
		</div>

		<div class="col-sm-2">
			
		</div>


		<!-- General Student Part -->
		<div class="col-sm-4">
			<h3>General Student</h3>
			<?php echo form_open('index.php/account/student_account/studentPayment','id="payForm"'); ?>
				<div class="form-group">
					<label>Student Id</label>
					<input type="text" name="sid" placeholder="Student Id" class="form-control">
				</div>
				<div class="form-group">
					<label>Payed Amount</label>
					<input type="text" name="payedamount" placeholder="Payed Amount" class="form-control">
				</div>
				<div class="form-group">
					<label>Payed Date</label>
					<input 
						type="text" name="date"
						placeholder="<?php 
											$datestring = '%Y/%m/%d';
											echo mdate($datestring); 
										?>" 
						class="form-control" id="disabledInput" disabled>
				</div>
				<button class="btn btn-primary">Pay</button>
			<?php echo form_close(); ?>
		</div>

	</div>
	<div class="row">
		<div class="col-sm-12">
			<h4>Search Result</h4>
		</div>
		<?php echo form_open('index.php/account/student_account','id="searchForm"'); ?>
			<div class="col-sm-2">
				<div class="form-group">
					<input type="text" name="search" class="form-control" placeholder="Student Id">
				</div>
			</div>
			<div class="col-sm-2">
				<button class="btn btn-primary">Search</button>
			</div>
		<?php echo form_close(); ?>
		<div class="col-sm-12">
			<table class="table">
				<tr>
					<th>Student Id</th>
					<th>Total Fee</th>
					<th>Payed Date</th>
					<th>Payed Amount</th>
					<th>Due Fee</th>
				</tr>
				<?php foreach ($results->result() as $row) {
				 ?>
				<tr>
					<td><?php echo $row->userid; ?></td>
					<td><?php echo $row->totalfee;  ?></td>
					<td><?php echo $row->payeddate; ?></td>
					<td><?php echo $row->payedamount; ?></td>
					<td><?php echo $row->due; ?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
</div>


<script>
  $(function(){
    $("#entryForm").validate({
      rules:{
        sid: "required",
        totalfee: "required",
        totaldue: "required",
        },
        messages:{
          sid: 'Please Enter Student Id',
          totalfee: 'Please Enter Total Fee',
          totaldue: 'Please Enter Initial Due'
        }
    });
  });
  
</script>

<script>
  $(function(){
    $("#searchForm").validate({
      rules:{
        search: "required",
        },
        messages:{
          search: 'Please Enter Student Id',
        }
    });
  });
  
</script>

<script>
  $(function(){
    $("#payForm").validate({
      rules:{
        sid: "required",
        payedamount: "required",
        },
        messages:{
          sid: 'Please Enter Student Id',
          payedamount: 'Please Enter payedamount',
        }
    });
  });
  
</script>
