<?php include('inc/header.php'); ?>

        <section class="contact" style="">
          <div class="container pt-4">
            <div class="row d-flex row-gap-4 justify-content-between">
              <div class="col-1 d-none d-lg-flex align-items-end justify-content-end">
                <img src="/static/img/squares-2.svg">
              </div>
              <div class="col-12 col-lg-5 d-flex flex-column gap-3">
                <div class="d-flex flex-column gap-1">
                  <h2><strong>Contact us</strong></h2>
                  <p>Feel free to contact us any time, <br>we will get back to you as soon we can!</p>
                </div>
                <form action="send-contact-email.php" method="POST" class="d-flex flex-column gap-2">
                  <fieldset class="d-flex flex-wrap gap-2">
                    <div class="form-group d-flex flex-column w-100">
                      <input name="firstName" type="text" class="form-control" id="firstName" placeholder=" " required>
                      <label for="firstName">Name</label>
                    </div>
                    <div class="form-group d-flex flex-column w-100">
                      <input name="email" type="text" class="form-control" id="email" placeholder=" " required>
                      <label for="email">Email</label>
                    </div>
                    <div class="form-group d-flex flex-column w-100">
                      <textarea id="message" rows="4" cols="50" placeholder=" " required></textarea>
                      <label name="message" for="message">Message</label>
                    </div>
                    <div class="form-group d-flex flex-column w-100">
                      <button type="submit" class="btn"><strong>Send now</strong></button>
                    </div>
                  </fieldset>
                </form>
              </div>
              <div class="col-12 col-lg-5 bg-white align-items-center">
                <div class="d-flex flex-column gap-3 ps-5 pb-5 pt-5">
                  <h4><strong>Info</strong></h4>
                  <div class="d-flex flex-column row-gap-3 gap-2">
                    <div class="d-flex flex-column flex-lg-row align-items-center gap-2">
                      <div class="d-flex justify-content-center w-5">
                        <img src="/static/img/ico-mail.svg">
                      </div>
                      <div class="d-flex txt-blue justify-content-center flex-column">
                        <p>hello@facilitapay.com</p>
                      </div>
                    </div>
                    <div class="d-flex flex-column flex-lg-row align-items-center gap-2">
                      <div class="d-flex justify-content-center w-5">
                        <img src="/static/img/ico-phone.svg">
                      </div>
                      <div class="d-flex txt-blue justify-content-center flex-column">
                        <p>+1 855 343 5227</p>
                        <p>+55 31 3195.6300</p>
                      </div>
                    </div>
                    <div class="d-flex flex-column flex-lg-row align-items-center gap-2">
                      <div class="d-flex justify-content-center w-5">
                        <img src="/static/img/ico-pin-2.svg">
                      </div>
                      <div class="d-flex txt-blue justify-content-center flex-column">
                        <p>201 S Biscayne Blvd, 12th Floor <br>Miami, Fl 33131</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>



        <div class="h-2"></div>



<section class="slider">
    <div class="container d-flex flex-column gap-2 pb-4 pt-4">
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center">
                <h6>Trusted by tech giants:</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-partners owl-theme">
                    <div class="item"><img src="/static/img/logos/kraken.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                    <div class="item"><img src="/static/img/logos/stake.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                    <div class="item"><img src="/static/img/logos/bybit-blue.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                    <div class="item"><img src="/static/img/logos/sproutfi.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                    <div class="item"><img src="/static/img/logos/bitso-blue.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                    <div class="item"><img src="/static/img/logos/tickmill.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                    <div class="item"><img src="/static/img/logos/okx-blue.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                    <div class="item"><img src="/static/img/logos/wyre.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                    <div class="item"><img src="/static/img/logos/okcoin.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                    <div class="item"><img src="/static/img/logos/angloamerican.png"  style="fill: blue; height: 35px; width: auto;"></div>
                    <div class="item"><img src="/static/img/logos/bit2me.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                </div>
            </div>
        </div>
    </div>
</section>



        <div class="h-4"></div>


<?php include('inc/footer.php'); ?>
