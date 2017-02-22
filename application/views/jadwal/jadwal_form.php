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
         <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                 

                    <h1 style="margin-top:0px">Jadwal <?php echo $button ?></h1>
                    <hr>
                    <form action="<?php echo $action; ?>" method="post">
            	    <div class="form-group">
                        <label for="date">Hari/Tanggal <?php echo form_error('haritanggal') ?></label>
                        <input type="date" class="form-control" name="haritanggal" id="haritanggal" placeholder="Haritanggal" value="<?php echo $haritanggal; ?>" />
                    </div>
            	    <div class="form-group">
                        <label for="varchar">Acara <?php echo form_error('acara') ?></label>
                        <input type="text" class="form-control" name="acara" id="acara" placeholder="Acara" value="<?php echo $acara; ?>" />
                    </div>
            	    <div class="form-group">
                        <label for="varchar">Tempat <?php echo form_error('tampat') ?></label>
                        <input type="text" class="form-control" name="tampat" id="tampat" placeholder="Tempat" value="<?php echo $tampat; ?>" />
                    </div>
            	    <div class="form-group">
                        <label for="varchar">Pelayan <?php echo form_error('pelayan') ?></label>
                        <input type="text" class="form-control" name="pelayan" id="pelayan" placeholder="Pelayan" value="<?php echo $pelayan; ?>" />
                    </div>
            	    <div class="form-group">
                        <label for="varchar">Jam <?php echo form_error('jam') ?></label>
                        <input type="text" class="form-control" name="jam" id="jam" placeholder="Jam" value="<?php echo $jam; ?>" />
                    </div>
            	    <input type="hidden" name="id_jadwal" value="<?php echo $id_jadwal; ?>" /> 
            	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
            	    <a href="<?php echo site_url('jadwal') ?>" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>

         </div>
    </body>


</html>