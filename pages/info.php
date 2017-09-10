<html>
  <head>
    <!-- map -->
    <script>
    //MAP
    function myMap() {
      var contentString =
      '<div class="popup">'+
        '<h2 style="border-bottom: #ef645e solid 1px" id="zac e Tac">Zac e Tac</h2>'+
        '<p><b>via Ezio Maccani, 36 Trento</b></p>'+
        '<p><b>Tel: </b>0461 093777</p>'+
      '</div>';

      var infowindow = new google.maps.InfoWindow({
        content: contentString,
        maxWidth: 230,
        maxHeight: 300,
      });

      var mapCanvas = document.getElementById("map");
      var myCenter = new google.maps.LatLng(46.081993,11.115949);
      var mapOptions = {center: myCenter, zoom: 17};
      var map = new google.maps.Map(mapCanvas,mapOptions);
      var marker = new google.maps.Marker({
        position: myCenter,
        map: map,
        title: 'Zac e Tac'
      });

      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
      });
      setTimeout(function(){ infowindow.open(map,marker);}, 2000);
    }




    </script>
  </head>
  <body>

    <?php
      include "navigation.html";
    ?>



    <!-- ####################################################################-->
    <!-- INFO -->
    <section id="section_info">
      <div class="container-fluid">
        <!-- ORARI -->
        <div class="col-md-6" id="orario">
          <div>
            <img src="../images/info/clock.svg" id="clock">
            <div id="contenitoreOrari">
              <div id="giorni">
                <p>Lunedì:</p>
                <p>Martedì:</p>
                <p>Mercoledì:</p>
                <p>Giovedì:</p>
                <p>Venerdì:</p>
                <p>Sabato:</p>
                <p>Domenica:</p>
              </div>
              <div id="ora">
                <p>11:00 - 14:30 & 17:30 - 22:00</p>
                <p>11:00 - 14:30 & 17:30 - 22:00</p>
                <p>11:00 - 14:30 & 17:30 - 22:00</p>
                <p>11:00 - 14:30 & 17:30 - 22:00</p>
                <p>11:00 - 14:30 & 17:30 - 22:00</p>
                <p>11:00 - 14:30 & 17:30 - 22:00</p>
                <p>17:00 - 22:00</p>
              </div>
            </div>
            <img src="../images/info/open.svg" id="aperto">
            <img src="../images/info/closed.svg" id="chiuso">
            <script>
              var date = new Date();
              var day = date.getDay();
              var hour = date.getHours();
              var minute = date.getMinutes();
              var stato = false;
              switch (day) {
                case 0://Domenica
                  if(hour>=17 && hour<=22){
                    stato = true;
                  }
                  break;
                default://lunedì - sabato
                  if(hour>=11 && hour<15){
                    if(hour==14){
                      if(minute<=30){
                        stato = true;
                      }
                    }
                    stato = true;
                  }else if(hour>=17 && hour<=22){
                    if(hour==17){
                      if(minute>=30){
                        stato = true;
                      }
                    }
                    stato = true;
                  }
                  break;

              }
              if(stato){
                document.getElementById('aperto').className+="active";
              }else{
                document.getElementById('chiuso').className+="active";
              }
            </script>
          </div>
        </div>
        <!-- MAP -->
        <div class="col-md-6" id="mappa">
          <h3 class="titolo_pagina" style="margin-bottom: 0px!important; margin-top: 0!important;">Dove trovarci</h3>
          <div id="map" style="width:100%;height:400px;"></div>
        </div>
      </div>
    </section>
    <footer id="footer_container">
      <div class="container">
        <div id="footer_content">
          <div id="num_telefono">
            <img src="../images/footer/phone.svg">
            <a>0461 093777</a>
          </div>
          <div id="indirizzo">
            <img src="../images/footer/map-location.svg">
            <h3>via Ezio Maccani, 36 Trento</h3>
          </div>
          <h3 class="titolo_pagina" style="color:white">La qualità vince sempre</h3>
          <div id="social_media_button">
            <div class="rotate_container" id="facebook">
              <a href="#"><img src="../images/footer/facebook-logo.svg"></a>
            </div>
            <div id="justeat">
              <a href="#"><img class="rotate_container" src="../images/ordina/just_eat_logo.png"></a>
            </div>
            <div class="rotate_container" id="tripadvisor">
              <a href=""><img src="../images/footer/tripadvisor.png"></a>
            </div>
          </div>

          <p id="copyright">Copyright © 2017 Paolo Tasin ®</p>
        </div>
      </div>
    </footer>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBW77IAmTY5jobCLwzv_t0KvquLIBp4WaY&callback=myMap" async defer></script>
  </body>
  <script>
    AOS.init();

  </script>
</html>
