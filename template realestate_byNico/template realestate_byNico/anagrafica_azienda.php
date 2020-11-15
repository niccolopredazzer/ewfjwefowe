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
              <button type="button" class="btn btn-medium btn-primary change-me" target="data-soc"><i class="mt-check-filled confbtn mr-2"></i>Dati Societari</button>
              <button type="button" class="btn btn-medium btn-ghost-primary change-me" target="domicilio"><i class="mt-check-filled confbtn mr-2"></i>Domicilio Fiscale</button>
              <button type="button" class="btn btn-medium btn-ghost-primary change-me" target="repr"><i class="mt-check-filled confbtn mr-2"></i>Rappresentante legale</button>
              <button type="button" class="btn btn-medium btn-ghost-primary change-me" target="soci"><i class="mt-check-filled confbtn mr-2"></i>Documentazione Soci</button>
              <button type="button" class="btn btn-medium btn-ghost-primary change-me" target="account-soc"><i class="mt-check-filled confbtn mr-2"></i>Conto</button>
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
              <option value="data-soc">Dati Societari</option>
              <option value="domicilio">Domicilio Fiscale</option>
              <option value="repr">Rappresentante Legale</option>
              <option value="soci">Documentazione Soci</option>
              <option value="account-soc">Conto</option>
            </select>
            <i class="mt-down-arrow"></i>
          </div>
        </div>
      </div>
    </div>


    <div class="container mb-120 mt-80">

      <!-- Data -->
      <div class="row target-div" id="sld-data-soc">

        <div class="offset-md-2 col-md-8">
          <div class="row">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Ragione Sociale</label>
              <input class="form-control tx-input input-md input-primary mb-1" type="text" placeholder="">

            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Partita Iva</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">

            </div>
          </div>
          <div class="row border-input-reg">
            <div class="col-lg-6 form-rows-mb">
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
            <div class="col-lg-6 mb-20">

              <label class="text-left float-left create-acc-lbl">Nazione in cui opera la società</label>
              <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="">
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
              <i class="fa fa-chevron-down"></i>
            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Sito Web</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">

            </div>
          </div>
          <div class="row border-input-reg">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Carica visura camerale dell’anno in corso</label>

              <div class="input-group date-icon">

                <label for="doc_visura" class="file-upload">
                  SELEZIONA IL FILE
                </label>
                <input type="file" id="doc_visura">
                <div class="input-group-addon">
                  <a href="javascript:void(0);" id="pwd-control"><i class="mt-logout file-icon" aria-hidden="true"></i></a>
                </div>

              </div>
              <span class="caption-btn text-left float-left mt-10">
                Carica una foto a colori della visura camerale di quest’anno. Sono ammessi formati jpg e png.
              </span>

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
      <!-- Domicilio -->
      <div class="row target-div" id="sld-domicilio">

        <div class="offset-md-2 col-md-8">
          <div class="row">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Nazione</label>
              <input class="form-control tx-input input-md input-primary mb-1" type="text" placeholder="Nazione">

            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Provincia</label>
              <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="Nazione">
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
          <div class="row form-rows-mt">
            <div class="col-lg-10 form-rows-mb">

              <label class="text-left float-left create-acc-lbl">Indirizzo</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="Indirizzo">
            </div>
            <div class="col-lg-2 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">N. Civico</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="Civico">


            </div>
          </div>
          <div class="row border-input-reg">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Carica il documento prova del domicilio</label>

              <div class="input-group date-icon">

                <label for="doc-domicilio" class="file-upload">
                  SELEZIONA IL FILE
                </label>
                <input type="file" id="doc-domicilio">
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
      <!-- End Domicilio -->

      <!-- Rappresentante Legale -->
      <div class="row target-div" id="sld-repr">

        <div class="offset-md-2 col-md-8">
          <div class="row">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Nome</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="Nome">

            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Cognome</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="Cognome">

            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Nazione di nascita</label>
              <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="">
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
              <i class="fa fa-chevron-down"></i>

            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Provincia di nascita</label>
              <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="">
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
              <i class="fa fa-chevron-down"></i>
            </div>

            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Città di nascita</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">
            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Data di nascita</label>
              <div class="input-group date-icon">

                <input class="form-control input-md input-primary tx-input" type="text" placeholder="GG/MM/AAAA">
                <div class="input-group-addon">
                  <a href="javascript:void(0);" id="pwd-control"><i class="mt-calendar cal-icon" aria-hidden="true"></i></a>
                </div>

              </div>

            </div>
          </div>
          <div class="row form-rows-mt border-input-reg">
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Codice Fiscale</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 form-rows-mt form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Tipo di Documento</label>
              <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="Tipo di Documento">
                <option value="">One</option>
                <option value="">Two</option>
                <option value="">Three</option>
              </select>
              <i class="fa fa-chevron-down"></i>

            </div>
            <div class="col-lg-6 form-rows-mt form-rows-mb">
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
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Paese di Rilascio</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="Paese di rilascio">

            </div>
          </div>

          <div class="row form-rows-mt">
            <div class="col-12 text-center">
              <h5>Documento d’identità del rappresentante legale</h5>
            </div>

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
              <label class="text-left float-left create-acc-lbl">Data di Emissione</label>
              <div class="input-group date-icon">

                <input class="form-control input-md input-primary tx-input" type="text" placeholder="GG/MM/AAAA">
                <div class="input-group-addon">
                  <a href="javascript:void(0);" id="pwd-control"><i class="mt-calendar cal-icon" aria-hidden="true"></i></a>
                </div>

              </div>
            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Data di Scadenza</label>
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
              <label class="text-left float-left create-acc-lbl">Fronte Documento</label>
              <div class="input-group date-icon">

                <label for="doc_front" class="file-upload">
                  SELEZIONA IL FILE
                </label>
                <input type="file" id="doc_front">
                <div class="input-group-addon">
                  <a href="javascript:void(0);" id="pwd-control"><i class="mt-logout file-icon" aria-hidden="true"></i></a>
                </div>

              </div>
              <span class="caption-btn text-left float-left mt-10">Carica una foto a colori, .JPG o .PNG di una bolletta utenza fissa non più vecchia di tre mesi.</span>

            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Retro Documento</label>
              <div class="input-group date-icon">

                <label for="doc_back" class="file-upload">
                  SELEZIONA IL FILE
                </label>
                <input type="file" id="doc_back">
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
      <!-- End Rappresentante Legale -->
      <!-- Soci -->
      <div class="row target-div" id="sld-soci">

        <div class="offset-md-2 col-md-8">


          <div class="col-12 text-center">
            <h6>Socio 1</h6>
          </div>
          <div class="col-12 text-center border-input-reg-top mb-20">
            <h6>Documento d’identità del rappresentante legale</h6>
          </div>
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
              <label class="text-left float-left create-acc-lbl">Data di Emissione</label>
              <div class="input-group date-icon">

                <input class="form-control input-md input-primary tx-input" type="text" placeholder="GG/MM/AAAA">
                <div class="input-group-addon">
                  <a href="javascript:void(0);" id="pwd-control"><i class="mt-calendar cal-icon" aria-hidden="true"></i></a>
                </div>

              </div>
            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Data di Scadenza</label>
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
              <label class="text-left float-left create-acc-lbl">Fronte Documento</label>
              <div class="input-group date-icon">

                <label for="doc-res-front" class="file-upload">
                  SELEZIONA IL FILE
                </label>
                <input type="file" id="doc-res-front">
                <div class="input-group-addon">
                  <a href="javascript:void(0);" id="pwd-control"><i class="mt-logout file-icon" aria-hidden="true"></i></a>
                </div>

              </div>
              <span class="caption-btn text-left float-left mt-10">Carica una foto a colori, .JPG o .PNG di una bolletta utenza fissa non più vecchia di tre mesi.</span>

            </div>
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Retro Documento</label>
              <div class="input-group date-icon">

                <label for="doc-res-back" class="file-upload">
                  SELEZIONA IL FILE
                </label>
                <input type="file" id="doc-res-back">
                <div class="input-group-addon">
                  <a href="javascript:void(0);" id="pwd-control"><i class="mt-logout file-icon" aria-hidden="true"></i></a>
                </div>

              </div>
              <span class="caption-btn text-left float-left mt-10">
                Carica una foto a colori, .JPG o .PNG di una bolletta utenza fissa non più vecchia di tre mesi.
              </span>

            </div>
          </div>
          <div class="row form-rows-mt form-rows-mb">
            <div class="col-lg-6 col-sm-12 text-center text-md-left">
              <button type="button" class="btn btn-medium btn-control add-socio"><i class="fa fa-plus mr-2"></i>Aggiungi Socio</button>

            </div>
            <div class="col-lg-6 col-sm-12 text-center text-md-right">
              <button type="button" class="btn btn-medium btn-primary"><i class="mt-save mr-2"></i>Salva</button>

            </div>

          </div>
        </div>
      </div>
      <!-- End Soci -->
      <!-- Account -->
      <div class="row target-div" id="sld-account-soc">

        <div class="offset-md-2 col-md-8">
          <div class="row">
            <div class="col-lg-6 form-rows-mb">
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
            <div class="col-lg-6 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Città</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">

            </div>
          </div>

        </div>
        <div class="offset-md-2 col-md-8">
          <div class="row form-rows-mt">
            <div class="col-lg-10 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Indirizzo</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">
            </div>
            <div class="col-lg-2 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">N. Civico</label>
              <input class="form-control tx-input input-primary mb-1" type="text" placeholder="">


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
            <div class="col-12 form-rows-mb">
              <label class="text-left float-left create-acc-lbl">Documento Bancario</label>
              <div class="input-group date-icon">

                <label for="doc-banca" class="file-upload">
                  SELEZIONA IL FILE
                </label>
                <input type="file" id="doc-banca">
                <div class="input-group-addon">
                  <a href="javascript:void(0);" id="pwd-control"><i class="mt-logout file-icon" aria-hidden="true"></i></a>
                </div>

              </div>
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