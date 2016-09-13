
<body>


<div class="main_body">
  <div class="container">
  <h1>Manage user Page</h1>

  <div class="row">
    <div class="col-md-12">
      <p class="sucmsg"><?php echo $sucmsg; ?>
      </p>
    </div>
  </div>

    <!-- Add User Part start -->
    <div class="add_user">
      <h3>Add New User</h3>
      <?php echo form_open('index.php/admin/manageuser/addUser','id="addForm"');?>
      <div class="row">
        <div class="col-sm-3">
          <div class="form-group">
            <label>User Id</label>
            <input type="text" name="userid" class="form-control" placeholder="User id">
          </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Password</label>
              <input type="text" name="password" class="form-control" placeholder="Password">
          </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control" placeholder="Name">
          </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label>User type</label>
              <select name="user_type" class="form-control">
                <option value="">Select</option>
                <option value="admin">Admin</option>
                <option value="student">Student</option>
                <option value="staff">Staff</option>
                <option value="library">Library</option>
                <option value="account">Account</option>
                <option value="department">Department</option>
                <option value="exam">Exam</option>
                <option value="club">Club</option>
              </select>
            </div>
          </div>
          <br>
          <div class="col-sm-1">
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
      </div>
      <?php echo form_close(); ?>
    </div>
    <!-- Add User Part end -->


    <!-- Search User Part start -->
    <div class="row">
      <div class="col-md-6">
        <div class="search">
          <h3>Search User</h3>
          <?php echo form_open('index.php/admin/manageuser/showAllUser');?>
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label>User type</label>
                <select name="search_usertype" class="form-control">
                  <option value="">Select</option>
                  <option value="admin">Admin</option>
                  <option value="student">Student</option>
                  <option value="staff">Staff</option>
                  <option value="library">Library</option>
                  <option value="account">Account</option>
                  <option value="department">Department</option>
                  <option value="exam">Exam</option>
                  <option value="club">Club</option>
              </select>
              </div>
            </div>
            <br>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="search">Search</button>
            </div>
          </div>
            
          <?php echo form_close(); ?>
        </div>
      </div>
      <!--End Search User Part -->


      <!-- Delete User Part start -->
      <div class="col-md-6">
        <div class="Delete">
          <h3>Delete User</h3>
          <?php echo form_open('index.php/admin/manageuser/deleteUser','id="deleteForm"');?>
          <div class="col-sm-3">
            <input type="search" name="uid" class="form-control" placeholder="UserId">
          </div>
            <button type="submit" class="btn btn-primary" name="Delete">Delete</button>
          <?php echo form_close(); ?>
        </div>
      </div>
      <!-- Delete User Part End -->

    </div>


    <!-- Display User on taable -->
    <div class="table">
      <table class="table table-striped" >
        <tr>
          <th>Uid</th>
          <th>Password</th>
          <th>Name</th>
          <th>Type</th>
        </tr>
        <?php foreach ($user->result() as $row) {
             ?> 
        <tr>
          <td><?php echo $row->userid; ?></td>
          <td><?php echo $row->password; ?></td>
          <td><?php echo $row->name; ?></td>
          <td><?php echo $row->usertype; ?></td>
        </tr>
        <?php }  
         ?>
      </table>
    </div>
 

  </div>
</div>

<script>
  $(function(){
    $("#addForm").validate({
      rules:{
        userid: "required",
        password: "required",
        name: "required",
        },
        messages:{
          userid: 'Please Enter User Id',
          password: 'Please Enter Password',
          name: 'Please Enter payedamount',
        }
    });
  }); 
</script>

<script>
  $(function(){
    $("#deleteForm").validate({
      rules:{
        uid: "required",
        },
        messages:{
          uid: 'Please Enter User Id',
        }
    });
  });
  
</script>
