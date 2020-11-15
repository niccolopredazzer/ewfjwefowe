<?php include('inc/head.php'); ?>

<body>

  <?php include('inc/header-pages.php'); ?>


  <main id="main">
    <div class="d-none d-md-block">
      <section id="services" class="reg-top-bg">


        <div class="container">

          <h1 class="text-center">ANAGRAFICA</h1>

        </div>

      </section>
      <div class="container">
        <div class="row btn-bar">

          <div class="col-md-12 text-center">

            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-medium btn-primary change-me" target="data"><i class="mt-check-filled confbtn mr-2"></i>Dati</button>
              <button type="button" class="btn btn-medium btn-ghost-primary change-me" target="residence"><i class="mt-check-filled confbtn mr-2"></i>Residenza</button>
              <button type="button" class="btn btn-medium btn-ghost-primary change-me" target="document"><i class="mt-check-filled confbtn mr-2"></i>Documento</button>
              <button type="button" class="btn btn-medium btn-ghost-primary change-me" target="account"><i class="mt-check-filled confbtn mr-2"></i>Conto</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="d-block d-md-none">
      <section id="services-mobile" class="reg-top-bg-mobile">
        <div class="container">

          <span class="caption caption-left-user">Anagrafica</span>

        </div>

      </section>
      <div class="container">
        <div class="row btn-bar">
          <div class="col-12 text-center">
            <select class="resp-select input-md input-primary mb-1" type="text" id="sel-tabs">
              <option value="data">Dati</option>
              <option value="residence">Residenza</option>
              <option value="document">Documento</option>
              <option value="account">Conto</option>
            </select>
            <i class="mt-down-arrow"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="container mb-120 mt-80">

      <!-- Data -->
      <div class="row target-div" id="sld-data">

        <div class="offset-md-2 col-md-8">
          <div class="row">
            <div class="col-lg-6 mb-20">
              <label class="text-left float-left create-acc-lbl">Nome</label>
              <input class="form-control tx-input input-md input-primary mb-1" type="text" placeholder="Nome">

            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Cognome</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="Cognome">

            </div>
          </div>
          <div class="row border-input-reg">
            <div class="col-lg-6 mb-20">
              <label class="text-left float-left create-acc-lbl">Email</label>
              <input class="form-control tx-input input-primary mb-1" type="email" placeholder="Email">

            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Numero di telefono</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="Numero di telefono">

            </div>
          </div>

        </div>
        <div class="offset-md-2 col-md-8">
          <div class="row form-rows-mt form-rows-mb">
            <div class="col-lg-6 form-rows-mb">

              <label class="text-left float-left create-acc-lbl">Nazione di Nascita</label>
              <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="Nome">
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
              <i class="fa fa-chevron-down"></i>
            </div>
            <div class="col-lg-6">
              <label class="text-left float-left create-acc-lbl">Provincia di Nascita</label>
              <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="Nome">
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
              <i class="fa fa-chevron-down"></i>

            </div>
          </div>
          <div class="row form-rows-mb">
            <div class="col-md-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Città di nascita</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">

            </div>
            <div class="col-lg-6">
              <label class="text-left float-left create-acc-lbl">Data di nascita</label>
              <div class="input-group date-icon">

                <input class="form-control input-md input-primary tx-input" type="text" placeholder="GG/MM/AAAA">
                <div class="input-group-addon">
                  <a href="javascript:void(0);" id="pwd-control"><i class="mt-calendar cal-icon" aria-hidden="true"></i></a>
                </div>

              </div>

            </div>
          </div>
          <div class="row border-input-reg">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Codice Fiscale</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">

            </div>
          </div>
          <div class="row form-rows-mt form-rows-mb">
            <div class="col-12 text-center text-md-right">
              <button type="button" class="btn btn-medium btn-grey"><i class="mt-save mr-2"></i>Salva</button>

            </div>




          </div>

        </div>
      </div>
      <!-- End Data -->
      <!-- Residence -->
      <div class="row target-div" id="sld-residence">

        <div class="offset-md-2 col-md-8">
          <div class="row">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Nazione di Residenza</label>
              <input class="form-control tx-input input-md input-primary mb-1" type="text" placeholder="Nazione di residenza">

            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Provincia di Residenza</label>
              <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="Nazione di residenza">
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
              <i class="fa fa-chevron-down"></i>

            </div>
          </div>
          <div class="row border-input-reg">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Città</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="Città">

            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">CAP</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="CAP">

            </div>
          </div>

        </div>
        <div class="offset-md-2 col-md-8">
          <div class="row form-rows-mt form-rows-mb">
            <div class="col-lg-10 mb-20">

              <label class="text-left float-left create-acc-lbl">Indirizzo</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="Indirizzo">
            </div>
            <div class="col-lg-2">
              <label class="text-left float-left create-acc-lbl">N. Civico</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="Civico">


            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Da quanto risiedi a questo indirizzo?</label>
              <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="Nazione di residenza">
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
              <i class="fa fa-chevron-down"></i>
            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Prova di Residenza</label>
              <div class="input-group date-icon">

                <input class="form-control input-md input-primary tx-input" type="text" placeholder="SELEZIONA IL FILE">
                <div class="input-group-addon">
                  <a href="javascript:void(0);" id="pwd-control"><i class="mt-logout file-icon" aria-hidden="true"></i></a>
                </div>

              </div>
              <span class="caption-btn text-left float-left mt-10">Carica una foto a colori, .JPG o .PNG di una bolletta utenza fissa non più vecchia di tre mesi.</span>


            </div>
          </div>
          <div class="row border-input-reg">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Codice Fiscale</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">

            </div>
          </div>
          <div class="row form-rows-mt form-rows-mb">
            <div class="col-12 text-center text-md-right">
              <button type="button" class="btn btn-medium btn-grey"><i class="mt-save mr-2"></i>Salva</button>

            </div>
          </div>

        </div>
      </div>
      <!-- End Residence -->
      <!-- Doc -->
      <div class="row target-div" id="sld-document">

        <div class="offset-md-2 col-md-8">
          <div class="row">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Tipo di Documento</label>
              <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="Tipo di Documento">
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
              <i class="fa fa-chevron-down"></i>

            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Nr Documento</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="Città">

            </div>
          </div>
          <div class="row border-input-reg">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Autorità di Rilascio</label>
              <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="Autorità di rilascio">
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
              <i class="fa fa-chevron-down"></i>

            </div>
            <div class="col-lg-6">
              <label class="text-left float-left create-acc-lbl">Paese di Rilascio</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="Paese di rilascio">

            </div>
          </div>

        </div>
        <div class="offset-md-2 col-md-8">
          <div class="row form-rows-mt">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Provincia di Rilascio</label>
              <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="Provincia di rilascio">
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
              <i class="fa fa-chevron-down"></i>
            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Città di rilascio</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="Città di rilascio">


            </div>
          </div>
          <div class="row form-rows-mt">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Data di emissione</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="gg/mm/aaaa">
            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Scadenza</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="gg/mm/aaaa">


            </div>
          </div>
          <div class="row border-input-reg">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Fronte Documento</label>
              <div class="input-group date-icon">

                <label for="doc_id_front" class="file-upload">
                  SELEZIONA IL FILE
                </label>
                <input type="file" id="doc_id_front">
                <div class="input-group-addon">
                  <a href="javascript:void(0);" id="pwd-control"><i class="mt-logout file-icon" aria-hidden="true"></i></a>
                </div>

              </div>
              <span class="caption-btn text-left float-left mt-10">Carica una foto a colori, .JPG o .PNG di una bolletta utenza fissa non più vecchia di tre mesi.</span>

            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Retro Documento</label>
              <div class="input-group date-icon">

                <label for="doc_id_back" class="file-upload">
                  SELEZIONA IL FILE
                </label>
                <input type="file" id="doc_id_back">
                <div class="input-group-addon">
                  <a href="javascript:void(0);" id="pwd-control"><i class="mt-logout file-icon" aria-hidden="true"></i></a>
                </div>

              </div>
              <span class="caption-btn text-left float-left mt-10">Carica una foto a colori, .JPG o .PNG di una bolletta utenza fissa non più vecchia di tre mesi.</span>

            </div>
          </div>
          <div class="row form-rows-mt form-rows-mb">
            <div class="col-12 text-center text-md-right">
              <button type="button" class="btn btn-medium btn-primary"><i class="mt-save mr-2"></i>Salva</button>

            </div>
          </div>

        </div>
      </div>
      <!-- End Residence -->
      <!-- Account -->
      <div class="row target-div" id="sld-account">

        <div class="offset-md-2 col-md-8">
          <div class="row form-rows-mb">
            <div class="col-lg-6">
              <label class="text-left float-left create-acc-lbl">Intestatario del conto</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">

            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">IBAN</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">

            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">BIC/SWIFT</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">

            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Nome Banca</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">

            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Provincia</label>
              <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="">
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
              <i class="fa fa-chevron-down"></i>

            </div>
            <div class="col-lg-6">
              <label class="text-left float-left create-acc-lbl">Città</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">
            </div>
          </div>
        </div>
        <div class="offset-md-2 col-md-8">
          <div class="row form-rows-mt form-rows-mb">
            <div class="col-lg-10">
              <label class="text-left float-left create-acc-lbl">Indirizzo</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">
            </div>
          </div>

          <div class="row border-input-reg">
            <div class="col-lg-6 col-sm-12">
              <label class="text-left float-left create-acc-lbl">Documento Bancario</label><br>
              <a href="#" class="btn btn-primary btn-doc"><span class="mt-attach"></span> Condizioni Generali</a>
            </div>
            <div class="col-12">
              <span class="caption-btn text-left float-left mt-10">Carica una foto a colori di un estratto conto recente o screenshot dell’homebanking dove compaiono intestatario, IBAN, BIC/Swift e logo della banca. Sono ammessi formati jpg e png.</span>
            </div>
          </div>
          <div class="row form-rows-mt form-rows-mb">
            <div class="col-12 text-center text-md-right">

              <button type="button" class="btn btn-medium btn-primary"><i class="mt-save mr-2"></i>Salva</button>

            </div>
          </div>

        </div>
      </div>
      <!-- End Account -->

    </div>

  </main>

  <?php include('inc/footer-pages.php'); ?>
  <?php include('inc/modals.php'); ?>
  <?php include('inc/scripts.php'); ?>


</body>

</html>