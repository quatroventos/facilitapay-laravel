<?php include('inc/header.php'); ?>

<style>
    #canvas{
        position:absolute;
        top:0;
        left:10px;
        z-index:999;
        border-radius: 30px;
    }
    #dash{
        opacity: 0;opacity: 0;
        z-index:9999;
    }
</style>
        <section class="">
          <div class="container d-flex flex-column gap-2 text-center pt-4">
            <div class="row justify-content-center">
              <div class="col-12 col-sm-9 d-flex flex-column gap-1">
                <h6>We are FacilitaPay</h6>
                <h2><strong>The payment platform designed for the growth and scale of your business. One simple integration, multiple countries.</strong></h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-sm-10">
                <p>Meet FacilitaPay. The future of payment ecosystem. <br>We developed the best solutions for international companies to access LatAm.</p>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col justify-content-center d-flex">
                <a href="optin.php" class="btn"><strong>Let’s talk</strong></a>
                <a href="optin.php" class="btn btn-simple"><strong>Learn more</strong></a>
              </div>
            </div>
          </div>
        </section>



        <div class="h-4"></div>



        <section class="dashboard">
          <div class="container gap-24 text-center">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-10 gap-12">
                  <img src="img/dashboard.jpg" class="img-fluid" id="dash">
                  <canvas id="canvas"></canvas>
              </div>
            </div>
          </div>
        </section>


        <section class="slider">
          <div class="container d-flex flex-column gap-2 pb-4 pt-4">
            <div class="row">
              <div class="col-12 d-flex flex-column align-items-center">
                <h6>Trusted by tech giants:</h6>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="owl-carousel">
                  <div class="item"><img src="img/logos/kraken.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                  <div class="item"><img src="img/logos/stake.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                  <div class="item"><img src="img/logos/bybit-blue.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                  <div class="item"><img src="img/logos/sproutfi.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                  <div class="item"><img src="img/logos/bitso-blue.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                  <div class="item"><img src="img/logos/tickmill.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                  <div class="item"><img src="img/logos/okx-blue.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                  <div class="item"><img src="img/logos/wyre.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                  <div class="item"><img src="img/logos/okcoin.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                  <div class="item"><img src="img/logos/angloamerican.png"  style="fill: blue; height: 35px; width: auto;"></div>
                  <div class="item"><img src="img/logos/bit2me.png" class="img-fluid" style="fill: blue; height: 35px; width: auto;"></div>
                </div>
              </div>
            </div>
          </div>
        </section>



        <section class="content-1 bg-white">
          <div class="container d-flex flex-column gap-2 pt-4 text-center">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-10 gap-1">
                <h6>Why FacilitaPay</h6>
                <h2><strong>Designed to assist your business<br> to take the next level.</strong></h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-lg-10">
                <p>Grow exponentually and increase revenue in Latin America through our +100 local payment methods including credit cards and alternative payment methods with high performance in approval and conversion rates, besides a great speed in processing. FacilitaPay platform is designed to provide the full local payment ecosystem with a single integration, enabling companies to expand their market reach fast.</p>
              </div>
            </div>
          </div>
        </section>



        <section class="content-1 bg-white">
          <div class="container d-flex flex-column gap-2 pt-4">
            <div class="row align-items-center justify-content-center">
              <div class="col-8 col-sm-6 col-lg-5">
                <img id="blocks" src="img/blocks.jpg" class="img-fluid">
              </div>
              <div class="col-12 col-sm-6 col-lg-5 d-flex flex-column gap-2">
                <div class=" d-flex flex-column gap-1">
                  <h6>Effortless</h6>
                  <h2><strong>Start now with Plug &<br> Play integrations.</strong></h2>
                  <p>Connect to our proprietary technology, constantly evolving to meet our customers' demands, with one single API.</p>
                </div>
                <a href="optin.php" class="btn btn-big me-auto"><strong>Start now</strong></a>
              </div>
            </div>
          </div>
        </section>



        <section class="bullets-1 bg-white animatedcards">
          <div class="container pt-4">
            <div class="row row-gap-2">
              <div class="col-12 col-lg-4 d-flex flex-column gap-1 animatedcard">
                <img src="img/icos/ico-1.svg" class="h-3 me-auto">
                <h4><strong>Pay in & Pay outs</strong></h4>
                <p>Local acquiring in LatAm market, and over 190+ connections worldwide. Open banking crypto acceptance over 50+ APMs.</p>
              </div>
              <div class="col-12 col-lg-4 d-flex flex-column gap-1 animatedcard">
                <img src="img/icos/ico-2.svg" class="h-3 me-auto">
                <h4><strong>Performance</strong></h4>
                <p>Built to be scalable and help companies to process a high demand of payments instantly through global connections, consolidating data and payment information to enhancing authorizations.</p>
              </div>
              <div class="col-12 col-lg-4 d-flex flex-column gap-1 animatedcard">
                <img src="img/icos/ico-3.svg" class="h-3 me-auto">
                <h4><strong>Customized for your needs</strong></h4>
                <p>Enabling different businesses models and funds flow to integrate any customer need, adapting the infrastructure to fit different regulations and risk levels.</p>
              </div>
              <div class="col-12 col-lg-4 d-flex flex-column gap-1 animatedcard">
                <img src="img/icos/ico-4.svg" class="h-3 me-auto">
                <h4><strong>Scalable & reliable</strong></h4>
                <p>Technology created to keep performance during high-demand peak events and maintaining the same level of speed. Ensuring 99.999% uptime and 24x7 monitoring.</p>
              </div>
              <div class="col-12 col-lg-4 d-flex flex-column gap-1 animatedcard">
                <img src="img/icos/ico-5.svg" class="h-3 me-auto">
                <h4><strong>Actionable reporting</strong></h4>
                <p>Get data that adds value to your business from any transaction or customer behavior. We have all the information just an endpoint away.</p>
              </div>
              <div class="col-12 col-lg-4 d-flex flex-column gap-1 animatedcard">
                <img src="img/icos/ico-6.svg" class="h-3 me-auto">
                <h4><strong>We got your back, always</strong></h4>
                <p>Our team help clients to operate locally, without the necessity of talking to chatbots or opening tickets. We are here for you.</p>
              </div>
            </div>
          </div>
        </section>



        <div class="h-4 bg-white"></div>



        <section class="map">
          <div class="container text-center pt-4">
            <div class="row justify-content-center">
              <div class="col-12 d-flex flex-column gap-1" id="welcome">
                <h6>welcome to latam</h6>
                <h2><strong>Accept all payment methods available in each country</strong></h2>
              </div>
            </div>
          </div>
        </section>



        <div class="h-4 bg-white"></div>



        <section class="hero-7">
          <div class="container d-flex flex-column gap-3 pb-5 pt-5">
            <div class="row d-flex row-gap-3 align-items-center justify-content-center">
              <div class="col-12 col-sm-6 d-flex flex-column gap-2">
                <div class="d-flex flex-column gap-2">
                  <div class="pe-5">
                    <img src="img/logo-pix-global.svg" class="img-fluid">
                  </div>
                  <h3 class="txt-white"><strong>The revolutionary instant payment method for global companies. The Brazilian payment method accepted worldwide.</strong></h3>
                </div>
                <p class="txt-white">With PIX Global, you receive transactions immediately in your account, avoiding abusive fees and improving your customer experience.</p>
              </div>
              <div class="col-12 col-sm-5">
                <img id="pix" src="img/pix-global-connect.svg" class="img-fluid">
              </div>
            </div>
            <div class="row d-flex justify-content-center text-center">
              <div class="col-12 col-sm-8">
                <h2 class="txt-white"><strong>Why you should open an account for receiving PIX transactions:</strong></h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-sm-8">
                <div class="row d-flex row-gap-2">
                  <div class="col-12 col-sm-6 d-flex flex-column gap-1">
                    <div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2">
                      <img src="img/icos/ico-1.svg" class="w-2">
                      <p class="txt-blue"><strong>Travelers will have less costs paying through PIX</strong></p>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 d-flex flex-column gap-1">
                    <div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2">
                      <img src="img/icos/ico-2.svg" class="w-2">
                      <p class="txt-blue"><strong>Less transactional costs for sellers</strong></p>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 d-flex flex-column gap-1">
                    <div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2">
                      <img src="img/icos/ico-3.svg" class="w-2">
                      <p class="txt-blue"><strong>No monthly fees to setup an account</strong></p>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 d-flex flex-column gap-1">
                    <div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2">
                      <img src="img/icos/ico-4.svg" class="w-2">
                      <p class="txt-blue"><strong>No FX risks for sellers and buyers</strong></p>
                    </div>
                  </div>
                  <div class="col-12 d-flex flex-column gap-1">
                    <div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2">
                      <img src="img/icos/ico-5.svg" class="w-2">
                      <p class="txt-blue"><strong>You can access more than 60 million users connected to our payment network of local payment methods, alternative payment methods and local credit and debit cards.</strong></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row d-flex justify-content-center text-center">
              <div class="col-8">
                <a href="#!" class="btn btn-6 d-inline-flex"><strong>Learn more</strong></a>
              </div>
            </div>
          </div>
        </section>



        <!-- <section class="crypto">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-3 col-lg-2">
                <h6>CRYPTO</h6>
              </div>
              <div class="col-12 col-sm-9 col-lg-7 gap-32">
                <h1>We were born into crypto.</h1>
                <p>Since 2017 we realized that blockchain would revolutionize the world of finance. Our ideal at FacilitaPay is to act as a tool that will collaborate with the growth of Web 3 infrastructure. <br><br><strong>Are you in the Crypto world looking to increase your customer base in LatAm?</strong></p>
                <a href="optin.php" class="btn me-auto">Start now</a>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-3 col-lg-2 d-none d-sm-flex">
                <div class="controls">
                  <ul>
                    <li>01</li>
                    <li></li>
                    <li>06</li>
                  </ul>
                  <ul>
                    <li><a href="">Prev</a></li>
                    <li><a href="">Next</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-12 col-sm-9 col-lg-10">
                <ul class="items">
                  <li>
                    <div><img src="img/icos/ico-7.svg"></div>
                    <div>
                      <h4>Store</h4>
                      <p>Control your funds through our multicurrency solution, managing all the custody in our dashboard.</p>
                    </div>
                  </li>
                  <li>
                    <div><img src="img/icos/ico-8.svg"></div>
                    <div>
                      <h4>Fraud prevention</h4>
                      <p>Proprietary technology helping to prevent fraud locally in LatAm.</p>
                    </div>
                  </li>
                  <li>
                    <div><img src="img/icos/ico-9.svg"></div>
                    <div>
                      <h4>Highly Configurable</h4>
                      <p>Adaptable to any business model, our clients can build their business on top of our technology.</p>
                    </div>
                  </li>
                  <li>
                    <div><img src="img/icos/ico-10.svg"></div>
                    <div>
                      <h4>Audit transactions</h4>
                      <p>Compliant with global auditors and regulators, customers can access data worldwide.</p>
                    </div>
                  </li>
                  <li>
                    <div><img src="img/icos/ico-11.svg"></div>
                    <div>
                      <h4>Developer Friendly</h4>
                      <p>Built to be part of our client's technology, we have all the features to be embedded in other platforms.</p>
                    </div>
                  </li>
                  <li>
                    <div><img src="img/icos/ico-12.svg"></div>
                    <div>
                      <h4>Local KYC Features</h4>
                      <p>Helping our clients to onboard their local users through our own platform and integrated in the customer experience.</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row text-center slider">
              <div class="col-12 gap-24">
                <h6>Trusted by crypto giants:</h6>
                <ul class="" style=" display: flex; justify-content: center;">
                  <li><img src="img/logos/logo2-negative.png" class="img-fluid" ></li>
                  <li><img src="img/logos/bybit.png" class="img-fluid" ></li>
                  <li><img src="img/logos/bitso.png" class="img-fluid" ></li>
                  <li><img src="img/logos/okx.png" class="img-fluid" ></li>
                  <li><img src="img/logos/logo3-negative.png" class="img-fluid" ></li>
                  <li><img src="img/logos/logo8-negative.png" class="img-fluid" ></li>
                  <li><img src="img/logos/logo1-negative.png" class="img-fluid" ></li>
                </ul>
              </div>
            </div>
          </div>
        </section> -->



        <div class="h-4 bg-white"></div>



        <section class="bg-white">
          <div class="container">
            <div class="row">
              <div class="col-12 d-flex flex-column gap-2">
                <div class="d-flex flex-column gap-1">
                  <h6>ONBOARDING FLOW</h6>
                  <h2><strong>Easy to setup and start</strong></h2>
                  <p>Find out how you can integrate with local payments in LatAm market.</p>
                </div>
                <a href="optin.php" class="btn me-auto"><strong>Let’s talk</strong></a>
              </div>
            </div>
          </div>
        </section>



        <div class="h-4 bg-white"></div>



        <section class="steps">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-4">
                <div class="d-flex flex-column gap-1">
                  <div><img src="img/icos/ico-13.svg"></div>
                  <h6>Step 1</h6>
                  <h5>Plataform and APIs Demo.</h5>
                </div>
              </div>
              <div class="col-12 col-lg-4">
                <div class="d-flex flex-column gap-1">
                  <div><img src="img/icos/ico-14.svg"></div>
                  <h6>Step 2</h6>
                  <h5>Definition of payment flow and available currencies.</h5>
                </div>
              </div>
              <div class="col-12 col-lg-4">
                <div class="d-flex flex-column gap-1">
                  <div><img src="img/icos/ico-15.svg"></div>
                  <h6>Step 3</h6>
                  <h5>Negotiating terms and signing a contract.</h5>
                </div>
              </div>
            </div>
          </div>
        </section>




        <section class="steps">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-4">
                <div class="d-flex flex-column gap-1">
                  <div><img src="img/icos/ico-16.svg"></div>
                  <h6>Step 4</h6>
                  <h5>Integration.</h5>
                </div>
              </div>
              <div class="col-12 col-lg-4">
                <div class="d-flex flex-column gap-1">
                  <div><img src="img/icos/ico-17.svg"></div>
                  <h6>Step 5</h6>
                  <h5>Penny tests, final adjustment.</h5>
                </div>
              </div>
              <div class="col-12 col-lg-4">
                <div class="d-flex flex-column gap-1">
                  <div><img src="img/icos/ico-18.svg"></div>
                  <h6>Step 6</h6>
                  <h5>Acess the local payment market with our solution.</h5>
                </div>
              </div>
            </div>
          </div>
        </section>



        <section class="content-8">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-10" style="background-image: url('img/locations.jpg');">
                <div class="container d-flex flex-column gap-2 p-1 pb-4 pt-4">
                  <div class="row justify-content-center">
                    <div class="col-12 col-sm-8 d-flex flex-column text-center justify-content-center">
                       <div class="d-flex flex-column gap-2 text-center justify-content-center">
                        <div class="d-flex flex-column gap-1">
                          <h6 class="txt-white">Let's Go</h6>
                          <h2 class="txt-white"><strong>Ready to unlock new markets?</strong></h2>
                          <p class="txt-white">Understand more about local payment methods availabe in each country, consumer behavior and local data. You will find everything you need for your expansion.</p>
                        </div>
                        <a href="optin.php" class="btn m-auto"><strong>FIND OUT MORE</strong></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>



        <div class="h-4"></div>


