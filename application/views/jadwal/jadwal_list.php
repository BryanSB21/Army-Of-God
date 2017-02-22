<?php
    if( !isset( $_SESSION['username'] ) ) redirect('loginadm');
?>

<link rel="stylesheet" type="text/css" href="assets/css/style2.css">

<div class="container">
        <h2 style="margin-top:0px">Jadwal List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('jadwal/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
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
		<th>Haritanggal</th>
		<th>Acara</th>
		<th>Tempat</th>
		<th>Pelayan</th>
		<th>Jam</th>
		<th>Action</th>
            </tr><?php
            foreach ($jadwal_data as $jadwal)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $jadwal->haritanggal ?></td>
			<td><?php echo $jadwal->acara ?></td>
			<td><?php echo $jadwal->tampat ?></td>
			<td><?php echo $jadwal->pelayan ?></td>
			<td><?php echo $jadwal->jam ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('jadwal/read/'.$jadwal->id_jadwal),'<i class="fa fa-search"></i>', 'class="btn btn-warning"'); 
				echo ' | '; 
				echo anchor(site_url('jadwal/update/'.$jadwal->id_jadwal),'<i class="fa fa-edit"></i>', 'class="btn btn-success"'); 
				echo ' | '; 
				echo anchor(site_url('jadwal/delete/'.$jadwal->id_jadwal),'<i class="fa fa-trash-o"></i>', 'class="btn btn btn-danger"','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
		<?php echo anchor(site_url('jadwal/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
</div>