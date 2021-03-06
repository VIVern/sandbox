<?php

namespace App\drivers;

use App\interfaces\PhoneValidatorDriver;
use GuzzleHttp\Client;

class GBDriver implements PhoneValidatorDriver
{
    private $is_valid;

    public function validate($phone)
    {
        $client = new Client();
        $result = $client->get('172.25.0.4:80/json/response_2.json');
        $this->prepareResult($result->getBody()->getContents());
    }

    public function prepareResult($result)
    {
        $data = json_decode($result, true);
        $this->is_valid = $data['data']['is_valid'];
    }

    public function getIsValid()
    {
        return $this->is_valid;
    }
}