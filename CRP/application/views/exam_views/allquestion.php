<body>


<div class="container">
	<h1>All Questions </h1>
	<?php foreach ($exam->result() as $row) 
			{ ?>
		
		<div class="jumbotron">
		<?php 
		$qid = $row->qid;
		$segments = array('index.php/exam/question', 'detail', $qid);
		?>
		<a href="<?php echo site_url($segments); ?>">
		<h4>
		<?php
			echo $row->userid;
			echo "<br>";
			echo $row->course_name;

		?>::
		</h4>
		<p> Publish On::
			<?php
				echo $row->date;
			?>
		</p>

		<?php
			//echo $row->subjectname;
		?>
		</a>
		</div>
		<?php

			}
		?>
		<br>
		<?php echo $this->pagination->create_links(); ?>
	</div>
</div>

			