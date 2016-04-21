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
            $bean->description="this works";
        }
    }
?>
