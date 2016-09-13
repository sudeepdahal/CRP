<body>

<div class="container">
	<div class="row">
	<h1>Account Status Page</h1>
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
</div>
		