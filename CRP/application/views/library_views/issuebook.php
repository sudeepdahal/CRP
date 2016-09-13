
<body>





<div class="container">
	<h1>Issue Book</h1>
	
	<div class="row">
		<div class="col-md-12">
			<p class="sucmsg"><?php echo $sucmsg; ?>
			</p>
		</div>
	</div>
	<div class="row">

		<div class="col-sm-4">
			<h2>Issue Book</h2>
			<?php echo form_open('index.php/library/issuebook/issueBook','id="issueForm"'); ?>
			<div class="form-group">
				<label>Enter User Id</label>
				<input type="text" name="sid" class="form-control">
			</div>
			<div class="form-group">
				<label>Enter Book Id</label>
				<input type="text" name="bid" class="form-control">
			</div>
			<div class="form-group">
				<label>Issue Date</label>
				<input type="text" id="issue_date"  name="issue_date" 
											placeholder="<?php 
											$datestring = '%Y/%m/%d';
											echo mdate($datestring); 
									?>" 
						class="form-control" id="disabledInput" disabled >
			</div>
			<div class="form-group">
				<label>Return Day</label>
				<input type="text" id="due_date" name="due_date" placeholder="No of days" class="form-control ">
			</div>
			<div class="form-group">
				<button class="btn btn-primary">Issue</button>
			</div>
			<?php echo form_close(); ?>
		</div>
		<div class="col-sm-4">
			<h2>Return Book</h2>
			<?php echo form_open('index.php/library/issuebook/issuedBook','id="issuedForm"'); ?>
			<div class="form-group">
				<label>Enter User Id</label>
				<input type="text" name="sid" class="form-control">
			</div>
			<div class="form-group">
				<label>Enter Book Id</label>
				<input type="text" name="bid" class="form-control">
			</div>
			<div class="form-group">
				<label>Return Date</label>
				<input 
						type="text" name="date" 
						placeholder="<?php 
											$datestring = '%Y/%m/%d';
											echo mdate($datestring); 
									?>" 
						class="form-control" id="disabledInput" disabled >
			</div>
			<div class="form-group">
				<label>Fine exclude day</label>
				<input type="text" name="exclude_day" class="form-control">
			</div>
			<div class="form-group">
				<label>Fine Per Day</label>
				<input type="text" name="fine_per_day" class="form-control">
			</div>
			<div class="form-group">
				<button class="btn btn-primary">Issue</button>
			</div>
			<?php echo form_close(); ?>
		</div>



	<!-- Display Issue and Issued Book Detail -->

	
	<!-- Search Part -->
	<div class="row">
		<div class="col-lg-12">
			<h2> Search User</h2>
		<div class="col-md-2">
		<?php echo form_open('index.php/library/issuebook/index','id="searchForm"'); ?>
			<div class="form-group">
				<input type="text" name="uid" class="form-control" placeholder="Search">
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<button class="btn btn-primary">Search</button>
			</div>
		</div>
		<?php echo form_close(); ?>	
		</div>
		

	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="table">
      			<table class="table table-striped" >
        			<tr>
          				<th>Issue Id</th>
          				<th>Uiser Id</th>
          				<th>Book Id</th>
          				<th>Issue Date</th>
          				<th>Due Date</th>
          				<th>Return Date</th>
        			</tr>
        			<?php foreach ($book->result() as $row) {
             		?> 
        			<tr>
          				<td><?php echo $row->issueid; ?></td>
          				<td><?php echo $row->userid; ?></td>
          				<td><?php echo $row->bookid; ?></td>
          				<td><?php echo $row->issuedate; ?></td>
          				<td><?php echo $row->due_date; ?></td>
          				<td><?php echo $row->issueddate; ?></td>
        			</tr>
        			<?php }  
         			?>
      			</table>
    		</div>
		</div>
	</div>

</div>



<script>
  $(function(){
    $("#issuedForm").validate({
      rules:{
        sid: "required",
        bid: "required",
        },
        messages:{
          sid: 'Please Enter User Id',
          bid: 'Please Book Book Id',
        }
    });
  }); 
</script>

<script>
  $(function(){
    $("#issueForm").validate({
      rules:{
        sid: "required",
        bid: "required",
        due_date: "required",
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
        uid: "required",
        },
        messages:{
          uid: 'Please Enter User Id',
        }
    });
  }); 
</script>