<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <?php include("includes/htmlhead.php"); ?>     
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php include("includes/navigation.php"); ?>
      </div>
      <!-- main content-->
      <div class="container">
          <!--carousel-->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <a href='art_styles.php'>
              <img src="img/starry_stanford.png" alt="neural style painting">
              </a>
              <div class="carousel-caption">
                <h3>Art Styles</h3>
              </div>
            </div>
            <div class="item">
              <img src="img/machine-learning-music-data_2.png" alt="machine learning music">
              <div class="carousel-caption">
                <h3>Creating Music</h3>
              </div>
            </div>
            <div class="item">
              <img src="img/neuron-synapse_2.jpg" alt="neuron synapse">
              <div class="carousel-caption">
                <h3>Machine Learning</h3>
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div> <!-- Carousel -->
      </div>
      <div class="container">          
          
          <div class="jumbotron text-left">
            <!--grid system-->
              <div class="row">
                  <div class="col-md-6">
                      <h2>Python client-server for <br>neural style painting</h2>
                      <p>The main purpose of this machine learning project is to let user apply painting style to their images.<br>To accomplish this we will use a client-server architecture and python 3 language.</p>
                      <a href="art_styles.php" class="btn btn-primary">read more</a>
                  </div>
                  <div class="col-md-6">
                      <img src="img/golden_gate_starry_scale2.png" class="img-responsive" alt="golden gate Vincent van Gogh style">
                  </div>
                </div>
              <hr/>
              <div class="row">
                  <div class="col-md-6">
                      <h2>Creating Music</h2>
                      <p>GRUV is a Python project for algorithmic music generation using recurrent neural networks.</p>
                      <a href="#" class="btn btn-primary">read more</a>
                  </div>
                  <div class="col-md-6">
                      <img src="img/piano.jpg" class="img-responsive" alt="robot playing piano">
                  </div>
                </div>
              <hr/>
              <div class="row">
                  <div class="col-md-6">
                      <h2>Image Classifier</h2>
                      <p>We will present a few simple yet effective methods, that can be used to build a powerful image classifier, using only very few training examples. </p>
                      <a href="#" class="btn btn-primary">read more</a>
                  </div>
                  <div class="col-md-6">
                      <img src="img/recogn_3.jpg" class="img-responsive" alt="classifying horses">
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