<!DOCTYPE html>
<html>
<head>
	<!--<link rel = "stylesheet" href = "http://localhost/sense/asset/css/bootstrap.min.css"> -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<title></title>
</head>
<body>
	<div class="container">
		<h2 class="text-primary">Enquiries</h2>
    		<table class="table  table-striped table-bordered table-hover  table-condensed">

			    <tr>
			      <th class="text-info" >ID</th>
			      <th class="text-info">NAME</th>
			      <th class="text-info">EMAIL</th>
			      <th class="text-info">CONTACT NUMBER</th>
			      <th class="text-info">MESSAGE</th>
			      <th class="text-info">PURPOSE</th>
			      <th class="text-info">RECEIVED ON</th>
				  <th class="text-info">ANSWERS</th>
				  <th class="text-info">ACTIONS</th>
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
					<td></td>
					<td><label for         ="reply"
							   name        ="reply"
							   class       ="text-info"
							   data-toggle ="modal"
							   data-target ="#enq_reply"
							   data-enquiry="<?php echo $data->id ?>" >
							   Give answer
						</label>
					</td>
			        </tr>

			    <?php endforeach;?>


				<div class="container">
					<div class="modal fade" id="enq_reply" role="dialog">
						<div class="modal-dialog"  role="document">
							<div class="modal-content">

								<form action=" " class="reply_modal" id="postForm" role="form">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h3>Reply</h3>
									</div>

									<div class="modal-body" style="height : 200px">
										<div class="form-group">
											<textarea placeholder="Give your message here..."
								                     id          = "message"
													 name 		 = "message"
								                     class       = "form-control"
								                     style       = "height : 150px">
								            </textarea>
							            </div>
									</div>

									<div class="modal-footer">
										<input type  	   ="submit"
											   name 	   ="save"
											   value 	   ="SAVE"
											   class	   ="btn btn-primary"
											   id 		   ="save"
											   data-dismiss="modal"
											   onclick	   ="submitForm()">
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>

  </table>
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
	$("label[name=reply]").click(function() {
		alert($(this).attr("data-enquiry"));
	});
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
				url:'<?php echo base_url()?>enquiry/add_enquiry_reply',
				data:$('form.reply_modal').serialize(),
				success: function(message) {
					url:'<?php echo base_url()?>enquiry/list_enquiries'
				},
				error: function(){
					alert("Error");
				}
			});
		}
	}
</script>
</body>
</html>
