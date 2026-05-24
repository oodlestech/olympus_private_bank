var tt = document.getElementsByClassName("toggle-text");

//Toggle price for mobile
var em = document.getElementById("mobile-filt-monthly"),
    dm = document.getElementById("mobile-filt-yearly"),
    tm = document.getElementById("mobile-switcher"),
    mm = document.getElementById("mobile-monthly"),
    ttmm = document.getElementById("toggle-text-mobile-monthly"),
    ttmy = document.getElementById("toggle-text-mobile-yearly"),
    ym = document.getElementById("mobile-yearly");

em.addEventListener("click", function(){
  tm.checked = false;
  em.classList.add("mobile-toggler--is-active");
  dm.classList.remove("mobile-toggler--is-active");
  mm.classList.remove("mobile-hide");
  ym.classList.add("mobile-hide");
});

dm.addEventListener("click", function(){
  tm.checked = true;
  dm.classList.add("mobile-toggler--is-active");
  em.classList.remove("mobile-toggler--is-active");
  mm.classList.add("mobile-hide");
  ym.classList.remove("mobile-hide");
});

tm.addEventListener("click", function(){
  dm.classList.toggle("mobile-toggler--is-active");
  em.classList.toggle("mobile-toggler--is-active");
  mm.classList.toggle("mobile-hide");
  ym.classList.toggle("mobile-hide");
  ttmm.classList.toggle("toggle-text--is-active");
  ttmy.classList.toggle("toggle-text--is-active");
})




// Toggle price for desktop
var e = document.getElementById("filt-monthly"),
    d = document.getElementById("filt-yearly"),
    t = document.getElementById("switcher"),
    m = document.getElementById("monthly"),
    ttm = document.getElementById("toggle-text-monthly"),
    tty = document.getElementById("toggle-text-yearly"),
    y = document.getElementById("yearly");

e.addEventListener("click", function(){
  t.checked = false;
  e.classList.add("toggler--is-active");
  d.classList.remove("toggler--is-active");
  m.classList.remove("hide");
  y.classList.add("hide");
});

d.addEventListener("click", function(){
  t.checked = true;
  d.classList.add("toggler--is-active");
  e.classList.remove("toggler--is-active");
  m.classList.add("hide");
  y.classList.remove("hide");
});

t.addEventListener("click", function(){
  d.classList.toggle("toggler--is-active");
  e.classList.toggle("toggler--is-active");
  ttm.classList.toggle("toggle-text--is-active");
  tty.classList.toggle("toggle-text--is-active");
  m.classList.toggle("hide");
  y.classList.toggle("hide");
})








// Tab slider

$("document").ready(function(){
  $(".tab-slider--body").hide();
  $(".tab-slider--body:first").show();
});

$(".tab-slider--nav li").click(function() {
  $(".tab-slider--body").hide();
  var activeTab = $(this).attr("rel");
  $("#"+activeTab).fadeIn();
  if($(this).attr("rel") == "tab2"){
    $('.tab-slider--tabs').addClass('slide');
  }else{
    $('.tab-slider--tabs').removeClass('slide');
  }
  $(".tab-slider--nav li").removeClass("active");
  $(this).addClass("active");

});


$("document").ready(function(){
  $(".tab-slider--body-mobile").hide();
  $(".tab-slider--body-mobile:first").show();
});

$(".tab-slider--nav-mobile li").click(function() {
  $(".tab-slider--body-mobile").hide();
  var activeTab = $(this).attr("rel");
  $("#"+activeTab).fadeIn();
  if($(this).attr("rel") == "tab2-mobile"){
    $('.tab-slider--tabs-mobile').addClass('slide');
  }else{
    $('.tab-slider--tabs-mobile').removeClass('slide');
  }
  $(".tab-slider--nav-mobile li").removeClass("active");
  $(this).addClass("active");

});


// Toggle price for mobile and tab

$("#js-contcheckbox").change(function() {
    if(this.checked) {
      $('.js-montlypricing').css('display', 'none');
      $('.js-yearlypricing').css('display', 'inherit');
      $('.afterinput').addClass('text-success');
      $('.beforeinput').removeClass('text-success');
    } else {
      $('.js-montlypricing').css('display', 'inherit');
      $('.js-yearlypricing').css('display', 'none');
      $('.afterinput').removeClass('text-success');
      $('.beforeinput').addClass('text-success');
}
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


// wow animation
new WOW().init();