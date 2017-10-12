<!DOCTYPE html>
<html>
<head>
	<!--<link rel = "stylesheet" href = "http://localhost/sense/asset/css/bootstrap.min.css"> -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<title>Category group management</title>
</head>
<body>

    <div class="container">

        <h2 class="text-primary">Edit Category Groups</h2><br>
        <form class="forms" action="" method="post" style="width : 250px; height : 400px">
            <div class="form-group">
                <label>Group Name</label>
                <select class="form-control" name="category_group">
                    <?php foreach ( $aCategory_group as $data ):
                        echo "<option value=".$data->id.">".$data->name."</option>";
                     endforeach;?>
                </select>
            </div>

            <div class="form-group">
                <label>Group Title *</label>
                <input type       ="text"
                       class      ="form-control"
                       placeholder=""
                       name       ="group_title"
                       value      ="">
            </div>

            <div class="form-group">
    			<label>Status</label>
    			<select class="form-control" name="category_group_status">
    				<?php foreach ( $aStatus as $data ):
    					echo "<option value=".$data->id.">".$data->title."</option>";
    				 endforeach;?>
    			</select>
    		</div>

            <button type="submit" class="btn btn-primary">Update / Back</button>
        </form>
    </div>
</body>
</body>
</html>
