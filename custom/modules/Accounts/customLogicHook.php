<?php

    class hookExample
    {
        /*
          A basic logic hook example
          @author  Hasan Ghazzawi
          @version 1.0 21/4/2016
        */
        function hookMethod($bean, $event, $arguments)
        {
            $bean->load_relationship('contacts');
            foreach($bean->contacts as $contact){
              $contact->description="this works";
              $contact->save(false);
            }

        }
    }
?>
