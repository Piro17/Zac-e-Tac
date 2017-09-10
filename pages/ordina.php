<html>
  <body>
    <?php
      include "navigation.html";
    ?>
    <!-- ####################################################################-->
    <!-- ORDINA -->
    <section id="section_ordina">
      <div class="container">
        <div style="text-align:center">
          <!-- JUST EAT -->
          <div class="card" id="just_eat" onclick="window.location='https://www.justeat.it/restaurants-pizzeriazacetac/menu';">
            <img class="card-img-top ordina_images" src="../images/ordina/just_eat_logo.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Just Eat</h4>
              <p class="card-text">Ordina in modo semplice ed immediato utilizzando l'applicazione Just Eat. </p>
              <a href="https://www.justeat.it/restaurants-pizzeriazacetac/menu" class="btn btn-primary">Comincia ad ordinare</a>
            </div>
          </div>

          <div class="card" id="scooter" >
            <img class="card-img-top ordina_images" src="../images/ordina/s1.svg" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Chiama Zac e Tac</h4>
              <p class="card-text">Ordina telefonando direttamente alla pizzeria Zac e Tac.</p>
              <a href="" class="btn btn-primary"><img src="../images/footer/phone.svg" style="width: 23; margin-right: 5;">Clicca per chiamare</a>
            </div>
          </div>
        </div>
      </div>


      <?php
        include "../images/ordina/consegnaAnimazione.html";
      ?>
    </section>
    <?php
      include "footer.html";
    ?>
  </body>
</html>
<script>
  AOS.init();
</script>
