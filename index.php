<?php

require_once 'classes/Messages.php';

//Udskriver teksten hvis der er maks 255 tegn ellers fanger den exception
try {
    echo Messages::print_tinytext("Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, voluptate cum! Sapiente est sit aliquam maxime, ut explicabo temporibus quo maiores incidunt rerum repellat assumenda non quasi pariatur accusantium nihil Lorem, ips");
} catch(Exception $e) {
    echo $e->getMessage();
}
