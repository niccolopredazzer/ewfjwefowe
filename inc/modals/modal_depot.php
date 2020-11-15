<!-- Modal Depot Recharge -->
<div class="modal fade" id="reg-depot" tabindex="-1" role="dialog" aria-labelledby="reg-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body pad-depot">
        <div class="container">
          <div class="row mb-10 mt-10">
            <div class="col-12 text-uppercase text-center">
              <h5>Ricarica il tuo deposito</h5>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-6">
              <a href="javascript:void(0);" class="dpt-href no-wrap" id="bonifico">Bonifico Bancario</a>

            </div>
            <div class="col-6">
              <a href="javascript:void(0);" class="dpt-href no-wrap" id="carta">Carta di Credito</a>

            </div>

          </div>
          <br><br>
        </div>
        <div class="wrap-mod">
          <div class="container">
            <!-- Bonifico -->
            <div class="row pb-30 sw-bonifico">
              <div class="offset-md-1 col-md-10 col-sm-12 text-left">
                <span class="caption">
                  Effettua un bonifico a queste coordinate bancarie. <br>
                  Ricorda che su ogni bonifico è applicata una commissione dell’1%. <br>
                  Questo vuol dire, ad esempio, che a un bonifico da 1.000,00 &euro; <br>
                  corrisponderà una ricarica sul deposito pari a 990,00 &euro;. <br>
                  L’accredito impiega tipicamente 3 giorni lavorativi.
                </span>
              </div>
              <br><br>
              <div class="offset-md-1 col-md-10 col-sm-12 text-left mt-20">
                <label class="text-left float-left create-acc-lbl">IBAN</label>
                <input class="form-control tx-input input-md input-primary mb-1" type="text" placeholder="">
              </div>
              <div class="offset-md-1 col-md-10 col-sm-12 text-left mt-10 mb-10">
                <label class="text-left float-left create-acc-lbl">SWIFT / BIC</label>
                <input class="form-control tx-input input-md input-primary mb-1" type="text" placeholder="">
              </div>
              <div class="offset-md-1 col-md-10 col-sm-12 text-left mt-10 mb-10">
                <label class="text-left float-left create-acc-lbl">BANCA</label>
                <input class="form-control tx-input input-md input-primary mb-1" type="text" placeholder="">
              </div>
              <div class="offset-md-1 col-md-10 col-sm-12 text-left mt-10 mb-10">
                <label class="text-left float-left create-acc-lbl">INDIRIZZO BANCA</label>
                <input class="form-control tx-input input-md input-primary mb-1" type="text" placeholder="">
              </div>
              <div class="offset-md-1 col-md-10 col-sm-12 text-left mt-10 mb-10">
                <label class="text-left float-left create-acc-lbl">PAESE</label>
                <select class="form-control tx-select input-md input-primary mb-1" type="text" placeholder="">
                  <option value="">One</option>
                  <option value="">Two</option>
                  <option value="">Three</option>
                </select>
                <i class="fa fa-chevron-down"></i>
              </div>
              <div class="offset-md-1 col-md-10 col-sm-12 text-left mt-10 mb-10">
                <label class="text-left float-left create-acc-lbl">INTESTATARIO</label>
                <input class="form-control tx-input input-md input-primary mb-1" type="text" placeholder="">
              </div>
              <div class="offset-md-1 col-md-10 col-sm-12 text-left mt-10 mb-10">
                <label class="text-left float-left create-acc-lbl">CAUSALE *</label>
                <input class="form-control tx-input input-md input-primary mb-1" type="text" placeholder="">
              </div>

            </div>

          </div>
        </div>

        <div class="container btm-depot sw-bonifico">
          <div class="row">
            <div class="offset-md-1 col-md-10 col-sm-12 mb-10 mt-10">
              <span class="caption">
                Attenzione! Copia esattamente questo codice nel campo causale del tuo bonifico o non sarà possibile accreditare il denaro sul tuo deposito.
              </span>
            </div>
            <br class="clear"><br><br>
            <div class="offset-md-1 col-md-10 col-sm-12 col-sm-12">
              <div class="row">
                <div class="col-sm-12 col-md-6 bottom-login text-center text-md-left no-wrap mb-10">
                  <a name="" id="" class="btn btn-large btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#email-depot" href="#email-depot" role="button">Invia per Email</a>
                </div>
                <div class="col-sm-12 col-md-6 bottom-login text-center text-md-right no-wrap">
                  <a name="" id="" class="btn btn-large btn-primary" href="#" role="button">Stampa</a>
                </div>
              </div>
            </div>

          </div>
          <br><br>
        </div>
        <!-- End Bonifico -->
        <!-- Carta -->
        <div class="wrap-mod">
          <div class="container">
            <div class="row ptb-30 sw-carta">
              <div class="offset-md-1 col-md-10 col-sm-12 text-left">
                <span class="caption">
                  Inserisci l’importo della ricarica. <br>
                  Ricorda che su ogni bonifico è applicata una commissione del 2%.
                </span>
              </div>

              <br><br>
              <div class="offset-md-1 col-md-10 col-sm-12 text-left mt-20">
                <label class="text-left float-left create-acc-lbl">IMPORTO (MAX 1.000 &euro;)</label>
                <input class="form-control tx-input input-md input-primary mb-1" type="text" placeholder="">
              </div>
            </div>
          </div>
        </div>


        <div class="container btm-depot sw-carta">
          <div class="row">
            <div class="offset-md-1 col-md-10 col-sm-12 mb-10 mt-10">
              <span class="caption">
                Ti saranno accreditati sul deposito 980,00 &euro;, pari all’importo da te selezionato meno la commissione del 2%. Cliccando su “Continua” verrai reindirizzato a un sito sicuro per concludere l’operazione.
              </span>
            </div>
            <br class="clear"><br><br>
            <div class="offset-md-1 col-md-10 col-sm-12 col-sm-12">
              <div class="row">
                <div class="col-12 bottom-login text-center text-md-right">
                  <a name="" id="" class="btn btn-large btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#email-card" href="#email-card" role="button">Continua</a>
                </div>
              </div>
            </div>

          </div>
          <br><br>
        </div>
        <!-- End Carta -->
      </div>
    </div>
  </div>
