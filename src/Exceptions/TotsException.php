<?php

namespace Tots\Core\Exceptions;

class TotsException extends \Exception
{
    protected $codeString = '';

    public function __construct($message = '', $code = '', $statusCode = 0)
    {
        $this->message = $message;
        $this->code = $statusCode;
        $this->codeString = $code;
    }

    public function getStatusCode()
    {
        return $this->code;
    }

    public function getCodeString()
    {
        return $this->codeString;
    }
}