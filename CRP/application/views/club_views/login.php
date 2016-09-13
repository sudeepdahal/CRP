<body>

<div class="container-fluid">
<div class="row">
  <div class="col-md-12">
    <img src="<?php echo base_url(); ?>/public/assets/images/crp.jpeg" class="img-responsive">
  </div>
</div>
</div>


<div class="row">
  <div class="col-md-12">
    <center>
      <h1><a href="<?php echo base_url('index.php/home');?>">Home</a></h1>
    </center>
  </div>
  <div class="col-xs-4">
  </div>

  <div class="col-xs-4 full-form">
  <!--login form start -->

    <?php echo form_open('index.php/club/login/entry','id="loginForm"'); ?>
        <div class="form-group">
          <h2>Club Login Forms</h2>
          <h4 class="text-sucess invalid-msg"><?php echo $message; ?></h4> 
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control"  id="firstname1" name="username" placeholder="Username" >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
        </div>
        <button type="submit" id="submit-button" class="btn btn-primary">Login</button>
        <div class="form-group">
          <a href="<?php echo base_url("index.php/forget_password");?>">
          <p class="forgot">Forgot Password</p></a>
        </div>
    <?php echo form_close(); ?>

 </div>
</div>

<script>
  $(function(){
    $("#loginForm").validate({
      rules:{
        username: "required",
        password: "required",
        },
        messages:{
          username: 'Please Enter Username',
          password: 'Please Enter Password',
        }
    });
  });

</script>
