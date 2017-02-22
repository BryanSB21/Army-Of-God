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
        <h2 style="margin-top:0px">User Read</h2>
        <table class="table">
	    <tr><td>Username</td><td><?php echo $username; ?></td></tr>
	    <tr><td>Namalengkap</td><td><?php echo $namalengkap; ?></td></tr>
	    <tr><td>Nim</td><td><?php echo $nim; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Phone</td><td><?php echo $phone; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('user') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>