  <section class="inhalt-unterseiten">
      <img class="ueberbild" src="assets/media/images/ueberbild_laedeli.png" alt="Lädeli">
      <div class="text">
        <div class="uebertext-titel">
          <h1><?php echo $page->title()->html() ?></h1>
        </div>
        <div class="uebertext">
          <p><?php echo $page->text()->kirbytext() ?></p>
        </div>
      </div>

      <div class="grau-container">

        <div class="text">
          <h3>UNSER ANGEBOT</h3>
          <div class="uebertext">
            <p><?php echo $page->unser_angebot_text()->kirbytext() ?></p>
          </div>

          <div class="slider-container">  
              <div class="site-slider is-active">
              <?php foreach($page->images() as $image) : ?>
              <div><img src="<?php echo $image->url('') ?>" alt=""></div>
              <?php endforeach; ?>
              </div>
          </div>    


          <div class="oeffnungszeiten">
            <p><?php echo $page->oeffnungszeiten_text()->kirbytext() ?></p>
          </div>
        </div>
      </div>  


    </section>

    <div class="anfragen">
      <h3>FÜR INFOS ODER BESTELLUNGEN
      </h3>
      <a href="mailto:thomas.schertenleib@gmail.com?Subject=Neue Anfrage von Binzenhof.ch" target="_top">info@binzenhof.ch</a>
    </div>
