<h3>Detail notice Page</h3>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php foreach ($notice->result() as $row){ 
			?>

			<h3>Publish By
				<?php
					echo $row->postby;
				?>
			</h3>

			<div class="col-sm-12">
				<p> Publish On::
				<?php
					echo $row->publish_date;
				?>
				</p>
			</div>

			<div class="col-sm-12">
			<h3>Notice Title</h3>
				<p>
				<?php
					echo $row->title;
				?>
				</p>
			</div>

			<div class="col-sm-12">
			<h3>Notice Body</h3>
				<p>
				<?php
					echo $row->body;
				?>
				</p>
			</div>

			<?php } ?>
		</div>
	</div>
</div>