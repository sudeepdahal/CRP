<!-- Navigation  Bar -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php  echo base_url("index.php/account/dashboard");?>">CRP</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php  echo base_url("index.php/account/dashboard");?>">Dashboard</a></li>
        <li><a href="<?php  echo base_url("index.php/account/allnotice");?>">All Notice</a></li>
        <li><a href="<?php  echo base_url("index.php/account/student_account");?>">Student Account</a></li>
        <li><a href="<?php  echo base_url("index.php/account/staff_account");?>">Staff Account</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $mail;?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
                      <li><a href="<?php  echo base_url("index.php/account/ChangePass");?>">Change Password</a></li>
            <li><a href="<?php  echo base_url("index.php/account/logout");?>">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- End of Navagation Bar -->
