<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" href = "http://localhost/sense/asset/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class = "container">
		<h2 class = "text-primary">Enquiries</h2>
    		<table class = "table  table-striped table-bordered table-hover  table-condensed">

			    <tr>
			      <th class = "text-info" >ID</th>
			      <th class = "text-info">NAME</th>
			      <th class = "text-info">EMAIL</th>
			      <th class = "text-info">CONTACT NUMBER</th>
			      <th class = "text-info">MESSAGE</th>
			      <th class = "text-info">PURPOSE</th>
			      <th class = "text-info">RECEIVED ON</th>
				  <th class = "text-info">ACTION</th>
			    </tr>

			    <?php foreach ( $result as $key => $data ):?>

			        <tr>
			        <td> <?php echo ++$key ?> </td>
			        <td> <?php echo $data->firstname." ".$data->lastname ?> </td>
			        <td> <?php echo $data->email ?> </td>
			        <td> <?php echo $data->contact_number ?> </td>
			        <td> <?php echo $data->message ?> </td>
			        <td> <?php echo $data->purpose ?> </td>
			        <td> <?php echo date("d M Y",strtotime($data->created_on))?> </td>
					<td><label for = "reply" class = "text-info" data-toggle = "modal" data-target = "#enq_reply">Reply</label></td>
			        </tr>

			    <?php endforeach;?>


				<div class = "container">
					<div class = "modal fade" id = "enq_reply" role="dialog">
						<div class = "modal-dialog"  role="document">
							<div class = "modal-content">

								<form class = "" action = "http://localhost/sense/enquiry/add_enquiry_reply" method = "post" >

									<div class = "modal-header">
										<button type = "button" class = "close" data-dismiss = "modal">&times;</button>
										<h3>Reply</h3>
									</div>

									<div class = "modal-body">
										<div class = "form-group">
							              <input type = "text"
										  		 class = "form-control"
												 placeholder = "Give your message here..."
												 name = "reply">
							            </div>

									</div>

									<div class = "modal-footer">
										<button type = "submit" class = "btn btn-primary" data-dismiss = "modal">save</button>
										<button type = "button" class = "btn btn-default" data-dismiss = "modal">close</button>
									</div>
							</form>

							</div>
						</div>
					</div>
				</div>

  </table>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <script src="http://localhost/sense/asset/js/bootstrap.min.js"></script>
</body>
</html>
