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
        $data = json_decode($request->getBody(), true);
        $phoneHandler = new PhoneHandler();
        $result =  $phoneHandler->handle($data['phone'], $data['region']);

        header('Content-type : application/json');
        echo json_encode($result);
    }
}