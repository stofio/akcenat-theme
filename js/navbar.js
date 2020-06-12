$(document).ready(function() {

  $('.navbar .dropdown-item').on('click', function(e) {
    var $el = $(this).children('.dropdown-toggle');
    var $parent = $el.offsetParent(".dropdown-menu");
    $(this).parent("li").toggleClass('open');

    if (!$parent.parent().hasClass('navbar-nav')) {
      if ($parent.hasClass('show')) {
        $parent.removeClass('show');
        $el.next().removeClass('show');
        $el.next().css({ "top": -999, "left": -999 });
      } else {
        $parent.parent().find('.show').removeClass('show');
        $parent.addClass('show');
        $el.next().addClass('show');
        $el.next().css({ "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 });
      }
      e.preventDefault();
      e.stopPropagation();
    }
  });


  $('.navbar-toggler').on('click', function() {
    if (!$('#navbar').hasClass('show')) {
      $('.search-icon').css({ 'width': 'auto', 'padding': '10px 0' });
      $('.navbar.navbar-expand-md.mb-4').css({ 'border-bottom': '1px solid #ababab' })
    } else {
      setTimeout(function() {
        $('.search-icon').css({ 'width': '25%', 'padding': '0' });
      }, 340)
    }
  })


  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      $("#search-bar").css({ 'max-height': '200px' });
      $(".search-icon i").css({ 'color': '#0062cc' });
    } else {
      $("#search-bar").css({ 'max-height': '0' });
      $(".search-icon i").css({ 'color': '#242424' });
    }
    prevScrollpos = currentScrollPos;
  }


  function handler1() {
    $("#search-bar").css({ 'max-height': '200px' });
    $(".search-icon i").css({ 'color': '#0062cc' });
    $(this).one("click", handler2);
  }

  function handler2() {
    $("#search-bar").css({ 'max-height': '0' });
    $(".search-icon i").css({ 'color': '#242424' });
    $(this).one("click", handler1);
  }
  $(".search-icon i").one("click", handler1);






});