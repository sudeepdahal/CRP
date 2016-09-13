<body>


<div class="container">
<h1>Issue and Return Book History</h1>
	<!-- Display Issue and Issued Book Detail -->
	<h3>Search </h3>
	<div class="row">
  <?php echo form_open('index.php/library/history/index','id="searchForm"'); ?>
		<div class="col-sm-3">
			<div class="form-group">
				<input type="text" name="userid" class="form-control" placeholder="Search">
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<button class="btn btn-primary">Search</button>
			</div>
		</div>
    <?php echo form_close(); ?>
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
          				<th>Issued Date</th>
          				<th>Fine</th>

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
          				<td><?php echo $row->fine; ?></td>
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
    $("#searchForm").validate({
      rules:{
        userid: "required",
        },
        messages:{
          userid: 'Please Enter User Id',
        }
    });
  }); 
</script>