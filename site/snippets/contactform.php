<?php

$form = new contactform(array(
  'to'       => 'Thomas <thomas.schertenleib@gmail.com>',
  'from'     => 'Contact Form <contact@yourdomain.com>',
  'subject'  => 'Anfrage von Binzenhof.ch',
  'goto'     => $page->url() . '/status:thank-you'
  ));

  ?>
  <section id="contactform">

    <?php if(param('status') == 'thank-you'): ?>

    <h1>Vielen Dank für Ihre Anfrage.</h1>
    <p class="contactform-text">Wir werden uns so schnell wie möglih bei Ihnen melden</p>

  <?php else: ?>


  <form action="#contactform" method="post">


<fieldset>

  <?php if($form->isError('send')): ?>
      <div class="contactform-alert">Die Mail konnte nicht gesendet werden. Bitte versuchen sie es später noch einmal.</div>
  <?php elseif($form->isError()): ?>
    <div class="contactform-alert">Die Mail konnte nicht gesendet werden. Bitte füllen sie alle Felder richtig aus.</div>
  <?php endif ?>

  <div class="form-style-6">  

    <div class="contactform-field<?php if($form->isError('name')) echo ' error' ?>">
      <label class="contactform-label" for="contactform-name"><?php if($form->isRequired('name')) ?> <?php if($form->isError('name')): ?><small>Bitte den Namen angeben</small><?php endif ?></label>
      <input class="contactform-input" type="text" id="contactform-name" name="name"  placeholder="Dein Name" value="<?php echo $form->htmlValue('name') ?>" />
    </div>

    <div class="contactform-field<?php if($form->isError('email')) echo ' error' ?>">
      <label class="contactform-label" for="contactform-email"><?php if($form->isRequired('email')) ?> <?php if($form->isError('email')): ?><small>Bitte eine richtige Email angeben</small><?php endif ?></label>
      <input class="contactform-input" type="text" id="contactform-email" name="email" placeholder="Deine Email Addresse" value="<?php echo $form->htmlValue('email') ?>" />
    </div>

    <div class="contactform-field<?php if($form->isError('text')) echo ' error' ?>">
      <label class="contactform-label" for="contactform-text"><?php if($form->isRequired('text'))?> <?php if($form->isError('text')): ?><small>Bitte Text eingeben</small><?php endif ?></label>
      <textarea class="contactform-input" name="text" placeholder="Schreibe uns eine Nachricht ..." id="contactform-text"><?php echo $form->htmlValue('text') ?></textarea>
    </div>


    <input class="contactform-button" type="submit" name="submit" value="Send" />

  </div>

</fieldset>


</form>

<?php endif ?>

</section>
