<body>


<div class="container">
	<h1>All Notice </h1>
	<?php foreach ($notef->result() as $row) 
			{ ?>
		
		<div class="jumbotron">
		<?php 
		$seg=$row->nid;
		$segments = array('index.php/staff/notice', 'detail', $seg);
		?>
		<a href="<?php echo site_url($segments); ?>">
		<h4>
		<?php
			echo $row->postby;
		?>::
		</h4>
		<p> Publish On::
			<?php
				echo $row->publish_date;
			?>
		</p>

		Title::
		<?php
			echo $row->title;
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

			