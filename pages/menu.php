<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- SLIDE -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.7.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.7.1/slick/slick-theme.css"/>
  </head>
  <script>
  $(document).ready(function () {
    //click categories menu active
    $('#categoria-menu li a').on('click', function (e) {
      e.preventDefault();
      $('#categoria-menu li a').each(function () {
          var currLink = $(this);
          var refElement = $(currLink.attr("href"));
          $('.responsive.active').slick('unslick');
          refElement.removeClass('active');
          $(this).removeClass('active');
      })
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        refElement.addClass('active');
        $(this).addClass('active');
        $('.responsive.active').slick({
          dots: true,
          infinite: false,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll:3,
          responsive: [
            {
                breakpoint: 1180,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2,
                  infinite: true,
                  dots: true
                }
              },
              {
                breakpoint: 650,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }

            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        });
      });
    });
  </script>
  <body style="background-image: url(../images/menu/texture-carta.jpg);">
    <?php
      include "navigation.html";
    ?>
    <!-- ####################################################################-->
    <!--VERSIONE DESKTOP-->

    <section id="section_menu">

        <nav id="categoria-menu">
          <ul>
            <li><a id="pizza-icon" class="active" href="#categoria-pizza"></a></li>
            <li><a id="panino-icon" href="#categoria-panino"></a></li>
            <li><a id="fritto-icon" href="#categoria-fritto"></a></li>
            <li><a id="bibite-icon" href="#categoria-bibite"></a></li>
          </ul>

        </nav>
          <!-- PIZZA -->
          <div class="responsive" id="categoria-pizza">
            <!--1 PIZZA-->
            <div class="riga">
              <div class="titolo-categoria">Pizze classiche</div>
                <div class="colonna">
                  <h3 class="titolo">1. marinara<span class="prezzo"> 4,40€</span></h3>
                  <p class="descrizione">Pomodoro - Aglio - Origano</p>
                </div>
                <div class="colonna">
                  <h3 class="titolo">2. napoli<span class="prezzo"> 5,50€</span></h3>
                  <p class="descrizione">Pomodoro - Mozzarella - Acciughe - Origano</p>
                </div>
                <div class="colonna">
                  <h3 class="titolo">3. margherita<span class="prezzo"> 5,00€</span></h3>
                  <p class="descrizione">Pomodoro - Mozzarella</p>
                </div>
                <div class="colonna">
                  <h3 class="titolo">4. pioggia<span class="prezzo"> 5,50€</span></h3>
                  <p class="descrizione">Pomodoro - Doppia mozzarella</p>
                </div>
                <div class="colonna">
                  <h3 class="titolo">5. viennese<span class="prezzo"> 6,00€</span></h3>
                  <p class="descrizione">Pomodoro - Mozzarella -  W&uuml;rstel</p>
                </div>
            </div>


            <div class="riga">
              <div class="titolo-categoria invisibile"></div>
                <div class="colonna">
                  <h3 class="titolo">6. prataiola<span class="prezzo"> 6,50€</span></h3>
                  <p class="descrizione">Pomodoro - Mozzarella - Pomodorini - Funghi - Aglio - Origano</p>
                </div>
                <div class="colonna">
                  <h3 class="titolo">7. romana<span class="prezzo"> 6,00€</span></h3>
                  <p class="descrizione">Pomodoro - Mozzarella - Acciughe - Capperi - Origano</p>
                </div>
                <div class="colonna">
                  <h3 class="titolo">8. tonno e cipolle<span class="prezzo"> 6,50€</span></h3>
                  <p class="descrizione">Pomodoro - Mozzarella - Tonno - Cipolle</p>
                </div>
                <div class="colonna">
                  <h3 class="titolo">9. prosciutto e funghi<span class="prezzo"> 6,50€</span></h3>
                  <p class="descrizione">Pomodoro - Mozzarella - Prosciutto - Funghi</p>
                </div>
                <div class="colonna">
                  <h3 class="titolo">10. diavola<span class="prezzo"> 6,50€</span></h3>
                  <p class="descrizione">Pomodoro - Mozzarella - Salamino piccante</p>
                </div>
            </div>

            <div class="riga">
              <div class="titolo-categoria invisibile"></div>
                <div class="colonna">
                  <h3 class="titolo">11. crudo e rucola<span class="prezzo"> 6,80€</span></h3>
                  <p class="descrizione">Pomodoro - Mozzarella - Crudo - Rucola</p>
                </div>
                <div class="colonna">
                  <h3 class="titolo">12. capricciosa<span class="prezzo"> 6,80€</span></h3>
                  <p class="descrizione">Pomodoro - Mozzarella - Prosciutto - Carciofi - Funghi</p>
                </div>
                <div class="colonna">
                  <h3 class="titolo">13. 4 stagioni<span class="prezzo"> 6,80€</span></h3>
                  <p class="descrizione">Pomodoro - Mozzarella - Prosciutto - Carciofi - Funghi - Olive</p>
                </div>
                <div class="colonna">
                  <h3 class="titolo">14. verdure<span class="prezzo"> 6,00€</span></h3>
                  <p class="descrizione">Pomodoro - Mozzarella - Melanzane - Zucchine - Peperoni - Pomodorini</p>
                </div>
                <div class="colonna">
                  <h3 class="titolo">15. calzone<span class="prezzo"> 6,80€</span></h3>
                  <p class="descrizione">Pomodoro - Mozzarella - Prosciutto - Funghi - Ricotta</p>
                </div>
            </div>
            <!--2 PIZZA-->
              <div class="riga">
                <div class="titolo-categoria">Pizze Bianche</div>
                  <div class="colonna">
                    <h3 class="titolo">16. calabrese<span class="prezzo"> 4,80€</span></h3>
                    <p class="descrizione">Doppia mozzarella - Aglio - Peperoncino</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">17. gamberetti<span class="prezzo"> 7,00€</span></h3>
                    <p class="descrizione">Mozzarella - Aglio - Gamberetti - Rucola</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">18. ai formaggi<span class="prezzo"> 6,80€</span></h3>
                    <p class="descrizione">Mozzarella - Formaggi vari</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">19. carbonara<span class="prezzo"> 7,00€</span></h3>
                    <p class="descrizione">Pomodoro - Doppia mozzarella</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">20. inverno<span class="prezzo"> 6,80€</span></h3>
                    <p class="descrizione">Mozzarella - Aglio - Patate - Pancetta - Grana</p>
                  </div>
              </div>

              <div class="riga">
                <div class="titolo-categoria invisibile"></div>
                  <div class="colonna">
                    <h3 class="titolo">21. mario<span class="prezzo"> 7,00€</span></h3>
                    <p class="descrizione">Mozzarella - Aglio - Scamorza - Peperoncino - Pancetta - Grana</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">22. gustosa<span class="prezzo"> 6,80€</span></h3>
                    <p class="descrizione">Mozzarella - Gorgonzola - Porro - Pomodorini</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">23. delicata<span class="prezzo"> 7,00€</span></h3>
                    <p class="descrizione">Mozzarella - Brie - Rucola - Crudo</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">24. alpina<span class="prezzo"> 7,00€</span></h3>
                    <p class="descrizione">Mozzarella - Gorgonzola - Radicchio - Porcini - Speck Julienne</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">25. campagna<span class="prezzo"> 6,80€</span></h3>
                    <p class="descrizione">Mozzarella - Friarielli - Lucanica</p>
                  </div>
              </div>
              <div class="riga">
                <div class="titolo-categoria invisibile"></div>
                  <div class="colonna">
                    <h3 class="titolo">26. cestino verde<span class="prezzo"> 6,80€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Spinaci - Ricotta - Melanzane - Zucchine - Grana</p>
                  </div>
              </div>

            <!--3 PIZZA-->


              <div class="riga">
                <div class="titolo-categoria">Pizze particolari</div>
                  <div class="colonna">
                    <h3 class="titolo">27. boscaiola<span class="prezzo"> 7,00€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Funghi misti - Speck Julienne - Grana</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">28. fattoria<span class="prezzo"> 7,00€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Finferli - Lucanica - Grana</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">29. francese<span class="prezzo"> 6,80€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Radicchio - Gorgonzola - Noci</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">30. noci<span class="prezzo"> 7,00€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Radicchio - Gorgonzola - Noci</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">31. buongustaia<span class="prezzo"> 7,00€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Radicchio - Gorgonzola - Noci</p>
                  </div>
              </div>

              <div class="riga">
                <div class="titolo-categoria invisibile"></div>
                  <div class="colonna">
                    <h3 class="titolo">32. deliziosa<span class="prezzo"> 6,80€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Stracchino - Pomodorini - Rucola</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">33. genovese<span class="prezzo"> 6,80€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Gorgonzola - Olive - Pesto</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">34. bufala<span class="prezzo"> 6,80€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella di Bufala - Pomodorini - Pesto</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">35. rustica<span class="prezzo"> 7,00€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Scamorza - Speck a fette</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">36. valtellina<span class="prezzo"> 7,00€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Rucola - Bresaola - Grana</p>
                  </div>
              </div>

              <div class="riga">
                <div class="titolo-categoria invisibile"></div>
                  <div class="colonna">
                    <h3 class="titolo">37. italia<span class="prezzo"> 6,00€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Spinaci - Ricotta</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">38. trevisana<span class="prezzo"> 7,00€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Radicchio - Pancetta - Grana</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">39. nordica<span class="prezzo"> 6,00€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Prosciutto - Salamino - Lucanica - W&uuml;rstel</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">40. poderosa<span class="prezzo"> 7,00€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Salame - W&uuml;rstel - Cipolla - Peperoncino - Spezie</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">41. n'duia<span class="prezzo"> 7,00€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Salame - N'Duia - Grana</p>
                  </div>
              </div>
            </div>
          </div>
          <!-- PANINO -->
          <div class="responsive" id="categoria-panino">
              <div class="riga">
                <div class="titolo-categoria">Panini</div>
                  <div class="colonna">
                    <h3 class="titolo">42. napoli<span class="prezzo"> 4,40€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Pancetta - Prosciutto - Scamorza - Grana</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">43.romano<span class="prezzo"> 4,40€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Mortadella - Prosciutto - Cipolla - Fontina</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">44. siciliano<span class="prezzo"> 4,40€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Melanzane piccanti - Olive - Tonno</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">45. trentino<span class="prezzo"> 4,40€</span></h3>
                    <p class="descrizione">Pomodoro - Mozzarella - Crauti - Lucanica - Pancetta - W&uuml;rstel</p>
                  </div>
              </div>
          </div>
          <!-- FRITTO -->
          <div class="responsive" id="categoria-fritto">
            <!-- 1 FRITTO -->
              <div class="riga">
                <div class="titolo-categoria" id="fritto">Friggitoria</div>
                  <div class="colonna">
                    <h3 class="titolo">46. crocchette di patate<span class="prezzo"> 2,00€</span></h3>
                    <p class="descrizione">Preparato per crocchette con ripieno di prosciutto e mozzarella.</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">47. Mozzarella in carrozza<span class="prezzo"> 2,80€</span></h3>
                    <p class="descrizione">Pancarrè - Besciamella - Prosciutto - Mozzarella</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">48. olive all'ascolana<span class="prezzo"> 2,80€</span></h3>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">49. mozzarelle ripiene<span class="prezzo"> 2,50€</span></h3>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">50. patate fritte<span class="prezzo"> 2,00€</span></h3>
                  </div>
              </div>

              <div class="riga">
                <div class="titolo-categoria invisibile"></div>
                  <div class="colonna">
                    <h3 class="titolo">51. crespelline<span class="prezzo"> 18,00€/kg</span></h3>
                    <p class="descrizione">Ripiene di acciughe con origano o prosciutto e ricotta o rucola e ricotta</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">52. Calzoncino Fritto<span class="prezzo"> 2,80€</span></h3>
                    <p class="descrizione">Ripieno di pomodoro, mozzarella e grana</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">53. misto fritto<span class="prezzo"> 9,00€</span></h3>
                    <p class="descrizione">Misto dei nostri fritti</p>
                  </div>
              </div>

              <div class="riga">
                <div class="titolo-categoria">arancini</div>
                  <div class="colonna">
                    <h3 class="titolo">54. arancino tradizionale<span class="prezzo"> 2,30€</span></h3>
                    <p class="descrizione">Risotto allo zafferano con ripieno di ragù e mozzarella.</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">55. arancino calabro<span class="prezzo"> 2,30€</span></h3>
                    <p class="descrizione">Risotto all'Harissa con ripieno di ragù, mozzarella e n'duja.</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">56. arancino ai formaggi<span class="prezzo"> 2,30€</span></h3>
                    <p class="descrizione">Risotto bianco con ripieno di fontina, mozzarella, gorgonzola e grana.</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">57. arancino mediterraneo<span class="prezzo"> 2,30€</span></h3>
                    <p class="descrizione">Risotto allo zafferano con ripieno di melanzane, scamorza, prosciutto e mozzarella.</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">58. arancino zac e tac<span class="prezzo"> 2,30€</span></h3>
                    <p class="descrizione">Risotto allo zafferano con ripieno di prosciutto e mozzarella</p>
                  </div>
              </div>
            <!-- 3 FRITTO -->
              <div class="riga">
                <div class="titolo-categoria" style="font-size: 29px;">tortillas mexicanas</div>
                  <div class="colonna">
                    <h3 class="titolo">59. tacos<span class="prezzo"> 2,30€</span></h3>
                    <p class="descrizione">Ragù - Fagioli - Cipolla - Peperoni - Mais - Peperoncino</p>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">60. burritos<span class="prezzo"> 2,30€</span></h3>
                    <p class="descrizione">Pollo - Cipolla - Carote - Piselli - Peperoni - Mais</p>
                  </div>
              </div>
            </div>
          <!-- BIBITE -->
          <div class="responsive" id="categoria-bibite">
              <div class="riga">
                <div class="titolo-categoria">Bibite</div>
                  <div class="colonna">
                    <h3 class="titolo">bibite lattina<span class="prezzo piccola"> 1,70€</span><span class="prezzo grande">2,20€</span></h3>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">bibite bottiglia<span class="prezzo piccola"> 2,20€</span><span class="prezzo grande">4,40€</span></h3>
                  </div>
                  <div class="colonna">
                    <h3 class="titolo">acqua<span class="prezzo"> 1,00€</span></h3>
                  </div>
              </div>

        </div>
      </div>
    </section>
    <?php
      include "footer.html";
    ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.7.1/slick/slick.min.js"></script>
    <script>
      AOS.init();
      $('#categoria-pizza').addClass('active');
      $('.responsive.active').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
          {
            breakpoint: 1180,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 650,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    </script>
  </body>
</html>
