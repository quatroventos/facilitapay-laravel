<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="{{asset('frontend/favicon.png')}}">

    <meta name="author" content="Quatro Ventos">

    <title>{{$title}}</title>

    <!-- google -->
    <meta name="description" content="{{$description}}"/>
    <link rel="canonical" href="{{$canonical}}" />

    <!-- facebook -->
    <meta property="og:locale" content="{{$locale}}" />
    <meta property="og:type" content="{{$content}}" />
    <meta property="og:title" content="{{$title}}" />
    <meta property="og:description" content="{{$description}}" />
    <meta property="og:url" content="{{$url}}" />
    <meta property="og:site_name" content="{{$websitename}}" />
    <meta property="og:image" content="{{$image}}" />
    <meta property="og:image:secure_url" content="{{$image}}" />
    <meta property="og:image:width" content="{{$imgw}}" />
    <meta property="og:image:height" content="{{$imgh}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- css -->
    <link rel="stylesheet" href="{{asset('static/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/theme.css')}}">

    <link rel="icon" type="image/png" href="{{asset('static/img/favicon.png')}}">

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
    <link rel="stylesheet" href="{{asset('static/css/theme.css')}}">

    <!-- RESPONSIVE -->
    <link rel="stylesheet" href="{{asset('static/css/responsive.css')}}">

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


