<link href="assets/css/login.css" rel="stylesheet">

<a href="signin"><i class="fa fa-close" style="font-size:48px; padding: 10px;"></i></a>

<div class="container" style="padding-top: 145px;">

      <form class="form-signin" action="<?php echo base_url().'loginadm/aksi_login'; ?>" method="post">
        <h2 class="form-signin-heading text-xs-center">LOGIN ADMIN</h2>
              <?php
              if ($this->session->flashdata('pesan')<> '') {?>
             <div class="text-xs-center alert alert-danger">
                  <?php echo $this->session->flashdata('pesan'); ?>
            </div>
            <?php  }  ?>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="" id="inputEmail" class="form-control" placeholder="Username" required autofocus name="username">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

 </div> <!-- /container -->