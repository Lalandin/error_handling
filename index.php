<?php

require_once 'classes/Messages.php';

//a try catch finally block for testing if $messages is string or not
try {
    echo Messages::print_message("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat atque, repudiandae debitis consectetur obcaecati id reprehenderit et adipisci a beatae reiciendis perspiciatis libero animi doloremque quidem, rerum, exercitationem soluta minus.") . "<br>";
} catch(InvalidArgumentException $e) {
    echo $e->getMessage() . "<br>";
} catch(UnexpectedValueException $e) {
        echo $e->getMessage() . "<br>";
}