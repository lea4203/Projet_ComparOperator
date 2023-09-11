/*!
* Start Bootstrap - Agency v7.0.12 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    //  Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%',
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});


$(window).load(function() {
    $(".circle")
      .first()
      .addClass("active");
    $("#bg .slide")
      .first()
      .addClass("active");
    $("#image .img")
      .first()
      .addClass("active");
    $(".quote")
      .first()
      .addClass("active");
  
    var animate = setInterval(function() {
      var $this = $(".circle"),
        currentActiveBubble = $("#nav-cirlces").find(".active"),
        position = $("#nav-cirlces")
          .children()
          .index(currentActiveBubble),
        num = $(".circle").length;
  
      if (position < num - 1) {
        $(".active")
          .removeClass("active")
          .next()
          .addClass("active");
      } else {
        $(".circle")
          .removeClass("active")
          .first()
          .addClass("active");
        $("#bg .slide")
          .removeClass("active")
          .first()
          .addClass("active");
        $("#image .img")
          .removeClass("active")
          .first()
          .addClass("active");
        $(".quote")
          .removeClass("active")
          .first()
          .addClass("active");
      }
      position++;
    }, 4500);
  
    $(".circle").click(function() {
      clearInterval(animate);
  
      var $this = $(this),
        $siblings = $this.parent().children(),
        position = $siblings.index($this);
  
      $(".circle")
        .removeClass("active")
        .eq(position)
        .addClass("active");
      $("#bg .slide")
        .removeClass("active")
        .eq(position)
        .addClass("active");
      $("#image .img")
        .removeClass("active")
        .eq(position)
        .addClass("active");
      $(".quote")
        .removeClass("active")
        .eq(position)
        .addClass("active");
    });
  
    $("#rightBtn , #leftBtn").click(function() {
      clearInterval(animate);
  
      var $this = $(this),
        currentActiveBubble = $("#nav-cirlces").find(".active"),
        position = $("#nav-cirlces")
          .children()
          .index(currentActiveBubble),
        num = $(".circle").length;
  
      if ($this.hasClass("next")) {
        if (position < num - 1) {
          $(".active")
            .removeClass("active")
            .next()
            .addClass("active");
        } else {
          $(".circle")
            .removeClass("active")
            .first()
            .addClass("active");
          $("#bg .slide")
            .removeClass("active")
            .first()
            .addClass("active");
          $("#image .img")
            .removeClass("active")
            .first()
            .addClass("active");
          $(".quote")
            .removeClass("active")
            .first()
            .addClass("active");
        }
      } else {
        if (position === 0) {
          $(".circle")
            .removeClass("active")
            .last()
            .addClass("active");
          $("#bg .slide")
            .removeClass("active")
            .last()
            .addClass("active");
          $("#image .img")
            .removeClass("active")
            .last()
            .addClass("active");
          $(".quote")
            .removeClass("active")
            .last()
            .addClass("active");
        } else {
          $(".active")
            .removeClass("active")
            .prev()
            .addClass("active");
        }
      }
    });
  });
  