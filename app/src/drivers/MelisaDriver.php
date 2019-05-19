<?php


namespace App\drivers;

use App\interfaces\PhoneValidatorDriver;

class MelisaDriver implements PhoneValidatorDriver
{
    public function validate($phone)
    {
        var_dump('from melisa' . $phone);
    }

    public function prepareResult()
    {
        // TODO: Implement prepareResult() method.
    }
}