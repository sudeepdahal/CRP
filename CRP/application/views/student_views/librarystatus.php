<body>


<dir class="container">
	<div class="row">
  <h1>Library Status Page</h1>
		<div class="col-md-12">
      		<table class="table" >
        		<tr>
          			<th>Issue Id</th>
          			<th>Uiser Id</th>
          			<th>Book Id</th>
          			<th>Issue Date</th>
                <th>Due Date</th>
          			<th>Issued Date</th>
          			<th>Fine</th>
        		</tr>
        		<?php foreach ($book->result() as $row) { ?> 
        		<tr>
          			<td><?php echo $row->issueid; ?></td>
          			<td><?php echo $row->userid; ?></td>
          			<td><?php echo $row->bookid; ?></td>
          			<td><?php echo $row->issuedate; ?></td>
                <td><?php echo $row->due_date; ?></td>
          			<td><?php echo $row->issueddate; ?></td>
          			<td><?php echo $row->fine; ?></td>
        		</tr>
        		<?php }  ?>
      		</table>
		</div>
	</div>

</dir>