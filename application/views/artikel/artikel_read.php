<?php
    if( !isset( $_SESSION['username'] ) ) redirect('loginadm');
?>

<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style type="text/css">
            body{
                padding: 50px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Artikel Read</h2>
        <a href="<?php echo site_url('artikel') ?>" class="btn btn-default">Cancel</a>
        <div class="container">
            
            <h2><?php echo $Judul; ?></h2>
            <p>Tanggal : <?php echo $Tanggal; ?></p>
            <div><?php echo $Isi; ?></div>
            
        </div>

        </body>
</html>