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

          <div class="form-style-6">

            <form method="post" name="contactform" action="kontakt-form-handler.php">
            <!--  <label for='name'></label> -->
              <input type="text" name="name" placeholder="Dein Name" />
            <!--  <label for='email'></label> -->
              <input type="text" name="email" placeholder="Deine Email Addresse" />
            <!--  <label for='message'></label>  -->
              <textarea name="message" placeholder="Schreibe uns eine Nachricht ..."></textarea>
              <input type="submit" value="Submit" />
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
             <a class="mail" href="mailto:thomas.schertenleib@gmail.com?Subject=Binzenhof" target="_top">info@binzenhof.ch</a>
          </p>
          </div>
        </div>
      </div>




      <div class="zitat">
        <h1>„Unsere ganze Familie und alle unsere Angestellten freuen sich darauf Sie auf dem Binzenhof verwöhnen zu dürfen.“</h1>
        <h6>Susanne Knörr</h6>
      </div>

