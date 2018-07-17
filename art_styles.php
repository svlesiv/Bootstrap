<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Art</title>
    <?php include("includes/htmlhead.php"); ?>       
    
    <!--LightBox css and js-->
    <link rel="stylesheet" href="gallery/lightbox_gallery/src/css/lightbox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="gallery/lightbox_gallery/src/js/lightbox.js"></script>     
    <!--script to change plugin configuration for gallery-->
    <script type="text/javascript">     
        lightbox.option({
          'resizeDuration': 200,
          'wrapAround': true
        })  
    </script>    
    <!--additional css-->
    <link rel="stylesheet" href="gallery/style.css">
      
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php include("includes/navigation.php"); ?>
      </div>     
      <!-- main content-->       
    <section class="gallery">
        <h2>Python client-server <br>for neural style painting</h2>        
        <a href="gallery/gnp01.jpg" data-lightbox="neural style painting" data-title="input image"><img src="gallery/thumb/gnp01.jpg" class="img-responsive pull-left" alt='Yosemite'></a>
        <a href="gallery/gnp02.jpg" data-lightbox="neural style painting" data-title="style"><img src="gallery/thumb/gnp02.jpg" class="img-responsive pull-left" alt='The Starry Night Vincent van Gogh'></a>
        <a href="gallery/gnp03.jpg" data-lightbox="neural style painting" data-title="output image" ><img src="gallery/thumb/gnp03.jpg" class="img-responsive pull-left" alt='stylized image of Yosemite'></a>                
    </section>
    <!--description text-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <h3>Description</h3>
                     <p>The main purpose of this tutorial is to create functionality, that will let user apply painting style to their images. To accomplish this we will use a client-server architecture and python 3 language. The benefits of this approach is that the user doesn’t have to perform computation on his machine. The user will upload an image through a web browser, and the computation will be performed on AWS GPU instance. 
                    To accomplish this, the following steps need to be done:<br>
                     - write a python socket server, which will use ‘neural-style painting’ library to transform an image, based on a given painting style;<br>
                     - write a python socket client, which will send an image to the python server and will receive the transformed image back from the server;<br>
                     - the client-server interaction will be implemented using python socket module.
                    </p>
                </div>
            </div>
        </div>
     </section>
      <!--video-->      
    <section class="wrap" id="promo-video">
        <!--Turn any fixed-width grid layout into a full-width layout .container-fluid-->
    <div class="container-fluid">    
        <div class="row">
            <div class="col-md-8">
                <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vktU7b7tYx4" allowfullscreen></iframe>
            </div>
            </div>
        </div>
    </div>
</section> 
      <!--image-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <h3 >How it works?</h3>
                    <br>
                     <img src="img/gen_idea.jpg" class="img-responsive" alt="how it works">
                </div>
            </div>
        </div>
     </section>
      <!--files-->
      <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <h4>All files are accessible for downloading. Please, use button below to dowload all files you need.</h4>
                     <img src="img/files.jpg" class="img-responsive" alt="files"> 
                     <br>                    
                </div>
            </div>
        </div>
     </section>
      <!--button-->
      <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 pull-left">
        <a href='https://www.dropbox.com/sh/l4dib25ncwhafuj/AACcuzygMzGtajyQUaybliHTa?dl=0
' type="button" class="btn btn-primary">Download files</a>
                </div>
                </div>
          </div>
      
      <!--footer-->
      <div class="navbar navbar-inverse navbar-fixed-bottom" role='navigation'>
          <?php include("includes/footer.php"); ?>
      </div>    
  </body>
</html>