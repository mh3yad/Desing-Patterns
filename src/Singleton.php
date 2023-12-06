<?php
/**
 * @author mh3yad.
 * @project This code is part of a Design Pattern self study.
 * @copyright  (c) 2023  All rights reserved..
 */

/**
* Singleton desing pattern ensure your class has only one instance, while providing global acces spoint for this instance
 */

namespace Mh3yad\Db;

class Singleton
{
    private static ?Singleton $singleton = null;
    private int $connectionState = 0;


    private function __construct(){}

    public static function getInstance(): Singleton
    {
        if (is_null(self::$singleton)) {
            self::$singleton = new self();
        }
        return self::$singleton;
    }

    public function getConnectionState(): int
    {
        return $this->connectionState;
    }

    public function setConnectionState(int $connectionState): void
    {
        $this->connectionState = $connectionState;
    }
}