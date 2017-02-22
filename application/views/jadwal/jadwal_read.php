<?php
    if( !isset( $_SESSION['username'] ) ) redirect('loginadm');
?>

<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style type="text/css">
            body{
                padding: 70px;
            }
        </style>
    </head>
    <body>
         <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 style="margin-top:0px">Jadwal Read</h2>
                    <table class="table">
            	    <tr><td>Haritanggal</td><td><?php echo $haritanggal; ?></td></tr>
            	    <tr><td>Acara</td><td><?php echo $acara; ?></td></tr>
            	    <tr><td>Tempat</td><td><?php echo $tampat; ?></td></tr>
            	    <tr><td>Pelayan</td><td><?php echo $pelayan; ?></td></tr>
            	    <tr><td>Jam</td><td><?php echo $jam; ?></td></tr>
            	    <tr><td></td><td><a href="<?php echo site_url('jadwal') ?>" class="btn btn-default">Cancel</a></td></tr>
            	   </table>
                </div>
            </div>

         </div>
    </body>


</html>