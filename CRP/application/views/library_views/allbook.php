<body>


<div class="container">
<h1>All Book</h1>
  <!-- Search Book Part start -->
  <div class="row">
  <?php echo form_open('index.php/library/allbook/index'); ?>
    <div class="col-sm-3">
      <div class="form-group">
        <select name ="category" class="form-control">
          <option value="physics">Physics</option>
          <option value="biology">Biology</option>
          <option value="math">Math</option>
          <option value="programming">Programming</option>
        </select>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="form-group">
        <button class="btn btn-primary">Search</button>
      </div>
    </div>
    <?php echo form_close(); ?>
  </div>
  <!--End Search User Part -->


      <!--index all books -->
      <div class="table">
      <table class="table table-striped" >
        <tr>
          <th>Book id</th>
          <th>Title</th>
          <th>Author</th>
          <th>Description</th>
          <th>Total Book</th>
          <th>Department</th>
          <th>Category</th>
        </tr>
        <?php foreach ($book->result() as $row) {
             ?> 
        <tr>
          <td><?php echo $row->bookid; ?></td>
          <td><?php echo $row->booktitle; ?></td>
          <td><?php echo $row->author; ?></td>
          <td><?php echo $row->description; ?></td>
          <td><?php echo $row->totalbook; ?></td>
          <td><?php echo $row->department; ?></td>
          <td><?php echo $row->category; ?></td>
        </tr>
        <?php }  
         ?>
      </table>
    </div>
    
</div>