<script>

    //converts viewport units to pixels (like "50vw" or "20vh" into pixels)
    function toPX(value) {
        return parseFloat(value) / 100 * (/vh/gi.test(value) ? window.innerHeight : window.innerWidth);
    }


    gsap.registerPlugin(ScrollTrigger, CustomEase);


    //


    var burger = document.querySelector("#dash");
    var canvas = document.querySelector("#canvas");
    var context = canvas.getContext("2d");

    var grid = 8;
    var size = grid - 2;
    var particles = [];

    var tl = new TimelineMax({
        onUpdate: render,
        // repeat: -1,
        // repeatDelay: 1,
        // yoyo: true,
        paused: true
    });

    window.addEventListener("load", init);

    function init() {

        var width = canvas.width = burger.width;
        var height = canvas.height = burger.height;

        var startX = width / 2;
        var startY = height / 2;

        context.drawImage(burger, 0, 0);

        var imageData = context.getImageData(0, 0, width, height);
        var data = imageData.data;

        for (var y = 0; y < height; y += grid) {
            for (var x = 0; x < width; x += grid) {

                var i = (y * width + x) * 4;
                var r = data[i];
                var g = data[i + 1];
                var b = data[i + 2];
                var a = data[i + 3];

                var alpha = a / 255;

                if (!alpha) {
                    continue;
                }

                var particle = {
                    color: "rgba(" + r + "," + g + "," + b + ",0)",
                    size: 0,
                    x: startX,
                    y: startY
                };

                tl.to(particle, 1 + Math.random(), {
                    color: "rgba(" + r + "," + g + "," + b + "," + alpha + ")",
                    size: size,
                    x: x,
                    y: y
                }, y / height).to(dash, {opacity:1}).to(canvas, {opacity:0}, "<50%")


                particles.push(particle);
            }
        }
        tl.play();
    }

    function render() {

        context.clearRect(0, 0, canvas.width, canvas.height);

        for (var i = 0; i < particles.length; i++) {
            var particle = particles[i];
            context.fillStyle = particle.color;
            context.fillRect(particle.x, particle.y, particle.size, particle.size);
        }
    }
    //



    const blocks = document.querySelector('#blocks');
    const welcome = document.querySelector('#welcome');
    const pix = document.querySelector('#pix');


    // blocks
    const blocksin = gsap.from(blocks, { opacity: 0, rotate: -15, scale: 0.1, x: 0, y: +100, paused: true, ease: Power1.easeOut}); // can be left out
    const ST2 = ScrollTrigger.create({
        trigger: blocks,
        start: 0,
        end: "500vh",
        animation: blocksin, // can be left out
        scrub: true      // can be left out
    });

    // welcome title
    const welcomeparallax = gsap.from(welcome, { y: +800, paused: true, ease: Power1.easeOut}); // can be left out
    const ST3 = ScrollTrigger.create({
        trigger: welcome,
        start: 0,
        end: "500vh",
        animation: welcomeparallax, // can be left out
        scrub: true      // can be left out
    });

    // pix
    const pixin = gsap.from(pix, { opacity: 0, rotate: -45, scale: 0.1, x: 0, y: +100, paused: true, ease: Power1.easeOut}); // can be left out
    const ST4 = ScrollTrigger.create({
        trigger: pix,
        start: 0,
        end: "500vh",
        animation: pixin, // can be left out
        scrub: true    // can be left out

    });

    // cards
    const cardsin = gsap.from(".animatedcard", {
        opacity:0,
        x: +60,
        y: +60,
        stagger: {
            base:0,
            amount:0.2,
            from: "center"
        },
        ease: Power1.easeOut,

    });

    const st5 = ScrollTrigger.create({
        trigger: ".animatedcard",
        start:"top center",
        animation: cardsin
    });

    // The relevant part to keeping the progress
    ScrollTrigger.addEventListener("refreshInit", () => progress = ST.progress);
    ScrollTrigger.addEventListener("refresh", () => ST.scroll(progress * ScrollTrigger.maxScroll(window)));


</script>

<?php include('inc/footer.php'); ?>
