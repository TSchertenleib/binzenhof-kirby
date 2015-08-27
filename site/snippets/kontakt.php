  <section class="inhalt-unterseiten">



      <div id="map-canvas"></div>

      <div class="text">
        <div class="uebertext-titel">
            <h1><?php echo $page->title()->html() ?></h1>
        </div>
        <div class="kontakt-text">
          <p><?php echo $page->kontakt_text()->kirbytext() ?></p>
        </div>
      </div>


      <div class="slider">
        <div class="grau-container-kontakt">


        <style type="text/css">
           label {display: block;}
           .erroneous, .error {color: red;}
           .success {color: green;}
        </style>



          <div class="form-style-6"> 

              <form action="<?php echo $page->url()?>#form" method="post">

                 <label<?php e($form->hasError('_from'), ' class="erroneous"')?> for="email"></label>
                 <input type="email" name="_from" id="email" placeholder="Deine Email Addresse" value="<?php $form->echoValue('_from') ?>" required/>

                 <label for="message"></label>
                 <textarea name="message" id="message" placeholder="Schreibe uns eine Nachricht ..."><?php $form->echoValue('message') ?></textarea>

                 <label class="uniform__potty" for="website">Please leave this field blank</label>
                 <input type="text" name="website" id="website" class="uniform__potty" />

              <?php if ($form->hasMessage()): ?>
                 <div class="message <?php e($form->successful(), 'success' , 'error')?>">
                    <?php $form->echoMessage() ?>
                 </div>
              <?php endif; ?>

                 <button class="pure-button pure-button-primary" type="submit" name="_submit" value="<?php echo $form->token() ?>"<?php e($form->successful(), ' disabled')?>>Submit</button>

              </form>

           </div>



          <div class="adresse">
          <p>
            <strong>Adresse:</strong></br>
            Landhausweg 19, 
            5000 Aarau</br></br>

            <strong>Mit der ÖV:</strong></br>
            Mit ÖV ab Bahnhof SBB mit der AAR (WSB) Tram bis Haltestelle Distelberg (1Min. zu Fuss)</br></br>
            
            <strong>Telefon:</strong></br>
            062/ 823 17 28</br></br>

            <strong>Mail:</strong></br>
             <a class="mail" href="mailto:thomas.schertenleib@gmail.com?Subject=Neue Anfrage von Binzenhof.ch" target="_top">info@binzenhof.ch</a>
          </p>
          </div>
        </div>
      </div>




      <div class="zitat">
        <h1>„Unsere ganze Familie und alle unsere Angestellten freuen sich darauf Sie auf dem Binzenhof verwöhnen zu dürfen.“</h1>
        <h6>Susanne Knörr</h6>
      </div>

