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

	  <h2 class="text-primary">Create New Category</h2><br>
	  <h4 class="text-success"><?php echo $this->session->flashdata('message'); ?></h4>
	  <h4 class="text-danger"><?php echo validation_errors(); ?></h4><br>

	  <form class="forms" action="<?php echo base_url()?>category" method="post" style="width : 300px; height : 400px">

		  <div class="form-group">
			  <label>Name</label>
			  <input type       ="text"
					 class      ="form-control"
					 placeholder=""
					 name       ="name"
					 value      ="<?php echo set_value('name'); ?>">
		 </div>

		 <div class="form-group">
			 <label>Title</label>
			 <input type       ="text"
					class      ="form-control"
					placeholder=""
					name       ="title"
					value      ="<?php echo set_value('title'); ?>">
		</div>

		<div class="form-group">
			<label>Description</label>
			<textarea class    ="form-control"
					placeholder=""
					name       ="description"
					value      ="<?php echo set_value('description'); ?>"></textarea>
		</div>

		<div class="form-group">
			<label>Category Group</label>
			<select class="form-control" name="category_group">
				<?php foreach ( $aCategory_group as $data ):
					echo "<option value=".$data->id.">".$data->title."</option>";
				 endforeach;?>
			</select>
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>

	</form>

</body>
</body>
</html>
