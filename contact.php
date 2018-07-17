<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact</title>
    <?php include("includes/htmlhead.php"); ?> 
      
      <!--form validation-->
      <!--jQuery validate plugin -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>    
    <script type="text/javascript">
            $(document).ready(function(){
              var validation = $("#myForm").validate(
                {
                rules: {
                  name:  { required: true, minlength: 2 },
                  email: { required: true, email: true },
                  message:   { required: true, minlength: 7 }
                }
              });
            });
    </script>  
      
      <style>
          .row {
              padding-top:
              5em;}
      </style>
      
  </head>
  <body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php include("includes/navigation.php"); ?>
      </div>     
      
<!--main content-->
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well well-sm">
                <form class="form-horizontal"  id="myForm" method="post" action="http://aicreativemind.com/thanks.php">
        <fieldset>
            <legend class="text-center">Contact Us</legend>
      <!-- Name input-->
            <div class="form-group">
                <label class="col-md-3 control-label" for="name">Name</label>
                <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control"> 
                </div>
            </div>
      <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
            
        <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
      <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>      
      <!--footer-->
      <div class="navbar navbar-inverse navbar-fixed-bottom" role='navigation'>
          <?php include("includes/footer.php"); ?>
      </div>   
</body>
</html>