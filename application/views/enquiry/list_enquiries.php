<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" href = "http://localhost/sense/asset/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class = "container">
		<a href = "">kiran</a>
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

								<form action = " " id = "postForm" role = "form">
									<div class = "modal-header">
										<button type = "button" class = "close" data-dismiss = "modal">&times;</button>
										<h3>Reply</h3>
									</div>

									<div class = "modal-body" style = "height : 200px">
										<div class = "form-group">
											<textarea placeholder = "Give your message here..."
								                     id           = "message"
													 name 		  = "message"
								                     class        = "form-control"
								                     style        = "height : 150px">
								            </textarea>
							            </div>
									</div>

									<div class = "modal-footer">
										<input type  		 = "submit"
											   name 		 = "save"
											   value 		 = "SAVE"
											   class		 = "btn btn-primary"
											   data-dismiss  = "modal"
											   id 			 = "save"
											   onclick		 = "submitForm()">
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>

  </table>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	function submitForm() {
		var message = $('#message').val();
		if(message.trim() == '' ) {
        	alert('Please enter your message.');
        	$('#message').focus();
        	return false;
		}
		else {
			$.ajax({
				type:'POST',
				url:'http://localhost/sense/enquiry/enquiry/add_enquiry_reply',
				data:'message='+message,
				success:function(msg){
                		if(msg == 'ok'){
                    		alert('success');
                		}
						else {
							alert('error');
                		}
				}
			});
		}
	}
</script>

</body>
</html>
