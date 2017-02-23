<?php
    if( !isset( $_SESSION['username'] ) ) redirect('signin');
?>

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

<div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Artikel dan Renungan</h1>
        <p class="lead blog-description">Mari kita membaca lebih sering</p>
      </div>
</div>

<div class="container">

<?php
            foreach ($artikel_data as $artikel)
            {
                ?>
<div class="card card-outline-primary">
  <div class="card-block">
    <h4 class="card-title"><?php echo $artikel->Judul ?></h4>
    <h6 class="card-subtitle mb-2 text-muted">Post on <?php echo $artikel->Tanggal ?></h6>
    <p class="card-text">
    <?=substr(strip_tags($artikel->Isi),0,200)?>...
    </p>
    <a href="#" class="card-link">
    <?php 
        echo anchor(site_url('beranda/read/'.$artikel->id_news),'readmore..', 'class="btn btn-primary"'); 
        ?></a>

  </div>
</div>

 <?php
            }
            ?>
<div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
            
</div>

<hr>




