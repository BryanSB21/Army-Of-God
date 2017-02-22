<?php
    if( !isset( $_SESSION['username'] ) ) redirect('loginadm');
?>

<link rel="stylesheet" type="text/css" href="assets/css/style2.css">
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
              <?php 
                foreach($jadwal as $u){ 
                ?>
              <tbody>
                <tr>
                  <td><?php echo $u->haritanggal ?></td>
                  <td><?php echo $u->acara ?></td>
                  <td><?php echo $u->tampat ?></td>
                  <td><?php echo $u->pelayan ?></td>
                  <td><?php echo $u->jam ?></td>
                </tr>
              </tbody>
              <?php } ?>
            </table>
        </div>
</div>