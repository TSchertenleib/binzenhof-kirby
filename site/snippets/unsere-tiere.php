    <section class="inhalt-unterseiten">

      <div class="abstand-oben"></div>

      <div class="text">
        <div class="uebertext-titel">
          <h1><h1><?php echo $page->title()->html() ?></h1></h1>
        </div>
        <div class="uebertext">
          <p> <?php echo $page->text()->kirbytext() ?></p>
        </div>
      </div>

      <div class="grau-container">

        <div class="slider-container">  
          <div class="slider">
            <div class="site-slider is-active" id="kuehe">
          <?php foreach($page->children() as $kuehe):  ?>  
                <?php foreach($kuehe->images() as $image) : ?>
                  <div><img src="<?php echo $image->url() ?>" alt=""></div>
                <?php endforeach; ?>
          <?php endforeach ?>

        </div>

        <div class="site-slider" id="pferde">
          <?php foreach($page->children() as $pferde):  ?>  
                <?php foreach($pferde->images() as $image) : ?>
                  <div><img src="<?php echo $image->url() ?>" alt=""></div>
                <?php endforeach; ?>
          <?php endforeach ?>
        </div>

        <div class="site-slider" id="ziege">
          <?php foreach($page->children() as $ziege):  ?>  
                <?php foreach($ziege->images() as $image) : ?>
                  <div><img src="<?php echo $image->url() ?>" alt=""></div>
                <?php endforeach; ?>
          <?php endforeach ?>

        </div>      

        <div class="site-slider" id="huehner">
          <?php foreach($page->children() as $huehner): ?>  
                <?php foreach($huehner->images() as $image) : ?>
                  <div><img src="<?php echo $image->url() ?>" alt=""></div>
                <?php endforeach; ?>
          <?php endforeach ?>

        </div>  

        <div class="site-slider" id="hund">
          <?php foreach($page->children() as $hund):  ?>  
                <?php foreach($hund->images() as $image) : ?>
                  <div><img src="<?php echo $image->url() ?>" alt=""></div>
                <?php endforeach; ?>
          <?php endforeach ?>

        </div>    

        <div class="site-slider" id="katze">
          <?php foreach($page->children() as $katze): ; ?>  
                <?php foreach($katze->images() as $image) : ?>
                  <div><img src="<?php echo $image->url() ?>" alt=""></div>
                <?php endforeach; ?>
          <?php endforeach ?>
        </div>      
        <div class="site-slider" id="meerschweinchen">
          <?php foreach($page->children() as $meerschweinchen):  ?>  
                  <?php foreach($meerschweinchen->images() as $image) : ?>
                    <div><img src="<?php echo $image->url() ?>" alt=""></div>
                  <?php endforeach; ?>
          <?php endforeach ?>
        </div>  
        <div class="site-slider" id="schweine">
          <?php foreach($page->children() as $schweine):  ?>  
                  <?php foreach($schweine->images() as $image) : ?>
                    <div><img src="<?php echo $image->url() ?>" alt=""></div>
                <?php endforeach; ?>
          <?php endforeach ?>
        </div>      
      </div>

      <div class="tiere-container">
        <div class="tiere-ueberflex">
          <div class="tiere-flex effect2">  
            <div class="thumb" data-sliderId="kuehe">
              <img src="assets/media/tiere-slider/kuehe/kuehe.jpg"/>

              <div class="mask2"></div><h3 class="slider-titel">Kühe</h3>
            </div>  
          </div>        
          <div class="tiere-flex effect2">  
            <div class="thumb" data-sliderId="pferde" data-content="Pferde">
              <img src="assets/media/tiere-slider/pferde/pferde.jpg"/>

              <div class="mask2"></div><h3 class="slider-titel">Pferde</h3>
            </div>
          </div>  
          <div class="tiere-flex effect2">  
            <div class="thumb" data-sliderId="ziege">
              <img src="assets/media/tiere-slider/ziege/ziege.jpg"/>

              <div class="mask2"></div><h3 class="slider-titel">Ziegen</h3>
            </div>
          </div>
          <div class="tiere-flex effect2">          
            <div class="thumb" data-sliderId="huehner">
              <img src="assets/media/tiere-slider/huehner/huehner.jpg"/> 


              <div class="mask2"></div><h3 class="slider-titel">Hühner</h3>
            </div>
          </div>  

          <div class="tiere-flex effect2">  
            <div class="thumb" data-sliderId="hund">
              <img src="assets/media/tiere-slider/hund/hund.jpg"/>

              <div class="mask2"></div><h3 class="slider-titel">Hund</h3>
            </div>
          </div>  

          <div class="tiere-flex effect2">  
            <div class="thumb" data-sliderId="katze">
              <img src="assets/media/tiere-slider/katze/katze.jpg"/>

              <div class="mask2"></div><h3 class="slider-titel">Katzen</h3>
            </div>
          </div>
          <div class="tiere-flex effect2">

            <div class="thumb" data-sliderId="meerschweinchen">
              <img src="assets/media/tiere-slider/meerschweinchen/meerschweinchen.jpg"/>
              <div class="mask2"></div><h3 class="slider-titel">Nager</h3>

            </div>
          </div>
          <div class="tiere-flex effect2">

            <div class="thumb" data-sliderId="schweine">
              <img src="assets/media/tiere-slider/schweine/schweine.jpg"/>
              <div class="mask2"></div><h3 class="slider-titel">Schweine</h3>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>




</section>

<div class="zitat">
  <h1>„Wir haben ein sehr inniges Verhältnis zu unseren Tieren, jedes hat seinen eigenen  Charakter und ist ein Teil unserer Familie.“</h1>
  <h6>Peter Knörr</h6>
</div>