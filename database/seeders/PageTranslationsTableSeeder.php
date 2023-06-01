<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_translations')->delete();
        
        \DB::table('page_translations')->insert(array (
            0 => 
            array (
                'id' => 21,
                'pages_id' => 9,
                'locale' => 'en',
                'title' => 'Home',
                'html' => ' <section class="">
<div class="container d-flex flex-column gap-2 text-center pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-9 d-flex flex-column gap-1">
<h6>We are FacilitaPay</h6>
<h2><strong>The payment platform designed for the growth and scale of your business. One simple integration, multiple countries.</strong></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-10">
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
<img src="/static/img/dashboard.jpg" class="img-fluid ignoreanimation" id="dash">
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



<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-2 pt-4 text-center">
<div class="row justify-content-center">
<div class="col-12 col-lg-10 gap-1">
<h6>Why FacilitaPay</h6>
<h2><strong>Designed to take your business<br>to the next level.</strong></h2>
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
<img id="blocks" src="/static/img/blocks.jpg" class="img-fluid">
</div>
<div class="col-12 col-sm-6 col-lg-5 d-flex flex-column gap-2">
<div class=" d-flex flex-column gap-1">
<h6>Effortless</h6>
<h2><strong>Start now with Plug &<br> Play integrations.</strong></h2>
<p>Connect to our proprietary technology, constantly evolving to meet our customers\' demands, with one single API.</p>
</div>
<a href="optin.php" class="btn btn-big me-auto"><strong>Start now</strong></a>
</div>
</div>
</div>
</section>



<section class="bullets-1 bg-white animatedcards">
<div class="container pt-4">
<div class="row row-gap-2">
<div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-1 animatedcard">
<img src="/static/img/icos/ico-1.svg" class="h-3 me-auto">
<h4><strong>Pay in & Pay outs</strong></h4>
<p>Local acquiring in LatAm market, and over 190+ connections worldwide. Open banking crypto acceptance over 50+ APMs.</p>
</div>
<div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-1 animatedcard">
<img src="/static/img/icos/ico-2.svg" class="h-3 me-auto">
<h4><strong>Performance</strong></h4>
<p>Built to be scalable and help companies to process a high demand of payments instantly through global connections, consolidating data and payment information to enhancing authorizations.</p>
</div>
<div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-1 animatedcard">
<img src="/static/img/icos/ico-3.svg" class="h-3 me-auto">
<h4><strong>Customized for your needs</strong></h4>
<p>Enabling different businesses models and funds flow to integrate any customer need, adapting the infrastructure to fit different regulations and risk levels.</p>
</div>
<div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-1 animatedcard">
<img src="/static/img/icos/ico-4.svg" class="h-3 me-auto">
<h4><strong>Scalable & reliable</strong></h4>
<p>Technology created to keep performance during high-demand peak events and maintaining the same level of speed. Ensuring 99.999% uptime and 24x7 monitoring.</p>
</div>
<div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-1 animatedcard">
<img src="/static/img/icos/ico-5.svg" class="h-3 me-auto">
<h4><strong>Actionable reporting</strong></h4>
<p>Get data that adds value to your business from any transaction or customer behavior. We have all the information just an endpoint away.</p>
</div>
<div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-1 animatedcard">
<img src="/static/img/icos/ico-6.svg" class="h-3 me-auto">
<h4><strong>We got your back, always</strong></h4>
<p>Our team help clients to operate locally, without the necessity of talking to chatbots or opening tickets. We are here for you.</p>
</div>
</div>
</div>
</section>


<div class="h-4 bg-white"></div>


<section class="map" id="map" style="position:relative">
<div class="container text-center pt-4">
<div class="row justify-content-center">
<div class="col-12 d-flex flex-column gap-1" id="welcome">
<h6>welcome to latam</h6>
<h2><strong>Accept all payment methods available in each country</strong></h2>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="map-container">

<img src="/static/img/map-home.jpg" usemap="#map" class="img-fluid d-none d-sm-flex">
<img src="/static/img/map-home-mobile.jpg" class="img-fluid d-flex d-sm-none">

<map name="map" id="tooltipcanvas">
<area href="markets-brazil.php" class="ttiptrigger" data-name="brasil" shape="poly" coords="370,431,381,426,385,437,398,437,418,429,434,450,467,462,494,479,471,523,540,527,541,542,470,543,446,568,436,578,441,589,431,608,419,606,409,599,420,577,411,564,396,552,396,535,383,523,377,514,363,505,357,494,341,499,327,493,325,476,340,470,341,443" >
<area href="markets-colombia.php" class="ttiptrigger" data-name="colombia" shape="poly" coords="323,387,316,393,308,419,216,421,221,435,315,433,324,456,338,456,336,435,347,428,347,413,334,404" >
<area href="markets-mexico.php" class="ttiptrigger" data-name="mexico" shape="poly" coords="180,321,109,325,112,338,188,339,218,360,243,360,268,336,229,344,219,306,200,298,186,283,161,281,151,301" >
<area class="ttiptrigger" data-name="chile" shape="poly" coords="341,540,341,582,279,587,281,599,337,600,358,695,402,721,375,692,365,652,356,591,357,562" >
</map>

</div>
</div>
</div>
</div>

</section>

<div class="ttipcontainer">
<div class="ttip ignoreanimation" id="brasil">
<img width="20" src="/static/img/finance/SVG/ico-pix-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-card-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-boleto-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-ted-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-international-wires-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-crypto-currencies-blue.svg">
<small>Click to discover all payment methods</small>
</div>

<div class="ttip ignoreanimation" id="mexico">
<img width="20" src="/static/img/finance/SVG/ico-spei-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-card-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-oxxo-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-international-wires-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-crypto-currencies-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-codi-blue.svg">
<small>Click to discover all payment methods</small>
</div>

<div class="ttip ignoreanimation" id="colombia">
<img width="20" src="/static/img/finance/SVG/ico-pse-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-card-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-money-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-ted-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-crypto-currencies-blue.svg">
<small>Click to discover all payment methods</small>
</div>

<div class="ttip ignoreanimation" id="chile">
<p>Chile, we are coming.</p>
</div>
</div>


<div class="h-4 bg-white"></div>

<section class="hero-7">
<div class="container d-flex flex-column gap-3 pb-5 pt-5">
<div class="row d-flex row-gap-3 align-items-center justify-content-center">
<div class="col-12 col-sm-6 d-flex flex-column gap-2">
<div class="d-flex flex-column gap-2">
<div class="pe-5">
<img src="/static/img/logo-pix-global.svg" class="img-fluid">
</div>
<h3 class="txt-white"><strong>The revolutionary instant payment method for global companies. The Brazilian payment method accepted worldwide.</strong></h3>
</div>
<p class="txt-white">With PIX Global, you receive transactions immediately in your account, avoiding abusive fees and improving your customer experience.</p>
</div>
<div class="col-12 col-sm-5">
<img id="pix" src="/static/img/pix-global-connect.svg" class="img-fluid">
</div>
</div>
<div class="row d-flex justify-content-center text-center">
<div class="col-12 col-lg-8">
<h2 class="txt-white"><strong>Why you should open an account for receiving PIX transactions:</strong></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-8">
<div class="row d-flex row-gap-2">
<div class="col-12 col-sm-6 d-flex flex-column gap-1">
<div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2 pixanimatedcard">
<img src="/static/img/icos/ico-1.svg" class="w-2">
<p class="txt-blue"><strong>Travelers will have less costs paying through PIX</strong></p>
</div>
</div>
<div class="col-12 col-sm-6 d-flex flex-column gap-1">
<div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2 pixanimatedcard">
<img src="/static/img/icos/ico-2.svg" class="w-2">
<p class="txt-blue"><strong>Less transactional costs for sellers</strong></p>
</div>
</div>
<div class="col-12 col-sm-6 d-flex flex-column gap-1">
<div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2 pixanimatedcard">
<img src="/static/img/icos/ico-3.svg" class="w-2">
<p class="txt-blue"><strong>No monthly fees to setup an account</strong></p>
</div>
</div>
<div class="col-12 col-sm-6 d-flex flex-column gap-1">
<div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2 pixanimatedcard">
<img src="/static/img/icos/ico-4.svg" class="w-2">
<p class="txt-blue"><strong>No FX risks for sellers and buyers</strong></p>
</div>
</div>
<div class="col-12 d-flex flex-column gap-1">
<div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2 pixanimatedcard">
<img src="/static/img/icos/ico-5.svg" class="w-2">
<p class="txt-blue"><strong>You can access more than 60 million users connected to our payment network of local payment methods, alternative payment methods and local credit and debit cards.</strong></p>
</div>
</div>
</div>
</div>
</div>
<div class="row d-flex justify-content-center text-center">
<div class="col-8">
<a href="pix-global.php" class="btn btn-6 d-inline-flex"><strong>Learn more</strong></a>
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
<div><img src="/static/img/icos/ico-7.svg"></div>
<div>
<h4>Store</h4>
<p>Control your funds through our multicurrency solution, managing all the custody in our dashboard.</p>
</div>
</li>
<li>
<div><img src="/static/img/icos/ico-8.svg"></div>
<div>
<h4>Fraud prevention</h4>
<p>Proprietary technology helping to prevent fraud locally in LatAm.</p>
</div>
</li>
<li>
<div><img src="/static/img/icos/ico-9.svg"></div>
<div>
<h4>Highly Configurable</h4>
<p>Adaptable to any business model, our clients can build their business on top of our technology.</p>
</div>
</li>
<li>
<div><img src="/static/img/icos/ico-10.svg"></div>
<div>
<h4>Audit transactions</h4>
<p>Compliant with global auditors and regulators, customers can access data worldwide.</p>
</div>
</li>
<li>
<div><img src="/static/img/icos/ico-11.svg"></div>
<div>
<h4>Developer Friendly</h4>
<p>Built to be part of our client\'s technology, we have all the features to be embedded in other platforms.</p>
</div>
</li>
<li>
<div><img src="/static/img/icos/ico-12.svg"></div>
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
<li><img src="/static/img/logos/logo2-negative.png" class="img-fluid" ></li>
<li><img src="/static/img/logos/bybit.png" class="img-fluid" ></li>
<li><img src="/static/img/logos/bitso.png" class="img-fluid" ></li>
<li><img src="/static/img/logos/okx.png" class="img-fluid" ></li>
<li><img src="/static/img/logos/logo3-negative.png" class="img-fluid" ></li>
<li><img src="/static/img/logos/logo8-negative.png" class="img-fluid" ></li>
<li><img src="/static/img/logos/logo1-negative.png" class="img-fluid" ></li>
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
<p>One simple integration, multiple countries</p>
</div>
<a href="https://sandbox-portal.facilitapay.com/"  target="_blank" class="btn me-auto"><strong>Sandbox</strong></a>
</div>
</div>
</div>
</section>



<div class="h-4 bg-white"></div>



<section class="steps">
<div class="container">
<div class="row">
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-13.svg" class="stepico"></div>
<h6>Step 1</h6>
<h5>Plataform and APIs Demo.</h5>
</div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-14.svg" class="stepico"></div>
<h6>Step 2</h6>
<h5>Definition of payment flow and available currencies.</h5>
</div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-15.svg" class="stepico"></div>
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
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-16.svg" class="stepico"></div>
<h6>Step 4</h6>
<h5>Integration.</h5>
</div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-17.svg" class="stepico"></div>
<h6>Step 5</h6>
<h5>Penny tests, final adjustment.</h5>
</div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-18.svg" class="stepico"></div>
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
<div class="col-11 col-lg-10" style="background-image: url(\'/static/img/locations.jpg\');" id="location">
<div class="container d-flex flex-column gap-2 p-1 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-sm-8 d-flex flex-column text-center justify-content-center">
<div class="d-flex flex-column gap-2 text-center justify-content-center">
<div class="d-flex flex-column gap-1">
<h6 class="txt-white">Let\'s Go</h6>
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



<div class="h-4"></div>',
            'css' => '* { box-sizing: border-box; } body {margin: 0;}*{box-sizing:border-box;}body{margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#i7jkdg{background-image:url(&#039;img/locations.jpg&#039;);}',
                'metatitle' => 'Home',
                'slug' => NULL,
                'metadescription' => 'Somos a Facilitapay
The payment platform designed for the growth and scale of your business. One simple integration, multiple countries.Meet FacilitaPay. The future of payment ecosystem. 
We developed the best solutions for international companies to access LatAm.
Let’s talkLearn more
Trusted by tech giants:
Why FacilitaPay
Designed to take your businessto the next level.Grow exponentually and increase revenue in Latin America through our +100 local payment methods including credit cards and alternative payment methods with high performance in approval and conversion rates, besides a great speed in processing. FacilitaPay platform is designed to provide the full local payment ecosystem with a single integration, enabling companies to expand their market reach fast.
Effortless
Start now with Plug &amp; Play integrations.Connect to our proprietary technology, constantly evolving to meet our customers demands, with one single API.
Start nowPay in &amp; Pay outsLocal acquiring in LatAm market, and over 190+ connections worldwide. Open banking crypto acceptance over 50+ APMs.
PerformanceBuilt to be scalable and help companies to process a high demand of payments instantly through global connections, consolidating data and payment information to enhancing authorizations.
Customized for your needsEnabling different businesses models and funds flow to integrate any customer need, adapting the infrastructure to fit different regulations and risk levels.
Scalable &amp; reliableTechnology created to keep performance during high-demand peak events and maintaining the same level of speed. Ensuring 99.999% uptime and 24x7 monitoring.
Actionable reportingGet data that adds value to your business from any transaction or customer behavior. We have all the information just an endpoint away.
We got your back, alwaysOur team help clients to operate locally, without the necessity of talking to chatbots or opening tickets. We are here for you.

welcome to latam
Accept all payment methods available in each countryClick to discover all payment methodsClick to discover all payment methodsClick to discover all payment methodsChile, we are coming.

The revolutionary instant payment method for global companies. The Brazilian payment method accepted worldwide.With PIX Global, you receive transactions immediately in your account, avoiding abusive fees and improving your customer experience.
Why you should open an account for receiving PIX transactions:Travelers will have less costs paying through PIXLess transactional costs for sellersNo monthly fees to setup an accountNo FX risks for sellers and buyersYou can access more than 60 million users connected to our payment network of local payment methods, alternative payment methods and local credit and debit cards.Learn more
ONBOARDING FLOW
Easy to setup and startOne simple integration, multiple countries
Sandbox
Step 1
Plataform and APIs Demo.
Step 2
Definition of payment flow and available currencies.
Step 3
Negotiating terms and signing a contract.
Step 4
Integration.
Step 5
Penny tests, final adjustment.
Step 6
Acess the local payment market with our solution.
Let’s Go
Ready to unlock new markets?Understand more about local payment methods available in each country, consumer behavior and local data. You will find everything you need for your expansion.
FIND OUT MORE',
                'created_at' => '2023-05-26 19:56:28',
                'updated_at' => '2023-06-01 17:09:22',
            ),
            1 => 
            array (
                'id' => 22,
                'pages_id' => 9,
                'locale' => 'pt',
                'title' => 'Home',
                'html' => '<body class="home"><div id="iiel"><section><div class="container d-flex flex-column gap-2 text-center pt-4"><div class="row justify-content-center"><div class="col-12 col-lg-9 d-flex flex-column gap-1"><h6 id="iqfj">Somos a Facilitapay</h6><h2><strong id="iqab">The payment platform designed for the growth and scale of your business. One simple integration, multiple countries.</strong></h2></div></div><div class="row justify-content-center"><div class="col-12 col-lg-10"><p>Meet FacilitaPay. The future of payment ecosystem. <br/>We developed the best solutions for international companies to access LatAm.</p></div></div><div class="row justify-content-center"><div class="col justify-content-center d-flex"><a href="optin.php" class="btn"><strong>Let’s talk</strong></a><a href="optin.php" class="btn btn-simple"><strong>Learn more</strong></a></div></div></div></section><div class="h-4"></div><section class="dashboard"><div class="container gap-24 text-center"><div class="row justify-content-center"><div class="col-12 col-lg-10 gap-12"><img src="/static/img/dashboard.jpg" id="dash" class="img-fluid ignoreanimation"/></div></div></div></section><section class="slider"><div class="container d-flex flex-column gap-2 pb-4 pt-4"><div class="row"><div class="col-12 d-flex flex-column align-items-center"><h6>Trusted by tech giants:</h6></div></div><div class="row"><div class="col-12"><div class="owl-carousel owl-partners owl-theme"><div class="item"><img src="/static/img/logos/kraken.png" id="ihlkq" class="img-fluid"/></div><div class="item"><img src="/static/img/logos/stake.png" id="iyjxk" class="img-fluid"/></div><div class="item"><img src="/static/img/logos/bybit-blue.png" id="iure3" class="img-fluid"/></div><div class="item"><img src="/static/img/logos/sproutfi.png" id="iess4" class="img-fluid"/></div><div class="item"><img src="/static/img/logos/bitso-blue.png" id="irxrv" class="img-fluid"/></div><div class="item"><img src="/static/img/logos/tickmill.png" id="ipoax" class="img-fluid"/></div><div class="item"><img src="/static/img/logos/okx-blue.png" id="iva8i" class="img-fluid"/></div><div class="item"><img src="/static/img/logos/wyre.png" id="iaz37" class="img-fluid"/></div><div class="item"><img src="/static/img/logos/okcoin.png" id="ig96z" class="img-fluid"/></div><div class="item"><img src="/static/img/logos/angloamerican.png" id="ijd4g"/></div><div class="item"><img src="/static/img/logos/bit2me.png" id="izl6q" class="img-fluid"/></div></div></div></div></div></section><section class="content-1 bg-white"><div class="container d-flex flex-column gap-2 pt-4 text-center"><div class="row justify-content-center"><div class="col-12 col-lg-10 gap-1"><h6>Why FacilitaPay</h6><h2><strong>Designed to take your business<br/>to the next level.</strong></h2></div></div><div class="row justify-content-center"><div class="col-12 col-lg-10"><p>Grow exponentually and increase revenue in Latin America through our +100 local payment methods including credit cards and alternative payment methods with high performance in approval and conversion rates, besides a great speed in processing. FacilitaPay platform is designed to provide the full local payment ecosystem with a single integration, enabling companies to expand their market reach fast.</p></div></div></div></section><section class="content-1 bg-white"><div class="container d-flex flex-column gap-2 pt-4"><div class="row align-items-center justify-content-center"><div class="col-8 col-sm-6 col-lg-5"><img id="blocks" src="/static/img/blocks.jpg" class="img-fluid"/></div><div class="col-12 col-sm-6 col-lg-5 d-flex flex-column gap-2"><div class="d-flex flex-column gap-1"><h6>Effortless</h6><h2><strong>Start now with Plug &amp;<br/> Play integrations.</strong></h2><p>Connect to our proprietary technology, constantly evolving to meet our customers demands, with one single API.</p></div><a href="optin.php" class="btn btn-big me-auto"><strong>Start now</strong></a></div></div></div></section><section class="bullets-1 bg-white animatedcards"><div class="container pt-4"><div class="row row-gap-2"><div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-1 animatedcard"><img src="/static/img/icos/ico-1.svg" class="h-3 me-auto"/><h4><strong>Pay in &amp; Pay outs</strong></h4><p>Local acquiring in LatAm market, and over 190+ connections worldwide. Open banking crypto acceptance over 50+ APMs.</p></div><div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-1 animatedcard"><img src="/static/img/icos/ico-2.svg" class="h-3 me-auto"/><h4><strong>Performance</strong></h4><p>Built to be scalable and help companies to process a high demand of payments instantly through global connections, consolidating data and payment information to enhancing authorizations.</p></div><div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-1 animatedcard"><img src="/static/img/icos/ico-3.svg" class="h-3 me-auto"/><h4><strong>Customized for your needs</strong></h4><p>Enabling different businesses models and funds flow to integrate any customer need, adapting the infrastructure to fit different regulations and risk levels.</p></div><div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-1 animatedcard"><img src="/static/img/icos/ico-4.svg" class="h-3 me-auto"/><h4><strong>Scalable &amp; reliable</strong></h4><p>Technology created to keep performance during high-demand peak events and maintaining the same level of speed. Ensuring 99.999% uptime and 24x7 monitoring.</p></div><div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-1 animatedcard"><img src="/static/img/icos/ico-5.svg" class="h-3 me-auto"/><h4><strong>Actionable reporting</strong></h4><p>Get data that adds value to your business from any transaction or customer behavior. We have all the information just an endpoint away.</p></div><div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-1 animatedcard"><img src="/static/img/icos/ico-6.svg" class="h-3 me-auto"/><h4><strong>We got your back, always</strong></h4><p>Our team help clients to operate locally, without the necessity of talking to chatbots or opening tickets. We are here for you.</p></div></div></div></section><div class="h-4 bg-white"></div><section id="map" class="map"><div class="container text-center pt-4"><div class="row justify-content-center"><div id="welcome" class="col-12 d-flex flex-column gap-1"><h6>welcome to latam</h6><h2><strong>Accept all payment methods available in each country</strong></h2></div></div><div class="row"><div class="col-12"><div class="map-container"><img src="/static/img/map-home.jpg" usemap="#map" class="img-fluid d-none d-sm-flex"/><img src="/static/img/map-home-mobile.jpg" class="img-fluid d-flex d-sm-none"/><map name="map" id="tooltipcanvas"><area href="markets-brazil.php" data-name="brasil" shape="poly" coords="370,431,381,426,385,437,398,437,418,429,434,450,467,462,494,479,471,523,540,527,541,542,470,543,446,568,436,578,441,589,431,608,419,606,409,599,420,577,411,564,396,552,396,535,383,523,377,514,363,505,357,494,341,499,327,493,325,476,340,470,341,443" class="ttiptrigger"/><area href="markets-colombia.php" data-name="colombia" shape="poly" coords="323,387,316,393,308,419,216,421,221,435,315,433,324,456,338,456,336,435,347,428,347,413,334,404" class="ttiptrigger"/><area href="markets-mexico.php" data-name="mexico" shape="poly" coords="180,321,109,325,112,338,188,339,218,360,243,360,268,336,229,344,219,306,200,298,186,283,161,281,151,301" class="ttiptrigger"/><area data-name="chile" shape="poly" coords="341,540,341,582,279,587,281,599,337,600,358,695,402,721,375,692,365,652,356,591,357,562" class="ttiptrigger"/></map></div></div></div></div></section><div class="ttipcontainer"><div id="brasil" class="ttip ignoreanimation"><img width="20" src="/static/img/finance/SVG/ico-pix-blue.svg"/><img width="20" src="/static/img/finance/SVG/ico-card-blue.svg"/><img width="20" src="/static/img/finance/SVG/ico-boleto-blue.svg"/><img width="20" src="/static/img/finance/SVG/ico-ted-blue.svg"/><img width="20" src="/static/img/finance/SVG/ico-international-wires-blue.svg"/><img width="20" src="/static/img/finance/SVG/ico-crypto-currencies-blue.svg"/><small>Click to discover all payment methods</small></div><div id="mexico" class="ttip ignoreanimation"><img width="20" src="/static/img/finance/SVG/ico-spei-blue.svg"/><img width="20" src="/static/img/finance/SVG/ico-card-blue.svg"/><img width="20" src="/static/img/finance/SVG/ico-oxxo-blue.svg"/><img width="20" src="/static/img/finance/SVG/ico-international-wires-blue.svg"/><img width="20" src="/static/img/finance/SVG/ico-crypto-currencies-blue.svg"/><img width="20" src="/static/img/finance/SVG/ico-codi-blue.svg"/><small>Click to discover all payment methods</small></div><div id="colombia" class="ttip ignoreanimation"><img width="20" src="/static/img/finance/SVG/ico-pse-blue.svg"/><img width="20" src="/static/img/finance/SVG/ico-card-blue.svg"/><img width="20" src="/static/img/finance/SVG/ico-money-blue.svg"/><img width="20" src="/static/img/finance/SVG/ico-ted-blue.svg"/><img width="20" src="/static/img/finance/SVG/ico-crypto-currencies-blue.svg"/><small>Click to discover all payment methods</small></div><div id="chile" class="ttip ignoreanimation"><p>Chile, we are coming.</p></div></div><div class="h-4 bg-white"></div><section class="hero-7"><div class="container d-flex flex-column gap-3 pb-5 pt-5"><div class="row d-flex row-gap-3 align-items-center justify-content-center"><div class="col-12 col-sm-6 d-flex flex-column gap-2"><div class="d-flex flex-column gap-2"><div class="pe-5"><img src="/static/img/logo-pix-global.svg" class="img-fluid"/></div><h3 class="txt-white"><strong>The revolutionary instant payment method for global companies. The Brazilian payment method accepted worldwide.</strong></h3></div><p class="txt-white">With PIX Global, you receive transactions immediately in your account, avoiding abusive fees and improving your customer experience.</p></div><div class="col-12 col-sm-5"><img id="pix" src="/static/img/pix-global-connect.svg" class="img-fluid"/></div></div><div class="row d-flex justify-content-center text-center"><div class="col-12 col-lg-8"><h2 class="txt-white"><strong>Why you should open an account for receiving PIX transactions:</strong></h2></div></div><div class="row justify-content-center"><div class="col-12 col-lg-8"><div class="row d-flex row-gap-2"><div class="col-12 col-sm-6 d-flex flex-column gap-1"><div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2 pixanimatedcard"><img src="/static/img/icos/ico-1.svg" class="w-2"/><p class="txt-blue"><strong>Travelers will have less costs paying through PIX</strong></p></div></div><div class="col-12 col-sm-6 d-flex flex-column gap-1"><div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2 pixanimatedcard"><img src="/static/img/icos/ico-2.svg" class="w-2"/><p class="txt-blue"><strong>Less transactional costs for sellers</strong></p></div></div><div class="col-12 col-sm-6 d-flex flex-column gap-1"><div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2 pixanimatedcard"><img src="/static/img/icos/ico-3.svg" class="w-2"/><p class="txt-blue"><strong>No monthly fees to setup an account</strong></p></div></div><div class="col-12 col-sm-6 d-flex flex-column gap-1"><div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2 pixanimatedcard"><img src="/static/img/icos/ico-4.svg" class="w-2"/><p class="txt-blue"><strong>No FX risks for sellers and buyers</strong></p></div></div><div class="col-12 d-flex flex-column gap-1"><div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2 pixanimatedcard"><img src="/static/img/icos/ico-5.svg" class="w-2"/><p class="txt-blue"><strong>You can access more than 60 million users connected to our payment network of local payment methods, alternative payment methods and local credit and debit cards.</strong></p></div></div></div></div></div><div class="row d-flex justify-content-center text-center"><div class="col-8"><a href="pix-global.php" class="btn btn-6 d-inline-flex"><strong>Learn more</strong></a></div></div></div></section><div class="h-4 bg-white"></div><section class="bg-white"><div class="container"><div class="row"><div class="col-12 d-flex flex-column gap-2"><div class="d-flex flex-column gap-1"><h6>ONBOARDING FLOW</h6><h2><strong>Easy to setup and start</strong></h2><p>One simple integration, multiple countries</p></div><a href="https://sandbox-portal.facilitapay.com/" target="_blank" class="btn me-auto"><strong>Sandbox</strong></a></div></div></div></section><div class="h-4 bg-white"></div><section class="steps"><div class="container"><div class="row"><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-13.svg" class="stepico"/></div><h6>Step 1</h6><h5>Plataform and APIs Demo.</h5></div></div><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-14.svg" class="stepico"/></div><h6>Step 2</h6><h5>Definition of payment flow and available currencies.</h5></div></div><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-15.svg" class="stepico"/></div><h6>Step 3</h6><h5>Negotiating terms and signing a contract.</h5></div></div></div></div></section><section class="steps"><div class="container"><div class="row"><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-16.svg" class="stepico"/></div><h6>Step 4</h6><h5>Integration.</h5></div></div><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-17.svg" class="stepico"/></div><h6>Step 5</h6><h5>Penny tests, final adjustment.</h5></div></div><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-18.svg" class="stepico"/></div><h6>Step 6</h6><h5>Acess the local payment market with our solution.</h5></div></div></div></div></section><section class="content-8"><div class="container"><div class="row justify-content-center"><div id="location" class="col-11 col-lg-10"><div class="container d-flex flex-column gap-2 p-1 pb-4 pt-4"><div class="row justify-content-center"><div class="col-12 col-sm-8 d-flex flex-column text-center justify-content-center"><div class="d-flex flex-column gap-2 text-center justify-content-center"><div class="d-flex flex-column gap-1"><h6 class="txt-white">Let’s Go</h6><h2 class="txt-white"><strong>Ready to unlock new markets?</strong></h2><p class="txt-white">Understand more about local payment methods available in each country, consumer behavior and local data. You will find everything you need for your expansion.</p></div><a href="optin.php" class="btn m-auto"><strong>FIND OUT MORE</strong></a></div></div></div></div></div></div></div></section><div class="h-4"></div></div></body>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Home',
                'slug' => NULL,
                'metadescription' => 'Somos a FacilitapayThe payment platform designed for the growth and scale of your business. One simple integration, multiple countries.Meet FacilitaPay. The future of payment ecosystem. We developed the best solutions for international companies to access LatAm.Let’s talkLearn moreTrusted by tech giants:Why FacilitaPayDesigned to take your businessto the next level.Grow exponentually and increase revenue in Latin America through our +100 local payment methods including credit cards and alternative payment methods with high performance in approval and conversion rates, besides a great speed in processing. FacilitaPay platform is designed to provide the full local payment ecosystem with a single integration, enabling companies to expand their market reach fast.EffortlessStart now with Plug &amp; Play integrations.Connect to our proprietary technology, constantly evolving to meet our customers demands, with one single API.Start nowPay in &amp; Pay outsLocal acquiring in LatAm market, and over 190+ connections worldwide. Open banking crypto acceptance over 50+ APMs.PerformanceBuilt to be scalable and help companies to process a high demand of payments instantly through global connections, consolidating data and payment information to enhancing authorizations.Customized for your needsEnabling different businesses models and funds flow to integrate any customer need, adapting the infrastructure to fit different regulations and risk levels.Scalable &amp; reliableTechnology created to keep performance during high-demand peak events and maintaining the same level of speed. Ensuring 99.999% uptime and 24x7 monitoring.Actionable reportingGet data that adds value to your business from any transaction or customer behavior. We have all the information just an endpoint away.We got your back, alwaysOur team help clients to operate locally, without the necessity of talking to chatbots or opening tickets. We are here for you.welcome to latamAccept all payment methods available in each countryClick to discover all payment methodsClick to discover all payment methodsClick to discover all payment methodsChile, we are coming.The revolutionary instant payment method for global companies. The Brazilian payment method accepted worldwide.With PIX Global, you receive transactions immediately in your account, avoiding abusive fees and improving your customer experience.Why you should open an account for receiving PIX transactions:Travelers will have less costs paying through PIXLess transactional costs for sellersNo monthly fees to setup an accountNo FX risks for sellers and buyersYou can access more than 60 million users connected to our payment network of local payment methods, alternative payment methods and local credit and debit cards.Learn moreONBOARDING FLOWEasy to setup and startOne simple integration, multiple countriesSandboxStep 1Plataform and APIs Demo.Step 2Definition of payment flow and available currencies.Step 3Negotiating terms and signing a contract.Step 4Integration.Step 5Penny tests, final adjustment.Step 6Acess the local payment market with our solution.Let’s GoReady to unlock new markets?Understand more about local payment methods available in each country, consumer behavior and local data. You will find everything you need for your expansion.FIND OUT MORE',
                'created_at' => '2023-05-26 19:56:28',
                'updated_at' => '2023-05-30 18:09:22',
            ),
            2 => 
            array (
                'id' => 23,
                'pages_id' => 9,
                'locale' => 'es',
                'title' => 'Home',
                'html' => '<body class="home">
<div id="iiel">
<section>
<div class="container d-flex flex-column gap-2 text-center pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-9 d-flex flex-column gap-1"><h6 id="ih8j">SOMOS FACILITAPAY</h6>
<h2><strong id="is4m">La plataforma de pago diseñada para el crecimiento y la escalabilidad de tu
negocio. Una integración simple, varios países.</strong></h2></div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-10"><p id="ibrfl">Conoce a FacilitaPay. El futuro del ecosistema de
pagos.<br/>Desarrollamos las mejores soluciones para que empresas globales se expandan en
América Latina.<br/></p></div>
</div>
<div class="row justify-content-center">
<div class="col justify-content-center d-flex"><a href="optin.php" class="btn"><strong id="ipfrc">Contacto</strong></a><a
href="optin.php" class="btn btn-simple"><strong id="i3lcb">Más Información</strong></a></div>
</div>
</div>
</section>
<div class="h-4"></div>
<section class="dashboard">
<div class="container gap-24 text-center">
<div class="row justify-content-center">
<div class="col-12 col-lg-10 gap-12"><img src="/static/img/dashboard.jpg" id="dash"
class="img-fluid ignoreanimation"/></div>
</div>
</div>
</section>
<section class="slider">
<div class="container d-flex flex-column gap-2 pb-4 pt-4">
<div class="row">
<div class="col-12 d-flex flex-column align-items-center"><h6 id="iorfu">CONFIADO POR LOS GIGANTES DE LA
TECNOLOGÍA</h6></div>
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
<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-2 pt-4 text-center">
<div class="row justify-content-center">
<div class="col-12 col-lg-10 gap-1"><h6 id="iq26r">¿POR QUÉ FACILITAPAY?</h6>
<h2><strong id="iua37">Nuestra plataforma está diseñada para llevar a tu negocio al siguiente
nivel.</strong></h2></div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-10"><p id="iobgp">Crece exponencialmente y aumenta tus ingresos en América
Latina a través de nuestra integración con más de 100 métodos de pago locales, incluyendo
tarjetas de crédito y métodos de pago alternativos con alto rendimiento en conversiones y en las
tasas de aprobación, así como una gran velocidad en el procesamiento. <br/><br/>La plataforma de
FacilitaPay está diseñada para darle a nuestros partners acceso a todo el ecosistema de pagos
locales con una única integración, lo que permite a las empresas ampliar rápidamente su alcance
en el mercado.<br/></p></div>
</div>
</div>
</section>
<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row align-items-center justify-content-center">
<div class="col-8 col-sm-6 col-lg-5"><img id="blocks" src="/static/img/blocks.jpg" class="img-fluid"/>
</div>
<div class="col-12 col-sm-6 col-lg-5 d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1"><h6 id="i7djq">SIMPLE Y FÁCIL</h6>
<h2><strong id="is6u6">Comienza ahora con integraciones Plug &amp; Play.</strong></h2>
<p id="ifg6j">Conéctate a nuestra tecnología patentada, en constante evolución para satisfacer
las demandas de nuestros partners con una sola API.</p></div>
<a href="optin.php" class="btn btn-big me-auto"><strong id="i16i2">Comienza ahora</strong></a></div>
</div>
</div>
</section>
<section class="bullets-1 bg-white animatedcards">
<div class="container pt-4">
<div class="row row-gap-2">
<div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-1 animatedcard"><img
src="/static/img/icos/ico-1.svg" class="h-3 me-auto"/><h4><strong>Pay in &amp; Pay outs</strong>
</h4>
<p id="i664zj">Adquirencia local en el mercado Latinoamericano, y más de 190 conexiones a nivel
regional. Utilizamos criptografía de banco abierto en más de 50 métodos de pago
alternativos.</p></div>
<div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-1 animatedcard"><img
src="/static/img/icos/ico-2.svg" class="h-3 me-auto"/><h4><strong
id="iiyamb">Rendimiento</strong></h4>
<p id="izud4j">Diseñado para ser escalable y ayudar a las empresas a procesar un alto flujo de pagos
de forma instantánea y a través de conexiones globales, consolidando los datos y la información
de las transacciones para mejorar sus aprobaciones.</p></div>
<div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-1 animatedcard"><img
src="/static/img/icos/ico-3.svg" class="h-3 me-auto"/><h4><strong id="i27arq">Adaptado a tus
necesidades</strong></h4>
<p id="ib92eh">Trabajamos con diferentes modelos de negocio y flujos de fondos para integrar
cualquier necesidad de nuestros clientes, adaptando nuestra infraestructura para cumplir con las
diferentes regulaciones y niveles de riesgo.</p></div>
<div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-1 animatedcard"><img
src="/static/img/icos/ico-4.svg" class="h-3 me-auto"/><h4><strong id="ivrjvn">Escalable y
confiable</strong></h4>
<p id="iheeh7">Tecnología diseñada para mantener un alto rendimiento durante incrementos en la
demanda y estabilidad en la velocidad de los pagos. Asegurando una disponibilidad operativa del
99.99% y un monitoreo 24 horas al día, 7 días a la semana.</p></div>
<div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-1 animatedcard"><img
src="/static/img/icos/ico-5.svg" class="h-3 me-auto"/><h4><strong id="i2dmao">Relatorios para la
toma de decisiones</strong></h4>
<p id="id962h">Obtén datos que agreguen valor a tu negocio basados en las transacciones y el
comportamiento de tus clientes. Tenemos toda la información a tan solo un endpoint de
distancia.</p></div>
<div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-1 animatedcard"><img
src="/static/img/icos/ico-6.svg" class="h-3 me-auto"/><h4><strong id="i3x3sq">Estaremos contigo,
siempre</strong></h4>
<p id="i6bpuv">Un equipo listo para ayudarte a operar localmente, sin tenerte que comunicar con
chat-bots ni abrir tickets. Estamos aquí para tu empresa.</p></div>
</div>
</div>
</section>
<div class="h-4 bg-white"></div>
<section id="map" class="map">
<div class="container text-center pt-4">
<div class="row justify-content-center">
<div id="welcome" class="col-12 d-flex flex-column gap-1"><h6 id="ia832u">BIENVENIDOS A AMÉRICA
LATINA</h6>
<h2><strong id="if35vo">Acepta todos los métodos de pago disponibles en cada país. </strong></h2>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="map-container"><img src="/static/img/map-home.jpg" usemap="#map"
class="img-fluid d-none d-sm-flex"/><img
src="/static/img/map-home-mobile.jpg" class="img-fluid d-flex d-sm-none"/>
<map name="map" id="tooltipcanvas">
<area href="markets-brazil.php" data-name="brasil" shape="poly"
coords="370,431,381,426,385,437,398,437,418,429,434,450,467,462,494,479,471,523,540,527,541,542,470,543,446,568,436,578,441,589,431,608,419,606,409,599,420,577,411,564,396,552,396,535,383,523,377,514,363,505,357,494,341,499,327,493,325,476,340,470,341,443"
class="ttiptrigger"/>
<area href="markets-colombia.php" data-name="colombia" shape="poly"
coords="323,387,316,393,308,419,216,421,221,435,315,433,324,456,338,456,336,435,347,428,347,413,334,404"
class="ttiptrigger"/>
<area href="markets-mexico.php" data-name="mexico" shape="poly"
coords="180,321,109,325,112,338,188,339,218,360,243,360,268,336,229,344,219,306,200,298,186,283,161,281,151,301"
class="ttiptrigger"/>
<area data-name="chile" shape="poly"
coords="341,540,341,582,279,587,281,599,337,600,358,695,402,721,375,692,365,652,356,591,357,562"
class="ttiptrigger"/>
</map>
</div>
</div>
</div>
</div>
</section>
<div class="ttipcontainer">
<div id="brasil" class="ttip ignoreanimation"><img width="20"
src="/static/img/finance/SVG/ico-pix-blue.svg"/><img
width="20" src="/static/img/finance/SVG/ico-card-blue.svg"/><img width="20"
src="/static/img/finance/SVG/ico-boleto-blue.svg"/><img
width="20" src="/static/img/finance/SVG/ico-ted-blue.svg"/><img width="20"
src="/static/img/finance/SVG/ico-international-wires-blue.svg"/><img
width="20" src="/static/img/finance/SVG/ico-crypto-currencies-blue.svg"/><small>Click to discover all
payment methods</small></div>
<div id="mexico" class="ttip ignoreanimation"><img width="20"
src="/static/img/finance/SVG/ico-spei-blue.svg"/><img
width="20" src="/static/img/finance/SVG/ico-card-blue.svg"/><img width="20"
src="/static/img/finance/SVG/ico-oxxo-blue.svg"/><img
width="20" src="/static/img/finance/SVG/ico-international-wires-blue.svg"/><img width="20"
src="/static/img/finance/SVG/ico-crypto-currencies-blue.svg"/><img
width="20" src="/static/img/finance/SVG/ico-codi-blue.svg"/><small>Click to discover all payment
methods</small></div>
<div id="colombia" class="ttip ignoreanimation"><img width="20" src="/static/img/finance/SVG/ico-pse-blue.svg"/><img
width="20" src="/static/img/finance/SVG/ico-card-blue.svg"/><img width="20"
src="/static/img/finance/SVG/ico-money-blue.svg"/><img
width="20" src="/static/img/finance/SVG/ico-ted-blue.svg"/><img width="20"
src="/static/img/finance/SVG/ico-crypto-currencies-blue.svg"/><small>Click
to discover all payment methods</small></div>
<div id="chile" class="ttip ignoreanimation"><p>Chile, we are coming.</p></div>
</div>
<div class="h-4 bg-white"></div>
<section class="hero-7">
<div class="container d-flex flex-column gap-3 pb-5 pt-5">
<div class="row d-flex row-gap-3 align-items-center justify-content-center">
<div class="col-12 col-sm-6 d-flex flex-column gap-2">
<div class="d-flex flex-column gap-2">
<div class="pe-5"><img src="/static/img/logo-pix-global.svg" class="img-fluid"/></div>
<h3 class="txt-white"><strong id="ivvb4m">El revolucionario método de pago instantáneo, ahora
disponible para empresas globales. El método de pago brasileño que podrá ser aceptado en
todo el mundo.</strong></h3></div>
<p class="txt-white">Con PIX Global, recibes las transacciones inmediatamente en tu cuenta, evitando
tarifas abusivas y mejorando la experiencia de tus clientes.</p></div>
<div class="col-12 col-sm-5"><img id="pix" src="/static/img/pix-global-connect.svg" class="img-fluid"/>
</div>
</div>
<div class="row d-flex justify-content-center text-center">
<div class="col-12 col-lg-8"><h2 class="txt-white"><strong id="i0ltmv">Why you should open an account
for receiving PIX transactions:</strong></h2></div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-8">
<div class="row d-flex row-gap-2">
<div class="col-12 col-sm-6 d-flex flex-column gap-1">
<div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2 pixanimatedcard">
<img src="/static/img/icos/ico-1.svg" class="w-2"/>
<p class="txt-blue"><strong>Travelers will have less costs paying through PIX</strong>
</p></div>
</div>
<div class="col-12 col-sm-6 d-flex flex-column gap-1">
<div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2 pixanimatedcard">
<img src="/static/img/icos/ico-2.svg" class="w-2"/>
<p class="txt-blue"><strong>Less transactional costs for sellers</strong></p></div>
</div>
<div class="col-12 col-sm-6 d-flex flex-column gap-1">
<div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2 pixanimatedcard">
<img src="/static/img/icos/ico-3.svg" class="w-2"/>
<p class="txt-blue"><strong>No monthly fees to setup an account</strong></p></div>
</div>
<div class="col-12 col-sm-6 d-flex flex-column gap-1">
<div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2 pixanimatedcard">
<img src="/static/img/icos/ico-4.svg" class="w-2"/>
<p class="txt-blue"><strong>No FX risks for sellers and buyers</strong></p></div>
</div>
<div class="col-12 d-flex flex-column gap-1">
<div class="d-flex bg-white border-radius gap-2 align-items-startpa p-2 pixanimatedcard">
<img src="/static/img/icos/ico-5.svg" class="w-2"/>
<p class="txt-blue"><strong>You can access more than 60 million users connected to our
payment network of local payment methods, alternative payment methods and local
credit and debit cards.</strong></p></div>
</div>
</div>
</div>
</div>
<div class="row d-flex justify-content-center text-center">
<div class="col-8"><a href="pix-global.php" class="btn btn-6 d-inline-flex"><strong>Learn more</strong></a>
</div>
</div>
</div>
</section>
<div class="h-4 bg-white"></div>
<section class="bg-white">
<div class="container">
<div class="row">
<div class="col-12 d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1"><h6 id="i85nvc">FLUJO DE ONBOARDING</h6>
<h2><strong>Easy to setup and start</strong></h2>
<p id="iy37jb">Una sola integración, varios países</p></div>
<a href="https://sandbox-portal.facilitapay.com/" target="_blank" class="btn me-auto"><strong>Sandbox</strong></a>
</div>
</div>
</div>
</section>
<div class="h-4 bg-white"></div>
<section class="steps">
<div class="container">
<div class="row">
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-13.svg" class="stepico"/></div>
<h6 id="is813q">PASO 1</h6><h5 id="ifr8ff">Demostraciones de plataforma y de nuestra API.</h5>
</div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-14.svg" class="stepico"/></div>
<h6 id="iqda2k">PASO 2</h6><h5 id="i9elcy">Definición de los flujos de pago y las divisas
disponibles.</h5></div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-15.svg" class="stepico"/></div>
<h6 id="i0odco">PASO 3</h6><h5 id="icbpj5">Negociación de los términos y la firma del
contrato.</h5></div>
</div>
</div>
</div>
</section>
<section class="steps">
<div class="container">
<div class="row">
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-16.svg" class="stepico"/></div>
<h6 id="i40p6k">Paso 4</h6><h5 id="i0ays3">Integración.</h5></div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-17.svg" class="stepico"/></div>
<h6 id="ic3pfd">Paso 5</h6><h5 id="iz26g3">Primeras pruebas y ajustes finales en la
integración.</h5></div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-18.svg" class="stepico"/></div>
<h6 id="ixsyw5">PASO 6</h6><h5 id="i9q17j">Accede al mercado de pagos locales con nuestra
solución.</h5></div>
</div>
</div>
</div>
</section>
<section class="content-8">
<div class="container">
<div class="row justify-content-center">
<div id="location" class="col-11 col-lg-10">
<div class="container d-flex flex-column gap-2 p-1 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-sm-8 d-flex flex-column text-center justify-content-center">
<div class="d-flex flex-column gap-2 text-center justify-content-center">
<div class="d-flex flex-column gap-1"><h6 class="txt-white">VAMOS</h6>
<h2 class="txt-white"><strong id="ia6aoh">¿Listo para desbloquear nuevos
mercados?</strong></h2>
<p class="txt-white">Conoce más sobre los métodos de pago locales disponibles en
cada país, el comportamiento del consumidor y los datos locales. Encontrarás
todo lo que necesitas para tu expansión.</p></div>
<a href="optin.php" class="btn m-auto"><strong id="i7avrn">DESCUBRE MÁS</strong></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="h-4"></div>
</div>
</body>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Home',
                'slug' => NULL,
                'metadescription' => 'SOMOS FACILITAPAYLa plataforma de pago diseñada para el crecimiento y la escalabilidad de tu negocio. Una integración simple, varios países.Conoce a FacilitaPay. El futuro del ecosistema de pagos.Desarrollamos las mejores soluciones para que empresas globales se expandan en América Latina.ContactoMás InformaciónCONFIADO POR LOS GIGANTES DE LA TECNOLOGÍA¿POR QUÉ FACILITAPAY?Nuestra plataforma está diseñada para llevar a tu negocio al siguiente nivel.Crece exponencialmente y aumenta tus ingresos en América Latina a través de nuestra integración con más de 100 métodos de pago locales, incluyendo tarjetas de crédito y métodos de pago alternativos con alto rendimiento en conversiones y en las tasas de aprobación, así como una gran velocidad en el procesamiento. La plataforma de FacilitaPay está diseñada para darle a nuestros partners acceso a todo el ecosistema de pagos locales con una única integración, lo que permite a las empresas ampliar rápidamente su alcance en el mercado.SIMPLE Y FÁCILComienza ahora con integraciones Plug &amp; Play.Conéctate a nuestra tecnología patentada, en constante evolución para satisfacer las demandas de nuestros partners con una sola API.Comienza ahoraPay in &amp; Pay outsAdquirencia local en el mercado Latinoamericano, y más de 190 conexiones a nivel regional. Utilizamos criptografía de banco abierto en más de 50 métodos de pago alternativos.RendimientoDiseñado para ser escalable y ayudar a las empresas a procesar un alto flujo de pagos de forma instantánea y a través de conexiones globales, consolidando los datos y la información de las transacciones para mejorar sus aprobaciones.Adaptado a tus necesidadesTrabajamos con diferentes modelos de negocio y flujos de fondos para integrar cualquier necesidad de nuestros clientes, adaptando nuestra infraestructura para cumplir con las diferentes regulaciones y niveles de riesgo.Escalable y confiableTecnología diseñada para mantener un alto rendimiento durante incrementos en la demanda y estabilidad en la velocidad de los pagos. Asegurando una disponibilidad operativa del 99.99% y un monitoreo 24 horas al día, 7 días a la semana.Relatorios para la toma de decisionesObtén datos que agreguen valor a tu negocio basados en las transacciones y el comportamiento de tus clientes. Tenemos toda la información a tan solo un endpoint de distancia.Estaremos contigo, siempreUn equipo listo para ayudarte a operar localmente, sin tenerte que comunicar con chat-bots ni abrir tickets. Estamos aquí para tu empresa.BIENVENIDOS A AMÉRICA LATINAAcepta todos los métodos de pago disponibles en cada país. Click to discover all payment methodsClick to discover all payment methodsClick to discover all payment methodsChile, we are coming.El revolucionario método de pago instantáneo, ahora disponible para empresas globales. El método de pago brasileño que podrá ser aceptado en todo el mundo.Con PIX Global, recibes las transacciones inmediatamente en tu cuenta, evitando tarifas abusivas y mejorando la experiencia de tus clientes.Why you should open an account for receiving PIX transactions:Travelers will have less costs paying through PIXLess transactional costs for sellersNo monthly fees to setup an accountNo FX risks for sellers and buyersYou can access more than 60 million users connected to our payment network of local payment methods, alternative payment methods and local credit and debit cards.Learn moreFLUJO DE ONBOARDINGEasy to setup and startUna sola integración, varios paísesSandboxPASO 1Demostraciones de plataforma y de nuestra API.PASO 2Definición de los flujos de pago y las divisas disponibles.PASO 3Negociación de los términos y la firma del contrato.Paso 4Integración.Paso 5Primeras pruebas y ajustes finales en la integración.PASO 6Accede al mercado de pagos locales con nuestra solución.VAMOS¿Listo para desbloquear nuevos mercados?Conoce más sobre los métodos de pago locales disponibles en cada país, el comportamiento del consumidor y los datos locales. Encontrarás todo lo que necesitas para tu expansión.DESCUBRE MÁS',
                'created_at' => '2023-05-26 19:56:28',
                'updated_at' => '2023-05-30 19:51:33',
            ),
            3 => 
            array (
                'id' => 27,
                'pages_id' => 11,
                'locale' => 'en',
                'title' => 'Payins',
                'html' => '<section id="iyn4" class="hero-2"><div class="container d-flex flex-column gap-3 pb-5 pt-5"><div class="row justify-content-center"><div class="col-12 col-lg-5 d-flex flex-column gap-2"><div class="d-flex flex-column gap-1"><h6 class="txt-light-green">PAYINS</h6><h3 class="txt-white"><strong>Master <strong class="txt-light-green">local payment collection</strong> in emerging markets</strong></h3></div><p class="txt-white">Boost payment conversion rate and reach by offering your users a payment experience they choose daily.</p><a href="optin.php" class="btn me-auto"><strong>Start now</strong></a></div><div class="col-12 col-lg-5">
</div></div></div></section><section class="content-1 bg-white"><div class="container text-start pb-4 pt-4"><div class="row row-gap-2 flex-column-reverse flex-md-row align-items-center justify-content-center"><div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-2"><h4><strong>Deliver a <strong class="txt-light-green">local payment experience</strong> and leverage the best features to boots conversion rates</strong></h4><ul class="d-flex flex-column gap-1"><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span>Local Credit/Debit cards</span></li><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span>Local transfers</span></li><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span>Local alternative payment methods</span></li><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span>Digital Wallets</span></li></ul></div><div class="col-12 col-md-1">
</div><div class="col-7 col-md-5 col-lg-4"><img src="/static/img/payins-1.png" class="img-fluid"/></div></div></div></section><section class="content-1 bg-white"><div class="container text-start pb-4"><div class="row row-gap-2 align-items-center justify-content-center"><div class="col-7 col-md-5 col-lg-4"><img src="/static/img/payins-2.png" class="img-fluid"/></div><div class="col-12 col-md-1">
</div><div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-2"><h4><strong>Reach more than <strong class="txt-light-green">95% consumers in emerging markets</strong>, by accepting the payment methods in which they rely on every day</strong></h4><ul class="d-flex flex-column gap-1"><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span>Increase approval rates</span></li><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span>Prevent chargebacks</span></li><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span>Connect directly to local payment rails</span></li><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span>Deliver a faster and low cost experience to your end users</span></li></ul></div></div></div><div class="container text-start pb-4"><div class="row justify-content-center"><div class="col justify-content-center d-flex"><a href="optin.php" class="btn"><strong>Let’s talk</strong></a></div></div></div></section><section class="content-1 bg-white"><div class="container pb-4 pt-4"><div class="row text-center"><div class="col-12"><h2><strong>How it works</strong></h2></div></div></div></section><div class="h-2 bg-white"></div><section class="steps bg-white"><div class="container"><div class="row"><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-13.svg"/></div><h6>Step 1</h6><h5>A multi-currency account within FacilitaPay is created for the merchant</h5></div></div><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-14.svg"/></div><h6>Step 2</h6><h5>End user instructs a payout directly on merchant&#039;s page/app</h5></div></div><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-15.svg"/></div><h6>Step 3</h6><h5>FacilitaPay API acts in the back-end of the merchant&#039;s banking system</h5></div></div></div></div></section><section class="steps bg-white"><div class="container"><div class="row"><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-16.svg"/></div><h6>Step 4</h6><h5>FacilitaPay receives the payout instruction</h5></div></div><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-17.svg"/></div><h6>Step 5</h6><h5>FacilitaPay convert the funds between internal accounts</h5></div></div><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-18.svg"/></div><h6>Step 6</h6><h5>They payout is processed by FacilitaPay payment network</h5></div></div></div></div></section><section class="content-1 bg-light-gray"><div class="container d-flex flex-column gap-3 pb-4 pt-4"><div class="row d-flex justify-content-center text-center"><div class="col-12 col-lg-8"><h2><strong>See how FacilitaPay <strong class="txt-light-green">payment solutions</strong> for emerging markets can help your business</strong></h2></div></div><div class="row row-gap-4 text-start align-items-center"><div class="col-12 col-lg-4 d-flex flex-column gap-1"><div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img src="/static/img/icos/ico-1.svg" class="w-2"/><div class="d-flex flex-column gap-1"><p class="txt-blue"><strong>SaaS</strong></p><p>Improve the payments section of your user’s journey and make recurring and subscription billing more efficient</p></div></div><div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img src="/static/img/icos/ico-2.svg" class="w-2"/><div class="d-flex flex-column gap-1"><p class="txt-blue"><strong>Shared economy &amp; marketplaces</strong></p><p>Experience frictionless low cost and high value volume payments and mass payouts to run a smooth operation in emerging markets</p></div></div><div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img src="/static/img/icos/ico-3.svg" class="w-2"/><div class="d-flex flex-column gap-1"><p class="txt-blue"><strong>Online retail</strong></p><p>Sell in the way your customers want to buy with all your payment methods and currencies in one platform</p></div></div></div><div class="col-12 col-lg-4 d-flex flex-column align-items-center"><img src="/static/img/computador.png" class="img-fluid w-50"/></div><div class="col-12 col-lg-4 d-flex flex-column gap-1"><div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img src="/static/img/icos/ico-4.svg" class="w-2"/><div class="d-flex flex-column gap-1"><p class="txt-blue"><strong>Digital dashboards</strong></p><p>Control all your online transactions in real time.</p></div></div><div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img src="/static/img/icos/ico-5.svg" class="w-2"/><div class="d-flex flex-column gap-1"><p class="txt-blue"><strong>High cyber security level</strong></p><p>Utilizes high-end transaction monitoring software integrated to our API, upholding financial operation security at all times.</p></div></div><div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img src="/static/img/icos/ico-6.svg" class="w-2"/><div class="d-flex flex-column gap-1"><p class="txt-blue"><strong>Strong compliance</strong></p><p>Monthly installments, embedded payment optimization and advanced KYC and AML processes, including real-time validation.</p></div></div></div></div></div><div class="container text-start pb-4"><div class="row justify-content-center"><div class="col justify-content-center d-flex"><a href="optin.php" class="btn"><strong>Let’s talk</strong></a></div></div></div></section>',
            'css' => '* { box-sizing: border-box; } body {margin: 0;}*{box-sizing:border-box;}body{margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}*{box-sizing:border-box;}body{margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}*{box-sizing:border-box;}body{margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}*{box-sizing:border-box;}body{margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#iyn4{background-image:url("/static/img/bg-payins.jpg");}',
                'metatitle' => 'Payins',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-29 20:14:49',
                'updated_at' => '2023-06-01 17:37:21',
            ),
            4 => 
            array (
                'id' => 28,
                'pages_id' => 11,
                'locale' => 'pt',
                'title' => 'Payins',
                'html' => '<body class="home"><section class="hero-2" id="i4t7"><div class="container d-flex flex-column gap-3 pb-5 pt-5"><div class="row justify-content-center"><div class="col-12 col-lg-5 d-flex flex-column gap-2"><div class="d-flex flex-column gap-1"><h6 class="txt-light-green">PAYINS</h6><h3 class="txt-white"><strong id="ij1u">PT Master <strong class="txt-light-green">local payment collection</strong> in emerging markets</strong></h3></div><p class="txt-white">Boost payment conversion rate and reach by offering your users a payment experience they choose daily.</p><a href="optin.php" class="btn me-auto"><strong>Start now</strong></a></div><div class="col-12 col-lg-5">
</div></div></div></section><section class="content-1 bg-white"><div class="container text-start pb-4 pt-4"><div class="row row-gap-2 flex-column-reverse flex-md-row align-items-center justify-content-center"><div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-2"><h4><strong>Deliver a <strong class="txt-light-green">local payment experience</strong> and leverage the best features to boots conversion rates</strong></h4><ul class="d-flex flex-column gap-1"><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span>Local Credit/Debit cards</span></li><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span>Local transfers</span></li><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span>Local alternative payment methods</span></li><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span>Digital Wallets</span></li></ul></div><div class="col-12 col-md-1">
</div><div class="col-7 col-md-5 col-lg-4"><img src="/static/img/payins-1.png" class="img-fluid"/></div></div></div></section><section class="content-1 bg-white"><div class="container text-start pb-4"><div class="row row-gap-2 align-items-center justify-content-center"><div class="col-7 col-md-5 col-lg-4"><img src="/static/img/payins-2.png" class="img-fluid"/></div><div class="col-12 col-md-1">
</div><div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-2"><h4><strong>Reach more than <strong class="txt-light-green">95% consumers in emerging markets</strong>, by accepting the payment methods in which they rely on every day</strong></h4><ul class="d-flex flex-column gap-1"><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span>Increase approval rates</span></li><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span>Prevent chargebacks</span></li><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span>Connect directly to local payment rails</span></li><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span>Deliver a faster and low cost experience to your end users</span></li></ul></div></div></div><div class="container text-start pb-4"><div class="row justify-content-center"><div class="col justify-content-center d-flex"><a href="optin.php" class="btn"><strong>Let’s talk</strong></a></div></div></div></section><section class="content-1 bg-white"><div class="container pb-4 pt-4"><div class="row text-center"><div class="col-12"><h2><strong>How it works</strong></h2></div></div></div></section><div class="h-2 bg-white"></div><section class="steps bg-white"><div class="container"><div class="row"><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-13.svg"/></div><h6>Step 1</h6><h5>A multi-currency account within FacilitaPay is created for the merchant</h5></div></div><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-14.svg"/></div><h6>Step 2</h6><h5>End user instructs a payout directly on merchant&#039;s page/app</h5></div></div><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-15.svg"/></div><h6>Step 3</h6><h5>FacilitaPay API acts in the back-end of the merchant&#039;s banking system</h5></div></div></div></div></section><section class="steps bg-white"><div class="container"><div class="row"><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-16.svg"/></div><h6>Step 4</h6><h5>FacilitaPay receives the payout instruction</h5></div></div><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-17.svg"/></div><h6>Step 5</h6><h5>FacilitaPay convert the funds between internal accounts</h5></div></div><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-18.svg"/></div><h6>Step 6</h6><h5>They payout is processed by FacilitaPay payment network</h5></div></div></div></div></section><section class="content-1 bg-light-gray"><div class="container d-flex flex-column gap-3 pb-4 pt-4"><div class="row d-flex justify-content-center text-center"><div class="col-12 col-lg-8"><h2><strong>See how FacilitaPay <strong class="txt-light-green">payment solutions</strong> for emerging markets can help your business</strong></h2></div></div><div class="row row-gap-4 text-start align-items-center"><div class="col-12 col-lg-4 d-flex flex-column gap-1"><div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img src="/static/img/icos/ico-1.svg" class="w-2"/><div class="d-flex flex-column gap-1"><p class="txt-blue"><strong>SaaS</strong></p><p>Improve the payments section of your user’s journey and make recurring and subscription billing more efficient</p></div></div><div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img src="/static/img/icos/ico-2.svg" class="w-2"/><div class="d-flex flex-column gap-1"><p class="txt-blue"><strong>Shared economy &amp; marketplaces</strong></p><p>Experience frictionless low cost and high value volume payments and mass payouts to run a smooth operation in emerging markets</p></div></div><div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img src="/static/img/icos/ico-3.svg" class="w-2"/><div class="d-flex flex-column gap-1"><p class="txt-blue"><strong>Online retail</strong></p><p>Sell in the way your customers want to buy with all your payment methods and currencies in one platform</p></div></div></div><div class="col-12 col-lg-4 d-flex flex-column align-items-center"><img src="/static/img/computador.png" class="img-fluid w-50"/></div><div class="col-12 col-lg-4 d-flex flex-column gap-1"><div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img src="/static/img/icos/ico-4.svg" class="w-2"/><div class="d-flex flex-column gap-1"><p class="txt-blue"><strong>Digital dashboards</strong></p><p>Control all your online transactions in real time.</p></div></div><div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img src="/static/img/icos/ico-5.svg" class="w-2"/><div class="d-flex flex-column gap-1"><p class="txt-blue"><strong>High cyber security level</strong></p><p>Utilizes high-end transaction monitoring software integrated to our API, upholding financial operation security at all times.</p></div></div><div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img src="/static/img/icos/ico-6.svg" class="w-2"/><div class="d-flex flex-column gap-1"><p class="txt-blue"><strong>Strong compliance</strong></p><p>Monthly installments, embedded payment optimization and advanced KYC and AML processes, including real-time validation.</p></div></div></div></div></div><div class="container text-start pb-4"><div class="row justify-content-center"><div class="col justify-content-center d-flex"><a href="optin.php" class="btn"><strong>Let’s talk</strong></a></div></div></div></section></body>',
            'css' => '* { box-sizing: border-box; } body {margin: 0;}#i4t7{background-image:url(\\\'/static/img/bg-payins.jpg\\\');}',
                'metatitle' => 'Payins',
                'slug' => NULL,
                'metadescription' => 'PAYINSPT Master local payment collection in emerging marketsBoost payment conversion rate and reach by offering your users a payment experience they choose daily.Start now
Deliver a local payment experience and leverage the best features to boots conversion ratesLocal Credit/Debit cardsLocal transfersLocal alternative payment methodsDigital Wallets

Reach more than 95% consumers in emerging markets, by accepting the payment methods in which they rely on every dayIncrease approval ratesPrevent chargebacksConnect directly to local payment railsDeliver a faster and low cost experience to your end usersLet’s talkHow it worksStep 1A multi-currency account within FacilitaPay is created for the merchantStep 2End user instructs a payout directly on merchant&#039;s page/appStep 3FacilitaPay API acts in the back-end of the merchant&#039;s banking systemStep 4FacilitaPay receives the payout instructionStep 5FacilitaPay convert the funds between internal accountsStep 6They payout is processed by FacilitaPay payment networkSee how FacilitaPay payment solutions for emerging markets can help your businessSaaSImprove the payments section of your user’s journey and make recurring and subscription billing more efficientShared economy &amp; marketplacesExperience frictionless low cost and high value volume payments and mass payouts to run a smooth operation in emerging marketsOnline retailSell in the way your customers want to buy with all your payment methods and currencies in one platformDigital dashboardsControl all your online transactions in real time.High cyber security levelUtilizes high-end transaction monitoring software integrated to our API, upholding financial operation security at all times.Strong complianceMonthly installments, embedded payment optimization and advanced KYC and AML processes, including real-time validation.Let’s talk',
                'created_at' => '2023-05-29 20:14:49',
                'updated_at' => '2023-05-30 18:10:07',
            ),
            5 => 
            array (
                'id' => 29,
                'pages_id' => 11,
                'locale' => 'es',
                'title' => 'Payins',
                'html' => '<section class="hero-2" id="issg"><div class="container d-flex flex-column gap-3 pb-5 pt-5"><div class="row justify-content-center"><div class="col-12 col-lg-5 d-flex flex-column gap-2"><div class="d-flex flex-column gap-1"><h6 class="txt-light-green">PAYINS
</h6><h3 class="txt-white"><strong id="igpj">Master <strong class="txt-light-green">local payment collection</strong> in emerging markets</strong></h3></div><p class="txt-white">Aumenta la tasa de conversión y el alcance de tu empresa al ofrecer a tus usuarios una experiencia de pago familiar y conveniente.
</p><a href="optin.php" class="btn me-auto"><strong id="ii5op">Comienza ahora</strong></a></div><div class="col-12 col-lg-5">
</div></div></div></section><section class="content-1 bg-white"><div class="container text-start pb-4 pt-4"><div class="row row-gap-2 flex-column-reverse flex-md-row align-items-center justify-content-center"><div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-2"><h4><strong id="igqik">Ofrece una <span id="i3055-2" draggable="false" class="txt-light-green gjs-selected">experiencia de pago local </span> y utiliza las mejores funciones para aumentar tus tasas de conversión</strong><strong class="txt-light-green"></strong></h4><ul class="d-flex flex-column gap-1"><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span id="itcij">Tarjetas de crédito y débito locales</span></li><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span id="i4obr">Transferencias bancarias locales</span></li><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span id="icss6">Métodos de pago alternativos locales</span></li><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span id="i97o2">Billeteras digitales</span></li></ul></div><div class="col-12 col-md-1">
</div><div class="col-7 col-md-5 col-lg-4"><img src="/static/img/payins-1.png" class="img-fluid"/></div></div></div></section><section class="content-1 bg-white"><div class="container text-start pb-4"><div class="row row-gap-2 align-items-center justify-content-center"><div class="col-7 col-md-5 col-lg-4"><img src="/static/img/payins-2.png" class="img-fluid"/></div><div class="col-12 col-md-1">
</div><div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-2"><h4><strong id="i6emu">Llegar a más del  <strong class="txt-light-green">95% de los consumidores en los principales mercados de LatAm </strong>al aceptar los métodos de pago más populares</strong></h4><ul class="d-flex flex-column gap-1"><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span id="i9cih">Aumenta las tasas de aprobación</span></li><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span id="ipm1t">Evita devoluciones</span></li><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span id="iy6sy">Conéctate directamente a nuestros rieles de pago locales</span></li><li class="d-flex align-items-center gap-1"><img src="/static/img/ico-check-2.svg" class="h-1"/><span id="imssf">Ofrece una experiencia más rápida y económica para tus usuarios finales</span></li></ul></div></div></div><div class="container text-start pb-4"><div class="row justify-content-center"><div class="col justify-content-center d-flex"><a href="optin.php" class="btn"><strong id="iqzsq">Hablemos</strong></a></div></div></div></section><section class="content-1 bg-white"><div class="container pb-4 pt-4"><div class="row text-center"><div class="col-12"><h2><strong id="iznv1">Cómo funciona</strong></h2></div></div></div></section><div class="h-2 bg-white">
</div><section class="steps bg-white"><div class="container"><div class="row"><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-13.svg"/></div><h6 id="imtcwd">paso 1
</h6><h5 id="iff8v3">Creamos una cuenta multi-divisa en FacilitaPay para tu empresa
</h5></div></div><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-14.svg"/></div><h6 id="ibeu06">paso 2
</h6><h5 id="ipa79f">El usuario realiza el pago directamente en tu página o aplicación
</h5></div></div><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-15.svg"/></div><h6 id="ik72hg">paso 3
</h6><h5 id="ihdj8x">La API de FacilitaPay actúa en el back-end de tu página de pago o aplicación
</h5></div></div></div></div></section><section class="steps bg-white"><div class="container"><div class="row"><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-16.svg"/></div><h6 id="ijg694">paso 4
</h6><h5 id="idi0w3">FacilitaPay recibe la instrucción del pago 
</h5></div></div><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-17.svg"/></div><h6 id="i2qqhh">paso 5
</h6><h5 id="iupc0a">FacilitaPay convierte los fondos entre nuestras cuentas internas
</h5></div></div><div class="col-12 col-md-4"><div class="d-flex flex-column gap-1"><div><img src="/static/img/icos/ico-18.svg"/></div><h6 id="i592hw">paso 6
</h6><h5 id="i5bnvj">El pago es procesado por nuestra red de partners financieros
</h5></div></div></div></div></section><section class="content-1 bg-light-gray"><div class="container d-flex flex-column gap-3 pb-4 pt-4"><div class="row d-flex justify-content-center text-center"><div class="col-12 col-lg-8"><h2 id="i3t1y1"><strong id="ik62jb">Conoce cómo las  <strong class="txt-light-green">soluciones de pago de FacilitaPay </strong> para mercados emergentes pueden ayudar a tu negocio </strong></h2></div></div><div class="row row-gap-4 text-start align-items-center"><div class="col-12 col-lg-4 d-flex flex-column gap-1"><div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img src="/static/img/icos/ico-1.svg" class="w-2"/><div class="d-flex flex-column gap-1"><p class="txt-blue"><strong>SaaS</strong></p><p id="i05p8x">Incrementa la oferta de pagos en la jornada de usuario y haz que los cobros recurrentes y por suscripciones sean más eficientes
</p></div></div><div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img src="/static/img/icos/ico-2.svg" class="w-2"/><div class="d-flex flex-column gap-1"><p class="txt-blue"><strong id="ic267j">Economías colaborativas</strong></p><p id="ird8yd">Realiza pagos de bajo costo, en altos volúmenes o pagos de forma masiva, sin fricción, para operar sin problemas en mercados emergentes.
</p></div></div><div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img src="/static/img/icos/ico-3.svg" class="w-2"/><div class="d-flex flex-column gap-1"><p class="txt-blue"><strong id="i1hxoh">E-commerce</strong></p><p id="ipuou5">Adapta tu operación de pagos a la forma en que tus clientes realizan compras, ofreciendo todos los principales métodos de pago y divisas en una única plataforma. 
</p></div></div></div><div class="col-12 col-lg-4 d-flex flex-column align-items-center"><img src="/static/img/computador.png" class="img-fluid w-50"/></div><div class="col-12 col-lg-4 d-flex flex-column gap-1"><div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img src="/static/img/icos/ico-4.svg" class="w-2"/><div class="d-flex flex-column gap-1"><p class="txt-blue"><strong id="i11j46">Dashboard intuitivo</strong></p><p id="iggkam">Controla y administra todas tus transacciones en línea y en tiempo real.
</p></div></div><div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img src="/static/img/icos/ico-5.svg" class="w-2"/><div class="d-flex flex-column gap-1"><p class="txt-blue"><strong id="i0asf5">Ciberseguridad de alto nivel</strong></p><p id="i525ow">Accede a un software de última generación para el monitoreo de tus transacciones, integrado a nuestra API para mantener la seguridad en todas tus operaciones financieras.
</p></div></div><div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img src="/static/img/icos/ico-6.svg" class="w-2"/><div class="d-flex flex-column gap-1"><p class="txt-blue"><strong id="igrzfw">Compliance robusto</strong></p><p id="i5cdzc">Optimización de tus pagos con los más altos estándares de KYC y AML, validación en tiempo real de tus usuarios y sus transacciones.
</p></div></div></div></div></div><div class="container text-start pb-4"><div class="row justify-content-center"><div class="col justify-content-center d-flex"><a href="optin.php" class="btn"><strong id="iu3x4k">Hablemos</strong></a></div></div></div></section>',
            'css' => '* { box-sizing: border-box; } body {margin: 0;}*{box-sizing:border-box;}body{margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}*{box-sizing:border-box;}body{margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#issg{background-image:url(/static/img/bg-payins.jpg);}',
                'metatitle' => 'Payins',
                'slug' => NULL,
                'metadescription' => 'PAYINS
Master local payment collection in emerging marketsAumenta la tasa de conversión y el alcance de tu empresa al ofrecer a tus usuarios una experiencia de pago familiar y conveniente.
Comienza ahora
Ofrece una experiencia de pago local  y utiliza las mejores funciones para aumentar tus tasas de conversiónTarjetas de crédito y débito localesTransferencias bancarias localesMétodos de pago alternativos localesBilleteras digitales

Llegar a más del  95% de los consumidores en los principales mercados de LatAm al aceptar los métodos de pago más popularesAumenta las tasas de aprobaciónEvita devolucionesConéctate directamente a nuestros rieles de pago localesOfrece una experiencia más rápida y económica para tus usuarios finalesHablemosCómo funciona
paso 1
Creamos una cuenta multi-divisa en FacilitaPay para tu empresa
paso 2
El usuario realiza el pago directamente en tu página o aplicación
paso 3
La API de FacilitaPay actúa en el back-end de tu página de pago o aplicación
paso 4
FacilitaPay recibe la instrucción del pago 
paso 5
FacilitaPay convierte los fondos entre nuestras cuentas internas
paso 6
El pago es procesado por nuestra red de partners financieros
Conoce cómo las  soluciones de pago de FacilitaPay  para mercados emergentes pueden ayudar a tu negocio SaaSIncrementa la oferta de pagos en la jornada de usuario y haz que los cobros recurrentes y por suscripciones sean más eficientes
Economías colaborativasRealiza pagos de bajo costo, en altos volúmenes o pagos de forma masiva, sin fricción, para operar sin problemas en mercados emergentes.
E-commerceAdapta tu operación de pagos a la forma en que tus clientes realizan compras, ofreciendo todos los principales métodos de pago y divisas en una única plataforma. 
Dashboard intuitivoControla y administra todas tus transacciones en línea y en tiempo real.
Ciberseguridad de alto nivelAccede a un software de última generación para el monitoreo de tus transacciones, integrado a nuestra API para mantener la seguridad en todas tus operaciones financieras.
Compliance robustoOptimización de tus pagos con los más altos estándares de KYC y AML, validación en tiempo real de tus usuarios y sus transacciones.
Hablemos',
                'created_at' => '2023-05-29 20:14:49',
                'updated_at' => '2023-06-01 17:34:14',
            ),
            6 => 
            array (
                'id' => 30,
                'pages_id' => 12,
                'locale' => 'en',
                'title' => 'Payouts',
            'html' => ' <section class="hero-2" style="background-image: url(\'/static/img/bg-payouts.jpg\');">
<div class="container d-flex flex-column gap-3 pb-5 pt-5">
<div class="row justify-content-center">
<div class="col-12 col-lg-5 d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1">
<h6 class="txt-light-green">PAYOUTS</h6>
<h3 class="txt-white"><strong>Send <strong class="txt-light-green">mass payouts</strong> easily to LATAM</strong></h3>
</div>
<p class="txt-white">Pay your local sellers and partners depositing local currency directly to their local bank accounts.</p>
<a href="optin.php" class="btn me-auto"><strong>Start now</strong></a>
</div>
<div class="col-12 col-lg-5">
</div>
</div>
</div>
</section>



<section class="content-1 bg-white">
<div class="container pb-4 pt-4">
<div class="row row-gap-2 flex-column-reverse flex-sm-row align-items-center justify-content-center">
<div class="col-12 col-md-6 d-flex flex-column gap-2">
<h4><strong>Distinguish your global transactions with a <strong class="txt-light-green">localized payment experience</strong></strong></h4>
<p>Improve your cross-border recipient experience by getting them paid the way they expect to be paid, and with the fastest time-to-account in emerging markets.</p>
</div>
<div class="col-12 col-md-1">
</div>
<div class="col-7 col-md-4 col-lg-4">
<img src="/static/img/payouts-1.png" class="img-fluid">
</div>
</div>
</div>
</section>



<section class="content-1 bg-white">
<div class="container pb-4 pt-2">
<div class="row row-gap-2 align-items-center justify-content-center">
<div class="col-12 col-md-6 col-lg-4 table-2 sub">
<table cellpadding="0" cellspacing="0" class="w-100">
<tr>
<th>Feature</th>
<th class="text-center">Other Solutions</th>
<th class="text-center">FacilitaPay</th>
</tr>
<tr>
<td><strong class="txt-blue">Instant payout notification</strong></td>
<td class="text-center">automatic</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img src="/static/img/ico-check.svg" class="w-1"> instant</strong></td>
</tr>
<tr>
<td><strong class="txt-blue">Check Payout  notification</strong></td>
<td class="text-center">automatic</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img src="/static/img/ico-check.svg" class="w-1"> instant</strong></td>
</tr>
<tr>
<td><strong class="txt-blue">Quick payout cancellation</strong></td>
<td class="text-center">manual</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img src="/static/img/ico-check.svg" class="w-1"> few hours</strong></td>
</tr>
<tr>
<td><strong class="txt-blue">Check currency exchange</strong></td>
<td class="text-center">automatic</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img src="/static/img/ico-check.svg" class="w-1"> instant</strong></td>
</tr>
<tr>
<td><strong class="txt-blue">Flexible funding currency</strong></td>
<td class="text-center">automatic</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img src="/static/img/ico-check.svg" class="w-1"> instant</strong></td>
</tr>
<tr>
<td><strong class="txt-blue">Granular and visual reporting</strong></td>
<td class="text-center">automatic</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img src="/static/img/ico-check.svg" class="w-1"> instant</strong></td>
</tr>
<tr>
<td><strong class="txt-blue">Workflows automation</strong></td>
<td class="text-center">automatic</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img src="/static/img/ico-check.svg" class="w-1"> instant</strong></td>
</tr>
</table>
</div>
<div class="col-12 col-md-1">
</div>
<div class="col-12 col-md-5 col-lg-4 d-flex flex-column gap-2">
<h4><strong><strong class="txt-light-green">Scale your Payouts</strong> operations effortlessly</strong></h4>
<p>Use a single integration to automate hours of manual dedication from your team, while reducing human error risk. Avoid dealing with multiple payout providers.</p>
</div>
</div>
</div>
</section>



<section class="content-1 bg-white">
<div class="container pt-2">
<div class="row row-gap-2 flex-column-reverse flex-sm-row align-items-center justify-content-center">
<div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-2">
<h4><strong><strong class="txt-light-green">Eliminate risks</strong>  and operational burdens in emerging markets</strong></h4>
<p>Paying out your partners and sellers worldwide can be arduous due to diverse compliance requirements, unpredictable regulatory changes, and volatile currency fluctuations. FacilitaPay manages all these risks with its team of local experts.</p>
</div>
<div class="col-12 col-md-1">
</div>
<div class="col-7 col-md-5 col-lg-4">
<img src="/static/img/payouts-2.png" class="img-fluid">
</div>
</div>
</div>
</section>



<section class="content-1 bg-white">
<div class="container pb-4 pt-4">
<div class="row text-center">
<div class="col-12">
<h2><strong>How it works</strong></h2>
</div>
</div>
</div>
</section>



<div class="h-2 bg-white"></div>



<section class="steps bg-white">
<div class="container">
<div class="row">
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-13.svg"></div>
<h6>Step 1</h6>
<h5>A local bank account within FacilitaPay is created for the merchant</h5>
</div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-14.svg"></div>
<h6>Step 2</h6>
<h5>End user accesses merchants checkout page / app</h5>
</div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-15.svg"></div>
<h6>Step 3</h6>
<h5>FacilitaPay API acts in the back end of the checkout page</h5>
</div>
</div>
</div>
</div>
</section>




<section class="steps bg-white">
<div class="container">
<div class="row">
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-16.svg"></div>
<h6>Step 4</h6>
<h5>FacilitaPay receives and identifies the deposits made in the local account</h5>
</div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-17.svg"></div>
<h6>Step 5</h6>
<h5>FacilitaPay converts the funds to the currency of the merchant choosing</h5>
</div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-18.svg"></div>
<h6>Step 6</h6>
<h5>The merchant chooses when the money is wired to the their international bank account</h5>
</div>
</div>
</div>
</div>
</section>



<section class="content-1 bg-light-gray">
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row d-flex justify-content-center text-center">
<div class="col-12 col-lg-8">
<h2><strong>See how FacilitaPay <strong class="txt-light-green">payment solutions</strong> for emerging markets can help your business</strong></h2>
</div>
</div>
<div class="row row-gap-4 text-start align-items-center">
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-white border-radius gap-2 p-2">
<img src="/static/img/icos/ico-1.svg" class="w-2">
<div class="d-flex flex-column gap-1">
<p class="txt-blue"><strong>SaaS</strong></p>
<p>Improve the payments section of your user’s journey and make recurring and subscription billing more efficient</p>
</div>
</div>
<div class="align-items-start d-flex bg-white border-radius gap-2 p-2">
<img src="/static/img/icos/ico-2.svg" class="w-2">
<div class="d-flex flex-column gap-1">
<p class="txt-blue"><strong>Shared economy & marketplaces</strong></p>
<p>Experience frictionless low cost and high value volume payments and mass payouts to run a smooth operation in emerging markets</p>
</div>
</div>
<div class="align-items-start d-flex bg-white border-radius gap-2 p-2">
<img src="/static/img/icos/ico-3.svg" class="w-2">
<div class="d-flex flex-column gap-1">
<p class="txt-blue"><strong>Online retail</strong></p>
<p>Sell in the way your customers want to buy with all your payment methods and currencies in one platform</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4 d-flex flex-column align-items-center">
<img src="/static/img/computador.png" class="img-fluid w-50">
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-white border-radius gap-2 p-2">
<img src="/static/img/icos/ico-4.svg" class="w-2">
<div class="d-flex flex-column gap-1">
<p class="txt-blue"><strong>Digital dashboards</strong></p>
<p>Control all your online transactions in real time.</p>
</div>
</div>
<div class="align-items-start d-flex bg-white border-radius gap-2 p-2">
<img src="/static/img/icos/ico-5.svg" class="w-2">
<div class="d-flex flex-column gap-1">
<p class="txt-blue"><strong>High cyber security level</strong></p>
<p>Utilizes high-end transaction monitoring software integrated to our API, upholding financial operation security at all times.</p>
</div>
</div>
<div class="align-items-start d-flex bg-white border-radius gap-2 p-2">
<img src="/static/img/icos/ico-6.svg" class="w-2">
<div class="d-flex flex-column gap-1">
<p class="txt-blue"><strong>Strong compliance</strong></p>
<p>Monthly installments, embedded payment optimization and advanced KYC and AML processes, including real-time validation.</p>
</div>
</div>
</div>
</div>
</div>

<div class="container text-start pb-4">
<div class="row justify-content-center">
<div class="col justify-content-center d-flex">
<a href="optin.php" class="btn"><strong>Let’s talk</strong></a>
</div>
</div>
</div>

</section>
',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Payouts',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-29 20:38:05',
                'updated_at' => '2023-05-29 20:38:05',
            ),
            7 => 
            array (
                'id' => 31,
                'pages_id' => 12,
                'locale' => 'pt',
                'title' => 'Payouts',
            'html' => '<section class="hero-2" style="background-image: url(\\\'static/img/bg-payouts.jpg\\\');">
<div class="container d-flex flex-column gap-3 pb-5 pt-5">
<div class="row justify-content-center">
<div class="col-12 col-lg-5 d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1">
<h6 class="txt-light-green">PAYOUTS</h6>
<h3 class="txt-white"><strong>Send <strong class="txt-light-green">mass payouts</strong> easily to LATAM</strong></h3>
</div>
<p class="txt-white">Pay your local sellers and partners depositing local currency directly to their local bank accounts.</p>
<a href="optin.php" class="btn me-auto"><strong>Start now</strong></a>
</div>
<div class="col-12 col-lg-5">
</div>
</div>
</div>
</section>



<section class="content-1 bg-white">
<div class="container pb-4 pt-4">
<div class="row row-gap-2 flex-column-reverse flex-sm-row align-items-center justify-content-center">
<div class="col-12 col-md-6 d-flex flex-column gap-2">
<h4><strong>Distinguish your global transactions with a <strong class="txt-light-green">localized payment experience</strong></strong></h4>
<p>Improve your cross-border recipient experience by getting them paid the way they expect to be paid, and with the fastest time-to-account in emerging markets.</p>
</div>
<div class="col-12 col-md-1">
</div>
<div class="col-7 col-md-4 col-lg-4">
<img src="static/img/payouts-1.png" class="img-fluid">
</div>
</div>
</div>
</section>



<section class="content-1 bg-white">
<div class="container pb-4 pt-2">
<div class="row row-gap-2 align-items-center justify-content-center">
<div class="col-12 col-md-6 col-lg-4 table-2 sub">
<table cellpadding="0" cellspacing="0" class="w-100">
<tr>
<th>Feature</th>
<th class="text-center">Other Solutions</th>
<th class="text-center">FacilitaPay</th>
</tr>
<tr>
<td><strong class="txt-blue">Instant payout notification</strong></td>
<td class="text-center">automatic</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img src="static/img/ico-check.svg" class="w-1"> instant</strong></td>
</tr>
<tr>
<td><strong class="txt-blue">Check Payout  notification</strong></td>
<td class="text-center">automatic</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img src="static/img/ico-check.svg" class="w-1"> instant</strong></td>
</tr>
<tr>
<td><strong class="txt-blue">Quick payout cancellation</strong></td>
<td class="text-center">manual</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img src="static/img/ico-check.svg" class="w-1"> few hours</strong></td>
</tr>
<tr>
<td><strong class="txt-blue">Check currency exchange</strong></td>
<td class="text-center">automatic</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img src="static/img/ico-check.svg" class="w-1"> instant</strong></td>
</tr>
<tr>
<td><strong class="txt-blue">Flexible funding currency</strong></td>
<td class="text-center">automatic</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img src="static/img/ico-check.svg" class="w-1"> instant</strong></td>
</tr>
<tr>
<td><strong class="txt-blue">Granular and visual reporting</strong></td>
<td class="text-center">automatic</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img src="static/img/ico-check.svg" class="w-1"> instant</strong></td>
</tr>
<tr>
<td><strong class="txt-blue">Workflows automation</strong></td>
<td class="text-center">automatic</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img src="static/img/ico-check.svg" class="w-1"> instant</strong></td>
</tr>
</table>
</div>
<div class="col-12 col-md-1">
</div>
<div class="col-12 col-md-5 col-lg-4 d-flex flex-column gap-2">
<h4><strong><strong class="txt-light-green">Scale your Payouts</strong> operations effortlessly</strong></h4>
<p>Use a single integration to automate hours of manual dedication from your team, while reducing human error risk. Avoid dealing with multiple payout providers.</p>
</div>
</div>
</div>
</section>



<section class="content-1 bg-white">
<div class="container pt-2">
<div class="row row-gap-2 flex-column-reverse flex-sm-row align-items-center justify-content-center">
<div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-2">
<h4><strong><strong class="txt-light-green">Eliminate risks</strong>  and operational burdens in emerging markets</strong></h4>
<p>Paying out your partners and sellers worldwide can be arduous due to diverse compliance requirements, unpredictable regulatory changes, and volatile currency fluctuations. FacilitaPay manages all these risks with its team of local experts.</p>
</div>
<div class="col-12 col-md-1">
</div>
<div class="col-7 col-md-5 col-lg-4">
<img src="static/img/payouts-2.png" class="img-fluid">
</div>
</div>
</div>
</section>



<section class="content-1 bg-white">
<div class="container pb-4 pt-4">
<div class="row text-center">
<div class="col-12">
<h2><strong>How it works</strong></h2>
</div>
</div>
</div>
</section>



<div class="h-2 bg-white"></div>



<section class="steps bg-white">
<div class="container">
<div class="row">
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="static/img/icos/ico-13.svg"></div>
<h6>Step 1</h6>
<h5>A local bank account within FacilitaPay is created for the merchant</h5>
</div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="static/img/icos/ico-14.svg"></div>
<h6>Step 2</h6>
<h5>End user accesses merchants checkout page / app</h5>
</div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="static/img/icos/ico-15.svg"></div>
<h6>Step 3</h6>
<h5>FacilitaPay API acts in the back end of the checkout page</h5>
</div>
</div>
</div>
</div>
</section>




<section class="steps bg-white">
<div class="container">
<div class="row">
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="static/img/icos/ico-16.svg"></div>
<h6>Step 4</h6>
<h5>FacilitaPay receives and identifies the deposits made in the local account</h5>
</div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="static/img/icos/ico-17.svg"></div>
<h6>Step 5</h6>
<h5>FacilitaPay converts the funds to the currency of the merchant choosing</h5>
</div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="static/img/icos/ico-18.svg"></div>
<h6>Step 6</h6>
<h5>The merchant chooses when the money is wired to the their international bank account</h5>
</div>
</div>
</div>
</div>
</section>



<section class="content-1 bg-light-gray">
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row d-flex justify-content-center text-center">
<div class="col-12 col-lg-8">
<h2><strong>See how FacilitaPay <strong class="txt-light-green">payment solutions</strong> for emerging markets can help your business</strong></h2>
</div>
</div>
<div class="row row-gap-4 text-start align-items-center">
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-white border-radius gap-2 p-2">
<img src="static/img/icos/ico-1.svg" class="w-2">
<div class="d-flex flex-column gap-1">
<p class="txt-blue"><strong>SaaS</strong></p>
<p>Improve the payments section of your user’s journey and make recurring and subscription billing more efficient</p>
</div>
</div>
<div class="align-items-start d-flex bg-white border-radius gap-2 p-2">
<img src="static/img/icos/ico-2.svg" class="w-2">
<div class="d-flex flex-column gap-1">
<p class="txt-blue"><strong>Shared economy & marketplaces</strong></p>
<p>Experience frictionless low cost and high value volume payments and mass payouts to run a smooth operation in emerging markets</p>
</div>
</div>
<div class="align-items-start d-flex bg-white border-radius gap-2 p-2">
<img src="static/img/icos/ico-3.svg" class="w-2">
<div class="d-flex flex-column gap-1">
<p class="txt-blue"><strong>Online retail</strong></p>
<p>Sell in the way your customers want to buy with all your payment methods and currencies in one platform</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4 d-flex flex-column align-items-center">
<img src="static/img/computador.png" class="img-fluid w-50">
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-white border-radius gap-2 p-2">
<img src="static/img/icos/ico-4.svg" class="w-2">
<div class="d-flex flex-column gap-1">
<p class="txt-blue"><strong>Digital dashboards</strong></p>
<p>Control all your online transactions in real time.</p>
</div>
</div>
<div class="align-items-start d-flex bg-white border-radius gap-2 p-2">
<img src="static/img/icos/ico-5.svg" class="w-2">
<div class="d-flex flex-column gap-1">
<p class="txt-blue"><strong>High cyber security level</strong></p>
<p>Utilizes high-end transaction monitoring software integrated to our API, upholding financial operation security at all times.</p>
</div>
</div>
<div class="align-items-start d-flex bg-white border-radius gap-2 p-2">
<img src="static/img/icos/ico-6.svg" class="w-2">
<div class="d-flex flex-column gap-1">
<p class="txt-blue"><strong>Strong compliance</strong></p>
<p>Monthly installments, embedded payment optimization and advanced KYC and AML processes, including real-time validation.</p>
</div>
</div>
</div>
</div>
</div>

<div class="container text-start pb-4">
<div class="row justify-content-center">
<div class="col justify-content-center d-flex">
<a href="optin.php" class="btn"><strong>Let’s talk</strong></a>
</div>
</div>
</div>

</section>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Payouts',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-29 20:38:05',
                'updated_at' => '2023-05-29 20:38:05',
            ),
            8 => 
            array (
                'id' => 32,
                'pages_id' => 12,
                'locale' => 'es',
                'title' => 'Payouts',
                'html' => '<body class="home">
<section class="hero-2" style="background-image: url(\'/static/img/bg-payouts.jpg\');">
<div class="container d-flex flex-column gap-3 pb-5 pt-5">
<div class="row justify-content-center">
<div class="col-12 col-lg-5 d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1"><h6 class="txt-light-green">PAYOUTS</h6>
<h3 class="txt-white"><strong id="i76k">Envia <strong class="txt-light-green">pagos fácilmente y de
forma masiva </strong> a tus usuarios en los principales mercados de
Latinoamerica</strong></h3></div>
<p class="txt-white">Paga a tus usuarios, contractors o freelancers locales depositando fondos en sus
cuentas bancarias locales y en sus respectivas divisas locales.</p><a href="optin.php"
class="btn me-auto"><strong
id="izj57">Comienza ahora</strong></a></div>
<div class="col-12 col-lg-5">
</div>
</div>
</div>
</section>
<section class="content-1 bg-white">
<div class="container pb-4 pt-4">
<div class="row row-gap-2 flex-column-reverse flex-sm-row align-items-center justify-content-center">
<div class="col-12 col-md-6 d-flex flex-column gap-2"><h4 id="i8fno"><strong id="i53l4">Diferencia tus
transacciones globales con una <strong class="txt-light-green">experiencia de pagos
locales</strong></strong></h4>
<p id="icgri">Mejora la experiencia de tus usuarios en Latinoamérica al poder aceptar sus pagos de forma
local, y acreditarlos de forma rápida, permitiendo que puedas operar de forma eficiente y simple en
mercados emergentes.</p></div>
<div class="col-12 col-md-1">
</div>
<div class="col-7 col-md-4 col-lg-4"><img src="/static/img/payouts-1.png" class="img-fluid"/></div>
</div>
</div>
</section>
<section class="content-1 bg-white">
<div class="container pb-4 pt-2">
<div class="row row-gap-2 align-items-center justify-content-center">
<div class="col-12 col-md-6 col-lg-4 table-2 sub">
<table cellpadding="0" cellspacing="0" class="w-100">
<tbody>
<tr>
<th>Características</th>
<th class="text-center">Otras soluciones</th>
<th class="text-center">FacilitaPay</th>
</tr>
<tr>
<td><strong class="txt-blue">instantáneo payout notification</strong></td>
<td class="text-center">automático</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img
src="/static/img/ico-check.svg" class="w-1"/> instantáneo</strong></td>
</tr>
<tr>
<td><strong class="txt-blue">Check Payout notification</strong></td>
<td class="text-center">automático</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img
src="/static/img/ico-check.svg" class="w-1"/> instantáneo</strong></td>
</tr>
<tr>
<td><strong class="txt-blue">Quick payout cancellation</strong></td>
<td class="text-center">manual</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img
src="/static/img/ico-check.svg" class="w-1"/> pocas horas</strong></td>
</tr>
<tr>
<td><strong class="txt-blue">Check currency exchange</strong></td>
<td class="text-center">automático</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img
src="/static/img/ico-check.svg" class="w-1"/> instantáneo</strong></td>
</tr>
<tr>
<td><strong class="txt-blue">Flexible funding currency</strong></td>
<td class="text-center">automático</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img
src="/static/img/ico-check.svg" class="w-1"/> instantáneo</strong></td>
</tr>
<tr>
<td><strong class="txt-blue">Granular and visual reporting</strong></td>
<td class="text-center">automático</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img
src="/static/img/ico-check.svg" class="w-1"/> instantáneo</strong></td>
</tr>
<tr>
<td><strong class="txt-blue">Workflows automation</strong></td>
<td class="text-center">automático</td>
<td><strong class="d-flex justify-content-center txt-light-green gap-1"><img
src="/static/img/ico-check.svg" class="w-1"/> instantáneo</strong></td>
</tr>
</tbody>
</table>
</div>
<div class="col-12 col-md-1">
</div>
<div class="col-12 col-md-5 col-lg-4 d-flex flex-column gap-2"><h4><strong id="iy9fhl"><strong
class="txt-light-green">Escala tus operaciones de pago</strong> sin preocupaciones</strong>
</h4>
<p id="ilyzci">Una única integración para disminuir las labores manuales y automatizar las tareas de tus
equipos, reduciendo la posibilidad de errores operativos. Evita tener que recurrir a diferentes
proveedores, centralizando tu operación con FacilitaPay.</p></div>
</div>
</div>
</section>
<section class="content-1 bg-white">
<div class="container pt-2">
<div class="row row-gap-2 flex-column-reverse flex-sm-row align-items-center justify-content-center">
<div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-2"><h4><strong id="irdp5b"><strong
class="txt-light-green">Elimina riesgos </strong> y cargas operativas en mercados emergentes</strong>
</h4>
<p id="iis9cv">Pagar a tus usuarios y partners en Latinoamérica puede ser extenuante debido a los
diferentes requisitos de compliance, posibles cambios regulatorios y las fluctuaciones en las
divisas locales. FacilitaPay gestiona esto para tu empresa a través de nuestro equipo de expertos
locales.</p></div>
<div class="col-12 col-md-1">
</div>
<div class="col-7 col-md-5 col-lg-4"><img src="/static/img/payouts-2.png" class="img-fluid"/></div>
</div>
</div>
</section>
<section class="content-1 bg-white">
<div class="container pb-4 pt-4">
<div class="row text-center">
<div class="col-12"><h2><strong id="i5un6d">Cómo funciona</strong></h2></div>
</div>
</div>
</section>
<div class="h-2 bg-white"></div>
<section class="steps bg-white">
<div class="container">
<div class="row">
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-13.svg"/></div>
<h6 id="itcbhp">etapa 1</h6><h5 id="ic0giu">Creamos una cuenta bancaria local en FacilitaPay para tu
empresa</h5></div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-14.svg"/></div>
<h6 id="ibk9ll">etapa 2</h6><h5 id="i29uy4">El usuario realiza el pago directamente en tu página o
aplicación</h5></div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-15.svg"/></div>
<h6 id="ijeyiq">etapa 3</h6><h5 id="iaqo77">La API de FacilitaPay actúa en el back-end de tu página
de pago o aplicación</h5></div>
</div>
</div>
</div>
</section>
<section class="steps bg-white">
<div class="container">
<div class="row">
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-16.svg"/></div>
<h6 id="ixugl2">etapa 4</h6><h5 id="inw6wg">FacilitaPay recibe e identifica el pago realizado en la
cuenta bancaria local</h5></div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-17.svg"/></div>
<h6 id="ii0j4q">etapa 5</h6><h5 id="iaacwz">FacilitaPay convierte los fondos a la divisa extranjera
elegida por tu empresa</h5></div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><img src="/static/img/icos/ico-18.svg"/></div>
<h6 id="ih11sy">etapa 6</h6><h5 id="iito14">El comerciante elige cuándo transferir los fondos a su
cuenta bancaria internacional</h5></div>
</div>
</div>
</div>
</section>
<section class="content-1 bg-light-gray">
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row d-flex justify-content-center text-center">
<div class="col-12 col-lg-8"><h2><strong id="i1o76c">Conoce cómo las <span id="i1o76c-2" draggable="false"
class="gjs-selected"><span
class="txt-light-green">soluciones de pago</span></span> de FacilitaPay para
Latinoamérica pueden ayudar a tu negocio</strong></h2></div>
</div>
<div class="row row-gap-4 text-start align-items-center">
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img
src="/static/img/icos/ico-1.svg" class="w-2"/>
<div class="d-flex flex-column gap-1"><p class="txt-blue"><strong>SaaS</strong></p>
<p id="ibpr8g">Incrementa la oferta de pagos en la jornada de usuario y haz que los cobros
recurrentes y por suscripciones sean más eficientes</p></div>
</div>
<div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img
src="/static/img/icos/ico-2.svg" class="w-2"/>
<div class="d-flex flex-column gap-1"><p class="txt-blue"><strong id="i8trxq">Economías
colaborativas</strong></p>
<p id="i2wm71">Realiza pagos de bajo costo, en altos volúmenes o pagos de forma masiva, sin
fricción, para operar sin problemas en mercados emergentes.</p></div>
</div>
<div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img
src="/static/img/icos/ico-3.svg" class="w-2"/>
<div class="d-flex flex-column gap-1"><p class="txt-blue"><strong id="i8vwnj">E-commerce</strong>
</p>
<p id="ig6bwg">Adapta tu operación de pagos a la forma en que tus clientes realizan compras,
ofreciendo todos los principales métodos de pago y divisas en una única plataforma. </p>
</div>
</div>
</div>
<div class="col-12 col-lg-4 d-flex flex-column align-items-center"><img src="/static/img/computador.png"
class="img-fluid w-50"/></div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img
src="/static/img/icos/ico-4.svg" class="w-2"/>
<div class="d-flex flex-column gap-1"><p class="txt-blue"><strong id="io1qd2">Dashboard
intuitivo</strong></p>
<p id="ih7w57">Controla y administra todas tus transacciones en línea y en tiempo real.</p>
</div>
</div>
<div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img
src="/static/img/icos/ico-5.svg" class="w-2"/>
<div class="d-flex flex-column gap-1"><p class="txt-blue"><strong id="ik3x8j">Ciberseguridad de alto
nivel</strong></p>
<p id="is2vzf">Accede a un software de última generación para el monitoreo de tus transacciones,
integrado a nuestra API para mantener la seguridad en todas tus operaciones financieras.</p>
</div>
</div>
<div class="align-items-start d-flex bg-white border-radius gap-2 p-2"><img
src="/static/img/icos/ico-6.svg" class="w-2"/>
<div class="d-flex flex-column gap-1"><p class="txt-blue"><strong id="iphyok">Compliance
robusto</strong></p>
<p id="iz7x1r">Optimización de tus pagos con los más altos estándares de KYC y AML, validación
en tiempo real de tus usuarios y sus transacciones.</p></div>
</div>
</div>
</div>
</div>
<div class="container text-start pb-4">
<div class="row justify-content-center">
<div class="col justify-content-center d-flex"><a href="optin.php" class="btn"><strong
id="i713or">Hablemos</strong></a></div>
</div>
</div>
</section>
</body>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}#i1o76c-2{font-weight:bolder;}',
                'metatitle' => 'Payouts',
                'slug' => NULL,
                'metadescription' => 'PAYOUTSEnvia  pagos fácilmente y de forma masiva   a tus usuarios en los principales mercados de LatinoamericaPaga a tus usuarios, contractors o freelancers locales depositando fondos en sus cuentas bancarias locales y en sus respectivas divisas locales.Comienza ahora
Diferencia tus transacciones globales con una experiencia de pagos localesMejora la experiencia de tus usuarios en Latinoamérica al poder aceptar sus pagos de forma local, y acreditarlos de forma rápida, permitiendo que puedas operar de forma eficiente y simple en mercados emergentes.
CaracterísticasOtras solucionesFacilitaPayinstantáneo payout notificationautomático instantáneoCheck Payout  notificationautomático instantáneoQuick payout cancellationmanual pocas horasCheck currency exchangeautomático instantáneoFlexible funding currencyautomático instantáneoGranular and visual reportingautomático instantáneoWorkflows automationautomático instantáneo
Escala tus operaciones de pago sin preocupacionesUna única integración para disminuir las labores manuales y automatizar las tareas de tus equipos, reduciendo la posibilidad de errores operativos. Evita tener que recurrir a diferentes proveedores, centralizando tu operación con FacilitaPay.Elimina riesgos   y cargas operativas en mercados emergentesPagar a tus usuarios y partners en Latinoamérica puede ser extenuante debido a los diferentes requisitos de compliance, posibles cambios regulatorios y las fluctuaciones en las divisas locales. FacilitaPay gestiona esto para tu empresa a través de nuestro equipo de expertos locales.
Cómo funcionaetapa 1Creamos una cuenta bancaria local en FacilitaPay para tu empresaetapa 2El usuario realiza el pago directamente en tu página o aplicaciónetapa 3La API de FacilitaPay actúa en el back-end de tu página de pago o aplicaciónetapa 4FacilitaPay recibe e identifica el pago realizado en la cuenta bancaria localetapa 5FacilitaPay convierte los fondos a la divisa extranjera elegida por tu empresaetapa 6El comerciante elige cuándo transferir los fondos a su cuenta bancaria internacionalConoce cómo las soluciones de pago de FacilitaPay para Latinoamérica pueden ayudar a tu negocioSaaSIncrementa la oferta de pagos en la jornada de usuario y haz que los cobros recurrentes y por suscripciones sean más eficientesEconomías colaborativasRealiza pagos de bajo costo, en altos volúmenes o pagos de forma masiva, sin fricción, para operar sin problemas en mercados emergentes.E-commerceAdapta tu operación de pagos a la forma en que tus clientes realizan compras, ofreciendo todos los principales métodos de pago y divisas en una única plataforma. Dashboard intuitivoControla y administra todas tus transacciones en línea y en tiempo real.Ciberseguridad de alto nivelAccede a un software de última generación para el monitoreo de tus transacciones, integrado a nuestra API para mantener la seguridad en todas tus operaciones financieras.Compliance robustoOptimización de tus pagos con los más altos estándares de KYC y AML, validación en tiempo real de tus usuarios y sus transacciones.Hablemos',
                'created_at' => '2023-05-29 20:38:05',
                'updated_at' => '2023-05-30 20:38:40',
            ),
            9 => 
            array (
                'id' => 36,
                'pages_id' => 14,
                'locale' => 'en',
                'title' => 'PIX Global',
                'html' => '<section class="hero-8">
<div class="container d-flex flex-column gap-3 pb-5 pt-5">
<div class="row row-gap-4 align-items-center justify-content-center">
<div class="col-12 col-lg-5 d-flex flex-column gap-2">
<div class="d-flex flex-column gap-2">
<div class="pe-6">
<img src="/static/img/logo-pix-global.svg" class="img-fluid">
</div>
<h3 class="txt-white"><strong>The revolutionary instant payment method for global companies. The Brazilian payment method accepted worldwide.</strong></h3>
</div>
<p class="txt-white">With PIX Global, you receive transactions immediately in your account, avoiding abusive fees and improving your customer experience.</p>
<a href="optin.php" class="btn me-auto"><strong>Get in touch</strong></a>
</div>
<div class="col-12 col-lg-5">
<img src="/static/img/pix-global-connect.svg" class="img-fluid">
</div>
</div>
</div>
</section>



<section class="content-1 bg-light-gray">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 align-items-center justify-content-center">
<div class="col-12 col-lg-4 d-flex flex-column gap-4">
<div class="d-flex justify-content-center justify-lg-content-start align-items-center gap-2">
<img src="/static/img/logo-pix.svg" class="h-3">
<h3><strong class="txt-light-green">+</strong></h3>
<img src="/static/img/logo-facilitapay.svg" class="h-3">
</div>
<div class="d-flex flex-column gap-1">
<h3><strong>Same PIX, now everywhere.</strong></h3>
<p>Now you can count on the traditionally known PIX. Agility, confidence, and the ease of paying and receiving with rates up to 80%* lower. Join FacilitaPay in payments revolution.</p>
<p class="sub">*Compared with credit/debit cards and other alternative payment methods.</p>
</div>
<div class="d-none d-lg-flex">
<img src="/static/img/squares-4.svg">
</div>
</div>
<div class="col-12 col-lg-6">
<div class="d-flex flex-column bg-white border-radius p-3">
<form action="sendmail-pix.php" method="POST" class="d-flex flex-column gap-2">
<fieldset class="d-flex flex-wrap">
<div class="form-group d-flex flex-column w-100">
<h4><strong>Discover more about our PIX Global.</strong></h4>
</div>
<div class="form-group d-flex flex-column w-100">
<input name="firstName" type="text" class="form-control" id="firstName" placeholder=" " required>
<label for="firstName">Name <span>*</span></label>
</div>
<div class="form-group d-flex flex-column w-100">
<input name="email" type="text" class="form-control" id="email" placeholder=" " required>
<label for="email">Email <span>*</span></label>
</div>
<div class="form-group d-flex flex-column w-100">
<input name="companyName" type="text" class="form-control" id="companyName" placeholder=" " required>
<label for="companyName">Company name <span>*</span></label>
</div>
<div class="form-group d-flex flex-column w-100">
<input name="companyWebsite" type="text" class="form-control" id="companyWebsite" placeholder=" " required>
<label for="companyWebsite">Company website</label>
</div>
<div class="form-group d-flex flex-column w-100">
<button type="submit" class="btn"><strong>Start now</strong></button>
</div>
<div class="form-group d-flex flex-column w-100">
<p>FacilitaPay needs the contact information you provide to us to contact you about our products and services. You may unsubscribe from these communications at any time. For information on how to unsubscribe, as well as our privacy practices and commitment to protecting your privacy, please review our Code of conduct.</p>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</section>



<section class="content-1 bg-blue">
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row d-flex justify-content-center text-center">
<div class="col-12 col-lg-8">
<h2 class="txt-white"><strong>Why you should open an account for receiving PIX transactions:</strong></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-8">
<div class="row d-flex row-gap-2">
<div class="col-12 col-md-6 d-flex flex-column gap-1">
<div class="d-flex bg-white align-items-start border-radius gap-2 p-2">
<img src="/static/img/icos/ico-1.svg" class="w-2">
<p class="txt-blue text-start"><strong>Travelers will have less costs paying through PIX</strong></p>
</div>
</div>
<div class="col-12 col-md-6 d-flex flex-column gap-1">
<div class="d-flex bg-white align-items-start border-radius gap-2 p-2">
<img src="/static/img/icos/ico-2.svg" class="w-2">
<p class="txt-blue text-start"><strong>Less transactional costs for sellers</strong></p>
</div>
</div>
<div class="col-12 col-md-6 d-flex flex-column gap-1">
<div class="d-flex bg-white align-items-start border-radius gap-2 p-2">
<img src="/static/img/icos/ico-3.svg" class="w-2">
<p class="txt-blue text-start"><strong>No monthly fees to setup an account</strong></p>
</div>
</div>
<div class="col-12 col-md-6 d-flex flex-column gap-1">
<div class="d-flex bg-white align-items-start border-radius gap-2 p-2">
<img src="/static/img/icos/ico-4.svg" class="w-2">
<p class="txt-blue text-start"><strong>No FX risks for sellers and buyers</strong></p>
</div>
</div>
<div class="col-12 d-flex flex-column gap-1">
<div class="d-flex bg-white align-items-start border-radius gap-2 p-2">
<img src="/static/img/icos/ico-5.svg" class="w-2">
<p class="txt-blue text-start"><strong>You can access more than 60 million users connected to our payment network of local payment methods, alternative payment methods and local credit and debit cards.</strong></p>
</div>
</div>
</div>
</div>
</div>
<div class="row d-flex justify-content-center text-center">
<div class="col-12 col-lg-8">
<a href="optin.php" class="btn d-inline-flex"><strong>Learn more</strong></a>
</div>
</div>
</div>
</section>



<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-3 pt-4">
<div class="row d-flex row-gap-3 align-items-center justify-content-center">
<div class="col-12 col-md-4">
<div class="pe-0 pe-lg-4">
<img src="/static/img/pixglobal-phone.png" class="img-fluid">
</div>
</div>
<div class="col-12 col-md-8 col-lg-5 d-flex flex-column gap-2">
<h5>Introduce the Brazilian payment method PIX in shopping centers, stores, services, where there is a large flow of Brazilians.</h5>
<h2><strong>What is PIX?</strong></h2>
<p>PIX is an innovative payment solution specifically designed for the Brazilian market. The instant payment system created by the Central Bank of Brazil (BCB), is changing the market by performing transfers and payments, in a few seconds, at any time of the day - including weekends and holidays - in a safe and practical way.</p>
<ul class="d-flex flex-column text-start gap-1">
<li class="d-flex align-items-start gap-1">
<img src="/static/img/ico-check.svg" class="w-1">
<p class="txt-blue">Payment confirmation and value compensation in <strong>real-time.</strong></p>
</li>
<li class="d-flex align-items-start gap-1">
<img src="/static/img/ico-check.svg" class="w-1">
<p class="txt-blue">Transactions 24/7 - including on the <strong>weekends and holidays.</strong></p>
</li>
<li class="d-flex align-items-start gap-1">
<img src="/static/img/ico-check.svg" class="w-1">
<p class="txt-blue"><strong>In a safe way</strong> - Transactions carried out directly by the Central Bank of Brazil.</p>
</li>
<li class="d-flex align-items-start gap-1">
<img src="/static/img/ico-check.svg" class="w-1">
<p class="txt-blue">Attract more brazilians - Many paople travel with exact money and need to send international remittances to perform the BRL/USD conversion, which can take some time. <br><br>With PIX, you can get paid instantly.</p>
</li>
<li class="d-flex align-items-start gap-1">
<img src="/static/img/ico-check.svg" class="w-1">
<p class="txt-blue">Cost reduction up to 80% cheaper fees compared using conventional credit cards.</p>
</li>
</ul>
<a href="optin.php" class="btn d-inline-flex m-auto"><strong>Start Now</strong></a>
</div>
</div>
</div>
</section>



<div class="h-4 bg-white"></div>



<section class="content-1 bg-blue">
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row d-flex row-gap-3 align-items-center justify-content-center">
<div class="col-12 col-md-4">
<h4 class="txt-light-green pe-0 pe-lg-5"><strong>Huge opportunity for you.<br>A fast and digital experience for your customers.</strong></h4>
</div>
<div class="col-12 col-md-4 text-start">
<div class="d-flex align-items-start gap-2 ps-2 pe-2">
<img src="/static/img/icos/ico-7.svg" class="w-4">
<div class="d-flex flex-column gap-1">
<p class="txt-white"><strong>Your customers enjoy more</strong></p>
<p class="sub txt-white">Speed up the time it takes to sell to your customers and avoid unnecessary fees.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4 text-start">
<div class="d-flex align-items-start gap-2 ps-2 pe-2">
<img src="/static/img/icos/ico-8.svg" class="w-4">
<div class="d-flex flex-column gap-1">
<p class="txt-white"><strong>Availability</strong></p>
<p class="sub txt-white">Operations can be carried out 24 hours a day, including on weekends and holidays.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4 text-start">
<div class="d-flex align-items-start gap-2 ps-2 pe-2">
<img src="/static/img/icos/ico-9.svg" class="w-4">
<div class="d-flex flex-column gap-1">
<p class="txt-white"><strong>Withdrawal</strong></p>
<p class="sub txt-white">You can withdraw payments receveid within 01 business day and from the amount of USD 100* per withdrawal.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4 text-start">
<div class="d-flex align-items-start gap-2 ps-2 pe-2">
<img src="/static/img/icos/ico-10.svg" class="w-4">
<div class="d-flex flex-column gap-1">
<p class="txt-white"><strong>Convenience</strong></p>
<p class="sub txt-white">The user experience is intuitive for the end-user since it is connected to the financial app that the user is already<br> used to.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4 text-start">
<div class="d-flex align-items-start gap-2 ps-2 pe-2">
<img src="/static/img/icos/ico-11.svg" class="w-4">
<div class="d-flex flex-column gap-1">
<p class="txt-white"><strong>Real-time KPI\'s</strong></p>
<p class="sub txt-white">Control all transactions performed within our proprietary platform, view statements, see sales evolution by payment method, and make settlements whenever you want.</p>
</div>
</div>
</div>
</div>
</div>
</section>



<section class="content-10 bg-white">
<div class="img" style="background-image: url(\'/static/img/qrcode-scan.jpg\');"></div>
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row d-flex align-items-center justify-content-center">
<div class="col-12 col-lg-6 d-flex flex-column gap-2">
<h2 class="txt-blue"><strong>An easy, intuitive, fast and already known by Brazilians as the best payment method.</strong></h2>
<p class="txt-blue">With PIX, Brazilian consumers are able to make transactions on any day of the year, 24 hours a day, via QR Code, and receive instant confirmation once the user completes the payment. Easy like that. <br><br>Payments occur via a dynamic QR Code, and information such as telephone number, email or CPF, can be used as authorization payment keys.</p>
<a href="optin.php" class="btn d-inline-flex m-auto"><strong>Start Now</strong></a>
</div>
<div class="col-12 col-lg-6">
</div>
</div>
</div>
</section>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'PIX Global',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-29 20:46:28',
                'updated_at' => '2023-05-29 20:46:28',
            ),
            10 => 
            array (
                'id' => 37,
                'pages_id' => 14,
                'locale' => 'pt',
                'title' => 'PIX Global',
                'html' => '<section class="hero-8">
<div class="container d-flex flex-column gap-3 pb-5 pt-5">
<div class="row row-gap-4 align-items-center justify-content-center">
<div class="col-12 col-lg-5 d-flex flex-column gap-2">
<div class="d-flex flex-column gap-2">
<div class="pe-6">
<img src="/static/img/logo-pix-global.svg" class="img-fluid">
</div>
<h3 class="txt-white"><strong>The revolutionary instant payment method for global companies. The Brazilian payment method accepted worldwide.</strong></h3>
</div>
<p class="txt-white">With PIX Global, you receive transactions immediately in your account, avoiding abusive fees and improving your customer experience.</p>
<a href="optin.php" class="btn me-auto"><strong>Get in touch</strong></a>
</div>
<div class="col-12 col-lg-5">
<img src="/static/img/pix-global-connect.svg" class="img-fluid">
</div>
</div>
</div>
</section>



<section class="content-1 bg-light-gray">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 align-items-center justify-content-center">
<div class="col-12 col-lg-4 d-flex flex-column gap-4">
<div class="d-flex justify-content-center justify-lg-content-start align-items-center gap-2">
<img src="/static/img/logo-pix.svg" class="h-3">
<h3><strong class="txt-light-green">+</strong></h3>
<img src="/static/img/logo-facilitapay.svg" class="h-3">
</div>
<div class="d-flex flex-column gap-1">
<h3><strong>Same PIX, now everywhere.</strong></h3>
<p>Now you can count on the traditionally known PIX. Agility, confidence, and the ease of paying and receiving with rates up to 80%* lower. Join FacilitaPay in payments revolution.</p>
<p class="sub">*Compared with credit/debit cards and other alternative payment methods.</p>
</div>
<div class="d-none d-lg-flex">
<img src="/static/img/squares-4.svg">
</div>
</div>
<div class="col-12 col-lg-6">
<div class="d-flex flex-column bg-white border-radius p-3">
<form action="sendmail-pix.php" method="POST" class="d-flex flex-column gap-2">
<fieldset class="d-flex flex-wrap">
<div class="form-group d-flex flex-column w-100">
<h4><strong>Discover more about our PIX Global.</strong></h4>
</div>
<div class="form-group d-flex flex-column w-100">
<input name="firstName" type="text" class="form-control" id="firstName" placeholder=" " required>
<label for="firstName">Name <span>*</span></label>
</div>
<div class="form-group d-flex flex-column w-100">
<input name="email" type="text" class="form-control" id="email" placeholder=" " required>
<label for="email">Email <span>*</span></label>
</div>
<div class="form-group d-flex flex-column w-100">
<input name="companyName" type="text" class="form-control" id="companyName" placeholder=" " required>
<label for="companyName">Company name <span>*</span></label>
</div>
<div class="form-group d-flex flex-column w-100">
<input name="companyWebsite" type="text" class="form-control" id="companyWebsite" placeholder=" " required>
<label for="companyWebsite">Company website</label>
</div>
<div class="form-group d-flex flex-column w-100">
<button type="submit" class="btn"><strong>Start now</strong></button>
</div>
<div class="form-group d-flex flex-column w-100">
<p>FacilitaPay needs the contact information you provide to us to contact you about our products and services. You may unsubscribe from these communications at any time. For information on how to unsubscribe, as well as our privacy practices and commitment to protecting your privacy, please review our Code of conduct.</p>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</section>



<section class="content-1 bg-blue">
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row d-flex justify-content-center text-center">
<div class="col-12 col-lg-8">
<h2 class="txt-white"><strong>Why you should open an account for receiving PIX transactions:</strong></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-8">
<div class="row d-flex row-gap-2">
<div class="col-12 col-md-6 d-flex flex-column gap-1">
<div class="d-flex bg-white align-items-start border-radius gap-2 p-2">
<img src="/static/img/icos/ico-1.svg" class="w-2">
<p class="txt-blue text-start"><strong>Travelers will have less costs paying through PIX</strong></p>
</div>
</div>
<div class="col-12 col-md-6 d-flex flex-column gap-1">
<div class="d-flex bg-white align-items-start border-radius gap-2 p-2">
<img src="/static/img/icos/ico-2.svg" class="w-2">
<p class="txt-blue text-start"><strong>Less transactional costs for sellers</strong></p>
</div>
</div>
<div class="col-12 col-md-6 d-flex flex-column gap-1">
<div class="d-flex bg-white align-items-start border-radius gap-2 p-2">
<img src="/static/img/icos/ico-3.svg" class="w-2">
<p class="txt-blue text-start"><strong>No monthly fees to setup an account</strong></p>
</div>
</div>
<div class="col-12 col-md-6 d-flex flex-column gap-1">
<div class="d-flex bg-white align-items-start border-radius gap-2 p-2">
<img src="/static/img/icos/ico-4.svg" class="w-2">
<p class="txt-blue text-start"><strong>No FX risks for sellers and buyers</strong></p>
</div>
</div>
<div class="col-12 d-flex flex-column gap-1">
<div class="d-flex bg-white align-items-start border-radius gap-2 p-2">
<img src="/static/img/icos/ico-5.svg" class="w-2">
<p class="txt-blue text-start"><strong>You can access more than 60 million users connected to our payment network of local payment methods, alternative payment methods and local credit and debit cards.</strong></p>
</div>
</div>
</div>
</div>
</div>
<div class="row d-flex justify-content-center text-center">
<div class="col-12 col-lg-8">
<a href="optin.php" class="btn d-inline-flex"><strong>Learn more</strong></a>
</div>
</div>
</div>
</section>



<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-3 pt-4">
<div class="row d-flex row-gap-3 align-items-center justify-content-center">
<div class="col-12 col-md-4">
<div class="pe-0 pe-lg-4">
<img src="/static/img/pixglobal-phone.png" class="img-fluid">
</div>
</div>
<div class="col-12 col-md-8 col-lg-5 d-flex flex-column gap-2">
<h5>Introduce the Brazilian payment method PIX in shopping centers, stores, services, where there is a large flow of Brazilians.</h5>
<h2><strong>What is PIX?</strong></h2>
<p>PIX is an innovative payment solution specifically designed for the Brazilian market. The instant payment system created by the Central Bank of Brazil (BCB), is changing the market by performing transfers and payments, in a few seconds, at any time of the day - including weekends and holidays - in a safe and practical way.</p>
<ul class="d-flex flex-column text-start gap-1">
<li class="d-flex align-items-start gap-1">
<img src="/static/img/ico-check.svg" class="w-1">
<p class="txt-blue">Payment confirmation and value compensation in <strong>real-time.</strong></p>
</li>
<li class="d-flex align-items-start gap-1">
<img src="/static/img/ico-check.svg" class="w-1">
<p class="txt-blue">Transactions 24/7 - including on the <strong>weekends and holidays.</strong></p>
</li>
<li class="d-flex align-items-start gap-1">
<img src="/static/img/ico-check.svg" class="w-1">
<p class="txt-blue"><strong>In a safe way</strong> - Transactions carried out directly by the Central Bank of Brazil.</p>
</li>
<li class="d-flex align-items-start gap-1">
<img src="/static/img/ico-check.svg" class="w-1">
<p class="txt-blue">Attract more brazilians - Many paople travel with exact money and need to send international remittances to perform the BRL/USD conversion, which can take some time. <br><br>With PIX, you can get paid instantly.</p>
</li>
<li class="d-flex align-items-start gap-1">
<img src="/static/img/ico-check.svg" class="w-1">
<p class="txt-blue">Cost reduction up to 80% cheaper fees compared using conventional credit cards.</p>
</li>
</ul>
<a href="optin.php" class="btn d-inline-flex m-auto"><strong>Start Now</strong></a>
</div>
</div>
</div>
</section>



<div class="h-4 bg-white"></div>



<section class="content-1 bg-blue">
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row d-flex row-gap-3 align-items-center justify-content-center">
<div class="col-12 col-md-4">
<h4 class="txt-light-green pe-0 pe-lg-5"><strong>Huge opportunity for you.<br>A fast and digital experience for your customers.</strong></h4>
</div>
<div class="col-12 col-md-4 text-start">
<div class="d-flex align-items-start gap-2 ps-2 pe-2">
<img src="/static/img/icos/ico-7.svg" class="w-4">
<div class="d-flex flex-column gap-1">
<p class="txt-white"><strong>Your customers enjoy more</strong></p>
<p class="sub txt-white">Speed up the time it takes to sell to your customers and avoid unnecessary fees.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4 text-start">
<div class="d-flex align-items-start gap-2 ps-2 pe-2">
<img src="/static/img/icos/ico-8.svg" class="w-4">
<div class="d-flex flex-column gap-1">
<p class="txt-white"><strong>Availability</strong></p>
<p class="sub txt-white">Operations can be carried out 24 hours a day, including on weekends and holidays.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4 text-start">
<div class="d-flex align-items-start gap-2 ps-2 pe-2">
<img src="/static/img/icos/ico-9.svg" class="w-4">
<div class="d-flex flex-column gap-1">
<p class="txt-white"><strong>Withdrawal</strong></p>
<p class="sub txt-white">You can withdraw payments receveid within 01 business day and from the amount of USD 100* per withdrawal.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4 text-start">
<div class="d-flex align-items-start gap-2 ps-2 pe-2">
<img src="/static/img/icos/ico-10.svg" class="w-4">
<div class="d-flex flex-column gap-1">
<p class="txt-white"><strong>Convenience</strong></p>
<p class="sub txt-white">The user experience is intuitive for the end-user since it is connected to the financial app that the user is already<br> used to.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4 text-start">
<div class="d-flex align-items-start gap-2 ps-2 pe-2">
<img src="/static/img/icos/ico-11.svg" class="w-4">
<div class="d-flex flex-column gap-1">
<p class="txt-white"><strong>Real-time KPI\'s</strong></p>
<p class="sub txt-white">Control all transactions performed within our proprietary platform, view statements, see sales evolution by payment method, and make settlements whenever you want.</p>
</div>
</div>
</div>
</div>
</div>
</section>



<section class="content-10 bg-white">
<div class="img" style="background-image: url(\'/static/img/qrcode-scan.jpg\');"></div>
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row d-flex align-items-center justify-content-center">
<div class="col-12 col-lg-6 d-flex flex-column gap-2">
<h2 class="txt-blue"><strong>An easy, intuitive, fast and already known by Brazilians as the best payment method.</strong></h2>
<p class="txt-blue">With PIX, Brazilian consumers are able to make transactions on any day of the year, 24 hours a day, via QR Code, and receive instant confirmation once the user completes the payment. Easy like that. <br><br>Payments occur via a dynamic QR Code, and information such as telephone number, email or CPF, can be used as authorization payment keys.</p>
<a href="optin.php" class="btn d-inline-flex m-auto"><strong>Start Now</strong></a>
</div>
<div class="col-12 col-lg-6">
</div>
</div>
</div>
</section>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'PIX Global',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-29 20:46:28',
                'updated_at' => '2023-05-29 20:46:28',
            ),
            11 => 
            array (
                'id' => 38,
                'pages_id' => 14,
                'locale' => 'es',
                'title' => 'PIX Global',
                'html' => '<body class="home">
<section class="hero-8">
<div class="container d-flex flex-column gap-3 pb-5 pt-5">
<div class="row row-gap-4 align-items-center justify-content-center">
<div class="col-12 col-lg-5 d-flex flex-column gap-2">
<div class="d-flex flex-column gap-2">
<div class="pe-6"><img src="/static/img/logo-pix-global.svg" class="img-fluid"/></div>
<h3 class="txt-white"><strong id="imme">El revolucionario método de pago instantáneo, ahora
disponible para empresas globales. El método de pago brasileño que podrá ser aceptado en
todo el mundo.</strong></h3></div>
<p class="txt-white">Con PIX Global, recibes las transacciones inmediatamente en tu cuenta, evitando
tarifas abusivas y mejorando la experiencia de tus clientes.</p><a href="optin.php"
class="btn me-auto"><strong
id="i07uz">Ponte en contacto</strong></a></div>
<div class="col-12 col-lg-5"><img src="/static/img/pix-global-connect.svg" class="img-fluid"/></div>
</div>
</div>
</section>
<section class="content-1 bg-light-gray">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 align-items-center justify-content-center">
<div class="col-12 col-lg-4 d-flex flex-column gap-4">
<div class="d-flex justify-content-center justify-lg-content-start align-items-center gap-2"><img
src="/static/img/logo-pix.svg" class="h-3"/>
<h3><strong class="txt-light-green">+</strong></h3><img src="/static/img/logo-facilitapay.svg"
class="h-3"/></div>
<div class="d-flex flex-column gap-1"><h3><strong id="issqh">El popular método PIX, ahora en cualquier
lugar.</strong></h3>
<p id="i1q3j">Ahora puedes contar con PIX, el método de pago más utilizado en Brasil. Agilidad,
seguridad y facilidad para realizar y recibir pagos, con tasas hasta un 80%* más bajas. Únete a
FacilitaPay en la revolución de los pagos.</p>
<p class="sub">*En comparación con las tarjetas de crédito/débito locales e internacionales.</p>
</div>
<div class="d-none d-lg-flex"><img src="/static/img/squares-4.svg"/></div>
</div>
<div class="col-12 col-lg-6">
<div class="d-flex flex-column bg-white border-radius p-3">
<form action="sendmail-pix.php" method="POST" class="d-flex flex-column gap-2">
<fieldset class="d-flex flex-wrap">
<div class="form-group d-flex flex-column w-100"><h4><strong>Discover more about our PIX
Global.</strong></h4></div>
<div class="form-group d-flex flex-column w-100"><input name="firstName" type="text"
id="firstName" placeholder=" "
required
class="form-control"/><label
for="firstName" id="ik49b">Nombre <span>*</span></label></div>
<div class="form-group d-flex flex-column w-100"><input name="email" type="text" id="email"
placeholder=" " required
class="form-control"/><label
for="email" id="ipk2o">Email <span>*</span></label></div>
<div class="form-group d-flex flex-column w-100"><input name="companyName" type="text"
id="companyName" placeholder=" "
required
class="form-control"/><label
for="companyName" id="isoxi">Nombre de la empresa <span>*</span></label></div>
<div class="form-group d-flex flex-column w-100"><input name="companyWebsite" type="text"
id="companyWebsite" placeholder=" "
required
class="form-control"/><label
for="companyWebsite" id="iuqxl">Sitio web de la empresa</label></div>
<div class="form-group d-flex flex-column w-100">
<button type="submit" class="btn"><strong id="i5dgp">Comienza ahora</strong></button>
</div>
<div class="form-group d-flex flex-column w-100"><p id="i9are">FacilitaPay needs the contact
information you provide to us to contact you about our products and services. You
may unsubscribe from these communications at any time. For information on how to
unsubscribe, as well as our privacy practices and commitment to protecting your
privacy, please review our Code of conduct.</p></div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
</section>
<section class="content-1 bg-blue">
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row d-flex justify-content-center text-center">
<div class="col-12 col-lg-8"><h2 class="txt-white"><strong id="iumcb">Why you should open an account for
receiving PIX transactions:</strong></h2></div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-8">
<div class="row d-flex row-gap-2">
<div class="col-12 col-md-6 d-flex flex-column gap-1">
<div class="d-flex bg-white align-items-start border-radius gap-2 p-2"><img
src="/static/img/icos/ico-1.svg" class="w-2"/>
<p class="txt-blue text-start"><strong id="iiean"></strong></p>
<p id="id4j83" class="MsoNormal"><strong id="iiean-2"><span id="ivigk-2" draggable="false"
class="gjs-selected">El costo para los turistas será menor pagando a través de PIX</span><br/></strong>
</p>
<p></p></div>
</div>
<div class="col-12 col-md-6 d-flex flex-column gap-1">
<div class="d-flex bg-white align-items-start border-radius gap-2 p-2"><img
src="/static/img/icos/ico-2.svg" class="w-2"/>
<p class="txt-blue text-start"><strong id="ivigk">Costos transaccionales más bajos para los
comercios</strong></p></div>
</div>
<div class="col-12 col-md-6 d-flex flex-column gap-1">
<div class="d-flex bg-white align-items-start border-radius gap-2 p-2"><img
src="/static/img/icos/ico-3.svg" class="w-2"/>
<p class="txt-blue text-start"><strong id="ioo8wv">Sin cargos mensuales para abrir una
cuenta</strong></p></div>
</div>
<div class="col-12 col-md-6 d-flex flex-column gap-1">
<div class="d-flex bg-white align-items-start border-radius gap-2 p-2"><img
src="/static/img/icos/ico-4.svg" class="w-2"/>
<p class="txt-blue text-start"><strong id="i759xt">Sin riesgos cambiarios para los comercios
y sus clientes</strong></p></div>
</div>
<div class="col-12 d-flex flex-column gap-1">
<div class="d-flex bg-white align-items-start border-radius gap-2 p-2"><img
src="/static/img/icos/ico-5.svg" class="w-2"/>
<p class="txt-blue text-start"><strong id="iku46g">Capacidad de acceder los más de 136
millones de usuarios conectados a la red de PIX, 63% de la población en
Brasil.</strong></p></div>
</div>
</div>
</div>
</div>
<div class="row d-flex justify-content-center text-center">
<div class="col-12 col-lg-8"><a href="optin.php" class="btn d-inline-flex"><strong id="in6g6h">Aprende
más</strong></a></div>
</div>
</div>
</section>
<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-3 pt-4">
<div class="row d-flex row-gap-3 align-items-center justify-content-center">
<div class="col-12 col-md-4">
<div class="pe-0 pe-lg-4"><img src="/static/img/pixglobal-phone.png" class="img-fluid"/></div>
</div>
<div class="col-12 col-md-8 col-lg-5 d-flex flex-column gap-2"><h5 id="i0hmjk">Agrega el metodo de pago
brasileño PIX en centros comerciales, tiendas, y agencias de servicios, donde hay una gran afluencia
de brasileños.</h5>
<h2><strong id="ijcxf3">¿Qué es PIX?</strong></h2>
<p id="iycbu8">PIX es una innovadora solución de pago diseñada específicamente para el mercado
brasileño. El sistema de pago instantáneo creado por el Banco Central de Brasil (BCB), está
dominando el mercado al permitir realizar transferencias y pagos, en cuestión de segundos, y en
cualquier momento del día, incluidos fines de semana y festivos, de manera segura y práctica.</p>
<ul class="d-flex flex-column text-start gap-1">
<li class="d-flex align-items-start gap-1"><img src="/static/img/ico-check.svg" class="w-1"/>
<p class="txt-blue">Confirmación del pago y acreditación de los fondos en <b>tiempo
real</b>.<br/></p></li>
<li class="d-flex align-items-start gap-1"><img src="/static/img/ico-check.svg" class="w-1"/>
<p class="txt-blue">Transacciones las 24 horas del día,<b> los 7 días de la semana</b><br/></p>
</li>
<li class="d-flex align-items-start gap-1"><img src="/static/img/ico-check.svg" class="w-1"/>
<p class="txt-blue"><b>Opera de forma segura</b>, las transacciones son realizadas directamente
por el Banco Central de Brasil.</p></li>
<li class="d-flex align-items-start gap-1"><img src="/static/img/ico-check.svg" class="w-1"/>
<p class="txt-blue">Atrae a más brasileños - Muchos turistas viajan con un presupuesto limitado
en moneda extranjera y necesitan poder utilizar fondos sus fondos en Brasil, sin tener que
realizar una remesa. <b>Con PIX puedes recibir pagos al instante. </b></p></li>
<li class="d-flex align-items-start gap-1"><img src="/static/img/ico-check.svg" class="w-1"/>
<p class="txt-blue">Reduce tus costos en hasta un 80%, en comparación con las tarifas cobradas
al transaccionar con tarjetas de crédito.</p></li>
</ul>
<a href="optin.php" class="btn d-inline-flex m-auto"><strong>Start Now</strong></a></div>
</div>
</div>
</section>
<div class="h-4 bg-white"></div>
<section class="content-1 bg-blue">
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row d-flex row-gap-3 align-items-center justify-content-center">
<div class="col-12 col-md-4"><h4 class="txt-light-green pe-0 pe-lg-5"><strong id="i73at7">Una gran
oportunidad para tu empresa. Una experiencia rápida y digital para tus clientes.</strong></h4>
</div>
<div class="col-12 col-md-4 text-start">
<div class="d-flex align-items-start gap-2 ps-2 pe-2"><img src="/static/img/icos/ico-7.svg"
class="w-4"/>
<div class="d-flex flex-column gap-1"><p class="txt-white"><strong id="ih3tr2">Mayor beneficio para
tus clientes </strong></p>
<p class="sub txt-white">Reduce el tiempo que le lleva a tus clientes realizar el pago y evita
tarifas innecesarias.</p></div>
</div>
</div>
<div class="col-12 col-md-4 text-start">
<div class="d-flex align-items-start gap-2 ps-2 pe-2"><img src="/static/img/icos/ico-8.svg"
class="w-4"/>
<div class="d-flex flex-column gap-1"><p class="txt-white"><strong
id="ic3kf6">Disponibilidad</strong></p>
<p class="sub txt-white">Las operaciones se pueden llevar a cabo las 24 horas del día, los 7
días de la semana, incluidos los fines de semana y días festivos.</p></div>
</div>
</div>
<div class="col-12 col-md-4 text-start">
<div class="d-flex align-items-start gap-2 ps-2 pe-2"><img src="/static/img/icos/ico-9.svg"
class="w-4"/>
<div class="d-flex flex-column gap-1"><p class="txt-white"><strong id="i611ep">Retiro de los
fondos</strong></p>
<p class="sub txt-white">Puedes retirar los pagos recibidos desde el primer día hábil,
solicitando la transferencia por valores desde 100 USD por retiro.</p></div>
</div>
</div>
<div class="col-12 col-md-4 text-start">
<div class="d-flex align-items-start gap-2 ps-2 pe-2"><img src="/static/img/icos/ico-10.svg"
class="w-4"/>
<div class="d-flex flex-column gap-1"><p class="txt-white"><strong id="i3ycuk">Conveniencia</strong>
</p>
<p class="sub txt-white">La experiencia del usuario es intuitiva y familiar, pues todo el
proceso de pago sucede dentro de la aplicación de banco que el usuario ya utiliza.</p></div>
</div>
</div>
<div class="col-12 col-md-4 text-start">
<div class="d-flex align-items-start gap-2 ps-2 pe-2"><img src="/static/img/icos/ico-11.svg"
class="w-4"/>
<div class="d-flex flex-column gap-1"><p class="txt-white"><strong id="iuiysd">KPI&#039;s en tiempo
real</strong></p>
<p class="sub txt-white">Administra todas las transacciones realizadas en nuestra plataforma,
analiza estados de cuenta, la evolución de tus ventas, las transacciones por método de pago
y solicita los saques cuando lo desees. </p></div>
</div>
</div>
</div>
</div>
</section>
<section class="content-10 bg-white">
<div class="img" style="background-image: url(\'/static/img/qrcode-scan.jpg\');"></div>
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row d-flex align-items-center justify-content-center">
<div class="col-12 col-lg-6 d-flex flex-column gap-2"><h2 class="txt-blue"><strong id="ijb344">Una forma de
pagar fácil, intuitiva, rápida y muy familiar para los brasileños - siendo el método de pago más
utilizado en el país.<br/><br/></strong></h2>
<p class="txt-blue">Con PIX, los consumidores brasileños pueden realizar transacciones cualquier momento
y todos los días de la semana, pagan a través de un código QR, y reciben la confirmación de forma
instantánea tras completar el pago. Así de fácil.<br/><br/>Los pagos se realizan a través de un
código QR dinámico, e información como el número de teléfono, correo electrónico o el número
identificación se pueden utilizar como llaves de autorización para el pago.<br/></p><a
href="optin.php" class="btn d-inline-flex m-auto"><strong id="iruwnz">Comienza ahora</strong></a>
</div>
<div class="col-12 col-lg-6">
</div>
</div>
</div>
</section>
</body>
',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'PIX Global',
                'slug' => NULL,
            'metadescription' => 'El revolucionario método de pago instantáneo, ahora disponible para empresas globales. El método de pago brasileño que podrá ser aceptado en todo el mundo.Con PIX Global, recibes las transacciones inmediatamente en tu cuenta, evitando tarifas abusivas y mejorando la experiencia de tus clientes.Ponte en contacto+El popular método PIX, ahora en cualquier lugar.Ahora puedes contar con PIX, el método de pago más utilizado en Brasil. Agilidad, seguridad y facilidad para realizar y recibir pagos, con tasas hasta un 80%* más bajas. Únete a FacilitaPay en la revolución de los pagos.*En comparación con las tarjetas de crédito/débito locales e internacionales.Discover more about our PIX Global.Nombre *Email *Nombre de la empresa *Sitio web de la empresaComienza ahoraFacilitaPay needs the contact information you provide to us to contact you about our products and services. You may unsubscribe from these communications at any time. For information on how to unsubscribe, as well as our privacy practices and commitment to protecting your privacy, please review our Code of conduct.Why you should open an account for receiving PIX transactions:El costo para los turistas será menor pagando a través de PIXCostos transaccionales más bajos para los comerciosSin cargos mensuales para abrir una cuentaSin riesgos cambiarios para los comercios y sus clientesCapacidad de acceder los más de 136 millones de usuarios conectados a la red de PIX, 63% de la población en Brasil.Aprende másAgrega el metodo de pago brasileño PIX en centros comerciales, tiendas, y agencias de servicios, donde hay una gran afluencia de brasileños.¿Qué es PIX?PIX es una innovadora solución de pago diseñada específicamente para el mercado brasileño. El sistema de pago instantáneo creado por el Banco Central de Brasil (BCB), está dominando el mercado al permitir realizar transferencias y pagos, en cuestión de segundos, y en cualquier momento del día, incluidos fines de semana y festivos, de manera segura y práctica.Confirmación del pago y acreditación de los fondos en tiempo real.Transacciones las 24 horas del día, los 7 días de la semanaOpera de forma segura, las transacciones son realizadas directamente por el Banco Central de Brasil.Atrae a más brasileños - Muchos turistas viajan con un presupuesto limitado en moneda extranjera y necesitan poder utilizar fondos sus fondos en Brasil, sin tener que realizar una remesa. Con PIX puedes recibir pagos al instante. Reduce tus costos en hasta un 80%, en comparación con las tarifas cobradas al transaccionar con tarjetas de crédito.Start NowUna gran oportunidad para tu empresa. Una experiencia rápida y digital para tus clientes.Mayor beneficio para tus clientes Reduce el tiempo que le lleva a tus clientes realizar el pago y evita tarifas innecesarias.DisponibilidadLas operaciones se pueden llevar a cabo las 24 horas del día, los 7 días de la semana, incluidos los fines de semana y días festivos.Retiro de los fondosPuedes retirar los pagos recibidos desde el primer día hábil, solicitando la transferencia por valores desde 100 USD por retiro.ConvenienciaLa experiencia del usuario es intuitiva y familiar, pues todo el proceso de pago sucede dentro de la aplicación de banco que el usuario ya utiliza.KPI&#039;s en tiempo realAdministra todas las transacciones realizadas en nuestra plataforma, analiza estados de cuenta, la evolución de tus ventas, las transacciones por método de pago y solicita los saques cuando lo desees. Una forma de pagar fácil, intuitiva, rápida y muy familiar para los brasileños - siendo el método de pago más utilizado en el país.Con PIX, los consumidores brasileños pueden realizar transacciones cualquier momento y todos los días de la semana, pagan a través de un código QR, y reciben la confirmación de forma instantánea tras completar el pago. Así de fácil.Los pagos se realizan a través de un código QR dinámico, e información como el número de teléfono, correo electrónico o el número identificación se pueden utilizar como llaves de autorización para el pago.Comienza ahora',
                'created_at' => '2023-05-29 20:46:28',
                'updated_at' => '2023-05-31 13:59:15',
            ),
            12 => 
            array (
                'id' => 39,
                'pages_id' => 15,
                'locale' => 'en',
                'title' => 'Payment Methods',
                'html' => '<style>
.tab-content{
display: none;
}
</style>

<section class="hero-2" style="background-image: url(\'/static/img/bg-payment-methods.jpg\');">
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-5 d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1">
<h6 class="txt-light-green">PAYMENT METHODS</h6>
<h3 class="txt-white"><strong>Explore local payment methods.</strong></h3>
</div>
<p class="txt-white">Many Latin American countries have experienced significant economic growth during the last decade, leading to an expanding middle class and increased purchasing power. In this market, local payment methods and the localized approach play an essential role for those who want to prosper in the region.</p>
<a href="optin.php" class="btn me-auto"><strong>Get in touch</strong></a>
</div>
<div class="col-12 col-lg-5">
</div>
</div>
</div>
</section>



<section class="content-3 bg-white text-center">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row justify-content-center">
<div class="col-12">
<h2><strong>Why Latin America is a significant market?</strong></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12">
<p>Latin America represents a significant market for global companies to expand to due to its large and rapidly growing population, increasing internet connectivity, and growing consumer spending power. With a population of over 650 million people, a significant growth in internet connectivity with (over 70% of Latins) and a fast-growing middle class, Latin America presents a significant opportunity for companies looking to tap into the growing user spending power in the region. <br><br>With FacilitaPay as your local payments partner, your company will be able to navigate the region\'s unique challenges and opportunities, allowing you to integrate the most popular payment methods and currencies that users in the region need to access global goods and services - all through one single and seamless integration.</p>
</div>
</div>
</div>
<div class="img" style="background-image: url(\'/static/img/bg-content-2.jpg\');"></div>
</section>

<section class="content-5 bg-white">
<div class="container d-flex flex-column gap-3 pt-4">

<div class="row justify-content-center">
<div class="col-12 col-lg-4 text-center">
<h4><strong>Most popular payment methods by countries.</strong></h4>
</div>
</div>

<div class="row justify-content-center">
<div class="col-12 col-lg-8">
<div class="d-flex text-start bg-blue border-radius">
<div class="list d-flex w-25">
<div class="d-flex flex-column flex-grow-1 pb-1 ps-1 pt-1">
<a href="#!" class="tab active" rel="brazil">Brazil</a>
<a href="#!" class="tab" rel="colombia">Colombia</a>
<a href="#!" class="tab" rel="mexico">Mexico</a>
</div>
</div>
<div class="table-1 d-flex w-75">
<div class="container" id="tab-contents">

<div class="tab-content" rel="brazil">
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1 ignoreanimation">
<h4 class="ignoreanimation"><strong>PIX (Instant Payment)</strong></h4>
<p class="txt-gray ignoreanimation">The instant payment system created by the Central Bank of Brazil is changing the market by performing transfers and payments, in a few seconds, at any time of the day - including weekends and holidays - in a safe and practical way.</p>
<div class="d-flex flex-wrap gap-1">
<img class="ignoreanimation" src="/static/img/finance/pix-logo.svg" class="h-1">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4 class="ignoreanimation"><strong>Local Credit Cards</strong></h4>
<p class="txt-gray ignoreanimation">The usage of credit cards has been growing. Although, internationally-enabled credit cards make up only 24% of e-commerce transactions. Start to accept both international and domestic cards and increase your conversions.</p>
<div class="d-flex flex-wrap gap-1">
<img class="ignoreanimation" src="/static/img/finance/master.svg">
<img class="ignoreanimation" src="/static/img/finance/visa.svg">
<img class="ignoreanimation" src="/static/img/finance/amex.svg">
<img class="ignoreanimation" src="/static/img/finance/diners.svg">
<img class="ignoreanimation" src="/static/img/finance/elo.svg">
<img class="ignoreanimation" src="/static/img/finance/hipercard.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4 class="ignoreanimation"><strong>Local Debit Cards</strong></h4>
<p class="txt-gray ignoreanimation">A debit card is a common payment method in Brazil. Today, there are 116M active debit cards in the country, with 664B reais spent with this method in 2019. Accept debit cards to reach a new consumer base and optimize your revenue in Brazil.</p>
<div class="d-flex flex-wrap gap-1">
<img class="ignoreanimation" src="/static/img/finance/master.svg" >
<img class="ignoreanimation" src="/static/img/finance/visa.svg" >
<img class="ignoreanimation" src="/static/img/finance/elo.svg" >
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4 class="ignoreanimation"><strong>Installments</strong></h4>
<p class="txt-gray ignoreanimation">Brazilians have the habit of splitting the total amount of a purchase made with a credit card in up to 12 monthly payments. Allow your customers to make higher-value purchases and increase your average ticket size.</p>
<div class="d-flex flex-wrap gap-1">
<img class="ignoreanimation" src="/static/img/finance/installments.svg" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4 class="ignoreanimation"><strong>Boleto Bancário</strong></h4>
<p class="txt-gray ignoreanimation">Brazil has a cash-centric culture, and Boleto has been historically used by the Brazilian population to pay for monthly bills, taxes, and also e-commerce purchases. Reach the unbanked population and also those whose preference is Boleto out of habit.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/instant-boleto.svg" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4 class="ignoreanimation"><strong>Crypto</strong></h4>
<p class="txt-gray ignoreanimation">Brazil has the seventh largest crypto market in the world and is growing rapidly. With FacilitaPay, you can make settlement in crypto, on/off ramp solutions and receive your local payments in stablecoins.</p>
<div class="d-flex flex-wrap gap-1">
<img class="ignoreanimation" src="/static/img/finance/ethereum.png" class="h-1">
<img class="ignoreanimation" src="/static/img/finance/crypto-2.png" class="h-1">
<img class="ignoreanimation" src="/static/img/finance/bitcoin.png" class="h-1">
<img class="ignoreanimation" src="/static/img/finance/crypto-3.png" class="h-1">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4 class="ignoreanimation"><strong>Digital Wallets</strong></h4>
<p class="txt-gray ignoreanimation">The popularity of digital wallets is increasing in Brazil, mostly due to the benefits offered by them, such as convenience, security, and simplicity to pay. Be ahead of the market and start to offer digital wallets on your e-commerce store.</p>
<div class="d-flex flex-wrap gap-1">
<img class="ignoreanimation" src="/static/img/finance/logo-mercadopago.svg" >
<img class="ignoreanimation" src="/static/img/finance/logo-paypal.svg" >
<img class="ignoreanimation h-2" src="/static/img/finance/picpay.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4 class="ignoreanimation"><strong>Other Alternative Payments</strong></h4>
<p class="txt-gray ignoreanimation">Brazil has several ways to pay online beyond credit cards. Bank Transfer and Online Debit are two effective payment options. Allow consumers to use their usual bank account to make an instant payment without the risk of chargeback for you.</p>
<div class="d-flex flex-wrap gap-1">
<img class="ignoreanimation" src="/static/img/finance/bank-transfer-cropped--en.svg" >
<img class="ignoreanimation" src="/static/img/finance/online-debit--en.svg" class="h-1">
</div>
</div>
</div>
</div>

</div>

<div class="tab-content" rel="colombia">

<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Local Credit Cards</strong></h4>
<p class="txt-gray">This payment method is one of the primary options of Colombians when shopping online. All Colombian cards are enabled to make international purchases, yet, local banks and issuers impose some obstacles to international shopping. FacilitaPay card solution offers local acquiring what increases approval rates.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/master.svg">
<img src="/static/img/finance/visa.svg">
<img src="/static/img/finance/amex.svg">
<img src="/static/img/finance/diners.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Local Debit Cards</strong></h4>
<p class="txt-gray">Debit card usage in Colombia has been growing rapidly in recent years, with over 20 million cardholders in the country as of 2021. The number of POS terminals in Colombia has been increasing, with over 200,000 in use as of 2021. This has helped to boost debit card usage, as consumers can now make card payments at a growing number of merchants. FacilitaPay card solution offers local acquiring what increases approval rates.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/master.svg">
<img src="/static/img/finance/visa.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>PSE (Pagos Seguros en Línea)</strong></h4>
<p class="txt-gray">The preferred alternative payment solution in Colombia. Pagos Seguros en Línea allows your customers to make bank transfers directly from their bank accounts, without needing a credit card.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/pse-logo.png" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Baloto</strong></h4>
<p class="txt-gray">Baloto is Colombia’s main lottery operator in the country and also has a payment network, with more than 13.500 payment stations, it’s able to reach 96% of the cities. Clients can pay purchases offline or online. When choosing the offline option, they receive a payment voucher with a barcode and a serial number, which can be paid at one of the payment stations.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/baloto.png" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>SuRed</strong></h4>
<p class="txt-gray">Being one of the largest payments networks in Colombia, SuRed is partnered with more than 27.000 convenience stores from different brands and across 32 departments. Clients who choose this payment method receive a voucher that can be paid in cash at any of their points.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/sured.png" class="h-1">
</div>
</div>
</div>
</div>

<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Efecty</strong></h4>
<p class="txt-gray">With real-time confirmation and easy user experience, Efecty is one of the most popular cash payment vouchers in Colombia, payable in over 10,000 locations throughout the country. Increases your sales by reaching a vast part of Colombian customers that prefer to pay offline, with cash and allows you to reach the unbanked population.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/efecty.svg" class="h-2">
</div>
</div>
</div>
</div>

<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Installments</strong></h4>
<p class="txt-gray">Installment purchases are very popular in Colombia, over 70% of online credit card transactions are installment-based. The clients are allowed to pay their purchase in up to 36 months. The banks, who finance the operation charge interest rates, which are charged directly to the client depending on the agreement he has with his bank.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/installments-36x.svg" class="h-2">
</div>
</div>
</div>
</div>

</div>

<div class="tab-content" rel="mexico">

<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>OXXO</strong></h4>
<p class="txt-gray">OXXO is one of the most famous voucher payments in Mexico. People are used to going to convenience stores to pay bills, and also their vouchers for e-commerce purchases. Start to accept OXXO as a payment method and reach more consumers.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/oxxo-pay.svg" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>OXXO Pay</strong></h4>
<p class="txt-gray">The most known payment method in Mexico now with real-time confirmation.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/oxxo-pay.svg" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Local Credit and Debit Cards</strong></h4>
<p class="txt-gray">Access to financial services is still growing, and credit card penetration is on the rise in Mexico. Local acquiring can offer better approval rates in Mexico, and you can accept local debit cards.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/master.svg">
<img src="/static/img/finance/visa.svg">
<img src="/static/img/finance/amex.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Credit Card Installments</strong></h4>
<p class="txt-gray">With installments, consumers can split up purchases in 3, 6, 9, and 12 monthly payments depending on the price of the purchase. Offer installments to your Mexican customers and increase average ticket sizes.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/installments.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>SPEI</strong></h4>
<p class="txt-gray">Whenever a Mexican wants to make an interbank transfer, they need to use SPEI. The Mexican system for online banking transactions. Allow your customers to pay for their purchases with online bank transfers through SPEI.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/spei.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Crypto</strong></h4>
<p class="txt-gray">The crypto market is becoming increasingly important in Mexico due to the country\'s large population of unbanked individuals, high levels of remittance inflows, and growing interest in digital assets as a hedge against inflation and economic instability. With FacilitaPay, you can make settlement in crypto, on/off ramp solutions and receive your local payments in stablecoins.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/ethereum.png" class="h-1">
<img src="/static/img/finance/crypto-2.png" class="h-1">
<img src="/static/img/finance/bitcoin.png" class="h-1">
<img src="/static/img/finance/crypto-3.png" class="h-1">
</div>
</div>
</div>
</div>

<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Digital Wallets</strong></h4>
<p class="txt-gray">The popularity of digital wallets is increasing in México, mostly due to the benefits offered by them, such as convenience, security, and simplicity to pay. Be ahead of the market and start to offer digital wallets on your e-commerce store.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/logo-mercadopago.svg" >
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Other Alternative Payments</strong></h4>
<p class="txt-gray">Mexico has several payment methods besides credit cards. Voucher payments, Oxxo and digital wallets are very common methods used by online consumers.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/bank-transfer-cropped--en.svg" >
<img src="/static/img/finance/online-debit--en.svg" class="h-1">
</div>
</div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>
</div>

<div class="row justify-content-center">
<div class="col-11 col-lg-7">
<div class="d-flex flex-column gap-2 text-center justify-content-center">
<!--                          <h2><strong>Start offering all local payment methods in LatAm yo your customers</h2>-->
<a href="optin.php" class="btn"><strong>Get started</strong></a>
</div>
</div>
</div>
</section>


<section class="content-4 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-4 d-flex flex-column gap-3">
<div class="d-flex flex-column gap-1">
<h6 class="txt-light-green">CREDIT CARDS</h6>
<h2><strong>Domestic Credit and Debit Cards</strong></h2>
</div>
<div class="img bg-blue d-flex flex-grow-1 w-100">
<div style="background-image: url(\'/static/img/couple-buy-online.jpg\');"></div>
</div>
</div>
<div class="col-12 col-lg-5">
<p class="ps-3 txt-blue">In the Latin America market, domestic credit and debit cards have become increasingly popular as a means of payment. They are convenient, secure and widely accepted by merchants across the region. These cards are issued by local banks, and they are tailored to the needs of consumers in each country. Domestic cards also offer benefits such as lower fees and interest rates, as well as rewards programs that are specifically designed for the local market. <br><br>The availability of domestic credit and debit cards has enabled more purchasing power for the population in each country. With access to credit, consumers can buy products and services that were previously out of reach. This, in turn, drives economic growth as consumers spend more money, and businesses expand their operations to meet the growing demand. Additionally, debit cards have become an essential tool for those who don\'t have access to traditional banking services, providing them with a safe and convenient way to manage their money. Overall, the popularity of domestic credit and debit cards in LatAm has opened up new opportunities for individuals and businesses, and has helped to drive the region\'s economic growth. <br><br>With FacilitaPay as a local partner, merchants can accept both international and domestic cards, increasing the addressable market and the approval rates.</p>
</div>
</div>
</div>
</section>

<section class="content-1">
<div class="container pt-4">
<div class="row text-center">
<h2><strong>How does the credit card work?</strong></h2>
</div>
</div>
</section>



<div class="h-4 bg-white"></div>



<section class="steps-2">
<div class="container">
<div class="row">
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><strong>1</strong></div>
<h5>The customer selects Credit Cards as the payment method.</h5>
</div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><strong>2</strong></div>
<h5>The customer fills in the Credit Card Information.</h5>
</div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><strong>3</strong></div>
<h5>Payment confirmation is sent in real-time to your customer.</h5>
</div>
</div>
</div>
</div>
</section>



<section class="content-8">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-10" style="background-image: url(\'/static/img/img.jpg\');">
<div class="container  d-flex flex-column row-gap-3 gap-2 p-4">
<div class="row justify-content-center">
<div class="col-12 d-flex flex-column gap-1 text-center justify-content-center">
<h6 class="txt-white">Let\'s Go</h6>
<h2 class="txt-white"><strong>Benefits of accepting credit cards</strong></h2>
</div>
</div>
<div class="row d-flex row-gap-3">
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<h4 class="txt-light-green"><strong>Increase Approval Rates</strong></h4>
<p class="txt-white">With local acquiring, your business has better approval rates.</p>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<h4 class="txt-light-green"><strong>Less Chargeback risk</strong></h4>
<p class="txt-white">Rely on Facilitapay Shield, an advanced anti-fraud strategy, with no extra cost.</p>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<h4 class="txt-light-green"><strong>Retry Logic</strong></h4>
<p class="txt-white">Advanced machine learning technology increases approval rates by minimizing failed payments.</p>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<h4 class="txt-light-green"><strong>Simplify purchases</strong></h4>
<p class="txt-white">Support recurring payments, via card tokenization, and pre-authorization.</p>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<h4 class="txt-light-green"><strong>Billing Descriptor</strong></h4>
<p class="txt-white">Start offering all local payment methods in LatAm to your customers.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="content-6 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row d-flex justify-content-center text-center">
<div class="col-12 col-lg-6">
<h2><strong>Increase your average ticket with installments</strong></h2>
</div>
</div>
<div class="row d-flex row-gap-3 justify-content-center">
<div class="col-12 col-lg-4">
<div class="d-flex flex-column gap-2 pb-4 pe-3 pt-4">
<p class="txt-blue">Offering installment plans can be a game-changer for businesses looking to expand into Latin America. In many cases, consumers in the region prefer to use installment plans to help manage their budgets and make big-ticket purchases more affordable. This is especially true given that credit card limits in Latin America are typically very low, meaning that consumers may not be able to pay for large purchases all at once without exceeding their limits.</p>
<p class="txt-blue"><strong>By offering installment plans, businesses can make their products and services more accessible to consumers in Latin America, which can help drive sales and increase customer loyalty.</strong></p>
<div class="d-flex flex-column gap-1">
<h6 class="txt-blue">SUPPORTED CREDIT CARDS</h6>
<div class="d-flex align-items-center gap-1">
<img src="/static/img/finance/master.svg">
<img src="/static/img/finance/visa.svg">
<img src="/static/img/finance/amex.svg">
<img src="/static/img/finance/diners.svg">
<img src="/static/img/finance/elo.svg">
<img src="/static/img/finance/hipercard20.svg">
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-6 bg-img" style="background-image: url(\'/static/img/woman-buy-online.jpg\');">
</div>
</div>
</div>
</section>

<section class="content-4 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-4 d-flex flex-column gap-3">
<div class="d-flex flex-column gap-1">
<!--                    <h6 class="txt-light-green">Alternative payment methods</h6>-->
<h2><strong>Alternative payment methods</strong></h2>
</div>
<div class="img bg-blue d-flex flex-grow-1 w-100">
<div style="background-image: url(\'/static/img/ewallet.png\');"></div>
</div>
</div>
<div class="col-12 col-lg-5">
<p class="ps-3 txt-blue">
In the era of digital transformation, payment methods have evolved beyond traditional credit and debit cards. Consumers are now seeking alternative payment options such as e-wallets, mobile payments, and online bank transfers. This trend is gaining momentum worldwide, especially among tech-savvy younger generations who prefer seamless, convenient, and secure payment methods.
<br><br>
By offering multiple payment options, merchants can provide a better shopping experience to their customers and increase their conversion rates. With just a single integration, merchants can accept payments through various channels, including credit cards, debit cards, digital wallets, and other alternative payment methods.
<br><br>
As more consumers move towards mobile-based payments, businesses must adapt to keep up with the changing landscape of payment options. Whether it is through the integration of mobile payment gateways or the acceptance of different payment methods, merchants must be willing to evolve and offer their customers the payment options they prefer.</p>
</div>
</div>
</div>
<br><br><br><br>
</section>



<section class="content-7 bg-white">
<div>
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row justify-content-center text-center">
<div class="col-12 col-lg-6">
<h2><strong>FacilitaPay with local acquiring x International acquiring</strong></h2>
</div>
</div>
<div class="row d-flex row-gap-5 justify-content-center">
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<h4 class="txt-green"><strong>Local acquiring</strong></h4>
<ul class="txt-blue">
<li><h5>International and domestic card schemes</h5></li>
<li><p>Best performance in payments with a direct connection to local acquirers. This way issuer banks will have more local consumer data increasing the approval rates.</p></li>
<li><p>Customers will have a local payment experience with all the services available, purchasing as it would in a local e-commerce.</p></li>
<li><p>Installments and recurring billing available.</p></li>
</ul>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<h4 class="txt-green"><strong>International acquiring</strong></h4>
<ul class="txt-blue">
<li><h5>International schemes only</h5></li>
<li><p>Worse performance in payments, as the issuing banks, tend to refuse more transactions from international acquirers due to the lack of information.</p></li>
<li><p>Limited for those who own internationally enabled cards. The shopping experience is not localized.</p></li>
<li><p>No installments and no recurring billing.</p></li>
</ul>
</div>
</div>
</div>
</div>
</section>


<section class="content-1">
<div class="container pt-4">
<div class="row justify-content-center">
<div class="col-11 col-lg-7">
<div class="d-flex flex-column gap-2 text-center justify-content-center">
<h2><strong>Start offering all local payment methods in LatAm yo your customers</h2>
<a href="optin.php" class="btn"><strong>Get started</strong></a>
</div>
</div>
</div>
</div>
</section>



<div class="h-4 bg-white"></div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Payment Methods',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-29 20:47:25',
                'updated_at' => '2023-05-29 20:47:25',
            ),
            13 => 
            array (
                'id' => 40,
                'pages_id' => 15,
                'locale' => 'pt',
                'title' => 'Payment Methods',
                'html' => '<style>
.tab-content{
display: none;
}
</style>

<section class="hero-2" style="background-image: url(\'/static/img/bg-payment-methods.jpg\');">
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-5 d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1">
<h6 class="txt-light-green">PAYMENT METHODS</h6>
<h3 class="txt-white"><strong>Explore local payment methods.</strong></h3>
</div>
<p class="txt-white">Many Latin American countries have experienced significant economic growth during the last decade, leading to an expanding middle class and increased purchasing power. In this market, local payment methods and the localized approach play an essential role for those who want to prosper in the region.</p>
<a href="optin.php" class="btn me-auto"><strong>Get in touch</strong></a>
</div>
<div class="col-12 col-lg-5">
</div>
</div>
</div>
</section>



<section class="content-3 bg-white text-center">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row justify-content-center">
<div class="col-12">
<h2><strong>Why Latin America is a significant market?</strong></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12">
<p>Latin America represents a significant market for global companies to expand to due to its large and rapidly growing population, increasing internet connectivity, and growing consumer spending power. With a population of over 650 million people, a significant growth in internet connectivity with (over 70% of Latins) and a fast-growing middle class, Latin America presents a significant opportunity for companies looking to tap into the growing user spending power in the region. <br><br>With FacilitaPay as your local payments partner, your company will be able to navigate the region\'s unique challenges and opportunities, allowing you to integrate the most popular payment methods and currencies that users in the region need to access global goods and services - all through one single and seamless integration.</p>
</div>
</div>
</div>
<div class="img" style="background-image: url(\'/static/img/bg-content-2.jpg\');"></div>
</section>

<section class="content-5 bg-white">
<div class="container d-flex flex-column gap-3 pt-4">

<div class="row justify-content-center">
<div class="col-12 col-lg-4 text-center">
<h4><strong>Most popular payment methods by countries.</strong></h4>
</div>
</div>

<div class="row justify-content-center">
<div class="col-12 col-lg-8">
<div class="d-flex text-start bg-blue border-radius">
<div class="list d-flex w-25">
<div class="d-flex flex-column flex-grow-1 pb-1 ps-1 pt-1">
<a href="#!" class="tab active" rel="brazil">Brazil</a>
<a href="#!" class="tab" rel="colombia">Colombia</a>
<a href="#!" class="tab" rel="mexico">Mexico</a>
</div>
</div>
<div class="table-1 d-flex w-75">
<div class="container" id="tab-contents">

<div class="tab-content" rel="brazil">
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1 ignoreanimation">
<h4 class="ignoreanimation"><strong>PIX (Instant Payment)</strong></h4>
<p class="txt-gray ignoreanimation">The instant payment system created by the Central Bank of Brazil is changing the market by performing transfers and payments, in a few seconds, at any time of the day - including weekends and holidays - in a safe and practical way.</p>
<div class="d-flex flex-wrap gap-1">
<img class="ignoreanimation" src="/static/img/finance/pix-logo.svg" class="h-1">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4 class="ignoreanimation"><strong>Local Credit Cards</strong></h4>
<p class="txt-gray ignoreanimation">The usage of credit cards has been growing. Although, internationally-enabled credit cards make up only 24% of e-commerce transactions. Start to accept both international and domestic cards and increase your conversions.</p>
<div class="d-flex flex-wrap gap-1">
<img class="ignoreanimation" src="/static/img/finance/master.svg">
<img class="ignoreanimation" src="/static/img/finance/visa.svg">
<img class="ignoreanimation" src="/static/img/finance/amex.svg">
<img class="ignoreanimation" src="/static/img/finance/diners.svg">
<img class="ignoreanimation" src="/static/img/finance/elo.svg">
<img class="ignoreanimation" src="/static/img/finance/hipercard.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4 class="ignoreanimation"><strong>Local Debit Cards</strong></h4>
<p class="txt-gray ignoreanimation">A debit card is a common payment method in Brazil. Today, there are 116M active debit cards in the country, with 664B reais spent with this method in 2019. Accept debit cards to reach a new consumer base and optimize your revenue in Brazil.</p>
<div class="d-flex flex-wrap gap-1">
<img class="ignoreanimation" src="/static/img/finance/master.svg" >
<img class="ignoreanimation" src="/static/img/finance/visa.svg" >
<img class="ignoreanimation" src="/static/img/finance/elo.svg" >
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4 class="ignoreanimation"><strong>Installments</strong></h4>
<p class="txt-gray ignoreanimation">Brazilians have the habit of splitting the total amount of a purchase made with a credit card in up to 12 monthly payments. Allow your customers to make higher-value purchases and increase your average ticket size.</p>
<div class="d-flex flex-wrap gap-1">
<img class="ignoreanimation" src="/static/img/finance/installments.svg" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4 class="ignoreanimation"><strong>Boleto Bancário</strong></h4>
<p class="txt-gray ignoreanimation">Brazil has a cash-centric culture, and Boleto has been historically used by the Brazilian population to pay for monthly bills, taxes, and also e-commerce purchases. Reach the unbanked population and also those whose preference is Boleto out of habit.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/instant-boleto.svg" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4 class="ignoreanimation"><strong>Crypto</strong></h4>
<p class="txt-gray ignoreanimation">Brazil has the seventh largest crypto market in the world and is growing rapidly. With FacilitaPay, you can make settlement in crypto, on/off ramp solutions and receive your local payments in stablecoins.</p>
<div class="d-flex flex-wrap gap-1">
<img class="ignoreanimation" src="/static/img/finance/ethereum.png" class="h-1">
<img class="ignoreanimation" src="/static/img/finance/crypto-2.png" class="h-1">
<img class="ignoreanimation" src="/static/img/finance/bitcoin.png" class="h-1">
<img class="ignoreanimation" src="/static/img/finance/crypto-3.png" class="h-1">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4 class="ignoreanimation"><strong>Digital Wallets</strong></h4>
<p class="txt-gray ignoreanimation">The popularity of digital wallets is increasing in Brazil, mostly due to the benefits offered by them, such as convenience, security, and simplicity to pay. Be ahead of the market and start to offer digital wallets on your e-commerce store.</p>
<div class="d-flex flex-wrap gap-1">
<img class="ignoreanimation" src="/static/img/finance/logo-mercadopago.svg" >
<img class="ignoreanimation" src="/static/img/finance/logo-paypal.svg" >
<img class="ignoreanimation h-2" src="/static/img/finance/picpay.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4 class="ignoreanimation"><strong>Other Alternative Payments</strong></h4>
<p class="txt-gray ignoreanimation">Brazil has several ways to pay online beyond credit cards. Bank Transfer and Online Debit are two effective payment options. Allow consumers to use their usual bank account to make an instant payment without the risk of chargeback for you.</p>
<div class="d-flex flex-wrap gap-1">
<img class="ignoreanimation" src="/static/img/finance/bank-transfer-cropped--en.svg" >
<img class="ignoreanimation" src="/static/img/finance/online-debit--en.svg" class="h-1">
</div>
</div>
</div>
</div>

</div>

<div class="tab-content" rel="colombia">

<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Local Credit Cards</strong></h4>
<p class="txt-gray">This payment method is one of the primary options of Colombians when shopping online. All Colombian cards are enabled to make international purchases, yet, local banks and issuers impose some obstacles to international shopping. FacilitaPay card solution offers local acquiring what increases approval rates.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/master.svg">
<img src="/static/img/finance/visa.svg">
<img src="/static/img/finance/amex.svg">
<img src="/static/img/finance/diners.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Local Debit Cards</strong></h4>
<p class="txt-gray">Debit card usage in Colombia has been growing rapidly in recent years, with over 20 million cardholders in the country as of 2021. The number of POS terminals in Colombia has been increasing, with over 200,000 in use as of 2021. This has helped to boost debit card usage, as consumers can now make card payments at a growing number of merchants. FacilitaPay card solution offers local acquiring what increases approval rates.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/master.svg">
<img src="/static/img/finance/visa.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>PSE (Pagos Seguros en Línea)</strong></h4>
<p class="txt-gray">The preferred alternative payment solution in Colombia. Pagos Seguros en Línea allows your customers to make bank transfers directly from their bank accounts, without needing a credit card.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/pse-logo.png" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Baloto</strong></h4>
<p class="txt-gray">Baloto is Colombia’s main lottery operator in the country and also has a payment network, with more than 13.500 payment stations, it’s able to reach 96% of the cities. Clients can pay purchases offline or online. When choosing the offline option, they receive a payment voucher with a barcode and a serial number, which can be paid at one of the payment stations.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/baloto.png" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>SuRed</strong></h4>
<p class="txt-gray">Being one of the largest payments networks in Colombia, SuRed is partnered with more than 27.000 convenience stores from different brands and across 32 departments. Clients who choose this payment method receive a voucher that can be paid in cash at any of their points.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/sured.png" class="h-1">
</div>
</div>
</div>
</div>

<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Efecty</strong></h4>
<p class="txt-gray">With real-time confirmation and easy user experience, Efecty is one of the most popular cash payment vouchers in Colombia, payable in over 10,000 locations throughout the country. Increases your sales by reaching a vast part of Colombian customers that prefer to pay offline, with cash and allows you to reach the unbanked population.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/efecty.svg" class="h-2">
</div>
</div>
</div>
</div>

<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Installments</strong></h4>
<p class="txt-gray">Installment purchases are very popular in Colombia, over 70% of online credit card transactions are installment-based. The clients are allowed to pay their purchase in up to 36 months. The banks, who finance the operation charge interest rates, which are charged directly to the client depending on the agreement he has with his bank.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/installments-36x.svg" class="h-2">
</div>
</div>
</div>
</div>

</div>

<div class="tab-content" rel="mexico">

<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>OXXO</strong></h4>
<p class="txt-gray">OXXO is one of the most famous voucher payments in Mexico. People are used to going to convenience stores to pay bills, and also their vouchers for e-commerce purchases. Start to accept OXXO as a payment method and reach more consumers.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/oxxo-pay.svg" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>OXXO Pay</strong></h4>
<p class="txt-gray">The most known payment method in Mexico now with real-time confirmation.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/oxxo-pay.svg" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Local Credit and Debit Cards</strong></h4>
<p class="txt-gray">Access to financial services is still growing, and credit card penetration is on the rise in Mexico. Local acquiring can offer better approval rates in Mexico, and you can accept local debit cards.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/master.svg">
<img src="/static/img/finance/visa.svg">
<img src="/static/img/finance/amex.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Credit Card Installments</strong></h4>
<p class="txt-gray">With installments, consumers can split up purchases in 3, 6, 9, and 12 monthly payments depending on the price of the purchase. Offer installments to your Mexican customers and increase average ticket sizes.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/installments.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>SPEI</strong></h4>
<p class="txt-gray">Whenever a Mexican wants to make an interbank transfer, they need to use SPEI. The Mexican system for online banking transactions. Allow your customers to pay for their purchases with online bank transfers through SPEI.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/spei.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Crypto</strong></h4>
<p class="txt-gray">The crypto market is becoming increasingly important in Mexico due to the country\'s large population of unbanked individuals, high levels of remittance inflows, and growing interest in digital assets as a hedge against inflation and economic instability. With FacilitaPay, you can make settlement in crypto, on/off ramp solutions and receive your local payments in stablecoins.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/ethereum.png" class="h-1">
<img src="/static/img/finance/crypto-2.png" class="h-1">
<img src="/static/img/finance/bitcoin.png" class="h-1">
<img src="/static/img/finance/crypto-3.png" class="h-1">
</div>
</div>
</div>
</div>

<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Digital Wallets</strong></h4>
<p class="txt-gray">The popularity of digital wallets is increasing in México, mostly due to the benefits offered by them, such as convenience, security, and simplicity to pay. Be ahead of the market and start to offer digital wallets on your e-commerce store.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/logo-mercadopago.svg" >
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Other Alternative Payments</strong></h4>
<p class="txt-gray">Mexico has several payment methods besides credit cards. Voucher payments, Oxxo and digital wallets are very common methods used by online consumers.</p>
<div class="d-flex flex-wrap gap-1">
<img src="/static/img/finance/bank-transfer-cropped--en.svg" >
<img src="/static/img/finance/online-debit--en.svg" class="h-1">
</div>
</div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>
</div>

<div class="row justify-content-center">
<div class="col-11 col-lg-7">
<div class="d-flex flex-column gap-2 text-center justify-content-center">
<!--                          <h2><strong>Start offering all local payment methods in LatAm yo your customers</h2>-->
<a href="optin.php" class="btn"><strong>Get started</strong></a>
</div>
</div>
</div>
</section>


<section class="content-4 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-4 d-flex flex-column gap-3">
<div class="d-flex flex-column gap-1">
<h6 class="txt-light-green">CREDIT CARDS</h6>
<h2><strong>Domestic Credit and Debit Cards</strong></h2>
</div>
<div class="img bg-blue d-flex flex-grow-1 w-100">
<div style="background-image: url(\'/static/img/couple-buy-online.jpg\');"></div>
</div>
</div>
<div class="col-12 col-lg-5">
<p class="ps-3 txt-blue">In the Latin America market, domestic credit and debit cards have become increasingly popular as a means of payment. They are convenient, secure and widely accepted by merchants across the region. These cards are issued by local banks, and they are tailored to the needs of consumers in each country. Domestic cards also offer benefits such as lower fees and interest rates, as well as rewards programs that are specifically designed for the local market. <br><br>The availability of domestic credit and debit cards has enabled more purchasing power for the population in each country. With access to credit, consumers can buy products and services that were previously out of reach. This, in turn, drives economic growth as consumers spend more money, and businesses expand their operations to meet the growing demand. Additionally, debit cards have become an essential tool for those who don\'t have access to traditional banking services, providing them with a safe and convenient way to manage their money. Overall, the popularity of domestic credit and debit cards in LatAm has opened up new opportunities for individuals and businesses, and has helped to drive the region\'s economic growth. <br><br>With FacilitaPay as a local partner, merchants can accept both international and domestic cards, increasing the addressable market and the approval rates.</p>
</div>
</div>
</div>
</section>

<section class="content-1">
<div class="container pt-4">
<div class="row text-center">
<h2><strong>How does the credit card work?</strong></h2>
</div>
</div>
</section>



<div class="h-4 bg-white"></div>



<section class="steps-2">
<div class="container">
<div class="row">
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><strong>1</strong></div>
<h5>The customer selects Credit Cards as the payment method.</h5>
</div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><strong>2</strong></div>
<h5>The customer fills in the Credit Card Information.</h5>
</div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><strong>3</strong></div>
<h5>Payment confirmation is sent in real-time to your customer.</h5>
</div>
</div>
</div>
</div>
</section>



<section class="content-8">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-10" style="background-image: url(\'/static/img/img.jpg\');">
<div class="container  d-flex flex-column row-gap-3 gap-2 p-4">
<div class="row justify-content-center">
<div class="col-12 d-flex flex-column gap-1 text-center justify-content-center">
<h6 class="txt-white">Let\'s Go</h6>
<h2 class="txt-white"><strong>Benefits of accepting credit cards</strong></h2>
</div>
</div>
<div class="row d-flex row-gap-3">
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<h4 class="txt-light-green"><strong>Increase Approval Rates</strong></h4>
<p class="txt-white">With local acquiring, your business has better approval rates.</p>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<h4 class="txt-light-green"><strong>Less Chargeback risk</strong></h4>
<p class="txt-white">Rely on Facilitapay Shield, an advanced anti-fraud strategy, with no extra cost.</p>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<h4 class="txt-light-green"><strong>Retry Logic</strong></h4>
<p class="txt-white">Advanced machine learning technology increases approval rates by minimizing failed payments.</p>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<h4 class="txt-light-green"><strong>Simplify purchases</strong></h4>
<p class="txt-white">Support recurring payments, via card tokenization, and pre-authorization.</p>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<h4 class="txt-light-green"><strong>Billing Descriptor</strong></h4>
<p class="txt-white">Start offering all local payment methods in LatAm to your customers.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="content-6 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row d-flex justify-content-center text-center">
<div class="col-12 col-lg-6">
<h2><strong>Increase your average ticket with installments</strong></h2>
</div>
</div>
<div class="row d-flex row-gap-3 justify-content-center">
<div class="col-12 col-lg-4">
<div class="d-flex flex-column gap-2 pb-4 pe-3 pt-4">
<p class="txt-blue">Offering installment plans can be a game-changer for businesses looking to expand into Latin America. In many cases, consumers in the region prefer to use installment plans to help manage their budgets and make big-ticket purchases more affordable. This is especially true given that credit card limits in Latin America are typically very low, meaning that consumers may not be able to pay for large purchases all at once without exceeding their limits.</p>
<p class="txt-blue"><strong>By offering installment plans, businesses can make their products and services more accessible to consumers in Latin America, which can help drive sales and increase customer loyalty.</strong></p>
<div class="d-flex flex-column gap-1">
<h6 class="txt-blue">SUPPORTED CREDIT CARDS</h6>
<div class="d-flex align-items-center gap-1">
<img src="/static/img/finance/master.svg">
<img src="/static/img/finance/visa.svg">
<img src="/static/img/finance/amex.svg">
<img src="/static/img/finance/diners.svg">
<img src="/static/img/finance/elo.svg">
<img src="/static/img/finance/hipercard20.svg">
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-6 bg-img" style="background-image: url(\'/static/img/woman-buy-online.jpg\');">
</div>
</div>
</div>
</section>

<section class="content-4 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-4 d-flex flex-column gap-3">
<div class="d-flex flex-column gap-1">
<!--                    <h6 class="txt-light-green">Alternative payment methods</h6>-->
<h2><strong>Alternative payment methods</strong></h2>
</div>
<div class="img bg-blue d-flex flex-grow-1 w-100">
<div style="background-image: url(\'/static/img/ewallet.png\');"></div>
</div>
</div>
<div class="col-12 col-lg-5">
<p class="ps-3 txt-blue">
In the era of digital transformation, payment methods have evolved beyond traditional credit and debit cards. Consumers are now seeking alternative payment options such as e-wallets, mobile payments, and online bank transfers. This trend is gaining momentum worldwide, especially among tech-savvy younger generations who prefer seamless, convenient, and secure payment methods.
<br><br>
By offering multiple payment options, merchants can provide a better shopping experience to their customers and increase their conversion rates. With just a single integration, merchants can accept payments through various channels, including credit cards, debit cards, digital wallets, and other alternative payment methods.
<br><br>
As more consumers move towards mobile-based payments, businesses must adapt to keep up with the changing landscape of payment options. Whether it is through the integration of mobile payment gateways or the acceptance of different payment methods, merchants must be willing to evolve and offer their customers the payment options they prefer.</p>
</div>
</div>
</div>
<br><br><br><br>
</section>



<section class="content-7 bg-white">
<div>
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row justify-content-center text-center">
<div class="col-12 col-lg-6">
<h2><strong>FacilitaPay with local acquiring x International acquiring</strong></h2>
</div>
</div>
<div class="row d-flex row-gap-5 justify-content-center">
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<h4 class="txt-green"><strong>Local acquiring</strong></h4>
<ul class="txt-blue">
<li><h5>International and domestic card schemes</h5></li>
<li><p>Best performance in payments with a direct connection to local acquirers. This way issuer banks will have more local consumer data increasing the approval rates.</p></li>
<li><p>Customers will have a local payment experience with all the services available, purchasing as it would in a local e-commerce.</p></li>
<li><p>Installments and recurring billing available.</p></li>
</ul>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<h4 class="txt-green"><strong>International acquiring</strong></h4>
<ul class="txt-blue">
<li><h5>International schemes only</h5></li>
<li><p>Worse performance in payments, as the issuing banks, tend to refuse more transactions from international acquirers due to the lack of information.</p></li>
<li><p>Limited for those who own internationally enabled cards. The shopping experience is not localized.</p></li>
<li><p>No installments and no recurring billing.</p></li>
</ul>
</div>
</div>
</div>
</div>
</section>


<section class="content-1">
<div class="container pt-4">
<div class="row justify-content-center">
<div class="col-11 col-lg-7">
<div class="d-flex flex-column gap-2 text-center justify-content-center">
<h2><strong>Start offering all local payment methods in LatAm yo your customers</h2>
<a href="optin.php" class="btn"><strong>Get started</strong></a>
</div>
</div>
</div>
</div>
</section>



<div class="h-4 bg-white"></div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Payment Methods',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-29 20:47:25',
                'updated_at' => '2023-05-29 20:47:25',
            ),
            14 => 
            array (
                'id' => 41,
                'pages_id' => 15,
                'locale' => 'es',
                'title' => 'Payment Methods',
                'html' => '<section class="hero-2" id="igj2">
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-5 d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1"><h6 class="txt-light-green">MÉTODOS DE PAGO</h6>
<h3 class="txt-white"><strong id="idti">Explora los métodos de pago locales.</strong></h3></div>
<p class="txt-white">Muchos países latinoamericanos han experimentado un crecimiento económico
significativo en la última década, lo que ha llevado a la expansión de la clase media y al aumento
del poder adquisitivo. En este mercado, los métodos de pago locales y la localización juegan un
papel esencial para aquellas empresas que desean prosperar en la región.</p><a href="optin.php"
class="btn me-auto"><strong
id="ijfg7">Ponte en contacto</strong></a></div>
<div class="col-12 col-lg-5">
</div>
</div>
</div>
</section>
<section class="content-3 bg-white text-center">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row justify-content-center">
<div class="col-12"><h2><strong id="idqaj">¿Por qué América Latina es un mercado importante?</strong></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12"><p id="iel73">América Latina representa un mercado importante para la expansión de las
empresas globales debido a su grande población y su rápido crecimiento, el aumento de la
conectividad a Internet y el creciente poder adquisitivo de los consumidores Latinoamericanos. Con
una población de más de 650 millones de personas, un crecimiento significativo en la conectividad a
Internet (más del 70% de la población) y una clase media en rápido crecimiento, América Latina
presenta una oportunidad única para empresas globales que buscan llegar a nuevos mercados.
<br/><br/>Con FacilitaPay como tu partner pagos local, tu empresa podrá navegar por los desafíos y
las oportunidades únicas que brinda esta región, permitiéndote integrar los métodos de pago y las
divisas más populares de la región, requeridas por los latinos para acceder a bienes y servicios
globales, todo a través de una única integración.<br/></p></div>
</div>
</div>
<div class="img" id="ig6sp"></div>
</section>
<section class="content-5 bg-white">
<div class="container d-flex flex-column gap-3 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-4 text-center"><h4><strong id="im0k2">Most popular payment methods by
countries.</strong></h4></div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-8">
<div class="d-flex text-start bg-blue border-radius">
<div class="list d-flex w-25">
<div class="d-flex flex-column flex-grow-1 pb-1 ps-1 pt-1"><a href="#!" rel="brazil"
class="tab active">Brazil</a><a
href="#!" rel="colombia" class="tab">Colombia</a><a href="#!" rel="mexico" class="tab">Mexico</a>
</div>
</div>
<div class="table-1 d-flex w-75">
<div id="tab-contents" class="container">
<div rel="brazil" class="tab-content">
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1 ignoreanimation"><h4
class="ignoreanimation"><strong id="i0su7">PIX (Pago
Instantáneo)</strong></h4>
<p class="txt-gray ignoreanimation">El sistema de pago instantáneo creado
por el Banco Central de Brasil que está cambiando el mercado de pagos y
transferencias, permitiendo transaccionar en cuestión de segundos, en
cualquier momento del día, incluidos fines de semana y días festivos, de
manera segura y práctica.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/pix-logo.svg" class="ignoreanimation"/>
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4 class="ignoreanimation"><strong
id="i0fky">Tarjetas de crédito locales</strong></h4>
<p class="txt-gray ignoreanimation">El uso de tarjetas de crédito continua
en aumento. Sin embargo, estas son en su mayoría locales y aquellas
habilitadas para uso internacional representan tan solo el 24% de las
transacciones en línea. Empieza a aceptar tarjetas locales e
internacionales para aumentar tus ingresos.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/master.svg" class="ignoreanimation"/><img
src="/static/img/finance/visa.svg" class="ignoreanimation"/><img
src="/static/img/finance/amex.svg" class="ignoreanimation"/><img
src="/static/img/finance/diners.svg" class="ignoreanimation"/><img
src="/static/img/finance/elo.svg" class="ignoreanimation"/><img
src="/static/img/finance/hipercard.svg" class="ignoreanimation"/>
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4 class="ignoreanimation"><strong
id="ijckq">Tarjetas de débito locales</strong></h4>
<p class="txt-gray ignoreanimation">La tarjeta de débito es un método de
pago común en Brasil. Actualmente hay 116 millones de tarjetas de débito
activas en el país, con USD $168 m siendo transaccionados a través de
este método en el 2021. Aceptar tarjetas de débito te permitirá llegar a
una nueva base de consumidores y optimizar tus ingresos en Brasil.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/master.svg" class="ignoreanimation"/><img
src="/static/img/finance/visa.svg" class="ignoreanimation"/><img
src="/static/img/finance/elo.svg" class="ignoreanimation"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4 class="ignoreanimation"><strong
id="iaw0f">Cuotas</strong></h4>
<p class="txt-gray ignoreanimation">Los brasileños tienen la costumbre de
dividir el monto total de una compra realizada con tarjeta de crédito en
hasta 12 pagos mensuales. Ofrecer esta opción permite que tus clientes
puedan incrementar su presupuesto, y por ende el valor de su compra en
hasta un 30%.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/installments.svg" class="ignoreanimation"/>
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4 class="ignoreanimation"><strong>Boleto
Bancário</strong></h4>
<p class="txt-gray ignoreanimation">Aún existe una población no bancarizada
en Brasil y una cultura de dinero físico, el Boleto Bancario ha sido
utilizado históricamente por la población brasileña para pagar facturas
mensuales, servicios y también compras en línea. Ofrecerlo te permitirá
llegar a quienes no poseen cuentas bancarias, cómo también a aquellos
que prefieren pagar a través de este método.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/instant-boleto.svg" class="h-2"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4 class="ignoreanimation">
<strong>Cripto</strong></h4>
<p class="txt-gray ignoreanimation">Brasil es el séptimo mercado de
criptomonedas más grande del mundo y está creciendo rápidamente. Con
FacilitaPay, puedes utilizar criptomonedas en tus flujos de on-ramp y
off-ramp y a la vez transaccionar con pagos locales.Brazil has the
seventh largest crypto market in the world and is growing rapidly. With
FacilitaPay, you can make settlement in crypto, on/off ramp solutions
and receive your local payments in stablecoins.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/ethereum.png" class="ignoreanimation"/><img
src="/static/img/finance/crypto-2.png" class="ignoreanimation"/><img
src="/static/img/finance/bitcoin.png" class="ignoreanimation"/><img
src="/static/img/finance/crypto-3.png" class="ignoreanimation"/>
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4 class="ignoreanimation"><strong
id="i7fcv5">Billeteras Digitales</strong></h4>
<p class="txt-gray ignoreanimation">La popularidad de las billeteras
digitales está aumentando en Brasil, principalmente debido a los
beneficios que ofrecen, como la conveniencia, la seguridad y la
simplicidad de pago. Mantente a la vanguardia del mercado y comienza a
ofrecer billeteras digitales en tu operación de pagos en línea.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/logo-mercadopago.svg"
class="ignoreanimation"/><img
src="/static/img/finance/logo-paypal.svg"
class="ignoreanimation"/><img src="/static/img/finance/picpay.svg"
class="ignoreanimation h-2"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4 class="ignoreanimation"><strong
id="io2dll">Otros métodos de pagos alternativos</strong></h4>
<p class="txt-gray ignoreanimation">Brasil tiene varias formas de pago en
línea además de las tarjetas de crédito. La transferencia bancaria y el
débito en línea son dos opciones de pago efectivas. Permite que tus
usuarios puedan utilizar su cuenta bancaria habitual para realizar un
pago instantáneo sin riesgo de fraudes para tu negocio.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/bank-transfer-cropped--en.svg"
class="ignoreanimation"/><img
src="/static/img/finance/online-debit--en.svg"
class="ignoreanimation"/></div>
</div>
</div>
</div>
</div>
<div rel="colombia" class="tab-content">
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong id="izygfl">Tarjetas de
crédito</strong></h4>
<p class="txt-gray">Este método de pago es una de las principales opciones
para los colombianos a la hora de comprar en línea. Todas las tarjetas
colombianas pueden realizar compras internacionales, pero los bancos y
emisores locales imponen algunos obstáculos en este tipo de
transacciones. La solución de procesamiento de tarjetas con FacilitaPay
utiliza adquirencia local, lo que aumenta significativamente tus tasas
de aprobación.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/master.svg"/><img
src="/static/img/finance/visa.svg"/><img
src="/static/img/finance/amex.svg"/><img
src="/static/img/finance/diners.svg"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>Tarjetas de débito
locales</strong></h4>
<p class="txt-gray">El uso de tarjetas de débito en Colombia ha crecido
rápidamente en los últimos años, con más de 20 millones de
tarjetahabientes en el país en 2021. La aceptación de tarjetas en
comercios de todos los tipos ha ido en aumento, lo que ha ayudado a
impulsar el uso de las mismas entre los consumidores – sin necesitar
cargar efectivo, y sin el riesgo de endeudarse. La solución de
procesamiento de tarjetas con FacilitaPay utiliza adquirencia local, lo
que aumenta significativamente tus tasas de aprobación.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/master.svg"/><img
src="/static/img/finance/visa.svg"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>PSE (Pagos Seguros en
Línea)</strong></h4>
<p class="txt-gray">La solución de pago alternativa preferida por los
colombianos. Pagos Seguros en Línea permite a sus clientes realizar
transferencias bancarias directamente desde las plataformas de sus
bancos, de forma segura y sin recurrir a tarjetas de crédito.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/pse-logo.png" class="h-2"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>SuRed</strong></h4>
<p class="txt-gray">Siendo una de las redes de pago más grandes de Colombia,
SuRed está asociada con más de 27.000 tiendas de conveniencia de
diferentes marcas y presentes en 32 departamentos. Los clientes que
elijan este método de pago reciben un vale con el que pueden pagar en
efectivo en cualquiera de los puntos de SuRed.</p>
<div class="d-flex flex-wrap gap-1"><img src="/static/img/finance/sured.png"
class="h-1"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>Efecty</strong></h4>
<p class="txt-gray">Con confirmación en tiempo real y una experiencia de
usuario fácil e intuitiva, Efecty es uno de los vales de pago en
efectivo más populares en Colombia, que puede ser pago en los 10.000
puntos de pago esparcidos por todo el país. Aumenta tus ventas al llegar
a una gran parte de los clientes colombianos que prefieren pagar en
efectivo, pudiendo llegar a la población no bancarizada.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/efecty.svg" class="h-2"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>Pagos en Cuotas</strong></h4>
<p class="txt-gray">Los pagos en cuotas son altamente populares en Colombia,
más del 70% de las compras en línea hechas con tarjeta de crédito se
pagan en cuotas. Los clientes pueden pagar sus compras en hasta 36 mes
bancos que financian la operación para el usuario cobrándole una tasa de
interés, cuyo valor depende de las condiciones del usuario y su
banco.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/installments-36x.svg" class="h-2"/></div>
</div>
</div>
</div>
</div>
<div rel="mexico" class="tab-content">
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>OXXO</strong></h4>
<p class="txt-gray">OXXO es la tienda más popular en México y uno de los
métodos de pago más populares. Los mexicanos están acostumbrados a ir a
las tiendas de conveniencia para pagar sus facturas y sus compras en
línea. Empieza a aceptar OXXO como método de pago y llega a más
consumidores.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/oxxo-pay.svg" class="h-2"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>OXXO Pay</strong></h4>
<p class="txt-gray">El método de pago más conocido en México, ahora con
confirmación del pago en tiempo real.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/oxxo-pay.svg" class="h-2"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>Tarjetas de crédito y débito
locales</strong></h4>
<p class="txt-gray">El acceso a los servicios financieros sigue creciendo,
al igual que el número de tarjetahabientes en México. Contar con
adquirencia local hará que puedas incrementar significativamente las
tasas de aprobación en transacciones, y aceptar todo tipo de
tarjetas.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/master.svg"/><img
src="/static/img/finance/visa.svg"/><img
src="/static/img/finance/amex.svg"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>Meses sin Intereses</strong>
</h4>
<p class="txt-gray">A través de los Meses sin Intereses, los consumidores
pueden dividir las compras en 3, 6, 9 y hasta 12 pagos mensuales,
pudiendo acomodar el pago a su presupuesto mensual. Ofrece cuotas a tus
clientes mexicanos y permite que puedan realizar pagos de mayor
valor.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/installments.svg"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>SPEI</strong></h4>
<p class="txt-gray">SPEI está presente en cada transferencia interbancaria
realizada por los Mexicanos. El sistema mexicano de banca en línea
permite que clientes puedan pagar por sus compras a través de
transferencias bancarias en línea utilizando SPEI.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/spei.svg"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>Cripto</strong></h4>
<p class="txt-gray">El mercado de criptomonedas es cada vez más importante
en México debido a la gran cantidad de personas no bancarizadas en el
país, los altos niveles de entradas de remesas y el creciente interés en
los activos digitales para protegerse contra la inflación y la
inestabilidad económica. Con FacilitaPay como partner, puedes utilizar
criptomonedas y pagos locales en tus flujos de on-ramp y off-ramp.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/ethereum.png" class="h-1"/><img
src="/static/img/finance/crypto-2.png" class="h-1"/><img
src="/static/img/finance/bitcoin.png" class="h-1"/><img
src="/static/img/finance/crypto-3.png" class="h-1"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>Carteras digitales</strong>
</h4>
<p class="txt-gray">La popularidad de las billeteras digitales está
aumentando en México, principalmente debido a los beneficios que ofrecen
como conveniencia, seguridad y simplicidad de pago. Mantente a la
vanguardia del mercado y comienza a ofrecer billeteras digitales en tu
operación de pagos en línea.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/logo-mercadopago.svg"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong id="iwnfcg">Otros métodos de
pagos alternativos</strong></h4>
<p class="txt-gray">México tiene varios métodos de pago además de las
tarjetas de crédito. Los pagos con vales, Oxxo y billeteras digitales
son métodos muy comunes utilizados por los consumidores en línea.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/bank-transfer-cropped--en.svg"/><img
src="/static/img/finance/online-debit--en.svg" class="h-1"/></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-11 col-lg-7">
<div class="d-flex flex-column gap-2 text-center justify-content-center">
<!--                          <h2><strong>Start offering all local payment methods in LatAm yo your customers</h2>--><a
href="optin.php" class="btn"><strong id="i1q1g7">Comienza ahora</strong></a></div>
</div>
</div>
</div>
</section>
<section class="content-4 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-4 d-flex flex-column gap-3">
<div class="d-flex flex-column gap-1"><h6 class="txt-light-green">Tarjetas</h6>
<h2><strong id="iki4wk">Tarjetas de crédito y débito locales</strong></h2></div>
<div class="img bg-blue d-flex flex-grow-1 w-100">
<div id="i2utcb"></div>
</div>
</div>
<div class="col-12 col-lg-5"><p class="ps-3 txt-blue">En el mercado latinoamericano, las tarjetas de crédito
y débito locales se han vuelto métodos de pago cada vez más relevantes. Son convenientes, seguros y
ampliamente aceptados por los comercios que actúan en la región. Estas tarjetas son emitidas por
bancos locales y se adaptan a las necesidades de los consumidores en cada país. Las tarjetas locales
también ofrecen beneficios como tasas de interés más bajos, cuotas de manejo más económicas y
programas de recompensas creados específicamente para el mercado local.<br/>El acceso al crédito y
productos bancarios ha permitido que la población tenga un mayor poder adquisitivo, pudiendo comprar
productos y servicios que antes estaban fuera de su alcance. Esto impulsa el crecimiento económico a
medida que los consumidores gastan más dinero, las empresas amplían sus operaciones para satisfacer
una mayor demanda. Además, las tarjetas de débito se han convertido en una herramienta esencial para
aquellos que no tienen acceso a los servicios bancarios tradicionales, ofreciéndoles una forma
segura y cómoda de administrar su dinero. En general, la popularidad de las tarjetas de crédito y
débito locales en América Latina ha abierto nuevas oportunidades para individuos y empresas y ha
ayudado a impulsar el crecimiento económico en la región.<br/><br/>Con FacilitaPay como partner
local, empresas globales pueden aceptar tarjetas locales e internacionales, lo que aumenta su
alcance del mercado y las tasas de aprobación en sus transacciones.<br/></p></div>
</div>
</div>
</section>
<section class="content-1">
<div class="container pt-4">
<div class="row text-center"><h2><strong id="i087up">¿Cómo funciona la tarjeta de crédito?</strong></h2></div>
</div>
</section>
<div class="h-4 bg-white"></div>
<section class="steps-2">
<div class="container">
<div class="row">
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><strong>1</strong></div>
<h5 id="i6s3bs">El usuario selecciona la tarjeta de crédito como el método de pago.</h5></div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><strong>2</strong></div>
<h5 id="iopife">El cliente rellena la información de su tarjeta de crédito.</h5></div>
</div>
<div class="col-12 col-md-4">
<div class="d-flex flex-column gap-1">
<div><strong>3</strong></div>
<h5 id="illjdf">La confirmación del pago se envía en tiempo real.</h5></div>
</div>
</div>
</div>
</section>
<section class="content-8">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-10" id="irhmtf">
<div class="container d-flex flex-column row-gap-3 gap-2 p-4">
<div class="row justify-content-center">
<div class="col-12 d-flex flex-column gap-1 text-center justify-content-center"><h6
class="txt-white">Let&#039;s Go</h6>
<h2 class="txt-white"><strong id="iyrym5">Beneficios de aceptar tarjetas de crédito</strong>
</h2></div>
</div>
<div class="row d-flex row-gap-3">
<div class="col-12 col-lg-4 d-flex flex-column gap-1"><h4 class="txt-light-green"><strong
id="i060kk">Aumento en las tasas de aprobación</strong></h4>
<p class="txt-white">Con la adquirencia local, tu negocio obtiene las mejores tasas de
aprobación.</p></div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1"><h4 class="txt-light-green"><strong
id="intmva">Menor riesgo de contracargos</strong></h4>
<p class="txt-white">Cuenta con el escudo de Facilitapay, una estrategia avanzada contra el
fraude, sin costo adicional.</p></div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1"><h4 class="txt-light-green"><strong
id="iwpl7w">Lógica de reintento</strong></h4>
<p class="txt-white">La tecnología avanzada de machine-learning aumenta las tasas de
aprobación al minimizar los pagos fallidos.</p></div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1"><h4 class="txt-light-green"><strong
id="ij530k">Simplifica los pagos</strong></h4>
<p class="txt-white">Admite pagos recurrentes a través de tokenización de tarjetas y
autorización previa.</p></div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1"><h4 class="txt-light-green"><strong
id="irqz4w">Facturación detalladaBilling Descriptor</strong></h4>
<p class="txt-white">Comienza a ofrecer todos los métodos de pago locales en América Latina
a sus clientes.</p></div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="content-6 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row d-flex justify-content-center text-center">
<div class="col-12 col-lg-6"><h2><strong>Aumenta tu ticket promedio con cuotas</strong></h2></div>
</div>
<div class="row d-flex row-gap-3 justify-content-center">
<div class="col-12 col-lg-4">
<div class="d-flex flex-column gap-2 pb-4 pe-3 pt-4"><p class="txt-blue">El poder ofrecer pagos en cuotas cambia el escenario totalmente para empresas que buscan expandirse en América Latina. En muchos casos, los consumidores en la región prefieren usar cuotas para poder ajustar sus presupuestos y hacer que las compras de alto valor sean más asequibles. </p>
<p class="txt-blue"><strong>Al ofrecer planes de pago a plazos, las empresas pueden hacer que sus productos y servicios puedan llegar a más consumidores en América Latina, impulsando sus ventas y logrando fidelizar a más clientes.</strong></p>
<div class="d-flex flex-column gap-1"><h6 class="txt-blue">TARJETAS DE CRÉDITO ACEPTADAS</h6>
<div class="d-flex align-items-center gap-1"><img src="/static/img/finance/master.svg"/><img
src="/static/img/finance/visa.svg"/><img src="/static/img/finance/amex.svg"/><img
src="/static/img/finance/diners.svg"/><img src="/static/img/finance/elo.svg"/><img
src="/static/img/finance/hipercard20.svg"/></div>
</div>
</div>
</div>
<div class="col-12 col-lg-6 bg-img" id="il43av">
</div>
</div>
</div>
</section>
<section class="content-4 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-4 d-flex flex-column gap-3">
<div class="d-flex flex-column gap-1">
<!--                    <h6 class="txt-light-green">Alternative payment methods</h6>--><h2><strong>Métodos de pago alternativos</strong></h2></div>
<div class="img bg-blue d-flex flex-grow-1 w-100">
<div id="i2bbfe"></div>
</div>
</div>
<div class="col-12 col-lg-5"><p class="ps-3 txt-blue">
En la era de la transformación digital, los métodos de pago han evolucionado más allá de las tradicionales tarjetas de crédito y débito. Ahora los consumidores buscan opciones de pago alternativas, como billeteras digitales, pagos a través de sus moviles y transferencias bancarias en línea. Esta tendencia está ganando terreno en la región, especialmente entre las generaciones más jóvenes y adeptas a la tecnología, que prefieren métodos de pago modernos, convenientes y seguros.
<br/><br/>
Al ofrecer múltiples opciones de pago, las empresas pueden proporcionar una mejor experiencia de compra para sus clientes y aumentar sus tasas de conversión. Con una sola integración, las empresas pueden aceptar pagos a través de múltiples canales, incluidas tarjetas de crédito, tarjetas de débito, billeteras digitales y otros métodos de pago alternativos.
<br/><br/>
A medida que más consumidores implementan nuevas formas de pago, las empresas deben adaptarse y mantenerse al día con el nuevo ecosistema de pagos en línea. Ya sea a través de la integración de nuevos partners de pago o la aceptación de diferentes métodos de pago, las empresas deben estar dispuestas a evolucionar su estrategia y ofrecer a sus clientes las opciones de pago que prefieran.</p></div>
</div>
</div>
<br/><br/><br/><br/></section>
<section class="content-7 bg-white">
<div>
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row justify-content-center text-center">
<div class="col-12 col-lg-6"><h2><strong>Adquirencia local con FacilitaPay vs. Adquirencia Internacional</strong></h2></div>
</div>
<div class="row d-flex row-gap-5 justify-content-center">
<div class="col-12 col-lg-4 d-flex flex-column gap-1"><h4 class="txt-green"><strong>Adquirencia Local</strong></h4>
<ul class="txt-blue">
<li><h5>Acepta tarjetas locales e internacionales</h5></li>
<li><p>Mejora el performance de tus pagos con nuestra conexión directa a adquirentes locales. De esta manera, los bancos emisores tendrán más datos sobre los usuarios locales, aumentando las tasas de aprobación.</p></li>
<li><p>Los usuarios tendrán una experiencia de pago local con todas las opciones disponibles, comprando como lo harían a través de una empresa local.</p></li>
<li><p>Cuotas y cobros recurrente disponibles.</p></li>
</ul>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1"><h4 class="txt-green"><strong>Adquirencia Internacional</strong></h4>
<ul class="txt-blue">
<li><h5>Acepta únicamente tarjetas internacionales </h5></li>
<li><p>Menor performance en los pagos, debido a que los bancos emisores son más propensos a rechazar las transacciones de los usuarios locales debido a la falta de información.</p></li>
<li><p>El pago estará limitado a aquellos usuarios que tienen tarjetas habilitadas para pagos internacionalmente. La experiencia de compra no está adaptada al usuario.</p></li>
<li><p>Sin la posibilidad de pagar con cuotas, ni hacerlo en la moneda local.</p></li>
</ul>
</div>
</div>
</div>
</div>
</section>
<section class="content-1">
<div class="container pt-4">
<div class="row justify-content-center">
<div class="col-11 col-lg-7">
<div class="d-flex flex-column gap-2 text-center justify-content-center"><h2><strong>
Comienza a ofrecer todos los métodos de pago locales a tus clientes en América Latina
</strong></h2><strong><a href="optin.php"
class="btn"><strong>Comienza ahora</strong></a></strong></div>
<strong>
</strong></div>
<strong>
</strong></div>
<strong>
</strong></div>
<strong>
</strong></section><strong>
<div class="h-4 bg-white"></div>
</strong>
',
            'css' => '* { box-sizing: border-box; } body {margin: 0;}*{box-sizing:border-box;}body{margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#igj2{background-image:url(\'/static/img/bg-payment-methods.jpg\');}#ig6sp{background-image:url(/static/img/bg-content-2.jpg);}#i2utcb{background-image:url(\'/static/img/couple-buy-online.jpg\');}#irhmtf{background-image:url(\'/static/img/img.jpg\');}#il43av{background-image:url(\'/static/img/woman-buy-online.jpg\');}#i2bbfe{background-image:url(\'/static/img/ewallet.png\');}',
                'metatitle' => 'Payment Methods',
                'slug' => NULL,
                'metadescription' => 'MÉTODOS DE PAGOExplora los métodos de pago locales.Muchos países latinoamericanos han experimentado un crecimiento económico
significativo en la última década, lo que ha llevado a la expansión de la clase media y al aumento
del poder adquisitivo. En este mercado, los métodos de pago locales y la localización juegan un
papel esencial para aquellas empresas que desean prosperar en la región.Ponte en contacto
¿Por qué América Latina es un mercado importante?América Latina representa un mercado importante para la expansión de las
empresas globales debido a su grande población y su rápido crecimiento, el aumento de la
conectividad a Internet y el creciente poder adquisitivo de los consumidores Latinoamericanos. Con
una población de más de 650 millones de personas, un crecimiento significativo en la conectividad a
Internet (más del 70% de la población) y una clase media en rápido crecimiento, América Latina
presenta una oportunidad única para empresas globales que buscan llegar a nuevos mercados.
Con FacilitaPay como tu partner pagos local, tu empresa podrá navegar por los desafíos y
las oportunidades únicas que brinda esta región, permitiéndote integrar los métodos de pago y las
divisas más populares de la región, requeridas por los latinos para acceder a bienes y servicios
globales, todo a través de una única integración.Most popular payment methods by
countries.BrazilColombiaMexicoPIX (Pago
Instantáneo)El sistema de pago instantáneo creado
por el Banco Central de Brasil que está cambiando el mercado de pagos y
transferencias, permitiendo transaccionar en cuestión de segundos, en
cualquier momento del día, incluidos fines de semana y días festivos, de
manera segura y práctica.Tarjetas de crédito localesEl uso de tarjetas de crédito continua
en aumento. Sin embargo, estas son en su mayoría locales y aquellas
habilitadas para uso internacional representan tan solo el 24% de las
transacciones en línea. Empieza a aceptar tarjetas locales e
internacionales para aumentar tus ingresos.Tarjetas de débito localesLa tarjeta de débito es un método de
pago común en Brasil. Actualmente hay 116 millones de tarjetas de débito
activas en el país, con USD $168 m siendo transaccionados a través de
este método en el 2021. Aceptar tarjetas de débito te permitirá llegar a
una nueva base de consumidores y optimizar tus ingresos en Brasil.CuotasLos brasileños tienen la costumbre de
dividir el monto total de una compra realizada con tarjeta de crédito en
hasta 12 pagos mensuales. Ofrecer esta opción permite que tus clientes
puedan incrementar su presupuesto, y por ende el valor de su compra en
hasta un 30%.Boleto
BancárioAún existe una población no bancarizada
en Brasil y una cultura de dinero físico, el Boleto Bancario ha sido
utilizado históricamente por la población brasileña para pagar facturas
mensuales, servicios y también compras en línea. Ofrecerlo te permitirá
llegar a quienes no poseen cuentas bancarias, cómo también a aquellos
que prefieren pagar a través de este método.CriptoBrasil es el séptimo mercado de
criptomonedas más grande del mundo y está creciendo rápidamente. Con
FacilitaPay, puedes utilizar criptomonedas en tus flujos de on-ramp y
off-ramp y a la vez transaccionar con pagos locales.Brazil has the
seventh largest crypto market in the world and is growing rapidly. With
FacilitaPay, you can make settlement in crypto, on/off ramp solutions
and receive your local payments in stablecoins.Billeteras DigitalesLa popularidad de las billeteras
digitales está aumentando en Brasil, principalmente debido a los
beneficios que ofrecen, como la conveniencia, la seguridad y la
simplicidad de pago. Mantente a la vanguardia del mercado y comienza a
ofrecer billeteras digitales en tu operación de pagos en línea.Otros métodos de pagos alternativosBrasil tiene varias formas de pago en
línea además de las tarjetas de crédito. La transferencia bancaria y el
débito en línea son dos opciones de pago efectivas. Permite que tus
usuarios puedan utilizar su cuenta bancaria habitual para realizar un
pago instantáneo sin riesgo de fraudes para tu negocio.Tarjetas de créditoEste método de pago es una de las principales opciones para los colombianos a la hora de comprar en línea. Todas las tarjetas colombianas pueden realizar compras internacionales, pero los bancos y emisores locales imponen algunos obstáculos en este tipo de transacciones. La solución de procesamiento de tarjetas con FacilitaPay utiliza adquirencia local, lo que aumenta significativamente tus tasas de aprobación.Tarjetas de débito localesEl uso de tarjetas de débito en Colombia ha crecido rápidamente en los últimos años, con más de 20 millones de tarjetahabientes en el país en 2021. La aceptación de tarjetas en comercios de todos los tipos ha ido en aumento, lo que ha ayudado a impulsar el uso de las mismas entre los consumidores – sin necesitar cargar efectivo, y sin el riesgo de endeudarse. La solución de procesamiento de tarjetas con FacilitaPay utiliza adquirencia local, lo que aumenta significativamente tus tasas de aprobación.PSE (Pagos Seguros en Línea)La solución de pago alternativa preferida por los colombianos. Pagos Seguros en Línea permite a sus clientes realizar transferencias bancarias directamente desde las plataformas de sus bancos, de forma segura y sin recurrir a tarjetas de crédito.SuRedSiendo una de las redes de pago más grandes de Colombia, SuRed está asociada con más de 27.000 tiendas de conveniencia de diferentes marcas y presentes en 32 departamentos. Los clientes que elijan este método de pago reciben un vale con el que pueden pagar en efectivo en cualquiera de los puntos de SuRed.EfectyCon confirmación en tiempo real y una experiencia de usuario fácil e intuitiva, Efecty es uno de los vales de pago en efectivo más populares en Colombia, que puede ser pago en los 10.000 puntos de pago esparcidos por todo el país. Aumenta tus ventas al llegar a una gran parte de los clientes colombianos que prefieren pagar en efectivo, pudiendo llegar a la población no bancarizada.Pagos en CuotasLos pagos en cuotas son altamente populares en Colombia, más del 70% de las compras en línea hechas con tarjeta de crédito se pagan en cuotas. Los clientes pueden pagar sus compras en hasta 36 mes bancos que financian la operación para el usuario cobrándole una tasa de interés, cuyo valor depende de las condiciones del usuario y su banco.OXXOOXXO es la tienda más popular en México y uno de los métodos de pago más populares. Los mexicanos están acostumbrados a ir a las tiendas de conveniencia para pagar sus facturas y sus compras en línea. Empieza a aceptar OXXO como método de pago y llega a más consumidores.OXXO PayEl método de pago más conocido en México, ahora con confirmación del pago en tiempo real.Tarjetas de crédito y débito localesEl acceso a los servicios financieros sigue creciendo, al igual que el número de tarjetahabientes en México. Contar con adquirencia local hará que puedas incrementar significativamente las tasas de aprobación en transacciones, y aceptar todo tipo de tarjetas.Meses sin InteresesA través de los Meses sin Intereses, los consumidores pueden dividir las compras en 3, 6, 9 y hasta 12 pagos mensuales, pudiendo acomodar el pago a su presupuesto mensual. Ofrece cuotas a tus clientes mexicanos y permite que puedan realizar pagos de mayor valor.SPEISPEI está presente en cada transferencia interbancaria realizada por los Mexicanos. El sistema mexicano de banca en línea permite que clientes puedan pagar por sus compras a través de transferencias bancarias en línea utilizando SPEI.CriptoEl mercado de criptomonedas es cada vez más importante en México debido a la gran cantidad de personas no bancarizadas en el país, los altos niveles de entradas de remesas y el creciente interés en los activos digitales para protegerse contra la inflación y la inestabilidad económica. Con FacilitaPay como partner, puedes utilizar criptomonedas y pagos locales en tus flujos de on-ramp y off-ramp.Carteras digitalesLa popularidad de las billeteras digitales está aumentando en México, principalmente debido a los beneficios que ofrecen como conveniencia, seguridad y simplicidad de pago. Mantente a la vanguardia del mercado y comienza a ofrecer billeteras digitales en tu operación de pagos en línea.Otros métodos de pagos alternativosMéxico tiene varios métodos de pago además de las tarjetas de crédito. Los pagos con vales, Oxxo y billeteras digitales son métodos muy comunes utilizados por los consumidores en línea.Start offering all local payment methods in LatAm yo your customers-->Comienza ahoraTarjetasTarjetas de crédito y débito localesEn el mercado latinoamericano, las tarjetas de crédito y débito locales se han vuelto métodos de pago cada vez más relevantes. Son convenientes, seguros y ampliamente aceptados por los comercios que actúan en la región. Estas tarjetas son emitidas por bancos locales y se adaptan a las necesidades de los consumidores en cada país. Las tarjetas locales también ofrecen beneficios como tasas de interés más bajos, cuotas de manejo más económicas y programas de recompensas creados específicamente para el mercado local.El acceso al crédito y productos bancarios ha permitido que la población tenga un mayor poder adquisitivo, pudiendo comprar productos y servicios que antes estaban fuera de su alcance. Esto impulsa el crecimiento económico a medida que los consumidores gastan más dinero, las empresas amplían sus operaciones para satisfacer una mayor demanda. Además, las tarjetas de débito se han convertido en una herramienta esencial para aquellos que no tienen acceso a los servicios bancarios tradicionales, ofreciéndoles una forma segura y cómoda de administrar su dinero. En general, la popularidad de las tarjetas de crédito y débito locales en América Latina ha abierto nuevas oportunidades para individuos y empresas y ha ayudado a impulsar el crecimiento económico en la región.Con FacilitaPay como partner local, empresas globales pueden aceptar tarjetas locales e internacionales, lo que aumenta su alcance del mercado y las tasas de aprobación en sus transacciones.¿Cómo funciona la tarjeta de crédito?1El usuario selecciona la tarjeta de crédito como el método de pago.2El cliente rellena la información de su tarjeta de crédito.3La confirmación del pago se envía en tiempo real.Let&#039;s GoBeneficios de aceptar tarjetas de créditoAumento en las tasas de aprobaciónCon la adquirencia local, tu negocio obtiene las mejores tasas de aprobación.Menor riesgo de contracargosCuenta con el escudo de Facilitapay, una estrategia avanzada contra el fraude, sin costo adicional.Lógica de reintentoLa tecnología avanzada de machine-learning aumenta las tasas de aprobación al minimizar los pagos fallidos.Simplifica los pagosAdmite pagos recurrentes a través de tokenización de tarjetas y autorización previa.Facturación detalladaBilling DescriptorComienza a ofrecer todos los métodos de pago locales en América Latina a sus clientes.Increase your average ticket with installmentsOffering installment plans can be a game-changer for businesses looking to expand into Latin America. In many cases, consumers in the region prefer to use installment plans to help manage their budgets and make big-ticket purchases more affordable. This is especially true given that credit card limits in Latin America are typically very low, meaning that consumers may not be able to pay for large purchases all at once without exceeding their limits.By offering installment plans, businesses can make their products and services more accessible to consumers in Latin America, which can help drive sales and increase customer loyalty.SUPPORTED CREDIT CARDS
Alternative payment methods-->Alternative payment methods
In the era of digital transformation, payment methods have evolved beyond traditional credit and debit cards. Consumers are now seeking alternative payment options such as e-wallets, mobile payments, and online bank transfers. This trend is gaining momentum worldwide, especially among tech-savvy younger generations who prefer seamless, convenient, and secure payment methods.

By offering multiple payment options, merchants can provide a better shopping experience to their customers and increase their conversion rates. With just a single integration, merchants can accept payments through various channels, including credit cards, debit cards, digital wallets, and other alternative payment methods.

As more consumers move towards mobile-based payments, businesses must adapt to keep up with the changing landscape of payment options. Whether it is through the integration of mobile payment gateways or the acceptance of different payment methods, merchants must be willing to evolve and offer their customers the payment options they prefer.FacilitaPay with local acquiring x International acquiringLocal acquiringInternational and domestic card schemesBest performance in payments with a direct connection to local acquirers. This way issuer banks will have more local consumer data increasing the approval rates.Customers will have a local payment experience with all the services available, purchasing as it would in a local e-commerce.Installments and recurring billing available.International acquiringInternational schemes onlyWorse performance in payments, as the issuing banks, tend to refuse more transactions from international acquirers due to the lack of information.Limited for those who own internationally enabled cards. The shopping experience is not localized.No installments and no recurring billing.Start offering all local payment methods in LatAm yo your customersGet started',
                'created_at' => '2023-05-29 20:47:25',
                'updated_at' => '2023-06-01 18:09:30',
            ),
            15 => 
            array (
                'id' => 42,
                'pages_id' => 16,
                'locale' => 'en',
                'title' => 'Industries',
            'html' => '<section class="hero-6" style="background-image: url(\'/static/img/woman-laptop.jpg\');">
<div class="container pb-5 pt-5">
<div class="row justify-content-center flex-column-reverse flex-lg-row row-gap-3">
<div class="col-12 col-lg-5">
</div>
<div class="col-12 col-lg-5 d-flex flex-column gap-2">
<div>
<h6 class="txt-light-green">INDUSTRIES</h6>
<h3 class="txt-white"><strong>Built‑to‑fit payment solutions for your business industry in rising economies.</strong></h3>
</div>
<p class="txt-white">FacilitaPay understands your industry and payment needs. Discover what we have to get you ahead of the competition and reach more opportunities in the markets where we operate.</p>
<a href="optin.php" target="_blank" class="btn me-auto"><strong>Start Now</strong></a>
</div>
</div>
</div>
</section>

<section class="menu-2 bg-blue">
<div class="container pb-1 pt-1">
<div class="row">
<div class="col-12">
<ul>
<li><a href="#payments">Payments</a></li>
<li><a href="#crypto">Crypto</a></li>
<li><a href="#gaming">Gaming</a></li>
<li><a href="#remittance">Remittance</a></li>
<li><a href="#saas">Saas</a></li>
<li><a href="#streaming">Streaming</a></li>
<li><a href="#ecommerce">Ecommerce</a></li>
</ul>
</div>
</div>
</div>
</section>



<section class="content-9 bg-light-gray" id="investments">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 justify-content-center">
<div class="col-12 col-lg-6 d-flex flex-column gap-2">
<div class="img" style="background-image: url(\'/static/img/industries/investments.png\');"></div>
<h2><strong>INVESTMENTS & CFD\'S</strong></h2>
<p>Latin America\'s economies have been expanding in recent years, leading to an increase in disposable income and a growing middle class. This has led to an increase in demand for financial products such as stocks, bonds, and mutual funds. Additionally, the region has a young population with a high potential for long-term growth. <br><br>Latin Americans are ready to invest in global assets, however, there are certain gaps in financial and banking institutions which have led to a need of using local payment means to acquire these assets, and our mission at FacilitaPay has been to enable for global trading and investment firms.</p>
<div class="d-flex gap-2">
<img src="/static/img/logos/sproutfi.png" class="h-1">
<img src="/static/img/logos/stake.png" class="h-1">
<img src="/static/img/logos/tickmill.png" class="h-1">
<img src="/static/img/logos/easymarkets.png" class="h-1">
</div>
<a href="optin.php" class="btn me-auto"><strong>Start Now</strong></a>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Local KYC Features:</strong></h4>
<p>A robust and fully localized compliance process to help you onboard new investors in the region.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Instant Payments:</strong></h4>
<p>Receive and send payments in seconds to investors on a 24/7 basis.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Mitigate risk and chargebacks:</strong></h4>
<p>By accepting alternative payment options such as PIX, bank transfers and cash.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
</div>
</div>
</div>
</section>


<section class="content-9 bg-white" id="payments">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 justify-content-center flex-column-reverse flex-lg-row">
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>White label payment solution:</strong></h4>
<p>To be customized with your company’s look and feel.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Flexible payment flows:</strong></h4>
<p>Easily adapted to fit your technical needs and operational requirements.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Diverse partnership opportunities:</strong></h4>
<p>Direct partnerships, PSP agreements and referral programs.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
</div>
<div class="col-12 col-lg-6 d-flex flex-column gap-2">
<div class="img" style="background-image: url(\'/static/img/img.jpg\');"></div>
<h2><strong>PAYMENTS</strong></h2>
<p>The payments market in Latin America is expected to reach $1.05 trillion by 2023, driven by an increase in e-commerce, digital transactions and a boost in the interactions among Latin Americans with global and local brands across several different verticals.</p>
<p>Gain speed-to-market and optimize costs by using a FacilitaPay’s local payments structure in Latin America; let us handle all the local regulations, partnerships and technology needed to operate in the region while you focus on your core business.</p>
<div class="d-flex gap-2">
<!--                  <img src="/static/img/logos/texcent.png" alt="texcent" class="h-1">-->
<img src="/static/img/logos/flutterwave.png" class="h-1">
<img src="/static/img/logos/boku.png" class="h-1">
<img src="/static/img/logos/wyre.png" class="h-1">
</div>
<a href="optin.php" class="btn me-auto"><strong>Start Now</strong></a>
</div>
</div>
</div>
</section>


<section class="content-9 bg-light-gray" id="crypto">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 justify-content-center">
<div class="col-12 col-lg-6 d-flex flex-column gap-2">
<div class="img" style="background-image: url(\'/static/img/industries/crypto.png\');"></div>
<h2><strong>CRYPTO</strong></h2>
<p>The crypto world is constantly growing, with millions of new users joining the market annually. The Latin American region has witnessed a particular growth during the last few years, with a significant increase in the interest in cryptocurrency across South America.</p>
<p>During the last year alone, crypto adoption in Latin America grew by a staggering 40%, making it one of the most rapidly developing markets in the world. According to analysts, Latin American crypto users received 562 billion USD worth of crypto from July 2021 to June 2022.</p>
<div class="d-flex gap-2">
<img src="/static/img/logos/bybit-blue.png" class="h-1">
<img src="/static/img/logos/bitso-blue.png" class="h-1">
<img src="/static/img/logos/kraken.png" class="h-1">
<img src="/static/img/logos/okx-blue.png" class="h-1">
</div>
<a href="optin.php" class="btn me-auto"><strong>Start Now</strong></a>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Local KYC Features:</strong></h4>
<p>A robust and fully localized compliance process to help you onboard new users in the region.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Instant Payments:</strong></h4>
<p>Receive and send payments in seconds to users on a 24/7 basis.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Mitigate risk and chargebacks:</strong></h4>
<p>By accepting alternative payment options such as PIX, bank transfers and cash.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
</div>
</div>
</div>
</section>


<section class="content-9 bg-white" id="gaming">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 justify-content-center flex-column-reverse flex-lg-row">
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Avoid checkout abandonment:</strong></h4>
<p>No need to exit redirect from your checkout page.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Convert more gamers from freemium to premium, as fast as you can:</strong></h4>
<p>Easy and low cost payment methods. You dont need to loose anything in your gameplay.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Let them pay in the way they want:</strong></h4>
<p>Multiple payment methods beside the standard credit/debit cards. Easy way to pay with: PIX, SPEI, CODI, PSE, crypto currencies and many others.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
</div>
<div class="col-12 col-lg-6 d-flex flex-column gap-2">
<div class="img" style="background-image: url(\'/static/img/industries/gaming.png\');"></div>
<h2><strong>GAMING</strong></h2>
<p>With over 270M gamers and a projected total revenue of USD 5.1bi by 2024, Latin America is one of the fastest-growing markets for gaming. Opportunities are seamless for global gaming merchants looking to grow their revenue, but many loose out by not entering this market - or doing it without a proper local partner.</p>
<p>With FacilitaPay, you will be ready to seize the opportunities in Latin America by offering all the local experience that your users need, allowing them to pay in the way they want to. Our payment solutions helps you avoid abandoned carts during checkout, while significantly increasing your conversion rates.</p>
<div class="d-flex gap-2">
<!--                  <img src="/static/img/logos-ex/logo-1.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-2.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-3.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-4.svg" class="h-1">-->
</div>
<a href="optin.php" class="btn me-auto"><strong>Start Now</strong></a>
</div>
</div>
</div>
</section>

<section class="content-9 bg-light-gray" id="remittance">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 justify-content-center">
<div class="col-12 col-lg-6 d-flex flex-column gap-2">
<div class="img" style="background-image: url(\'/static/img/industries/remitance.png\');"></div>
<h2><strong>REMITTANCE</strong></h2>
<p>Latin America remittances have been growing at a pace of over 20% YoY in the last years. In 2022, for example, more than 100 billion dollars where transacted in and out of the region - three times the amount transacted in 2005.</p>
<p>Remittances in the region are both an income source for families and a way of reaching global suppliers and partners, being a significant part of the local economies.</p>
<div class="d-flex gap-2">
<img src="/static/img/logos/belmoney.png" class="h-1">
<img src="/static/img/logos/global66.png" class="h-1">
<img src="/static/img/logos/wyre.png" class="h-1">
<img src="/static/img/logos/tempofrance.png" class="h-2">
</div>
<a href="optin.php" class="btn me-auto"><strong>Start Now</strong></a>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Send money everywhere:</strong></h4>
<p>Many people in Latin America rely on informal networks, such as friends and family members, to send and receive money, rather than using formal financial institutions.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Low costs and speed:</strong></h4>
<p>The remittance industry in Latin America is characterized by high fees and a lack of competition, which makes it difficult for people to afford to send money to their families.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Work with crypto with a more direct transaction without the banks institutions:</strong></h4>
<p>Cryptocurrency is increasingly being used as a way to send remittances from people living abroad to their families in Latin America. This is due to the high fees and long wait times associated with traditional remittance services.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
</div>
</div>
</div>
</section>

<section class="content-9 bg-white" id="saas">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 justify-content-center flex-column-reverse flex-lg-row">
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Create your audience:</strong></h4>
<p>By enabling all the local payment methods and currencies they require to pay online.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Enhanced payments performance:</strong></h4>
<p>Through localized billing we provide you with the best-in-market approval rates.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Processing large payments:</strong></h4>
<p>In a fully compliant and cost-efficient way, without the need for local entities.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Speed-to-market:</strong></h4>
<p>Expand to LatAm’s main markets through one single integration.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
</div>
<div class="col-12 col-lg-6 d-flex flex-column gap-2">
<div class="img" style="background-image: url(\'/static/img/industries/saas.png\');"></div>
<h2><strong>SAAS</strong></h2>
<p>Latin America is the 4th largest online region with more than 530M internet users. The SaaS market in Latin America has been growing at an annual rate of 20% from 2022 to 2025, which has been driven by factors such as the need for cost-effective solutions and the increasing availability of reliable internet connectivity.</>
<p>The region represents a low-hanging-fruit for SaaS companies, with a relatively low adoption of SaaS solutions compared to more developed countries, and a lot of room for growth in the years to come. Count on a local payments partner like FacilitaPay to unlock the opportunities for your company in this region.</p>
<div class="d-flex gap-2">
<img src="/static/img/logos/floori.png" class="h-1">
<!--                  <img src="/static/img/logos-ex/logo-2.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-3.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-4.svg" class="h-1">-->
</div>
<a href="optin.php" class="btn me-auto"><strong>Start Now</strong></a>
</div>
</div>
</div>
</section>

<section class="content-9 bg-light-gray" id="streaming">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 justify-content-center">
<div class="col-12 col-lg-6 d-flex flex-column gap-2">
<div class="img" style="background-image: url(\'/static/img/industries/streaming.png\');"></div>
<h2><strong>STREAMING</strong></h2>
<p>After North America, Latin America is the second most attractive market for streaming companies to expand to, with a market potential of $11.4 billion, it’s the second-fastest growing streaming market globally and also the one with the greatest demand for music streaming services.</p>
<p>Unlock millions of eager subscribers in Latin America by localizing your platform’s payments strategy with FacilitaPay.</p>
<div class="d-flex gap-2">
<!--                  <img src="/static/img/logos-ex/logo-1.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-2.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-3.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-4.svg" class="h-1">-->
</div>
<a href="optin.php" class="btn me-auto"><strong>Start Now</strong></a>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Attract loyal subscribers:</strong></h4>
<p>By enabling all the local payment methods and currencies they require to pay online.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Enhanced payments performance:</strong></h4>
<p>Through localized billing we provide you with the best-in-market approval rates.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Speed-to-market:</strong></h4>
<p>Expand to LatAm’s main markets through one single integration.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
</div>
</div>
</div>
</section>

<section class="content-9 bg-white" id="ecommerce">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 justify-content-center flex-column-reverse flex-lg-row">
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column  gap-1">
<h4><strong>Sell through LatAm:</strong></h4>
<p>The e-commerce market in LatAm is expected to reach $93 billion by 2025, driven by an increase in internet penetration and smartphone adoption.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column  gap-1">
<h4><strong>Charge and payout everywhere:</strong></h4>
<p>Cross-border e-commerce is also on the rise in LatAm, with many consumers in the region buying goods and services from other countries. This trend is driven by the availability of a wide range of products and better prices offered by international e-commerce platforms.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column gap-1">
<h4><strong>Buy now, pay later:</strong></h4>
<p>With FacilitaPay, our merchants can count on card installment options, better approval rates, and can offer all local payment methods.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
</div>
<div class="col-12 col-lg-6 d-flex flex-column gap-2">
<div class="img" style="background-image: url(\'/static/img/industries/ecommerce.png\');"></div>
<h2><strong>ECOMMERCE</strong></h2>
<p>The e-commerce market in Latin America has seen a powerful adoption in the last decades, with its volumes growing at rates of 25% between 2021 and 2025, and a revenue of more than US$700 billion, according to Americas Market Intelligence (AMI).</p>
<p>As the demand grows for local and international goods among Latin Americans, the need to localize and provide them access becomes more relevant. Count on FacilitaPay to provide your Latin American clients with all the tools and means they need to pay you.</p>
<ul>
<li> · Brazil: E-commerce market worth $153 billion in 2021</li>
<li> · Mexico: E-commerce market worth $48.6 billion in 2021</li>
<li> · Colombia: E-commerce market worth $22.4 billion in 2021</li>
<li> · Argentina: E-commerce market worth $18 billion in 2021</li>
<li> · Chile: E-commerce market worth $15.65 billion in 2021</li>
<li> · Peru: E-commerce market worth $13 billion in 2021</li>
</ul>

<div class="d-flex gap-2">
<img src="/static/img/logos/octoshop.png" class="h-1">
<!--                  <img src="/static/img/logos-ex/logo-2.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-3.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-4.svg" class="h-1">-->
</div>
<a href="optin.php" class="btn me-auto"><strong>Start Now</strong></a>
</div>
</div>
</div>
</section>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Industries',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 17:48:18',
                'updated_at' => '2023-05-30 17:48:18',
            ),
            16 => 
            array (
                'id' => 43,
                'pages_id' => 16,
                'locale' => 'pt',
                'title' => 'Industries',
            'html' => '<section class="hero-6" style="background-image: url(\'/static/img/woman-laptop.jpg\');">
<div class="container pb-5 pt-5">
<div class="row justify-content-center flex-column-reverse flex-lg-row row-gap-3">
<div class="col-12 col-lg-5">
</div>
<div class="col-12 col-lg-5 d-flex flex-column gap-2">
<div>
<h6 class="txt-light-green">INDUSTRIES</h6>
<h3 class="txt-white"><strong>Built‑to‑fit payment solutions for your business industry in rising economies.</strong></h3>
</div>
<p class="txt-white">FacilitaPay understands your industry and payment needs. Discover what we have to get you ahead of the competition and reach more opportunities in the markets where we operate.</p>
<a href="optin.php" target="_blank" class="btn me-auto"><strong>Start Now</strong></a>
</div>
</div>
</div>
</section>

<section class="menu-2 bg-blue">
<div class="container pb-1 pt-1">
<div class="row">
<div class="col-12">
<ul>
<li><a href="#payments">Payments</a></li>
<li><a href="#crypto">Crypto</a></li>
<li><a href="#gaming">Gaming</a></li>
<li><a href="#remittance">Remittance</a></li>
<li><a href="#saas">Saas</a></li>
<li><a href="#streaming">Streaming</a></li>
<li><a href="#ecommerce">Ecommerce</a></li>
</ul>
</div>
</div>
</div>
</section>



<section class="content-9 bg-light-gray" id="investments">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 justify-content-center">
<div class="col-12 col-lg-6 d-flex flex-column gap-2">
<div class="img" style="background-image: url(\'/static/img/industries/investments.png\');"></div>
<h2><strong>INVESTMENTS & CFD\'S</strong></h2>
<p>Latin America\'s economies have been expanding in recent years, leading to an increase in disposable income and a growing middle class. This has led to an increase in demand for financial products such as stocks, bonds, and mutual funds. Additionally, the region has a young population with a high potential for long-term growth. <br><br>Latin Americans are ready to invest in global assets, however, there are certain gaps in financial and banking institutions which have led to a need of using local payment means to acquire these assets, and our mission at FacilitaPay has been to enable for global trading and investment firms.</p>
<div class="d-flex gap-2">
<img src="/static/img/logos/sproutfi.png" class="h-1">
<img src="/static/img/logos/stake.png" class="h-1">
<img src="/static/img/logos/tickmill.png" class="h-1">
<img src="/static/img/logos/easymarkets.png" class="h-1">
</div>
<a href="optin.php" class="btn me-auto"><strong>Start Now</strong></a>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Local KYC Features:</strong></h4>
<p>A robust and fully localized compliance process to help you onboard new investors in the region.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Instant Payments:</strong></h4>
<p>Receive and send payments in seconds to investors on a 24/7 basis.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Mitigate risk and chargebacks:</strong></h4>
<p>By accepting alternative payment options such as PIX, bank transfers and cash.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
</div>
</div>
</div>
</section>


<section class="content-9 bg-white" id="payments">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 justify-content-center flex-column-reverse flex-lg-row">
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>White label payment solution:</strong></h4>
<p>To be customized with your company’s look and feel.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Flexible payment flows:</strong></h4>
<p>Easily adapted to fit your technical needs and operational requirements.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Diverse partnership opportunities:</strong></h4>
<p>Direct partnerships, PSP agreements and referral programs.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
</div>
<div class="col-12 col-lg-6 d-flex flex-column gap-2">
<div class="img" style="background-image: url(\'/static/img/img.jpg\');"></div>
<h2><strong>PAYMENTS</strong></h2>
<p>The payments market in Latin America is expected to reach $1.05 trillion by 2023, driven by an increase in e-commerce, digital transactions and a boost in the interactions among Latin Americans with global and local brands across several different verticals.</p>
<p>Gain speed-to-market and optimize costs by using a FacilitaPay’s local payments structure in Latin America; let us handle all the local regulations, partnerships and technology needed to operate in the region while you focus on your core business.</p>
<div class="d-flex gap-2">
<!--                  <img src="/static/img/logos/texcent.png" alt="texcent" class="h-1">-->
<img src="/static/img/logos/flutterwave.png" class="h-1">
<img src="/static/img/logos/boku.png" class="h-1">
<img src="/static/img/logos/wyre.png" class="h-1">
</div>
<a href="optin.php" class="btn me-auto"><strong>Start Now</strong></a>
</div>
</div>
</div>
</section>


<section class="content-9 bg-light-gray" id="crypto">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 justify-content-center">
<div class="col-12 col-lg-6 d-flex flex-column gap-2">
<div class="img" style="background-image: url(\'/static/img/industries/crypto.png\');"></div>
<h2><strong>CRYPTO</strong></h2>
<p>The crypto world is constantly growing, with millions of new users joining the market annually. The Latin American region has witnessed a particular growth during the last few years, with a significant increase in the interest in cryptocurrency across South America.</p>
<p>During the last year alone, crypto adoption in Latin America grew by a staggering 40%, making it one of the most rapidly developing markets in the world. According to analysts, Latin American crypto users received 562 billion USD worth of crypto from July 2021 to June 2022.</p>
<div class="d-flex gap-2">
<img src="/static/img/logos/bybit-blue.png" class="h-1">
<img src="/static/img/logos/bitso-blue.png" class="h-1">
<img src="/static/img/logos/kraken.png" class="h-1">
<img src="/static/img/logos/okx-blue.png" class="h-1">
</div>
<a href="optin.php" class="btn me-auto"><strong>Start Now</strong></a>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Local KYC Features:</strong></h4>
<p>A robust and fully localized compliance process to help you onboard new users in the region.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Instant Payments:</strong></h4>
<p>Receive and send payments in seconds to users on a 24/7 basis.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Mitigate risk and chargebacks:</strong></h4>
<p>By accepting alternative payment options such as PIX, bank transfers and cash.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
</div>
</div>
</div>
</section>


<section class="content-9 bg-white" id="gaming">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 justify-content-center flex-column-reverse flex-lg-row">
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Avoid checkout abandonment:</strong></h4>
<p>No need to exit redirect from your checkout page.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Convert more gamers from freemium to premium, as fast as you can:</strong></h4>
<p>Easy and low cost payment methods. You dont need to loose anything in your gameplay.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Let them pay in the way they want:</strong></h4>
<p>Multiple payment methods beside the standard credit/debit cards. Easy way to pay with: PIX, SPEI, CODI, PSE, crypto currencies and many others.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
</div>
<div class="col-12 col-lg-6 d-flex flex-column gap-2">
<div class="img" style="background-image: url(\'/static/img/industries/gaming.png\');"></div>
<h2><strong>GAMING</strong></h2>
<p>With over 270M gamers and a projected total revenue of USD 5.1bi by 2024, Latin America is one of the fastest-growing markets for gaming. Opportunities are seamless for global gaming merchants looking to grow their revenue, but many loose out by not entering this market - or doing it without a proper local partner.</p>
<p>With FacilitaPay, you will be ready to seize the opportunities in Latin America by offering all the local experience that your users need, allowing them to pay in the way they want to. Our payment solutions helps you avoid abandoned carts during checkout, while significantly increasing your conversion rates.</p>
<div class="d-flex gap-2">
<!--                  <img src="/static/img/logos-ex/logo-1.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-2.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-3.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-4.svg" class="h-1">-->
</div>
<a href="optin.php" class="btn me-auto"><strong>Start Now</strong></a>
</div>
</div>
</div>
</section>

<section class="content-9 bg-light-gray" id="remittance">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 justify-content-center">
<div class="col-12 col-lg-6 d-flex flex-column gap-2">
<div class="img" style="background-image: url(\'/static/img/industries/remitance.png\');"></div>
<h2><strong>REMITTANCE</strong></h2>
<p>Latin America remittances have been growing at a pace of over 20% YoY in the last years. In 2022, for example, more than 100 billion dollars where transacted in and out of the region - three times the amount transacted in 2005.</p>
<p>Remittances in the region are both an income source for families and a way of reaching global suppliers and partners, being a significant part of the local economies.</p>
<div class="d-flex gap-2">
<img src="/static/img/logos/belmoney.png" class="h-1">
<img src="/static/img/logos/global66.png" class="h-1">
<img src="/static/img/logos/wyre.png" class="h-1">
<img src="/static/img/logos/tempofrance.png" class="h-2">
</div>
<a href="optin.php" class="btn me-auto"><strong>Start Now</strong></a>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Send money everywhere:</strong></h4>
<p>Many people in Latin America rely on informal networks, such as friends and family members, to send and receive money, rather than using formal financial institutions.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Low costs and speed:</strong></h4>
<p>The remittance industry in Latin America is characterized by high fees and a lack of competition, which makes it difficult for people to afford to send money to their families.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Work with crypto with a more direct transaction without the banks institutions:</strong></h4>
<p>Cryptocurrency is increasingly being used as a way to send remittances from people living abroad to their families in Latin America. This is due to the high fees and long wait times associated with traditional remittance services.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
</div>
</div>
</div>
</section>

<section class="content-9 bg-white" id="saas">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 justify-content-center flex-column-reverse flex-lg-row">
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Create your audience:</strong></h4>
<p>By enabling all the local payment methods and currencies they require to pay online.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Enhanced payments performance:</strong></h4>
<p>Through localized billing we provide you with the best-in-market approval rates.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Processing large payments:</strong></h4>
<p>In a fully compliant and cost-efficient way, without the need for local entities.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Speed-to-market:</strong></h4>
<p>Expand to LatAm’s main markets through one single integration.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
</div>
<div class="col-12 col-lg-6 d-flex flex-column gap-2">
<div class="img" style="background-image: url(\'/static/img/industries/saas.png\');"></div>
<h2><strong>SAAS</strong></h2>
<p>Latin America is the 4th largest online region with more than 530M internet users. The SaaS market in Latin America has been growing at an annual rate of 20% from 2022 to 2025, which has been driven by factors such as the need for cost-effective solutions and the increasing availability of reliable internet connectivity.</>
<p>The region represents a low-hanging-fruit for SaaS companies, with a relatively low adoption of SaaS solutions compared to more developed countries, and a lot of room for growth in the years to come. Count on a local payments partner like FacilitaPay to unlock the opportunities for your company in this region.</p>
<div class="d-flex gap-2">
<img src="/static/img/logos/floori.png" class="h-1">
<!--                  <img src="/static/img/logos-ex/logo-2.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-3.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-4.svg" class="h-1">-->
</div>
<a href="optin.php" class="btn me-auto"><strong>Start Now</strong></a>
</div>
</div>
</div>
</section>

<section class="content-9 bg-light-gray" id="streaming">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 justify-content-center">
<div class="col-12 col-lg-6 d-flex flex-column gap-2">
<div class="img" style="background-image: url(\'/static/img/industries/streaming.png\');"></div>
<h2><strong>STREAMING</strong></h2>
<p>After North America, Latin America is the second most attractive market for streaming companies to expand to, with a market potential of $11.4 billion, it’s the second-fastest growing streaming market globally and also the one with the greatest demand for music streaming services.</p>
<p>Unlock millions of eager subscribers in Latin America by localizing your platform’s payments strategy with FacilitaPay.</p>
<div class="d-flex gap-2">
<!--                  <img src="/static/img/logos-ex/logo-1.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-2.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-3.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-4.svg" class="h-1">-->
</div>
<a href="optin.php" class="btn me-auto"><strong>Start Now</strong></a>
</div>
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Attract loyal subscribers:</strong></h4>
<p>By enabling all the local payment methods and currencies they require to pay online.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Enhanced payments performance:</strong></h4>
<p>Through localized billing we provide you with the best-in-market approval rates.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-white border-radius gap-1 p-2">
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Speed-to-market:</strong></h4>
<p>Expand to LatAm’s main markets through one single integration.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
</div>
</div>
</div>
</section>

<section class="content-9 bg-white" id="ecommerce">
<div class="container pb-4 pt-4">
<div class="row row-gap-3 justify-content-center flex-column-reverse flex-lg-row">
<div class="col-12 col-lg-4 d-flex flex-column gap-1">
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column  gap-1">
<h4><strong>Sell through LatAm:</strong></h4>
<p>The e-commerce market in LatAm is expected to reach $93 billion by 2025, driven by an increase in internet penetration and smartphone adoption.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column  gap-1">
<h4><strong>Charge and payout everywhere:</strong></h4>
<p>Cross-border e-commerce is also on the rise in LatAm, with many consumers in the region buying goods and services from other countries. This trend is driven by the availability of a wide range of products and better prices offered by international e-commerce platforms.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2">
<div class="d-flex flex-column gap-1">
<h4><strong>Buy now, pay later:</strong></h4>
<p>With FacilitaPay, our merchants can count on card installment options, better approval rates, and can offer all local payment methods.</p>
</div>
<img src="/static/img/ico-check.svg" class="w-1">
</div>
</div>
<div class="col-12 col-lg-6 d-flex flex-column gap-2">
<div class="img" style="background-image: url(\'/static/img/industries/ecommerce.png\');"></div>
<h2><strong>ECOMMERCE</strong></h2>
<p>The e-commerce market in Latin America has seen a powerful adoption in the last decades, with its volumes growing at rates of 25% between 2021 and 2025, and a revenue of more than US$700 billion, according to Americas Market Intelligence (AMI).</p>
<p>As the demand grows for local and international goods among Latin Americans, the need to localize and provide them access becomes more relevant. Count on FacilitaPay to provide your Latin American clients with all the tools and means they need to pay you.</p>
<ul>
<li> · Brazil: E-commerce market worth $153 billion in 2021</li>
<li> · Mexico: E-commerce market worth $48.6 billion in 2021</li>
<li> · Colombia: E-commerce market worth $22.4 billion in 2021</li>
<li> · Argentina: E-commerce market worth $18 billion in 2021</li>
<li> · Chile: E-commerce market worth $15.65 billion in 2021</li>
<li> · Peru: E-commerce market worth $13 billion in 2021</li>
</ul>

<div class="d-flex gap-2">
<img src="/static/img/logos/octoshop.png" class="h-1">
<!--                  <img src="/static/img/logos-ex/logo-2.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-3.svg" class="h-1">-->
<!--                  <img src="/static/img/logos-ex/logo-4.svg" class="h-1">-->
</div>
<a href="optin.php" class="btn me-auto"><strong>Start Now</strong></a>
</div>
</div>
</div>
</section>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Industries',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 17:48:18',
                'updated_at' => '2023-05-30 17:48:18',
            ),
            17 => 
            array (
                'id' => 44,
                'pages_id' => 16,
                'locale' => 'es',
                'title' => 'Industries',
                'html' => '<body class="home"><section id="i8cr" class="hero-6"><div class="container pb-5 pt-5"><div class="row justify-content-center flex-column-reverse flex-lg-row row-gap-3"><div class="col-12 col-lg-5">
</div><div class="col-12 col-lg-5 d-flex flex-column gap-2"><div><h6 class="txt-light-green">INDUSTRIAS</h6><h3 class="txt-white"><strong id="i53v8"><br/>Soluciones de pago adaptadas la industria de tu empresa en economías emergentes.<br/></strong></h3></div><p class="txt-white">FacilitaPay entiende tu operación y las necesidades de pago de tu empresa. Descubre las soluciones que tenemos para ponerte al frente de la competencia, y aprovechar todas las oportunidades en los mercados donde operamos.</p><a href="optin.php" target="_blank" class="btn me-auto"><strong id="i1spl">Comienza ahora</strong></a></div></div></div></section><section class="menu-2 bg-blue"><div class="container pb-1 pt-1"><div class="row"><div class="col-12"><ul><li><a href="#payments" id="iycu3">Pagos</a></li><li><a href="#crypto" id="iyqhf">Cripto</a></li><li><a href="#gaming" id="i9wnl">Juegos </a></li><li><a href="#remittance" id="ifsia">Remesas</a></li><li><a href="#saas">Saas</a></li><li><a href="#streaming">Streaming</a></li><li><a href="#ecommerce" id="ivcr1">Ecommerce</a></li></ul></div></div></div></section><section id="investments" class="content-9 bg-light-gray"><div class="container pb-4 pt-4"><div class="row row-gap-3 justify-content-center"><div class="col-12 col-lg-6 d-flex flex-column gap-2"><div id="ig55l" class="img"></div><h2><strong id="icllt">INVERSIONES Y CFD&#039;S</strong></h2><p id="ie16i">Las economías latinoamericanas han crecido significativamente en los últimos años, lo que ha llevado a un aumento del ingreso disponible y a un crecimiento en la clase media. Esto ha incrementado la demanda de productos financieros como acciones, bonos y fondos mutuos. Además, la región tiene una población joven y digitalizada con un alto potencial de crecimiento a largo plazo.<br/><br/>Los latinoamericanos están listos para invertir en activos globales; sin embargo, existen ciertas brechas en el ecosistema de pagos que hacen necesario el uso de medios de pago locales para adquirir estos activos, y nuestra misión en FacilitaPay es conectar a empresas de inversiones con sus usuarios en Latinoamérica.<br/></p><div class="d-flex gap-2"><img src="/static/img/logos/sproutfi.png" class="h-1"/><img src="/static/img/logos/stake.png" class="h-1"/><img src="/static/img/logos/tickmill.png" class="h-1"/><img src="/static/img/logos/easymarkets.png" class="h-1"/></div><a href="optin.php" class="btn me-auto"><strong>Start Now</strong></a></div><div class="col-12 col-lg-4 d-flex flex-column gap-1"><div class="align-items-start d-flex bg-white border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="iz9wq">Local KYC Features:</strong></h4><p>A robust and fully localized compliance process to help you onboard new investors in the region.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div><div class="align-items-start d-flex bg-white border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong>Instant Payments:</strong></h4><p>Receive and send payments in seconds to investors on a 24/7 basis.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div><div class="align-items-start d-flex bg-white border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong>Mitigate risk and chargebacks:</strong></h4><p>By accepting alternative payment options such as PIX, bank transfers and cash.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div></div></div></div></section><section id="payments" class="content-9 bg-white"><div class="container pb-4 pt-4"><div class="row row-gap-3 justify-content-center flex-column-reverse flex-lg-row"><div class="col-12 col-lg-4 d-flex flex-column gap-1"><div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="irwyq">Solución de pago de marca blanca:</strong></h4><p id="i57pw">Para que puedas personalizarlo a las necesidades de tu negocio.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div><div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="iy5z2l">Flujos de pago flexibles:</strong></h4><p id="if1f9o">Que se adaptan fácilmente para satisfacer tus requerimientos técnicos y operativos.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div><div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="ik3bxk">Varias oportunidades de alianzas:</strong></h4><p id="i5m3p2">Alianzas directas, acuerdos PSP y programas de referidos.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div></div><div class="col-12 col-lg-6 d-flex flex-column gap-2"><div id="i98126" class="img"></div><h2><strong>PAYMENTS</strong></h2><p id="i3il5f">Se espera que el mercado de pagos en América Latina alcance los $ 1.05 billones en el 2023, impulsado por un aumento en el comercio electrónico, las transacciones digitales y el incremento de las interacciones entre los latinoamericanos y empresas de diferentes industrias con presencia digital.<br/><br/>Gana velocidad en el mercado y optimiza los costos de tu empresa utilizando la estructura de pagos locales diseñada por FacilitaPay para América Latina; permite que nos encargarnos de todas las regulaciones locales, las asociaciones y tecnologías necesarias para que puedas operar en Latinoamérica, y concentrar tus esfuerzos en tu actividad principal.<br/></p><div class="d-flex gap-2"><!--                  <img src="/static/img/logos/texcent.png" alt="texcent" class="h-1">--><img src="/static/img/logos/flutterwave.png" class="h-1"/><img src="/static/img/logos/boku.png" class="h-1"/><img src="/static/img/logos/wyre.png" class="h-1"/></div><a href="optin.php" class="btn me-auto"><strong id="irj2wv">Comienza ahora</strong></a></div></div></div></section><section id="crypto" class="content-9 bg-light-gray"><div class="container pb-4 pt-4"><div class="row row-gap-3 justify-content-center"><div class="col-12 col-lg-6 d-flex flex-column gap-2"><div id="ilxngp" class="img"></div><h2><strong id="i6ycr3">CRIPTO</strong></h2><p id="ii2u0j">El mundo de las criptomonedas está en constante crecimiento, millones de nuevos usuarios ingresan al mercado anualmente. Latinoamericana ha experimentado un crecimiento exponencial en los últimos años, con un aumento significativo en el interés por las criptomonedas en diversos mercados de la región.<br/><br/>Durante el 2022, la adopción de criptomonedas en América Latina ha alcanzado un crecimiento de 40 por ciento, convirtiendo a la región en uno de los mercados de más rápido desarrollo en el mundo. Según los analistas, los usuarios de criptomonedas latinoamericanos recibieron el equivalente a más de USD $ 562 mil millones a través de criptomonedas desde julio de 2021 hasta junio de 2022.<br/></p><div class="d-flex gap-2"><img src="/static/img/logos/bybit-blue.png" class="h-1"/><img src="/static/img/logos/bitso-blue.png" class="h-1"/><img src="/static/img/logos/kraken.png" class="h-1"/><img src="/static/img/logos/okx-blue.png" class="h-1"/></div><a href="optin.php" class="btn me-auto"><strong id="i752pu">Comienza ahora</strong></a></div><div class="col-12 col-lg-4 d-flex flex-column gap-1"><div class="align-items-start d-flex bg-white border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="iz0yp6">Recursos locales de KYC:</strong></h4><p id="ihmr4v">Un proceso de cumplimiento sólido y totalmente localizado para ayudarte a incorporar nuevos usuarios en la región.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div><div class="align-items-start d-flex bg-white border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="izf6ve">Pagos instantáneos:</strong></h4><p id="ix14kh">Recibe y envía pagos a tus usuarios en segundos, las 24 horas del día, los 7 días de la semana.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div><div class="align-items-start d-flex bg-white border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="iq4bfx">Reduce el riesgo y los fraudes:</strong></h4><p id="i9tfrc">Acepta opciones de pago alternativas como PIX, transferencias bancarias y efectivo.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div></div></div></div></section><section id="gaming" class="content-9 bg-white"><div class="container pb-4 pt-4"><div class="row row-gap-3 justify-content-center flex-column-reverse flex-lg-row"><div class="col-12 col-lg-4 d-flex flex-column gap-1"><div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="iwq6gc">Evita los carritos abandonados:</strong></h4><p id="if1luq">Tus usuarios no tendrán que abandonar tu página u aplicación durante el checkout.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div><div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="iu2skh">Convierte más jugadores de Freemium a Premium rápidamente:</strong></h4><p id="ixbpql">Métodos de pago fáciles de usar y de bajo costo.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div><div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="izqhiu">Deja a tus usuarios pagar de la forma que prefieran:</strong></h4><p id="im2k6z">Varios métodos de pago además de las tradicionales tarjetas de crédito y débito. Acepta pagos fácilmente de pagar con: PIX, SPEI, CODI, PSE, criptomonedas y muchos otros. </p></div><img src="/static/img/ico-check.svg" class="w-1"/></div></div><div class="col-12 col-lg-6 d-flex flex-column gap-2"><div id="iisd29" class="img"></div><h2><strong id="ifk2wf">JUEGOS ONLINE</strong></h2><p id="iscoe2">Con más de 270 millones de jugadores y un ingreso total proyectado de $ 5.1 mil millones para 2024, América Latina es uno de los mercados de juegos de más rápido crecimiento. Las oportunidades son infinitas para empresas de juegos globales que buscan aumentar sus ingresos, y al no entrar a este mercado estas dejando dinero sobre la mesa, o al hacerlo sin el partner local adecuado.<br/><br/>Con FacilitaPay, estarás listo para aprovechar las oportunidades en América Latina, brindándole a tus usuarios toda la experiencia local que necesitan, y permitiéndoles pagar de la manera que quieran. Nuestras soluciones de pago te ayudan a evitar carritos abandonados durante el proceso de pago, lo que aumenta significativamente sus tasas de conversión.<br/></p><div class="d-flex gap-2"><!--                  <img src="/static/img/logos-ex/logo-1.svg" class="h-1">--><!--                  <img src="/static/img/logos-ex/logo-2.svg" class="h-1">--><!--                  <img src="/static/img/logos-ex/logo-3.svg" class="h-1">--><!--                  <img src="/static/img/logos-ex/logo-4.svg" class="h-1">--></div><a href="optin.php" class="btn me-auto"><strong id="in0vvk">Comienza ahora</strong></a></div></div></div></section><section id="remittance" class="content-9 bg-light-gray"><div class="container pb-4 pt-4"><div class="row row-gap-3 justify-content-center"><div class="col-12 col-lg-6 d-flex flex-column gap-2"><div id="i46p4f" class="img"></div><h2><strong id="i3yxmz">REMESAS</strong></h2><p id="it8c2g">Las remesas de América Latina han estado creciendo a una tasa de más del 20% anual en los últimos años. En 2022, por ejemplo, se transaccionaron más de $ 100 mil millones dentro y fuera de la región, tres veces la cantidad transaccionada en el 2005.<br/><br/>Las remesas en la región son tanto una fuente de ingresos para los hogares como una forma de pagar a proveedores y recibir pagos de socios globales, lo que la convierte en una parte importante de las economías locales.<br/></p><div class="d-flex gap-2"><img src="/static/img/logos/belmoney.png" class="h-1"/><img src="/static/img/logos/global66.png" class="h-1"/><img src="/static/img/logos/wyre.png" class="h-1"/><img src="/static/img/logos/tempofrance.png" class="h-2"/></div><a href="optin.php" class="btn me-auto"><strong>Start Now</strong></a></div><div class="col-12 col-lg-4 d-flex flex-column gap-1"><div class="align-items-start d-flex bg-white border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="iceh6l">Envía dinero a cualquier lugar:</strong></h4><p id="iiitpg">Muchas personas en América Latina dependen de redes informales, como amigos y familiares, para enviar y recibir dinero, en lugar de utilizar instituciones financieras formales.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div><div class="align-items-start d-flex bg-white border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="io30lj">Bajos costos y agilidad:</strong></h4><p id="ipd4e6">La industria de las remesas en América Latina se caracteriza por las altas tasas y la falta de competencia, lo que dificulta que las personas envíen dinero a sus familias.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div><div class="align-items-start d-flex bg-white border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="ifgizl">Transacciona con criptomonedas de forma directa y sin la necesidad des instituciones bancarias:</strong></h4><p id="idelfi">Las criptomonedas se utilizan cada vez más como una forma de enviar remesas de personas que viven en el extranjero hacia sus familias en América Latina. Esto se debe a las altas tarifas y los largos tiempos de espera asociados con los servicios de remesas tradicionales.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div></div></div></div></section><section id="saas" class="content-9 bg-white"><div class="container pb-4 pt-4"><div class="row row-gap-3 justify-content-center flex-column-reverse flex-lg-row"><div class="col-12 col-lg-4 d-flex flex-column gap-1"><div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="iznvwj">Incrementa tu audiencia:</strong></h4><p id="i3f99l">Habilitando todos los métodos de pago y monedas locales que tus usuarios necesitan para pagar en línea.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div><div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="idikuk">Un performance mejorado para tus pagos:</strong></h4><p id="it7cwj">A través de la cobranza localizada, te ofrecemos las mejores tasas de aprobación del mercado.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div><div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="i5ryqh">Procesamiento de pagos de alto valor:</strong></h4><p id="ibcsgj">De forma simple y económica, sin necesidad de entidades locales.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div><div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="i9elm1">Llega al mercado más rápido:</strong></h4><p id="it0773">Expándete para los mercados clave en América Latina a través de una sola integración.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div></div><div class="col-12 col-lg-6 d-flex flex-column gap-2"><div id="ibvf1l" class="img"></div><h2><strong>SAAS</strong></h2><p id="i7m8os">El mercado SaaS en América Latina ha estado creciendo a una tasa anual del 20% desde el 2022 al 2025, impulsado por factores como la creciente disponibilidad de conectividad a Internet y la digitalización.<br/><br/>La región tiene aún mucho espacio por crecer cuando se trata de la adopción de SaaS, siendo un mercado poco saturado y con grandes oportunidades en comparación con mercados más desarrollados. Cuenta con un socio de pagos locales, como FacilitaPay, para desbloquear las oportunidades para tu empresa en esta región.<br/></p><div class="d-flex gap-2"><img src="/static/img/logos/floori.png" class="h-1"/><!--                  <img src="/static/img/logos-ex/logo-2.svg" class="h-1">--><!--                  <img src="/static/img/logos-ex/logo-3.svg" class="h-1">--><!--                  <img src="/static/img/logos-ex/logo-4.svg" class="h-1">--></div><a href="optin.php" class="btn me-auto"><strong id="i93zbm">Comienza ahora</strong></a></div></div></div></section><section id="streaming" class="content-9 bg-light-gray"><div class="container pb-4 pt-4"><div class="row row-gap-3 justify-content-center"><div class="col-12 col-lg-6 d-flex flex-column gap-2"><div id="iwopmj" class="img"></div><h2><strong>STREAMING</strong></h2><p id="ipn5a6">Después de América del Norte, América Latina es el segundo mercado más atractivo para empresas de streaming que buscan expandirse globalmente. Con un potencial de mercado de $ 11.4 mil millones, es el segundo mercado de streaming de más rápido crecimiento a nivel mundial y también el que tiene la mayor demanda de servicios de streaming de música.<br/><br/>Desbloquea millones de fieles suscriptores en América Latina adaptando tu estrategia de pagos al mercado local con FacilitaPay.<br/></p><div class="d-flex gap-2"><!--                  <img src="/static/img/logos-ex/logo-1.svg" class="h-1">--><!--                  <img src="/static/img/logos-ex/logo-2.svg" class="h-1">--><!--                  <img src="/static/img/logos-ex/logo-3.svg" class="h-1">--><!--                  <img src="/static/img/logos-ex/logo-4.svg" class="h-1">--></div><a href="optin.php" class="btn me-auto"><strong id="iwlhdk">Comienza ahora</strong></a></div><div class="col-12 col-lg-4 d-flex flex-column gap-1"><div class="align-items-start d-flex bg-white border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="i6ouxf">Atrae suscriptores leales:</strong></h4><p id="iwlial">Al habilitar todos los métodos de pago y divisas locales que necesitan para pagar en línea.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div><div class="align-items-start d-flex bg-white border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="ipkmjn">Un performance mejorado para tus pagos:</strong></h4><p id="izbzyk">A través de la cobranza localizada, te ofrecemos las mejores tasas de aprobación del mercado. </p></div><img src="/static/img/ico-check.svg" class="w-1"/></div><div class="align-items-start d-flex bg-white border-radius gap-1 p-2"><div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="isgnmh">Llega al mercado más rápido:</strong></h4><p id="iqbrj7">Expándete para los mercados clave en América Latina a través de una sola integración.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div></div></div></div></section><section id="ecommerce" class="content-9 bg-white"><div class="container pb-4 pt-4"><div class="row row-gap-3 justify-content-center flex-column-reverse flex-lg-row"><div class="col-12 col-lg-4 d-flex flex-column gap-1"><div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2"><div class="d-flex flex-column gap-1"><h4><strong id="iavkzt">Ventas en América Latina:</strong></h4><p id="i4j88f">Se espera que el mercado de comercio electrónico en América Latina alcance los $ 93 mil millones para 2025, impulsado por un aumento en la penetración de Internet y la adopción de smartphones.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div><div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2"><div class="d-flex flex-column gap-1"><h4 id="iqa3qh"><strong id="ifvlcl">Cobros y pagos en cualquier lugar:</strong></h4><p id="iwm5df">El comercio electrónico internacional también está en aumento en América Latina, con muchos consumidores en la región comprando productos y servicios de otros países. Esta tendencia está impulsada por la disponibilidad de una amplia gama de productos y mejores precios ofrecidos por las plataformas internacionales de comercio electrónico.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div><div class="align-items-start d-flex bg-light-gray border-radius gap-1 p-2"><div class="d-flex flex-column gap-1"><h4><strong id="i8vyxf">Compre ahora y pague después:</strong></h4><p id="ic64cy">Con FacilitaPay, nuestros partners pueden ofrecer la opción de pagos en cuotas a sus consumidores, aceptar todo tipo de tarjetas y con mejores tasas de aprobación.</p></div><img src="/static/img/ico-check.svg" class="w-1"/></div></div><div class="col-12 col-lg-6 d-flex flex-column gap-2"><div id="ijtsbh" class="img"></div><h2><strong>ECOMMERCE</strong></h2><p id="i74lcz">El mercado de comercio electrónico en América Latina ha experimentado un fuerte crecimiento en las últimas décadas, con sus volúmenes creciendo a tasas del 25% entre el 2021 y 2025, generando ingresos por más de $ 700 mil millones, según Americas Market Intelligence (AMI).<br/><br/>A medida que crece la demanda de productos locales e internacionales entre los latinoamericanos, la necesidad de adaptarse y brindar acceso se vuelve más relevante para empresas globales. Cuenta con FacilitaPay para proporcionar a tus clientes latinoamericanos todas las herramientas y medios de pago que requieren para comprar de tu tienda.<br/><br/>- Brasil: El mercado de comercio electrónico se valoró en $ 153 mil millones en 2021<br/><br/>- México: Mercado de comercio electrónico valorado en 48.600 millones de dólares en 2021<br/><br/>- Colombia: Mercado de comercio electrónico valorado en $22.400 millones en 2021<br/><br/>Argentina: Mercado de comercio electrónico valorado en $ 18 mil millones en 2021<br/><br/>- Chile: Mercado de comercio electrónico valorado en $15.650 millones en 2021<br/><br/>- Perú: Mercado de comercio electrónico valorado en $13.000 millones en 2021<br/></p><ul></ul><div class="d-flex gap-2"><img src="/static/img/logos/octoshop.png" class="h-1"/><!--                  <img src="/static/img/logos-ex/logo-2.svg" class="h-1">--><!--                  <img src="/static/img/logos-ex/logo-3.svg" class="h-1">--><!--                  <img src="/static/img/logos-ex/logo-4.svg" class="h-1">--></div><a href="optin.php" class="btn me-auto"><strong id="ik2sd1">Comienza ahora</strong></a></div></div></div></section></body>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Industries',
                'slug' => NULL,
            'metadescription' => 'INDUSTRIASSoluciones de pago adaptadas la industria de tu empresa en economías emergentes.FacilitaPay entiende tu operación y las necesidades de pago de tu empresa. Descubre las soluciones que tenemos para ponerte al frente de la competencia, y aprovechar todas las oportunidades en los mercados donde operamos.Comienza ahoraPagosCriptoJuegos RemesasSaasStreamingEcommerceINVERSIONES Y CFD&#039;SLas economías latinoamericanas han crecido significativamente en los últimos años, lo que ha llevado a un aumento del ingreso disponible y a un crecimiento en la clase media. Esto ha incrementado la demanda de productos financieros como acciones, bonos y fondos mutuos. Además, la región tiene una población joven y digitalizada con un alto potencial de crecimiento a largo plazo.Los latinoamericanos están listos para invertir en activos globales; sin embargo, existen ciertas brechas en el ecosistema de pagos que hacen necesario el uso de medios de pago locales para adquirir estos activos, y nuestra misión en FacilitaPay es conectar a empresas de inversiones con sus usuarios en Latinoamérica.Start NowLocal KYC Features:A robust and fully localized compliance process to help you onboard new investors in the region.Instant Payments:Receive and send payments in seconds to investors on a 24/7 basis.Mitigate risk and chargebacks:By accepting alternative payment options such as PIX, bank transfers and cash.Solución de pago de marca blanca:Para que puedas personalizarlo a las necesidades de tu negocio.Flujos de pago flexibles:Que se adaptan fácilmente para satisfacer tus requerimientos técnicos y operativos.Varias oportunidades de alianzas:Alianzas directas, acuerdos PSP y programas de referidos.PAYMENTSSe espera que el mercado de pagos en América Latina alcance los $ 1.05 billones en el 2023, impulsado por un aumento en el comercio electrónico, las transacciones digitales y el incremento de las interacciones entre los latinoamericanos y empresas de diferentes industrias con presencia digital.Gana velocidad en el mercado y optimiza los costos de tu empresa utilizando la estructura de pagos locales diseñada por FacilitaPay para América Latina; permite que nos encargarnos de todas las regulaciones locales, las asociaciones y tecnologías necesarias para que puedas operar en Latinoamérica, y concentrar tus esfuerzos en tu actividad principal.-->Comienza ahoraCRIPTOEl mundo de las criptomonedas está en constante crecimiento, millones de nuevos usuarios ingresan al mercado anualmente. Latinoamericana ha experimentado un crecimiento exponencial en los últimos años, con un aumento significativo en el interés por las criptomonedas en diversos mercados de la región.Durante el 2022, la adopción de criptomonedas en América Latina ha alcanzado un crecimiento de 40 por ciento, convirtiendo a la región en uno de los mercados de más rápido desarrollo en el mundo. Según los analistas, los usuarios de criptomonedas latinoamericanos recibieron el equivalente a más de USD $ 562 mil millones a través de criptomonedas desde julio de 2021 hasta junio de 2022.Comienza ahoraRecursos locales de KYC:Un proceso de cumplimiento sólido y totalmente localizado para ayudarte a incorporar nuevos usuarios en la región.Pagos instantáneos:Recibe y envía pagos a tus usuarios en segundos, las 24 horas del día, los 7 días de la semana.Reduce el riesgo y los fraudes:Acepta opciones de pago alternativas como PIX, transferencias bancarias y efectivo.Evita los carritos abandonados:Tus usuarios no tendrán que abandonar tu página u aplicación durante el checkout.Convierte más jugadores de Freemium a Premium rápidamente:Métodos de pago fáciles de usar y de bajo costo.Deja a tus usuarios pagar de la forma que prefieran:Varios métodos de pago además de las tradicionales tarjetas de crédito y débito. Acepta pagos fácilmente de pagar con: PIX, SPEI, CODI, PSE, criptomonedas y muchos otros. JUEGOS ONLINECon más de 270 millones de jugadores y un ingreso total proyectado de $ 5.1 mil millones para 2024, América Latina es uno de los mercados de juegos de más rápido crecimiento. Las oportunidades son infinitas para empresas de juegos globales que buscan aumentar sus ingresos, y al no entrar a este mercado estas dejando dinero sobre la mesa, o al hacerlo sin el partner local adecuado.Con FacilitaPay, estarás listo para aprovechar las oportunidades en América Latina, brindándole a tus usuarios toda la experiencia local que necesitan, y permitiéndoles pagar de la manera que quieran. Nuestras soluciones de pago te ayudan a evitar carritos abandonados durante el proceso de pago, lo que aumenta significativamente sus tasas de conversión.-->-->-->-->Comienza ahoraREMESASLas remesas de América Latina han estado creciendo a una tasa de más del 20% anual en los últimos años. En 2022, por ejemplo, se transaccionaron más de $ 100 mil millones dentro y fuera de la región, tres veces la cantidad transaccionada en el 2005.Las remesas en la región son tanto una fuente de ingresos para los hogares como una forma de pagar a proveedores y recibir pagos de socios globales, lo que la convierte en una parte importante de las economías locales.Start NowEnvía dinero a cualquier lugar:Muchas personas en América Latina dependen de redes informales, como amigos y familiares, para enviar y recibir dinero, en lugar de utilizar instituciones financieras formales.Bajos costos y agilidad:La industria de las remesas en América Latina se caracteriza por las altas tasas y la falta de competencia, lo que dificulta que las personas envíen dinero a sus familias.Transacciona con criptomonedas de forma directa y sin la necesidad des instituciones bancarias:Las criptomonedas se utilizan cada vez más como una forma de enviar remesas de personas que viven en el extranjero hacia sus familias en América Latina. Esto se debe a las altas tarifas y los largos tiempos de espera asociados con los servicios de remesas tradicionales.Incrementa tu audiencia:Habilitando todos los métodos de pago y monedas locales que tus usuarios necesitan para pagar en línea.Un performance mejorado para tus pagos:A través de la cobranza localizada, te ofrecemos las mejores tasas de aprobación del mercado.Procesamiento de pagos de alto valor:De forma simple y económica, sin necesidad de entidades locales.Llega al mercado más rápido:Expándete para los mercados clave en América Latina a través de una sola integración.SAASEl mercado SaaS en América Latina ha estado creciendo a una tasa anual del 20% desde el 2022 al 2025, impulsado por factores como la creciente disponibilidad de conectividad a Internet y la digitalización.La región tiene aún mucho espacio por crecer cuando se trata de la adopción de SaaS, siendo un mercado poco saturado y con grandes oportunidades en comparación con mercados más desarrollados. Cuenta con un socio de pagos locales, como FacilitaPay, para desbloquear las oportunidades para tu empresa en esta región.-->-->-->Comienza ahoraSTREAMINGDespués de América del Norte, América Latina es el segundo mercado más atractivo para empresas de streaming que buscan expandirse globalmente. Con un potencial de mercado de $ 11.4 mil millones, es el segundo mercado de streaming de más rápido crecimiento a nivel mundial y también el que tiene la mayor demanda de servicios de streaming de música.Desbloquea millones de fieles suscriptores en América Latina adaptando tu estrategia de pagos al mercado local con FacilitaPay.-->-->-->-->Comienza ahoraAtrae suscriptores leales:Al habilitar todos los métodos de pago y divisas locales que necesitan para pagar en línea.Un performance mejorado para tus pagos:A través de la cobranza localizada, te ofrecemos las mejores tasas de aprobación del mercado. Llega al mercado más rápido:Expándete para los mercados clave en América Latina a través de una sola integración.Ventas en América Latina:Se espera que el mercado de comercio electrónico en América Latina alcance los $ 93 mil millones para 2025, impulsado por un aumento en la penetración de Internet y la adopción de smartphones.Cobros y pagos en cualquier lugar:El comercio electrónico internacional también está en aumento en América Latina, con muchos consumidores en la región comprando productos y servicios de otros países. Esta tendencia está impulsada por la disponibilidad de una amplia gama de productos y mejores precios ofrecidos por las plataformas internacionales de comercio electrónico.Compre ahora y pague después:Con FacilitaPay, nuestros partners pueden ofrecer la opción de pagos en cuotas a sus consumidores, aceptar todo tipo de tarjetas y con mejores tasas de aprobación.ECOMMERCEEl mercado de comercio electrónico en América Latina ha experimentado un fuerte crecimiento en las últimas décadas, con sus volúmenes creciendo a tasas del 25% entre el 2021 y 2025, generando ingresos por más de $ 700 mil millones, según Americas Market Intelligence (AMI).A medida que crece la demanda de productos locales e internacionales entre los latinoamericanos, la necesidad de adaptarse y brindar acceso se vuelve más relevante para empresas globales. Cuenta con FacilitaPay para proporcionar a tus clientes latinoamericanos todas las herramientas y medios de pago que requieren para comprar de tu tienda.- Brasil: El mercado de comercio electrónico se valoró en $ 153 mil millones en 2021- México: Mercado de comercio electrónico valorado en 48.600 millones de dólares en 2021- Colombia: Mercado de comercio electrónico valorado en $22.400 millones en 2021Argentina: Mercado de comercio electrónico valorado en $ 18 mil millones en 2021- Chile: Mercado de comercio electrónico valorado en $15.650 millones en 2021- Perú: Mercado de comercio electrónico valorado en $13.000 millones en 2021-->-->-->Comienza ahora',
                'created_at' => '2023-05-30 17:48:18',
                'updated_at' => '2023-05-31 17:44:29',
            ),
            18 => 
            array (
                'id' => 45,
                'pages_id' => 17,
                'locale' => 'en',
                'title' => 'Markets Brazil',
            'html' => '<section class="hero-2 bg-blue text-white" style="background-image: url(\'/static/img/bg-markets-br.png\')">
<div class="container d-flex flex-column gap-5 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-6">
<div class="d-flex flex-column flex-lg-row gap-4">
<div class="flag">
<img src="/static/img/ico-brazil.svg" class="w-4">
</div>
<div class="d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1">
<h6 class="txt-light-green">BRAZIL</h6>
<h2 class="text-white"><strong>Latin America’s largest eCommerce market</strong></h2>
</div>
<p>With a population of over 210 million people, it is the sixth most populous country in the world and the largest economy in Latin America. Brazil is a rapidly growing market for digital companies, having a high internet and smartphone penetration. <br><br>Unlock the potential in this market by offering PIX, a 24/7 instant bank transfer and the most popular payment method in Brazil.</p>
<a href="optin.php" class="btn me-auto">Start now</a>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
</div>
</div>
<div class="row text-center slider">
<div class="col-12 d-flex flex-column">
<div class="container d-flex flex-column gap-2">
<div class="row">
<div class="col-12 d-flex flex-column align-items-center">
<h6 class="txt-white">Trusted by tech giants:</h6>
</div>
</div>
<div class="row text-center slider">
<div class="col-12">
<ul class="d-flex justify-content-center flex-wrap row-gap-3 column-gap-5">
<li><img src="/static/img/logos/sproutfi-white.png" class="h-2"></li>
<li><img src="/static/img/logos/bitso.png" class="h-2"></li>
<li><img src="/static/img/logos/okx.png" class="h-2"></li>
<li><img src="/static/img/logos/angloamerican-white.png" class="h-2"></li>
<li><img src="/static/img/logos/global66-white.png" class="h-2"></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row">
<div class="col-12">
<h2 class="text-center"><strong>Market Overview <span class="txt-light-green">Brazil</span></strong></h2>
</div>
</div>
<div class="row d-flex row-gap-3 align-items-center">
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico">
<img src="/static/img/icos/ico-1.svg" class="w-2">
</div>
<div class="d-flex flex-column gap-2">
<h4><strong>Population - 211M</strong></h4>
<p>The largest country in Latin America and the world\'s sixth most populous country.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico">
<img src="/static/img/icos/ico-2.svg" class="w-2">
</div>
<div class="d-flex flex-column gap-2">
<h4><strong>eCommerce Growth</strong></h4>
<p>Brazil is expected to remain among the top 10 eCommerce markets globally with a projected growth of 17% through 2021.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico">
<img src="/static/img/icos/ico-3.svg" class="w-2">
</div>
<div class="d-flex flex-column gap-2">
<h4><strong>eShoppers - 81.2M</strong></h4>
<p>An eCommerce market with 81.2M eShoppers and a ticket average of  391 BRL.</p>
</div>
</div>
</div>
</div>
</div>
</section>



<div class="h-4 bg-white"></div>



<section class="cta cta-1 bg-white">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-sm-6 col-lg-5 d-flex align-items-center bg-light-green">
<div class="square"></div>
<div class="p-2">
<h3><strong>Easily enter the largest economy in Latin America.</strong></h3>
</div>
</div>
<div class="col-12 col-sm-6 col-lg-5 bg-blue txt-white" style="background-image: url(\'/static/img/bg-cta.jpg\');">
<div class="d-flex flex-column gap-1 p-2">
<h4 class="txt-white">Offer PIX and many other payment methods.</h4>
<a href="optin.php" class="btn d-flex"><strong>Start now</strong></a>
</div>
</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>



<section class="map-stats bg-light-gray">
<div class="container d-flex flex-column gap-3 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 d-flex flex-column gap-1">
<h6 class="text-center">Brazil’s eCommerce payment mix</h6>
<h2 class="text-center"><strong>Improve your payment acceptance by offering local payment methods in Brazil</strong></h2>
</div>
</div>
<div class="row d-flex row-gap-3 justify-content-center">
<div class="col-12 col-lg-4">
<div class="d-flex h-100 justify-content-center text-start flex-column pe-3 gap-2">
<div class="badge align-items-center justify-content-center d-flex flex-column">
<span>98% OF <br>MARKET SHARE COVERED BY</span>
<img src="/static/img/logo-facilitapay-white.svg">
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-pix.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">PIX - 27%</p>
<div class="barra">
<div style="width: 27%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-card.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">CREDIT CARD - 19%</p>
<div class="barra">
<div style="width: 19%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-card.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">DEBIT CARD - 18%</p>
<div class="barra">
<div style="width: 18%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-boleto.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">BOLETO BANCÁRIO -11%</p>
<div class="barra">
<div style="width: 11%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-ted.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">TED - 9%</p>
<div class="barra">
<div style="width: 9%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-crypto-currencies.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">CRYPTO (ACCELERATED GROWTH) - 3%</p>
<div class="barra">
<div style="width: 3%;"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-7 col-lg-5">
<div>
<img src="/static/img/maps/map-brazil.svg" class="img-fluid">
</div>
</div>
<div class="col-12 col-md-3">
<div class="d-flex h-100 justify-content-center flex-lg-column flex-wrap ps-2 gap-1">

<div>
<h5>CAPITAL</h5>
<p>Brasilia</p>
</div>
<div>
<h5>REGION</h5>
<p>South America</p>
</div>
<div>
<h5>CURRENCY</h5>
<p>Brazilian Real <br>USD/BRL = 5,04</p>
</div>
<div>
<h5>POPULATION</h5>
<p>213.9M</p>
</div>
<div>
<h5>GDP</h5>
<p>US$ 1.61 trillion</p>
</div>
<div>
<h5>GDP PER CAPITA</h5>
<p>US$ 8.551</p>
</div>
</div>

</div>
</div>
</div>
</section>



<section class="bullets-2 bg-light-gray pt-4">
<div class="container d-flex flex-column gap-2">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 d-flex flex-column gap-1">
<h6 class="text-center">DISCOVER</h6>
<h2 class="text-center"><strong>Explore the opportunities in Brazil.</strong></h2>
</div>
</div>
<div class="row justify-content-center row-gap-2">
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Availability</strong></h4>
<p>PIX is available 24/7 for individuals and businesses, transfers are instantaneous.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Adoption</strong></h4>
<p>Brazilian e-commerce has gained 8M new customers during the COVID-19 pandemic.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Accessibility</strong></h4>
<p>PIX is compatible with multiple payment channels, including mobile, internet banking, and ATMs.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Trending Products</strong></h4>
<p>The desire for new trendy products or services that are not normally found in Brazil makes Brazilian consumers fans of international brands.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Growth</strong></h4>
<p>According to a report by Statista, the e-commerce market in Brazil is projected to grow by 10.3% in 2022, reaching a total value of BRL 98.7 billion (approximately USD 18 billion).</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Opportunities</strong></h4>
<p>Growth without setting up with a local entity, with FacilitaPay you get up to 95%* reduction
in fees. (*Compared to local entities).</p>
</div>
</div>
</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>



<section class="table-1 bg-light-gray">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-6">
<div class="row bg-blue border-radius-top p-1">
<div class="col-12">
<h4 class="text-white"><strong>Payment Methods</strong></h4>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>PIX (Instant Payment)</strong></h4>
<p class="txt-gray">The instant payment system created by the Central Bank of Brazil is changing the market by performing transfers and payments, in a few seconds, at any time of the day - including weekends and holidays - in a safe and practical way.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/pix-logo.svg" class="h-1">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Local Credit Cards</strong></h4>
<p class="txt-gray">The usage of credit cards has been growing. Although, internationally-enabled credit cards make up only 24% of e-commerce transactions. Start to accept both international and domestic cards and increase your conversions.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/master.svg">
<img src="/static/img/finance/visa.svg">
<img src="/static/img/finance/amex.svg">
<img src="/static/img/finance/diners.svg">
<img src="/static/img/finance/elo.svg">
<img src="/static/img/finance/hipercard.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Local Debit Cards</strong></h4>
<p class="txt-gray">A debit card is a common payment method in Brazil. Today, there are 116M active debit cards in the country, with 664B reais spent with this method in 2019. Accept debit cards to reach a new consumer base and optimize your revenue in Brazil.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/master.svg" >
<img src="/static/img/finance/visa.svg" >
<img src="/static/img/finance/elo.svg" >
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Installments</strong></h4>
<p class="txt-gray">Brazilians have the habit of splitting the total amount of a purchase made with a credit card in up to 12 monthly payments. Allow your customers to make higher-value purchases and increase your average ticket size.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/installments.svg" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Boleto Bancário</strong></h4>
<p class="txt-gray">Brazil has a cash-centric culture, and Boleto has been historically used by the Brazilian population to pay for monthly bills, taxes, and also e-commerce purchases. Reach the unbanked population and also those whose preference is Boleto out of habit.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/instant-boleto.svg" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Crypto</strong></h4>
<p class="txt-gray">Brazil has the seventh largest crypto market in the world and is growing rapidly. With FacilitaPay, you can make settlement in crypto, on/off ramp solutions and receive your local payments in stablecoins.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/ethereum.png" class="h-1">
<img src="/static/img/finance/crypto-2.png" class="h-1">
<img src="/static/img/finance/bitcoin.png" class="h-1">
<img src="/static/img/finance/crypto-3.png" class="h-1">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Digital Wallets</strong></h4>
<p class="txt-gray">The popularity of digital wallets is increasing in Brazil, mostly due to the benefits offered by them, such as convenience, security, and simplicity to pay. Be ahead of the market and start to offer digital wallets on your e-commerce store.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/logo-mercadopago.svg" >
<img src="/static/img/finance/logo-paypal.svg" >
<img src="/static/img/finance/picpay.svg" class="h-1">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Other Alternative Payments</strong></h4>
<p class="txt-gray">Brazil has several ways to pay online beyond credit cards. Bank Transfer and Online Debit are two effective payment options. Allow consumers to use their usual bank account to make an instant payment without the risk of chargeback for you.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/bank-transfer-cropped--en.svg" >
<img src="/static/img/finance/online-debit--en.svg" class="h-1">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>



<section class="cta-2 bg-light-gray">
<div class="container d-flex flex-column gap-2 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-md-6 col-lg-6 d-flex align-items-center bg-white">
<div class="d-flex flex-column gap-1 p-2">
<h4><strong>Download our <span class="txt-light-green">Brazil</span> Country Guide</strong></h4>
<p>Learn everything you need to know about the eCommerce payments landscape in Brazil in our straight-to-the-point country guide.</p>
<a href="#!" class="btn me-auto"><strong>Download now</strong></a>
</div>
</div>
<div class="col-12 col-md-6 col-lg-3 bg-light-green">
<div>
<img src="/static/img/brochure-br.png">
</div>
</div>
</div>
</div>
</section>



<div class="h-1 bg-light-gray"></div>



<section class="pagination-1 bg-light-gray">
<div class="container">
<div class="row justify-content-between">
<div class="col-4">
<a href="markets-mexico.php" class="btn btn-2 d-inline-flex align-items-center gap-1 me-auto"><img src="/static/img/ico-mexico.svg" class="h-2"> <span class="arrow left"></span> <span class="d-none d-lg-block">Prev - <strong>Mexico</strong> country page</span></a>
</div>
<div class="col-4">
<a href="markets-colombia.php" class="btn btn-2 d-inline-flex align-items-center gap-1 ms-auto"><span class="d-none d-lg-block">Next - <strong>Colombia</strong> country page</span> <span class="arrow right"></span> <img src="/static/img/ico-colombia.svg" class="h-2"></a>
</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>
',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Markets Brazil',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 17:55:32',
                'updated_at' => '2023-05-30 17:55:32',
            ),
            19 => 
            array (
                'id' => 46,
                'pages_id' => 17,
                'locale' => 'pt',
                'title' => 'Markets Brazil',
            'html' => '<section class="hero-2 bg-blue text-white" style="background-image: url(\'/static/img/bg-markets-br.png\')">
<div class="container d-flex flex-column gap-5 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-6">
<div class="d-flex flex-column flex-lg-row gap-4">
<div class="flag">
<img src="/static/img/ico-brazil.svg" class="w-4">
</div>
<div class="d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1">
<h6 class="txt-light-green">BRAZIL</h6>
<h2 class="text-white"><strong>Latin America’s largest eCommerce market</strong></h2>
</div>
<p>With a population of over 210 million people, it is the sixth most populous country in the world and the largest economy in Latin America. Brazil is a rapidly growing market for digital companies, having a high internet and smartphone penetration. <br><br>Unlock the potential in this market by offering PIX, a 24/7 instant bank transfer and the most popular payment method in Brazil.</p>
<a href="optin.php" class="btn me-auto">Start now</a>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
</div>
</div>
<div class="row text-center slider">
<div class="col-12 d-flex flex-column">
<div class="container d-flex flex-column gap-2">
<div class="row">
<div class="col-12 d-flex flex-column align-items-center">
<h6 class="txt-white">Trusted by tech giants:</h6>
</div>
</div>
<div class="row text-center slider">
<div class="col-12">
<ul class="d-flex justify-content-center flex-wrap row-gap-3 column-gap-5">
<li><img src="/static/img/logos/sproutfi-white.png" class="h-2"></li>
<li><img src="/static/img/logos/bitso.png" class="h-2"></li>
<li><img src="/static/img/logos/okx.png" class="h-2"></li>
<li><img src="/static/img/logos/angloamerican-white.png" class="h-2"></li>
<li><img src="/static/img/logos/global66-white.png" class="h-2"></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row">
<div class="col-12">
<h2 class="text-center"><strong>Market Overview <span class="txt-light-green">Brazil</span></strong></h2>
</div>
</div>
<div class="row d-flex row-gap-3 align-items-center">
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico">
<img src="/static/img/icos/ico-1.svg" class="w-2">
</div>
<div class="d-flex flex-column gap-2">
<h4><strong>Population - 211M</strong></h4>
<p>The largest country in Latin America and the world\'s sixth most populous country.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico">
<img src="/static/img/icos/ico-2.svg" class="w-2">
</div>
<div class="d-flex flex-column gap-2">
<h4><strong>eCommerce Growth</strong></h4>
<p>Brazil is expected to remain among the top 10 eCommerce markets globally with a projected growth of 17% through 2021.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico">
<img src="/static/img/icos/ico-3.svg" class="w-2">
</div>
<div class="d-flex flex-column gap-2">
<h4><strong>eShoppers - 81.2M</strong></h4>
<p>An eCommerce market with 81.2M eShoppers and a ticket average of  391 BRL.</p>
</div>
</div>
</div>
</div>
</div>
</section>



<div class="h-4 bg-white"></div>



<section class="cta cta-1 bg-white">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-sm-6 col-lg-5 d-flex align-items-center bg-light-green">
<div class="square"></div>
<div class="p-2">
<h3><strong>Easily enter the largest economy in Latin America.</strong></h3>
</div>
</div>
<div class="col-12 col-sm-6 col-lg-5 bg-blue txt-white" style="background-image: url(\'/static/img/bg-cta.jpg\');">
<div class="d-flex flex-column gap-1 p-2">
<h4 class="txt-white">Offer PIX and many other payment methods.</h4>
<a href="optin.php" class="btn d-flex"><strong>Start now</strong></a>
</div>
</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>



<section class="map-stats bg-light-gray">
<div class="container d-flex flex-column gap-3 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 d-flex flex-column gap-1">
<h6 class="text-center">Brazil’s eCommerce payment mix</h6>
<h2 class="text-center"><strong>Improve your payment acceptance by offering local payment methods in Brazil</strong></h2>
</div>
</div>
<div class="row d-flex row-gap-3 justify-content-center">
<div class="col-12 col-lg-4">
<div class="d-flex h-100 justify-content-center text-start flex-column pe-3 gap-2">
<div class="badge align-items-center justify-content-center d-flex flex-column">
<span>98% OF <br>MARKET SHARE COVERED BY</span>
<img src="/static/img/logo-facilitapay-white.svg">
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-pix.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">PIX - 27%</p>
<div class="barra">
<div style="width: 27%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-card.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">CREDIT CARD - 19%</p>
<div class="barra">
<div style="width: 19%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-card.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">DEBIT CARD - 18%</p>
<div class="barra">
<div style="width: 18%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-boleto.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">BOLETO BANCÁRIO -11%</p>
<div class="barra">
<div style="width: 11%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-ted.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">TED - 9%</p>
<div class="barra">
<div style="width: 9%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-crypto-currencies.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">CRYPTO (ACCELERATED GROWTH) - 3%</p>
<div class="barra">
<div style="width: 3%;"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-7 col-lg-5">
<div>
<img src="/static/img/maps/map-brazil.svg" class="img-fluid">
</div>
</div>
<div class="col-12 col-md-3">
<div class="d-flex h-100 justify-content-center flex-lg-column flex-wrap ps-2 gap-1">

<div>
<h5>CAPITAL</h5>
<p>Brasilia</p>
</div>
<div>
<h5>REGION</h5>
<p>South America</p>
</div>
<div>
<h5>CURRENCY</h5>
<p>Brazilian Real <br>USD/BRL = 5,04</p>
</div>
<div>
<h5>POPULATION</h5>
<p>213.9M</p>
</div>
<div>
<h5>GDP</h5>
<p>US$ 1.61 trillion</p>
</div>
<div>
<h5>GDP PER CAPITA</h5>
<p>US$ 8.551</p>
</div>
</div>

</div>
</div>
</div>
</section>



<section class="bullets-2 bg-light-gray pt-4">
<div class="container d-flex flex-column gap-2">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 d-flex flex-column gap-1">
<h6 class="text-center">DISCOVER</h6>
<h2 class="text-center"><strong>Explore the opportunities in Brazil.</strong></h2>
</div>
</div>
<div class="row justify-content-center row-gap-2">
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Availability</strong></h4>
<p>PIX is available 24/7 for individuals and businesses, transfers are instantaneous.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Adoption</strong></h4>
<p>Brazilian e-commerce has gained 8M new customers during the COVID-19 pandemic.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Accessibility</strong></h4>
<p>PIX is compatible with multiple payment channels, including mobile, internet banking, and ATMs.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Trending Products</strong></h4>
<p>The desire for new trendy products or services that are not normally found in Brazil makes Brazilian consumers fans of international brands.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Growth</strong></h4>
<p>According to a report by Statista, the e-commerce market in Brazil is projected to grow by 10.3% in 2022, reaching a total value of BRL 98.7 billion (approximately USD 18 billion).</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Opportunities</strong></h4>
<p>Growth without setting up with a local entity, with FacilitaPay you get up to 95%* reduction
in fees. (*Compared to local entities).</p>
</div>
</div>
</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>



<section class="table-1 bg-light-gray">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-6">
<div class="row bg-blue border-radius-top p-1">
<div class="col-12">
<h4 class="text-white"><strong>Payment Methods</strong></h4>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>PIX (Instant Payment)</strong></h4>
<p class="txt-gray">The instant payment system created by the Central Bank of Brazil is changing the market by performing transfers and payments, in a few seconds, at any time of the day - including weekends and holidays - in a safe and practical way.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/pix-logo.svg" class="h-1">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Local Credit Cards</strong></h4>
<p class="txt-gray">The usage of credit cards has been growing. Although, internationally-enabled credit cards make up only 24% of e-commerce transactions. Start to accept both international and domestic cards and increase your conversions.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/master.svg">
<img src="/static/img/finance/visa.svg">
<img src="/static/img/finance/amex.svg">
<img src="/static/img/finance/diners.svg">
<img src="/static/img/finance/elo.svg">
<img src="/static/img/finance/hipercard.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Local Debit Cards</strong></h4>
<p class="txt-gray">A debit card is a common payment method in Brazil. Today, there are 116M active debit cards in the country, with 664B reais spent with this method in 2019. Accept debit cards to reach a new consumer base and optimize your revenue in Brazil.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/master.svg" >
<img src="/static/img/finance/visa.svg" >
<img src="/static/img/finance/elo.svg" >
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Installments</strong></h4>
<p class="txt-gray">Brazilians have the habit of splitting the total amount of a purchase made with a credit card in up to 12 monthly payments. Allow your customers to make higher-value purchases and increase your average ticket size.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/installments.svg" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Boleto Bancário</strong></h4>
<p class="txt-gray">Brazil has a cash-centric culture, and Boleto has been historically used by the Brazilian population to pay for monthly bills, taxes, and also e-commerce purchases. Reach the unbanked population and also those whose preference is Boleto out of habit.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/instant-boleto.svg" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Crypto</strong></h4>
<p class="txt-gray">Brazil has the seventh largest crypto market in the world and is growing rapidly. With FacilitaPay, you can make settlement in crypto, on/off ramp solutions and receive your local payments in stablecoins.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/ethereum.png" class="h-1">
<img src="/static/img/finance/crypto-2.png" class="h-1">
<img src="/static/img/finance/bitcoin.png" class="h-1">
<img src="/static/img/finance/crypto-3.png" class="h-1">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Digital Wallets</strong></h4>
<p class="txt-gray">The popularity of digital wallets is increasing in Brazil, mostly due to the benefits offered by them, such as convenience, security, and simplicity to pay. Be ahead of the market and start to offer digital wallets on your e-commerce store.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/logo-mercadopago.svg" >
<img src="/static/img/finance/logo-paypal.svg" >
<img src="/static/img/finance/picpay.svg" class="h-1">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Other Alternative Payments</strong></h4>
<p class="txt-gray">Brazil has several ways to pay online beyond credit cards. Bank Transfer and Online Debit are two effective payment options. Allow consumers to use their usual bank account to make an instant payment without the risk of chargeback for you.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/bank-transfer-cropped--en.svg" >
<img src="/static/img/finance/online-debit--en.svg" class="h-1">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>



<section class="cta-2 bg-light-gray">
<div class="container d-flex flex-column gap-2 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-md-6 col-lg-6 d-flex align-items-center bg-white">
<div class="d-flex flex-column gap-1 p-2">
<h4><strong>Download our <span class="txt-light-green">Brazil</span> Country Guide</strong></h4>
<p>Learn everything you need to know about the eCommerce payments landscape in Brazil in our straight-to-the-point country guide.</p>
<a href="#!" class="btn me-auto"><strong>Download now</strong></a>
</div>
</div>
<div class="col-12 col-md-6 col-lg-3 bg-light-green">
<div>
<img src="/static/img/brochure-br.png">
</div>
</div>
</div>
</div>
</section>



<div class="h-1 bg-light-gray"></div>



<section class="pagination-1 bg-light-gray">
<div class="container">
<div class="row justify-content-between">
<div class="col-4">
<a href="markets-mexico.php" class="btn btn-2 d-inline-flex align-items-center gap-1 me-auto"><img src="/static/img/ico-mexico.svg" class="h-2"> <span class="arrow left"></span> <span class="d-none d-lg-block">Prev - <strong>Mexico</strong> country page</span></a>
</div>
<div class="col-4">
<a href="markets-colombia.php" class="btn btn-2 d-inline-flex align-items-center gap-1 ms-auto"><span class="d-none d-lg-block">Next - <strong>Colombia</strong> country page</span> <span class="arrow right"></span> <img src="/static/img/ico-colombia.svg" class="h-2"></a>
</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>
',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Markets Brazil',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 17:55:32',
                'updated_at' => '2023-05-30 17:55:32',
            ),
            20 => 
            array (
                'id' => 47,
                'pages_id' => 17,
                'locale' => 'es',
                'title' => 'Markets Brazil',
                'html' => '<body class="home">
<section id="iecl" class="hero-2 bg-blue text-white">
<div class="container d-flex flex-column gap-5 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-6">
<div class="d-flex flex-column flex-lg-row gap-4">
<div class="flag"><img src="/static/img/ico-brazil.svg" class="w-4"/></div>
<div class="d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1"><h6 class="txt-light-green">Brasil</h6>
<h2 class="text-white"><strong id="ivdao">El mercado de comercio electrónico más grande de
América Latina</strong></h2></div>
<p id="iewl4">Con una población de más de 210 millones de personas, Brasil es el sexto país más
poblado del mundo y la economía más grande de América Latina. Brasil es un mercado de rápido
crecimiento para las empresas digitales, con alta penetración de Internet y
smartphones.<br/><br/>Libera el potencial de este mercado ofreciendo PIX, una transferencia
bancaria instantánea 24/7 y el método de pago más popular en Brasil.<br/></p><a
href="optin.php" class="btn me-auto">Comienza ahora</a></div>
</div>
</div>
<div class="col-12 col-lg-4">
</div>
</div>
<div class="row text-center slider">
<div class="col-12 d-flex flex-column">
<div class="container d-flex flex-column gap-2">
<div class="row">
<div class="col-12 d-flex flex-column align-items-center"><h6 class="txt-white">CONFIADO POR LOS
GIGANTES DE LA TECNOLOGÍA</h6></div>
</div>
<div class="row text-center slider">
<div class="col-12">
<ul class="d-flex justify-content-center flex-wrap row-gap-3 column-gap-5">
<li><img src="/static/img/logos/sproutfi-white.png" class="h-2"/></li>
<li><img src="/static/img/logos/bitso.png" class="h-2"/></li>
<li><img src="/static/img/logos/okx.png" class="h-2"/></li>
<li><img src="/static/img/logos/angloamerican-white.png" class="h-2"/></li>
<li><img src="/static/img/logos/global66-white.png" class="h-2"/></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row">
<div class="col-12"><h2 class="text-center"><strong id="i511j">Market Overview <span
class="txt-light-green">Brazil</span></strong></h2></div>
</div>
<div class="row d-flex row-gap-3 align-items-center">
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico"><img src="/static/img/icos/ico-1.svg" class="w-2"/></div>
<div class="d-flex flex-column gap-2"><h4><strong id="ild24">Población - 211 millones</strong></h4>
<p id="iw5to">El país más grande de América Latina y el sexto país más poblado del mundo.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico"><img src="/static/img/icos/ico-2.svg" class="w-2"/></div>
<div class="d-flex flex-column gap-2"><h4><strong id="ixlak">Crecimiento del comercio
electrónico</strong></h4>
<p id="i6wrf">Se espera que Brasil permanezca entre los 10 principales mercados de comercio
electrónico del mundo, creciendo en promedio un 17% al año desde el 2021.</p></div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico"><img src="/static/img/icos/ico-3.svg" class="w-2"/></div>
<div class="d-flex flex-column gap-2"><h4><strong id="icv6v">Compradores de comercio electrónico -
81.2 millones</strong></h4>
<p id="i1sya">Un mercado de comercio electrónico con 81,2 millones de compradores y un ticket
promedio de R$ 391.</p></div>
</div>
</div>
</div>
</div>
</section>
<div class="h-4 bg-white"></div>
<section class="cta cta-1 bg-white">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-sm-6 col-lg-5 d-flex align-items-center bg-light-green">
<div class="square"></div>
<div class="p-2"><h3><strong>Easily enter the largest economy in Latin America.</strong></h3></div>
</div>
<div id="ih43c" class="col-12 col-sm-6 col-lg-5 bg-blue txt-white">
<div class="d-flex flex-column gap-1 p-2"><h4 class="txt-white">Offer PIX and many other payment
methods.</h4><a href="optin.php" class="btn d-flex"><strong>Start now</strong></a></div>
</div>
</div>
</div>
</section>
<div class="h-4 bg-light-gray"></div>
<section class="map-stats bg-light-gray">
<div class="container d-flex flex-column gap-3 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 d-flex flex-column gap-1"><h6 class="text-center">MIX DE PAGOS DE COMERCIO
ELECTRÓNICO DE BRASIL</h6>
<h2 class="text-center"><strong id="inae3l">Mejora tu aceptación de pagos ofreciendo métodos de pago
locales en Brasil</strong></h2></div>
</div>
<div class="row d-flex row-gap-3 justify-content-center">
<div class="col-12 col-lg-4">
<div class="d-flex h-100 justify-content-center text-start flex-column pe-3 gap-2">
<div class="badge align-items-center justify-content-center d-flex flex-column"><span>98% OF <br/>MARKET SHARE COVERED BY</span><img
src="/static/img/logo-facilitapay-white.svg"/></div>
<div class="item d-flex align-items-center gap-1">
<div><img src="/static/img/finance/SVG/ico-pix.svg"/></div>
<div class="d-flex flex-column flex-grow-1"><p class="sub">PIX - 27%</p>
<div class="barra">
<div id="ihievt"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div><img src="/static/img/finance/SVG/ico-card.svg"/></div>
<div class="d-flex flex-column flex-grow-1"><p class="sub">CREDIT CARD - 19%</p>
<div class="barra">
<div id="igl3kf"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div><img src="/static/img/finance/SVG/ico-card.svg"/></div>
<div class="d-flex flex-column flex-grow-1"><p class="sub">DEBIT CARD - 18%</p>
<div class="barra">
<div id="iyubt1"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div><img src="/static/img/finance/SVG/ico-boleto.svg"/></div>
<div class="d-flex flex-column flex-grow-1"><p class="sub">BOLETO BANCÁRIO -11%</p>
<div class="barra">
<div id="i91akh"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div><img src="/static/img/finance/SVG/ico-ted.svg"/></div>
<div class="d-flex flex-column flex-grow-1"><p class="sub">TED - 9%</p>
<div class="barra">
<div id="i9n31p"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div><img src="/static/img/finance/SVG/ico-crypto-currencies.svg"/></div>
<div class="d-flex flex-column flex-grow-1"><p class="sub">CRYPTO (ACCELERATED GROWTH) - 3%</p>
<div class="barra">
<div id="igarbh"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-7 col-lg-5">
<div><img src="/static/img/maps/map-brazil.svg" class="img-fluid"/></div>
</div>
<div class="col-12 col-md-3">
<div class="d-flex h-100 justify-content-center flex-lg-column flex-wrap ps-2 gap-1">
<div><h5>CAPITAL</h5>
<p>Brasilia</p></div>
<div><h5>REGION</h5>
<p>South America</p></div>
<div><h5>CURRENCY</h5>
<p>Brazilian Real <br/>USD/BRL = 5,04</p></div>
<div><h5>POPULATION</h5>
<p>213.9M</p></div>
<div><h5>GDP</h5>
<p>US$ 1.61 trillion</p></div>
<div><h5>GDP PER CAPITA</h5>
<p>US$ 8.551</p></div>
</div>
</div>
</div>
</div>
</section>
<section class="bullets-2 bg-light-gray pt-4">
<div class="container d-flex flex-column gap-2">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 d-flex flex-column gap-1"><h6 class="text-center">DESCUBRIR</h6>
<h2 class="text-center"><strong id="i63re7">Explora las oportunidades en Brasil.</strong></h2></div>
</div>
<div class="row justify-content-center row-gap-2">
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico"><img src="/static/img/ico-check.svg" class="w-1"/></div>
<div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="ikbn3k">Disponibilidad</strong>
</h4>
<p id="iniw3g">PIX está disponible 24/7 para individuos y empresas, y las transferencias son
instantáneas.</p></div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico"><img src="/static/img/ico-check.svg" class="w-1"/></div>
<div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="i08fia">Adopción</strong></h4>
<p id="iot8ll">El comercio electrónico brasileño ha ganado 8 millones de nuevos clientes durante
la pandemia de COVID-19.</p></div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico"><img src="/static/img/ico-check.svg" class="w-1"/></div>
<div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="i4hps1">Accesibilidad</strong>
</h4>
<p id="ibaqdi">PIX es compatible con múltiples canales de pago, incluidos móviles, banca por
Internet y cajeros automáticos.</p></div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico"><img src="/static/img/ico-check.svg" class="w-1"/></div>
<div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="ih12bg">Productos en alza</strong>
</h4>
<p id="ibj4of">El deseo de nuevos productos o servicios de moda que normalmente no se encuentran
en Brasil hace que los consumidores brasileños sean fanáticos de las marcas
internacionales.</p></div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico"><img src="/static/img/ico-check.svg" class="w-1"/></div>
<div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="i48c5e">Crecimiento</strong></h4>
<p id="i6mxgt">Según un informe de Statista, se estima que el mercado de comercio electrónico en
Brasil creció un 10,3% en 2022, alcanzando un valor total de R$ 98,7 mil millones
(aproximadamente US$ 18 mil millones).</p></div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico"><img src="/static/img/ico-check.svg" class="w-1"/></div>
<div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="irworf">Oportunidades de
crecimiento</strong></h4>
<p id="izcpao">Crecimiento sin la necesidad de establecer una entidad local, con FacilitaPay
puedes reducir en hasta un 95%* tus costos. (*Comparado con entidades locales).</p></div>
</div>
</div>
</div>
</div>
</section>
<div class="h-4 bg-light-gray"></div>
<section class="table-1 bg-light-gray">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-6">
<div class="row bg-blue border-radius-top p-1">
<div class="col-12"><h4 class="text-white"><strong>Payment Methods</strong></h4></div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1 ignoreanimation"><h4
class="ignoreanimation"><strong id="i0su7">PIX (Pago
Instantáneo)</strong></h4>
<p class="txt-gray ignoreanimation">El sistema de pago instantáneo creado
por el Banco Central de Brasil que está cambiando el mercado de pagos y
transferencias, permitiendo transaccionar en cuestión de segundos, en
cualquier momento del día, incluidos fines de semana y días festivos, de
manera segura y práctica.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/pix-logo.svg" class="ignoreanimation"/>
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4 class="ignoreanimation"><strong
id="i0fky">Tarjetas de crédito locales</strong></h4>
<p class="txt-gray ignoreanimation">El uso de tarjetas de crédito continua
en aumento. Sin embargo, estas son en su mayoría locales y aquellas
habilitadas para uso internacional representan tan solo el 24% de las
transacciones en línea. Empieza a aceptar tarjetas locales e
internacionales para aumentar tus ingresos.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/master.svg" class="ignoreanimation"/><img
src="/static/img/finance/visa.svg" class="ignoreanimation"/><img
src="/static/img/finance/amex.svg" class="ignoreanimation"/><img
src="/static/img/finance/diners.svg" class="ignoreanimation"/><img
src="/static/img/finance/elo.svg" class="ignoreanimation"/><img
src="/static/img/finance/hipercard.svg" class="ignoreanimation"/>
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4 class="ignoreanimation"><strong
id="ijckq">Tarjetas de débito locales</strong></h4>
<p class="txt-gray ignoreanimation">La tarjeta de débito es un método de
pago común en Brasil. Actualmente hay 116 millones de tarjetas de débito
activas en el país, con USD $168 m siendo transaccionados a través de
este método en el 2021. Aceptar tarjetas de débito te permitirá llegar a
una nueva base de consumidores y optimizar tus ingresos en Brasil.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/master.svg" class="ignoreanimation"/><img
src="/static/img/finance/visa.svg" class="ignoreanimation"/><img
src="/static/img/finance/elo.svg" class="ignoreanimation"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4 class="ignoreanimation"><strong
id="iaw0f">Cuotas</strong></h4>
<p class="txt-gray ignoreanimation">Los brasileños tienen la costumbre de
dividir el monto total de una compra realizada con tarjeta de crédito en
hasta 12 pagos mensuales. Ofrecer esta opción permite que tus clientes
puedan incrementar su presupuesto, y por ende el valor de su compra en
hasta un 30%.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/installments.svg" class="ignoreanimation"/>
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4 class="ignoreanimation"><strong>Boleto
Bancário</strong></h4>
<p class="txt-gray ignoreanimation">Aún existe una población no bancarizada
en Brasil y una cultura de dinero físico, el Boleto Bancario ha sido
utilizado históricamente por la población brasileña para pagar facturas
mensuales, servicios y también compras en línea. Ofrecerlo te permitirá
llegar a quienes no poseen cuentas bancarias, cómo también a aquellos
que prefieren pagar a través de este método.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/instant-boleto.svg" class="h-2"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4 class="ignoreanimation">
<strong>Cripto</strong></h4>
<p class="txt-gray ignoreanimation">Brasil es el séptimo mercado de
criptomonedas más grande del mundo y está creciendo rápidamente. Con
FacilitaPay, puedes utilizar criptomonedas en tus flujos de on-ramp y
off-ramp y a la vez transaccionar con pagos locales.Brazil has the
seventh largest crypto market in the world and is growing rapidly. With
FacilitaPay, you can make settlement in crypto, on/off ramp solutions
and receive your local payments in stablecoins.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/ethereum.png" class="ignoreanimation"/><img
src="/static/img/finance/crypto-2.png" class="ignoreanimation"/><img
src="/static/img/finance/bitcoin.png" class="ignoreanimation"/><img
src="/static/img/finance/crypto-3.png" class="ignoreanimation"/>
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4 class="ignoreanimation"><strong
id="i7fcv5">Billeteras Digitales</strong></h4>
<p class="txt-gray ignoreanimation">La popularidad de las billeteras
digitales está aumentando en Brasil, principalmente debido a los
beneficios que ofrecen, como la conveniencia, la seguridad y la
simplicidad de pago. Mantente a la vanguardia del mercado y comienza a
ofrecer billeteras digitales en tu operación de pagos en línea.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/logo-mercadopago.svg"
class="ignoreanimation"/><img
src="/static/img/finance/logo-paypal.svg"
class="ignoreanimation"/><img src="/static/img/finance/picpay.svg"
class="ignoreanimation h-2"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4 class="ignoreanimation"><strong
id="io2dll">Otros métodos de pagos alternativos</strong></h4>
<p class="txt-gray ignoreanimation">Brasil tiene varias formas de pago en
línea además de las tarjetas de crédito. La transferencia bancaria y el
débito en línea son dos opciones de pago efectivas. Permite que tus
usuarios puedan utilizar su cuenta bancaria habitual para realizar un
pago instantáneo sin riesgo de fraudes para tu negocio.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/bank-transfer-cropped--en.svg"
class="ignoreanimation"/><img
src="/static/img/finance/online-debit--en.svg"
class="ignoreanimation"/></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="h-4 bg-light-gray"></div>
<section class="cta-2 bg-light-gray">
<div class="container d-flex flex-column gap-2 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-md-6 col-lg-6 d-flex align-items-center bg-white">
<div class="d-flex flex-column gap-1 p-2"><h4><strong>Download our <span
class="txt-light-green">Brazil</span> Country Guide</strong></h4>
<p>Learn everything you need to know about the eCommerce payments landscape in Brazil in our
straight-to-the-point country guide.</p><a href="#!" class="btn me-auto"><strong>Download
now</strong></a></div>
</div>
<div class="col-12 col-md-6 col-lg-3 bg-light-green">
<div><img src="/static/img/brochure-br.png"/></div>
</div>
</div>
</div>
</section>
<div class="h-1 bg-light-gray"></div>
<section class="pagination-1 bg-light-gray">
<div class="container">
<div class="row justify-content-between">
<div class="col-4"><a href="markets-mexico.php"
class="btn btn-2 d-inline-flex align-items-center gap-1 me-auto"><img
src="/static/img/ico-mexico.svg" class="h-2"/> <span class="arrow left"></span> <span
class="d-none d-lg-block">Prev - <strong>Mexico</strong> country page</span></a></div>
<div class="col-4"><a href="markets-colombia.php"
class="btn btn-2 d-inline-flex align-items-center gap-1 ms-auto"><span
class="d-none d-lg-block">Next - <strong>Colombia</strong> country page</span> <span
class="arrow right"></span> <img src="/static/img/ico-colombia.svg" class="h-2"/></a></div>
</div>
</div>
</section>
<div class="h-4 bg-light-gray"></div>
</body>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Markets Brazil',
                'slug' => NULL,
                'metadescription' => 'BrasilEl mercado de comercio electrónico más grande de América LatinaCon una población de más de 210 millones de personas, Brasil es el sexto país más poblado del mundo y la economía más grande de América Latina. Brasil es un mercado de rápido crecimiento para las empresas digitales, con alta penetración de Internet y smartphones.Libera el potencial de este mercado ofreciendo PIX, una transferencia bancaria instantánea 24/7 y el método de pago más popular en Brasil.Comienza ahora
CONFIADO POR LOS GIGANTES DE LA TECNOLOGÍAMarket Overview BrazilPoblación - 211 millonesEl país más grande de América Latina y el sexto país más poblado del mundo.Crecimiento del comercio electrónicoSe espera que Brasil permanezca entre los 10 principales mercados de comercio electrónico del mundo, creciendo en promedio un 17% al año desde el 2021.Compradores de comercio electrónico - 81.2 millonesUn mercado de comercio electrónico con 81,2 millones de compradores y un ticket promedio de R$ 391.Easily enter the largest economy in Latin America.Offer PIX and many other payment methods.Start nowMIX DE PAGOS DE COMERCIO ELECTRÓNICO DE BRASILMejora tu aceptación de pagos ofreciendo métodos de pago locales en Brasil98% OF MARKET SHARE COVERED BYPIX - 27%CREDIT CARD - 19%DEBIT CARD - 18%BOLETO BANCÁRIO -11%TED - 9%CRYPTO (ACCELERATED GROWTH) - 3%CAPITALBrasiliaREGIONSouth AmericaCURRENCYBrazilian Real USD/BRL = 5,04POPULATION213.9MGDPUS$ 1.61 trillionGDP PER CAPITAUS$ 8.551DESCUBRIRExplora las oportunidades en Brasil.DisponibilidadPIX está disponible 24/7 para individuos y empresas, y las transferencias son instantáneas.AdopciónEl comercio electrónico brasileño ha ganado 8 millones de nuevos clientes durante la pandemia de COVID-19.AccesibilidadPIX es compatible con múltiples canales de pago, incluidos móviles, banca por Internet y cajeros automáticos.Productos en alzaEl deseo de nuevos productos o servicios de moda que normalmente no se encuentran en Brasil hace que los consumidores brasileños sean fanáticos de las marcas internacionales.CrecimientoSegún un informe de Statista, se estima que el mercado de comercio electrónico en Brasil creció un 10,3% en 2022, alcanzando un valor total de R$ 98,7 mil millones (aproximadamente US$ 18 mil millones).Oportunidades de crecimientoCrecimiento sin la necesidad de establecer una entidad local, con FacilitaPay puedes reducir en hasta un 95%* tus costos. (*Comparado con entidades locales).Payment MethodsPIX (Instant Payment)The instant payment system created by the Central Bank of Brazil is changing the market by performing transfers and payments, in a few seconds, at any time of the day - including weekends and holidays - in a safe and practical way.Local Credit CardsThe usage of credit cards has been growing. Although, internationally-enabled credit cards make up only 24% of e-commerce transactions. Start to accept both international and domestic cards and increase your conversions.Local Debit CardsA debit card is a common payment method in Brazil. Today, there are 116M active debit cards in the country, with 664B reais spent with this method in 2019. Accept debit cards to reach a new consumer base and optimize your revenue in Brazil.InstallmentsBrazilians have the habit of splitting the total amount of a purchase made with a credit card in up to 12 monthly payments. Allow your customers to make higher-value purchases and increase your average ticket size.Boleto BancárioBrazil has a cash-centric culture, and Boleto has been historically used by the Brazilian population to pay for monthly bills, taxes, and also e-commerce purchases. Reach the unbanked population and also those whose preference is Boleto out of habit.CryptoBrazil has the seventh largest crypto market in the world and is growing rapidly. With FacilitaPay, you can make settlement in crypto, on/off ramp solutions and receive your local payments in stablecoins.Digital WalletsThe popularity of digital wallets is increasing in Brazil, mostly due to the benefits offered by them, such as convenience, security, and simplicity to pay. Be ahead of the market and start to offer digital wallets on your e-commerce store.Other Alternative PaymentsBrazil has several ways to pay online beyond credit cards. Bank Transfer and Online Debit are two effective payment options. Allow consumers to use their usual bank account to make an instant payment without the risk of chargeback for you.Download our Brazil Country GuideLearn everything you need to know about the eCommerce payments landscape in Brazil in our straight-to-the-point country guide.Download now  Prev - Mexico country pageNext - Colombia country page',
                'created_at' => '2023-05-30 17:55:32',
                'updated_at' => '2023-05-31 17:51:08',
            ),
            21 => 
            array (
                'id' => 48,
                'pages_id' => 18,
                'locale' => 'en',
                'title' => 'Markets Colombia',
            'html' => '<section class="hero-2 bg-blue text-white" style="background-image: url(\'/static/img/bg-market-cl.png\')">
<div class="container d-flex flex-column gap-5 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-6">
<div class="d-flex flex-column flex-lg-row gap-4">
<div class="flag">
<img src="/static/img/ico-colombia.svg" class="w-4">
</div>
<div class="d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1">
<h6 class="txt-light-green">COLOMBIA</h6>
<h2 class="text-white"><strong>The fastest growing online market in Latin America</strong></h2>
</div>
<p>Colombia has a population of 51 million people with a large and young population, which presents a significant market opportunity for digital companies. The country has the highest e-commerce adoption in the region. Reach 100% of Colombians by offering PSE, Efecty and local cards</p>
<a href="optin.php" class="btn me-auto">Start now</a>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
</div>
</div>
<div class="row text-center slider">
<div class="col-12 d-flex flex-column">
<div class="container d-flex flex-column gap-2">
<div class="row">
<div class="col-12 d-flex flex-column align-items-center">
<h6 class="txt-white">Trusted by tech giants:</h6>
</div>
</div>
<div class="row text-center slider">
<div class="col-12">
<ul class="d-flex justify-content-center flex-wrap row-gap-3 column-gap-5">
<li><img src="/static/img/logos/sproutfi-white.png" class="h-2"></li>
<li><img src="/static/img/logos/bitso.png" class="h-2"></li>
<li><img src="/static/img/logos/okx.png" class="h-2"></li>
<li><img src="/static/img/logos/angloamerican-white.png" class="h-2"></li>
<li><img src="/static/img/logos/global66-white.png" class="h-2"></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row">
<div class="col-12">
<h2 class="text-center"><strong>Market Overview <span class="txt-light-green">Colombia</span></strong></h2>
</div>
</div>
<div class="row d-flex row-gap-3 align-items-center">
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico">
<img src="/static/img/icos/ico-1.svg" class="w-2">
</div>
<div class="d-flex flex-column gap-2">
<h4><strong>Population - 51.8M</strong></h4>
<p>TThe fastest growing digital market in and the third most populous country in Latin America</p>
</div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico">
<img src="/static/img/icos/ico-2.svg" class="w-2">
</div>
<div class="d-flex flex-column gap-2">
<h4><strong>eCommerce - $3.8B</strong></h4>
<p>The arrival of global companies in Colombia is boosting e-commerce solutions throughout the value chain of the digital ecosystem. Colombian online consumers are becoming familiar with buying from foreign websites.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico">
<img src="/static/img/icos/ico-3.svg" class="w-2">
</div>
<div class="d-flex flex-column gap-2">
<h4><strong>eShoppers - 11.6M</strong></h4>
<p>There are 11.6M* online shoppers in the country, and the total addressable market is expanding along with the increase of connectivity.</p>
</div>
</div>
</div>
</div>
</div>
</section>



<div class="h-4 bg-white"></div>



<section class="cta cta-1 bg-white">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-sm-6 col-lg-5 d-flex align-items-center bg-light-green">
<div class="square"></div>
<div class="p-2">
<h3><strong>Easily enter the fastest growing online market in Latin America.</strong></h3>
</div>
</div>
<div class="col-12 col-sm-6 col-lg-5 bg-blue txt-white" style="background-image: url(\'/static/img/bg-cta.jpg\');">
<div class="d-flex flex-column gap-1 p-2">
<h4 class="txt-white">Offer PSE and many other payment methods.</h4>
<a href="optin.php" class="btn d-flex"><strong>Start now</strong></a>
</div>
</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>



<section class="map-stats bg-light-gray">
<div class="container d-flex flex-column gap-3 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 d-flex flex-column gap-1">
<h6 class="text-center">Colombia’s eCommerce payment mix</h6>
<h2 class="text-center"><strong>Improve your payment acceptance by offering local payment methods in Colombia</strong></h2>
</div>
</div>
<div class="row d-flex row-gap-3 justify-content-center">
<div class="col-12 col-lg-4">
<div class="d-flex h-100 justify-content-center text-start flex-column pe-3 gap-2">
<div class="badge align-items-center justify-content-center d-flex flex-column">
<span>98% OF <br>MARKET SHARE COVERED BY</span>
<img src="/static/img/logo-facilitapay-white.svg">
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-pse.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">PSE - 16%</p>
<div class="barra">
<div style="width: 16%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-card.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">CREDIT CARD - 52%</p>
<div class="barra">
<div style="width: 52%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-money.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">Cash Payments (EfectY, Baloto, SuRed) - 13%</p>
<div class="barra">
<div style="width: 13%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-international-wires.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">International Wires - 2%</p>
<div class="barra">
<div style="width: 2%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-crypto-currencies.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">Crypto Currencies (Stablecoins) - 3%</p>
<div class="barra">
<div style="width: 3%;"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-7 col-lg-5">
<div>
<img src="/static/img/maps/map-colombia.svg" class="img-fluid">
</div>
</div>

<div class="col-12 col-md-3">
<div class="d-flex h-100 justify-content-center flex-lg-column flex-wrap ps-2 gap-1">

<div>
<h5>CAPITAL</h5>
<p>Bogotá</p>
</div>
<div>
<h5>REGION</h5>
<p>South America</p>
</div>
<div>
<h5>CURRENCY</h5>
<p>Colombian Peso <br>USD/COP = 4344,55</p>
</div>
<div>
<h5>POPULATION</h5>
<p>51.2M</p>
</div>
<div>
<h5>GDP</h5>
<p>US$ 314.32B</p>
</div>
<div>
<h5>GDP PER CAPITA</h5>
<p>US$ 6.131</p>
</div>
</div>

</div>

</div>
</div>
</section>



<section class="bullets-2 bg-light-gray pt-4">
<div class="container d-flex flex-column gap-2">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 d-flex flex-column gap-1">
<h6 class="text-center">DISCOVER</h6>
<h2 class="text-center"><strong>Explore the opportunities in Colombia.</strong></h2>
</div>
</div>
<div class="row justify-content-center row-gap-2">
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Large market</strong></h4>
<p>Colombia has a population of over 50 million people, providing a significant potential market for digital products and services.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Increasing internet usage</strong></h4>
<p>CColombia has seen significant growth in internet usage in recent years, with over 70% of the population now using the internet. This presents an opportunity for digital companies to reach a large and growing user base.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Growing middle class</strong></h4>
<p>Colombia\'s growing middle class has increased purchasing power and disposable income, making them a potential market for digital products and services.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Mobile-first market</strong></h4>
<p>Colombia is a mobile-first market, with a high percentage of the population accessing the internet through their mobile devices. This makes it an attractive market for mobile apps and services.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Government support</strong></h4>
<p>The Colombian government has taken steps to support the growth of the digital economy, including promoting investment and innovation in the sector.</p>
</div>
</div>
</div>
</div>

<div class="row justify-content-center">
<div class="col-12 col-lg-4">
<a href="optin.php" class="btn me-auto"><strong>Start now</strong></a>
</div>
</div>

</div>
</section>



<div class="h-4 bg-light-gray"></div>


<section class="table-1 bg-light-gray">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-6">
<div class="row bg-blue border-radius-top p-1">
<div class="col-12">
<h4 class="text-white"><strong>Payment Methods</strong></h4>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Local Credit Cards</strong></h4>
<p class="txt-gray">This payment method is one of the primary options of Colombians when shopping online. All Colombian cards are enabled to make international purchases, yet, local banks and issuers impose some obstacles to international shopping. FacilitaPay card solution offers local acquiring what increases approval rates.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/master.svg">
<img src="/static/img/finance/visa.svg">
<img src="/static/img/finance/amex.svg">
<img src="/static/img/finance/diners.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Local Debit Cards</strong></h4>
<p class="txt-gray">Debit card usage in Colombia has been growing rapidly in recent years, with over 20 million cardholders in the country as of 2021. The number of POS terminals in Colombia has been increasing, with over 200,000 in use as of 2021. This has helped to boost debit card usage, as consumers can now make card payments at a growing number of merchants. FacilitaPay card solution offers local acquiring what increases approval rates.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/master.svg">
<img src="/static/img/finance/visa.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>PSE (Pagos Seguros en Línea)</strong></h4>
<p class="txt-gray">The preferred alternative payment solution in Colombia. Pagos Seguros en Línea allows your customers to make bank transfers directly from their bank accounts, without needing a credit card.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/pse-logo.png" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Baloto</strong></h4>
<p class="txt-gray">Baloto is Colombia’s main lottery operator in the country and also has a payment network, with more than 13.500 payment stations, it’s able to reach 96% of the cities. Clients can pay purchases offline or online. When choosing the offline option, they receive a payment voucher with a barcode and a serial number, which can be paid at one of the payment stations.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/baloto.png" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>SuRed</strong></h4>
<p class="txt-gray">Being one of the largest payments networks in Colombia, SuRed is partnered with more than 27.000 convenience stores from different brands and across 32 departments. Clients who choose this payment method receive a voucher that can be paid in cash at any of their points.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/sured.png" class="h-1">
</div>
</div>
</div>
</div>

<!--                <div class="row text-start bg-gradient-gray p-1">-->
<!--                  <div class="col-12">-->
<!--                    <div class="d-flex flex-column gap-1">-->
<!--                      <h4><strong>Crypto</strong></h4>-->
<!--                      <p class="txt-gray">Colombia has one of the highest rates of cryptocurrency adoption in Latin America, with around 5 million people estimated to own some form of digital currency. With FacilitaPay, you can make settlement in crypto, on/off ramp solutions and receive your local payments in stablecoins.</p>-->
<!--                      <div class="d-flex gap-1">-->
<!--                          <img src="/static/img/finance/ethereum.png" class="h-1">-->
<!--                          <img src="/static/img/finance/crypto-2.png" class="h-1">-->
<!--                          <img src="/static/img/finance/bitcoin.png" class="h-1">-->
<!--                          <img src="/static/img/finance/crypto-3.png" class="h-1">-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->

<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Efecty</strong></h4>
<p class="txt-gray">With real-time confirmation and easy user experience, Efecty is one of the most popular cash payment vouchers in Colombia, payable in over 10,000 locations throughout the country. Increases your sales by reaching a vast part of Colombian customers that prefer to pay offline, with cash and allows you to reach the unbanked population.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/efecty.svg" class="h-2">
</div>
</div>
</div>
</div>

<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Installments</strong></h4>
<p class="txt-gray">Installment purchases are very popular in Colombia, over 70% of online credit card transactions are installment-based. The clients are allowed to pay their purchase in up to 36 months. The banks, who finance the operation charge interest rates, which are charged directly to the client depending on the agreement he has with his bank.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/installments-36x.svg" class="h-2">
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>



<section class="cta-2 bg-light-gray">
<div class="container d-flex flex-column gap-2 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-md-6 col-lg-6 d-flex align-items-center bg-white">
<div class="d-flex flex-column gap-1 p-2">
<h4><strong>Download our <span class="txt-light-green">Colombia</span> Country Guide</strong></h4>
<p>Learn everything you need to know about the eCommerce payments landscape in Colombia in our straight-to-the-point country guide.</p>
<a href="#!" class="btn me-auto"><strong>Download now</strong></a>
</div>
</div>
<div class="col-12 col-md-6 col-lg-3 bg-light-green">
<div>
<img src="/static/img/brochure-cl.png">
</div>
</div>
</div>
</div>
</section>

<div class="h-1 bg-light-gray"></div>

<section class="pagination-1 bg-light-gray">
<div class="container">
<div class="row justify-content-between">
<div class="col-4">
<a href="markets-brazil.php" class="btn btn-2 d-inline-flex align-items-center gap-1 me-auto"><img src="/static/img/ico-brazil.svg" class="h-2"> <span class="arrow left"></span> <span class="d-none d-lg-block">Prev - <strong>Brazil</strong> country page</span></a>
</div>
<div class="col-4">
<a href="markets-mexico.php" class="btn btn-2 d-inline-flex align-items-center gap-1 ms-auto"><span class="d-none d-lg-block">Next - <strong>Mexico</strong> country page</span> <span class="arrow right"></span> <img src="/static/img/ico-mexico.svg" class="h-2"></a>
</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Markets Colombia',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 17:56:38',
                'updated_at' => '2023-05-30 17:56:38',
            ),
            22 => 
            array (
                'id' => 49,
                'pages_id' => 18,
                'locale' => 'pt',
                'title' => 'Markets Colombia',
            'html' => '<section class="hero-2 bg-blue text-white" style="background-image: url(\'/static/img/bg-market-cl.png\')">
<div class="container d-flex flex-column gap-5 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-6">
<div class="d-flex flex-column flex-lg-row gap-4">
<div class="flag">
<img src="/static/img/ico-colombia.svg" class="w-4">
</div>
<div class="d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1">
<h6 class="txt-light-green">COLOMBIA</h6>
<h2 class="text-white"><strong>The fastest growing online market in Latin America</strong></h2>
</div>
<p>Colombia has a population of 51 million people with a large and young population, which presents a significant market opportunity for digital companies. The country has the highest e-commerce adoption in the region. Reach 100% of Colombians by offering PSE, Efecty and local cards</p>
<a href="optin.php" class="btn me-auto">Start now</a>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
</div>
</div>
<div class="row text-center slider">
<div class="col-12 d-flex flex-column">
<div class="container d-flex flex-column gap-2">
<div class="row">
<div class="col-12 d-flex flex-column align-items-center">
<h6 class="txt-white">Trusted by tech giants:</h6>
</div>
</div>
<div class="row text-center slider">
<div class="col-12">
<ul class="d-flex justify-content-center flex-wrap row-gap-3 column-gap-5">
<li><img src="/static/img/logos/sproutfi-white.png" class="h-2"></li>
<li><img src="/static/img/logos/bitso.png" class="h-2"></li>
<li><img src="/static/img/logos/okx.png" class="h-2"></li>
<li><img src="/static/img/logos/angloamerican-white.png" class="h-2"></li>
<li><img src="/static/img/logos/global66-white.png" class="h-2"></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row">
<div class="col-12">
<h2 class="text-center"><strong>Market Overview <span class="txt-light-green">Colombia</span></strong></h2>
</div>
</div>
<div class="row d-flex row-gap-3 align-items-center">
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico">
<img src="/static/img/icos/ico-1.svg" class="w-2">
</div>
<div class="d-flex flex-column gap-2">
<h4><strong>Population - 51.8M</strong></h4>
<p>TThe fastest growing digital market in and the third most populous country in Latin America</p>
</div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico">
<img src="/static/img/icos/ico-2.svg" class="w-2">
</div>
<div class="d-flex flex-column gap-2">
<h4><strong>eCommerce - $3.8B</strong></h4>
<p>The arrival of global companies in Colombia is boosting e-commerce solutions throughout the value chain of the digital ecosystem. Colombian online consumers are becoming familiar with buying from foreign websites.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico">
<img src="/static/img/icos/ico-3.svg" class="w-2">
</div>
<div class="d-flex flex-column gap-2">
<h4><strong>eShoppers - 11.6M</strong></h4>
<p>There are 11.6M* online shoppers in the country, and the total addressable market is expanding along with the increase of connectivity.</p>
</div>
</div>
</div>
</div>
</div>
</section>



<div class="h-4 bg-white"></div>



<section class="cta cta-1 bg-white">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-sm-6 col-lg-5 d-flex align-items-center bg-light-green">
<div class="square"></div>
<div class="p-2">
<h3><strong>Easily enter the fastest growing online market in Latin America.</strong></h3>
</div>
</div>
<div class="col-12 col-sm-6 col-lg-5 bg-blue txt-white" style="background-image: url(\'/static/img/bg-cta.jpg\');">
<div class="d-flex flex-column gap-1 p-2">
<h4 class="txt-white">Offer PSE and many other payment methods.</h4>
<a href="optin.php" class="btn d-flex"><strong>Start now</strong></a>
</div>
</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>



<section class="map-stats bg-light-gray">
<div class="container d-flex flex-column gap-3 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 d-flex flex-column gap-1">
<h6 class="text-center">Colombia’s eCommerce payment mix</h6>
<h2 class="text-center"><strong>Improve your payment acceptance by offering local payment methods in Colombia</strong></h2>
</div>
</div>
<div class="row d-flex row-gap-3 justify-content-center">
<div class="col-12 col-lg-4">
<div class="d-flex h-100 justify-content-center text-start flex-column pe-3 gap-2">
<div class="badge align-items-center justify-content-center d-flex flex-column">
<span>98% OF <br>MARKET SHARE COVERED BY</span>
<img src="/static/img/logo-facilitapay-white.svg">
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-pse.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">PSE - 16%</p>
<div class="barra">
<div style="width: 16%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-card.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">CREDIT CARD - 52%</p>
<div class="barra">
<div style="width: 52%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-money.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">Cash Payments (EfectY, Baloto, SuRed) - 13%</p>
<div class="barra">
<div style="width: 13%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-international-wires.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">International Wires - 2%</p>
<div class="barra">
<div style="width: 2%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-crypto-currencies.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">Crypto Currencies (Stablecoins) - 3%</p>
<div class="barra">
<div style="width: 3%;"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-7 col-lg-5">
<div>
<img src="/static/img/maps/map-colombia.svg" class="img-fluid">
</div>
</div>

<div class="col-12 col-md-3">
<div class="d-flex h-100 justify-content-center flex-lg-column flex-wrap ps-2 gap-1">

<div>
<h5>CAPITAL</h5>
<p>Bogotá</p>
</div>
<div>
<h5>REGION</h5>
<p>South America</p>
</div>
<div>
<h5>CURRENCY</h5>
<p>Colombian Peso <br>USD/COP = 4344,55</p>
</div>
<div>
<h5>POPULATION</h5>
<p>51.2M</p>
</div>
<div>
<h5>GDP</h5>
<p>US$ 314.32B</p>
</div>
<div>
<h5>GDP PER CAPITA</h5>
<p>US$ 6.131</p>
</div>
</div>

</div>

</div>
</div>
</section>



<section class="bullets-2 bg-light-gray pt-4">
<div class="container d-flex flex-column gap-2">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 d-flex flex-column gap-1">
<h6 class="text-center">DISCOVER</h6>
<h2 class="text-center"><strong>Explore the opportunities in Colombia.</strong></h2>
</div>
</div>
<div class="row justify-content-center row-gap-2">
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Large market</strong></h4>
<p>Colombia has a population of over 50 million people, providing a significant potential market for digital products and services.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Increasing internet usage</strong></h4>
<p>CColombia has seen significant growth in internet usage in recent years, with over 70% of the population now using the internet. This presents an opportunity for digital companies to reach a large and growing user base.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Growing middle class</strong></h4>
<p>Colombia\'s growing middle class has increased purchasing power and disposable income, making them a potential market for digital products and services.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Mobile-first market</strong></h4>
<p>Colombia is a mobile-first market, with a high percentage of the population accessing the internet through their mobile devices. This makes it an attractive market for mobile apps and services.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Government support</strong></h4>
<p>The Colombian government has taken steps to support the growth of the digital economy, including promoting investment and innovation in the sector.</p>
</div>
</div>
</div>
</div>

<div class="row justify-content-center">
<div class="col-12 col-lg-4">
<a href="optin.php" class="btn me-auto"><strong>Start now</strong></a>
</div>
</div>

</div>
</section>



<div class="h-4 bg-light-gray"></div>


<section class="table-1 bg-light-gray">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-6">
<div class="row bg-blue border-radius-top p-1">
<div class="col-12">
<h4 class="text-white"><strong>Payment Methods</strong></h4>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Local Credit Cards</strong></h4>
<p class="txt-gray">This payment method is one of the primary options of Colombians when shopping online. All Colombian cards are enabled to make international purchases, yet, local banks and issuers impose some obstacles to international shopping. FacilitaPay card solution offers local acquiring what increases approval rates.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/master.svg">
<img src="/static/img/finance/visa.svg">
<img src="/static/img/finance/amex.svg">
<img src="/static/img/finance/diners.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Local Debit Cards</strong></h4>
<p class="txt-gray">Debit card usage in Colombia has been growing rapidly in recent years, with over 20 million cardholders in the country as of 2021. The number of POS terminals in Colombia has been increasing, with over 200,000 in use as of 2021. This has helped to boost debit card usage, as consumers can now make card payments at a growing number of merchants. FacilitaPay card solution offers local acquiring what increases approval rates.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/master.svg">
<img src="/static/img/finance/visa.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>PSE (Pagos Seguros en Línea)</strong></h4>
<p class="txt-gray">The preferred alternative payment solution in Colombia. Pagos Seguros en Línea allows your customers to make bank transfers directly from their bank accounts, without needing a credit card.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/pse-logo.png" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Baloto</strong></h4>
<p class="txt-gray">Baloto is Colombia’s main lottery operator in the country and also has a payment network, with more than 13.500 payment stations, it’s able to reach 96% of the cities. Clients can pay purchases offline or online. When choosing the offline option, they receive a payment voucher with a barcode and a serial number, which can be paid at one of the payment stations.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/baloto.png" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>SuRed</strong></h4>
<p class="txt-gray">Being one of the largest payments networks in Colombia, SuRed is partnered with more than 27.000 convenience stores from different brands and across 32 departments. Clients who choose this payment method receive a voucher that can be paid in cash at any of their points.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/sured.png" class="h-1">
</div>
</div>
</div>
</div>

<!--                <div class="row text-start bg-gradient-gray p-1">-->
<!--                  <div class="col-12">-->
<!--                    <div class="d-flex flex-column gap-1">-->
<!--                      <h4><strong>Crypto</strong></h4>-->
<!--                      <p class="txt-gray">Colombia has one of the highest rates of cryptocurrency adoption in Latin America, with around 5 million people estimated to own some form of digital currency. With FacilitaPay, you can make settlement in crypto, on/off ramp solutions and receive your local payments in stablecoins.</p>-->
<!--                      <div class="d-flex gap-1">-->
<!--                          <img src="/static/img/finance/ethereum.png" class="h-1">-->
<!--                          <img src="/static/img/finance/crypto-2.png" class="h-1">-->
<!--                          <img src="/static/img/finance/bitcoin.png" class="h-1">-->
<!--                          <img src="/static/img/finance/crypto-3.png" class="h-1">-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->

<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Efecty</strong></h4>
<p class="txt-gray">With real-time confirmation and easy user experience, Efecty is one of the most popular cash payment vouchers in Colombia, payable in over 10,000 locations throughout the country. Increases your sales by reaching a vast part of Colombian customers that prefer to pay offline, with cash and allows you to reach the unbanked population.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/efecty.svg" class="h-2">
</div>
</div>
</div>
</div>

<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Installments</strong></h4>
<p class="txt-gray">Installment purchases are very popular in Colombia, over 70% of online credit card transactions are installment-based. The clients are allowed to pay their purchase in up to 36 months. The banks, who finance the operation charge interest rates, which are charged directly to the client depending on the agreement he has with his bank.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/installments-36x.svg" class="h-2">
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>



<section class="cta-2 bg-light-gray">
<div class="container d-flex flex-column gap-2 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-md-6 col-lg-6 d-flex align-items-center bg-white">
<div class="d-flex flex-column gap-1 p-2">
<h4><strong>Download our <span class="txt-light-green">Colombia</span> Country Guide</strong></h4>
<p>Learn everything you need to know about the eCommerce payments landscape in Colombia in our straight-to-the-point country guide.</p>
<a href="#!" class="btn me-auto"><strong>Download now</strong></a>
</div>
</div>
<div class="col-12 col-md-6 col-lg-3 bg-light-green">
<div>
<img src="/static/img/brochure-cl.png">
</div>
</div>
</div>
</div>
</section>

<div class="h-1 bg-light-gray"></div>

<section class="pagination-1 bg-light-gray">
<div class="container">
<div class="row justify-content-between">
<div class="col-4">
<a href="markets-brazil.php" class="btn btn-2 d-inline-flex align-items-center gap-1 me-auto"><img src="/static/img/ico-brazil.svg" class="h-2"> <span class="arrow left"></span> <span class="d-none d-lg-block">Prev - <strong>Brazil</strong> country page</span></a>
</div>
<div class="col-4">
<a href="markets-mexico.php" class="btn btn-2 d-inline-flex align-items-center gap-1 ms-auto"><span class="d-none d-lg-block">Next - <strong>Mexico</strong> country page</span> <span class="arrow right"></span> <img src="/static/img/ico-mexico.svg" class="h-2"></a>
</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Markets Colombia',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 17:56:38',
                'updated_at' => '2023-05-30 17:56:38',
            ),
            23 => 
            array (
                'id' => 50,
                'pages_id' => 18,
                'locale' => 'es',
                'title' => 'Markets Colombia',
                'html' => '<body class="home">
<section class="hero-2 bg-blue text-white" id="if5m">
<div class="container d-flex flex-column gap-5 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-6">
<div class="d-flex flex-column flex-lg-row gap-4">
<div class="flag"><img src="/static/img/ico-colombia.svg" class="w-4"/></div>
<div class="d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1"><h6 class="txt-light-green">COLOMBIA</h6>
<h2 class="text-white"><strong id="i1j5m">El mercado online de más rápido crecimiento en
América Latina<br/></strong></h2></div>
<p id="iv91k">Colombia tiene una población de 51 millones de personas, con una población grande
y joven, lo que representa una importante oportunidad de mercado para las empresas
digitales. El país tiene la mayor adopción de comercio electrónico en la región. Llega al
100% de los colombianos ofreciendo tarjetas locales, PSE y Efecty.</p><a href="optin.php"
class="btn me-auto">Comienza
ahora</a></div>
</div>
</div>
<div class="col-12 col-lg-4">
</div>
</div>
<div class="row text-center slider">
<div class="col-12 d-flex flex-column">
<div class="container d-flex flex-column gap-2">
<div class="row">
<div class="col-12 d-flex flex-column align-items-center"><h6 class="txt-white">CONFIADO POR LOS
GIGANTES DE LA TECNOLOGÍA</h6></div>
</div>
<div class="row text-center slider">
<div class="col-12">
<ul class="d-flex justify-content-center flex-wrap row-gap-3 column-gap-5">
<li><img src="/static/img/logos/sproutfi-white.png" class="h-2"/></li>
<li><img src="/static/img/logos/bitso.png" class="h-2"/></li>
<li><img src="/static/img/logos/okx.png" class="h-2"/></li>
<li><img src="/static/img/logos/angloamerican-white.png" class="h-2"/></li>
<li><img src="/static/img/logos/global66-white.png" class="h-2"/></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row">
<div class="col-12"><h2 class="text-center"><strong id="iz7xb">Panorama del mercado en  <span
class="txt-light-green">Colombia</span></strong></h2></div>
</div>
<div class="row d-flex row-gap-3 align-items-center">
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico"><img src="/static/img/icos/ico-1.svg" class="w-2"/></div>
<div class="d-flex flex-column gap-2"><h4><strong id="ir1me">Población - 51,8 millones</strong></h4>
<p id="ihobx">El mercado digital de más rápido crecimiento y el tercer país más poblado de
América Latina</p></div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico"><img src="/static/img/icos/ico-2.svg" class="w-2"/></div>
<div class="d-flex flex-column gap-2"><h4><strong id="iydlk">Comercio electrónico - $ 3.8 mil
millones</strong></h4>
<p id="im944">La llegada de empresas globales a Colombia está impulsando soluciones de comercio
electrónico en toda la cadena de valor del ecosistema digital. Los consumidores en linea
colombianos se están familiarizando con las compras en sitios web extranjeros.</p></div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico"><img src="/static/img/icos/ico-3.svg" class="w-2"/></div>
<div class="d-flex flex-column gap-2"><h4><strong id="iyvyq">Compradores de comercio electrónico -
11.6 millones</strong></h4>
<p id="iek1m">Hay 11.6 millones* de compradores en línea en el país, y el mercado total
direccionable se está expandiendo junto con una mayor conectividad.</p></div>
</div>
</div>
</div>
</div>
</section>
<div class="h-4 bg-white"></div>
<section class="cta cta-1 bg-white">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-sm-6 col-lg-5 d-flex align-items-center bg-light-green">
<div class="square"></div>
<div class="p-2"><h3><strong>Easily enter the fastest growing online market in Latin America.</strong>
</h3></div>
</div>
<div class="col-12 col-sm-6 col-lg-5 bg-blue txt-white" id="i8yqx">
<div class="d-flex flex-column gap-1 p-2"><h4 class="txt-white">Offer PSE and many other payment
methods.</h4><a href="optin.php" class="btn d-flex"><strong>Start now</strong></a></div>
</div>
</div>
</div>
</section>
<div class="h-4 bg-light-gray"></div>
<section class="map-stats bg-light-gray">
<div class="container d-flex flex-column gap-3 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 d-flex flex-column gap-1"><h6 class="text-center">MIX DE PAGOS DE COMERCIO
ELECTRÓNICO DE colombia</h6>
<h2 class="text-center"><strong id="i24tpn">Mejora tu aceptación de pagos ofreciendo métodos de pago
locales en Colombia</strong></h2></div>
</div>
<div class="row d-flex row-gap-3 justify-content-center">
<div class="col-12 col-lg-4">
<div class="d-flex h-100 justify-content-center text-start flex-column pe-3 gap-2">
<div class="badge align-items-center justify-content-center d-flex flex-column"><span>98% OF <br/>MARKET SHARE COVERED BY</span><img
src="/static/img/logo-facilitapay-white.svg"/></div>
<div class="item d-flex align-items-center gap-1">
<div><img src="/static/img/finance/SVG/ico-pse.svg"/></div>
<div class="d-flex flex-column flex-grow-1"><p class="sub">PSE - 16%</p>
<div class="barra">
<div id="ir0q5c"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div><img src="/static/img/finance/SVG/ico-card.svg"/></div>
<div class="d-flex flex-column flex-grow-1"><p class="sub">CREDIT CARD - 52%</p>
<div class="barra">
<div id="i81s7n"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div><img src="/static/img/finance/SVG/ico-money.svg"/></div>
<div class="d-flex flex-column flex-grow-1"><p class="sub">Cash Payments (EfectY, Baloto, SuRed)
- 13%</p>
<div class="barra">
<div id="ivifrl"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div><img src="/static/img/finance/SVG/ico-international-wires.svg"/></div>
<div class="d-flex flex-column flex-grow-1"><p class="sub">International Wires - 2%</p>
<div class="barra">
<div id="iqje06"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div><img src="/static/img/finance/SVG/ico-crypto-currencies.svg"/></div>
<div class="d-flex flex-column flex-grow-1"><p class="sub">Crypto Currencies (Stablecoins) -
3%</p>
<div class="barra">
<div id="irzrzk"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-7 col-lg-5">
<div><img src="/static/img/maps/map-colombia.svg" class="img-fluid"/></div>
</div>
<div class="col-12 col-md-3">
<div class="d-flex h-100 justify-content-center flex-lg-column flex-wrap ps-2 gap-1">
<div><h5>CAPITAL</h5>
<p>Bogotá</p></div>
<div><h5>REGION</h5>
<p>South America</p></div>
<div><h5>CURRENCY</h5>
<p>Colombian Peso <br/>USD/COP = 4344,55</p></div>
<div><h5>POPULATION</h5>
<p>51.2M</p></div>
<div><h5>GDP</h5>
<p>US$ 314.32B</p></div>
<div><h5>GDP PER CAPITA</h5>
<p>US$ 6.131</p></div>
</div>
</div>
</div>
</div>
</section>
<section class="bullets-2 bg-light-gray pt-4">
<div class="container d-flex flex-column gap-2">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 d-flex flex-column gap-1"><h6 class="text-center">DISCOVER</h6>
<h2 class="text-center"><strong id="ittk6o">Explora las oportunidades en Colombia.</strong></h2></div>
</div>
<div class="row justify-content-center row-gap-2">
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico"><img src="/static/img/ico-check.svg" class="w-1"/></div>
<div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="i981fc">Gran mercado</strong></h4>
<p id="i86aaf">Colombia tiene una población de más de 50 millones de personas, lo que
proporciona un mercado potencial significativo para productos y servicios digitales.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico"><img src="/static/img/ico-check.svg" class="w-1"/></div>
<div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="iybnhi">Mayor uso de
Internet</strong></h4>
<p id="i1d2ki">Colombia ha experimentado un crecimiento significativo en el uso de Internet en
los últimos años, con más del 70% de la población que actualmente utiliza Internet. Esto
presenta una oportunidad para que las empresas digitales lleguen a una base de usuarios
grande y creciente.</p></div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico"><img src="/static/img/ico-check.svg" class="w-1"/></div>
<div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="ivnl2b">Crecimiento de la clase
media</strong></h4>
<p id="it8dn9">La creciente clase media de Colombia tiene un mayor poder adquisitivo e ingreso
disponible, lo que lo convierte en un mercado potencial para productos y servicios
digitales.</p></div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico"><img src="/static/img/ico-check.svg" class="w-1"/></div>
<div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="idwp7l">Mercado que prioriza los
dispositivos móviles</strong></h4>
<p id="i97p74">Colombia es un mercado móvil, con un alto porcentaje de la población que accede a
Internet a través de sus dispositivos móviles. Esto lo convierte en un mercado atractivo
para aplicaciones y soluciones móviles.</p></div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico"><img src="/static/img/ico-check.svg" class="w-1"/></div>
<div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="ib3meo">Apoyo
gubernamental</strong></h4>
<p id="ifplra">El gobierno colombiano ha tomado medidas para apoyar el crecimiento de la
economía digital, incluida la promoción de inversiones e innovaciones en el sector.</p>
</div>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-4"><a href="optin.php" class="btn me-auto"><strong id="iwf2ba">Comienza
ahora</strong></a></div>
</div>
</div>
</section>
<div class="h-4 bg-light-gray"></div>
<section class="table-1 bg-light-gray">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-6">
<div class="row bg-blue border-radius-top p-1">
<div class="col-12"><h4 class="text-white"><strong>Payment Methods</strong></h4></div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong id="izygfl">Tarjetas de
crédito</strong></h4>
<p class="txt-gray">Este método de pago es una de las principales opciones
para los colombianos a la hora de comprar en línea. Todas las tarjetas
colombianas pueden realizar compras internacionales, pero los bancos y
emisores locales imponen algunos obstáculos en este tipo de
transacciones. La solución de procesamiento de tarjetas con FacilitaPay
utiliza adquirencia local, lo que aumenta significativamente tus tasas
de aprobación.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/master.svg"/><img
src="/static/img/finance/visa.svg"/><img
src="/static/img/finance/amex.svg"/><img
src="/static/img/finance/diners.svg"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>Tarjetas de débito
locales</strong></h4>
<p class="txt-gray">El uso de tarjetas de débito en Colombia ha crecido
rápidamente en los últimos años, con más de 20 millones de
tarjetahabientes en el país en 2021. La aceptación de tarjetas en
comercios de todos los tipos ha ido en aumento, lo que ha ayudado a
impulsar el uso de las mismas entre los consumidores – sin necesitar
cargar efectivo, y sin el riesgo de endeudarse. La solución de
procesamiento de tarjetas con FacilitaPay utiliza adquirencia local, lo
que aumenta significativamente tus tasas de aprobación.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/master.svg"/><img
src="/static/img/finance/visa.svg"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>PSE (Pagos Seguros en
Línea)</strong></h4>
<p class="txt-gray">La solución de pago alternativa preferida por los
colombianos. Pagos Seguros en Línea permite a sus clientes realizar
transferencias bancarias directamente desde las plataformas de sus
bancos, de forma segura y sin recurrir a tarjetas de crédito.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/pse-logo.png" class="h-2"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>SuRed</strong></h4>
<p class="txt-gray">Siendo una de las redes de pago más grandes de Colombia,
SuRed está asociada con más de 27.000 tiendas de conveniencia de
diferentes marcas y presentes en 32 departamentos. Los clientes que
elijan este método de pago reciben un vale con el que pueden pagar en
efectivo en cualquiera de los puntos de SuRed.</p>
<div class="d-flex flex-wrap gap-1"><img src="/static/img/finance/sured.png"
class="h-1"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>Efecty</strong></h4>
<p class="txt-gray">Con confirmación en tiempo real y una experiencia de
usuario fácil e intuitiva, Efecty es uno de los vales de pago en
efectivo más populares en Colombia, que puede ser pago en los 10.000
puntos de pago esparcidos por todo el país. Aumenta tus ventas al llegar
a una gran parte de los clientes colombianos que prefieren pagar en
efectivo, pudiendo llegar a la población no bancarizada.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/efecty.svg" class="h-2"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>Pagos en Cuotas</strong></h4>
<p class="txt-gray">Los pagos en cuotas son altamente populares en Colombia,
más del 70% de las compras en línea hechas con tarjeta de crédito se
pagan en cuotas. Los clientes pueden pagar sus compras en hasta 36 mes
bancos que financian la operación para el usuario cobrándole una tasa de
interés, cuyo valor depende de las condiciones del usuario y su
banco.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/installments-36x.svg" class="h-2"/></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="h-4 bg-light-gray"></div>
<section class="cta-2 bg-light-gray">
<div class="container d-flex flex-column gap-2 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-md-6 col-lg-6 d-flex align-items-center bg-white">
<div class="d-flex flex-column gap-1 p-2"><h4><strong>Download our <span class="txt-light-green">Colombia</span>
Country Guide</strong></h4>
<p>Learn everything you need to know about the eCommerce payments landscape in Colombia in our
straight-to-the-point country guide.</p><a href="#!" class="btn me-auto"><strong>Download
now</strong></a></div>
</div>
<div class="col-12 col-md-6 col-lg-3 bg-light-green">
<div><img src="/static/img/brochure-cl.png"/></div>
</div>
</div>
</div>
</section>
<div class="h-1 bg-light-gray"></div>
<section class="pagination-1 bg-light-gray">
<div class="container">
<div class="row justify-content-between">
<div class="col-4"><a href="markets-brazil.php"
class="btn btn-2 d-inline-flex align-items-center gap-1 me-auto"><img
src="/static/img/ico-brazil.svg" class="h-2"/> <span class="arrow left"></span> <span
class="d-none d-lg-block">Prev - <strong>Brazil</strong> country page</span></a></div>
<div class="col-4"><a href="markets-mexico.php"
class="btn btn-2 d-inline-flex align-items-center gap-1 ms-auto"><span
class="d-none d-lg-block">Next - <strong>Mexico</strong> country page</span> <span
class="arrow right"></span> <img src="/static/img/ico-mexico.svg" class="h-2"/></a></div>
</div>
</div>
</section>
<div class="h-4 bg-light-gray"></div>
</body>',
            'css' => '* { box-sizing: border-box; } body {margin: 0;}#if5m{background-image:url(\'/static/img/bg-market-cl.png\');}#i8yqx{background-image:url(\'/static/img/bg-cta.jpg\');}#ir0q5c{width:16%;}#i81s7n{width:52%;}#ivifrl{width:13%;}#iqje06{width:2%;}#irzrzk{width:3%;}',
                'metatitle' => 'Markets Colombia',
                'slug' => NULL,
                'metadescription' => 'COLOMBIAEl mercado online de más rápido crecimiento en América LatinaColombia tiene una población de 51 millones de personas, con una población grande y joven, lo que representa una importante oportunidad de mercado para las empresas digitales. El país tiene la mayor adopción de comercio electrónico en la región. Llega al 100% de los colombianos ofreciendo tarjetas locales, PSE y Efecty.Comienza ahora
CONFIADO POR LOS GIGANTES DE LA TECNOLOGÍAPanorama del mercado en  ColombiaPoblación - 51,8 millonesEl mercado digital de más rápido crecimiento y el tercer país más poblado de América LatinaComercio electrónico - $ 3.8 mil millonesLa llegada de empresas globales a Colombia está impulsando soluciones de comercio electrónico en toda la cadena de valor del ecosistema digital. Los consumidores en linea colombianos se están familiarizando con las compras en sitios web extranjeros.Compradores de comercio electrónico - 11.6 millonesHay 11.6 millones* de compradores en línea en el país, y el mercado total direccionable se está expandiendo junto con una mayor conectividad.Easily enter the fastest growing online market in Latin America.Offer PSE and many other payment methods.Start nowMIX DE PAGOS DE COMERCIO ELECTRÓNICO DE colombiaMejora tu aceptación de pagos ofreciendo métodos de pago locales en Colombia98% OF MARKET SHARE COVERED BYPSE - 16%CREDIT CARD - 52%Cash Payments (EfectY, Baloto, SuRed) - 13%International Wires - 2%Crypto Currencies (Stablecoins) - 3%CAPITALBogotáREGIONSouth AmericaCURRENCYColombian Peso USD/COP = 4344,55POPULATION51.2MGDPUS$ 314.32BGDP PER CAPITAUS$ 6.131DISCOVERExplora las oportunidades en Colombia.Gran mercadoColombia tiene una población de más de 50 millones de personas, lo que proporciona un mercado potencial significativo para productos y servicios digitales.Mayor uso de InternetColombia ha experimentado un crecimiento significativo en el uso de Internet en los últimos años, con más del 70% de la población que actualmente utiliza Internet. Esto presenta una oportunidad para que las empresas digitales lleguen a una base de usuarios grande y creciente.Crecimiento de la clase mediaLa creciente clase media de Colombia tiene un mayor poder adquisitivo e ingreso disponible, lo que lo convierte en un mercado potencial para productos y servicios digitales.Mercado que prioriza los dispositivos móvilesColombia es un mercado móvil, con un alto porcentaje de la población que accede a Internet a través de sus dispositivos móviles. Esto lo convierte en un mercado atractivo para aplicaciones y soluciones móviles.Apoyo gubernamentalEl gobierno colombiano ha tomado medidas para apoyar el crecimiento de la economía digital, incluida la promoción de inversiones e innovaciones en el sector.Comienza ahoraPayment MethodsLocal Credit CardsThis payment method is one of the primary options of Colombians when shopping online. All Colombian cards are enabled to make international purchases, yet, local banks and issuers impose some obstacles to international shopping. FacilitaPay card solution offers local acquiring what increases approval rates.Local Debit CardsDebit card usage in Colombia has been growing rapidly in recent years, with over 20 million cardholders in the country as of 2021. The number of POS terminals in Colombia has been increasing, with over 200,000 in use as of 2021. This has helped to boost debit card usage, as consumers can now make card payments at a growing number of merchants. FacilitaPay card solution offers local acquiring what increases approval rates.PSE (Pagos Seguros en Línea)The preferred alternative payment solution in Colombia. Pagos Seguros en Línea allows your customers to make bank transfers directly from their bank accounts, without needing a credit card.BalotoBaloto is Colombia’s main lottery operator in the country and also has a payment network, with more than 13.500 payment stations, it’s able to reach 96% of the cities. Clients can pay purchases offline or online. When choosing the offline option, they receive a payment voucher with a barcode and a serial number, which can be paid at one of the payment stations.SuRedBeing one of the largest payments networks in Colombia, SuRed is partnered with more than 27.000 convenience stores from different brands and across 32 departments. Clients who choose this payment method receive a voucher that can be paid in cash at any of their points.-->-->-->Crypto-->Colombia has one of the highest rates of cryptocurrency adoption in Latin America, with around 5 million people estimated to own some form of digital currency. With FacilitaPay, you can make settlement in crypto, on/off ramp solutions and receive your local payments in stablecoins.-->-->-->-->-->-->-->-->-->-->EfectyWith real-time confirmation and easy user experience, Efecty is one of the most popular cash payment vouchers in Colombia, payable in over 10,000 locations throughout the country. Increases your sales by reaching a vast part of Colombian customers that prefer to pay offline, with cash and allows you to reach the unbanked population.InstallmentsInstallment purchases are very popular in Colombia, over 70% of online credit card transactions are installment-based. The clients are allowed to pay their purchase in up to 36 months. The banks, who finance the operation charge interest rates, which are charged directly to the client depending on the agreement he has with his bank.Download our Colombia Country GuideLearn everything you need to know about the eCommerce payments landscape in Colombia in our straight-to-the-point country guide.Download now  Prev - Brazil country pageNext - Mexico country page',
                'created_at' => '2023-05-30 17:56:38',
                'updated_at' => '2023-05-31 17:55:43',
            ),
            24 => 
            array (
                'id' => 51,
                'pages_id' => 19,
                'locale' => 'en',
                'title' => 'Markets Mexico',
            'html' => '<section class="hero-2 bg-blue text-white" style="background-image: url(\'/static/img/bg-market-mx.png\')">
<div class="container d-flex flex-column gap-5 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-6">
<div class="d-flex flex-column flex-lg-row gap-4">
<div class="flag">
<img src="/static/img/ico-mexico.svg" class="w-4">
</div>
<div class="d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1">
<h6 class="txt-light-green">Mexico</h6>
<h2 class="text-white"><strong>The second largest economy in LatAm.</strong></h2>
</div>
<p>Mexico offers a large and growing market for e-commerce with a population of over 130 million people and increasing internet penetration, making it an attractive investment opportunity for e-commerce companies. With favorable demographic trends and supportive government policies, Mexico presents a stable and predictable business environment for companies looking to expand their e-commerce operations.</p>
<a href="optin.php" class="btn me-auto">Start now</a>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
</div>
</div>
<div class="row text-center slider">
<div class="col-12 d-flex flex-column">
<div class="container d-flex flex-column gap-2">
<div class="row">
<div class="col-12 d-flex flex-column align-items-center">
<h6 class="txt-white">Trusted by tech giants:</h6>
</div>
</div>
<div class="row text-center slider">
<div class="col-12">
<ul class="d-flex justify-content-center flex-wrap row-gap-3 column-gap-5">
<li><img src="/static/img/logos/sproutfi-white.png" class="h-2"></li>
<li><img src="/static/img/logos/bitso.png" class="h-2"></li>
<li><img src="/static/img/logos/okx.png" class="h-2"></li>
<li><img src="/static/img/logos/angloamerican-white.png" class="h-2"></li>
<li><img src="/static/img/logos/global66-white.png" class="h-2"></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row">
<div class="col-12">
<h2 class="text-center"><strong>Market Overview <span class="txt-light-green">Mexico</span></strong></h2>
</div>
</div>
<div class="row d-flex row-gap-3 align-items-center">
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico">
<img src="/static/img/icos/ico-1.svg" class="w-2">
</div>
<div class="d-flex flex-column gap-2">
<h4><strong>Population - 130M</strong></h4>
<p>The second largest economy in LatAm and the world\'s twelfth most populous country.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico">
<img src="/static/img/icos/ico-2.svg" class="w-2">
</div>
<div class="d-flex flex-column gap-2">
<h4><strong>Market size</strong></h4>
<p>According to a report by Statista, the e-commerce market in Mexico was valued at $22.6 billion in 2020 and is expected to reach $36.3 billion by 2024.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico">
<img src="/static/img/icos/ico-3.svg" class="w-2">
</div>
<div class="d-flex flex-column gap-2">
<h4><strong>Mobile Commerce</strong></h4>
<p>Mobile commerce is gaining popularity in Mexico and is expected to drive the growth of the e-commerce market in the future. In 2020, 56% of online purchases in Mexico were made using a mobile device.</p>
</div>
</div>
</div>
</div>
</div>
</section>



<div class="h-4 bg-white"></div>



<section class="cta cta-1 bg-white">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-sm-6 col-lg-5 d-flex align-items-center bg-light-green">
<div class="square"></div>
<div class="p-2">
<h3><strong>Easily enter the second largest economy in LatAm.</strong></h3>
</div>
</div>
<div class="col-12 col-sm-6 col-lg-5 bg-blue txt-white" style="background-image: url(\'/static/img/bg-cta.jpg\');">
<div class="d-flex flex-column gap-1 p-2">
<h4 class="txt-white">Offer OXXO and many other payment methods.</h4>
<a href="optin.php" class="btn d-flex"><strong>Start now</strong></a>
</div>
</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>



<section class="map-stats bg-light-gray">
<div class="container d-flex flex-column gap-3 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 d-flex flex-column gap-1">
<h6 class="text-center">Mexico’s eCommerce payment mix</h6>
<h2 class="text-center"><strong>Improve your payment acceptance by offering local payment methods in Mexico</strong></h2>
</div>
</div>
<div class="row d-flex row-gap-3 justify-content-center">
<div class="col-12 col-lg-4">
<div class="d-flex h-100 justify-content-center text-start flex-column pe-3 gap-2">
<div class="badge align-items-center justify-content-center d-flex flex-column">
<span>98% OF <br>MARKET SHARE COVERED BY</span>
<img src="/static/img/logo-facilitapay-white.svg">
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-card.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">CREDIT CARD - 35%</p>
<div class="barra">
<div style="width: 35%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-card.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">DEBIT CARD - 19%</p>
<div class="barra">
<div style="width: 19%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-money.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">DIGITAL WALLETS - 27%</p>
<div class="barra">
<div style="width: 27%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-oxxo.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">OXXO - 20%</p>
<div class="barra">
<div style="width: 20%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-ted.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">BANK TRANSFERS - 8%</p>
<div class="barra">
<div style="width: 8%;"></div>
</div>
</div>
</div>

<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-money.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">CASH - 8%</p>
<div class="barra">
<div style="width: 8%;"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-7 col-lg-5">
<div>
<img src="/static/img/maps/map-mexico.svg" class="img-fluid">
</div>
</div>
<div class="col-12 col-md-3">
<div class="d-flex h-100 justify-content-center flex-lg-column flex-wrap ps-2 gap-1">

<div>
<h5>CAPITAL</h5>
<p>Mexico City</p>
</div>
<div>
<h5>REGION</h5>
<p>North America</p>
</div>
<div>
<h5>CURRENCY</h5>
<p>Mexican Peso <br>USD/MXN = 19,97</p>
</div>
<div>
<h5>POPULATION</h5>
<p>130.2M</p>
</div>
<div>
<h5>GDP</h5>
<p>US$ 129 Trillion</p>
</div>
<div>
<h5>GDP PER CAPITA</h5>
<p>US $9.926</p>
</div>
</div>

</div>
</div>
</div>
</section>



<section class="bullets-2 bg-light-gray pt-4">
<div class="container d-flex flex-column gap-2">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 d-flex flex-column gap-1">
<h6 class="text-center">DISCOVER</h6>
<h2 class="text-center"><strong>Explore the opportunities in Mexico.</strong></h2>
</div>
</div>
<div class="row justify-content-center row-gap-2">
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Large and growing population</strong></h4>
<p>Large and growing population: Mexico has a population of over 130 million people, making it one of the largest consumer markets in the world. This large consumer base provides a significant opportunity for e-commerce companies to tap into.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Increasing internet penetration</strong></h4>
<p>The number of internet users in Mexico has been growing rapidly in recent years, and this trend is expected to continue in the future. This increase in internet usage is creating a growing market for e-commerce companies.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Favorable demographic trends</strong></h4>
<p>Mexico has a young and growing middle class, which is driving consumer spending and e-commerce growth. Additionally, Mexico\'s demographic trends, such as urbanization and increasing education levels, are creating a more favorable environment for e-commerce.
</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Government support</strong></h4>
<p>The Mexican government is supportive of e-commerce and has implemented policies to encourage its growth. This supportive environment provides a more stable and predictable business environment for e-commerce companies operating in Mexico.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Payment methods</strong></h4>
<p>Credit cards are the most widely used payment method for e-commerce transactions in Mexico, followed by bank transfers and cash on delivery.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Popular products</strong></h4>
<p>The most popular product categories in the Mexican e-commerce market are fashion and accessories, electronics, and home and garden items.</p>
</div>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-4">
<a href="optin.php" class="btn me-auto"><strong>Start now</strong></a>
</div>
</div>

</div>
</section>



<div class="h-4 bg-light-gray"></div>



<section class="table-1 bg-light-gray">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-6">
<div class="row bg-blue border-radius-top p-1">
<div class="col-12">
<h4 class="text-white"><strong>Payment Methods</strong></h4>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>OXXO</strong></h4>
<p class="txt-gray">OXXO is one of the most famous voucher payments in Mexico. People are used to going to convenience stores to pay bills, and also their vouchers for e-commerce purchases. Start to accept OXXO as a payment method and reach more consumers.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/oxxo-pay.svg" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>OXXO Pay</strong></h4>
<p class="txt-gray">The most known payment method in Mexico now with real-time confirmation.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/oxxo-pay.svg" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Local Credit and Debit Cards</strong></h4>
<p class="txt-gray">Access to financial services is still growing, and credit card penetration is on the rise in Mexico. Local acquiring can offer better approval rates in Mexico, and you can accept local debit cards.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/master.svg">
<img src="/static/img/finance/visa.svg">
<img src="/static/img/finance/amex.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Credit Card Installments</strong></h4>
<p class="txt-gray">With installments, consumers can split up purchases in 3, 6, 9, and 12 monthly payments depending on the price of the purchase. Offer installments to your Mexican customers and increase average ticket sizes.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/installments.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>SPEI</strong></h4>
<p class="txt-gray">Whenever a Mexican wants to make an interbank transfer, they need to use SPEI. The Mexican system for online banking transactions. Allow your customers to pay for their purchases with online bank transfers through SPEI.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/spei.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Crypto</strong></h4>
<p class="txt-gray">The crypto market is becoming increasingly important in Mexico due to the country\'s large population of unbanked individuals, high levels of remittance inflows, and growing interest in digital assets as a hedge against inflation and economic instability. With FacilitaPay, you can make settlement in crypto, on/off ramp solutions and receive your local payments in stablecoins.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/ethereum.png" class="h-1">
<img src="/static/img/finance/crypto-2.png" class="h-1">
<img src="/static/img/finance/bitcoin.png" class="h-1">
<img src="/static/img/finance/crypto-3.png" class="h-1">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Digital Wallets</strong></h4>
<p class="txt-gray">The popularity of digital wallets is increasing in México, mostly due to the benefits offered by them, such as convenience, security, and simplicity to pay. Be ahead of the market and start to offer digital wallets on your e-commerce store.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/logo-mercadopago.svg" >
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Other Alternative Payments</strong></h4>
<p class="txt-gray">Mexico has several payment methods besides credit cards. Voucher payments, Oxxo and digital wallets are very common methods used by online consumers.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/bank-transfer-cropped--en.svg" >
<img src="/static/img/finance/online-debit--en.svg" class="h-1">
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>



<section class="cta-2 bg-light-gray">
<div class="container d-flex flex-column gap-2 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-md-6 col-lg-6 d-flex align-items-center bg-white">
<div class="d-flex flex-column gap-1 p-2">
<h4><strong>Download our <span class="txt-light-green">Mexico</span> Country Guide</strong></h4>
<p>Learn everything you need to know about the eCommerce payments landscape in Mexico in our straight-to-the-point country guide.</p>
<a href="#!" class="btn me-auto"><strong>Download now</strong></a>
</div>
</div>
<div class="col-12 col-md-6 col-lg-3 bg-light-green">
<div>
<img src="/static/img/brochure-mx.png">
</div>
</div>
</div>
</div>
</section>



<div class="h-1 bg-light-gray"></div>



<section class="pagination-1 bg-light-gray">
<div class="container">
<div class="row justify-content-between">
<div class="col-4">
<a href="markets-colombia.php" class="btn btn-2 d-inline-flex align-items-center gap-1 me-auto"><img src="/static/img/ico-colombia.svg" class="h-2"> <span class="arrow left"></span> <span class="d-none d-lg-block">Prev - <strong>Colombia</strong> country page</span></a>
</div>
<div class="col-4">
<a href="markets-brazil.php" class="btn btn-2 d-inline-flex align-items-center gap-1 ms-auto"><span class="d-none d-lg-block">Next - <strong>Brazil</strong> country page</span> <span class="arrow right"></span> <img src="/static/img/ico-brazil.svg" class="h-2"></a>
</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Markets Mexico',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 17:58:04',
                'updated_at' => '2023-05-30 17:58:04',
            ),
            25 => 
            array (
                'id' => 52,
                'pages_id' => 19,
                'locale' => 'pt',
                'title' => 'Markets Mexico',
            'html' => '<section class="hero-2 bg-blue text-white" style="background-image: url(\'/static/img/bg-market-mx.png\')">
<div class="container d-flex flex-column gap-5 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-6">
<div class="d-flex flex-column flex-lg-row gap-4">
<div class="flag">
<img src="/static/img/ico-mexico.svg" class="w-4">
</div>
<div class="d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1">
<h6 class="txt-light-green">Mexico</h6>
<h2 class="text-white"><strong>The second largest economy in LatAm.</strong></h2>
</div>
<p>Mexico offers a large and growing market for e-commerce with a population of over 130 million people and increasing internet penetration, making it an attractive investment opportunity for e-commerce companies. With favorable demographic trends and supportive government policies, Mexico presents a stable and predictable business environment for companies looking to expand their e-commerce operations.</p>
<a href="optin.php" class="btn me-auto">Start now</a>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
</div>
</div>
<div class="row text-center slider">
<div class="col-12 d-flex flex-column">
<div class="container d-flex flex-column gap-2">
<div class="row">
<div class="col-12 d-flex flex-column align-items-center">
<h6 class="txt-white">Trusted by tech giants:</h6>
</div>
</div>
<div class="row text-center slider">
<div class="col-12">
<ul class="d-flex justify-content-center flex-wrap row-gap-3 column-gap-5">
<li><img src="/static/img/logos/sproutfi-white.png" class="h-2"></li>
<li><img src="/static/img/logos/bitso.png" class="h-2"></li>
<li><img src="/static/img/logos/okx.png" class="h-2"></li>
<li><img src="/static/img/logos/angloamerican-white.png" class="h-2"></li>
<li><img src="/static/img/logos/global66-white.png" class="h-2"></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row">
<div class="col-12">
<h2 class="text-center"><strong>Market Overview <span class="txt-light-green">Mexico</span></strong></h2>
</div>
</div>
<div class="row d-flex row-gap-3 align-items-center">
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico">
<img src="/static/img/icos/ico-1.svg" class="w-2">
</div>
<div class="d-flex flex-column gap-2">
<h4><strong>Population - 130M</strong></h4>
<p>The second largest economy in LatAm and the world\'s twelfth most populous country.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico">
<img src="/static/img/icos/ico-2.svg" class="w-2">
</div>
<div class="d-flex flex-column gap-2">
<h4><strong>Market size</strong></h4>
<p>According to a report by Statista, the e-commerce market in Mexico was valued at $22.6 billion in 2020 and is expected to reach $36.3 billion by 2024.</p>
</div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico">
<img src="/static/img/icos/ico-3.svg" class="w-2">
</div>
<div class="d-flex flex-column gap-2">
<h4><strong>Mobile Commerce</strong></h4>
<p>Mobile commerce is gaining popularity in Mexico and is expected to drive the growth of the e-commerce market in the future. In 2020, 56% of online purchases in Mexico were made using a mobile device.</p>
</div>
</div>
</div>
</div>
</div>
</section>



<div class="h-4 bg-white"></div>



<section class="cta cta-1 bg-white">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-sm-6 col-lg-5 d-flex align-items-center bg-light-green">
<div class="square"></div>
<div class="p-2">
<h3><strong>Easily enter the second largest economy in LatAm.</strong></h3>
</div>
</div>
<div class="col-12 col-sm-6 col-lg-5 bg-blue txt-white" style="background-image: url(\'/static/img/bg-cta.jpg\');">
<div class="d-flex flex-column gap-1 p-2">
<h4 class="txt-white">Offer OXXO and many other payment methods.</h4>
<a href="optin.php" class="btn d-flex"><strong>Start now</strong></a>
</div>
</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>



<section class="map-stats bg-light-gray">
<div class="container d-flex flex-column gap-3 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 d-flex flex-column gap-1">
<h6 class="text-center">Mexico’s eCommerce payment mix</h6>
<h2 class="text-center"><strong>Improve your payment acceptance by offering local payment methods in Mexico</strong></h2>
</div>
</div>
<div class="row d-flex row-gap-3 justify-content-center">
<div class="col-12 col-lg-4">
<div class="d-flex h-100 justify-content-center text-start flex-column pe-3 gap-2">
<div class="badge align-items-center justify-content-center d-flex flex-column">
<span>98% OF <br>MARKET SHARE COVERED BY</span>
<img src="/static/img/logo-facilitapay-white.svg">
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-card.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">CREDIT CARD - 35%</p>
<div class="barra">
<div style="width: 35%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-card.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">DEBIT CARD - 19%</p>
<div class="barra">
<div style="width: 19%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-money.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">DIGITAL WALLETS - 27%</p>
<div class="barra">
<div style="width: 27%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-oxxo.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">OXXO - 20%</p>
<div class="barra">
<div style="width: 20%;"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-ted.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">BANK TRANSFERS - 8%</p>
<div class="barra">
<div style="width: 8%;"></div>
</div>
</div>
</div>

<div class="item d-flex align-items-center gap-1">
<div>
<img src="/static/img/finance/SVG/ico-money.svg">
</div>
<div class="d-flex flex-column flex-grow-1">
<p class="sub">CASH - 8%</p>
<div class="barra">
<div style="width: 8%;"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-7 col-lg-5">
<div>
<img src="/static/img/maps/map-mexico.svg" class="img-fluid">
</div>
</div>
<div class="col-12 col-md-3">
<div class="d-flex h-100 justify-content-center flex-lg-column flex-wrap ps-2 gap-1">

<div>
<h5>CAPITAL</h5>
<p>Mexico City</p>
</div>
<div>
<h5>REGION</h5>
<p>North America</p>
</div>
<div>
<h5>CURRENCY</h5>
<p>Mexican Peso <br>USD/MXN = 19,97</p>
</div>
<div>
<h5>POPULATION</h5>
<p>130.2M</p>
</div>
<div>
<h5>GDP</h5>
<p>US$ 129 Trillion</p>
</div>
<div>
<h5>GDP PER CAPITA</h5>
<p>US $9.926</p>
</div>
</div>

</div>
</div>
</div>
</section>



<section class="bullets-2 bg-light-gray pt-4">
<div class="container d-flex flex-column gap-2">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 d-flex flex-column gap-1">
<h6 class="text-center">DISCOVER</h6>
<h2 class="text-center"><strong>Explore the opportunities in Mexico.</strong></h2>
</div>
</div>
<div class="row justify-content-center row-gap-2">
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Large and growing population</strong></h4>
<p>Large and growing population: Mexico has a population of over 130 million people, making it one of the largest consumer markets in the world. This large consumer base provides a significant opportunity for e-commerce companies to tap into.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Increasing internet penetration</strong></h4>
<p>The number of internet users in Mexico has been growing rapidly in recent years, and this trend is expected to continue in the future. This increase in internet usage is creating a growing market for e-commerce companies.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Favorable demographic trends</strong></h4>
<p>Mexico has a young and growing middle class, which is driving consumer spending and e-commerce growth. Additionally, Mexico\'s demographic trends, such as urbanization and increasing education levels, are creating a more favorable environment for e-commerce.
</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Government support</strong></h4>
<p>The Mexican government is supportive of e-commerce and has implemented policies to encourage its growth. This supportive environment provides a more stable and predictable business environment for e-commerce companies operating in Mexico.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Payment methods</strong></h4>
<p>Credit cards are the most widely used payment method for e-commerce transactions in Mexico, followed by bank transfers and cash on delivery.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico">
<img src="/static/img/ico-check.svg" class="w-1">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4><strong>Popular products</strong></h4>
<p>The most popular product categories in the Mexican e-commerce market are fashion and accessories, electronics, and home and garden items.</p>
</div>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-4">
<a href="optin.php" class="btn me-auto"><strong>Start now</strong></a>
</div>
</div>

</div>
</section>



<div class="h-4 bg-light-gray"></div>



<section class="table-1 bg-light-gray">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-6">
<div class="row bg-blue border-radius-top p-1">
<div class="col-12">
<h4 class="text-white"><strong>Payment Methods</strong></h4>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>OXXO</strong></h4>
<p class="txt-gray">OXXO is one of the most famous voucher payments in Mexico. People are used to going to convenience stores to pay bills, and also their vouchers for e-commerce purchases. Start to accept OXXO as a payment method and reach more consumers.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/oxxo-pay.svg" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>OXXO Pay</strong></h4>
<p class="txt-gray">The most known payment method in Mexico now with real-time confirmation.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/oxxo-pay.svg" class="h-2">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Local Credit and Debit Cards</strong></h4>
<p class="txt-gray">Access to financial services is still growing, and credit card penetration is on the rise in Mexico. Local acquiring can offer better approval rates in Mexico, and you can accept local debit cards.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/master.svg">
<img src="/static/img/finance/visa.svg">
<img src="/static/img/finance/amex.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Credit Card Installments</strong></h4>
<p class="txt-gray">With installments, consumers can split up purchases in 3, 6, 9, and 12 monthly payments depending on the price of the purchase. Offer installments to your Mexican customers and increase average ticket sizes.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/installments.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>SPEI</strong></h4>
<p class="txt-gray">Whenever a Mexican wants to make an interbank transfer, they need to use SPEI. The Mexican system for online banking transactions. Allow your customers to pay for their purchases with online bank transfers through SPEI.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/spei.svg">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Crypto</strong></h4>
<p class="txt-gray">The crypto market is becoming increasingly important in Mexico due to the country\'s large population of unbanked individuals, high levels of remittance inflows, and growing interest in digital assets as a hedge against inflation and economic instability. With FacilitaPay, you can make settlement in crypto, on/off ramp solutions and receive your local payments in stablecoins.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/ethereum.png" class="h-1">
<img src="/static/img/finance/crypto-2.png" class="h-1">
<img src="/static/img/finance/bitcoin.png" class="h-1">
<img src="/static/img/finance/crypto-3.png" class="h-1">
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Digital Wallets</strong></h4>
<p class="txt-gray">The popularity of digital wallets is increasing in México, mostly due to the benefits offered by them, such as convenience, security, and simplicity to pay. Be ahead of the market and start to offer digital wallets on your e-commerce store.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/logo-mercadopago.svg" >
</div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1">
<div class="col-12">
<div class="d-flex flex-column gap-1">
<h4><strong>Other Alternative Payments</strong></h4>
<p class="txt-gray">Mexico has several payment methods besides credit cards. Voucher payments, Oxxo and digital wallets are very common methods used by online consumers.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/bank-transfer-cropped--en.svg" >
<img src="/static/img/finance/online-debit--en.svg" class="h-1">
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>



<section class="cta-2 bg-light-gray">
<div class="container d-flex flex-column gap-2 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-md-6 col-lg-6 d-flex align-items-center bg-white">
<div class="d-flex flex-column gap-1 p-2">
<h4><strong>Download our <span class="txt-light-green">Mexico</span> Country Guide</strong></h4>
<p>Learn everything you need to know about the eCommerce payments landscape in Mexico in our straight-to-the-point country guide.</p>
<a href="#!" class="btn me-auto"><strong>Download now</strong></a>
</div>
</div>
<div class="col-12 col-md-6 col-lg-3 bg-light-green">
<div>
<img src="/static/img/brochure-mx.png">
</div>
</div>
</div>
</div>
</section>



<div class="h-1 bg-light-gray"></div>



<section class="pagination-1 bg-light-gray">
<div class="container">
<div class="row justify-content-between">
<div class="col-4">
<a href="markets-colombia.php" class="btn btn-2 d-inline-flex align-items-center gap-1 me-auto"><img src="/static/img/ico-colombia.svg" class="h-2"> <span class="arrow left"></span> <span class="d-none d-lg-block">Prev - <strong>Colombia</strong> country page</span></a>
</div>
<div class="col-4">
<a href="markets-brazil.php" class="btn btn-2 d-inline-flex align-items-center gap-1 ms-auto"><span class="d-none d-lg-block">Next - <strong>Brazil</strong> country page</span> <span class="arrow right"></span> <img src="/static/img/ico-brazil.svg" class="h-2"></a>
</div>
</div>
</div>
</section>



<div class="h-4 bg-light-gray"></div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Markets Mexico',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 17:58:04',
                'updated_at' => '2023-05-30 17:58:04',
            ),
            26 => 
            array (
                'id' => 53,
                'pages_id' => 19,
                'locale' => 'es',
                'title' => 'Markets Mexico',
                'html' => '<body class="home">
<section class="hero-2 bg-blue text-white" id="ii4h">
<div class="container d-flex flex-column gap-5 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-6">
<div class="d-flex flex-column flex-lg-row gap-4">
<div class="flag"><img src="/static/img/ico-mexico.svg" class="w-4"/></div>
<div class="d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1"><h6 class="txt-light-green">Mexico</h6>
<h2 class="text-white"><strong id="i5o44">La segunda economía más grande de América
Latina.</strong></h2></div>
<p id="ihnd2">México ofrece un mercado grande y creciente para el comercio electrónico, con una
población de más de 130 millones de personas y una creciente penetración de Internet, lo que
lo convierte en una oportunidad de inversión atractiva para las empresas de comercio
electrónico. Con tendencias demográficas favorables y políticas gubernamentales de apoyo,
México presenta un entorno empresarial estable y predecible para las empresas que buscan
expandir sus operaciones de comercio electrónico.</p><a href="optin.php"
class="btn me-auto">Comienza
ahora</a></div>
</div>
</div>
<div class="col-12 col-lg-4">
</div>
</div>
<div class="row text-center slider">
<div class="col-12 d-flex flex-column">
<div class="container d-flex flex-column gap-2">
<div class="row">
<div class="col-12 d-flex flex-column align-items-center"><h6 class="txt-white">Trusted by tech
giants:</h6></div>
</div>
<div class="row text-center slider">
<div class="col-12">
<ul class="d-flex justify-content-center flex-wrap row-gap-3 column-gap-5">
<li><img src="/static/img/logos/sproutfi-white.png" class="h-2"/></li>
<li><img src="/static/img/logos/bitso.png" class="h-2"/></li>
<li><img src="/static/img/logos/okx.png" class="h-2"/></li>
<li><img src="/static/img/logos/angloamerican-white.png" class="h-2"/></li>
<li><img src="/static/img/logos/global66-white.png" class="h-2"/></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row">
<div class="col-12"><h2 class="text-center"><strong id="ipci3">Visión General del Mercado de <span
class="txt-light-green">Mexico</span></strong></h2></div>
</div>
<div class="row d-flex row-gap-3 align-items-center">
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico"><img src="/static/img/icos/ico-1.svg" class="w-2"/></div>
<div class="d-flex flex-column gap-2"><h4><strong id="ix2ii">Población - 130 millones</strong></h4>
<p id="i8z2l">La segunda economía más grande de América Latina y el duodécimo país más poblado
del mundo.</p></div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico"><img src="/static/img/icos/ico-2.svg" class="w-2"/></div>
<div class="d-flex flex-column gap-2"><h4><strong id="ih41j">Tamaño del mercado</strong></h4>
<p id="ipt98">Según un informe de Statista, el mercado de comercio electrónico en México se
valoró en $ 22.6 mil millones en 2020 y se espera que alcance los $ 36.3 mil millones para
2024.</p></div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="item bg-light-gray text-start border-radius d-flex gap-2 p-2">
<div class="ico"><img src="/static/img/icos/ico-3.svg" class="w-2"/></div>
<div class="d-flex flex-column gap-2"><h4><strong id="ik66g">Comercio móvil</strong></h4>
<p id="itba4">El comercio móvil está ganando popularidad en México y se espera que impulse el
crecimiento del mercado de comercio electrónico en el futuro. En 2020, el 56% de las compras
en línea en México se realizaron utilizando un dispositivo móvil.</p></div>
</div>
</div>
</div>
</div>
</section>
<div class="h-4 bg-white"></div>
<section class="cta cta-1 bg-white">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-sm-6 col-lg-5 d-flex align-items-center bg-light-green">
<div class="square"></div>
<div class="p-2"><h3><strong>Easily enter the second largest economy in LatAm.</strong></h3></div>
</div>
<div class="col-12 col-sm-6 col-lg-5 bg-blue txt-white" id="icp8c">
<div class="d-flex flex-column gap-1 p-2"><h4 class="txt-white">Offer OXXO and many other payment
methods.</h4><a href="optin.php" class="btn d-flex"><strong>Start now</strong></a></div>
</div>
</div>
</div>
</section>
<div class="h-4 bg-light-gray"></div>
<section class="map-stats bg-light-gray">
<div class="container d-flex flex-column gap-3 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 d-flex flex-column gap-1"><h6 class="text-center">Mexico’s eCommerce payment
mix</h6>
<h2 class="text-center"><strong>Improve your payment acceptance by offering local payment methods in
Mexico</strong></h2></div>
</div>
<div class="row d-flex row-gap-3 justify-content-center">
<div class="col-12 col-lg-4">
<div class="d-flex h-100 justify-content-center text-start flex-column pe-3 gap-2">
<div class="badge align-items-center justify-content-center d-flex flex-column"><span>98% OF <br/>MARKET SHARE COVERED BY</span><img
src="/static/img/logo-facilitapay-white.svg"/></div>
<div class="item d-flex align-items-center gap-1">
<div><img src="/static/img/finance/SVG/ico-card.svg"/></div>
<div class="d-flex flex-column flex-grow-1"><p class="sub">CREDIT CARD - 35%</p>
<div class="barra">
<div id="ipxkkf"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div><img src="/static/img/finance/SVG/ico-card.svg"/></div>
<div class="d-flex flex-column flex-grow-1"><p class="sub">DEBIT CARD - 19%</p>
<div class="barra">
<div id="ibk9kq"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div><img src="/static/img/finance/SVG/ico-money.svg"/></div>
<div class="d-flex flex-column flex-grow-1"><p class="sub">DIGITAL WALLETS - 27%</p>
<div class="barra">
<div id="ileuhf"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div><img src="/static/img/finance/SVG/ico-oxxo.svg"/></div>
<div class="d-flex flex-column flex-grow-1"><p class="sub">OXXO - 20%</p>
<div class="barra">
<div id="izq22k"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div><img src="/static/img/finance/SVG/ico-ted.svg"/></div>
<div class="d-flex flex-column flex-grow-1"><p class="sub">BANK TRANSFERS - 8%</p>
<div class="barra">
<div id="i4rt6v"></div>
</div>
</div>
</div>
<div class="item d-flex align-items-center gap-1">
<div><img src="/static/img/finance/SVG/ico-money.svg"/></div>
<div class="d-flex flex-column flex-grow-1"><p class="sub">CASH - 8%</p>
<div class="barra">
<div id="if9gnh"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-7 col-lg-5">
<div><img src="/static/img/maps/map-mexico.svg" class="img-fluid"/></div>
</div>
<div class="col-12 col-md-3">
<div class="d-flex h-100 justify-content-center flex-lg-column flex-wrap ps-2 gap-1">
<div><h5>CAPITAL</h5>
<p>Mexico City</p></div>
<div><h5>REGION</h5>
<p>North America</p></div>
<div><h5>CURRENCY</h5>
<p>Mexican Peso <br/>USD/MXN = 19,97</p></div>
<div><h5>POPULATION</h5>
<p>130.2M</p></div>
<div><h5>GDP</h5>
<p>US$ 129 Trillion</p></div>
<div><h5>GDP PER CAPITA</h5>
<p>US $9.926</p></div>
</div>
</div>
</div>
</div>
</section>
<section class="bullets-2 bg-light-gray pt-4">
<div class="container d-flex flex-column gap-2">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 d-flex flex-column gap-1"><h6 class="text-center">DESCUBRIR</h6>
<h2 class="text-center"><strong id="io4x8n">Explora las oportunidades en México.</strong></h2></div>
</div>
<div class="row justify-content-center row-gap-2">
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico"><img src="/static/img/ico-check.svg" class="w-1"/></div>
<div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="i62hxp">Población grande y
creciente</strong></h4>
<p id="ih7tfc">Población grande y creciente: México tiene una población de más de 130 millones
de personas, lo que lo convierte en uno de los mercados de consumo más grandes del mundo.
Esta gran base de consumidores ofrece una oportunidad significativa para las empresas de
comercio electrónico.</p></div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico"><img src="/static/img/ico-check.svg" class="w-1"/></div>
<div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="iabx8f">Mayor penetración de
Internet</strong></h4>
<p id="i2qwwp">El número de usuarios de Internet en México ha crecido rápidamente en los últimos
años, y se espera que esta tendencia continúe en el futuro. Este aumento en el uso de
Internet está creando un mercado creciente para las empresas de comercio electrónico.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico"><img src="/static/img/ico-check.svg" class="w-1"/></div>
<div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="iyr44v">Tendencias demográficas
favorables</strong></h4>
<p id="i8jk6f">México tiene una clase media joven y creciente, que está impulsando el gasto del
consumidor y el crecimiento del comercio electrónico. Además, las tendencias demográficas de
México, como la urbanización y el aumento de los niveles de educación, están creando un
entorno más favorable para el comercio electrónico.
</p></div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico"><img src="/static/img/ico-check.svg" class="w-1"/></div>
<div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="imlklh">Apoyo
gubernamental</strong></h4>
<p id="imgnaj">El gobierno mexicano apoya el comercio electrónico y ha implementado políticas
para fomentar su crecimiento. Este entorno favorable proporciona un entorno empresarial más
estable y predecible para las empresas de comercio electrónico que operan en México.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico"><img src="/static/img/ico-check.svg" class="w-1"/></div>
<div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="ik0fdz">Métodos de pago</strong>
</h4>
<p id="iist2i">Las tarjetas de crédito son el método de pago más utilizado para las
transacciones de comercio electrónico en México, seguido de las transferencias bancarias y
el pago contra entrega.</p></div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="item bg-white border-radius d-flex gap-1 p-2">
<div class="ico"><img src="/static/img/ico-check.svg" class="w-1"/></div>
<div class="d-flex flex-column flex-grow-1 gap-1"><h4><strong id="ixeibm">Productos
populares</strong></h4>
<p id="ip5g0w">Las categorías de productos más populares en el mercado mexicano de comercio
electrónico son moda y accesorios, electrónica y artículos para el hogar y el jardín.</p>
</div>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-4"><a href="optin.php" class="btn me-auto"><strong id="igwvxo">Comienza
ahora</strong></a></div>
</div>
</div>
</section>
<div class="h-4 bg-light-gray"></div>
<section class="table-1 bg-light-gray">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-6">
<div class="row bg-blue border-radius-top p-1">
<div class="col-12"><h4 class="text-white"><strong>Payment Methods</strong></h4></div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>OXXO</strong></h4>
<p class="txt-gray">OXXO es la tienda más popular en México y uno de los
métodos de pago más populares. Los mexicanos están acostumbrados a ir a
las tiendas de conveniencia para pagar sus facturas y sus compras en
línea. Empieza a aceptar OXXO como método de pago y llega a más
consumidores.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/oxxo-pay.svg" class="h-2"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>OXXO Pay</strong></h4>
<p class="txt-gray">El método de pago más conocido en México, ahora con
confirmación del pago en tiempo real.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/oxxo-pay.svg" class="h-2"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>Tarjetas de crédito y débito
locales</strong></h4>
<p class="txt-gray">El acceso a los servicios financieros sigue creciendo,
al igual que el número de tarjetahabientes en México. Contar con
adquirencia local hará que puedas incrementar significativamente las
tasas de aprobación en transacciones, y aceptar todo tipo de
tarjetas.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/master.svg"/><img
src="/static/img/finance/visa.svg"/><img
src="/static/img/finance/amex.svg"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>Meses sin Intereses</strong>
</h4>
<p class="txt-gray">A través de los Meses sin Intereses, los consumidores
pueden dividir las compras en 3, 6, 9 y hasta 12 pagos mensuales,
pudiendo acomodar el pago a su presupuesto mensual. Ofrece cuotas a tus
clientes mexicanos y permite que puedan realizar pagos de mayor
valor.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/installments.svg"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>SPEI</strong></h4>
<p class="txt-gray">SPEI está presente en cada transferencia interbancaria
realizada por los Mexicanos. El sistema mexicano de banca en línea
permite que clientes puedan pagar por sus compras a través de
transferencias bancarias en línea utilizando SPEI.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/spei.svg"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>Cripto</strong></h4>
<p class="txt-gray">El mercado de criptomonedas es cada vez más importante
en México debido a la gran cantidad de personas no bancarizadas en el
país, los altos niveles de entradas de remesas y el creciente interés en
los activos digitales para protegerse contra la inflación y la
inestabilidad económica. Con FacilitaPay como partner, puedes utilizar
criptomonedas y pagos locales en tus flujos de on-ramp y off-ramp.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/ethereum.png" class="h-1"/><img
src="/static/img/finance/crypto-2.png" class="h-1"/><img
src="/static/img/finance/bitcoin.png" class="h-1"/><img
src="/static/img/finance/crypto-3.png" class="h-1"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong>Carteras digitales</strong>
</h4>
<p class="txt-gray">La popularidad de las billeteras digitales está
aumentando en México, principalmente debido a los beneficios que ofrecen
como conveniencia, seguridad y simplicidad de pago. Mantente a la
vanguardia del mercado y comienza a ofrecer billeteras digitales en tu
operación de pagos en línea.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/logo-mercadopago.svg"/></div>
</div>
</div>
</div>
<div class="row text-start bg-gradient-gray p-1 ignoreanimation">
<div class="col-12">
<div class="d-flex flex-column gap-1"><h4><strong id="iwnfcg">Otros métodos de
pagos alternativos</strong></h4>
<p class="txt-gray">México tiene varios métodos de pago además de las
tarjetas de crédito. Los pagos con vales, Oxxo y billeteras digitales
son métodos muy comunes utilizados por los consumidores en línea.</p>
<div class="d-flex flex-wrap gap-1"><img
src="/static/img/finance/bank-transfer-cropped--en.svg"/><img
src="/static/img/finance/online-debit--en.svg" class="h-1"/></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="h-4 bg-light-gray"></div>
<section class="cta-2 bg-light-gray">
<div class="container d-flex flex-column gap-2 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-md-6 col-lg-6 d-flex align-items-center bg-white">
<div class="d-flex flex-column gap-1 p-2"><h4><strong>Download our <span
class="txt-light-green">Mexico</span> Country Guide</strong></h4>
<p>Learn everything you need to know about the eCommerce payments landscape in Mexico in our
straight-to-the-point country guide.</p><a href="#!" class="btn me-auto"><strong>Download
now</strong></a></div>
</div>
<div class="col-12 col-md-6 col-lg-3 bg-light-green">
<div><img src="/static/img/brochure-mx.png"/></div>
</div>
</div>
</div>
</section>
<div class="h-1 bg-light-gray"></div>
<section class="pagination-1 bg-light-gray">
<div class="container">
<div class="row justify-content-between">
<div class="col-4"><a href="markets-colombia.php"
class="btn btn-2 d-inline-flex align-items-center gap-1 me-auto"><img
src="/static/img/ico-colombia.svg" class="h-2"/> <span class="arrow left"></span> <span
class="d-none d-lg-block">Prev - <strong>Colombia</strong> country page</span></a></div>
<div class="col-4"><a href="markets-brazil.php"
class="btn btn-2 d-inline-flex align-items-center gap-1 ms-auto"><span
class="d-none d-lg-block">Next - <strong>Brazil</strong> country page</span> <span
class="arrow right"></span> <img src="/static/img/ico-brazil.svg" class="h-2"/></a></div>
</div>
</div>
</section>
<div class="h-4 bg-light-gray"></div>
</body>
',
            'css' => '* { box-sizing: border-box; } body {margin: 0;}#ii4h{background-image:url(\'/static/img/bg-market-mx.png\');}#icp8c{background-image:url(\'/static/img/bg-cta.jpg\');}#ipxkkf{width:35%;}#ibk9kq{width:19%;}#ileuhf{width:27%;}#izq22k{width:20%;}#i4rt6v{width:8%;}#if9gnh{width:8%;}',
                'metatitle' => 'Markets Mexico',
                'slug' => NULL,
                'metadescription' => 'MexicoLa segunda economía más grande de América Latina.México ofrece un mercado grande y creciente para el comercio electrónico, con una población de más de 130 millones de personas y una creciente penetración de Internet, lo que lo convierte en una oportunidad de inversión atractiva para las empresas de comercio electrónico. Con tendencias demográficas favorables y políticas gubernamentales de apoyo, México presenta un entorno empresarial estable y predecible para las empresas que buscan expandir sus operaciones de comercio electrónico.Comienza ahora
Trusted by tech giants:Visión General del Mercado de  MexicoPoblación - 130 millonesLa segunda economía más grande de América Latina y el duodécimo país más poblado del mundo.Tamaño del mercadoSegún un informe de Statista, el mercado de comercio electrónico en México se valoró en $ 22.6 mil millones en 2020 y se espera que alcance los $ 36.3 mil millones para 2024.Comercio móvilEl comercio móvil está ganando popularidad en México y se espera que impulse el crecimiento del mercado de comercio electrónico en el futuro. En 2020, el 56% de las compras en línea en México se realizaron utilizando un dispositivo móvil.Easily enter the second largest economy in LatAm.Offer OXXO and many other payment methods.Start nowMexico’s eCommerce payment mixImprove your payment acceptance by offering local payment methods in Mexico98% OF MARKET SHARE COVERED BYCREDIT CARD - 35%DEBIT CARD - 19%DIGITAL WALLETS - 27%OXXO - 20%BANK TRANSFERS - 8%CASH - 8%CAPITALMexico CityREGIONNorth AmericaCURRENCYMexican Peso USD/MXN = 19,97POPULATION130.2MGDPUS$ 129 TrillionGDP PER CAPITAUS $9.926DESCUBRIRExplora las oportunidades en México.Población grande y crecientePoblación grande y creciente: México tiene una población de más de 130 millones de personas, lo que lo convierte en uno de los mercados de consumo más grandes del mundo. Esta gran base de consumidores ofrece una oportunidad significativa para las empresas de comercio electrónico.Mayor penetración de InternetEl número de usuarios de Internet en México ha crecido rápidamente en los últimos años, y se espera que esta tendencia continúe en el futuro. Este aumento en el uso de Internet está creando un mercado creciente para las empresas de comercio electrónico.Tendencias demográficas favorablesMéxico tiene una clase media joven y creciente, que está impulsando el gasto del consumidor y el crecimiento del comercio electrónico. Además, las tendencias demográficas de México, como la urbanización y el aumento de los niveles de educación, están creando un entorno más favorable para el comercio electrónico.
Apoyo gubernamentalEl gobierno mexicano apoya el comercio electrónico y ha implementado políticas para fomentar su crecimiento. Este entorno favorable proporciona un entorno empresarial más estable y predecible para las empresas de comercio electrónico que operan en México.Métodos de pagoLas tarjetas de crédito son el método de pago más utilizado para las transacciones de comercio electrónico en México, seguido de las transferencias bancarias y el pago contra entrega.Productos popularesLas categorías de productos más populares en el mercado mexicano de comercio electrónico son moda y accesorios, electrónica y artículos para el hogar y el jardín.Comienza ahoraPayment MethodsOXXOOXXO is one of the most famous voucher payments in Mexico. People are used to going to convenience stores to pay bills, and also their vouchers for e-commerce purchases. Start to accept OXXO as a payment method and reach more consumers.OXXO PayThe most known payment method in Mexico now with real-time confirmation.Local Credit and Debit CardsAccess to financial services is still growing, and credit card penetration is on the rise in Mexico. Local acquiring can offer better approval rates in Mexico, and you can accept local debit cards.Credit Card InstallmentsWith installments, consumers can split up purchases in 3, 6, 9, and 12 monthly payments depending on the price of the purchase. Offer installments to your Mexican customers and increase average ticket sizes.SPEIWhenever a Mexican wants to make an interbank transfer, they need to use SPEI. The Mexican system for online banking transactions. Allow your customers to pay for their purchases with online bank transfers through SPEI.CryptoThe crypto market is becoming increasingly important in Mexico due to the country&#039;s large population of unbanked individuals, high levels of remittance inflows, and growing interest in digital assets as a hedge against inflation and economic instability. With FacilitaPay, you can make settlement in crypto, on/off ramp solutions and receive your local payments in stablecoins.Digital WalletsThe popularity of digital wallets is increasing in México, mostly due to the benefits offered by them, such as convenience, security, and simplicity to pay. Be ahead of the market and start to offer digital wallets on your e-commerce store.Other Alternative PaymentsMexico has several payment methods besides credit cards. Voucher payments, Oxxo and digital wallets are very common methods used by online consumers.Download our Mexico Country GuideLearn everything you need to know about the eCommerce payments landscape in Mexico in our straight-to-the-point country guide.Download now  Prev - Colombia country pageNext - Brazil country page',
                'created_at' => '2023-05-30 17:58:04',
                'updated_at' => '2023-05-31 18:06:38',
            ),
            27 => 
            array (
                'id' => 54,
                'pages_id' => 20,
                'locale' => 'en',
                'title' => 'Blockchain',
            'html' => '<div class="blockchain" style="background-image: url(\'/static/img/bg-crypto.jpg\');">



<section class="content-1">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-md-9 d-flex flex-column gap-2">
<h6 class="txt-white">CRYPTO</h6>
<h1 class="txt-white">We have the safer and the fast way to transact through the blockchain.</h1>
<p class="txt-white">Since 2017 we realized that blockchain would revolutionize the world of finance. Our ideal at FacilitaPay is to act as a tool that will collaborate with the growth of Web 3 infrastructure. <br><br><strong>Are you in the Crypto world looking to increase your customer base in LatAm?</strong></p>
<a href="optin.php" class="btn me-auto">Start now</a>
</div>
<div class="col-12 col-lg-4">
</div>
</div>
</div>
</section>



<section class="content-1">
<div class="container d-flex flex-column gap-3 pt-5">
<div class="row justify-content-center">
<div class="col-12 col-lg-10 d-flex flex-column  gap-2">
<h6 class="txt-white">FEATURES</h6>
<h2 class="txt-white"><strong>Here at FacilitaPay we offer practical and innovative solutions for your business.</strong></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-10 d-flex flex-column gap-2">
<div class="row d-flex row-gap-3">
<div class="col-12 col-lg-4">
<div class="d-flex align-items-start border-radius box-opacity text-start gap-2 p-2">
<img src="/static/img/ico-check.svg" class="w-1">
<div class="d-flex flex-column gap-1">
<h4 class="txt-white"><strong>Settlement in crypto</strong></h4>
<p class="txt-white">Collect your payments in local currency and receive them in USDC, USDT, BTC or ETH.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/ethereum.png" class="h-1">
<img src="/static/img/finance/crypto-2.png" class="h-1">
<img src="/static/img/finance/bitcoin.png" class="h-1">
<img src="/static/img/finance/crypto-3.png" class="h-1">
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="d-flex align-items-start border-radius box-opacity text-start gap-2 p-2">
<img src="/static/img/ico-check.svg" class="w-1">
<div class="d-flex flex-column gap-1">
<h4 class="txt-white"><strong>On / Off Ramps</strong></h4>
<p class="txt-white">FacilitaPay\'s treasury assists you with the exchange fiat-to-crypto or crypto-to-fiat. As simple as this.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="d-flex align-items-start border-radius box-opacity text-start gap-2 p-2">
<img src="/static/img/ico-check.svg" class="w-1">
<div class="d-flex flex-column gap-1">
<h4 class="txt-white"><strong>Receive your local payments in crypto</strong></h4>
<p class="txt-white">We set to you those payments in fiat currencies.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<section class="content-1">
<div class="container d-flex flex-column gap-3 pt-5">
<div class="row justify-content-center">
<div class="col-12 col-lg-10">
<div class="row d-flex text-start row-gap-4">

<div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-1">
<div class="d-flex border-radius box-opacity me-auto p-1">
<img src="/static/img/icos/ico-7.svg" class="w-2">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4 class="txt-white"><strong>Store</strong></h4>
<p class="txt-white">Control your funds through our multicurrency solution, managing all the custody in our dashboard.</p>
</div>
</div>

<div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-1">
<div class="d-flex border-radius box-opacity me-auto p-1">
<img src="/static/img/icos/ico-8.svg" class="w-2">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4 class="txt-white"><strong>Fraud prevention</strong></h4>
<p class="txt-white">Proprietary technology helping to prevent fraud locally in LatAm.</p>
</div>
</div>

<div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-1">
<div class="d-flex border-radius box-opacity me-auto p-1">
<img src="/static/img/icos/ico-9.svg" class="w-2">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4 class="txt-white"><strong>Highly Configurable</strong></h4>
<p class="txt-white">Adaptable to any business model, our clients can build their business on top of our technology.</p>
</div>
</div>

<div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-1">
<div class="d-flex border-radius box-opacity me-auto p-1">
<img src="/static/img/icos/ico-10.svg" class="w-2">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4 class="txt-white"><strong>Audit transactions</strong></h4>
<p class="txt-white">Compliant with global auditors and regulators, customers can access data worldwide.</p>
</div>
</div>

<div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-1">
<div class="d-flex border-radius box-opacity me-auto p-1">
<img src="/static/img/icos/ico-11.svg" class="w-2">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4 class="txt-white"><strong>Developer Friendly</strong></h4>
<p class="txt-white">Built to be part of our client\'s technology, we have all the features to be embedded in other platforms.</p>
</div>
</div>

<div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-1">
<div class="d-flex border-radius box-opacity me-auto p-1">
<img src="/static/img/icos/ico-12.svg" class="w-2">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4 class="txt-white"><strong>Local KYC Features</strong></h4>
<p class="txt-white">Helping our clients to onboard their local users through our own platform and integrated in the customer experience.</p>
</div>
</div>

</div>
</div>
</div>
</div>
</section>



<section class="content-1">
<div class="container pt-5">
<div class="row justify-content-center">
<div class="col-12 col-lg-10 d-flex flex-column gap-2 text-center">
<h2 class="txt-white"><strong>Start using cryptocurrency payments now</strong></h2>
<a href="optin.php" class="btn m-auto"><strong>Get in touch</strong></a>
</div>
</div>
</div>
</section>



<div class="h-2"></div>



<section class="slider">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row">
<div class="col-12 d-flex flex-column align-items-center">
<h6 class="txt-white">Trusted by crypto giants:</h6>
</div>
</div>
<div class="row text-center slider">
<div class="col-12">
<ul class="d-flex justify-content-center flex-wrap row-gap-3 column-gap-5">
<li><img src="/static/img/logos/bitso.png" class="h-2"></li>
<li><img src="/static/img/logos/bybit.png" class="h-2"></li>
<li><img src="/static/img/logos/kraken-white.png" class="h-2"></li>
<li><img src="/static/img/logos/okx.png" class="h-2"></li>
<li><img src="/static/img/logos/okcoin-white.png" class="h-2"></li>
<li><img src="/static/img/logos/bit2me-white.png" class="h-2"></li>
<li><img src="/static/img/logos/coincasso-white.png" class="h-2"></li>
</ul>
</div>
</div>
</div>
</section>



<section class="cta">
<div class="container pb-4 pt-4">
<div class="row justify-content-center">



</div>
</div>
</section>



</div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Blockchain',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 17:58:40',
                'updated_at' => '2023-05-30 17:58:40',
            ),
            28 => 
            array (
                'id' => 55,
                'pages_id' => 20,
                'locale' => 'pt',
                'title' => 'Blockchain',
            'html' => '<div class="blockchain" style="background-image: url(\'/static/img/bg-crypto.jpg\');">



<section class="content-1">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-md-9 d-flex flex-column gap-2">
<h6 class="txt-white">CRYPTO</h6>
<h1 class="txt-white">We have the safer and the fast way to transact through the blockchain.</h1>
<p class="txt-white">Since 2017 we realized that blockchain would revolutionize the world of finance. Our ideal at FacilitaPay is to act as a tool that will collaborate with the growth of Web 3 infrastructure. <br><br><strong>Are you in the Crypto world looking to increase your customer base in LatAm?</strong></p>
<a href="optin.php" class="btn me-auto">Start now</a>
</div>
<div class="col-12 col-lg-4">
</div>
</div>
</div>
</section>



<section class="content-1">
<div class="container d-flex flex-column gap-3 pt-5">
<div class="row justify-content-center">
<div class="col-12 col-lg-10 d-flex flex-column  gap-2">
<h6 class="txt-white">FEATURES</h6>
<h2 class="txt-white"><strong>Here at FacilitaPay we offer practical and innovative solutions for your business.</strong></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-10 d-flex flex-column gap-2">
<div class="row d-flex row-gap-3">
<div class="col-12 col-lg-4">
<div class="d-flex align-items-start border-radius box-opacity text-start gap-2 p-2">
<img src="/static/img/ico-check.svg" class="w-1">
<div class="d-flex flex-column gap-1">
<h4 class="txt-white"><strong>Settlement in crypto</strong></h4>
<p class="txt-white">Collect your payments in local currency and receive them in USDC, USDT, BTC or ETH.</p>
<div class="d-flex gap-1">
<img src="/static/img/finance/ethereum.png" class="h-1">
<img src="/static/img/finance/crypto-2.png" class="h-1">
<img src="/static/img/finance/bitcoin.png" class="h-1">
<img src="/static/img/finance/crypto-3.png" class="h-1">
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="d-flex align-items-start border-radius box-opacity text-start gap-2 p-2">
<img src="/static/img/ico-check.svg" class="w-1">
<div class="d-flex flex-column gap-1">
<h4 class="txt-white"><strong>On / Off Ramps</strong></h4>
<p class="txt-white">FacilitaPay\'s treasury assists you with the exchange fiat-to-crypto or crypto-to-fiat. As simple as this.</p>
</div>
</div>
</div>
<div class="col-12 col-lg-4">
<div class="d-flex align-items-start border-radius box-opacity text-start gap-2 p-2">
<img src="/static/img/ico-check.svg" class="w-1">
<div class="d-flex flex-column gap-1">
<h4 class="txt-white"><strong>Receive your local payments in crypto</strong></h4>
<p class="txt-white">We set to you those payments in fiat currencies.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<section class="content-1">
<div class="container d-flex flex-column gap-3 pt-5">
<div class="row justify-content-center">
<div class="col-12 col-lg-10">
<div class="row d-flex text-start row-gap-4">

<div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-1">
<div class="d-flex border-radius box-opacity me-auto p-1">
<img src="/static/img/icos/ico-7.svg" class="w-2">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4 class="txt-white"><strong>Store</strong></h4>
<p class="txt-white">Control your funds through our multicurrency solution, managing all the custody in our dashboard.</p>
</div>
</div>

<div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-1">
<div class="d-flex border-radius box-opacity me-auto p-1">
<img src="/static/img/icos/ico-8.svg" class="w-2">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4 class="txt-white"><strong>Fraud prevention</strong></h4>
<p class="txt-white">Proprietary technology helping to prevent fraud locally in LatAm.</p>
</div>
</div>

<div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-1">
<div class="d-flex border-radius box-opacity me-auto p-1">
<img src="/static/img/icos/ico-9.svg" class="w-2">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4 class="txt-white"><strong>Highly Configurable</strong></h4>
<p class="txt-white">Adaptable to any business model, our clients can build their business on top of our technology.</p>
</div>
</div>

<div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-1">
<div class="d-flex border-radius box-opacity me-auto p-1">
<img src="/static/img/icos/ico-10.svg" class="w-2">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4 class="txt-white"><strong>Audit transactions</strong></h4>
<p class="txt-white">Compliant with global auditors and regulators, customers can access data worldwide.</p>
</div>
</div>

<div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-1">
<div class="d-flex border-radius box-opacity me-auto p-1">
<img src="/static/img/icos/ico-11.svg" class="w-2">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4 class="txt-white"><strong>Developer Friendly</strong></h4>
<p class="txt-white">Built to be part of our client\'s technology, we have all the features to be embedded in other platforms.</p>
</div>
</div>

<div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-1">
<div class="d-flex border-radius box-opacity me-auto p-1">
<img src="/static/img/icos/ico-12.svg" class="w-2">
</div>
<div class="d-flex flex-column flex-grow-1 gap-1">
<h4 class="txt-white"><strong>Local KYC Features</strong></h4>
<p class="txt-white">Helping our clients to onboard their local users through our own platform and integrated in the customer experience.</p>
</div>
</div>

</div>
</div>
</div>
</div>
</section>



<section class="content-1">
<div class="container pt-5">
<div class="row justify-content-center">
<div class="col-12 col-lg-10 d-flex flex-column gap-2 text-center">
<h2 class="txt-white"><strong>Start using cryptocurrency payments now</strong></h2>
<a href="optin.php" class="btn m-auto"><strong>Get in touch</strong></a>
</div>
</div>
</div>
</section>



<div class="h-2"></div>



<section class="slider">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row">
<div class="col-12 d-flex flex-column align-items-center">
<h6 class="txt-white">Trusted by crypto giants:</h6>
</div>
</div>
<div class="row text-center slider">
<div class="col-12">
<ul class="d-flex justify-content-center flex-wrap row-gap-3 column-gap-5">
<li><img src="/static/img/logos/bitso.png" class="h-2"></li>
<li><img src="/static/img/logos/bybit.png" class="h-2"></li>
<li><img src="/static/img/logos/kraken-white.png" class="h-2"></li>
<li><img src="/static/img/logos/okx.png" class="h-2"></li>
<li><img src="/static/img/logos/okcoin-white.png" class="h-2"></li>
<li><img src="/static/img/logos/bit2me-white.png" class="h-2"></li>
<li><img src="/static/img/logos/coincasso-white.png" class="h-2"></li>
</ul>
</div>
</div>
</div>
</section>



<section class="cta">
<div class="container pb-4 pt-4">
<div class="row justify-content-center">



</div>
</div>
</section>



</div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Blockchain',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 17:58:40',
                'updated_at' => '2023-05-30 17:58:40',
            ),
            29 => 
            array (
                'id' => 56,
                'pages_id' => 20,
                'locale' => 'es',
                'title' => 'Blockchain',
                'html' => '<body class="home"><div class="blockchain" id="ikpi"><section class="content-1"><div class="container d-flex flex-column gap-2 pt-4"><div class="row justify-content-center"><div class="col-12 col-md-9 d-flex flex-column gap-2"><h6 class="txt-white">CRIPTO BLOCKCHAIN</h6><h1 class="txt-white">Tenemos la forma más segura y rápida de realizar transacciones a través de blockchain.</h1><p class="txt-white">Desde 2017 supimos que el blockchain revolucionaría el mundo de las finanzas. Nuestro ideal en FacilitaPay es actuar como una herramienta que colaborará con el crecimiento de la infraestructura Web 3.<br/><br/><strong>¿Estás en el mundo de las criptomonedas y quieres hacer crecer tu base de clientes en América Latina?</strong></p><a href="optin.php" class="btn me-auto">Comienza ahora</a></div><div class="col-12 col-lg-4">
</div></div></div></section><section class="content-1"><div class="container d-flex flex-column gap-3 pt-5"><div class="row justify-content-center"><div class="col-12 col-lg-10 d-flex flex-column gap-2"><h6 class="txt-white">RECURSOS</h6><h2 class="txt-white"><strong id="inyak">En FacilitaPay ofrecemos soluciones prácticas e innovadoras para tu empresa.</strong></h2></div></div><div class="row justify-content-center"><div class="col-12 col-lg-10 d-flex flex-column gap-2"><div class="row d-flex row-gap-3"><div class="col-12 col-lg-4"><div class="d-flex align-items-start border-radius box-opacity text-start gap-2 p-2"><img src="/static/img/ico-check.svg" class="w-1"/><div class="d-flex flex-column gap-1"><h4 class="txt-white"><strong id="ikwtj">Liquidación de criptomonedas</strong></h4><p class="txt-white">Acepta pagos en moneda local y recíbelos en USDC, USDT, BTC o ETH.</p><div class="d-flex gap-1"><img src="/static/img/finance/ethereum.png" class="h-1"/><img src="/static/img/finance/crypto-2.png" class="h-1"/><img src="/static/img/finance/bitcoin.png" class="h-1"/><img src="/static/img/finance/crypto-3.png" class="h-1"/></div></div></div></div><div class="col-12 col-lg-4"><div class="d-flex align-items-start border-radius box-opacity text-start gap-2 p-2"><img src="/static/img/ico-check.svg" class="w-1"/><div class="d-flex flex-column gap-1"><h4 class="txt-white"><strong id="irk3e">Rieles de On-Ramp y Off-Ramp</strong></h4><p class="txt-white">Las soluciones de pagos de FacilitaPay te ayudan en el intercambio de fiat a cripto o cripto a fiat. Así de simple.</p></div></div></div><div class="col-12 col-lg-4"><div class="d-flex align-items-start border-radius box-opacity text-start gap-2 p-2"><img src="/static/img/ico-check.svg" class="w-1"/><div class="d-flex flex-column gap-1"><h4 class="txt-white"><strong id="irokj">Recibe tus pagos locales en criptomonedas</strong></h4><p class="txt-white">Establecemos para tu empresa estos pagos en monedas fiduciarias.</p></div></div></div></div></div></div></div></section><section class="content-1"><div class="container d-flex flex-column gap-3 pt-5"><div class="row justify-content-center"><div class="col-12 col-lg-10"><div class="row d-flex text-start row-gap-4"><div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-1"><div class="d-flex border-radius box-opacity me-auto p-1"><img src="/static/img/icos/ico-7.svg" class="w-2"/></div><div class="d-flex flex-column flex-grow-1 gap-1"><h4 class="txt-white"><strong id="i44bp">Almacenamiento</strong></h4><p class="txt-white">Controle sus fondos a través de nuestra solución multidivisa, gestionando toda la custodia desde nuestro dashboard.</p></div></div><div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-1"><div class="d-flex border-radius box-opacity me-auto p-1"><img src="/static/img/icos/ico-8.svg" class="w-2"/></div><div class="d-flex flex-column flex-grow-1 gap-1"><h4 class="txt-white"><strong id="itg3g">Prevención del fraude</strong></h4><p class="txt-white">Tecnología patentada que ayuda a prevenir el fraude localmente en América Latina.</p></div></div><div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-1"><div class="d-flex border-radius box-opacity me-auto p-1"><img src="/static/img/icos/ico-9.svg" class="w-2"/></div><div class="d-flex flex-column flex-grow-1 gap-1"><h4 class="txt-white"><strong id="ie78j">Altamente configurable</strong></h4><p class="txt-white">Adaptables a cualquier modelo de negocio, nuestros partners pueden desarrollar su negocio basándose en nuestra tecnología.</p></div></div><div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-1"><div class="d-flex border-radius box-opacity me-auto p-1"><img src="/static/img/icos/ico-10.svg" class="w-2"/></div><div class="d-flex flex-column flex-grow-1 gap-1"><h4 class="txt-white"><strong id="ic59kb">Transacciones transparentes y reguladas</strong></h4><p class="txt-white">En cumplimiento con los entes y reguladores globales, los partners pueden acceder a datos en todo el mundo.</p></div></div><div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-1"><div class="d-flex border-radius box-opacity me-auto p-1"><img src="/static/img/icos/ico-11.svg" class="w-2"/></div><div class="d-flex flex-column flex-grow-1 gap-1"><h4 class="txt-white"><strong id="i2d7yx">Amigable para desarrolladores</strong></h4><p class="txt-white">Construido para ser parte de la tecnología de nuestros partners, tenemos todas las características que se pueden incorporar en otras plataformas.</p></div></div><div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-1"><div class="d-flex border-radius box-opacity me-auto p-1"><img src="/static/img/icos/ico-12.svg" class="w-2"/></div><div class="d-flex flex-column flex-grow-1 gap-1"><h4 class="txt-white"><strong id="ii18yy">Recursos locales de KYC</strong></h4><p class="txt-white">Ayudamos a nuestros partners a integrar a sus usuarios locales a través de nuestra propia plataforma e integrarse en la experiencia del cliente.</p></div></div></div></div></div></div></section><section class="content-1"><div class="container pt-5"><div class="row justify-content-center"><div class="col-12 col-lg-10 d-flex flex-column gap-2 text-center"><h2 class="txt-white"><strong id="iw8piw">Comienza a usar pagos de criptomonedas ahora.</strong></h2><a href="optin.php" class="btn m-auto"><strong id="i3adxz">Ponte en contacto</strong></a></div></div></div></section><div class="h-2"></div><section class="slider"><div class="container d-flex flex-column gap-2 pt-4"><div class="row"><div class="col-12 d-flex flex-column align-items-center"><h6 class="txt-white">CONFIADO POR LOS GIGANTES DE LA TECNOLOGÍA</h6></div></div><div class="row text-center slider"><div class="col-12"><ul class="d-flex justify-content-center flex-wrap row-gap-3 column-gap-5"><li><img src="/static/img/logos/bitso.png" class="h-2"/></li><li><img src="/static/img/logos/bybit.png" class="h-2"/></li><li><img src="/static/img/logos/kraken-white.png" class="h-2"/></li><li><img src="/static/img/logos/okx.png" class="h-2"/></li><li><img src="/static/img/logos/okcoin-white.png" class="h-2"/></li><li><img src="/static/img/logos/bit2me-white.png" class="h-2"/></li><li><img src="/static/img/logos/coincasso-white.png" class="h-2"/></li></ul></div></div></div></section><section class="cta"><div class="container pb-4 pt-4"><div class="row justify-content-center">



</div></div></section></div></body>',
            'css' => '* { box-sizing: border-box; } body {margin: 0;}#ikpi{background-image:url(\'/static/img/bg-crypto.jpg\');}',
                'metatitle' => 'Blockchain',
                'slug' => NULL,
                'metadescription' => 'CRIPTO BLOCKCHAINTenemos la forma más segura y rápida de realizar transacciones a través de blockchain.Desde 2017 supimos que el blockchain revolucionaría el mundo de las finanzas. Nuestro ideal en FacilitaPay es actuar como una herramienta que colaborará con el crecimiento de la infraestructura Web 3.¿Estás en el mundo de las criptomonedas y quieres hacer crecer tu base de clientes en América Latina?Comienza ahora
RECURSOSEn FacilitaPay ofrecemos soluciones prácticas e innovadoras para tu empresa.Liquidación de criptomonedasAcepta pagos en moneda local y recíbelos en USDC, USDT, BTC o ETH.Rieles de On-Ramp y Off-RampLas soluciones de pagos de FacilitaPay te ayudan en el intercambio de fiat a cripto o cripto a fiat. Así de simple.Recibe tus pagos locales en criptomonedasEstablecemos para tu empresa estos pagos en monedas fiduciarias.AlmacenamientoControle sus fondos a través de nuestra solución multidivisa, gestionando toda la custodia desde nuestro dashboard.Prevención del fraudeTecnología patentada que ayuda a prevenir el fraude localmente en América Latina.Altamente configurableAdaptables a cualquier modelo de negocio, nuestros partners pueden desarrollar su negocio basándose en nuestra tecnología.Transacciones transparentes y reguladasEn cumplimiento con los entes y reguladores globales, los partners pueden acceder a datos en todo el mundo.Amigable para desarrolladoresConstruido para ser parte de la tecnología de nuestros partners, tenemos todas las características que se pueden incorporar en otras plataformas.Recursos locales de KYCAyudamos a nuestros partners a integrar a sus usuarios locales a través de nuestra propia plataforma e integrarse en la experiencia del cliente.Comienza a usar pagos de criptomonedas ahora.Ponte en contactoCONFIADO POR LOS GIGANTES DE LA TECNOLOGÍA',
                'created_at' => '2023-05-30 17:58:40',
                'updated_at' => '2023-05-31 18:27:12',
            ),
            30 => 
            array (
                'id' => 57,
                'pages_id' => 21,
                'locale' => 'en',
                'title' => 'About Us',
                'html' => ' <section class="hero-4 bg-blue">
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row justify-content-center text-center">
<div class="col-12 col-lg-9 d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1">
<h6 class="txt-light-green">ABOUT US</h6>
<h3 class="txt-white"><strong>We are a different kind of payments company because winning in emerging markets requires a different approach</strong></h3>
</div>
<div class="d-flex justify-content-center gap-1">
<a href="optin.php" target="_blank" class="btn d-inline-flex"><strong>Let\'s talk</strong></a>
<a href="careers.php" target="_blank" class="btn btn-4 d-inline-flex"><strong>Careers</strong></a>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-6">
<hr class="bg-white">
</div>
</div>
<div class="row justify-content-center row-gap-3">
<div class="col-6 col-lg-3 d-flex gap-1">
<div class="ico d-flex align-items-center justify-content-center h-5 w-5">
<img src="/static/img/icos/ico-7.svg" class="h-2">
</div>
<div class="d-flex flex-column justify-content-center">
<h5 class="txt-light-green">Over +1000</h5>
<p class="txt-white">Payment methods available.</p>
</div>
</div>
<div class="col-6 col-lg-3 d-flex gap-1">
<div class="ico d-flex align-items-center justify-content-center h-5 w-5">
<img src="/static/img/icos/ico-8.svg" class="h-2">
</div>
<div class="d-flex flex-column justify-content-center">
<h5 class="txt-light-green">290+ Companies</h5>
<p class="txt-white">Operating with us.</p>
</div>
</div>
<div class="col-6 col-lg-3 d-flex gap-1">
<div class="ico d-flex align-items-center justify-content-center h-5 w-5">
<img src="/static/img/icos/ico-9.svg" class="h-2">
</div>
<div class="d-flex flex-column justify-content-center">
<h5 class="txt-light-green">TPV</h5>
<p class="txt-white">Over 6 billions USD.</p>
</div>
</div>
<div class="col-6 col-lg-3 d-flex gap-1">
<div class="ico d-flex align-items-center justify-content-center h-5 w-5">
<img src="/static/img/icos/ico-10.svg" class="h-2">
</div>
<div class="d-flex flex-column justify-content-center">
<h5 class="txt-light-green">4 Countries</h5>
<p class="txt-white">With operations</p>
</div>
</div>
</div>
</div>
</section>



<section class="content-2 bg-white">
<div class="container pt-4">
<div class="row justify-content-center row-gap-3">
<div class="col-12 col-md-7 col-lg-5">
<div class="d-flex flex-column gap-2 pe-5">
<h2><strong>Our Story</strong></h2>
<p>FacilitaPay was started with one goal in mind - to close the payments innovation gap that exists between developed countries and emerging economies. We are integrating local payments in emerging economies to global countries with companies operating world-wide. That means we are fully dedicated to delivering a flexible, all-encompassing payments solution that unlocks new revenues and maximizes reach in growth markets. We are incredibly honored to power growth for some of the most visionary companies in the world who inspire us to reach for the impossible every day.</p>
<p>While FacilitaPay was born in Brazil, we knew that local payment challenges extended well beyond the neighboring countries. Today. our payment coverage includes high-growth, emerging economies in LATAM helping companies based in North America, LatAm, Europe, Africa, and Asia. Our multicultural team is spread between offices in United States, Brazil, Mexico, Colombia and Chile, and we have boots on the ground in every country where we process payments. We are growing rapidly and excited about the future ahead.</p>
</div>
</div>
<div class="col-12 col-md-5 col-lg-4" style="background-image: url(\'/static/img/business-glass-building.jpg\');">
</div>
<div class="col-12 col-lg-1 d-flex align-items-end justify-content-end">
<img src="/static/img/squares-2.svg">
</div>
</div>
</div>
</section>



<div class="h-4 bg-white"></div>



<section class="slider-3 bg-blue">
<video autoplay muted loop poster="mg/metro.jpg">
<source src="/static/img/metro.mp4" type="video/mp4">
</video>
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-6 d-flex flex-column gap-1">
<h2 class="text-center txt-white"><strong>Our History Started in 2017</strong></h2>
<p class="text-center txt-white">With a huge goal from start, we built from scratch a payment institution that is leading the technology revolution in crossborder market in LatAm.</p>
</div>
</div>
<div class="row row-gap-2">
<div class=" owl-carousel owl-timeline">
<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2">
<h4 class="txt-flag border-radius-100 me-auto"><strong>2017</strong></h4>
<div class="d-flex align-items-center gap-1">
<img src="/static/img/ico-en.svg" class="w-1">
<h4><strong>Starting the business</strong></h4>
</div>
<p>3 partners decided to build a company to disrupt the payment industry in Brazil. Using a small office and with only four colleagues in the team, FacilitaPay goes live.</p>
</div>
</div>
<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2">
<h4 class="txt-flag border-radius-100 me-auto"><strong>2018</strong></h4>
<div class="d-flex align-items-center gap-1">
<h4><strong>Developing Integration</strong></h4>
</div>
<p>FacilitaPay launch it\'s fully integrated payment stack, available for international companies to access Brazilian market, collecting and sending payments. Reaching more than $1 billion in TPV.</p>
</div>
</div>
<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2">
<h4 class="txt-flag border-radius-100 me-auto"><strong>2019</strong></h4>
<div class="d-flex align-items-center gap-1">
<h4><strong>Scaling the operation</strong></h4>
</div>
<p>Reaching clients in more than 10 countries and more than $2 billion TPV. FacilitaPay invests in more technology and offers more than 50 payment methods for all the clients.</p>
</div>
</div>
<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2">
<h4 class="txt-flag border-radius-100 me-auto"><strong>2020</strong></h4>
<div class="d-flex align-items-center gap-1">
<h4><strong>Increasing Features</strong></h4>
</div>
<p>2020 was the year that we started to become a beyond payment platform, integrating more features related with fraud prevention and more payment possibilities, transforming FacilitaPay\'s platform in a open source and payment as a service platform.</p>
</div>
</div>

<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2">
<h4 class="txt-flag border-radius-100 me-auto"><strong>2021</strong></h4>
<div class="d-flex align-items-center gap-1">
<img src="/static/img/ico-mexico.svg" class="w-1">
<h4><strong>Mexican Operation</strong></h4>
</div>
<p>After 8 months developing our expansion model and our Mexican operation, we wen\'t live locally with 10 enterprise clients, using the same APIs to expand to another country. This is just the beginning of our expansion plan.</p>
</div>
</div>

<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2">
<h4 class="txt-flag border-radius-100 me-auto"><strong>2022</strong></h4>
<div class="d-flex align-items-center gap-1">
<h4><strong>More Footprint Expansion</strong></h4>
</div>
<p>Expanding to Colombia and building our crypto as a service network helped FacilitaPay to achieve 350% growth during 2022, helping more clients to expand globally.</p>
</div>
</div>

<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2">
<h4 class="txt-flag border-radius-100 me-auto"><strong>2023</strong></h4>
<div class="d-flex align-items-center gap-1">
<h4><strong>More growth to come</strong></h4>
</div>
<p>Executing more steps in our roadmap, we\'re adding more payment corridors to our payment network and more banking features to our platform, helping our clients to keep their global expansion through our banking platform. We\'re excited to deliver more and more to the market.</p>
</div>
</div>
</div>
</div>
</div>
</section>



<div class="h-2 bg-white"></div>

<section class="map" id="map" style="position:relative">
<div class="container text-center pt-4">
<div class="row justify-content-center">
<div class="col-12 d-flex flex-column gap-1" id="welcome">
<h6>welcome to latam</h6>
<h2><strong>Accept all payment methods available in each country</strong></h2>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="map-container">

<img src="/static/img/map-home.jpg" usemap="#map" class="img-fluid d-none d-sm-flex">
<img src="/static/img/map-home-mobile.jpg" class="img-fluid d-flex d-sm-none">

<map name="map" id="tooltipcanvas">
<area href="markets-brazil.php" class="ttiptrigger" data-name="brasil" shape="poly" coords="370,431,381,426,385,437,398,437,418,429,434,450,467,462,494,479,471,523,540,527,541,542,470,543,446,568,436,578,441,589,431,608,419,606,409,599,420,577,411,564,396,552,396,535,383,523,377,514,363,505,357,494,341,499,327,493,325,476,340,470,341,443" >
<area href="markets-colombia.php" class="ttiptrigger" data-name="colombia" shape="poly" coords="323,387,316,393,308,419,216,421,221,435,315,433,324,456,338,456,336,435,347,428,347,413,334,404" >
<area href="markets-mexico.php" class="ttiptrigger" data-name="mexico" shape="poly" coords="180,321,109,325,112,338,188,339,218,360,243,360,268,336,229,344,219,306,200,298,186,283,161,281,151,301" >
<area class="ttiptrigger" data-name="chile" shape="poly" coords="341,540,341,582,279,587,281,599,337,600,358,695,402,721,375,692,365,652,356,591,357,562" >
</map>

</div>
</div>
</div>
</div>

</section>

<div class="ttipcontainer">
<div class="ttip ignoreanimation" id="brasil">
<img width="20" src="/static/img/finance/SVG/ico-pix-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-card-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-boleto-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-ted-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-international-wires-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-crypto-currencies-blue.svg">
<small>Click to discover all payment methods</small>
</div>

<div class="ttip ignoreanimation" id="mexico">
<img width="20" src="/static/img/finance/SVG/ico-spei-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-card-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-oxxo-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-international-wires-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-crypto-currencies-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-codi-blue.svg">
<small>Click to discover all payment methods</small>
</div>

<div class="ttip ignoreanimation" id="colombia">
<img width="20" src="/static/img/finance/SVG/ico-pse-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-card-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-money-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-ted-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-crypto-currencies-blue.svg">
<small>Click to discover all payment methods</small>
</div>

<div class="ttip ignoreanimation" id="chile">
<p>Chile, we are coming.</p>
</div>
</div>

<div class="container text-center">
<div class="row justify-content-center">
<div class="col-12">
<a href="optin.php" class="btn d-inline-flex">Start now</a>
</div>
</div>
</div>


<div class="h-2 bg-white"></div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'About Us',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 17:59:26',
                'updated_at' => '2023-05-30 17:59:26',
            ),
            31 => 
            array (
                'id' => 58,
                'pages_id' => 21,
                'locale' => 'pt',
                'title' => 'About Us',
                'html' => ' <section class="hero-4 bg-blue">
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row justify-content-center text-center">
<div class="col-12 col-lg-9 d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1">
<h6 class="txt-light-green">ABOUT US</h6>
<h3 class="txt-white"><strong>We are a different kind of payments company because winning in emerging markets requires a different approach</strong></h3>
</div>
<div class="d-flex justify-content-center gap-1">
<a href="optin.php" target="_blank" class="btn d-inline-flex"><strong>Let\'s talk</strong></a>
<a href="careers.php" target="_blank" class="btn btn-4 d-inline-flex"><strong>Careers</strong></a>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-6">
<hr class="bg-white">
</div>
</div>
<div class="row justify-content-center row-gap-3">
<div class="col-6 col-lg-3 d-flex gap-1">
<div class="ico d-flex align-items-center justify-content-center h-5 w-5">
<img src="/static/img/icos/ico-7.svg" class="h-2">
</div>
<div class="d-flex flex-column justify-content-center">
<h5 class="txt-light-green">Over +1000</h5>
<p class="txt-white">Payment methods available.</p>
</div>
</div>
<div class="col-6 col-lg-3 d-flex gap-1">
<div class="ico d-flex align-items-center justify-content-center h-5 w-5">
<img src="/static/img/icos/ico-8.svg" class="h-2">
</div>
<div class="d-flex flex-column justify-content-center">
<h5 class="txt-light-green">290+ Companies</h5>
<p class="txt-white">Operating with us.</p>
</div>
</div>
<div class="col-6 col-lg-3 d-flex gap-1">
<div class="ico d-flex align-items-center justify-content-center h-5 w-5">
<img src="/static/img/icos/ico-9.svg" class="h-2">
</div>
<div class="d-flex flex-column justify-content-center">
<h5 class="txt-light-green">TPV</h5>
<p class="txt-white">Over 6 billions USD.</p>
</div>
</div>
<div class="col-6 col-lg-3 d-flex gap-1">
<div class="ico d-flex align-items-center justify-content-center h-5 w-5">
<img src="/static/img/icos/ico-10.svg" class="h-2">
</div>
<div class="d-flex flex-column justify-content-center">
<h5 class="txt-light-green">4 Countries</h5>
<p class="txt-white">With operations</p>
</div>
</div>
</div>
</div>
</section>



<section class="content-2 bg-white">
<div class="container pt-4">
<div class="row justify-content-center row-gap-3">
<div class="col-12 col-md-7 col-lg-5">
<div class="d-flex flex-column gap-2 pe-5">
<h2><strong>Our Story</strong></h2>
<p>FacilitaPay was started with one goal in mind - to close the payments innovation gap that exists between developed countries and emerging economies. We are integrating local payments in emerging economies to global countries with companies operating world-wide. That means we are fully dedicated to delivering a flexible, all-encompassing payments solution that unlocks new revenues and maximizes reach in growth markets. We are incredibly honored to power growth for some of the most visionary companies in the world who inspire us to reach for the impossible every day.</p>
<p>While FacilitaPay was born in Brazil, we knew that local payment challenges extended well beyond the neighboring countries. Today. our payment coverage includes high-growth, emerging economies in LATAM helping companies based in North America, LatAm, Europe, Africa, and Asia. Our multicultural team is spread between offices in United States, Brazil, Mexico, Colombia and Chile, and we have boots on the ground in every country where we process payments. We are growing rapidly and excited about the future ahead.</p>
</div>
</div>
<div class="col-12 col-md-5 col-lg-4" style="background-image: url(\'/static/img/business-glass-building.jpg\');">
</div>
<div class="col-12 col-lg-1 d-flex align-items-end justify-content-end">
<img src="/static/img/squares-2.svg">
</div>
</div>
</div>
</section>



<div class="h-4 bg-white"></div>



<section class="slider-3 bg-blue">
<video autoplay muted loop poster="mg/metro.jpg">
<source src="/static/img/metro.mp4" type="video/mp4">
</video>
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-6 d-flex flex-column gap-1">
<h2 class="text-center txt-white"><strong>Our History Started in 2017</strong></h2>
<p class="text-center txt-white">With a huge goal from start, we built from scratch a payment institution that is leading the technology revolution in crossborder market in LatAm.</p>
</div>
</div>
<div class="row row-gap-2">
<div class=" owl-carousel owl-timeline">
<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2">
<h4 class="txt-flag border-radius-100 me-auto"><strong>2017</strong></h4>
<div class="d-flex align-items-center gap-1">
<img src="/static/img/ico-en.svg" class="w-1">
<h4><strong>Starting the business</strong></h4>
</div>
<p>3 partners decided to build a company to disrupt the payment industry in Brazil. Using a small office and with only four colleagues in the team, FacilitaPay goes live.</p>
</div>
</div>
<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2">
<h4 class="txt-flag border-radius-100 me-auto"><strong>2018</strong></h4>
<div class="d-flex align-items-center gap-1">
<h4><strong>Developing Integration</strong></h4>
</div>
<p>FacilitaPay launch it\'s fully integrated payment stack, available for international companies to access Brazilian market, collecting and sending payments. Reaching more than $1 billion in TPV.</p>
</div>
</div>
<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2">
<h4 class="txt-flag border-radius-100 me-auto"><strong>2019</strong></h4>
<div class="d-flex align-items-center gap-1">
<h4><strong>Scaling the operation</strong></h4>
</div>
<p>Reaching clients in more than 10 countries and more than $2 billion TPV. FacilitaPay invests in more technology and offers more than 50 payment methods for all the clients.</p>
</div>
</div>
<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2">
<h4 class="txt-flag border-radius-100 me-auto"><strong>2020</strong></h4>
<div class="d-flex align-items-center gap-1">
<h4><strong>Increasing Features</strong></h4>
</div>
<p>2020 was the year that we started to become a beyond payment platform, integrating more features related with fraud prevention and more payment possibilities, transforming FacilitaPay\'s platform in a open source and payment as a service platform.</p>
</div>
</div>

<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2">
<h4 class="txt-flag border-radius-100 me-auto"><strong>2021</strong></h4>
<div class="d-flex align-items-center gap-1">
<img src="/static/img/ico-mexico.svg" class="w-1">
<h4><strong>Mexican Operation</strong></h4>
</div>
<p>After 8 months developing our expansion model and our Mexican operation, we wen\'t live locally with 10 enterprise clients, using the same APIs to expand to another country. This is just the beginning of our expansion plan.</p>
</div>
</div>

<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2">
<h4 class="txt-flag border-radius-100 me-auto"><strong>2022</strong></h4>
<div class="d-flex align-items-center gap-1">
<h4><strong>More Footprint Expansion</strong></h4>
</div>
<p>Expanding to Colombia and building our crypto as a service network helped FacilitaPay to achieve 350% growth during 2022, helping more clients to expand globally.</p>
</div>
</div>

<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2">
<h4 class="txt-flag border-radius-100 me-auto"><strong>2023</strong></h4>
<div class="d-flex align-items-center gap-1">
<h4><strong>More growth to come</strong></h4>
</div>
<p>Executing more steps in our roadmap, we\'re adding more payment corridors to our payment network and more banking features to our platform, helping our clients to keep their global expansion through our banking platform. We\'re excited to deliver more and more to the market.</p>
</div>
</div>
</div>
</div>
</div>
</section>



<div class="h-2 bg-white"></div>

<section class="map" id="map" style="position:relative">
<div class="container text-center pt-4">
<div class="row justify-content-center">
<div class="col-12 d-flex flex-column gap-1" id="welcome">
<h6>welcome to latam</h6>
<h2><strong>Accept all payment methods available in each country</strong></h2>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="map-container">

<img src="/static/img/map-home.jpg" usemap="#map" class="img-fluid d-none d-sm-flex">
<img src="/static/img/map-home-mobile.jpg" class="img-fluid d-flex d-sm-none">

<map name="map" id="tooltipcanvas">
<area href="markets-brazil.php" class="ttiptrigger" data-name="brasil" shape="poly" coords="370,431,381,426,385,437,398,437,418,429,434,450,467,462,494,479,471,523,540,527,541,542,470,543,446,568,436,578,441,589,431,608,419,606,409,599,420,577,411,564,396,552,396,535,383,523,377,514,363,505,357,494,341,499,327,493,325,476,340,470,341,443" >
<area href="markets-colombia.php" class="ttiptrigger" data-name="colombia" shape="poly" coords="323,387,316,393,308,419,216,421,221,435,315,433,324,456,338,456,336,435,347,428,347,413,334,404" >
<area href="markets-mexico.php" class="ttiptrigger" data-name="mexico" shape="poly" coords="180,321,109,325,112,338,188,339,218,360,243,360,268,336,229,344,219,306,200,298,186,283,161,281,151,301" >
<area class="ttiptrigger" data-name="chile" shape="poly" coords="341,540,341,582,279,587,281,599,337,600,358,695,402,721,375,692,365,652,356,591,357,562" >
</map>

</div>
</div>
</div>
</div>

</section>

<div class="ttipcontainer">
<div class="ttip ignoreanimation" id="brasil">
<img width="20" src="/static/img/finance/SVG/ico-pix-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-card-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-boleto-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-ted-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-international-wires-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-crypto-currencies-blue.svg">
<small>Click to discover all payment methods</small>
</div>

<div class="ttip ignoreanimation" id="mexico">
<img width="20" src="/static/img/finance/SVG/ico-spei-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-card-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-oxxo-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-international-wires-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-crypto-currencies-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-codi-blue.svg">
<small>Click to discover all payment methods</small>
</div>

<div class="ttip ignoreanimation" id="colombia">
<img width="20" src="/static/img/finance/SVG/ico-pse-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-card-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-money-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-ted-blue.svg">
<img width="20" src="/static/img/finance/SVG/ico-crypto-currencies-blue.svg">
<small>Click to discover all payment methods</small>
</div>

<div class="ttip ignoreanimation" id="chile">
<p>Chile, we are coming.</p>
</div>
</div>

<div class="container text-center">
<div class="row justify-content-center">
<div class="col-12">
<a href="optin.php" class="btn d-inline-flex">Start now</a>
</div>
</div>
</div>


<div class="h-2 bg-white"></div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'About Us',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 17:59:26',
                'updated_at' => '2023-05-30 17:59:26',
            ),
            32 => 
            array (
                'id' => 59,
                'pages_id' => 21,
                'locale' => 'es',
                'title' => 'About Us',
                'html' => '
<section class="hero-4 bg-blue">
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row justify-content-center text-center">
<div class="col-12 col-lg-9 d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1"><h6 class="txt-light-green">SOBRE NOSOTROS</h6>
<h3 class="txt-white"><strong id="iqi6">Somos un aliado de pagos diferente, porque ganar en mercados
emergentes requiere un enfoque aún más eficiente.</strong></h3></div>
<div class="d-flex justify-content-center gap-1"><a href="optin.php" target="_blank"
class="btn d-inline-flex"><strong>Let&#039;s
talk</strong></a><a href="careers.php" target="_blank"
class="btn btn-4 d-inline-flex"><strong>Careers</strong></a></div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-6">
<hr class="bg-white"/>
</div>
</div>
<div class="row justify-content-center row-gap-3">
<div class="col-6 col-lg-3 d-flex gap-1">
<div class="ico d-flex align-items-center justify-content-center h-5 w-5"><img
src="/static/img/icos/ico-7.svg" class="h-2"/></div>
<div class="d-flex flex-column justify-content-center"><h5 class="txt-light-green">Más de +1000</h5>
<p class="txt-white">Métodos de pago disponibles.</p></div>
</div>
<div class="col-6 col-lg-3 d-flex gap-1">
<div class="ico d-flex align-items-center justify-content-center h-5 w-5"><img
src="/static/img/icos/ico-8.svg" class="h-2"/></div>
<div class="d-flex flex-column justify-content-center"><h5 class="txt-light-green">Más de 290
empresas</h5>
<p class="txt-white">Operando con nosotros.</p></div>
</div>
<div class="col-6 col-lg-3 d-flex gap-1">
<div class="ico d-flex align-items-center justify-content-center h-5 w-5"><img
src="/static/img/icos/ico-9.svg" class="h-2"/></div>
<div class="d-flex flex-column justify-content-center"><h5 class="txt-light-green">TPV</h5>
<p class="txt-white">Más de 6 mil millones de dólares.</p></div>
</div>
<div class="col-6 col-lg-3 d-flex gap-1">
<div class="ico d-flex align-items-center justify-content-center h-5 w-5"><img
src="/static/img/icos/ico-10.svg" class="h-2"/></div>
<div class="d-flex flex-column justify-content-center"><h5 class="txt-light-green">4 países</h5>
<p class="txt-white">Siendo operados por FacilitaPay</p></div>
</div>
</div>
</div>
</section>
<section class="content-2 bg-white">
<div class="container pt-4">
<div class="row justify-content-center row-gap-3">
<div class="col-12 col-md-7 col-lg-5">
<div class="d-flex flex-column gap-2 pe-5"><h2><strong id="ilg34">Nuestra historia</strong></h2>
<p id="iy2qc">FacilitaPay se creó con un objetivo en mente: cerrar la brecha de innovación de pagos
que existe entre los países desarrollados y las economías emergentes. Estamos conectando a
empresas de todo el mundo con usuarios en Latinoamérica, a través de los pagos locales. Esto
significa que estamos totalmente dedicados a proporcionar una solución de pagos flexible y
completa que permita desbloquear nuevos ingresos y maximizar el alcance en los mercados
emergentes. Nos sentimos increíblemente honrados de impulsar el crecimiento de algunas de las
compañías más visionarias del mundo, que nos inspiran a lograr lo imposible todos los días.</p>
<p id="iqmvn">Aunque FacilitaPay nació en Brasil, sabíamos que los desafíos de pago locales iban
mucho más allá de los países vecinos. Hoy en día, nuestra cobertura de pagos incluye economías
emergentes y de alto crecimiento en América Latina, ayudando a empresas basadas en América del
Norte, América Latina, Europa, África y Asia. Nuestro equipo multicultural está distribuido
entre oficinas en Estados Unidos, Brasil, México, Colombia y Chile, y estamos presentes en todos
los países donde procesamos pagos. Estamos creciendo rápidamente y entusiasmados con el futuro
que tenemos por delante.</p></div>
</div>
<div class="col-12 col-md-5 col-lg-4" id="irtob">
</div>
<div class="col-12 col-lg-1 d-flex align-items-end justify-content-end"><img
src="/static/img/squares-2.svg"/></div>
</div>
</div>
</section>
<div class="h-4 bg-white"></div>
<section class="slider-3 bg-blue">
<video autoplay="" muted="" loop="" poster="/static/img/metro.jpg">
<source src="/static/img/metro.mp4" type="video/mp4">
</video>
<div class="container d-flex flex-column gap-3 pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-6 d-flex flex-column gap-1"><h2 class="text-center txt-white"><strong id="ir9vs">Nuestra
historia comenzó en 2017</strong></h2>
<p class="text-center txt-white">Con un gran objetivo desde el principio, construimos desde cero una
institución de pago que está liderando la revolución tecnológica del comercio internacional en
América Latina.</p></div>
</div>
<div class="row row-gap-2">
<div class="owl-carousel owl-timeline">
<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2"><h4
class="txt-flag border-radius-100 me-auto"><strong>2017</strong></h4>
<div class="d-flex align-items-center gap-1"><img src="/static/img/ico-en.svg" class="w-1"/><h4>
<strong id="ivg7h">El comienzo</strong></h4></div>
<p id="i7wxo">3 socios decidieron crear una empresa para revolucionar la industria de pagos en
Brasil. En una pequeña oficina y con un equipo de tan solo 4 personas, FacilitaPay se pone
en marcha.</p></div>
</div>
<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2"><h4
class="txt-flag border-radius-100 me-auto"><strong>2018</strong></h4>
<div class="d-flex align-items-center gap-1"><h4><strong id="i1t84q">Desarrollo de la
integración</strong></h4></div>
<p id="iet7su">FacilitaPay lanza su solución de pagos totalmente integrada, disponible para que
las empresas internacionales accedan al mercado brasileño mediante la recolección y el envío
de pagos. Alcanzando más de $ 1 mil millones en TPV.</p></div>
</div>
<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2"><h4
class="txt-flag border-radius-100 me-auto"><strong>2019</strong></h4>
<div class="d-flex align-items-center gap-1"><h4><strong id="inlz3h">Tamaño de la
operación</strong></h4></div>
<p id="ivmuxk">Llegando a clientes en más de 10 países y alcanzando más de $ 2 mil millones de
pagos procesados. FacilitaPay invierte en más tecnología y aumenta su oferta de metodos de
pago a más de 50 opciones.</p></div>
</div>
<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2"><h4
class="txt-flag border-radius-100 me-auto"><strong>2020</strong></h4>
<div class="d-flex align-items-center gap-1"><h4><strong id="iwd4dp">Aumento de los
recursos</strong></h4></div>
<p id="idairu">2020 fue el año en que comenzamos a ir más allá de una plataforma de pago,
integrando más funciones relacionadas con la prevención del fraude y más posibilidades de
pago, transformando la plataforma de FacilitaPay en una plataforma de código abierto y de
payments-as-a-service.</p></div>
</div>
<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2"><h4
class="txt-flag border-radius-100 me-auto"><strong id="imi81a">2021</strong></h4>
<div class="d-flex align-items-center gap-1"><img src="/static/img/ico-mexico.svg" class="w-1"/>
<h4><strong id="ib8grj">Operación en México</strong></h4></div>
<p id="iz70yc">Después de 8 meses desarrollando nuestro modelo y nuestra operación en México,
comenzamos a operar localmente con 10 clientes corporativos, utilizando las mismas APIs para
expandirnos a otro país. Este es solo el comienzo de nuestro plan de expansión.</p></div>
</div>
<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2"><h4
class="txt-flag border-radius-100 me-auto"><strong id="ih699g">2022</strong></h4>
<div class="d-flex align-items-center gap-1"><h4><strong id="i1gs67">Más expansiones en el
futuro</strong></h4></div>
<p id="i9en6x">La expansión a Colombia y la creación de nuestra red criptográfica como servicio,
ayudaron a FacilitaPay a lograr un crecimiento del 350% en 2022, ayudando a más clientes a
expandirse a nivel mundial.</p></div>
</div>
<div class="item">
<div class="item bg-white border-radius d-flex flex-column gap-1 p-2"><h4
class="txt-flag border-radius-100 me-auto"><strong>2023</strong></h4>
<div class="d-flex align-items-center gap-1"><h4><strong id="i464cm">Más crecimiento por
venir</strong></h4></div>
<p id="i16vz5">Al ejecutar más pasos en nuestra hoja de ruta, estamos agregando más corredores
de pago a nuestra red soluciones y más capacidades bancarias a nuestra plataforma, ayudando
a nuestros clientes en su expansión global a través de nuestra plataforma bancaria. Estamos
entusiasmados por lo mucho que seguiremos agregando al mercado.</p></div>
</div>
</div>
</div>
</div>
</section>
<div class="h-2 bg-white"></div>
<section id="map" class="map">
<div class="container text-center pt-4">
<div class="row justify-content-center">
<div id="welcome" class="col-12 d-flex flex-column gap-1"><h6 id="iy2xu4">BIENVENIDOS A AMÉRICA LATINA<br/>
</h6>
<h2><strong id="i7xe7o">Acepta todos los métodos de pago disponibles en cada país</strong></h2></div>
</div>
<div class="row">
<div class="col-12">
<div class="map-container"><img src="/static/img/map-home.jpg" usemap="#map"
class="img-fluid d-none d-sm-flex"/><img
src="/static/img/map-home-mobile.jpg" class="img-fluid d-flex d-sm-none"/>
<map name="map" id="tooltipcanvas">
<area href="markets-brazil.php" data-name="brasil" shape="poly"
coords="370,431,381,426,385,437,398,437,418,429,434,450,467,462,494,479,471,523,540,527,541,542,470,543,446,568,436,578,441,589,431,608,419,606,409,599,420,577,411,564,396,552,396,535,383,523,377,514,363,505,357,494,341,499,327,493,325,476,340,470,341,443"
class="ttiptrigger"/>
<area href="markets-colombia.php" data-name="colombia" shape="poly"
coords="323,387,316,393,308,419,216,421,221,435,315,433,324,456,338,456,336,435,347,428,347,413,334,404"
class="ttiptrigger"/>
<area href="markets-mexico.php" data-name="mexico" shape="poly"
coords="180,321,109,325,112,338,188,339,218,360,243,360,268,336,229,344,219,306,200,298,186,283,161,281,151,301"
class="ttiptrigger"/>
<area data-name="chile" shape="poly"
coords="341,540,341,582,279,587,281,599,337,600,358,695,402,721,375,692,365,652,356,591,357,562"
class="ttiptrigger"/>
</map>
</div>
</div>
</div>
</div>
</section>
<div class="ttipcontainer">
<div id="brasil" class="ttip ignoreanimation"><img width="20" src="/static/img/finance/SVG/ico-pix-blue.svg"/><img
width="20" src="/static/img/finance/SVG/ico-card-blue.svg"/><img width="20"
src="/static/img/finance/SVG/ico-boleto-blue.svg"/><img
width="20" src="/static/img/finance/SVG/ico-ted-blue.svg"/><img width="20"
src="/static/img/finance/SVG/ico-international-wires-blue.svg"/><img
width="20" src="/static/img/finance/SVG/ico-crypto-currencies-blue.svg"/><small>Click to discover all
payment methods</small></div>
<div id="mexico" class="ttip ignoreanimation"><img width="20" src="/static/img/finance/SVG/ico-spei-blue.svg"/><img
width="20" src="/static/img/finance/SVG/ico-card-blue.svg"/><img width="20"
src="/static/img/finance/SVG/ico-oxxo-blue.svg"/><img
width="20" src="/static/img/finance/SVG/ico-international-wires-blue.svg"/><img width="20"
src="/static/img/finance/SVG/ico-crypto-currencies-blue.svg"/><img
width="20" src="/static/img/finance/SVG/ico-codi-blue.svg"/><small>Click to discover all payment
methods</small></div>
<div id="colombia" class="ttip ignoreanimation"><img width="20" src="/static/img/finance/SVG/ico-pse-blue.svg"/><img
width="20" src="/static/img/finance/SVG/ico-card-blue.svg"/><img width="20"
src="/static/img/finance/SVG/ico-money-blue.svg"/><img
width="20" src="/static/img/finance/SVG/ico-ted-blue.svg"/><img width="20"
src="/static/img/finance/SVG/ico-crypto-currencies-blue.svg"/><small>Click
to discover all payment methods</small></div>
<div id="chile" class="ttip ignoreanimation"><p>Chile, we are coming.</p></div>
</div>
<div class="container text-center">
<div class="row justify-content-center">
<div class="col-12"><a href="optin.php" class="btn d-inline-flex">Comienza ahora</a></div>
</div>
</div>
<div class="h-2 bg-white"></div>
',
            'css' => '* { box-sizing: border-box; } body {margin: 0;}#irtob{background-image:url(\'/static/img/business-glass-building.jpg\');}#map{position:relative;}',
                'metatitle' => 'About Us',
                'slug' => NULL,
                'metadescription' => 'SOBRE NOSOTROSSomos un aliado de pagos diferente, porque ganar en mercados emergentes requiere un enfoque aún más eficiente.Let&#039;s talkCareersMás de +1000Métodos de pago disponibles.Más de 290 empresasOperando con nosotros.TPVMás de 6 mil millones de dólares.4 paísesSiendo operados por FacilitaPayNuestra historiaFacilitaPay se creó con un objetivo en mente: cerrar la brecha de innovación de pagos que existe entre los países desarrollados y las economías emergentes. Estamos conectando a empresas de todo el mundo con usuarios en Latinoamérica, a través de los pagos locales. Esto significa que estamos totalmente dedicados a proporcionar una solución de pagos flexible y completa que permita desbloquear nuevos ingresos y maximizar el alcance en los mercados emergentes. Nos sentimos increíblemente honrados de impulsar el crecimiento de algunas de las compañías más visionarias del mundo, que nos inspiran a lograr lo imposible todos los días.Aunque FacilitaPay nació en Brasil, sabíamos que los desafíos de pago locales iban mucho más allá de los países vecinos. Hoy en día, nuestra cobertura de pagos incluye economías emergentes y de alto crecimiento en América Latina, ayudando a empresas basadas en América del Norte, América Latina, Europa, África y Asia. Nuestro equipo multicultural está distribuido entre oficinas en Estados Unidos, Brasil, México, Colombia y Chile, y estamos presentes en todos los países donde procesamos pagos. Estamos creciendo rápidamente y entusiasmados con el futuro que tenemos por delante.
Nuestra historia comenzó en 2017Con un gran objetivo desde el principio, construimos desde cero una institución de pago que está liderando la revolución tecnológica del comercio internacional en América Latina.2017El comienzo3 socios decidieron crear una empresa para revolucionar la industria de pagos en Brasil. En una pequeña oficina y con un equipo de tan solo 4 personas, FacilitaPay se pone en marcha.2018Desarrollo de la integraciónFacilitaPay lanza su solución de pagos totalmente integrada, disponible para que las empresas internacionales accedan al mercado brasileño mediante la recolección y el envío de pagos. Alcanzando más de $ 1 mil millones en TPV.2019Tamaño de la operaciónLlegando a clientes en más de 10 países y alcanzando más de $ 2 mil millones de pagos procesados. FacilitaPay invierte en más tecnología y aumenta su oferta de metodos de pago a más de 50 opciones.2020Aumento de los recursos2020 fue el año en que comenzamos a ir más allá de una plataforma de pago, integrando más funciones relacionadas con la prevención del fraude y más posibilidades de pago, transformando la plataforma de FacilitaPay en una plataforma de código abierto y de payments-as-a-service.2021Operación en MéxicoDespués de 8 meses desarrollando nuestro modelo y nuestra operación en México, comenzamos a operar localmente con 10 clientes corporativos, utilizando las mismas APIs para expandirnos a otro país. Este es solo el comienzo de nuestro plan de expansión.2022Más expansiones en el futuroLa expansión a Colombia y la creación de nuestra red criptográfica como servicio, ayudaron a FacilitaPay a lograr un crecimiento del 350% en 2022, ayudando a más clientes a expandirse a nivel mundial.2023Más crecimiento por venirAl ejecutar más pasos en nuestra hoja de ruta, estamos agregando más corredores de pago a nuestra red soluciones y más capacidades bancarias a nuestra plataforma, ayudando a nuestros clientes en su expansión global a través de nuestra plataforma bancaria. Estamos entusiasmados por lo mucho que seguiremos agregando al mercado.BIENVENIDOS A AMÉRICA LATINAAcepta todos los métodos de pago disponibles en cada paísClick to discover all payment methodsClick to discover all payment methodsClick to discover all payment methodsChile, we are coming.Comienza ahora',
                'created_at' => '2023-05-30 17:59:26',
                'updated_at' => '2023-05-31 18:53:55',
            ),
            33 => 
            array (
                'id' => 60,
                'pages_id' => 22,
                'locale' => 'en',
                'title' => 'Contact Us',
                'html' => '<section class="contact" style="">
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



<div class="h-4"></div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Contact Us',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 18:00:22',
                'updated_at' => '2023-05-30 18:00:22',
            ),
            34 => 
            array (
                'id' => 61,
                'pages_id' => 22,
                'locale' => 'pt',
                'title' => 'Contact Us',
                'html' => '<section class="contact" style="">
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



<div class="h-4"></div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Contact Us',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 18:00:22',
                'updated_at' => '2023-05-30 18:00:22',
            ),
            35 => 
            array (
                'id' => 62,
                'pages_id' => 22,
                'locale' => 'es',
                'title' => 'Contact Us',
                'html' => '<body class="home"><section class="contact"><div class="container pt-4"><div class="row d-flex row-gap-4 justify-content-between"><div class="col-1 d-none d-lg-flex align-items-end justify-content-end"><img src="/static/img/squares-2.svg"/></div><div class="col-12 col-lg-5 d-flex flex-column gap-3"><div class="d-flex flex-column gap-1"><h2><strong id="i3ag">Contáctanos</strong></h2><p id="ipabx">No dudes en contactarnos, ¡nuestro equipo te responderá lo antes posible!</p></div><form action="send-contact-email.php" method="POST" class="d-flex flex-column gap-2"><fieldset class="d-flex flex-wrap gap-2"><div class="form-group d-flex flex-column w-100"><input name="firstName" type="text" id="firstName" placeholder=" " required class="form-control"/><label for="firstName">Name</label></div><div class="form-group d-flex flex-column w-100"><input name="email" type="text" id="email" placeholder=" " required class="form-control"/><label for="email">Email</label></div><div class="form-group d-flex flex-column w-100"><textarea id="message" rows="4" cols="50" placeholder=" " required></textarea><label name="message" for="message">Message</label></div><div class="form-group d-flex flex-column w-100"><button type="submit" class="btn"><strong>Send now</strong></button></div></fieldset></form></div><div class="col-12 col-lg-5 bg-white align-items-center"><div class="d-flex flex-column gap-3 ps-5 pb-5 pt-5"><h4><strong>Info</strong></h4><div class="d-flex flex-column row-gap-3 gap-2"><div class="d-flex flex-column flex-lg-row align-items-center gap-2"><div class="d-flex justify-content-center w-5"><img src="/static/img/ico-mail.svg"/></div><div class="d-flex txt-blue justify-content-center flex-column"><p>hello@facilitapay.com</p></div></div><div class="d-flex flex-column flex-lg-row align-items-center gap-2"><div class="d-flex justify-content-center w-5"><img src="/static/img/ico-phone.svg"/></div><div class="d-flex txt-blue justify-content-center flex-column"><p>+1 855 343 5227</p><p>+55 31 3195.6300</p></div></div><div class="d-flex flex-column flex-lg-row align-items-center gap-2"><div class="d-flex justify-content-center w-5"><img src="/static/img/ico-pin-2.svg"/></div><div class="d-flex txt-blue justify-content-center flex-column"><p>201 S Biscayne Blvd, 12th Floor <br/>Miami, Fl 33131</p></div></div></div></div></div></div></div></section><div class="h-2"></div><section class="slider"><div class="container d-flex flex-column gap-2 pb-4 pt-4"><div class="row"><div class="col-12 d-flex flex-column align-items-center"><h6 id="i9eby">CONFIADO POR LOS GIGANTES DE LA TECNOLOGÍA</h6></div></div><div class="row"><div class="col-12"><div class="owl-carousel owl-partners owl-theme"><div class="item"><img src="/static/img/logos/kraken.png" id="ie3hj" class="img-fluid"/></div><div class="item"><img src="/static/img/logos/stake.png" id="iv7hy" class="img-fluid"/></div><div class="item"><img src="/static/img/logos/bybit-blue.png" id="ig4v2" class="img-fluid"/></div><div class="item"><img src="/static/img/logos/sproutfi.png" id="i2npo" class="img-fluid"/></div><div class="item"><img src="/static/img/logos/bitso-blue.png" id="i7uaa" class="img-fluid"/></div><div class="item"><img src="/static/img/logos/tickmill.png" id="ifqdg" class="img-fluid"/></div><div class="item"><img src="/static/img/logos/okx-blue.png" id="inb9q" class="img-fluid"/></div><div class="item"><img src="/static/img/logos/wyre.png" id="iwt8j" class="img-fluid"/></div><div class="item"><img src="/static/img/logos/okcoin.png" id="i0bp9" class="img-fluid"/></div><div class="item"><img src="/static/img/logos/angloamerican.png" id="izm3o"/></div><div class="item"><img src="/static/img/logos/bit2me.png" id="ijwjy" class="img-fluid"/></div></div></div></div></div></section><div class="h-4"></div></body>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}#ie3hj{fill:blue;height:35px;width:auto;}#iv7hy{fill:blue;height:35px;width:auto;}#ig4v2{fill:blue;height:35px;width:auto;}#i2npo{fill:blue;height:35px;width:auto;}#i7uaa{fill:blue;height:35px;width:auto;}#ifqdg{fill:blue;height:35px;width:auto;}#inb9q{fill:blue;height:35px;width:auto;}#iwt8j{fill:blue;height:35px;width:auto;}#i0bp9{fill:blue;height:35px;width:auto;}#izm3o{fill:blue;height:35px;width:auto;}#ijwjy{fill:blue;height:35px;width:auto;}',
                'metatitle' => 'Contact Us',
                'slug' => NULL,
                'metadescription' => 'ContáctanosNo dudes en contactarnos, ¡nuestro equipo te responderá lo antes posible!NameEmailMessageSend nowInfohello@facilitapay.com+1 855 343 5227+55 31 3195.6300201 S Biscayne Blvd, 12th Floor Miami, Fl 33131CONFIADO POR LOS GIGANTES DE LA TECNOLOGÍA',
                'created_at' => '2023-05-30 18:00:22',
                'updated_at' => '2023-05-31 18:55:02',
            ),
            36 => 
            array (
                'id' => 63,
                'pages_id' => 23,
                'locale' => 'en',
                'title' => 'Careers',
                'html' => '<section class="hero-5">
<div class="container d-flex flex-column gap-3 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-9 d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1 text-center">
<h6 class="txt-light-green">CAREERS</h6>
<h3 class="txt-white"><strong>Write the next chapter of your story with FacilitaPay</strong></h3>
<p class="txt-white">Since the beginning of our history, we have been bringing together people who are committed, dedicated and who dream big of revolutionizing the payments market. People who agree make the history of your best professional years together with Facilitapay.</p>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-6 col-lg-3">
<img src="/static/img/colaborator.png" class="img-fluid">
</div>
<div class="col-6 col-lg-5 d-flex flex-column justify-content-center">
<div class="d-flex flex-column gap-1">
<h4 class="txt-light-green">“It is possible to work in the same place where every day I develop myself, know myself and express myself authentically.”</h4>
<div>
<p class="txt-white"><strong>Julia Bianchetti</strong></p>
<h6 class="txt-white">BACKOFFICE LEAD</h6>
</div>
</div>
</div>
</div>
</div>
</section>



<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-12 d-flex flex-column gap-2">
<h2><strong>Open Positions</strong></h2>
<p>FacilitaPay is a global fintech that was founded in 2017 with the mission of providing a payment platform that connects international companies from different industries to LatAm countries, facilitating their local payments and helping them with the global expansion. <br><br>We\'re growing our team and seeking for more people in our team, helping to create more opportunities and developing new projects with our potential clients.</p>
</div>
<div class="col-12 col-lg-2">
</div>
</div>
</div>
</section>



<section class="table-2 bg-white">
<div class="container d-flex flex-column gap-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-8">
<table cellpadding="0" cellspacing="0" class="w-100">
<tr>
<th>JOB POSITION</th>
<th>LOCATION</th>
<th>DEPARTMENT</th>
<th>DATE</th>
</tr>
<tr>
<td class="txt-blue">Corporate Development</td>
<td>Remote</td>
<td>Sales</td>
<td>January 1, 2023</td>
</tr>
<tr>
<td class="txt-blue">Compliance Officer</td>
<td>Argentina (Hybrid)</td>
<td>Development</td>
<td>January 1, 2023</td>
</tr>
</table>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-8 flex-column align-items-center d-flex gap-2">
<a href="submit-cv.php" class="btn"><strong>Submit your CV</strong></a>
<!--                <a href="#!" class="d-flex txt-blue"><img src="/static/img/ico-linkedin-2.svg" class="h-1"> <strong>Connect with Linkedin</strong></a>-->
</div>
</div>
</div>
</section>



<div class="h-4 bg-white"></div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Careers',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 18:02:41',
                'updated_at' => '2023-05-30 18:02:41',
            ),
            37 => 
            array (
                'id' => 64,
                'pages_id' => 23,
                'locale' => 'pt',
                'title' => 'Careers',
                'html' => '<section class="hero-5">
<div class="container d-flex flex-column gap-3 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-9 d-flex flex-column gap-2">
<div class="d-flex flex-column gap-1 text-center">
<h6 class="txt-light-green">CAREERS</h6>
<h3 class="txt-white"><strong>Write the next chapter of your story with FacilitaPay</strong></h3>
<p class="txt-white">Since the beginning of our history, we have been bringing together people who are committed, dedicated and who dream big of revolutionizing the payments market. People who agree make the history of your best professional years together with Facilitapay.</p>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-6 col-lg-3">
<img src="/static/img/colaborator.png" class="img-fluid">
</div>
<div class="col-6 col-lg-5 d-flex flex-column justify-content-center">
<div class="d-flex flex-column gap-1">
<h4 class="txt-light-green">“It is possible to work in the same place where every day I develop myself, know myself and express myself authentically.”</h4>
<div>
<p class="txt-white"><strong>Julia Bianchetti</strong></p>
<h6 class="txt-white">BACKOFFICE LEAD</h6>
</div>
</div>
</div>
</div>
</div>
</section>



<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-12 d-flex flex-column gap-2">
<h2><strong>Open Positions</strong></h2>
<p>FacilitaPay is a global fintech that was founded in 2017 with the mission of providing a payment platform that connects international companies from different industries to LatAm countries, facilitating their local payments and helping them with the global expansion. <br><br>We\'re growing our team and seeking for more people in our team, helping to create more opportunities and developing new projects with our potential clients.</p>
</div>
<div class="col-12 col-lg-2">
</div>
</div>
</div>
</section>



<section class="table-2 bg-white">
<div class="container d-flex flex-column gap-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-lg-8">
<table cellpadding="0" cellspacing="0" class="w-100">
<tr>
<th>JOB POSITION</th>
<th>LOCATION</th>
<th>DEPARTMENT</th>
<th>DATE</th>
</tr>
<tr>
<td class="txt-blue">Corporate Development</td>
<td>Remote</td>
<td>Sales</td>
<td>January 1, 2023</td>
</tr>
<tr>
<td class="txt-blue">Compliance Officer</td>
<td>Argentina (Hybrid)</td>
<td>Development</td>
<td>January 1, 2023</td>
</tr>
</table>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-8 flex-column align-items-center d-flex gap-2">
<a href="submit-cv.php" class="btn"><strong>Submit your CV</strong></a>
<!--                <a href="#!" class="d-flex txt-blue"><img src="/static/img/ico-linkedin-2.svg" class="h-1"> <strong>Connect with Linkedin</strong></a>-->
</div>
</div>
</div>
</section>



<div class="h-4 bg-white"></div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Careers',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 18:02:41',
                'updated_at' => '2023-05-30 18:02:41',
            ),
            38 => 
            array (
                'id' => 65,
                'pages_id' => 23,
                'locale' => 'es',
                'title' => 'Careers',
                'html' => '<body class="home"><section class="hero-5"><div class="container d-flex flex-column gap-3 pt-4"><div class="row justify-content-center"><div class="col-12 col-lg-9 d-flex flex-column gap-2"><div class="d-flex flex-column gap-1 text-center"><h6 class="txt-light-green">Carreras</h6><h3 class="txt-white"><strong id="iitk">Escribe el siguiente capítulo de tu historia con FacilitaPay</strong></h3><p class="txt-white">Desde el comienzo de nuestra historia, hemos reunido a personas comprometidas y dedicadas que sueñan en grande con revolucionar el mercado de pagos. Personas que aceptan hacer historia de sus mejores años profesionales junto a Facilitapay.</p></div></div></div><div class="row justify-content-center"><div class="col-6 col-lg-3"><img src="/static/img/colaborator.png" class="img-fluid"/></div><div class="col-6 col-lg-5 d-flex flex-column justify-content-center"><div class="d-flex flex-column gap-1"><h4 class="txt-light-green">&quot;Es posible trabajar en el mismo lugar donde cada día me desarrollo, me conozco y me expreso con autenticidad&quot;.</h4><div><p class="txt-white"><strong>Julia Bianchetti</strong></p><h6 class="txt-white">LÍDER DE BACKOFFICE</h6></div></div></div></div></div></section><section class="content-1 bg-white"><div class="container d-flex flex-column gap-2 pt-4"><div class="row justify-content-center"><div class="col-12 col-lg-12 d-flex flex-column gap-2"><h2><strong id="ig36l">Vacantes disponibles</strong></h2><p id="id941">FacilitaPay es una Fintech global fundada en 2017 con la misión de proporcionar una plataforma de pago que conecta a empresas internacionales de diferentes industrias con sus clientes latinoamericanos, habilitando pagos locales y ayudándolas en la expansión por Latinoamérica.<br/><br/>Nuestro equipo está en constante expansión y continuamos buscando talentos para nuestro equipo, ayudando a crear más oportunidades y desarrollando nuevos proyectos con nuestros potenciales clientes.<br/></p></div><div class="col-12 col-lg-2">
</div></div></div></section><section class="table-2 bg-white"><div class="container d-flex flex-column gap-4 pt-4"><div class="row justify-content-center"><div class="col-12 col-lg-8"><table cellpadding="0" cellspacing="0" class="w-100"><tbody><tr><th>JOB POSITION</th><th>LOCATION</th><th>DEPARTMENT</th><th>DATE</th></tr><tr><td class="txt-blue">Corporate Development</td><td>Remote</td><td>Sales</td><td>January 1, 2023</td></tr><tr><td class="txt-blue">Compliance Officer</td><td>Argentina (Hybrid)</td><td>Development</td><td>January 1, 2023</td></tr></tbody></table></div></div><div class="row justify-content-center"><div class="col-12 col-lg-8 flex-column align-items-center d-flex gap-2"><a href="submit-cv.php" class="btn"><strong>Submit your CV</strong></a><!--                <a href="#!" class="d-flex txt-blue"><img src="/static/img/ico-linkedin-2.svg" class="h-1"> <strong>Connect with Linkedin</strong></a>--></div></div></div></section><div class="h-4 bg-white"></div></body>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Careers',
                'slug' => NULL,
                'metadescription' => 'CarrerasEscribe el siguiente capítulo de tu historia con FacilitaPayDesde el comienzo de nuestra historia, hemos reunido a personas comprometidas y dedicadas que sueñan en grande con revolucionar el mercado de pagos. Personas que aceptan hacer historia de sus mejores años profesionales junto a Facilitapay.&quot;Es posible trabajar en el mismo lugar donde cada día me desarrollo, me conozco y me expreso con autenticidad&quot;.Julia BianchettiLÍDER DE BACKOFFICEVacantes disponiblesFacilitaPay es una Fintech global fundada en 2017 con la misión de proporcionar una plataforma de pago que conecta a empresas internacionales de diferentes industrias con sus clientes latinoamericanos, habilitando pagos locales y ayudándolas en la expansión por Latinoamérica.Nuestro equipo está en constante expansión y continuamos buscando talentos para nuestro equipo, ayudando a crear más oportunidades y desarrollando nuevos proyectos con nuestros potenciales clientes.
JOB POSITIONLOCATIONDEPARTMENTDATECorporate DevelopmentRemoteSalesJanuary 1, 2023Compliance OfficerArgentina (Hybrid)DevelopmentJanuary 1, 2023Submit your CV Connect with Linkedin-->',
                'created_at' => '2023-05-30 18:02:41',
                'updated_at' => '2023-05-31 18:56:07',
            ),
            39 => 
            array (
                'id' => 69,
                'pages_id' => 25,
                'locale' => 'en',
                'title' => 'Submit CV',
                'html' => '<section class="content-1">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-sm-10 d-flex flex-column text-center gap-1">
<h6>SEND A RESUME</h6>
<h2><strong>To submit your CV please complete the form below.</strong></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-sm-10 d-flex flex-column text-center gap-1">
<div class="bg-white border-radius p-3">
<form action="send-cv-email.php" method="POST" enctype="multipart/form-data">

<fieldset class="d-flex flex-wrap">
<div class="form-group d-flex flex-column w-50">
<input name="firstName" type="text" class="form-control" id="firstName"  value="<?php echo (isset($firstname) ? $firstname : \'\');?>" required>
<label for="firstName">First name <span>*</span></label>
</div>
<div class="form-group d-flex flex-column w-50">
<input name="lastName" type="text" class="form-control" id="lastName" value="<?php echo (isset($lastname) ? $lastname : \'\');?>" required>
<label for="lastName">Last name <span>*</span></label>
</div>
<div class="form-group d-flex flex-column w-50">
<input name="email" type="text" class="form-control" id="email"  value="<?php echo (isset($email) ? $email : \'\');?>" required>
<label for="email">Email <span>*</span></label>
</div>
<div class="form-group d-flex flex-column w-50">
<input name="phoneNumber" type="text" class="form-control" id="phoneNumber" required>
<label for="phoneNumber">Phone number <span>*</span></label>
</div>

<div class="form-group d-flex flex-column w-100">
<textarea name="bio" type="text" class="form-control" id="bio" placeholder=" " required></textarea>
<label for="bio">Tell us about you <span>*</span></label>
</div>

<div class="form-group d-flex flex-column w-100 pt-2">

<!--default html file upload button-->
<input type="file" name="resume" id="resume" style="display: none;"/>
<label for="resume" href="#!" class="btn btn-5"><img src="/static/img/ico-clip.png">&nbsp;<strong>Upload your resume</strong></label>

</div>
<div class="form-group d-flex flex-column w-100">
<button type="submit" class="btn"><strong>Submit</strong></button>
</div>
<?php if (!$adapters) : ?>
<div class="form-group align-items-center d-flex flex-column w-100">
<a href="<?php print $hybridauthConfig[\'callback\'];?>" class="d-flex txt-blue"><img src="/static/img/ico-linkedin-2.svg" class="h-1"> <strong>Connect with Linkedin</strong></a>
</div>
<?php else: ?>
<div class="form-group align-items-center d-flex flex-column w-100">
<a href="<?php print $hybridauthConfig[\'callback\'] . "?logout=true"; ?>" class="d-flex txt-blue"><img src="/static/img/ico-linkedin-2.svg" class="h-1"> <strong>Logout from Linkedin</strong></a>
</div>
<?php endif; ?>
</fieldset>
</form>

</div>
</div>
</div>
</div>
</section>



<div class="h-4"></div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Submit CV',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 18:04:51',
                'updated_at' => '2023-05-30 18:04:51',
            ),
            40 => 
            array (
                'id' => 70,
                'pages_id' => 25,
                'locale' => 'pt',
                'title' => 'Submit CV',
                'html' => '<section class="content-1">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-sm-10 d-flex flex-column text-center gap-1">
<h6>SEND A RESUME</h6>
<h2><strong>To submit your CV please complete the form below.</strong></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-sm-10 d-flex flex-column text-center gap-1">
<div class="bg-white border-radius p-3">
<form action="send-cv-email.php" method="POST" enctype="multipart/form-data">

<fieldset class="d-flex flex-wrap">
<div class="form-group d-flex flex-column w-50">
<input name="firstName" type="text" class="form-control" id="firstName"  value="<?php echo (isset($firstname) ? $firstname : \'\');?>" required>
<label for="firstName">First name <span>*</span></label>
</div>
<div class="form-group d-flex flex-column w-50">
<input name="lastName" type="text" class="form-control" id="lastName" value="<?php echo (isset($lastname) ? $lastname : \'\');?>" required>
<label for="lastName">Last name <span>*</span></label>
</div>
<div class="form-group d-flex flex-column w-50">
<input name="email" type="text" class="form-control" id="email"  value="<?php echo (isset($email) ? $email : \'\');?>" required>
<label for="email">Email <span>*</span></label>
</div>
<div class="form-group d-flex flex-column w-50">
<input name="phoneNumber" type="text" class="form-control" id="phoneNumber" required>
<label for="phoneNumber">Phone number <span>*</span></label>
</div>

<div class="form-group d-flex flex-column w-100">
<textarea name="bio" type="text" class="form-control" id="bio" placeholder=" " required></textarea>
<label for="bio">Tell us about you <span>*</span></label>
</div>

<div class="form-group d-flex flex-column w-100 pt-2">

<!--default html file upload button-->
<input type="file" name="resume" id="resume" style="display: none;"/>
<label for="resume" href="#!" class="btn btn-5"><img src="/static/img/ico-clip.png">&nbsp;<strong>Upload your resume</strong></label>

</div>
<div class="form-group d-flex flex-column w-100">
<button type="submit" class="btn"><strong>Submit</strong></button>
</div>
<?php if (!$adapters) : ?>
<div class="form-group align-items-center d-flex flex-column w-100">
<a href="<?php print $hybridauthConfig[\'callback\'];?>" class="d-flex txt-blue"><img src="/static/img/ico-linkedin-2.svg" class="h-1"> <strong>Connect with Linkedin</strong></a>
</div>
<?php else: ?>
<div class="form-group align-items-center d-flex flex-column w-100">
<a href="<?php print $hybridauthConfig[\'callback\'] . "?logout=true"; ?>" class="d-flex txt-blue"><img src="/static/img/ico-linkedin-2.svg" class="h-1"> <strong>Logout from Linkedin</strong></a>
</div>
<?php endif; ?>
</fieldset>
</form>

</div>
</div>
</div>
</div>
</section>



<div class="h-4"></div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Submit CV',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 18:04:51',
                'updated_at' => '2023-05-30 18:04:51',
            ),
            41 => 
            array (
                'id' => 71,
                'pages_id' => 25,
                'locale' => 'es',
                'title' => 'Submit CV',
                'html' => '<section class="content-1">
<div class="container d-flex flex-column gap-2 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-sm-10 d-flex flex-column text-center gap-1">
<h6>SEND A RESUME</h6>
<h2><strong>To submit your CV please complete the form below.</strong></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-sm-10 d-flex flex-column text-center gap-1">
<div class="bg-white border-radius p-3">
<form action="send-cv-email.php" method="POST" enctype="multipart/form-data">

<fieldset class="d-flex flex-wrap">
<div class="form-group d-flex flex-column w-50">
<input name="firstName" type="text" class="form-control" id="firstName"  value="<?php echo (isset($firstname) ? $firstname : \'\');?>" required>
<label for="firstName">First name <span>*</span></label>
</div>
<div class="form-group d-flex flex-column w-50">
<input name="lastName" type="text" class="form-control" id="lastName" value="<?php echo (isset($lastname) ? $lastname : \'\');?>" required>
<label for="lastName">Last name <span>*</span></label>
</div>
<div class="form-group d-flex flex-column w-50">
<input name="email" type="text" class="form-control" id="email"  value="<?php echo (isset($email) ? $email : \'\');?>" required>
<label for="email">Email <span>*</span></label>
</div>
<div class="form-group d-flex flex-column w-50">
<input name="phoneNumber" type="text" class="form-control" id="phoneNumber" required>
<label for="phoneNumber">Phone number <span>*</span></label>
</div>

<div class="form-group d-flex flex-column w-100">
<textarea name="bio" type="text" class="form-control" id="bio" placeholder=" " required></textarea>
<label for="bio">Tell us about you <span>*</span></label>
</div>

<div class="form-group d-flex flex-column w-100 pt-2">

<!--default html file upload button-->
<input type="file" name="resume" id="resume" style="display: none;"/>
<label for="resume" href="#!" class="btn btn-5"><img src="/static/img/ico-clip.png">&nbsp;<strong>Upload your resume</strong></label>

</div>
<div class="form-group d-flex flex-column w-100">
<button type="submit" class="btn"><strong>Submit</strong></button>
</div>
<?php if (!$adapters) : ?>
<div class="form-group align-items-center d-flex flex-column w-100">
<a href="<?php print $hybridauthConfig[\'callback\'];?>" class="d-flex txt-blue"><img src="/static/img/ico-linkedin-2.svg" class="h-1"> <strong>Connect with Linkedin</strong></a>
</div>
<?php else: ?>
<div class="form-group align-items-center d-flex flex-column w-100">
<a href="<?php print $hybridauthConfig[\'callback\'] . "?logout=true"; ?>" class="d-flex txt-blue"><img src="/static/img/ico-linkedin-2.svg" class="h-1"> <strong>Logout from Linkedin</strong></a>
</div>
<?php endif; ?>
</fieldset>
</form>

</div>
</div>
</div>
</div>
</section>



<div class="h-4"></div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Submit CV',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 18:04:51',
                'updated_at' => '2023-05-30 18:04:51',
            ),
            42 => 
            array (
                'id' => 72,
                'pages_id' => 26,
                'locale' => 'en',
                'title' => 'Thank You',
                'html' => '
<section class="">
<div class="container d-flex flex-column gap-2 text-center pt-4">
<div class="row justify-content-center">
<div class="col-12 col-sm-9 d-flex flex-column gap-1">
<h6>Our team of experts will contact you shortly.</h6>
<h2><strong>Thank you!</strong></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col justify-content-center d-flex">
<a href="index.php" class="btn"><strong>Back</strong></a>
</div>
</div>
</div>
</section>

<br><br><br>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Thank You',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 18:06:46',
                'updated_at' => '2023-05-30 18:06:46',
            ),
            43 => 
            array (
                'id' => 73,
                'pages_id' => 26,
                'locale' => 'pt',
                'title' => 'Thank You',
                'html' => '
<section class="">
<div class="container d-flex flex-column gap-2 text-center pt-4">
<div class="row justify-content-center">
<div class="col-12 col-sm-9 d-flex flex-column gap-1">
<h6>Our team of experts will contact you shortly.</h6>
<h2><strong>Thank you!</strong></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col justify-content-center d-flex">
<a href="index.php" class="btn"><strong>Back</strong></a>
</div>
</div>
</div>
</section>

<br><br><br>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Thank You',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 18:06:46',
                'updated_at' => '2023-05-30 18:06:46',
            ),
            44 => 
            array (
                'id' => 74,
                'pages_id' => 26,
                'locale' => 'es',
                'title' => 'Thank You',
                'html' => '
<section class="">
<div class="container d-flex flex-column gap-2 text-center pt-4">
<div class="row justify-content-center">
<div class="col-12 col-sm-9 d-flex flex-column gap-1">
<h6>Our team of experts will contact you shortly.</h6>
<h2><strong>Thank you!</strong></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col justify-content-center d-flex">
<a href="index.php" class="btn"><strong>Back</strong></a>
</div>
</div>
</div>
</section>

<br><br><br>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Thank You',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 18:06:46',
                'updated_at' => '2023-05-30 18:06:46',
            ),
            45 => 
            array (
                'id' => 75,
                'pages_id' => 27,
                'locale' => 'en',
                'title' => 'Opt in',
                'html' => '<section class="">
<div class="container text-center pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-sm-10 d-flex flex-column gap-1">
<h6>Questions? We\'ve got answers.</h6>
<h2><strong>The world\'s largest companies already trust FacilitaPay\'s payment solutions.</strong></h2>
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

<?php if($_GET[\'msg\']){ ?>
<div id="message" class="row" style="margin:auto;">
<div class="col-12 text-center">
<h5><?php echo $_GET[\'msg\']; ?></h5>
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
',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Opt in',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 18:08:11',
                'updated_at' => '2023-05-30 18:08:11',
            ),
            46 => 
            array (
                'id' => 76,
                'pages_id' => 27,
                'locale' => 'pt',
                'title' => 'Opt in',
                'html' => '<section class="">
<div class="container text-center pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-sm-10 d-flex flex-column gap-1">
<h6>Questions? We\'ve got answers.</h6>
<h2><strong>The world\'s largest companies already trust FacilitaPay\'s payment solutions.</strong></h2>
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

<?php if($_GET[\'msg\']){ ?>
<div id="message" class="row" style="margin:auto;">
<div class="col-12 text-center">
<h5><?php echo $_GET[\'msg\']; ?></h5>
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
',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Opt in',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 18:08:11',
                'updated_at' => '2023-05-30 18:08:11',
            ),
            47 => 
            array (
                'id' => 77,
                'pages_id' => 27,
                'locale' => 'es',
                'title' => 'Opt in',
                'html' => '<section class="">
<div class="container text-center pb-4 pt-4">
<div class="row justify-content-center">
<div class="col-12 col-sm-10 d-flex flex-column gap-1">
<h6>Questions? We\'ve got answers.</h6>
<h2><strong>The world\'s largest companies already trust FacilitaPay\'s payment solutions.</strong></h2>
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

<?php if($_GET[\'msg\']){ ?>
<div id="message" class="row" style="margin:auto;">
<div class="col-12 text-center">
<h5><?php echo $_GET[\'msg\']; ?></h5>
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
',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Opt in',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-05-30 18:08:11',
                'updated_at' => '2023-05-30 18:08:11',
            ),
            48 => 
            array (
                'id' => 78,
                'pages_id' => 28,
                'locale' => 'en',
                'title' => 'Compliance',
                'html' => '
<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-2 pt-4 text-center">
<div class="row justify-content-center">
<div class="col-12 col-lg-10 gap-1">
<h6>Compliance</h6>
<h2><strong>FacilitaPay Compliance Program.</strong></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-10 txt-blue">
<p>The FacilitaPay Group permanently assumes an anti-corruption stance, as it seeks to develop its activities in full compliance not only with Brazilian legislation, but with that of each jurisdiction in which it effectively provides services.</p>
<br>
<p>Always focusing on how to conduct corporate relationships that respect society, local economic systems, the environment and supporting the development of increasingly advanced methods of money transfer and payment solutions. FacilitaPay encourages people to work and celebrate their individual skills, respecting their diversity and aiming to build an increasingly practical reality in payments for future generations.</p>
<br>
<p>In this way, we strive to produce, maintain, publish and apply Compliance protocols, with specific policies for our Code of Conduct, Data Privacy Policy, Cyber Security Policy, Anti-Bribery and Corruption Policy, LGPD Applicability Manual for Suppliers, Anti-Money Laundering and Terrorism Financing Policies, Complaint Handling Policy - referring to the Complaint Channel already structured on our website.</p>
<br>
<p>You can find them available below in English, Brazilian Portuguese and Spanish, depending on the version of our website used to access this page.</p>
</div>
</div>
</div>
</section>

<section class="bullets-1 bg-white animatedcards">
<div class="container pt-4">
<div class="row row-gap-2">
<a href="compliance/Code%20of%20Conduct%20FacilitaPay%202023.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5V78.6c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8V454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5V83.8c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11V456c0 11.4 11.7 19.3 22.4 15.5z"/></svg>
<h5><strong>Code of Conduct</strong></h5>
</a>
<a href="compliance/Privacy%20Policy.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0zm0 66.8V444.8C394 378 431.1 230.1 432 141.4L256 66.8l0 0z"/></svg>
<h5><strong>Data Privacy Policy</strong></h5>
</a>
<a href="compliance/LGPD%20Applicability.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M160 96a96 96 0 1 1 192 0A96 96 0 1 1 160 96zm80 152V512l-48.4-24.2c-20.9-10.4-43.5-17-66.8-19.3l-96-9.6C12.5 457.2 0 443.5 0 427V224c0-17.7 14.3-32 32-32H62.3c63.6 0 125.6 19.6 177.7 56zm32 264V248c52.1-36.4 114.1-56 177.7-56H480c17.7 0 32 14.3 32 32V427c0 16.4-12.5 30.2-28.8 31.8l-96 9.6c-23.2 2.3-45.9 8.9-66.8 19.3L272 512z"/></svg>
<h5><strong>LGPD Applicability Manual</strong></h5>
</a>
<a href="compliance/AMLFT%20Policy.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg  width="60px" style="color:#25DBBB; fill: #25DBBB;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M96 96V320c0 35.3 28.7 64 64 64H576c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160c-35.3 0-64 28.7-64 64zm64 160c35.3 0 64 28.7 64 64H160V256zM224 96c0 35.3-28.7 64-64 64V96h64zM576 256v64H512c0-35.3 28.7-64 64-64zM512 96h64v64c-35.3 0-64-28.7-64-64zM288 208a80 80 0 1 1 160 0 80 80 0 1 1 -160 0zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V360c0 66.3 53.7 120 120 120H520c13.3 0 24-10.7 24-24s-10.7-24-24-24H120c-39.8 0-72-32.2-72-72V120z"/></svg>
<h5><strong>Policies Against Money Laundering and Financing of Terrorism</strong></h5>
</a>
<a href="compliance/Cyber%20Security%20Policy.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v47l-92.8 37.1c-21.3 8.5-35.2 29.1-35.2 52c0 56.6 18.9 148 94.2 208.3c-9 4.8-19.3 7.6-30.2 7.6H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zm39.1 97.7c5.7-2.3 12.1-2.3 17.8 0l120 48C570 277.4 576 286.2 576 296c0 63.3-25.9 168.8-134.8 214.2c-5.9 2.5-12.6 2.5-18.5 0C313.9 464.8 288 359.3 288 296c0-9.8 6-18.6 15.1-22.3l120-48zM527.4 312L432 273.8V461.7c68.2-33 91.5-99 95.4-149.7z"/></svg>
<h5><strong>Cybersecurity Policy</strong></h5>
</a>
<a href="compliance/Anti%20Corruption%20Policy.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M320 96H192L144.6 24.9C137.5 14.2 145.1 0 157.9 0H354.1c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128H320c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96H96c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4l0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84 88c0-11-9-20-20-20s-20 9-20 20v14c-7.6 1.7-15.2 4.4-22.2 8.5c-13.9 8.3-25.9 22.8-25.8 43.9c.1 20.3 12 33.1 24.7 40.7c11 6.6 24.7 10.8 35.6 14l1.7 .5c12.6 3.8 21.8 6.8 28 10.7c5.1 3.2 5.8 5.4 5.9 8.2c.1 5-1.8 8-5.9 10.5c-5 3.1-12.9 5-21.4 4.7c-11.1-.4-21.5-3.9-35.1-8.5c-2.3-.8-4.7-1.6-7.2-2.4c-10.5-3.5-21.8 2.2-25.3 12.6s2.2 21.8 12.6 25.3c1.9 .6 4 1.3 6.1 2.1l0 0 0 0c8.3 2.9 17.9 6.2 28.2 8.4V424c0 11 9 20 20 20s20-9 20-20V410.2c8-1.7 16-4.5 23.2-9c14.3-8.9 25.1-24.1 24.8-45c-.3-20.3-11.7-33.4-24.6-41.6c-11.5-7.2-25.9-11.6-37.1-15l0 0-.7-.2c-12.8-3.9-21.9-6.7-28.3-10.5c-5.2-3.1-5.3-4.9-5.3-6.7c0-3.7 1.4-6.5 6.2-9.3c5.4-3.2 13.6-5.1 21.5-5c9.6 .1 20.2 2.2 31.2 5.2c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-6.5-1.7-13.7-3.4-21.1-4.7V216z"/></svg>
<h5><strong>Anti-Bribery and Corruption Policy</strong></h5>
</a>
<a href="compliance/Report%20Handling%20Policy.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM80 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm16 96H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm0 32v64H288V256H96zM240 416h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
<h5><strong>Report Handling Policy</strong></h5>
</a>
<a href="https://forms.gle/ruvJ65yKNyVAgWUbA" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 48C141.1 48 48 141.1 48 256v40c0 13.3-10.7 24-24 24s-24-10.7-24-24V256C0 114.6 114.6 0 256 0S512 114.6 512 256V400.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24H240c-26.5 0-48-21.5-48-48s21.5-48 48-48h32c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40V256c0-114.9-93.1-208-208-208zM144 208h16c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H144c-35.3 0-64-28.7-64-64V272c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64v48c0 35.3-28.7 64-64 64H352c-17.7 0-32-14.3-32-32V240c0-17.7 14.3-32 32-32h16z"/></svg>
<h5><strong>Access to our anonymous reporting channel</strong></h5>
</a>

</div>
</div>
</section>


<div class="h-4 bg-white"></div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Compliance',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-06-01 18:41:52',
                'updated_at' => '2023-06-01 18:41:52',
            ),
            49 => 
            array (
                'id' => 79,
                'pages_id' => 28,
                'locale' => 'pt',
                'title' => 'Compliance',
                'html' => '
<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-2 pt-4 text-center">
<div class="row justify-content-center">
<div class="col-12 col-lg-10 gap-1">
<h6>Compliance</h6>
<h2><strong>FacilitaPay Compliance Program.</strong></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-10 txt-blue">
<p>The FacilitaPay Group permanently assumes an anti-corruption stance, as it seeks to develop its activities in full compliance not only with Brazilian legislation, but with that of each jurisdiction in which it effectively provides services.</p>
<br>
<p>Always focusing on how to conduct corporate relationships that respect society, local economic systems, the environment and supporting the development of increasingly advanced methods of money transfer and payment solutions. FacilitaPay encourages people to work and celebrate their individual skills, respecting their diversity and aiming to build an increasingly practical reality in payments for future generations.</p>
<br>
<p>In this way, we strive to produce, maintain, publish and apply Compliance protocols, with specific policies for our Code of Conduct, Data Privacy Policy, Cyber Security Policy, Anti-Bribery and Corruption Policy, LGPD Applicability Manual for Suppliers, Anti-Money Laundering and Terrorism Financing Policies, Complaint Handling Policy - referring to the Complaint Channel already structured on our website.</p>
<br>
<p>You can find them available below in English, Brazilian Portuguese and Spanish, depending on the version of our website used to access this page.</p>
</div>
</div>
</div>
</section>

<section class="bullets-1 bg-white animatedcards">
<div class="container pt-4">
<div class="row row-gap-2">
<a href="compliance/Code%20of%20Conduct%20FacilitaPay%202023.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5V78.6c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8V454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5V83.8c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11V456c0 11.4 11.7 19.3 22.4 15.5z"/></svg>
<h5><strong>Code of Conduct</strong></h5>
</a>
<a href="compliance/Privacy%20Policy.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0zm0 66.8V444.8C394 378 431.1 230.1 432 141.4L256 66.8l0 0z"/></svg>
<h5><strong>Data Privacy Policy</strong></h5>
</a>
<a href="compliance/LGPD%20Applicability.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M160 96a96 96 0 1 1 192 0A96 96 0 1 1 160 96zm80 152V512l-48.4-24.2c-20.9-10.4-43.5-17-66.8-19.3l-96-9.6C12.5 457.2 0 443.5 0 427V224c0-17.7 14.3-32 32-32H62.3c63.6 0 125.6 19.6 177.7 56zm32 264V248c52.1-36.4 114.1-56 177.7-56H480c17.7 0 32 14.3 32 32V427c0 16.4-12.5 30.2-28.8 31.8l-96 9.6c-23.2 2.3-45.9 8.9-66.8 19.3L272 512z"/></svg>
<h5><strong>LGPD Applicability Manual</strong></h5>
</a>
<a href="compliance/AMLFT%20Policy.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg  width="60px" style="color:#25DBBB; fill: #25DBBB;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M96 96V320c0 35.3 28.7 64 64 64H576c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160c-35.3 0-64 28.7-64 64zm64 160c35.3 0 64 28.7 64 64H160V256zM224 96c0 35.3-28.7 64-64 64V96h64zM576 256v64H512c0-35.3 28.7-64 64-64zM512 96h64v64c-35.3 0-64-28.7-64-64zM288 208a80 80 0 1 1 160 0 80 80 0 1 1 -160 0zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V360c0 66.3 53.7 120 120 120H520c13.3 0 24-10.7 24-24s-10.7-24-24-24H120c-39.8 0-72-32.2-72-72V120z"/></svg>
<h5><strong>Policies Against Money Laundering and Financing of Terrorism</strong></h5>
</a>
<a href="compliance/Cyber%20Security%20Policy.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v47l-92.8 37.1c-21.3 8.5-35.2 29.1-35.2 52c0 56.6 18.9 148 94.2 208.3c-9 4.8-19.3 7.6-30.2 7.6H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zm39.1 97.7c5.7-2.3 12.1-2.3 17.8 0l120 48C570 277.4 576 286.2 576 296c0 63.3-25.9 168.8-134.8 214.2c-5.9 2.5-12.6 2.5-18.5 0C313.9 464.8 288 359.3 288 296c0-9.8 6-18.6 15.1-22.3l120-48zM527.4 312L432 273.8V461.7c68.2-33 91.5-99 95.4-149.7z"/></svg>
<h5><strong>Cybersecurity Policy</strong></h5>
</a>
<a href="compliance/Anti%20Corruption%20Policy.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M320 96H192L144.6 24.9C137.5 14.2 145.1 0 157.9 0H354.1c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128H320c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96H96c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4l0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84 88c0-11-9-20-20-20s-20 9-20 20v14c-7.6 1.7-15.2 4.4-22.2 8.5c-13.9 8.3-25.9 22.8-25.8 43.9c.1 20.3 12 33.1 24.7 40.7c11 6.6 24.7 10.8 35.6 14l1.7 .5c12.6 3.8 21.8 6.8 28 10.7c5.1 3.2 5.8 5.4 5.9 8.2c.1 5-1.8 8-5.9 10.5c-5 3.1-12.9 5-21.4 4.7c-11.1-.4-21.5-3.9-35.1-8.5c-2.3-.8-4.7-1.6-7.2-2.4c-10.5-3.5-21.8 2.2-25.3 12.6s2.2 21.8 12.6 25.3c1.9 .6 4 1.3 6.1 2.1l0 0 0 0c8.3 2.9 17.9 6.2 28.2 8.4V424c0 11 9 20 20 20s20-9 20-20V410.2c8-1.7 16-4.5 23.2-9c14.3-8.9 25.1-24.1 24.8-45c-.3-20.3-11.7-33.4-24.6-41.6c-11.5-7.2-25.9-11.6-37.1-15l0 0-.7-.2c-12.8-3.9-21.9-6.7-28.3-10.5c-5.2-3.1-5.3-4.9-5.3-6.7c0-3.7 1.4-6.5 6.2-9.3c5.4-3.2 13.6-5.1 21.5-5c9.6 .1 20.2 2.2 31.2 5.2c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-6.5-1.7-13.7-3.4-21.1-4.7V216z"/></svg>
<h5><strong>Anti-Bribery and Corruption Policy</strong></h5>
</a>
<a href="compliance/Report%20Handling%20Policy.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM80 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm16 96H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm0 32v64H288V256H96zM240 416h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
<h5><strong>Report Handling Policy</strong></h5>
</a>
<a href="https://forms.gle/ruvJ65yKNyVAgWUbA" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 48C141.1 48 48 141.1 48 256v40c0 13.3-10.7 24-24 24s-24-10.7-24-24V256C0 114.6 114.6 0 256 0S512 114.6 512 256V400.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24H240c-26.5 0-48-21.5-48-48s21.5-48 48-48h32c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40V256c0-114.9-93.1-208-208-208zM144 208h16c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H144c-35.3 0-64-28.7-64-64V272c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64v48c0 35.3-28.7 64-64 64H352c-17.7 0-32-14.3-32-32V240c0-17.7 14.3-32 32-32h16z"/></svg>
<h5><strong>Access to our anonymous reporting channel</strong></h5>
</a>

</div>
</div>
</section>


<div class="h-4 bg-white"></div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Compliance',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-06-01 18:41:52',
                'updated_at' => '2023-06-01 18:41:52',
            ),
            50 => 
            array (
                'id' => 80,
                'pages_id' => 28,
                'locale' => 'es',
                'title' => '<body class="home">',
                'html' => '
<section class="content-1 bg-white">
<div class="container d-flex flex-column gap-2 pt-4 text-center">
<div class="row justify-content-center">
<div class="col-12 col-lg-10 gap-1">
<h6>Compliance</h6>
<h2><strong>FacilitaPay Compliance Program.</strong></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-lg-10 txt-blue">
<p>The FacilitaPay Group permanently assumes an anti-corruption stance, as it seeks to develop its activities in full compliance not only with Brazilian legislation, but with that of each jurisdiction in which it effectively provides services.</p>
<br>
<p>Always focusing on how to conduct corporate relationships that respect society, local economic systems, the environment and supporting the development of increasingly advanced methods of money transfer and payment solutions. FacilitaPay encourages people to work and celebrate their individual skills, respecting their diversity and aiming to build an increasingly practical reality in payments for future generations.</p>
<br>
<p>In this way, we strive to produce, maintain, publish and apply Compliance protocols, with specific policies for our Code of Conduct, Data Privacy Policy, Cyber Security Policy, Anti-Bribery and Corruption Policy, LGPD Applicability Manual for Suppliers, Anti-Money Laundering and Terrorism Financing Policies, Complaint Handling Policy - referring to the Complaint Channel already structured on our website.</p>
<br>
<p>You can find them available below in English, Brazilian Portuguese and Spanish, depending on the version of our website used to access this page.</p>
</div>
</div>
</div>
</section>

<section class="bullets-1 bg-white animatedcards">
<div class="container pt-4">
<div class="row row-gap-2">
<a href="compliance/Code%20of%20Conduct%20FacilitaPay%202023.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5V78.6c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8V454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5V83.8c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11V456c0 11.4 11.7 19.3 22.4 15.5z"/></svg>
<h5><strong>Code of Conduct</strong></h5>
</a>
<a href="compliance/Privacy%20Policy.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0zm0 66.8V444.8C394 378 431.1 230.1 432 141.4L256 66.8l0 0z"/></svg>
<h5><strong>Data Privacy Policy</strong></h5>
</a>
<a href="compliance/LGPD%20Applicability.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M160 96a96 96 0 1 1 192 0A96 96 0 1 1 160 96zm80 152V512l-48.4-24.2c-20.9-10.4-43.5-17-66.8-19.3l-96-9.6C12.5 457.2 0 443.5 0 427V224c0-17.7 14.3-32 32-32H62.3c63.6 0 125.6 19.6 177.7 56zm32 264V248c52.1-36.4 114.1-56 177.7-56H480c17.7 0 32 14.3 32 32V427c0 16.4-12.5 30.2-28.8 31.8l-96 9.6c-23.2 2.3-45.9 8.9-66.8 19.3L272 512z"/></svg>
<h5><strong>LGPD Applicability Manual</strong></h5>
</a>
<a href="compliance/AMLFT%20Policy.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg  width="60px" style="color:#25DBBB; fill: #25DBBB;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M96 96V320c0 35.3 28.7 64 64 64H576c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160c-35.3 0-64 28.7-64 64zm64 160c35.3 0 64 28.7 64 64H160V256zM224 96c0 35.3-28.7 64-64 64V96h64zM576 256v64H512c0-35.3 28.7-64 64-64zM512 96h64v64c-35.3 0-64-28.7-64-64zM288 208a80 80 0 1 1 160 0 80 80 0 1 1 -160 0zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V360c0 66.3 53.7 120 120 120H520c13.3 0 24-10.7 24-24s-10.7-24-24-24H120c-39.8 0-72-32.2-72-72V120z"/></svg>
<h5><strong>Policies Against Money Laundering and Financing of Terrorism</strong></h5>
</a>
<a href="compliance/Cyber%20Security%20Policy.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v47l-92.8 37.1c-21.3 8.5-35.2 29.1-35.2 52c0 56.6 18.9 148 94.2 208.3c-9 4.8-19.3 7.6-30.2 7.6H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zm39.1 97.7c5.7-2.3 12.1-2.3 17.8 0l120 48C570 277.4 576 286.2 576 296c0 63.3-25.9 168.8-134.8 214.2c-5.9 2.5-12.6 2.5-18.5 0C313.9 464.8 288 359.3 288 296c0-9.8 6-18.6 15.1-22.3l120-48zM527.4 312L432 273.8V461.7c68.2-33 91.5-99 95.4-149.7z"/></svg>
<h5><strong>Cybersecurity Policy</strong></h5>
</a>
<a href="compliance/Anti%20Corruption%20Policy.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M320 96H192L144.6 24.9C137.5 14.2 145.1 0 157.9 0H354.1c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128H320c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96H96c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4l0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84 88c0-11-9-20-20-20s-20 9-20 20v14c-7.6 1.7-15.2 4.4-22.2 8.5c-13.9 8.3-25.9 22.8-25.8 43.9c.1 20.3 12 33.1 24.7 40.7c11 6.6 24.7 10.8 35.6 14l1.7 .5c12.6 3.8 21.8 6.8 28 10.7c5.1 3.2 5.8 5.4 5.9 8.2c.1 5-1.8 8-5.9 10.5c-5 3.1-12.9 5-21.4 4.7c-11.1-.4-21.5-3.9-35.1-8.5c-2.3-.8-4.7-1.6-7.2-2.4c-10.5-3.5-21.8 2.2-25.3 12.6s2.2 21.8 12.6 25.3c1.9 .6 4 1.3 6.1 2.1l0 0 0 0c8.3 2.9 17.9 6.2 28.2 8.4V424c0 11 9 20 20 20s20-9 20-20V410.2c8-1.7 16-4.5 23.2-9c14.3-8.9 25.1-24.1 24.8-45c-.3-20.3-11.7-33.4-24.6-41.6c-11.5-7.2-25.9-11.6-37.1-15l0 0-.7-.2c-12.8-3.9-21.9-6.7-28.3-10.5c-5.2-3.1-5.3-4.9-5.3-6.7c0-3.7 1.4-6.5 6.2-9.3c5.4-3.2 13.6-5.1 21.5-5c9.6 .1 20.2 2.2 31.2 5.2c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-6.5-1.7-13.7-3.4-21.1-4.7V216z"/></svg>
<h5><strong>Anti-Bribery and Corruption Policy</strong></h5>
</a>
<a href="compliance/Report%20Handling%20Policy.pdf" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM80 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm16 96H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm0 32v64H288V256H96zM240 416h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
<h5><strong>Report Handling Policy</strong></h5>
</a>
<a href="https://forms.gle/ruvJ65yKNyVAgWUbA" target="_blank" class="col-12 col-md-4 col-lg-4 d-flex flex-column gap-1 animatedcard" style="align-items: center; text-decoration: none; text-align: center; margin-top:40px">
<svg width="60px" style="color:#25DBBB; fill: #25DBBB;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 48C141.1 48 48 141.1 48 256v40c0 13.3-10.7 24-24 24s-24-10.7-24-24V256C0 114.6 114.6 0 256 0S512 114.6 512 256V400.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24H240c-26.5 0-48-21.5-48-48s21.5-48 48-48h32c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40V256c0-114.9-93.1-208-208-208zM144 208h16c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H144c-35.3 0-64-28.7-64-64V272c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64v48c0 35.3-28.7 64-64 64H352c-17.7 0-32-14.3-32-32V240c0-17.7 14.3-32 32-32h16z"/></svg>
<h5><strong>Access to our anonymous reporting channel</strong></h5>
</a>

</div>
</div>
</section>


<div class="h-4 bg-white"></div>',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}',
                'metatitle' => 'Compliance',
                'slug' => NULL,
                'metadescription' => NULL,
                'created_at' => '2023-06-01 18:41:52',
                'updated_at' => '2023-06-01 18:41:52',
            ),
        ));
        
        
    }
}