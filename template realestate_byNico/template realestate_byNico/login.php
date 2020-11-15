<?php include('inc/head.php'); ?>

<body>

  <?php include('inc/header-pages.php'); ?>
  <div class="d-block d-md-none">
    <section id="services-mobile" class="reg-top-bg-mobile">
      <div class="container">

        <span class="caption caption-left-user">Accedi</span>


      </div>

    </section>
  </div>

  <main id="main">
    <section id="services" class="reg-top-bg d-none d-md-block">
      <div class="container">

        <h1 class="text-center">ACCEDI</h1>

      </div>

      </div>
    </section>

    <div class="container">
      <div class="row">

        <div class="offset-md-2 col-md-8">

          <div class="center-div mt-80 mb-80">
            <div class="row">
              <div class="col-md-12 text-center l-margin-icon">
                <button class="btn btn-giant btn-primary">
                  <i class="mt-user"></i>
                </button>
              </div>
            </div>
            <div class="container">
              <div class="row mt-80 mb-80">
                <div class="offset-md-3 col-md-6 offset-sm-2 mb-10">
                  <input type="text" class="form-control input-md tx-input input-primary" placeholder="EMAIL" autocomplete="off">
                </div>
                <div class="offset-md-3 col-md-6 mb-20">
                  <div class="input-group mb-10" id="show_hide_password">
                    <input class="form-control input-md input-primary tx-input" id="password-field" type="password" placeholder="*****">
                    <div class="input-group-addon">
                      <a href="javascript:void(0);" toggle="#password-field" class="pwd-control"><i class="mt-eye eye-pwd" aria-hidden="true"></i></a>
                    </div>

                  </div>
                  <span class="caption text-left float-right">
                    <a href="#res-pwd" data-toggle="modal" data-target="#res-pwd">Hai dimenticato la password?</a>
                  </span>
                </div>


              </div>

            </div>
            <div class="ptb-30 plr-20 bottom-stripe">
              <div class="row">
                <div class="col-md-6 col-sm-12 text-center text-md-left">
                  <span class="p2-paragraph">Non hai un account ? <a href="/register.php" class="p2-paragraph-bold">Registrati</a></span>
                </div>
                <div class="col-md-6 col-sm-12 text-center text-md-right">
                  <a href="/dashboard.php" class="btn btn-primary btn-giant login-btn"><i class="mt-next mr-2"></i></i>Accedi</a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

  </main>

  <?php include('inc/footer-pages.php'); ?>
  <?php include('inc/modals.php'); ?>
  <?php include('inc/scripts.php'); ?>


</body>

</html>