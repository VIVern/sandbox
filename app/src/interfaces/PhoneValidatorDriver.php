<?php

namespace App\interfaces;


interface PhoneValidatorDriver
{
    public function validate($phone);

    public function prepareResult();
}