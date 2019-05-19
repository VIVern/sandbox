<?php

namespace App\controllers;

use App\Core\Request;
use App\services\PhoneConfigManager;

class PhoneValidationController
{
    public function validatePhone(Request $request)
    {
        var_dump($request->getBody());

        $t = new PhoneConfigManager("BY");
        var_dump($t->getConfig());
    }
}