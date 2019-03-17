<?php

namespace App;

class Logger
{
    const FILENAME = '../log/log.txt' ;

    /**
     * @param $error
     */
    public static function addError($error)
    {
        file_put_contents( self::FILENAME, $error, FILE_APPEND);
    }
}
