<?php

require_once 'classes/Messages.php';

//Prints text if max amount of letters is 255 or cataches the exception
try {
    echo Messages::print_tinytext("Lorem ipsum dolor sit amet");
} catch(Exception $e) {
    echo "Fejl: " .$e->getMessage();
}
