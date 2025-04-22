<?php

/**
 * Class Messages
 * 
 * Messages object for printing messages
 * 
 * @method string print_tintytexy
 */
class Messages {

    /**
     * Returns message if it has a max of 255 otherwise throws an exception
     *
     * @param string $message
     * @return string
     */
    public static function print_tinytext($message) {
        $len = strlen($message);
        if ($len > 255) {
            throw new Exception("der må maks bruges 255 tegn");
        } else {
            return $message;
        }
    }
}