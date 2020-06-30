<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Портфолио</title>

    <base target="_blank">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Open+Sans+Condensed:wght@300&family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  </head>
  <body>
    <div class="nav" id="menu">
      <a href="#home"><div class="link" id="linkhome"></div></a>
      <a href="#education"><div class="link" id="linkeducation"></div></a>
      <a href="#skills"><div class="link" id="linkskills"></div></a>
      <a href="#practices"><div class="link" id="linkpractices"></div></a>
    </div>
    <div class="home box" id="home">
      <h1 class="titleHome" >Начинающий Веб-разработчик</h1>
      <div class="contentHome">
        <div class="foto">
          <img src="img/profil3.jpg" class="img-circle  wow bounceInUp" alt="" style="border-radius:50%;">
          <img src="img/square.svg" class="img-square" alt="">
          <img src="img/trigon.svg" class="img-trigon" alt="">
        </div>
        <div class="card">
            <div class="nameCard">
              <h1>Михайловская Екатерина Сергеевна</h1>
              <!-- <hr noshade size = "1"> -->
            </div>
            <div class="infoCard">
              <div class="poz">
                <h2 style="text-align:left;">Дата рождения:</h2>
                <h2 style="text-align:right;">24.10.1998, 21год</h2>
                <h2 style="text-align:left;">Город проживания:</h2>
                <h2 style="text-align:right;"> Санкт-Петербург</h2>
              </div>
              <h3>Изучаю разработку уже <strong id="Days"></strong>!</h3>
            </div>
        </div>
      </div>
    </div>
    <div class="education box" id="education">
      <h1 class="titleEducation">Образование</h1>
      <div class="windowEducation">
        <p class="nameEducation">Санкт-Петербургский государственный университет телекоммуникаций им. проф. М.А. Бонч-Бруевича</p>
        <p class="infoEducation">Факультет: Институт непрерывного образования (ИНО)<br>
          Спец./направл.: 09.03.02 - Информационные системы и технологии<br>
          Форма обучения: Заочная<br>
          Квалификация: Бакалавр<br>
          Профиль: Информационные системы и технологии<br>
          Год начала обучения: 2017<br>
          Год окончания обучения: 2022<br><br><br>
          <a href="https://www.sut.ru/"><img src="img/sut.png" class="img-sut" alt=""></a>
        </p>
      </div>
    </div>
    <div class="skills box" id="skills">
      <h1 class="titleSkill">Навыки</h1>
        <div class="slide slide1">
          <!-- HTML5 -->
          <div class="skill">
            <div class="skillName">
              <p>HTML5</p>
            </div>
            <div class="skillProgress">
              <progress value="90" max="100"></progress>
            </div>
          </div>
          <!-- CSS3 -->
          <div class="skill">
            <div class="skillName">
              <p>CSS3</p>
            </div>
            <div class="skillProgress">
              <progress value="90" max="100"></progress>
            </div>
          </div>
          <!-- JS -->
          <div class="skill">
            <div class="skillName">
              <p>JS</p>
            </div>
            <div class="skillProgress">
              <progress value="50" max="100"></progress>
            </div>
          </div>
          <!-- PHP -->
          <div class="skill">
            <div class="skillName">
              <p>PHP</p>
            </div>
            <div class="skillProgress">
              <progress value="30" max="100"></progress>
            </div>
          </div>
          <!-- SQL -->
          <div class="skill">
            <div class="skillName">
              <p>SQL</p>
            </div>
            <div class="skillProgress">
              <progress value="40" max="100"></progress>
            </div>
          </div>
          <!-- Git -->
          <div class="skill">
            <div class="skillName">
              <p>Git</p>
            </div>
            <div class="skillProgress">
              <progress value="80" max="100"></progress>
            </div>
          </div>
           <!-- Anime.js -->
          <div class="skill">
            <div class="skillName">
              <p>Anime.js</p>
            </div>
            <div class="skillProgress">
              <progress value="80" max="100"></progress>
            </div>
          </div>
          <!-- Bootstrap -->
          <div class="skill">
            <div class="skillName">
              <p>Bootstrap</p>
            </div>
            <div class="skillProgress">
              <progress value="70" max="100"></progress>
            </div>
          </div>
          <!-- MVC -->
          <div class="skill">
            <div class="skillName">
              <p>MVC</p>
            </div>
            <div class="skillProgress">
              <progress value="60" max="100"><div class="progress-skill"></div></progress>
            </div>
          </div>
          <!-- Figma -->
          <div class="skill">
            <div class="skillName">
              <p>Figma</p>
            </div>
            <div class="skillProgress">
              <progress value="80" max="100"><div class="progress-skill"></div></progress>
            </div>
          </div>
          <!-- English -->
          <div class="skill">
            <div class="skillName">
              <p>English</p>
            </div>
            <div class="skillProgress">
              <progress value="30" max="100"><div class="progress-skill"></div></progress>
            </div>
          </div>
          <!-- JQuery -->
          <div class="skill">
            <div class="skillName">
              <p>JQuery</p>
            </div>
            <div class="skillProgress">
              <progress value="20" max="100"><div class="progress-skill"></div></progress>
            </div>
          </div>
          <!-- </div> -->
      </div>
    </div>
    <div class="practices box" id="practices">
      <h1 class="titlePractice">Практический опыт</h1>
      <div class="practiceGrid">
        <div class="practice">
          <h2>Проекты</h2>
          <ul>
            <li><a href="http://vrossii.info/">http://vrossii.info/</a></li>
          </ul>
        </div>
        <div class="practice">
          <h2>GitHub</h2>
          <ul>
            <li><a href="https://github.com/KateMiha/KateMiha-portfolio">https://github.com/KateMiha/KateMiha-portfolio</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer" id="footer">
      <h2>©2020</h2>
      <h3>E.MIHA</h3>
    </div>
    <script type="text/javascript" src="js/scripts.js"></script>
  </body>
</html>
