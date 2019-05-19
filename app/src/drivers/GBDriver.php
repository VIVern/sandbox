<?php

namespace App\drivers;

use App\interfaces\PhoneValidatorDriver;

class GBDriver implements PhoneValidatorDriver
{
    public function validate($phone)
    {
        var_dump('hello from GB ' . $phone);
    }

    public function prepareResult()
    {
        // TODO: Implement prepareResult() method.
    }
}