<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KRRQPD5"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<section class="nav">
    <div class="container-fluid pb-1 pt-1">
        <div class="row align-items-center justify-content-between">
            <div class="col-5 col-lg-2 d-flex flex-column align-items-start">
                <a href="/"><img src="{{asset('static/img/logo-facilitapay.svg')}}" class="h-4 img-fluid ignoreanimation"></a>
            </div>
            <div class="col-7 align-items-center justify-content-center">
                <div class="menu open-1 responsive d-flex flex-column align-items-center">
                    <a href="#!" class="toggle toggle-1 d-flex d-lg-none"><span>Toggle menu</span></a>
                    <ul class="align-center d-flex flex-row gap-2">
                        <a href="#!" class="toggle toggle-1 d-flex d-lg-none"><span>Toggle menu</span></a>
                        <li class="dropdown">
                            <a href="#!" class="drop-item">{{trans('navigation.solutions')}}</a>
                            <div class="submenu">
                                <ul>
                                    <li>
                                        <a href="payins">{{trans('navigation.payins')}}</a>
                                    </li>
                                    <li>
                                        <a href="payouts">{{trans('navigation.payouts')}}</a>
                                    </li>
                                    <li>
                                        <a href="pix-global">{{trans('navigation.pix_global')}}</a>
                                    </li>
                                    <li>
                                        <a href="payment-methods">{{trans('navigation.payment_methods')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#!" class="drop-item">{{trans('navigation.markets')}}</a>
                            <div class="submenu">
                                <ul>
                                    <li>
                                        <a href="industries" class="justify-center d-inline-flex gap-1"><img src="{{asset('static/img/ico-industries.svg')}}" class="h-1"> <span class="d-inline-flex align-items-center">{{trans('navigation.industries')}}</span></a>
                                    </li>
                                    <li>
                                        <a href="markets-brazil" class="justify-center d-inline-flex gap-1"><img src="{{asset('static/img/ico-brazil.svg')}}" class="h-1"> <span class="d-inline-flex align-items-center">{{trans('navigation.brazil')}}</span></a>
                                    </li>
                                    <li>
                                        <a href="markets-colombia" class="justify-center d-inline-flex gap-1"><img src="{{asset('static/img/ico-colombia.svg')}}" class="h-1"> <span class="d-inline-flex align-items-center">Colombia</span></a>
                                    </li>
                                    <li>
                                        <a href="markets-mexico" class="justify-center d-inline-flex gap-1"><img src="{{asset('static/img/ico-mexico.svg')}}" class="h-1"> <span class="d-inline-flex align-items-center">Mexico</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="new">
                            <a href="blockchain">{{trans('navigation.blockchain')}}</a>
                        </li>
                        <li class="dropdown">
                            <a href="#!" class="drop-item">{{trans('navigation.company')}}</a>
                            <div class="submenu">
                                <ul>
                                    <li>
                                        <a href="about-us">{{trans('navigation.about_us')}}</a>
                                    </li>
                                    <li>
                                        <a href="contact">{{trans('navigation.contact_us')}}</a>
                                    </li>
                                    <!--                                    <li>-->
                                    <!--                                        <a href="blog.php">Blog</a>-->
                                    <!--                                    </li>-->
                                    <li>
                                        <a href="careers">{{trans('navigation.careers')}}</a>
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
                        <a href="https://portal.facilitapay.com/" target="_blank" class="btn btn-7 d-inline-flex login"><strong class="d-none d-sm-flex">Login</strong><img src="{{asset('static/img/ico-user.svg')}}" class="h-1 d-flex d-sm-none"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


 @yield('content')


<footer>
    <div class="container d-flex flex-column gap-3 pb-4 pt-4">
        <div class="row align-items-center">
            <div class="col-7 col-lg-2">
                <a href="index">
                    <img src="{{asset('static/img/logo-facilitapay-negative.svg')}}" class="h-4 img-fluid">
                </a>
            </div>
            <div class="col-5 col-lg-10 d-flex align-items-center">
                <div class="menu open-2 responsive">
                    <a href="#!" class="toggle toggle-2 d-flex d-lg-none"><span>Toggle menu</span></a>
                    <ul class="align-center justify-content-end d-flex flex-row column-gap-1 sub">
                        <a href="#!" class="toggle toggle-2 d-flex d-lg-none"><span>Toggle menu</span></a>
                        <li class="dropdown">
                            <a href="#!" class="drop-item"><strong>{{ trans('navigation.solutions') }}</strong></a>
                            <div class="submenu">
                                <ul>
                                    <li>
                                        <a href="payins"><strong>{{trans('navigation.payins')}}</strong></a>
                                    </li>
                                    <li>
                                        <a href="payouts"><strong>{{trans('navigation.payouts')}}</strong></a>
                                    </li>
                                    <li>
                                        <a href="pix-global"><strong>{{trans('navigation.pix_global')}}</strong></a>
                                    </li>
                                    <li>
                                        <a href="payment-methods"><strong>{{trans('navigation.payment_methods')}}</strong></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#!" class="drop-item"><strong>{{trans('navigation.markets')}}</strong></a>
                            <div class="submenu">
                                <ul>
                                    <li>
                                        <a href="industries" class="justify-center d-inline-flex gap-1"><img src="{{asset('static/img/ico-industries.svg')}}" class="h-1"> <span class="d-inline-flex align-items-center">{{trans('navigation.industries')}}</span></a>
                                    </li>
                                    <li>
                                        <a href="markets-brazil" class="justify-center d-inline-flex gap-1"><img src="{{asset('static/img/ico-brazil.svg')}}" class="h-1"> <span class="d-inline-flex align-items-center">{{trans('navigation.brazil')}}</span></a>
                                    </li>
                                    <li>
                                        <a href="markets-colombia" class="justify-center d-inline-flex gap-1"><img src="{{asset('static/img/ico-colombia.svg')}}" class="h-1"> <span class="d-inline-flex align-items-center">Colombia</span></a>
                                    </li>
                                    <li>
                                        <a href="markets-mexico" class="justify-center d-inline-flex gap-1"><img src="{{asset('static/img/ico-mexico.svg')}}" class="h-1"> <span class="d-inline-flex align-items-center">Mexico</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="new">
                            <a href="blockchain"><strong>{{trans('navigation.blockchain')}}</strong></a>
                        </li>
                        <li class="dropdown">
                            <a href="#!" class="drop-item"><strong>{{trans('navigation.company')}}</strong></a>
                            <div class="submenu">
                                <ul>
                                    <li>
                                        <a href="about-us"><strong>{{trans('navigation.about_us')}}</strong></a>
                                    </li>
                                    <li>
                                        <a href="contact"><strong>{{trans('navigation.contact_us')}}</strong></a>
                                    </li>
                                    <li>
                                        <a href="blog"><strong>{{trans('navigation.blog')}}</strong></a>
                                    </li>
                                    <li>
                                        <a href="careers"><strong>{{trans('navigation.careers')}}</strong></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="compliance"><strong>{{trans('navigation.compliance')}}</strong></a>
                        </li>
                        <li>
                            <a href="https://forms.gle/ruvJ65yKNyVAgWUbA" target="_blank"><strong>{{trans('navigation.reporting_chanel')}}</strong></a>
                        </li>
                        <li>
                            <a href="https://sandbox-portal.facilitapay.com/#/docs" target="_blank"><strong>{{trans('navigation.api_docs')}}</strong></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row d-flex row-gap-2">
            <div class="col-12 col-md-6 col-lg-3">
                <img src="{{asset('static/img/ico-usa.svg')}}" class="h-2">
                <div class="d-flex flex-column gap-1">
                    <h6><strong>FACILITAPAY US LLC</strong></h6>
                    <p class="sub">201 S. Biscayne Blvd, Suite 1200, Miami, FL 33131, United States.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <img src="{{asset('static/img/ico-brazil.svg')}}" class="h-2">
                <div class="d-flex flex-column gap-1">
                    <h6 style="text-transform: uppercase;"><strong>Facilita Instituição de Pagamento S/A</strong></h6>
                    <p class="sub">Rua Senador Milton Campos, n. 35 - Vila da Serra CEP 34006-050 - Nova Lima, MG, Brazil.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <img src="{{asset('static/img/ico-mexico.svg')}}" class="h-2">
                <div class="d-flex flex-column gap-1">
                    <h6><strong>FPAY INTERNACIONAL, SA</strong></h6>
                    <p class="sub">Boulevard Manuel Ávila Camacho 118, 16 floor Ciudad de México, 11000, México.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <img src="{{asset('static/img/ico-colombia.svg')}}" class="h-2">
                <div class="d-flex flex-column gap-1">
                    <h6 style="text-transform: uppercase;"><strong>FPay Colombia S.A.S.</strong></h6>
                    <p class="sub"> Cl. 93a #13 - 24, Piso 5, código postal 110911. Bogotá, D.C., Colombia.</p>
                </div>
            </div>
        </div>
        <div class="row d-flex row-gap-3">
            <div class="col d-flex gap-2 align-items-center">
                <img src="/static/img/logo-scaleup.png" class="h-3 ignoreanimation">
                <img src="/static/img/logo-endeavor.png" class="h-3 ignoreanimation">
            </div>
            <div class="col d-flex justify-content-end">
                <div class="menu">
                    <ul class="align-center d-flex flex-row gap-1">
                        <li class="dropdown language">
                            @if(LaravelLocalization::getCurrentLocale() == 'pt')
                                <a href="#!" class="btn"><img src="{{asset('static/img/ico-brazil.svg')}}"></a>
                            @elseif(LaravelLocalization::getCurrentLocale() == 'es')
                                <a href="#!" class="btn"><img src="{{asset('static/img/ico-mexico.svg')}}"></a>
                            @else
                                <a href="#!" class="btn"><img src="{{asset('static/img/ico-en.svg')}}"></a>
                            @endif

                            <ul class="submenu">
                                @if(LaravelLocalization::getCurrentLocale() != 'en')
                                    <li>
                                        <a href="{!! LaravelLocalization::getLocalizedURL('en') !!}"><img src="{{asset('static/img/ico-en.svg')}}" class="h-2"> <strong>EN</strong></a>
                                    </li>
                                @endif
                                @if(LaravelLocalization::getCurrentLocale() != 'pt')
                                <li>
                                    <a href="{!! LaravelLocalization::getLocalizedURL('pt') !!}"><img src="{{asset('static/img/ico-brazil.svg')}}" class="h-2"> <strong>PT</strong></a>
                                </li>
                                @endif
                                @if(LaravelLocalization::getCurrentLocale() != 'es')
                                <li>
                                    <a href="{!! LaravelLocalization::getLocalizedURL('es') !!}"><img src="{{asset('static/img/ico-mexico.svg')}}" class="h-2"> <strong>ES</strong></a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        <li>
                            <a href="http://instagram.com/facilitapay" target="_blank" class="btn"><img src="{{asset('static/img/ico-instagram.svg')}}"></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/facilitapay/?originalSubdomain=br" target="_blank" class="btn"><img src="/static/img/ico-linkedin.svg"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 gap-3">
                <p class="sub">
                    FacilitaPay operates in compliance with the regulations that rule the Brazilian Payments Market (SPB in Brazilian acronym); Exchange Market and Means of Payment. FacilitaPay is legally constituted and regulated as a eFX provider, in the term of the "Circular 3.691/13" of the Brazilian Central Bank, with the alterations included from the publication of the "Resolution nº 148/21" of the Brazilian Central Bank, as an International Payment Facilitator and as a Bank Correspondent, as per the "Resolution nº3.954/2011" of the Brazilian Central Bank).
                </p>
            </div>
        </div>

        <a href="https://www.quatroventos.com.br" target="_blank" style="display:flex; justify-content: center; margin-top: 20px; opacity: .3;">
            <img class="ignoreanimation" src="https://www.quatroventos.com.br/assets/logo-quatroventos.svg" alt="Quatro Ventos - Desenvolvimento de Sites" width="100" height="18">
        </a>

    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!--<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>-->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('static/js/imageMapResizer.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('map').imageMapResize();
    });

    // //script para a bolinha seguir o mouse
    gsap.set(".ttip", {xPercent: -50, yPercent: -50});

    const tooltip = document.querySelector(".ttipcontainer");
    const pos = { x: window.innerWidth / 2, y: window.innerHeight / 2 };
    const mouse = { x: pos.x, y: pos.y };
    const speed = 0.35;

    const xSet = gsap.quickSetter(tooltip, "x", "px");
    const ySet = gsap.quickSetter(tooltip, "y", "px");

    window.addEventListener("mousemove", e => {
        mouse.x = e.x;
        mouse.y = e.y;
    });

    gsap.ticker.add(() => {
        // adjust speed for higher refresh monitors
        const dt = 1.0 - Math.pow(1.0 - speed, gsap.ticker.deltaRatio());
        pos.x += (mouse.x - pos.x) * dt;
        pos.y += (mouse.y - pos.y) * dt;
        xSet(pos.x);
        ySet(pos.y);
    });

    $('area').bind({
        mouseenter :function(){
            var name = $(this).attr('data-name');
            $('.ttip:not(#'+name+')').hide();
            $('#'+name).show();
            console.log(name);
        },
        mouseleave: function(){
            var name = $(this).attr('data-name');
            $('#'+name).hide();
        }
    });

    $(".toggle-1").click(function(){
        $(".open-1").toggleClass("active");
    });
    $(".toggle-2").click(function(){
        $(".open-2").toggleClass("active");
    });


    $(".drop-item").click(function(){
        $(".dropdown").removeClass("active");
        var self = $(this).parent();
        self.toggleClass("active");
    });

    $(".submenu").mouseleave(function(){
        $(".dropdown").removeClass("active");
    });

    $(document).ready(function(){
        $(".owl-partners").owlCarousel({
            margin:10,
            nav:true,
            loop:true,
            autoplay:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:5
                }
            }
        });

        $(".owl-timeline").owlCarousel({
            margin:12,
            autoplay:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        });
    });


    $(document).ready(function(){
        $("#tab-contents .tab-content:nth-child(1)").show();
        $(".tab").click(function(){
            $(".tab").removeClass("active");
            $(this).addClass("active");

            var rel =  $(this).attr('rel');

            $("#tab-contents .tab-content").hide();
            $("#tab-contents .tab-content[rel="+rel+"]").show();
            return false;
        });
    });

