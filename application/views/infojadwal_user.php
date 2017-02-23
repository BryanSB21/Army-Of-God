<?php
    if( !isset( $_SESSION['username'] ) ) redirect('login');
?>

<br>
<div class="container cek">
  		<h2>Jadwal Kegiatan ALL4JC Tahun 2017</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Hari/Tanggal</th>
                  <th>Acara</th>
                  <th>Tempat</th>
                  <th>Pelayan</th>
                  <th>Waktu</th>
                </tr>
              </thead>
             
              <tbody>
                <?php 
                foreach($jadwal as $u){ 
                ?>
                <tr>
                  <td><?php echo $u->haritanggal ?></td>
                  <td><?php echo $u->acara ?></td>
                  <td><?php echo $u->tampat ?></td>
                  <td><?php echo $u->pelayan ?></td>
                  <td><?php echo $u->jam ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
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