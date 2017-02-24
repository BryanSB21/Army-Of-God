<?php
    if( !isset( $_SESSION['username'] ) ) redirect('login');
?>

<br>
<link rel="stylesheet" type="text/css" href="assets/css/style2.css">

<div class="container">
        <h2 style="margin-top:0px">Jadwal List</h2>

        <table class="table table-striped" style="margin-bottom: 10px">
            <tr>
                
    <th>Haritanggal</th>
    <th>Acara</th>
    <th>Tempat</th>
    <th>Pelayan</th>
    <th>Jam</th>
            </tr><?php
            foreach ($jadwal_data as $jadwal)
            {
                ?>
                <tr>
      <td><?php echo $jadwal->haritanggal ?></td>
      <td><?php echo $jadwal->acara ?></td>
      <td><?php echo $jadwal->tampat ?></td>
      <td><?php echo $jadwal->pelayan ?></td>
      <td><?php echo $jadwal->jam ?></td>
    </tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
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