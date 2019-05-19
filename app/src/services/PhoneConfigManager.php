<?php

namespace App\services;
use PDO;


class PhoneConfigManager
{
    private $region;

    public function __construct($region)
    {
        $this->region = $region;
    }

    public function getConfig()
    {

    }
}