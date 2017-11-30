<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo public_url('site') ?>/images/a.png" alt="" style="width:100%; height: 600px;">
      </div>

      <div class="item">
        <img src="<?php echo public_url('site') ?>/images/b.jpg" alt="" style="width:100%; height: 600px;">
      </div>
    
      <div class="item">
        <img src="<?php echo public_url('site') ?>/images/c.jpg" alt="" style="width:100%; height: 600px;">
      </div>
      <div class="item">
        <img src="<?php echo public_url('site') ?>/images/d.jpg" alt="" style="width:100%; height: 600px;">
      </div>
      <div class="item">
        <img src="<?php echo public_url('site') ?>/images/e.jpg" alt="" style="width:100%; height: 600px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>