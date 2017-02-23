<?php
    if( !isset( $_SESSION['username'] ) ) redirect('signin');
?>


 <link href="assets/css/style2.css" rel="stylesheet">
 <link href="assets/css/clean-blog.css" rel="stylesheet">

 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="first-slide" src="assets/img/cover.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="assets/img/6.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="assets/img/krisma.jpg" alt="Third slide">
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


<div class="container">
      <?php 
        foreach($list as $u){ 
        ?>
        <div class="post-preview">
            <a href="#">
                <h2 class="post-title">
                    <?php echo $u->Judul ?>
                </h2>
            </a>
            <p class="post-meta">Posted on <?php echo $u->Tanggal ?></p>
        </div>
        <hr>
        <?php } ?>
        <!-- Pager -->
        <ul class="pager">
            <li class="next">
                <a href="#">Older Posts &rarr;</a>
            </li>
        </ul>
</div>

<hr>

