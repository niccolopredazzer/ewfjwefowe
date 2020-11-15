<?php include('inc/head.php'); ?>

<body>

  <?php include('inc/header-pages.php'); ?>
  <div class="d-block d-md-none">
    <section id="services-mobile" class="reg-top-bg-mobile dash-light-blue">
      <div class="container">

        <span class="caption caption-left-user">Deposito (20.590,00 &euro;)</span>


      </div>

    </section>
  </div>
  <?php include('inc/dashboard_deposito.php'); ?>

  <main id="main">

    <section class="pt-80 pb-100">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-10">
            <header class="section-header">
              <i class="mt-cube cube-deposito"></i>
              <h3>
                <span class="blue-price">20.590,00 &euro;</span> sul tuo deposito.
              </h3>
            </header>
            <a data-toggle="modal" data-target="#reg-depot" href="#reg-depot" class="btn btn-primary mt-10 mr-2" id="depoter"><i class="mt-credit mr-2"></i> Ricarica</a>
            <a data-toggle="modal" data-target="#email-trasf" href="#email-trasf" class="btn btn-primary mt-10"><img src="img/corner-right.png" alt=""> Trasferisci sul mio conto</a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php include('inc/footer-pages.php'); ?>
  <?php include('inc/modals/modal_depot.php'); ?>
  <?php include('inc/scripts.php'); ?>


</body>

</html>