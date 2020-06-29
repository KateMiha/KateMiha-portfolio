(function() {
    var date = new Date();
    date.setFullYear(
        2020,02,01
    );
    console.log(date);
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

$('a[href^="#"]').hover(function () {
    var id  = $(this).attr('href');
    if(id == "#home"){$(this).text("Главная");}
    if(id == "#education"){$(this).text("Образование");}
    if(id == "#skills"){$(this).text("Навыки");}
    if(id == "#practices"){$(this).text("Практика");}
  }, function () {
    $('#linkHome').text('Г');
    $('#linkEducation').text('О');
    $('#linkSkills').text('Н');
    $('#linkPractices').text('П');
});
