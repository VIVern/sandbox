<?php

namespace App\controllers;

use App\Core\Request;

class PhoneValidationController
{
    public function validatePhone(Request $request) : void
    {
        var_dump($request->getBody());
    }
}