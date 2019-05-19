<?php

namespace App\controllers;

use App\Core\Request;
use App\services\PhoneHandler;

class PhoneValidationController
{
    /**
     * @param Request $request
     */
    public function validatePhone(Request $request)
    {
        //var_dump($request->getBody());
        $data = json_decode($request->getBody(), true);
        $phoneHandler = new PhoneHandler();
        $phoneHandler->handle($data['phone'], $data['region']);
    }
}