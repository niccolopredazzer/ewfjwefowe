<?php include('inc/head.php'); ?>

<body>

  <?php include('inc/header-pages.php'); ?>


  <main id="main">
    <div class="d-none d-md-block">
      <section id="services" class="top-bg-img">

        <img src="img/hero/hero.jpg" alt="" class="img-responsive">


      </section>
    </div>

    <div class="d-block d-md-none">
      <section id="services-mobile" class="reg-top-bg-mobile">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
            <span class="caption caption-left-user">Contatti</span>
            </div>
          </div>
          


        </div>

      </section>
    </div>

    <div class="container mb-120 mt-80">

      <div class="row">
        <div class="offset-md-2 col-md-8">
          <div class="row form-rows-mt form-rows-mb">
            <div class="col-12">
              <h1>Contatti</h1>
            </div>
          </div>
          <div class="row form-rows-mb">
            <div class="col-md-6">
              <label class="text-left float-left create-acc-lbl">Nome</label>
              <input class="form-control tx-input input-md input-primary mb-1" type="text" placeholder="">

            </div>
            <div class="col-md-6">
              <label class="text-left float-left create-acc-lbl">Cognome</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">

            </div>
          </div>
          <div class="row form-rows-mb">
            <div class="col-md-6">
              <label class="text-left float-left create-acc-lbl">Email</label>
              <input class="form-control tx-input input-primary mb-1" type="email" placeholder="Email">

            </div>
            <div class="col-md-6">
              <label class="text-left float-left create-acc-lbl">Telefono</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="Numero di telefono">

            </div>
          </div>
          <div class="row form-rows-mb">
            <div class="col-md-12">
              <label class="text-left float-left create-acc-lbl">Oggetto della richiesta</label>
              <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="">
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
              <i class="fa fa-chevron-down"></i>

            </div>
          </div>
          <div class="row form-rows-mb">
            <div class="col-md-12">
              <label class="text-left float-left create-acc-lbl">Messaggio</label>
              <textarea name="" id="" class="form-control tx-input input-primary" placeholder="Scrivi il tuo messaggio"></textarea>

            </div>
          </div>


          <div class="row border-input-reg-top form-rows-mb">
            <div class="col-sm-12 col-md-6 text-center text-md-left">
              <input type="checkbox" class="form-radio form-checkbox" name="consent1">
              <label class="caption" for="custom-check">Ho letto ed accetto le informazioni sulla privacy</label>

            </div>
            <div class="col-sm-12 col-md-6 text-center text-md-right">
              <button type="button" class="btn btn-medium btn-primary"><i class="mt-insert mr-2"></i>Invia</button>

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