$(document).ready(function() {
  let dossier = false
  $('.parallax').parallax();
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });
  $('.modal').modal();
  $(".dropdown-trigger").dropdown({
    coverTrigger: false
  });

  $(".carousel-arrow-left").click(function() {
    $('.carousel').carousel('prev')
  });

  $(".carousel-arrow-right").click(function() {
    $('.carousel').carousel('next')
  });

  $(".blankk").click(function() {
    $('body').children().hide()
    $('body').html('<h1>BLANK</h1>')
  });

  $(".rayanimg").click(function() {
    dossier = !dossier
    if (dossier) {
      $(".rayanimg").attr("src", "img/rayan-dossier.jpg")
    }
    else {
      $(".rayanimg").attr("src", "img/mudkip.jfif")
    }
  });
  $(".gwenimg").click(function() {
    dossier = !dossier
    if (dossier) {
      $(".gwenimg").attr("src", "img/gwen-dossier.jpg")
    }
    else {
      $(".gwenimg").attr("src", "img/Gwendal.jfif")
    }
  });

  $("#gravity").click(function() {
    $(".responsive-img").hide()
    $('body').jGravity({
      target: "h1",
      ingnoreClass: 'ignoreme',
    });
  });

});


