(function($) {

  "use strict";

  // Preload
  $(window).on('load', function() { // makes sure the whole site is loaded
    $('[data-loader="circle-side"]').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(350).css({
      'overflow': 'visible'
    });
  })

  // Submit loader mask 
  $('form#wrapped').on('submit', function() {
    var form = $("form#wrapped");
    form.validate();
    if (form.valid()) {
      $("#loader_form").fadeIn();
    }
  });

  // Wizard func
  $("#wizard_container").wizard({
    stepsWrapper: "#wrapped",
    submit: ".submit",
    beforeSelect: function(event, state) {
      if ($('input#website').val().length != 0) {
        return false;
      }
      if (!state.isMovingForward)
        return true;
      var inputs = $(this).wizard('state').step.find(':input');
      return !inputs.length || !!inputs.valid();
    }
  }).validate({
    errorPlacement: function(error, element) {
      if (element.is(':radio') || element.is(':checkbox')) {
        error.insertBefore(element.next());
      } else {
        error.insertAfter(element);
      }
    }
  });

  //  Progress bar
  $("#progressbar").progressbar();
  $("#wizard_container").wizard({
    afterSelect: function(event, state) {
      $("#progressbar").progressbar("value", state.percentComplete);
      $("#location").text("" + state.stepsComplete + " of " + state.stepsPossible + " completed");
    }
  });

  // Validate select
  $('#wrapped').validate({
    ignore: [],
    rules: {
      select: {
        required: true
      }
    },
    errorPlacement: function(error, element) {
      if (element.is('select:hidden')) {
        error.insertAfter(element.next('.nice-select'));
      } else {
        error.insertAfter(element);
      }
    }
  });

  // Header background
  $('.background-image').each(function() {
    $(this).css('background-image', $(this).attr('data-background'));
  });

  // Opacity mask
  $('.opacity-mask').each(function() {
    $(this).css('background-color', $(this).attr('data-opacity-mask'));
  });

  // Jquery select
  $('.styled-select select').niceSelect();

  // Button start scroll to section
  $('a[href^="#"].btn_scroll_to').on('click', function(e) {
    e.preventDefault();
    var target = this.hash;
    var $target = $(target);
    $('html, body').stop().animate({
      'scrollTop': $target.offset().top
    }, 200, 'swing', function() {
      window.location.hash = target;
    });
  });

  // Menu
  var overlayNav = $('.cd-overlay-nav'),
    overlayContent = $('.cd-overlay-content'),
    navigation = $('.cd-primary-nav'),
    toggleNav = $('.cd-nav-trigger');

  //inizialize navigation and content layers
  layerInit();
  $(window).on('resize', function() {
    window.requestAnimationFrame(layerInit);
  });

  //open/close the menu and cover layers
  toggleNav.on('click', function() {
    if (!toggleNav.hasClass('close-nav')) {
      //it means navigation is not visible yet - open it and animate navigation layer
      toggleNav.addClass('close-nav');

      overlayNav.children('span').velocity({
        translateZ: 0,
        scaleX: 1,
        scaleY: 1,
      }, 500, 'easeInCubic', function() {
        navigation.addClass('fade-in');
      });
    } else {
      //navigation is open - close it and remove navigation layer
      toggleNav.removeClass('close-nav');

      overlayContent.children('span').velocity({
        translateZ: 0,
        scaleX: 1,
        scaleY: 1,
      }, 500, 'easeInCubic', function() {
        navigation.removeClass('fade-in');

        overlayNav.children('span').velocity({
          translateZ: 0,
          scaleX: 0,
          scaleY: 0,
        }, 0);

        overlayContent.addClass('is-hidden').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
          overlayContent.children('span').velocity({
            translateZ: 0,
            scaleX: 0,
            scaleY: 0,
          }, 0, function() { overlayContent.removeClass('is-hidden') });
        });
        if ($('html').hasClass('no-csstransitions')) {
          overlayContent.children('span').velocity({
            translateZ: 0,
            scaleX: 0,
            scaleY: 0,
          }, 0, function() { overlayContent.removeClass('is-hidden') });
        }
      });
    }
  });

  function layerInit() {
    var diameterValue = (Math.sqrt(Math.pow($(window).height(), 2) + Math.pow($(window).width(), 2)) * 2);
    overlayNav.children('span').velocity({
      scaleX: 0,
      scaleY: 0,
      translateZ: 0,
    }, 50).velocity({
      height: diameterValue + 'px',
      width: diameterValue + 'px',
      top: -(diameterValue / 2) + 'px',
      left: -(diameterValue / 2) + 'px',
    }, 0);

    overlayContent.children('span').velocity({
      scaleX: 0,
      scaleY: 0,
      translateZ: 0,
    }, 50).velocity({
      height: diameterValue + 'px',
      width: diameterValue + 'px',
      top: -(diameterValue / 2) + 'px',
      left: -(diameterValue / 2) + 'px',
    }, 0);
  }

  // Modal Help
  $('#modal_h').magnificPopup({
    type: 'inline',
    fixedContentPos: true,
    fixedBgPos: true,
    overflowY: 'auto',
    closeBtnInside: true,
    preloader: false,
    midClick: true,
    removalDelay: 300,
    closeMarkup: '<button title="%title%" type="button" class="mfp-close"></button>',
    mainClass: 'my-mfp-zoom-in'
  });

  // Countdown
  setInterval(function() {
    var target = new Date("February 28 2023 20:00:00 GMT+0100"); //replace with YOUR DATE
    var now = new Date();
    var difference = Math.floor((target.getTime() - now.getTime()) / 1000);

    var seconds = fixIntegers(difference % 60);
    difference = Math.floor(difference / 60);

    var minutes = fixIntegers(difference % 60);
    difference = Math.floor(difference / 60);

    var hours = fixIntegers(difference % 24);
    difference = Math.floor(difference / 24);

    var days = difference;

    $(".countdown #seconds").html(seconds);
    $(".countdown #minutes").html(minutes);
    $(".countdown #hours").html(hours);
    $(".countdown #days").html(days);


  }, 200);

  function fixIntegers(integer) {
    if (integer < 0)
      integer = 0;
    if (integer < 10)
      return "0" + integer;
    return "" + integer;
  }

})(window.jQuery);