
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id="wrapper">
    <div class="login-register" style="background-image:url(<?php echo base_url() ?>assets/images/background/login-register.jpg);">        
        <div class="login-box card">
        <div class="card-body">
            <form class="form-horizontal form-material"  action="<?php echo base_url() ?>auths/cekLogin" method="POST">
                <h3 class="box-title m-b-20">Sign In</h3>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" id="username" placeholder="Username" name="username"> </div>
                    </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" id="password" placeholder="Password" name="password"> </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-primary pull-left p-t-0">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup"> Remember me </label>
                        </div> 
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" id="loginform">Log In</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
    <?php if ($this->session->has_userdata('status_login')) { ?>
        <script>
            $.toast({
               text : "<?php echo $this->session->userdata('status_login')  ?>",
               icon : 'error',
               position : 'top-center'
            });
        </script>
      <?php   } ?>
    <script>
        var base_url = "<?php echo base_url() ?>";
    </script>
    
</section>