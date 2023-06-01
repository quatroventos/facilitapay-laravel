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
