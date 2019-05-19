<?php

namespace App\Core\Interfaces;

/**
 * Interface RequestInterface
 *
 * @package App\Core\Interfaces
 */
interface RequestInterface
{
    /**
     * Returns request type
     *
     * @return string
     */
    public function getMethod();

    /**
     * Returns body content
     *
     * @return mixed
     */
    public function getBody();
}