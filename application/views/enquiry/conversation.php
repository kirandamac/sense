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
          <h4 class="text-primary">Name </h4>
          <h4 class="text-primary">Email</h4>
          <h4 class="text-primary">Contact Number</h4>

          <pre><?php print_r($aEnquiry) ?></pre>
          <pre><?php print_r($aEnquiry_reply) ?></pre>

          <form class="forms" action="" method="post" style="width : 300px; height : 400px">
              <div class="form-group">
                  <textarea class="form-control" name="message" rows="4" cols="100" placeholder = "Type your message..."></textarea>
                  <input type="submit" name="" value="Enter" class="btn btn-primary">
              </div>
          </form>
      </div>
  </body>
 </html>
