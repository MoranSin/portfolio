<?php
include 'db.php';

$query 	= "SELECT * FROM portfolio_MoranSinai";
$result = mysqli_query($connection, $query);
if(!$result) {
    die("DB query failed.");
}
?>
<!doctype html>
<html>
  <head>
    <title>
      Moran Sinai's CV
    </title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8" />
  </head>
  <body>
    <div id="conteneur-id">
      <div id="conteneur-menu">
        <div class="menu">
          <ul>
            <li><a href="#conteneur-home">HOME</a></li>
            <li><a href="#conteneur-about">ABOUT</a></li>
            <li><a href="#conteneur-skills">SKILLS</a></li>
            <li><a href="#conteneur-qualification">Qualification</a></li>
            <li><a href="#conteneur-portfolio">PORTFOLIO</a></li>
            <li><a href="#conteneur-contact">CONTACT</a></li>
          </ul>
       </div>
      </div>
      <div id="conteneur-home">
        <div class="home">
          <h1>Moran Sinai</h1>
          <h2>Software engineer</h2>
        </div>
      </div>
      <div id="conteneur-about">
        <div class="about">
          <div class="profil-photo">
            <img src="photos/pf.png">
          </div>
          <div class="profil-text">
            <h2>About</h2>
            <p>
            As a passionate and dedicated software engineering student, I am driven by a deep curiosity for technology and its potential to transform the world. With a strong foundation in programming languages and software development principles, I strive to create innovative and efficient solutions to complex problems.
            </p>
            <a href="cv/MSCV.pdf">Download CV</a>
          </div>
          <div class="clear">
          </div>
        </div>
      </div>
      <div id="conteneur-skills">
        <div class="skills">
          <div class="title">
            <h2>Skills</h2>
             <p>
             I possess a diverse range of skills in web development that enable me to create engaging and user-friendly websites. With a solid foundation in HTML, CSS, and JavaScript, I can bring designs to life and ensure seamless functionality across different browsers and devices.
            </p>
          </div>
          <div class="bardiv">
            <h3>HTML</h3>
            <div class="progressbar">
              <span class="html"></span>
            </div>
            <h3>CSS</h3>
            <div class="progressbar">
              <span class="css"></span>
            </div>
            <h3>JavaScript</h3>
            <div class="progressbar">
              <span class="javascript"></span>
            </div>
            <h3>PHP</h3>
            <div class="progressbar">
              <span class="php"></span>
            </div>
            <h3>SQL</h3>
            <div class="progressbar">
              <span class="sql"></span>
            </div>
          </div>
        </div>
      </div>
      <div id="conteneur-qualification">
         <div class="qualification">
            <h2>Qualification</h2>
            <div class="lastqualification">
              <h3>Software Engineer - Shenkar, Ramat Gan</h3>
              <h4>2021 - present</h4>
            </div>


        </div>
      </div>
      <div id="conteneur-portfolio">
        <div class="portfolio">
        <h2>Portfolio</h2>
      <div class="port-box">
      <?php 
    while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="conteneur-miniature-box">';
        $url = $row["prog_url"];
        $img = $row["prog_img"];
        echo '<h3>'.$row["prog_name"].'</h3>';
        echo '<img class="miniature-portfolio" src="'.$img.'">';
        echo'
        <a href="'.$url.'">Github</a></div>';
    }

                ?>
</div></div></div>
        <div class="clear"></div>
</div>
      </div>
      <div id="conteneur-contact">
        <div class="contact">
          <h2>CONTACT</h2>
            <h3><a href="https://github.com/MoranSin">Github</a></h3>
            <h3><a href="https://www.linkedin.com/in/moran-sinai-95467a223">Linkedin</a></h3>
            <h3><a href="mailto:nurixhbh@gmail.com">nurixhbh@gmail.com</a></h3>
        </div>
      </div>
      <div id="conteneur-footer">
        <div class="footer">
          <a href="https://www.shenkar.ac.il/he/departments/engineering-software-department">תואר ראשון בהנדסת תוכנה בשנקר</a>
        </div>
      </div>
    </div>
</body>
</html>