</script>

<!-- Start of facilitapay Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=cc2e97ca-c1fc-4039-966e-96995428fc88"> </script>
<!-- End of facilitapay Zendesk Widget script -->

<script>


    $(document).ready(function() {

        gsap.to('#dash', 2, {opacity: 1});

        $("h1:not(.ignoreanimation), h2:not(.ignoreanimation), h3:not(.ignoreanimation), h4:not(.ignoreanimation), h5:not(.ignoreanimation), h6:not(.ignoreanimation)").each(function() {
            ScrollTrigger.create({
                trigger: $(this),
                start: "top 100%",
                // scrub: true,
                animation: gsap.fromTo($(this), {
                    y:5
                },{
                    y:0,
                    opacity: 1,
                    stagger: 0.1
                })
            });
        });

        $("p:not(.ignoreanimation)").each(function() {
            ScrollTrigger.create({
                trigger: $(this),
                start: "center 100%",
                animation: gsap.fromTo($(this), 1, {
                    y:7
                },{
                    y:0,
                    opacity: 1,
                    stagger: 0.1
                })
            });
        });

        $("img:not(.ignoreanimation), svg").each(function() {
            ScrollTrigger.create({
                trigger: $(this),
                start: "top 100%",
                // scrub: true,
                animation: gsap.fromTo($(this), 2, {
                    y:5
                },{
                    y:0,
                    opacity: 1,
                    stagger: 0.1
                })
            });
        });

    });

    $(window).scroll(function() {
        var nav = $('.nav');
        if ($(window).scrollTop() > 1) {
            nav.addClass('fixed-top');
        } else {
            nav.removeClass('fixed-top');
        }
    });


</script>

</body>


</html>
