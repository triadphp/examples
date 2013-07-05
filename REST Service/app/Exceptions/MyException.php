<?php

namespace MySimpleService\Exceptions;

use \Triad\Exceptions\TriadException;

class MyException extends TriadException
{
    public function isFatal() {
        return false;
    }

    public function getHttpCode() {
        return 401; // unauthorized
    }
}