    <section class="inhalt-unterseiten">
      <img class="ueberbild" src="assets/media/images/ueberbild_events.png" alt="Events">
      <div class="text">
        <div class="uebertext-titel">
          <h1><?php echo $page->title()->html() ?></h1>
        </div>
        <div class="uebertext">
          <p><?php echo $page->text()->kirbytext() ?></p>
        </div>
      </div>
      <div class="grau-container">
        <div class="slider-container">  
          <div class="slider">

            <div class="site-slider is-active" id="august-brunch">
              <?php foreach($page->find('august-brunch')->images() as $image) : ?>
              <div><img src="<?php echo $image->url('') ?>" alt=""></div>
              <?php endforeach; ?>
            </div>

            <div class="site-slider" id="buure-brunch">
              <?php foreach($page->find('buure-brunch')->images() as $image) : ?>
              <div><img src="<?php echo $image->url('') ?>" alt=""></div>
              <?php endforeach; ?>
            </div>    

            <div class="site-slider" id="vom-grill">
              <?php foreach($page->find('vom-grill')->images() as $image) : ?>
              <div><img src="<?php echo $image->url('') ?>" alt=""></div>
              <?php endforeach; ?>
            </div>

            <div class="site-slider" id="hochzeiten">
              <?php foreach($page->find('hochzeiten')->images() as $image) : ?>
              <div><img src="<?php echo $image->url('') ?>" alt=""></div>
              <?php endforeach; ?>
            </div>

            <div class="site-slider" id="geburtstag">
              <?php foreach($page->find('geburtstage')->images() as $image) : ?>
              <div><img src="<?php echo $image->url('') ?>" alt=""></div>
              <?php endforeach; ?>
            </div>  

            <div class="site-slider" id="taufe">
              <?php foreach($page->find('taufe')->images() as $image) : ?>
              <div><img src="<?php echo $image->url('') ?>" alt=""></div>
              <?php endforeach; ?>
            </div>    
          </div>



          <div class="events-container">
            <div class="events-ueberflex">
              <div class="tiere-flex effect2">  
                <div class="thumb-events" data-sliderId="august-brunch">
                  <img src="assets/media/events-slider/august/august.jpg"/>

                  <div class="mask2"></div><h3 class="slider-titel-events">1 August Brunch</h3>
                </div>  
              </div>        
              <div class="tiere-flex effect2">  
                <div class="thumb-events" data-sliderId="buure-brunch">
                  <img src="assets/media/events-slider/brunch/brunch.jpg"/>

                  <div class="mask2"></div><h3 class="slider-titel-events">Buure Brunch</h3>
                </div>
              </div>  


              <div class="tiere-flex effect2">  
                <div class="thumb-events" data-sliderId="vom-grill">
                  <img src="assets/media/events-slider/vom-grill/grill.jpg"/>

                  <div class="mask2"></div><h3 class="slider-titel-events">Vom Grill</h3>
                </div>  
              </div>        
              <div class="tiere-flex effect2">  
                <div class="thumb-events" data-sliderId="hochzeiten">
                  <img src="assets/media/events-slider/hochzeit/hochzeit.jpg"/>

                  <div class="mask2"></div><h3 class="slider-titel-events">Hochzeiten</h3>
                </div>
              </div>  

              <div class="tiere-flex effect2">  
                <div class="thumb-events" data-sliderId="geburtstag">
                  <img src="assets/media/events-slider/geburtstag/geburtstag.jpg"/>

                  <div class="mask2"></div><h3 class="slider-titel-events">Geburtstag</h3>
                </div>  
              </div>        
              <div class="tiere-flex effect2">  
                <div class="thumb-events" data-sliderId="taufe">
                  <img src="assets/media/events-slider/taufe/taufe.jpg"/>

                  <div class="mask2"></div><h3 class="slider-titel-events">Taufe</h3>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>
          
    <div class="aussendiv">
      <div class="abstand-oben"></div>
    </div>

      <div class="text">
        <div class="uebertext">
          <p><?php echo $page->hofchuchi()->kirbytext() ?></p>
        </div>
      </div>
    </section> 


    <div class="anfragen">
      <h3>FÜR INFOS, UNVERBINDLICHE ANFRAGEN ODER RESERVATIONENE</h3>



      <a class="mail" href="mailto:thomas.schertenleib@gmail.com?Subject=Neue Anfrage von Binzenhof.ch" target="_top">info@binzenhof.ch</a>
    </div>

    </div>