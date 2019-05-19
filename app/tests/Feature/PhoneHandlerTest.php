<?php

use PHPUnit\Framework\TestCase;
use \App\services\PhoneConfigManager;
use \App\services\PhoneHandler;

class PhoneHandlerTest extends TestCase
{
    /**
     * @vcr drivers_cassete
     */
    public function testPhoneHandler()
    {
        $phone = 1234567;
        $region = 'BY';
        $configurator = new PhoneConfigManager();
        $config = $configurator->getConfig($region);

        $handler= new PhoneHandler();

        $result = $handler->handle($phone, $region);

        $this->assertEquals(count($config), count($result));
        foreach ($result as $item) {
            $this->assertArrayHasKey('driverName', $item);
            $this->assertArrayHasKey('validationResult', $item);
            $this->assertNotNull($item['validationResult']);
        }
    }
}