<div class="row">
  <div class="col-xs-4">
  </div>

  <div class="col-xs-4 full-form">
  <!--login form start -->
    <?php echo form_open('login/entry'); ?>
        <div class="form-group">
          <h2>Login Form</h2>
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control" name="username" placeholder="Username" >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password" >
        </div>
        <div class="form-group">
          <label for="type">Select type</label>
          <select class="form-control" name="type">
            <option value="">Select</option>
            <option value="admin">Admin</option>
            <option value="staff">Staff</option>
            <option value="student">Student</option>
            <option value="library">Library</option>
            <option value="department">Department</option>
            <option value="club">club</option>
            <option value="account">Account</option>
            <option value="exam">Exam</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <div class="form-group">
          <a href="#">Forget Password</a>
        </div>
    <?php echo form_close(); ?>
 </div>
</div>
