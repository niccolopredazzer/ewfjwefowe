AOS.init();

(function($) {
  "use strict";

  if (!$("#header").hasClass("header-scrolled")) {
    // Header scroll class
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $("#header").addClass("header-scrolled");
      } else {
        $("#header").removeClass("header-scrolled");
      }
    });

    if ($(window).scrollTop() > 100) {
      $("#header").addClass("header-scrolled");
    }
  }
  $(".pwd-control").click(function() {
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });
  // Smooth scroll for the navigation and links with .scrollto classes
  $(".main-nav a, .mobile-nav a, .scrollto").on("click", function() {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($("#header").length) {
          top_space = $("#header").outerHeight();

          if (!$("#header").hasClass("header-scrolled")) {
            top_space = top_space - 20;
          }
        }

        $("html, body").animate(
          {
            scrollTop: target.offset().top - top_space
          },
          1500,
          "easeInOutExpo"
        );

        if ($(this).parents(".main-nav, .mobile-nav").length) {
          $(".main-nav .active, .mobile-nav .active").removeClass("active");
          $(this)
            .closest("li")
            .addClass("active");
        }

        if ($("body").hasClass("mobile-nav-active")) {
          $("body").removeClass("mobile-nav-active");
          $(".mobile-nav-toggle i").toggleClass("fa-times fa-bars");
          $(".mobile-nav-overly").fadeOut();
        }
        return false;
      }
    }
  });

  // Navigation active state on scroll
  var nav_sections = $("section");
  var main_nav = $(".main-nav, .mobile-nav");
  var main_nav_height = $("#header").outerHeight();

  $(window).on("scroll", function() {
    var cur_pos = $(this).scrollTop();

    nav_sections.each(function() {
      var top = $(this).offset().top - main_nav_height,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        main_nav.find("li").removeClass("active");
        main_nav
          .find('a[href="#' + $(this).attr("id") + '"]')
          .parent("li")
          .addClass("active");
      }
    });
  });

  //if ($('.round').lenght > 0) {
  $(".round").circleProgress({
    emptyFill: "#e6e6e6",
    fill: "#1e90ff",
    size: 20,
    thickness: 3
  });
  //}

  //if ($('.dn-carousel').lenght > 0) {
  $(".dn-carousel").slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    dots: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
    ]
  });
  $(".who-carousel").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 4,
    dots: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  $(".deal-carousel").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    prevArrow: $(".prev"),
    nextArrow: $(".next"),
    appendArrows: $(".deal-carousel"),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 2,
          infinite: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  //}
  //Login
  $(".reg-sec").hide();
  $("#div-private").show();

  $(".reg-switch").click(function() {
    $(".reg-sec").hide();
    $("#div" + "-" + $(this).attr("target")).show();
    $(".reg-switch").removeClass("my-btn-primary");
    $(".reg-switch").addClass("btn-ghost-primary");
    $(this).removeClass("btn-ghost-primary");
    $(this).addClass("my-btn-primary");
  });

  //Tabs
  $(".target-div").hide();
  $("#sld-data").show();
  $("#sld-data-soc").show();

  $(".change-me").click(function() {
    $(".target-div").hide();
    $("#sld" + "-" + $(this).attr("target")).show();
    $(".change-me").removeClass("my-btn-primary");
    $(".change-me").addClass("btn-ghost-primary");
    $(this).removeClass("btn-ghost-primary");
    $(this).addClass("my-btn-primary");
  });

  $("#sel-tabs").on("change", function() {
    $(".target-div").hide();
    $("#sld" + "-" + $(this).val()).show();
  });

  //Deals tabs
  $("#sld-div-project").show();
  $(".show-single").click(function() {
    $(".target-div").hide();
    $("#sld-div" + "-" + $(this).attr("target")).show();
    $(".show-single").removeClass("my-btn-primary");
    $(".show-single").addClass("btn-ghost-primary");
    $(this).removeClass("btn-ghost-primary");
    $(this).addClass("my-btn-primary");
  });
  //Depot Modal
  $("#reg-depot").on("shown.bs.modal", function(e) {
    e.preventDefault();
    $("#bonifico").focus();
    $(".sw-carta").hide();
    $(".sw-bonifico").show();
  });
  $("#bonifico").click(function() {
    $(".sw-carta").hide();
    $(".sw-bonifico").show();
  });
  $("#carta").click(function() {
    $(".sw-bonifico").hide();
    $(".sw-carta").show();
  });
})(jQuery);
