  <section class="inhalt-unterseiten">

    <div class="abstand-oben"></div>

    <div class="text">
      <div class="uebertext-titel">
        <h1><?php echo $page->title()->html() ?></h1>
      </div>
      <div class="uebertext">
        <p><?php echo $page->text()->kirbytext() ?></p>
      </div>
    </div>

    <?php $counter=0; ?> 
    <?php foreach($page->children() as $child): $counter++; ?>     
    <?php if ($counter % 2 > 0) { ?> 
    <div class="portraits">
      <div class="portraits-container">
        <div class="img-container"> 
          <?php foreach($child->images() as $image): ?>
          <img src="<?php echo $image->url() ?>" alt="">
        <?php endforeach ?> 
      </div> 

      <div class="angaben-container">
        <h2 class="name"><?php echo html($child->name())?></h2></br>
        <p class="angaben"><strong>Beruf: </strong><?php echo html($child->beruf()) ?></p></br> 
        <p class="angaben"><strong>Aufgaben: </strong><?php echo html($child->aufgaben()) ?></p></br> 
        <p class="angaben"><strong>Freihzeit: </strong><?php echo html($child->freihzeit()) ?></p>
      </div>
    </div>
    <?php } ?>


    <?php if ($counter % 2 == 0) { ?> 
    <div class="portraits-container">
      <div class="angaben-container">
        <h2 class="name"><?php echo html($child->name())?></h2></br>
        <p class="angaben"><strong>Beruf: </strong><?php echo html($child->beruf()) ?></p></br> 
        <p class="angaben"><strong>Aufgaben: </strong><?php echo html($child->aufgaben()) ?></p></br> 
        <p class="angaben"><strong>Freihzeit: </strong><?php echo html($child->freihzeit()) ?></p>
      </div>
      <div class="img-container"> 
          <?php foreach($child->images() as $image): ?>
          <img src="<?php echo $image->url() ?>" alt="">
        <?php endforeach ?> 
      </div> 
    </div>
  </div>
  <?php } ?>
<?php endforeach ?>

</section>

<div class="zitat">
  <h1>„Wir sind auf dem Binzenhof zuhause und führen voller Leidenschaft unseren Landwirtschaftsbetrieb.“</h1>
  <h6>Peter Knörr</h6>
</div>

