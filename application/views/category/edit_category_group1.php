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

		<h2 class="text-primary">Edit Category Group</h2><br>

        <table class="table  table-striped table-bordered table-hover  table-condensed">

            <tr>
              <th class="text-info">ID</th>
              <th class="text-info">NAME</th>
              <th class="text-info">TITLE</th>
              <th class="text-info">STATUS</th>
            </tr>

            <?php $options = array(
                'active'	=> 'Active',
                'inactive'  => 'Inactive'
            )?>
            <?php foreach ( $aCategory_group as $key => $data ):?>
                <form action="<?php echo base_url()?>category/edit_category_group" method="post">
                <tr>
                <td> <?php echo ++$key ?> </td>
                <td> <?php echo '<input type = "text" name ="group_name" value = "'.$data->name.'">'; ?> </td>
                <td> <?php echo '<input type = "text" name ="group_title" value = "'.$data->title.'">';?> </td>
                <td><?php foreach ( $aStatus as $status ):?>
                        <?php if( $data->status == $status->id ):?>
                            <?php $group_status = $status->title ?>
                            <?php echo form_dropdown('category_group_status', $options, $group_status);?>
                        <?php endif;?>
                     <?php endforeach;?>
                </td>
                <td><button type="submit" class="btn btn-default" data-category ="<?php echo $data->id ?>">Update</button></td>
            <?php endforeach;?>
            </form>
        </table>

    </div>

</body>
</body>
</html>
