<!doctype html>
    <html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
    <head>

        <!-- META -->
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>

        <meta color="#f0f0f0" >
        <meta name="theme-color" content="#f0f0f0" />
        <meta name="apple-mobile-web-app-status-bar-style" content="#f0f0f0">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

        <link rel="icon" type="image/png" href="img/favicon.png">

        <!-- TITLE -->
        <title>FacilitaPay</title>

        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700;800&family=Source+Code+Pro:wght@800&display=swap" rel="stylesheet">

        <!-- ICONS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <!-- THEME -->
        <link rel="stylesheet" href="https://facilitapay.com/css/theme.css">

        <!-- RESPONSIVE -->
        <link rel="stylesheet" href="https://facilitapay.com/css/responsive.css">

        <!-- SLIDER -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Gsap-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollToPlugin.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/CustomEase.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/EasePack.min.js"></script>

        <style>
            p, h1, h2, h3, h4, h5, h6, img, svg{
                opacity: 0;
            }
            .ignoreanimation{
                opacity: 1;
            }
        </style>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-KRRQPD5');</script>
        <!-- End Google Tag Manager -->

    </head>


    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KRRQPD5"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <section class="nav">
        <div class="container-fluid pb-1 pt-1">
            <div class="row align-items-center justify-content-between">
                <div class="col-5 col-lg-2 d-flex flex-column align-items-start">
                    <a href="index.php"><img src="https://facilitapay.com/img/logo-facilitapay.svg" class="h-4 img-fluid ignoreanimation"></a>
                </div>
                <div class="col-7 align-items-center justify-content-center">
                    <div class="menu open-1 responsive d-flex flex-column align-items-center">
                        <a href="#!" class="toggle toggle-1 d-flex d-lg-none"><span>Toggle menu</span></a>
                        <ul class="align-center d-flex flex-row gap-2">
                            <a href="#!" class="toggle toggle-1 d-flex d-lg-none"><span>Toggle menu</span></a>
                            <li class="dropdown">
                                <a href="#!" class="drop-item">Solutions</a>
                                <div class="submenu">
                                    <ul>
                                        <li>
                                            <a href="/payins">Payins</a>
                                        </li>
                                        <li>
                                            <a href="/payouts">Payouts</a>
                                        </li>
                                        <li>
                                            <a href="/pix-global">PIX Global</a>
                                        </li>
                                        <li>
                                            <a href="/payment-methods">Payment Methods</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#!" class="drop-item">Markets</a>
                                <div class="submenu">
                                    <ul>
                                        <li>
                                            <a href="/industries" class="justify-center d-inline-flex gap-1"><img src="img/ico-industries.svg" class="h-1"> <span class="d-inline-flex align-items-center">Industries</span></a>
                                        </li>
                                        <li>
                                            <a href="/markets-brazil" class="justify-center d-inline-flex gap-1"><img src="img/ico-brazil.svg" class="h-1"> <span class="d-inline-flex align-items-center">Brazil</span></a>
                                        </li>
                                        <li>
                                            <a href="/markets-colombia" class="justify-center d-inline-flex gap-1"><img src="img/ico-colombia.svg" class="h-1"> <span class="d-inline-flex align-items-center">Colombia</span></a>
                                        </li>
                                        <li>
                                            <a href="/markets-mexico" class="justify-center d-inline-flex gap-1"><img src="img/ico-mexico.svg" class="h-1"> <span class="d-inline-flex align-items-center">Mexico</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="new">
                                <a href="/blockchain">Blockchain</a>
                            </li>
                            <li class="dropdown">
                                <a href="#!" class="drop-item">Company</a>
                                <div class="submenu">
                                    <ul>
                                        <li>
                                            <a href="/about-us">About us</a>
                                        </li>
                                        <li>
                                            <a href="/contact">Contact us</a>
                                        </li>
                                        <!--                                    <li>-->
                                        <!--                                        <a href="blog.php">Blog</a>-->
                                        <!--                                    </li>-->
                                        <li>
                                            <a href="/careers">Careers</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <ul class="align-center d-flex flex-row gap-1">
                        <li>
                            <a href="optin" target="_blank" class="btn d-inline-flex"><strong>Get in touch</strong></a>
                        </li>
                        <li>
                            <a href="https://portal.facilitapay.com/" target="_blank" class="btn btn-7 d-inline-flex login"><strong class="d-none d-sm-flex">Login</strong><img src="img/ico-user.svg" class="h-1 d-flex d-sm-none"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
