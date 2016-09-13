<body>



<div class="container">

<h1>Staff Account Page</h1>
	
	<div class="row">
		<div class="col-md-12">
		<p class="sucmsg"><?php echo $sucmsg; ?>
			</p>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-3">
			<?php echo form_open('index.php/account/staff_account/staffPayment','id="payForm"'); ?>
				<div class="form-group">
					<label>Staff Id</label>
					<input type="text" name="staffid" class="form-control">
				</div>
				<div class="form-group">
					<label>Payed Amount</label>
					<input type="text" name="payedamount" class="form-control">
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


		<!-- Search Part Start -->
		<div class="col-sm-9">
			<h4>Search Result</h4>
		</div>
		<?php echo form_open('index.php/account/staff_account','id="searchForm"'); ?>
			<div class="col-sm-2">
				<div class="form-group">
					<input type="text" name="staffid" class="form-control" placeholder="Staff Id">
				</div>
			</div>
			<div class="col-sm-2">
				<button class="btn btn-primary"> Search</button>
			</div>
		<?php echo form_close(); ?>

		<!-- Search Part End -->

		<div class="col-sm-9">
			<table class="table">
				<tr>
					<th>Staff Id</th>
					<th>Payed Date</th>
					<th>Payed Amount</th>
				</tr>
				<?php foreach ($results->result() as $row) {
				 ?>
				<tr>
					<td><?php echo $row->userid; ?></td>
					<td><?php echo $row->payeddate; ?></td>
					<td><?php echo $row->payedamount; ?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>

</div>


<script>
  $(function(){
    $("#payForm").validate({
      rules:{
        staffid: "required",
        payedamount: "required",
        },
        messages:{
          staffid: 'Please Enter Staff Id',
          payedamount: 'Please Enter payedamount',
        }
    });
  });
  
</script>


<script>
  $(function(){
    $("#searchForm").validate({
      rules:{
        staffid: "required",
        },
        messages:{
          username: 'Please Enter Staff Id',
        }
    });
  });
  
</script>
