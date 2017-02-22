
   <link href="assets/css/style2.css" rel="stylesheet">
   <link href="assets/css/login.css" rel="stylesheet">


   <div class="container" style="padding-top: 140px;">

      <form class="form-signin" action="<?= base_url().'signin/login'?>" method="post">
      <h1 class="text-xs-center">Sign In</h1>
             <?php
              if ($this->session->flashdata('pesan')<> '') {?>
             <div class="text-xs-center alert alert-danger">
                  <?php echo $this->session->flashdata('pesan'); ?>
            </div>
            <?php  }  ?>

            <?php
              if ($this->session->flashdata('pesan1')<> '') {?>
             <div class="text-xs-center alert alert-success">
                  <?php echo $this->session->flashdata('pesan1'); ?>
            </div>
            <?php  }  ?>

        <label for="inputEmail" class="sr-only">Username</label>
        <input type="" id="inputEmail" class="form-control" placeholder="Username" autofocus="" required=""  name="username">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="password" required="" name="password">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn btn-primary btn-lg btn-block" type="submit" value="Login">Sign in</button>
      </form>

      <div class="text-xs-center">Don't Have a account?<a href="landing" style="display: inline-block; color: #1ac6ff; ">Create Account</a> </div>
      <br>
      <div class="text-xs-center"><a href="loginadm" style="display: inline-block; color: #0099ff; text-decoration:none;">Login Admin</a> </div>

    </div> <!-- /container -->

