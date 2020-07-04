(function() {
    var date = new Date();
    date.setFullYear(
        2020,02,01
    );
    var today = new Date();
    var days = Math.floor((today - date) / 86400000);
    var day = 'дней';
    if (days % 10 == 1) {
        day = 'день';
    } else if (days % 10 > 1 && days % 10 < 5) {
        day = 'дня';
    }
    document.getElementById('Days').innerText =  + days + ' ' + day;
})();

$("#menu").on("click","a", function (event) {
  event.preventDefault();
  var id  = $(this).attr('href'), top = $(id).offset().top;
  $('body,html').animate({scrollTop: top}, 1500);
});


$(window).on('scroll', function() {
    var point = $(document).scrollTop();
    let home = $("#home").offset().top;
    let educ = $("#education").offset().top;
    let skill = $("#skills").offset().top;
    let prac = $("#practices").offset().top;
    let footer = $("#footer").offset().top;

    if (point < home + educ  && point >= home) {
      console.log("HOME");
      $("div").removeClass("active");
      $("#linkhome").addClass("active");
    }
    if (point >= home + educ - 500 && point < skill) {
      console.log("EDUC");
      $("div").removeClass("active");
      $("#linkeducation").addClass("active");
    }
    if (point >= skill - 500 && point < prac) {
      console.log("SKILL");
      $("div").removeClass("active");
      $("#linkskills").addClass("active");
    }
    if (point >= prac - 500 && point < footer) {
      console.log("PRAC");
      $("div").removeClass("active");
      $("#linkpractices").addClass("active");
    }
});

var lineBar = new ProgressBar.Line('#line-container', {
    color: 'orange',
    strokeWidth: 2,
    trailWidth: 0.5
});
lineBar.animate(1, {duration: 1000});
