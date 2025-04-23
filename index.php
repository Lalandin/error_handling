<?php

require_once 'classes/Messages.php';

//a try catch finally block for testing if $messages is string or not
try {
    echo Messages::print_message(2) . "<br>";
} catch(Exception $e) {
    echo $e->getMessage() . "<br>";
} finally {
    echo "finally this try / catch is done";
}