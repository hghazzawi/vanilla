<?php
    class hookExample
    {
        function hookMethod($bean, $event, $arguments)
        {
            $bean->description="this works";
        }
    }
?>
