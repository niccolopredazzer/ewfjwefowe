<?php include('inc/head.php'); ?>

<body>

  <?php include('inc/header-pages.php'); ?>


  <main id="main">
    <div class="d-none d-md-block">
      <section id="services" class="top-bg-img">

        <img src="img/hero/hero-slider.jpg" alt="" class="img-responsive">


      </section>
    </div>

    <div class="d-block d-md-none">
      <section id="services-mobile" class="reg-top-bg-mobile">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
            <span class="caption caption-left-user">Proponi un immobile</span>
            </div>
          </div>
          


        </div>

      </section>
    </div>


    <div class="container mb-120 mt-80">

      <!-- Data -->
      <div class="row">

        <div class="offset-md-2 col-md-8">
          <div class="row form-rows-mt form-rows-mb">
            <div class="col-12">
              <h1>PROPONI UN IMMOBILE</h1>
              <p class="p1-paragraph">Vorresti proporre un immobile ? Compila il form e verrai contattato il prima possibile da un nostro consulente.</p>

            </div>
          </div>
          <div class="row form-rows-mt">
            <div class="col-12">
              <h6>I TUOI DATI</h6>

            </div>
          </div>
          <div class="row form-rows-mb border-input-reg-top">
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
              <label class="text-left float-left create-acc-lbl">Azienda</label>
              <input class="form-control tx-input input-md input-primary mb-1" type="text" placeholder="">

            </div>
            <div class="col-md-6">
              <label class="text-left float-left create-acc-lbl">Ruolo</label>
              <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="">
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
              <i class="fa fa-chevron-down"></i>

            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label class="text-left float-left create-acc-lbl">Email</label>
              <input class="form-control tx-input input-primary mb-1" type="email" placeholder="Email">

            </div>
            <div class="col-md-6">
              <label class="text-left float-left create-acc-lbl">Telefono</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="Numero di telefono">

            </div>
          </div>

        </div>


        <div class="offset-md-2 col-md-8 mt-40">
          <div class="row form-rows-mt">
            <div class="col-12">
              <h6>INFORMAZIONI SULL’IMMOBILE</h6>

            </div>
          </div>
          <div class="row form-rows-mb border-input-reg-top">
            <div class="col-md-6">

              <label class="text-left float-left create-acc-lbl">Categoria Immobile</label>
              <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="">
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
              <i class="fa fa-chevron-down"></i>
            </div>
            <div class="col-md-6">
              <label class="text-left float-left create-acc-lbl">Tipologia Immobile</label>
              <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="">
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
              <i class="fa fa-chevron-down"></i>

            </div>
          </div>
          <div class="row form-rows-mb">
            <div class="col-md-6">
              <label class="text-left float-left create-acc-lbl">Dimensioni</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">

            </div>
            <div class="col-md-6">
              <label class="text-left float-left create-acc-lbl">Stato dell'immobile</label>
              <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="">
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
              <i class="fa fa-chevron-down"></i>

            </div>

          </div>
          <div class="row form-rows-mb">
            <div class="col-md-6">
              <label class="text-left float-left create-acc-lbl">Città</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">

            </div>
            <div class="col-md-6">
              <label class="text-left float-left create-acc-lbl">Posizione</label>
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
              <label class="text-left float-left create-acc-lbl">Altro</label>
              <textarea name="" id="" class="form-control tx-input input-primary" placeholder="Informazioni aggiuntive"></textarea>

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