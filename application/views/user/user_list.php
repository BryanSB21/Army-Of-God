<?php
    if( !isset( $_SESSION['username'] ) ) redirect('loginadm');
?>

<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
    </head>
    <body>
        <h2 style="margin-top:0px">User List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
        </div>
        <table class="table table-striped" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Username</th>
		<th>Namalengkap</th>
		<th>Nim</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Action</th>
            </tr><?php
            foreach ($user_data as $user)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $user->username ?></td>
			<td><?php echo $user->namalengkap ?></td>
			<td><?php echo $user->nim ?></td>
			<td><?php echo $user->email ?></td>
			<td><?php echo $user->phone ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('user/read/'.$user->id),'<i class="fa fa-search"></i>', 'class="btn btn-warning"'); 
				echo ' | '; 
				echo anchor(site_url('user/update/'.$user->id),'<i class="fa fa-edit"></i>', 'class="btn btn-success"'); 
				echo ' | '; 
				echo anchor(site_url('user/delete/'.$user->id),'<i class="fa fa-trash-o"></i>', 'class="btn btn btn-danger"','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('user/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>