<!DOCTYPE html>
<html lang="en">
  <head>
    <title>thanks</title>
    <?php include("includes/htmlhead.php"); ?>
      <style>
        body{
            background-color: white;
            margin:auto;            
        }
          #thanks_content {
              padding-top: 5em;
          }
        h1{
            font-family: "Arial",sans-serif;
            font-size: 3em;
            color: #666;
            text-align: center;
            padding: 0.5em;
        }        
    </style>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php include("includes/navigation.php"); ?>
      </div>
      <!-- main content-->
      <div id='thanks_content'>
      <h1>Thank you for contacting us!:)</h1>
        <img id='thanks_robot'class='img-responsive center-block'src="error/blue_robot_small.png" alt="page not found">
      </div>
      <!--footer-->
      <div class="navbar navbar-inverse navbar-fixed-bottom" role='navigation'>
          <?php include("includes/footer.php"); ?>
      </div>   
  </body>
</html>