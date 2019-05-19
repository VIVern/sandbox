<?php

namespace App\Core;

use App\Core\Interfaces\RequestInterface;

final class Request implements RequestInterface
{
    /**
     * @var string
     */
    private $method;

    /**
     * @var mixed
     */
    private $body;

    /**
     * @return Request
     */
    public static function instance() : Request
    {
        static $instance = null;

        if (is_null($instance)) {
            $instance = new Request();
        }

        return $instance;
    }

    /**
     * Request constructor.
     *
     * @return void
     */
    private function __construct()
    {
        $this->method = $_SERVER["REQUEST_METHOD"];
        $this->body = file_get_contents("php://input");
    }

    /**
     * Prevent clone the object.
     */
    private function __clone()
    {
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }
}