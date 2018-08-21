( function( $ ) {

$(document).ready(function() {

// Navbar popup menu on hove of products tab
    $("li.menu-item-36 a").hover(
        function () {
            $(".menu-popup").show();
        }, function () {
            $(".menu-popup").hide();
        }
    );

    $(".menu-popup").hover(
        function () {
            $(".menu-popup").show();
            $(".menu-item-36 a").addClass("hover-style");
        }, function () {
            $(".menu-popup").hide();
            $(".menu-item-36 a").removeClass("hover-style");
        }
    );


// Mobile menu
    $(".hamburger-closed").click(
        function () {
            $(".mobile-menu").css({"left": "0"});
            $(".hamburger-closed").css({"display": "none"});
            $(".hamburger-open").css({"display": "flex"});
        }
    );

    $(".hamburger-open, .main-section").click(
        function () {
            $(".mobile-menu").css({"left": "-100%"});
            $(".hamburger-open").css({"display": "none"});
            $(".hamburger-closed").css({"display": "flex"});
        }
    );

// Search Bar popup
    $("#menu-item-70, .search-icon-mobile").toggle(
        function (event) {
            $("body").css({"margin-top": "40px"});
            $(".search-popup").css({"top": "0"});
            event.preventDefault();

            $(".search-field").focus();
            $(".search-field").get(0).setSelectionRange(0,0);

        },

        function (event) {
            $("body").css({"margin-top": "0"});
            $(".search-popup").css({"top": "-40px"});
            event.preventDefault();
        }
    );


// On Submit

    document.addEventListener( 'wpcf7mailsent', function( event ) {
        if ( '128' == event.detail.contactFormId ) {
            // do something productive
            $(".input-area, .sign-up-mobile p, .clear-on-submit").css({"display": "none"});
        }
    }, false );


// Image carousel

var curPos = 0;

var slider = $('.slider');
var slideWrapper = $('#sliderWrapper');
var slideContainer = $('#sliderContainer');
var previewSlide = $('.preview');
var cntImages= slider.length;
var sliderWidth = slider.outerWidth();
var sliderWrapperWidth = slideWrapper.outerWidth();
var sliderCointainerWidth = slideContainer.outerWidth();
var previewSlideWidth = previewSlide.width();

$(".right-button").click(
    function() {
        if (curPos == (cntImages / 2) - 1)
        return
        else
        curPos++;
        $('#sliderWrapper').animate({
        'marginLeft': -sliderWrapperWidth * curPos
        });

        // preview slider
        $('#sliderContainer .gallery-previews').animate({
        'marginLeft': (-sliderWrapperWidth / 4)  * curPos
        });

        var counter = curPos + 1;
        console.log('right counter: ' + counter)

        $(".gallery-previews .preview").removeClass('active');
        $('.gallery-previews .preview:nth-child(' + counter + ')').addClass("active")

    });

$(".left-button").click(
    function() {
        if (curPos == 0)
        return
        else
        curPos--;

        $('#sliderWrapper').animate({
        'marginLeft': sliderWrapperWidth * (-curPos)
        });
        $('#sliderContainer .gallery-previews').animate({
        'marginLeft': (-sliderWrapperWidth / 4)  * (curPos)
        });


        var counter = curPos + 1;
        console.log('left counter: ' + counter)

        $(".gallery-previews .preview").removeClass('active');
        $('.gallery-previews .preview:nth-child(' + counter + ')').addClass("active")

    });


// Get the container element
var previewSlideContainer = document.getElementById("sliderContainer");


// Get all buttons with class="btn" inside the container
var previewSlide = previewSlideContainer.getElementsByClassName("preview");

// Loop through the image and add the active class to the current/clicked image
for (var i = 0; i < previewSlide.length; i++) {
  previewSlide[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";

    var slideIndex = (current[0].id);
    // console.log("Preview Slide Index: " + slideIndex);

    $('#sliderWrapper').animate({ 'marginLeft': -sliderWrapperWidth * (slideIndex - 1)});


    // preview slider
    // $('#').animate({
    // 'marginLeft': (-sliderWrapperWidth / 4)  * curPos
    // });


    // make sure active preview is always in first position
    // make sure right and left button go right or left the image in the preview
    // make sure all works after return to beginning


  });

  $(".return-to-start").click(
      function () {

          $("#sliderContainer .gallery-previews").animate({'marginLeft': '0'});
          $('#sliderWrapper').animate({'marginLeft': '0'});
          curPos = 0;
      }
  );
}


let hiddenContent = document.getElementsByClassName("hidden-content");
let hiddenContentHeight = hiddenContent[0].offsetHeight;
console.log("Hidden content height: " + hiddenContentHeight)
$(".hidden-content").css({"marginTop": "-" + hiddenContentHeight  + "px"});

// Secret content
$(".learn-more-button").click(function() {
    $('html, body').animate({
        scrollTop: ($('.button-text').offset().top)
    });
    if($('.hidden-content').hasClass("active")) {

        hiddenContent = document.getElementsByClassName("hidden-content");
        hiddenContentHeight = hiddenContent[0].offsetHeight;
        console.log("current-height: " + hiddenContentHeight)

        $('.hidden-content').removeClass("active");
        $('.learn-more-button').removeClass("active");
        $(".hidden-content").animate({"marginTop": "-" + hiddenContentHeight  + "px"}, 1000);
        $(".learn-more-button-container .arrow-button").animate({"opacity": "0"});
    } else {
        $('.hidden-content').addClass("active");
        $('.learn-more-button').addClass("active");

        hiddenContent = document.getElementsByClassName("hidden-content");
        hiddenContentHeight = hiddenContent[0].offsetHeight;

        $(".hidden-content").animate({"marginTop": "0"}, 1000);

        console.log("hiddenContentHeight: " + hiddenContentHeight );
        $(".learn-more-button-container .arrow-button").animate({"opacity": "1"});
    }
});


$(".hidden-content .right-button.arrow-button, .hidden-content .left-button.arrow-button").click(
    function (event) {
        $('html, body').animate({
            scrollTop: ($('.button-text').offset().top)
        });
    },
);


var owl = $('.owl-carousel');

// Go to the next item
$('.hidden-right, .owl-next').click(function() {
    owl.trigger('next.owl.carousel', [500]);
    $('html, body').animate({
        scrollTop: ($('.button-text').offset().top)
    });
})

// Go to the previous item
$('.hidden-left, .owl-prev').click(function() {
    owl.trigger('prev.owl.carousel', [500]);
    $('html, body').animate({
        scrollTop: ($('.button-text').offset().top)
    });
})

// Go to specific slide

const types = document.querySelectorAll('#window-types ul li')

types.forEach(function(value, index) {
    // console.log(value)
    var liIndex = (index + 1)
    // console.log(liIndex)


    $('#window-types ul li:nth-child(' + liIndex + ') .icon-container').click(
        function(event) {
            $('html, body').animate({
                scrollTop: ($('.button-text').offset().top)
            });
            owl.trigger('to.owl.carousel', `${index}`)

            if($('.hidden-content').hasClass("active")) {


            } else {
                $('.hidden-content').addClass("active");
                $('.learn-more-button').addClass("active");

                hiddenContent = document.getElementsByClassName("hidden-content");
                hiddenContentHeight = hiddenContent[0].offsetHeight;

                $(".hidden-content").animate({"marginTop": "0"}, 1000);

                console.log("hiddenContentHeight: " + hiddenContentHeight );
                $(".learn-more-button-container .arrow-button").animate({"opacity": "1"});
            }
        }
    )
});

// easy to use: 187  / max ventilation: 186
// energy-efficiency-icon 182
// natural-light-icon 183
// easy cleaning: 188
// large views: 189


// post online
// adjust for mobile

// minimize js and css - use beautifyer

$("#wt-hinge-crank-casement-shortcode").appendTo(".wt-hinge-crank-casement-shortcode");
$("#wt-hinge-crank-awnings-shortcode").appendTo(".wt-hinge-crank-awnings-shortcode");
$("#wt-bay-bow-shortcode").appendTo(".wt-bay-bow-shortcode");
$("#wt-single-hung-shortcode").appendTo(".wt-single-hung-shortcode");
$("#wt-double-hung-shortcode").appendTo(".wt-double-hung-shortcode");
$("#wt-horizontal-sliders-shortcode").appendTo(".wt-horizontal-sliders-shortcode");
$("#wt-fixed-shortcode").appendTo(".wt-fixed-shortcode");
$("#wt-custom-shortcode").appendTo(".wt-custom-shortcode");




});

} )( jQuery );
