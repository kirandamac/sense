<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://localhost/sense/asset/css/bootstrap.min.css">
  </head>

  <body>

      <div class="container">

        <h2 class = "text-primary">Contact Us</h2><br>
        <iframe src = "https://www.google.co.in/maps" width = "200" height = "200">Map</iframe><br><br>
        <h3 class = "text-primary">Submit Your Query</h3>
        <h4 class = "text-danger"><?php echo validation_errors(); ?></h4><br>

        <form action = "<?php echo base_url()?>" method  = "post" style = "width : 400px; height : 400px">

            <div class = "form-group">
                <label>First Name</label>
                <input type        = "text"
                       class       = "form-control"
                       placeholder = "Add first name"
                       name        = "fname"
                       value       = "<?php echo set_value('fname'); ?>">
           </div>

           <div class = "form-group">
               <label>Last Name</label>
               <input type        = "text"
                      class       = "form-control"
                      placeholder = "Add last name"
                      name        = "lname"
                      value       = "<?php echo set_value('lname'); ?>">
          </div>

          <div class = "form-group">
              <label>E-mail</label>
              <input type        = "text"
                     class       = "form-control"
                     placeholder = "Add email"
                     name        = "email"
                     value       = "<?php echo set_value('email'); ?>">
          </div>

          <div class = "form-group">
              <label>Contact Number</label>
              <input type        = "text"
                     class       = "form-control"
                     placeholder = "Add contact number"
                     name        = "contact_number"
                     value       = "<?php echo set_value('contact_number'); ?>">
          </div>

          <div class="form-group">
              <label>Purpose</label>
              <select class="form-control" name="purpose">
                  <option value = "1">Employment</option>
                  <option value = "2">General</option>
                  <option value = "3">Advertaisement</option>
              </select>
          </div>

          <div class="form-group">
              <label>Message</label>
              <textarea class     = "form-control"
                      placeholder = "Add message"
                      name        = "message"
                      value       = "<?php echo set_value('message'); ?>">
              </textarea>
          </div>

          <button type = "submit" class = "btn btn-default">Submit</button>

      </form>

  </body>
</html>
