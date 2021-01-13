$('.nav-icon1').on('click', function () {
  $('#nav-icon1').toggleClass('open');
  $('.hamburger-menu').toggleClass("active");
  $("body").toggleClass('modal-open');
});

$('.hamburger-menu li').on('click', function() {
  $('#nav-icon1').removeClass('open');
  $('.hamburger-menu').removeClass("active");
  $("body").removeClass('modal-open');
})

var swiper = new Swiper('.swiper-container', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }, loop: true
});

$(window).scroll(function () {
  if ($(window).scrollTop() >= 1) {
    $('header').addClass('active');
  }
  else {
    $('header').removeClass('active');
  }
});




var smoothJumpUp = function () {
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
    window.scrollBy(0, -50);
    setTimeout(smoothJumpUp, 1);
  }
}

window.onscroll = function () {
  var scrolled = window.pageYOffset || document.documentElement.scrollTop;
  if (scrolled > 600) {
    document.getElementById('upbutton').style.display = 'block';
  } else {
    document.getElementById('upbutton').style.display = 'none';
  }
}













