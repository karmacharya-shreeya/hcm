/**
 * Created by Joshua Tamang
 */


var winWidth = $(window).width();

$(document).ready(function () {
    sliderInit();
    addClassInit();
    navInit();
    mcustomInit();
    // matchHeight();
    $('.num').counterUp({delay:10,time:1000}); 
});


/*------------------------------- Functions Starts -------------------------------*/
function sliderInit() {
    // $('.nav-slider').slick({
    //     arrows: true,
    //     dots: false,
    //     dotsToShow: 1,
    //     autoplay: false,
    //     speed: 500,
    //     // fade: true,
    //     // pauseOnHover: false,
    //     cssEase: 'linear',
    //     infinite: false,
    //     slidesToShow: 4 ,
    //     // slidesToScroll: 1,
    //     responsive: [
    //         {
    //             breakpoint: 667,
    //             settings: {
    //                 arrows: true,
    //                 dots: false
    //             }
    //         }
    //     ]
    // });

    $('.testimonial-section-wrapper').slick({
        arrows: false,
        dots: false,
        dotsToShow: 1,
        autoplay: false,
        speed: 500,
        // fade: true,
        // pauseOnHover: false,
        // cssEase: 'linear',
        slidesToShow: 3 ,
        // slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 667,
                settings: {
                    arrows: false,
                    dots: false,
                    slidesToShow: 1
                }
            }
        ]
    });

}



function addClassInit() {
    $('#read-more').click(function(){
        $('body').addClass('open');
    })
}

function navInit() {
    var scrollTop = 0;
    jQuery(window).scroll(function(){
        scrollTop = jQuery(window).scrollTop();
        jQuery('.counter').html(scrollTop);
        if (scrollTop >= 150) {
            jQuery('#header-wrapper').addClass('nav-scroll');
        } else if (scrollTop < 150) {
            jQuery('#header-wrapper').removeClass('nav-scroll');
        }
    });
}

function mcustomInit() {
    $('#toggle-button').on("click",function(){
        $('body').toggleClass('open-menu');
    })
}



/*-------------------------------- Functions Ends --------------------------------*/

// Swiper JS Starts
    var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    autoplay: false,
    speed: 700,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // var swiper2 = new Swiper(".mySwiper2", {
  //   spaceBetween: 30,
  //   pagination: {
  //     el: ".swiper-pagination",
  //     clickable: true,
  //   },
  // });
// Swiper JS Ends


// animation 
jQuery(window).scroll(function () {
    var winHeight = jQuery(window).height();
    var offset = 0.6;
    var scrollTop = jQuery(window).scrollTop();
    var visibleArea = scrollTop + (winHeight * offset);

    jQuery('.animation-area-sequence').each(function () {
        if(jQuery(this).offset().top < visibleArea) {
            jQuery(this).find('.ani-sequence').addClass('normal');
        }else{
            jQuery(this).find('.ani-sequence').removeClass('normal');
        }
    });
 
});

// counterup