</div>
<!-- Modal Email Debit -->
<div class="modal fade" id="email-depot" tabindex="-1" role="dialog" aria-labelledby="reg-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <br>
        <br>
        <div class="container">
          <div class="row">
            <div class="offset-md-1 col-md-10 text-center">
              <h2 class="text-center">Abbiamo inviato una email con le istruzioni per eseguire il bonifico</h2>
              <span class="caption">Segui le istruzioni per ricaricare il tuo conto. Ricorda che su ogni bonifico è applicata una commissione dell’1%. Questo vuol dire, ad esempio, che a un bonifico da 1.000,00 &euro; corrisponderà una ricarica sul deposito pari a 990,00 &euro;.</span>
            </div>
          </div>
        </div>
        <br>
        <br><br><br><br>
        <div class="row">
          <br class="d-block d-none-sm"><br>
          <div class="offset-md-1 col-md-10 text-center text-md-right">
            <a name="" id="" class="btn btn-large btn-primary" href="#" role="button" data-dismiss="modal"><i class="mt-check-filled confbtn mr-2" aria-hidden="true"></i><span>OK</span></a></div>
        </div>
        <br><br>
      </div>
    </div>
  </div>
</div>
<!-- Modal Email Credit -->
<div class="modal fade" id="email-card" tabindex="-1" role="dialog" aria-labelledby="reg-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <br>
        <br>
        <div class="container">
          <div class="row">
            <div class="offset-md-1 col-md-10 text-center">
              <h2 class="text-center">Abbiamo ricaricato correttamente il tuo deposito con carta di credito.</h2>
            </div>
          </div>
        </div>
        <br>
        <br><br><br><br>
        <div class="row">
          <br class="d-block d-none-sm"><br>
          <div class="offset-md-1 col-md-10 text-center text-md-right">
            <a name="" id="" class="btn btn-large btn-primary" href="#" role="button" data-dismiss="modal"><i class="mt-check-filled confbtn mr-2" aria-hidden="true"></i><span>OK</span></a></div>
        </div>
        <br><br>
      </div>
    </div>
  </div>
</div>
<!-- Modal Email Transfer -->
<div class="modal fade" id="email-trasf" tabindex="-1" role="dialog" aria-labelledby="reg-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <br>
        <br>
        <div class="container">
          <div class="row">
            <div class="offset-md-1 col-md-10 text-center">
              <h2 class="text-center">Trasferisci il denaro sul tuo conto corrente</h2>
              <span class="caption">Confermi di voler trasferire 20.590,00 &euro; sul tuo conto
                corrente N° KFNIO0003902LL presso UNIBANCA?</span>
            </div>
          </div>
        </div>
        <br>
        <br><br><br><br>
        <div class="row">
          <br class="d-block d-none-sm"><br>
          <div class="col-sm-12 col-md-6 bottom-login text-center text-md-left no-wrap mb-10">
            <a role="button" class="btn btn-medium btn-primary" data-dismiss="modal" href="javascript:void(0);"><i class="mt-cancel mr-2"></i>Annulla</a>
          </div>
          <div class="col-sm-12 col-md-6 text-center text-md-right no-wrap">
            <a name="" id="" class="btn btn-medium btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#chk-trasf" href="#chk-trasf" href="javascript:void(0);" role="button"><i class="mt-check-filled confbtn mr-2"></i>Conferma</a>
          </div>
        </div>
        <br><br>
      </div>
    </div>
  </div>
</div>
<!-- Modal Email Transfer -->
<div class="modal fade" id="chk-trasf" tabindex="-1" role="dialog" aria-labelledby="reg-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <br>
        <br>
        <div class="container">
          <div class="row">
            <div class="offset-md-1 col-md-10 text-center">
              <h2 class="text-center">Abbiamo ricevuto correttamente la tua richiesta. </h2>
              <span class="caption">Il denaro sarà accreditato sul tuo Conto Corrente entro 5 giorni lavorativi, senza alcun costo di commissione.</span>
            </div>
          </div>
        </div>
        <br>
        <br><br><br><br>
        <div class="row">
          <br class="d-block d-none-sm"><br>
          <div class="offset-md-1 col-md-10 text-center text-md-right no-wrap">
            <a name="" id="" class="btn btn-medium btn-primary" data-dismiss="modal" href="javascript:void(0);" role="button"><i class="mt-check-filled confbtn mr-2"></i>OK</a>
          </div>
        </div>
        <br><br>
      </div>
    </div>
  </div>
</div>