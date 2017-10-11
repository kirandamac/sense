<!DOCTYPE html>
<html>
<head>
	<!--<link rel = "stylesheet" href = "http://localhost/sense/asset/css/bootstrap.min.css"> -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<title>Category management</title>
</head>
<body>
	<div class="container">

	  <h2 class="text-primary">Edit Category</h2><br>
	  <form class="forms" action="<?php echo base_url()?>category/edit_category" method="post" style="width : 300px; height : 400px">

		<div class="form-group">
  			<label>Select Group</label>
  			<select class="form-control" name="purpose">

  			</select>
  		</div>

		  <div class="form-group">
			  <label>Name</label>
			  <input type="text"
					 class="form-control"
					 placeholder=""
					 name="category_name"
					 value="<?php echo set_value('category_name'); ?>">
		 </div>

		 <div class="form-group">
		 	<label>Title</label>
		 	<input type="text"
		 		   class="form-control"
		 		   placeholder="Add last name"
		 		   name="title"
		 		   value="<?php echo set_value('title'); ?>">
		 </div>

		 <div class="form-group">
			 <label>Description</label>
			 <input type="text"
					class="form-control"
					placeholder="Add last name"
					name="description"
					value="<?php echo set_value('description'); ?>">
		</div>

		<div class="form-group">
  			<label>Status</label>
  			<select class="form-control" name="purpose">
  				
  			</select>
  		</div>

		<button type="submit" class="btn btn-primary">Update</button>

	</form>

    </div>

</body>
</body>
</html>
