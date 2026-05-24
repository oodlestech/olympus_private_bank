$(".careers-card").on('click', function () {
    location.href = "/careers/" + this.dataset.href;
});

$(".back-to-all").on('click', function () {
    console.log("asd");
    location.href = "/careers";
});

$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  if (scroll > 0) {
    $("#navbar").addClass("active");
  }
  else {
    $("#navbar").removeClass("active");
  }
});

$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  if (scroll > 0) {
    $("#navbar-mobile").addClass("active");
  }
  else {
    $("#navbar-mobile").removeClass("active");
  }
});

new WOW().init();