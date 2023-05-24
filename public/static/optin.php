<?php include("inc/header.php"); ?>




<!--        <section class="bg-blue">-->
<!--            <div class="container text-center pb-4 pt-4">-->
<!--                <div class="row justify-content-center">-->
<!--                    <div class="col-12 col-sm-6 d-flex flex-column gap-1">-->
<!--                        <h6 class="txt-light-green">Website under construction.</h6>-->
<!--                        <h4 class="txt-white"><strong>Fill out the form below and our team will contact you as soon as possible, thank you!</strong></h4>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->



        <section class="">
          <div class="container text-center pb-4 pt-4">
            <div class="row justify-content-center">
              <div class="col-12 col-sm-10 d-flex flex-column gap-1">
                <h6>Questions? We've got answers.</h6>
                <h2><strong>The world's largest companies already trust FacilitaPay's payment solutions.</strong></h2>
              </div>
            </div>
          </div>
        </section>



        <section>
          <div class="container pb-4">
            <div class="row justify-content-center">
              <div class="col-12 col-sm-10">
                <form action="sendmail.php" method="POST" class="form-1 d-flex text-start flex-column gap-2">
                  <fieldset class="bg-white d-flex border-radius flex-wrap p-2">
                    <div class="form-group w-50">
                      <input name="firstName" type="text" class="form-control" id="firstName" placeholder=" " required>
                      <label for="firstName">Name <span>*</span></label>
                    </div>
                    <div class="form-group w-50">
                      <input name="companyName" type="text" class="form-control" id="companyName" placeholder=" " required>
                      <label for="companyName">Company name <span>*</span></label>
                    </div>
                    <div class="form-group w-50">
                      <input name="website" type="text" class="form-control" id="website" placeholder=" ">
                      <label for="website">Website <span>*</span></label>
                    </div>
                    <div class="form-group w-50">
                      <input name="email" type="text" class="form-control" id="email" placeholder=" " required>
                      <label for="email">Email <span>*</span></label>
                    </div>
                    <div class="form-group d-flex flex-column gap-1 w-100">
                      <label>Which region(s) are you looking to process with FacilitaPay? <span>*</span></label>
                      <ul class="gap-2 inline">
                        <li>
                          <input name="region" type="checkbox" value="Argentina" id="argentina" required>
                          <label for="argentina">Argentina</label>
                        </li>
                        <li>
                          <input name="region" type="checkbox" value="Brazil" id="brazil" required>
                          <label for="brazil">Brazil</label>
                        </li>
                        <li>
                          <input name="region" type="checkbox" value="Chile" id="chile" required>
                          <label for="chile">Chile</label>
                        </li>
                        <li>
                          <input name="region" type="checkbox" value="Colombia" id="colombia" required>
                          <label for="colombia">Colômbia</label>
                        </li>
                        <li>
                          <input name="region" type="checkbox" value="Mexico" id="mexico" required>
                          <label for="mexico">México</label>
                        </li>
                          <li>
                              <input name="region" type="checkbox" value="Other" id="other" required>
                              <label for="mexico">Other</label>
                          </li>
                      </ul>
                    </div>
                    <div class="form-group w-100">
                      <select name="tvp" class="w-100" required>
                        <option disabled>Monthly TPV <span>*</span></option>
                        <option value="0-500k">0-500k USD</option>
                        <option value="500-2.5mi">500-2.5mi USD</option>
                        <option value="2.5-10mi">2.5-10mi USD</option>
                        <option value="10mi+">10mi+ USD</option>
                      </select>
                    </div>
                    <div class="form-group d-flex flex-column gap-1 w-100">
                      <label>Which solution(s) do you need? <span>*</span></label>
                      <ul class="gap-1">
                        <li>
                          <input name="solution[]" value="Payins - Accept local payment methods from clients and users." type="checkbox" id="id1" required>
                            <label for="id1" >Payins - Accept local payment methods from clients and users.</label>
                        </li>
                        <li>
                          <input name="solution[]" value="Payouts - Send local payouts to clients and users." type="checkbox" id="id2" required>
                          <label for="id2" >Payouts - Send local payouts to clients and users.</label>
                        </li>

                          <li>
                              <input name="solution[]" value="Settlement in fiat/crypto." type="checkbox" id="id3" required>
                              <label for="id3" >Settlement in fiat/crypto.</label>
                          </li>

                          <li>
                              <input name="solution[]" value="FX conversion" type="checkbox" id="id10" required>
                              <label for="id10" >FX conversion.</label>
                          </li>

                          <li>
                          <input name="solution[]" value="Looking to explore a partnership." type="checkbox" id="id8" required>
                          <label for="id8" >Looking to explore a partnership.</label>
                        </li>
                        <li>
                          <input name="solution[]" type="checkbox" value="Others" id="id9" required>
                          <label for="id9">Others.</label>
                        </li>
                      </ul>
                    </div>

                    <div class="form-group d-flex flex-column gap-1 w-100">
                      <p class="sub">FacilitaPay is committed to protecting and respecting your privacy, and we’ll only use your personal information to administer your account and to provide the products and services you requested from us. From time to time, we would like to contact you about our products and services, as well as other content that may be of interest to you. If you consent to us contacting you for this purpose, please tick the box below.</p>
                      <ul>
                        <li>
                          <input name="agree" type="checkbox" required>
                          <label>I agree to receive other communications from FacilitaPay.</label>
                        </li>
                      </ul>
                      <p class="sub">You can unsubscribe from these communications at any time. For more information on how to unsubscribe, our privacy practices, and how we are committed to protecting and respecting your privacy, please review our Privacy Policy. By clicking submit below, you consent to allow FacilitaPay to store and process the personal information submitted above to provide you the content requested.</p>
                    </div>

                    <div class="form-group w-100">
                      <button type="submit" class="btn d-flex w-100">Submit</button>
                    </div>

                      <?php if($_GET['msg']){ ?>
                          <div id="message" class="row" style="margin:auto;">
                              <div class="col-12 text-center">
                                  <h5><?php echo $_GET['msg']; ?></h5>
                              </div>
                          </div>
                      <?php } ?>

                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </section>


        <div class="spacer h-64"></div>


