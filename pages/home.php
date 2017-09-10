<meta name="viewport" content="initial-scale=1"/>
<html>
  <body>
    <?php
      include "navigation.html";
    ?>
    <section id="section_home">
      <div class="parallax" id="parallax_pizza">
        <img id="logoZac" src="../images/home/Logo-Zac-e-Tac.svg">

        <div class="container" id="contenitoreMobile">
          <div class="contenutoMobile" id="menu" onclick="window.location='menu.php';">
            <img src="../images/home/menuHome.jpg" alt="">
            <h3>MENU</h3>
          </div>
          <div class="contenutoMobile" id="facebookHome">
            <a href="https://www.facebook.com/PizzeriaZacETac/"><img src="../images/footer/facebook-logo.svg"></a>
          </div>
          <div class="contenutoMobile">
            <a href="https://www.justeat.it/restaurants-pizzeriazacetac/menu"><img id="justeatLogo" src="../images/ordina/just_eat_logo.png"></a>
          </div>
          <div class="contenutoMobile" id="dove_siamo" onclick="window.location='info.php';">
            <img src="../images/home/dove_siamo.jpg" alt="">
            <h3>INFO</h3>
          </div>
    </section>
    <?php
      include "footer.html";
    ?>
  </body>
</html>
