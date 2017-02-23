<nav class="navbar navbar-static-top navbar-light bg-faded">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="assets/img/cross.svg" width="30" height="30" class="d-inline-block align-top " alt="">
          UKM All 4 JC
        </a>

                <ul class="nav navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="beranda">Home Page<span class="sr-only">(current)</span></a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="infojadwal">Jadwal Kegiatan</a>
                  </li>
                </ul>



              
              <div class="dropdown show float-xs-right">
                <a class="dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="fa fa-user-circle" style="font-size:24px"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Profil</a>
                  <!--<div class="dropdown-divider"></div>
                 <div class="dropdown-divider"></div>-->
                 <a class="dropdown-item" href="<?= base_url('beranda/logout')?>">Sign out</a>
                </div>
            </div>
 </div>
</nav>