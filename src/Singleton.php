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

final class Singleton
{
    private static ?Singleton $singleton = null;
    private int $connectionState = 0;


    /**
     * is not allowed to call from outside to prevent from creating multiple instances,
     * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
     */
    private function __construct(){}

    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone(){}

    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

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