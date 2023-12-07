# Design Patterns Self-Study

## #1 Singleton Design Pattern

`The Singleton design pattern ensures that there is only one instance of your class, while providing a global access point for this instance. It solves two problems:`

* Ensuring a class has only one instance: 
  * This is similar to a database class, which should only have one connection to the database.
* Providing a global access point for the instance: 
  * This allows you to access the instance from anywhere in your code, similar to how you might use a global variable. However, the Singleton pattern protects the instance from being overwritten by other parts of the code.

### How to Implement

* Add a private static field to the class to store the singleton instance.
*  Make the constructor private. This prevents users from creating new instances directly.
*  Declare a public static method called getInstance that returns an instance.
*  Apply logic inside the getInstance method to create a new object the first time it is called, and return this object in all subsequent calls.

### Pros and Cons

* Pros:
  * Ensures only one instance of the class exists.
  * Provides easy global access to the instance.
  * Improves security and performance.

* Cons:
  * Makes code less modular.
  * Can mask tight coupling between components.
  * May create circular dependencies between components.
  * Can lead to "god objects" that do too many things and become complex and difficult to maintain.

### code
```php
final class Singleton
{
    private static ?Singleton $singleton = null;
    private int $connectionState = 0;

    public static function getInstance(): Singleton
    {
        if (is_null(self::$singleton)) {
            self::$singleton = new self();
        }
        return self::$singleton;
    }
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

    public function getConnectionState(): int
    {
        return $this->connectionState;
    }

    public function setConnectionState(int $connectionState): void
    {
        $this->connectionState = $connectionState;
    }
}
```

### Example
```php
$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

echo $singleton1->getConnectionState(); // 0
$singleton2->setConnectionState(6);
echo $singleton1->getConnectionState(); // 6
```