<body>
<div class="container">
	<h1>Add Book Page</h1>

	<div class="row">
		<div class="col-md-12">
			<p class="sucmsg"><?php echo $sucmsg; ?>
			</p>
		</div>
	</div>
	
<div class="row">

	<div class="col-xs-1">	
	</div>
	<div class="col-xs-4">
		<?php echo form_open('index.php/library/addbook/addBook','id="addForm"');  ?>
		<div class="form-group">
			<label>Book Id</label>
			<input type="text" name="bookid" placeholder="Book Id" class="form-control">
		</div>
		<div class="form-group">
			<label>Book Title</label>
			<input type="text" name="booktitle" placeholder="Book Title" class="form-control">
		</div>
		<div class="form-group">
			<label>Author</label>
			<input type="text" name="author" placeholder="Author" class="form-control">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea name="description" class="form-control" rows="3"></textarea>
		</div>
		<div>
			<label>Total Book</label>
			<select name="totalbook" class="form-control">
				<option value="select">Select</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
			</select>
		</div class="form-group">
		<div>
			<label>Select Department</label>
			<select name="department" class="form-control">
				<option value="computer">Computer</option>
				<option value="electronic">Electronic</option>
				<option value="civil">Civil</option>
			</select>
		</div class="form-group">
		<div>
			<label>Select Category</label>
        	<select name ="category" class="form-control">
          		<option value="physics">Physics</option>
          		<option value="biology">Biology</option>
          		<option value="math">Math</option>
          		<option value="programming">programming</option>
        	</select>
		</div>
		<button class="btn btn-primary" type="submit">Add Book</button>
		<?php echo form_close(); ?>
		</div>
	</div>
</div>
</div>

<script>
  $(function(){
    $("#addForm").validate({
      rules:{
        bookid: "required",
        booktitle: "required",
        author: "required",
        description: "required",
        },
        messages:{
          bookid: 'Please Enter Book Id',
          booktitle: 'Please Book Title',
          author: 'Please Enter author',
          description: 'Please Enter description',
        }
    });
  }); 
</script>