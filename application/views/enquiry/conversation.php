<html>
  <head>
    <meta charset="utf-8">
    <!--<link rel = "stylesheet" href = "http://localhost/sense/asset/css/bootstrap.min.css"> -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
          <?php foreach ( $aEnquiry as $data_enquiry ):?>
          <h5 class="text-success">Name</h5><h4 class="text-primary"><?php echo $data_enquiry->firstname." ".$data_enquiry->lastname;?></h4>
          <h5 class="text-success">Email</h5><h4 class="text-primary"><?php echo $data_enquiry->email;?></h4>
          <h5 class="text-success">Contact Number</h5><h4 class="text-primary"> <?php echo $data_enquiry->contact_number;?></h4>
          <h5 class="text-success">Enquiry</h5><h4 class="text-primary"> <?php echo $data_enquiry->message;?></h4>
          <?php endforeach; ?>

          <div class="container">
              <?php foreach ( $aEnquiry_reply as $data_reply ):?>
              <div class="row">
                  <div class="col-md-6">
                      <?php if( $data_reply->author_id == 1) {?>
                          <h5 class="text-success"><?php echo $data_reply->author_id ?><h4>
                          <h4 class="text-primary"><?php echo $data_reply->message ?><h4>
                      <?php } ?>
                  </div>
                  <div class="col-md-6">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                  </div>
                  <div class="col-md-6">
                      <?php if( $data_reply->author_id == 1) {?>
                          <h5 class="text-success"><?php echo $data_reply->author_id ?><h4>
                          <h4 class="text-primary"><?php echo $data_reply->message ?><h4>
                      <?php } ?>
                  </div>
              </div>
               <?php endforeach; ?>
          <div>

          <br>
          <form class="forms"
                action="<?php echo base_url()?>enquiry/add_conversation?id=<?php echo $data_enquiry->id ?>"
                method="post"
                id="postForm"
                style="width : 300px; height : 400px">
              <div class="form-group">
                  <textarea class="form-control"
                            name="message"
                            id="message"
                            rows="4"
                            cols="100"
                            placeholder = "Type your message..."></textarea>
              </div>
              <div class="form-group">
                  <input type="submit" name="" value="Enter" class="btn btn-primary">
              </div>
          </form>

      </div>

      <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  </body>
 </html>
