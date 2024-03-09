<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<!-- =============== Start of Page Header 1 Section =============== -->
<section class="page-header">
  <div class="container">
    <!-- Start of Page Title -->
    <div class="row">
      <div class="col-md-12">
        <h2>login</h2>
      </div>
    </div>
    <!-- End of Page Title -->

    <!-- Start of Breadcrumb -->
    <div class="row">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li><a href="#">home</a></li>
          <li class="active">pages</li>
        </ul>
      </div>
    </div>
    <!-- End of Breadcrumb -->
  </div>
</section>
<!-- =============== End of Page Header 1 Section =============== -->

<!-- ===== Start of Login - Register Section ===== -->
<section class="ptb80" id="login">
  <div class="container">
    <div class="col-md-6 col-md-offset-3 col-xs-12">
      <!-- Start of Login Box -->
      <div class="login-box">
        <div class="login-title">
          <h4>login to cariera</h4>
        </div>

        <!-- Start of Login Form -->
        <form action="#">
          <!-- Form Group -->
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Your Email" />
          </div>

          <!-- Form Group -->
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Your Password" />
          </div>

          <!-- Form Group -->
          <div class="form-group">
            <div class="row">
              <div class="col-xs-6">
                <input type="checkbox" id="remember-me2" />
                <label for="remember-me2">Remember me?</label>
              </div>

              <div class="col-xs-6 text-right">
                <a href="lost-password.html">Forgot password?</a>
              </div>
            </div>
          </div>

          <!-- Form Group -->
          <div class="form-group text-center">
            <button class="btn btn-warning btn-effect">Login</button>
            <a href="register.html" class="btn btn-warning btn-effect">signup</a>
          </div>
        </form>
        <!-- End of Login Form -->
      </div>
      <!-- End of Login Box -->
    </div>
  </div>
</section>
<!-- ===== End of Login - Register Section ===== -->

<!-- ===== Start of Get Started Section ===== -->
<!-- <section class="get-started ptb40">
      <div class="container">
        <div class="row">
          
          <div class="col-md-10 col-sm-9 col-xs-12">
            <h3 class="text-white">
              20,000+ People trust Cariera! Be one of them today.
            </h3>
          </div>

          
          <div class="col-md-2 col-sm-3 col-xs-12">
            <a href="#" class="btn btn-blue btn-effect">get start now</a>
          </div>
        </div>
      </div>
    </section> -->
<!-- ===== End of Get Started Section ===== -->

<?php include('includes/footer.php'); ?>
<?php include('includes/scripts.php'); ?>