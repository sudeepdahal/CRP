<body>
	<center>
      <h1><a href="<?php echo base_url('index.php/home');?>">Home</a></h1>
	<h2>Reset Password</h2>
	<?php echo form_open('exam/changePass/resetPassword','id="resetform"'); ?>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">		
				<div class="form-group">
				<p class="sucmsg"><?php echo $remsg; ?></p>
					<label>Enter User Id</label>
					<input type="text" for="email" name="email" value="<?php echo $mail; ?>" class="form-control" disabled>
				</div>
				<div class="form-group">
					<label>Enter Security Code</label>
					<input type="password" for="password" name="secode" class="form-control">
				</div>
				<div class="form-group">
					<label>Enter New Password</label>
					<input type="password" for="password" name="password" class="form-control">
				</div>
			<button class="btn btn-primary">Reset</button>
			</div>
			<div class="col-md-4"></div>
		</div>
	<?php echo form_close(); ?>
	</center>


<script>
  $(function(){
    $("#resetform").validate({
      rules:{
        email: "required",
        secode: "required",
        password: "required",
        },
        messages:{
          username: 'Please Enter Username',
          password: 'Please Enter Password',
        }
    });
  });
  
</script>

</body>