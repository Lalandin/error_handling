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
     * Returns message if it is a string or if it's equal to or longer than 10 letters otherwise throws an exception
     *
     * @param string $message
     * @return string
     */
    public static function print_message($message) {
        if (!is_string($message)) {
            throw new InvalidArgumentException("Der skal indtastes en string");
        } elseif (strlen($message) <= 10) {
            throw new UnexpectedValueException("Der skal være indtastet minimum 10 tegn");
        } else {
            return $message;
        }
    }
}