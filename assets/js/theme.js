import Bowser from "bowser";
import $ from "jquery";
import "slick-carousel";

$(document).ready(function() {
  // Inside of this function, $() will work as an alias for jQuery()
  // and other libraries also using $ will not be accessible under this shortcut
  // https://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers

  // Touch Device Detection
  var isTouchDevice = "ontouchstart" in document.documentElement;
  if (isTouchDevice) {
    $("body").removeClass("no-touch");
    $("body").addClass("touch");
  }

  // Browser detection via Bowser (https://github.com/lancedikson/bowser) - add detection as needed
  const userBrowser = Bowser.getParser(window.navigator.userAgent);
  const browser = userBrowser.getBrowser();

  if (browser.name === "Internet Explorer" && browser.version == "11.0") {
    $("body").addClass("ie-11");
  } else if (browser.name === "Safari") {
    $("body").addClass("safari");
  }

  // Menu functions
  $(".menu-icon").on("click", function() {
    $("html").toggleClass("locked");
    $("body").toggleClass("locked masked");

    $(this).toggleClass("active");
    $(".nav--mobile").slideToggle();
  });

  $(window).on("resize", function() {
    if( $(window).width() > 1024 ) {
      $("html").removeClass("locked");
      $("body").removeClass("locked masked");

      $(".menu-icon").removeClass("active");
      $(".nav--mobile").slideUp();
    }
  });

  // Mobile menu sub-menu toggle
  $(".nav--mobile .menu-item-has-children > a").on("click", function(e) {
    e.preventDefault();

    $(this).siblings(".sub-menu").slideToggle();
    $(this).toggleClass("active");
  });

  // Form Label Animation
  $(".gform_wrapper form .animated").find("input, select, textarea").on("focusin", function() {
  	$(this).parents(".animated").children("label").addClass("active-position active-weight active-color");

  	// Off focus
  	$(".gform_wrapper form .animated").find("input, select, textarea").on("focusout", function() {
  		if( $(this).val() !== "" ) { // Remove active weight and keep raised position if input has content
  			$(this).parents(".animated").children("label").removeClass("active-weight");
  		} else { // Else remove both weight and raised position
  			$(this).parents(".animated").children("label").removeClass("active-position active-weight active-color");
  		}
  	});
  });

  // Slider section
  if( $(".slider-section__slider").length ) {
    $(".slider-section__slider").slick({
      autoplay: false,
      arrows: true,
      dots: false,
      slidesToShow: 3,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
    });
  }
});
