<?php include('inc/head.php'); ?>

<body>

  <?php include('inc/header-pages.php'); ?>


  <main id="main">
    <div class="d-none d-md-block">
      <section id="services" class="reg-top-bg">

        <div class="container">

          <h1 class="text-center">CREA IL TUO ACCOUNT</h1>

        </div>

      </section>
      <div class="container">
        <div class="row btn-bar">
          <div class="col-md-12 text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-medium btn-primary reg-switch" target="private">Privato</button>
              <button type="button" class="btn btn-medium btn-ghost-primary reg-switch" target="company">Società</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="d-block d-md-none">
      <section id="services-mobile" class="reg-top-bg-mobile">
        <div class="container">

          <span class="caption caption-left-user">Crea il tuo account</span>
        </div>
      </section>
      <div class="container">
        <div class="row btn-bar">
          <div class="col-md-12 text-center">
            <div class="btn-group form-rows-mt" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-medium btn-primary reg-switch form-rows-mt" target="private">Privato</button>
              <button type="button" class="btn btn-medium btn-ghost-primary reg-switch form-rows-mt" target="company">Società</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">

        <div class="offset-md-2 col-md-8">
          <!-- Private -->

          <div class="center-div mt-80 reg-sec mrg-pvt" id="div-private">
            <div class="row">
              <div class="col-md-12 text-center l-margin-icon">
                <button class="btn btn-giant btn-primary"><i class="mt-user"></i>
                </button>
              </div>
            </div>
            <div class="container">
              <div class="row mt-80 mb-60">
                <div class="offset-md-3 col-md-6 offset-sm-2 mb-10 margin-icon">
                  <input type="text" class="form-control input-md tx-input input-primary" placeholder="NOME" autocomplete="off">
                </div>
                <div class="offset-md-3 col-md-6 offset-sm-2 mb-10">
                  <input type="text" class="form-control input-md tx-input input-primary" placeholder="COGNOME" autocomplete="off">
                </div>
                <div class="offset-md-3 col-md-6 offset-sm-2 mb-10">
                  <input type="text" class="form-control input-md tx-input input-primary" placeholder="EMAIL" autocomplete="off">
                </div>
                <div class="offset-md-3 col-md-6 offset-sm-2 mb-10">
                  <input type="text" class="form-control input-md tx-input input-primary" placeholder="NUMERO DI TELEFONO (OPZIONALE)" autocomplete="off">
                </div>
                <div class="offset-md-3 col-md-6 mb-20">
                  <div class="input-group mb-10" id="show_hide_password">
                    <input class="form-control input-md input-primary tx-input" id="password-field" type="password" placeholder="*****">
                    <div class="input-group-addon">
                      <a href="javascript:void(0);" toggle="#password-field" class="pwd-control"><i class="mt-eye eye-pwd" aria-hidden="true"></i></a>
                    </div>

                  </div>
                </div>
                <div class="offset-md-3 col-md-6 mb-20">
                  <input type="checkbox" class="form-radio form-checkbox" name="consent1">
                  <label class="caption" for="custom-check">Ho letto e accetto i <span class="caption-bold">Termini e condizioni</span></label>
                  <br>
                  <input type="checkbox" class="form-radio form-checkbox" name="consent2">
                  <label class="caption" for="custom-check">Voglio iscrivermi alla newsletter</span></label>
                </div>

              </div>

            </div>
            <div class="ptb-30 plr-20 bottom-stripe">
              <div class="row">
                <div class="col-md-6 col-sm-12 text-center text-md-left">
                  <span class="p2-paragraph">Hai già un account ? <a href="/login.php" class="p2-paragraph-bold">Accedi</a></span>
                </div>
                <div class="col-md-6 col-sm-12 text-center text-md-right">
                  <a href="/check_email.php" class="btn btn-primary btn-giant login-btn"><i class="mt-next mr-2"></i></i>Registrati</a>
                </div>
              </div>
            </div>
          </div>
          <!-- End Private -->
          <!-- Company -->
          <div class="center-div-reg-cmp reg-sec" id="div-company">
            <div class="row">
              <div class="col-md-12 text-center l-margin-icon">
                <button class="btn btn-giant btn-primary"><i class="mt-user"></i>
                </button>
              </div>
            </div>
            <div class="container">
              <div class="row mt-80 mb-80">
                <div class="offset-md-3 col-md-6 offset-sm-2 mb-10 margin-icon">
                  <input type="text" class="form-control input-md tx-input input-primary" placeholder="Ragione sociale" autocomplete="off">
                </div>
                <div class="offset-md-3 col-md-6 offset-sm-2 mb-10">
                  <input type="text" class="form-control input-md tx-input input-primary" placeholder="EMAIL" autocomplete="off">
                </div>
                <div class="offset-md-3 col-md-6 offset-sm-2 mb-10">
                  <input type="text" class="form-control input-md tx-input input-primary" placeholder="NUMERO DI TELEFONO (OPZIONALE)" autocomplete="off">
                </div>
                <div class="offset-md-3 col-md-6 mb-20">
                  <div class="input-group mb-10" id="show_hide_password">
                    <input class="form-control input-md input-primary tx-input" id="password-field" type="password" placeholder="*****" autocomplete="off">
                    <div class="input-group-addon">
                      <a href="javascript:void(0);" toggle="#password-field" class="pwd-control"><i class="mt-eye eye-pwd" aria-hidden="true"></i></a>
                    </div>

                  </div>
                </div>
                <div class="offset-md-3 col-md-6 mb-20">
                  <input type="checkbox" class="form-radio form-checkbox" name="consent1">
                  <label class="caption" for="custom-check">Ho letto e accetto i <span class="caption-bold">Termini e condizioni</span></label>
                  <br>
                  <input type="checkbox" class="form-radio form-checkbox" name="consent2">
                  <label class="caption" for="custom-check">Voglio iscrivermi alla newsletter</span></label>
                </div>


              </div>

            </div>
            <div class="ptb-30 plr-20 bottom-stripe-reg-cmp">
              <div class="row">
                <div class="col-md-6 col-sm-12 text-center text-md-left">
                  <span class="p2-paragraph">Hai già un account ? <a href="/login.php" class="p2-paragraph-bold">Accedi</a></span>
                </div>
                <div class="col-md-6 col-sm-12 text-center text-md-right">
                  <a href="/check_email.php" class="btn btn-primary btn-giant login-btn"><i class="mt-next mr-2"></i></i>Registrati</a>
                </div>
              </div>
            </div>
          </div>
          <!-- End Company -->

        </div>

      </div>
    </div>

  </main>

  <?php include('inc/footer-pages.php'); ?>
  <?php include('inc/modals.php'); ?>
  <?php include('inc/scripts.php'); ?>


</body>


</html>