
<body>


<div class="container">
	<div class="row">
		<h1>Result Page</h1>
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		  <div class="panel panel-primary">
		    <div class="panel-heading" role="tab" id="headingOne">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
		          First Semester Result
		        </a>
		      </h4>
		    </div>
		    <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
		      <div class="panel-body">

				<div class="col-md-6">
					<h3> First Term Result</h3>
					<table class="table">
						<tr>
							<th>Course Id</th>
							<th>Full Marks</th>
							<th>Pass Marks</th>
							<th>Obtain Marks</th>
						</tr>
						<?php foreach ($result->result() as $row) {

							if ($row->semester == 1 && $row->userid == $mail && $row->term == 1) {
						?>
						<tr>
							<td><?php echo $row->userid; ?></td>
							<td><?php echo $row->fullmarks; ?></td>
							<td><?php echo $row->passmarks; ?></td>
							<td><?php echo $row->obtainmarks; ?></td>
						</tr>
						<?php } } ?>
					</table>
				</div>

				<div class="col-md-6">
					<h3> Second Term Result</h3>
					<table class="table">
						<tr>
							<th>Course Id</th>
							<th>Full Marks</th>
							<th>Pass Marks</th>
							<th>Obtain Marks</th>
						</tr>
						<?php foreach ($result->result() as $row) {

							if ($row->semester == 1 && $row->userid == $mail && $row->term == 2) {
						?>
						<tr>
							<td><?php echo $row->course_id; ?></td>
							<td><?php echo $row->fullmarks; ?></td>
							<td><?php echo $row->passmarks; ?></td>
							<td><?php echo $row->obtainmarks; ?></td>
						</tr>
						<?php } } ?>
					</table>
				</div>

		      </div>
		    </div>
		  </div>
		  <div class="panel panel-primary">
		    <div class="panel-heading" role="tab" id="headingTwo">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          Second Semester Result
		        </a>
		      </h4>
		    </div>
		    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
		      <div class="panel-body">
		        
				<div class="col-md-6">
					<h3> First Term Result</h3>
					<table class="table">
						<tr>
							<th>Course Id</th>
							<th>Full Marks</th>
							<th>Pass Marks</th>
							<th>Obtain Marks</th>
						</tr>
						<?php foreach ($result->result() as $row) {

							if ($row->semester == 2 && $row->userid == $mail && $row->term == 1) {
						?>
						<tr>
							<td><?php echo $row->course_id; ?></td>
							<td><?php echo $row->fullmarks; ?></td>
							<td><?php echo $row->passmarks; ?></td>
							<td><?php echo $row->obtainmarks; ?></td>
						</tr>
						<?php } } ?>
					</table>
				</div>

				<div class="col-md-6">
					<h3> Second Term Result</h3>
					<table class="table">
						<tr>
							<th>Course Id</th>
							<th>Full Marks</th>
							<th>Pass Marks</th>
							<th>Obtain Marks</th>
						</tr>
						<?php foreach ($result->result() as $row) {

							if ($row->semester == 2 && $row->userid == $mail && $row->term == 2) {
						?>
						<tr>
							<td><?php echo $row->course_id; ?></td>
							<td><?php echo $row->fullmarks; ?></td>
							<td><?php echo $row->passmarks; ?></td>
							<td><?php echo $row->obtainmarks; ?></td>
						</tr>
						<?php } } ?>
					</table>
				</div>

		      </div>
		    </div>
		  </div>
		  <div class="panel panel-primary">
		    <div class="panel-heading" role="tab" id="headingThree">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          Third Semester Result
		        </a>
		      </h4>
		    </div>
		    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
		      <div class="panel-body">

				<div class="col-md-6">
					<h3> First Term Result</h3>
					<table class="table">
						<tr>
							<tr>
							<th>Course Id</th>
							<th>Full Marks</th>
							<th>Pass Marks</th>
							<th>Obtain Marks</th>
						</tr>
						<?php foreach ($result->result() as $row) {

							if ($row->semester == 3 && $row->userid == $mail && $row->term == 1) {
						?>
						<tr>
							<td><?php echo $row->course_id; ?></td>
							<td><?php echo $row->fullmarks; ?></td>
							<td><?php echo $row->passmarks; ?></td>
							<td><?php echo $row->obtainmarks; ?></td>
						</tr>
						<?php } } ?>
					</table>
				</div>

				<div class="col-md-6">
					<h3> Second Term Result</h3>
					<table class="table">
						<tr>
							<th>Course Id</th>
							<th>Full Marks</th>
							<th>Pass Marks</th>
							<th>Obtain Marks</th>
						</tr>
						<?php foreach ($result->result() as $row) {

							if ($row->semester == 3 && $row->userid == $mail && $row->term == 2) {
						?>
						<tr>
							<td><?php echo $row->course_id; ?></td>
							<td><?php echo $row->fullmarks; ?></td>
							<td><?php echo $row->passmarks; ?></td>
							<td><?php echo $row->obtainmarks; ?></td>
						</tr>
						<?php } } ?>
					</table>
				</div>

		      </div>
		    </div>
		  </div>
		  <div class="panel panel-primary">
		    <div class="panel-heading" role="tab" id="headingThree">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
		          Fourth Semester Result
		        </a>
		      </h4>
		    </div>
		    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
		      <div class="panel-body">
		        
				<div class="col-md-6">
					<h3> First Term Result</h3>
					<table class="table">
						<tr>
							<th>Course Id</th>
							<th>Full Marks</th>
							<th>Pass Marks</th>
							<th>Obtain Marks</th>
						</tr>
						<?php foreach ($result->result() as $row) {

							if ($row->semester == 4 && $row->userid == $mail && $row->term == 1) {
						?>
						<tr>
							<td><?php echo $row->course_id; ?></td>
							<td><?php echo $row->fullmarks; ?></td>
							<td><?php echo $row->passmarks; ?></td>
							<td><?php echo $row->obtainmarks; ?></td>
						</tr>
						<?php } } ?>
					</table>
				</div>

				<div class="col-md-6">
					<h3> Second Term Result</h3>
					<table class="table">
						<tr>
							<th>Course Id</th>
							<th>Full Marks</th>
							<th>Pass Marks</th>
							<th>Obtain Marks</th>
						</tr>
						<?php foreach ($result->result() as $row) {

							if ($row->semester == 4 && $row->userid == $mail && $row->term == 2) {
						?>
						<tr>
							<td><?php echo $row->course_id; ?></td>
							<td><?php echo $row->fullmarks; ?></td>
							<td><?php echo $row->passmarks; ?></td>
							<td><?php echo $row->obtainmarks; ?></td>
						</tr>
						<?php } } ?>
					</table>
				</div>

		      </div>
		    </div>
		  </div>
		  <div class="panel panel-primary">
		    <div class="panel-heading" role="tab" id="headingThree">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
		          Fifth Semester Result
		        </a>
		      </h4>
		    </div>
		    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
		      <div class="panel-body">
		        
				<div class="col-md-6">
					<h3> First Term Result</h3>
					<table class="table">
						<tr>
							<th>Course Id</th>
							<th>Full Marks</th>
							<th>Pass Marks</th>
							<th>Obtain Marks</th>
						</tr>
						<?php foreach ($result->result() as $row) {

							if ($row->semester == 5 && $row->userid == $mail && $row->term == 1) {
						?>
						<tr>
							<td><?php echo $row->course_id; ?></td>
							<td><?php echo $row->fullmarks; ?></td>
							<td><?php echo $row->passmarks; ?></td>
							<td><?php echo $row->obtainmarks; ?></td>
						</tr>
						<?php } } ?>
					</table>
				</div>

				<div class="col-md-6">
					<h3> Second Term Result</h3>
					<table class="table">
						<tr>
							<th>Course Id</th>
							<th>Full Marks</th>
							<th>Pass Marks</th>
							<th>Obtain Marks</th>
						</tr>
						<?php foreach ($result->result() as $row) {

							if ($row->semester == 5 && $row->userid == $mail && $row->term == 2) {
						?>
						<tr>
							<td><?php echo $row->course_id; ?></td>
							<td><?php echo $row->fullmarks; ?></td>
							<td><?php echo $row->passmarks; ?></td>
							<td><?php echo $row->obtainmarks; ?></td>
						</tr>
						<?php } } ?>
					</table>
				</div>

		      </div>
		    </div>
		  </div>
		  <div class="panel panel-primary">
		    <div class="panel-heading" role="tab" id="headingThree">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
		          Sixth Semester Result
		        </a>
		      </h4>
		    </div>
		    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
		      <div class="panel-body">
		        
				<div class="col-md-6">
					<h3> First Term Result</h3>
					<table class="table">
						<tr>
							<th>Course Id</th>
							<th>Full Marks</th>
							<th>Pass Marks</th>
							<th>Obtain Marks</th>
						</tr>
						<?php foreach ($result->result() as $row) {

							if ($row->semester == 6 && $row->userid == $mail && $row->term == 1) {
						?>
						<tr>
							<td><?php echo $row->course_id; ?></td>
							<td><?php echo $row->fullmarks; ?></td>
							<td><?php echo $row->passmarks; ?></td>
							<td><?php echo $row->obtainmarks; ?></td>
						</tr>
						<?php } } ?>
					</table>
				</div>

				<div class="col-md-6">
					<h3> Second Term Result</h3>
					<table class="table">
						<tr>
							<th>Course Id</th>
							<th>Full Marks</th>
							<th>Pass Marks</th>
							<th>Obtain Marks</th>
						</tr>
						<?php foreach ($result->result() as $row) {

							if ($row->semester == 6 && $row->userid == $mail && $row->term == 2) {
						?>
						<tr>
							<td><?php echo $row->course_id; ?></td>
							<td><?php echo $row->fullmarks; ?></td>
							<td><?php echo $row->passmarks; ?></td>
							<td><?php echo $row->obtainmarks; ?></td>
						</tr>
						<?php } } ?>
					</table>
				</div>

		      </div>
		    </div>
		  </div>
		  <div class="panel panel-primary">
		    <div class="panel-heading" role="tab" id="headingThree">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
		          Seventh Semester Result
		        </a>
		      </h4>
		    </div>
		    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
		      <div class="panel-body">

				<div class="col-md-6">
					<h3> First Term Result</h3>
					<table class="table">
						<tr>
							<th>Course Id</th>
							<th>Full Marks</th>
							<th>Pass Marks</th>
							<th>Obtain Marks</th>
						</tr>
						<?php foreach ($result->result() as $row) {

							if ($row->semester == 7 && $row->userid == $mail && $row->term == 1) {
						?>
						<tr>
							<td><?php echo $row->course_id; ?></td>
							<td><?php echo $row->fullmarks; ?></td>
							<td><?php echo $row->passmarks; ?></td>
							<td><?php echo $row->obtainmarks; ?></td>
						</tr>
						<?php } } ?>
					</table>
				</div>

				<div class="col-md-6">
					<h3> Second Term Result</h3>
					<table class="table">
						<tr>
							<th>Course Id</th>
							<th>Full Marks</th>
							<th>Pass Marks</th>
							<th>Obtain Marks</th>
						</tr>
						<?php foreach ($result->result() as $row) {

							if ($row->semester == 7 && $row->userid == $mail && $row->term == 2) {
						?>
						<tr>
							<td><?php echo $row->course_id; ?></td>
							<td><?php echo $row->fullmarks; ?></td>
							<td><?php echo $row->passmarks; ?></td>
							<td><?php echo $row->obtainmarks; ?></td>
						</tr>
						<?php } } ?>
					</table>
				</div>

		      </div>
		    </div>
		  </div>
		  <div class="panel panel-primary">
		    <div class="panel-heading" role="tab" id="headingThree">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
		          Eighth Semester Result
		        </a>
		      </h4>
		    </div>
		    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
		      <div class="panel-body">
		        
				<div class="col-md-6">
					<h3> First Term Result</h3>
					<table class="table">
						<tr>
							<th>Course Id</th>
							<th>Full Marks</th>
							<th>Pass Marks</th>
							<th>Obtain Marks</th>
						</tr>
						<?php foreach ($result->result() as $row) {

							if ($row->semester == 8 && $row->userid == $mail && $row->term == 1) {
						?>
						<tr>
							<td><?php echo $row->course_id; ?></td>
							<td><?php echo $row->fullmarks; ?></td>
							<td><?php echo $row->passmarks; ?></td>
							<td><?php echo $row->obtainmarks; ?></td>
						</tr>
						<?php } } ?>
					</table>
				</div>

				<div class="col-md-6">
					<h3> Second Term Result</h3>
					<table class="table">
						<tr>
							<th>Course Id</th>
							<th>Full Marks</th>
							<th>Pass Marks</th>
							<th>Obtain Marks</th>
						</tr>
						<?php foreach ($result->result() as $row) {

							if ($row->semester == 8 && $row->userid == $mail && $row->term == 2) {
						?>
						<tr>
							<td><?php echo $row->course_id; ?></td>
							<td><?php echo $row->fullmarks; ?></td>
							<td><?php echo $row->passmarks; ?></td>
							<td><?php echo $row->obtainmarks; ?></td>
						</tr>
						<?php } } ?>
					</table>
				</div>

		      </div>
		    </div>
		  </div>
		</div>

	</div>
</div> 