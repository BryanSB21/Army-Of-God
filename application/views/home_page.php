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
          <img class="first-slide" src="assets/img/carousel.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-xs-left">
              <h1>Example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="assets/img/carousel.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="assets/img/carousel.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption text-xs-right">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
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

<script id="cid0020000148742594579" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 348px;height: 401px;">{"handle":"all4jchat","arch":"js","styles":{"a":"66cccc","b":100,"c":"000000","d":"000000","k":"66cccc","l":"66cccc","m":"66cccc","p":"10","q":"66cccc","r":100,"pos":"br","cv":1,"cvfnt":"'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif, sans-serif","cvfntsz":"15px","cvbg":"0084EF","cvw":100,"cvh":30}}</script>
