
   <nav class="navbar navbar-static-top navbar-light bg-faded">
      <div class="container">
          <a class="navbar-brand" href="#">
            <img src="cross.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            UKM All 4 JC
          </a>
       
            <ul class="nav navbar-nav">
	             <li class="nav-item active">
	             	<a class="nav-link" href="#">Home Page<span class="sr-only">(current)</span></a>
	             </li>
	             <li class="nav-item">
	             	<a class="nav-link" href="#">Messages</a>
	             </li>
	             <li class="nav-item">
	             	<a class="nav-link" href="#">Jadwal Kegiatan</a>
	             </li>
            </ul>
 
    </nav>

 <?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>


    <div class="container cek">
  		<h2>Jadwal Kegiatan ALL4JC Tahun 2017</h2>
  		<?php echo $output; ?>
  	</div>


	

