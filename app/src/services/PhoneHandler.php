<?php

namespace App\services;


class phoneHandler
{
    /**
     * @var PhoneConfigManager
     */
    private $configManager;

    /**
     * phoneHandler constructor.
     */
    public function __construct()
    {
        $this->configManager = new PhoneConfigManager();
    }

    /**
     * @param $phone
     * @param $region
     */
    public function handle($phone, $region)
    {
        $config = $this->configManager->getConfig($region);

        foreach ($config as $item) {
            $driver = "App\\drivers\\" . $item['driver'] . "Driver";
            $driver = (new $driver);
            $driver->validate($phone);
        }

    }
}