<?php if ( ! defined('ABSPATH')) exit; ?>

<div class="container">
  <div class="row">
  	<!-- Main component for a primary marketing message or call to action -->
    <div id="carousel" class="carousel slide col-xs-8 col-xs-offset-2" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="<?php echo HOME_URI . "/views/_images/ong.jpg"?>" alt="...">
          <div class="carousel-caption">
            <h3>Crianças da ONG "Esperança" fazem arte!</h3>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo HOME_URI . "/views/_images/ong.jpg"?>" alt="...">
          <div class="carousel-caption">
            <h3>Crianças da ONG "Esperança" fazem arte!</h3>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Dia das crianças -  ong tal</h2>
          <p>
          	<div class="row">
    		  <div class="col-xs-11">
    		    <a href="#" class="thumbnail">
    		      <img src="http://www.olyelazm.com/images/banner3.png" alt="...">
    		    </a>
    		  </div>
    		  Muito boms
    		</div>
          </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
  </div>
  <hr>
</div> <!-- /container -->
