<body>
	<div class="container">
		<div class="row">
			<?php foreach ($question->result() as $row){ 
				?>

				<div class="col-md-12">
					<center>
						<h1>
							<?php
							if ($row->semester==1) {
								echo "First Year/First Semster";
							}
							if ($row->semester==2) {
								echo "First Year/Second Semster";
							}
							if ($row->semester==3) {
								echo "Second Year/Third Semster";
							}
							if ($row->semester==4) {
								echo "Second Year/Fourth Semster";
							}
							if ($row->semester==5) {
								echo "Third Year/Fifth Semster";
							}
							if ($row->semester==6) {
								echo "Third Year/Sixth Semster";
							}
							if ($row->semester==7) {
								echo "Fourth Year/Seventh Semster";
							}
							if ($row->semester==8) {
								echo "Fourth Year/Eighth Semster";
							}
							?>
						</h1>
					</center>
				</div>

			<div class=" col-md-4">
				<h4>Subject:
					<?php
						echo $row->course_name;
					?>
				</h4>
				<h4>Time:
					<?php
						echo $row->time;
					?>
				</h4>
			</div>

			<div class="col-md-4"></div>

			<div class=" col-md-4 text-right">
				<h4>FM:
					<?php
						echo $row->fullmarks;
					?>
				</h4>
				<h4>PM:
					<?php
						echo $row->passmarks;
					?>
				</h4>
			</div>

			<div class="col-md-12">
				<center>
					<h4>Year:
					<?php
						echo $row->year;
					?>
					</h4>
				</center>
			</div>

			<div id="printarea">
				<div class="col-md-12">
					<div class="">
						<p>
							<?php
								echo $row->qbody;
							?>
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<button class="btn btn-primary " id="print">Print</button>
			</div>
			<?php } ?>
		</div>
	</div>

	<script type="text/javascript">
		$("#print").click(function () {
  			//Hide all other elements other than printarea.
  			$("#printarea").show();
  	 		$("#print").hide();
    		window.print();
		});
	</script>
</body>
