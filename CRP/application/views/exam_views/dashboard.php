
<body>

<div class="container">
<div class="row">
	<div class="col-md-8">
		<h1> Exam Controller Dashboard</h1>
		<p class="sucmsg"><?php echo $sucmsg; ?>
			</p>
	</div>
	<div class="col-md-4">
		<img src="<?php echo base_url(); ?>/public/assets/images/exam.jpg" alt="Exam Controller" class="img-right img-rounded">
	</div>
</div>
	<div class="row">
	

		<!-- Notice Display Part -->
		<div class="col-sm-4">
			<h3>Reset Sec Code</h3>
			<?php echo form_open('index.php/exam/dashboard/updatecode','id="reset"'); ?>
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
			$segments = array('index.php/exam/notice', 'detail', $seg);
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
			<a href=" <?php echo base_url('index.php/exam/allnotice'); ?> " class="btn btn-primary " role="button">All Notice</a>
		</div>
		

		<!-- Notice Writing Part -->
		<div class="col-sm-8">
			<h3> Add New Notices</h3>
			<?php echo form_open('index.php/exam/dashboard/addNotice','id="noticeForm"'); ?>
				<div class="form-group">
					<label>Title</label>
					<input type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label>Body</label>
					<textarea name="body"></textarea>
        			<script>
           			CKEDITOR.replace( 'body' );
        			</script>
				</div>
				<div class="form-group">
					<label>Notices Type</label>
					<select class="form-control" name="ntype">
						<option value="all">All</option>
						<option value="staff">Staff Only</option>
						<option value="student">Student Only</option>
					</select>
				</div>
				<div class="form-group">
					<label>Publish Date</label>
					<input 
						type="text" name="date" 
						placeholder="<?php 
											$datestring = '%Y/%m/%d';
											echo mdate($datestring); 
										?>" 
						class="form-control" id="disabledInput" disabled>
				</div>	
				<input type="hidden" name="postby" value="exam">
				<button type="submit" class="btn btn-primary">Add</button>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>


<script>
  $(function(){
    $("#noticeForm").validate({
      rules:{
        title: "required",
        body: "required",
        },
        messages:{
          title: 'Please Enter Title',
          body: 'Please Enter Notice Body',
        }
    });
  });
  
</script>


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
