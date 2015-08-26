<?php

return function($site, $pages, $page) {

   $form = uniform('contact-form', array(
         'required' => array('_from' => 'email'),
         'actions'  => array(
            array(
               '_action' => 'email',
               'to'      => 'thomas.schertenleib@gmail.com',
                // will simply send an email with the form data 
                // to the address specified in to. 
               'sender'  => 'thomas.schertenleib@gmail.com',
				// The sender of the email should be an email address 
				// belonging to the server that hosts your website, since 
				// it is the one dispatching the email.
            )
         )
      )
   );

   return compact('form');
};



