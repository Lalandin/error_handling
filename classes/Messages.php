<?php

/**
 * Class Messages
 * 
 * Messages object for printing messages
 * 
 * @method string print_message
 */
class Messages {

    /**
     * Returns message if it is a string otherwise throws an exception
     *
     * @param string $message
     * @return string
     */
    public static function print_message($message) {
        if (gettype($message) != "string") {
            throw new Exception("datatypen er forkert");
        } else {
            return $message;
        }
    }
}
