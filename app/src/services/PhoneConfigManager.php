<?php

namespace App\services;

use App\Core\MysqlConnector;

class PhoneConfigManager
{
    private $db;

    public function __construct()
    {
        $this->db = new MysqlConnector();
    }

    public function getConfig($region)
    {
        return $this->db->query("SELECT * FROM config WHERE region = '$region' AND active = 1");
    }
}