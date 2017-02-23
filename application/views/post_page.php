<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
    </head>
    <style type="text/css">
        body{
            padding: 20px;
        }
    </style>
    <body>


    <a href="<?php echo site_url('beranda') ?>" class="btn btn-primary">Back</a>
   <div class="container">

      <div class="row">


            <div class="blog-post">
                <h2 class="blog-post-title"><?php echo $Judul; ?></h2>
                <p class="blog-post-meta">Post on <?php echo $Tanggal; ?> <a href="#">Mark</a></p>
                        
                        <div><?php echo $Isi; ?></div>
            </div>
        </div>
    </div>


<div class="container">
        <div class="col-lg-12">
    <!-- begin wwww.htmlcommentbox.com -->
            <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Box</a> is loading comments...
            </div>
                <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
                <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24Nk.I2qQG%2FQw%2F.I8RmX.PP1"+"&opts=16862&num=10&ts=1483788473111");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ 
                </script>
<!-- end www.htmlcommentbox.com -->
        </div>
    </div>

        </body>
</html>