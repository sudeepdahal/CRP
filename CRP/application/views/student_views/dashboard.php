<body>


<div class="container">
	<h1> Student Dashboard</h1>
	
	<div class="row">
		<div class="col-md-12">
			<p class="sucmsg"><?php echo $sucmsg; ?>
			</p>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3"></div>

		<!-- Notice Display Part -->
		<div class="col-sm-12">

			<h3>Reset Sec Code</h3>
			<?php echo form_open('index.php/student/dashboard/updatecode','id="reset"'); ?>
			<div class="form-group">
				<label>New Sec Code</label>
				<input type="text" name="sec_code" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Reset</button>
			<?php echo form_close(); ?>

			<hr>
			<h3>Recent Notices</h3>
			<?php foreach ($notef->result() as $row) 
					{ ?>

			<?php 
			$seg=$row->nid;
			$segments = array('index.php/student/notice', 'detail', $seg);
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
			<hr>
		<?php

			}
		?>
		
			<br>
			<a href=" <?php echo base_url('index.php/student/allnotice'); ?> " class="btn btn-primary " role="button">All Notice</a>
		</div>

	</div>
</div>


<script>
  $(function(){
    $("#reset").validate({
      rules:{
        sec_code: "required",
        },
        messages:{
          title: 'Please Enter Title',
        }
    });
  });
</script>
