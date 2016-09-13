<body>



<div class="container">
<h1>Account Info Page</h1>
	<div class="row">
		<div class="col-sm-12">
			<table class="table">
				<tr>
					<th>Staff Id</th>
					<th>Payed Date</th>
					<th>Payed Amount</th>
				</tr>
				<?php foreach ($record->result() as $row) {
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