<?php include("inc/footer.php"); ?>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
        <script src="js/jquery.mask.min.js"></script>
        <script src="https://malsup.github.io/jquery.form.js"></script>
        <script src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>

        <script type="text/javascript">
          $(".toggle").click(function(){
            $(".menu").toggleClass("open");
          });

          $(document).ready(function(){

            $.validator.addMethod('nofreeemail', function (value, element) {
              return this.optional( element ) || /^([\w-.]+@(?!gmail\.com)(?!yahoo\.com)(?!hotmail\.com)(?!mail\.ru)(?!yandex\.ru)(?!mail\.com)([\w-]+.)+[\w-]{2,4})?$/.test(value);
            }, 'Free email addresses are not allowed.');

            $("form").validate({

              rules: {
                email: {
                  required: true,
                  nofreeemail: true
                }
              }
            });

            $('.date').mask('00/00/0000');
            $('.time').mask('00:00:00');
            $('.date_time').mask('00/00/0000 00:00:00');
            $('.cep').mask('00000-000');
            $('.phone').mask('0000-0000');
            $('.phone_with_ddd').mask('(00) 0000-0000');
            $('.phone_us').mask('(000) 000-0000');
            $('.mixed').mask('AAA 000-S0S');
            $('.cpf').mask('000.000.000-00', {reverse: true});
            $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
            $('.money').mask('000.000.000.000.000,00', {reverse: true});
            $('.money2').mask("#.##0,00", {reverse: true});
            $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
              translation: {
                'Z': {
                  pattern: /[0-9]/, optional: true
                }
              }
            });
            $('.ip_address').mask('099.099.099.099');
            $('.percent').mask('##0,00%', {reverse: true});
            $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
            $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
            $('.fallback').mask("00r00r0000", {
              translation: {
                'r': {
                  pattern: /[\/]/,
                  fallback: '/'
                },
                placeholder: "__/__/____"
              }
            });
            $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
          });

        </script>



    </body>


</html>
