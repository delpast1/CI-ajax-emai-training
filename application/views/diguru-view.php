
<!DOCTYPE html> 
<html lang = "en">
   <head> 
      <meta charset = "utf-8"> 
      <title>Diguruu</title> 
      <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/style.css"> 
      <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/bootstrap.min.css"> 
      
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script type = 'text/javascript' src = "<?php echo base_url(); 
         ?>assets/js/bootstrap.min.js"></script> 
         <script type="text/javascript">
           // Ajax post
            $(document).ready(function() {
              $("#submit").click(function(event) {
                event.preventDefault();
                var firstName = $("input#firstName").val();
                var lastName = $("input#lastName").val();
                var phoneNumber = $("input#phoneNumber").val();
                var email = $("input#email").val();
                var question = $("textarea#question").val();
                
                jQuery.ajax({
                  type: "POST",
                  url: "<?php echo base_url(); ?>" + "index.php/Form/submit",
                  dataType: 'json',
                  data: {
                    firstName: firstName, 
                    lastName: lastName, 
                    phoneNumber: phoneNumber,
                    email: email,
                    question: question
                    },
                  success: function(res) {
                    if (res.status)
                    {
                      jQuery("div#result").fadeIn();
                      $("#message").text(res.message);
                      
                    } else {
                      errors = '';
                      if (res.message.firstName){
                          errors = errors + res.message.firstName+'<br>';
                      }
                      if (res.message.lastName){
                          errors = errors + res.message.lastName+'<br>';
                      }
                      if (res.message.phoneNumber){
                          errors = errors + res.message.phoneNumber+'<br>';
                      }
                      if (res.message.email){
                          errors = errors + res.message.email+'<br>';
                      }
                      if (res.message.question){
                          errors = errors + res.message.question+'<br>';
                      }
                      $("#result").fadeIn();
                      jQuery("p#message").html(errors);
                    }
                  }
                });
              });
            });
          </script>
   </head>
	
   <body> 
      <div class="sixth-component">
        <div class="pull-left col-xs-4 col-xs-offset-1 contact">
          <div class="row">
            <p class="content1">get in touch</p>
          </div>
          <div class="row">
            <p class="content2">Digiruu Ltd</p>
            <p class="content3">Aldgate Tower,</p>
            <p class="content3">2 Leman Street,</p>
            <p class="content3">London, E18FA.</p>
            <br>
          </div>
          <div class="clearfix"> </div>
          <div class="row">
            <div class="content2 col-xs-1">
              <p>T:</p>
              <p>E:</p>
              <p>W:</p>
            </div>
            <div class="col-xs-offset-1">
              <p class="content3">07955 396 217</p>
              <p class="content3">info@digiruu.com</p>
              <p class="content3">www.digiruu.com</p>
            </div>
          </div>
        </div>	
        <div class="col-xs-6 form">
          <form action="">
            <div class="row">
              <div class="col-xs-6 nopadding-left ">
                <div class="form-group">
                  <input type="text" class="form-control input-field" placeholder="First Name*" name="firstName"
                    id="firstName">
                  <?php echo form_error('firstName', '<div class="error">', '</div>'); ?>
                </div>
              </div>
              <div class="col-xs-6 nopadding-right">
                <div class="form-group">
                  <input type="text" class="form-control input-field" placeholder="Last Name*" name="lastName"
                    id="lastName">
                    <?php echo form_error('lastName', '<div class="error">', '</div>'); ?>
                </div>
              </div>
              <div class="col-xs-6 nopadding-left">
                <div class="form-group">
                  <input type="text" class="form-control input-field" placeholder="Phone Number*" name="phoneNumber"
                    id="phoneNumber">
                    <?php echo form_error('phoneNumber', '<div class="error">', '</div>'); ?>
                </div>
              </div>
              <div class="col-xs-6 nopadding-right">
                <div class="form-group">
                  <input type="text" class="form-control input-field" placeholder="Email Address*" name="email"
                    id="email">
                    <?php echo form_error('email', '<div class="error">', '</div>'); ?>
                </div>
              </div>
            </div>
            <div class="row text-field">
              <div class="form-group">
                <textarea class="form-control" rows="6" placeholder="Your question*" name="question"
                  id="question"></textarea>
                  <?php echo form_error('question', '<div class="error">', '</div>'); ?>
                <div>
                  <button type="submit" class="btn" id="submit">SUBMIT</button>
                  <div class="pull-right notice">
                    <p>* denotes required field</p>
                  </div>
                </div>
                <div id='result' style='display: none'>
                    <p style="color: red; font-size: 14px;" id="message">
                      
                    </p>
                </div>
              </div>
            </div>
          </form>
        </div>	
      </div>
   </body>
</html>