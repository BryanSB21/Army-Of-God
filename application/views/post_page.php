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
        <a href="<?php echo base_url('beranda') ?>" class="btn btn-default">Cancel</a>
        <div class="container">

            
    	    <h2><?php echo $list->Judul; ?></h2>
            <p>Tanggal : <?php echo $list->Tanggal; ?></p>
            <div><?php echo $list->Isi; ?></div>

            
        </div>

        </body>
</html>