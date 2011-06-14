<?php
abstract class Event_Singleton
{
	public function __construct ()
	{ 
		define('EVENT_VERSION', '0.1.1');
	}
	
	/**
     * @var  array  Instances of the singleton.
     */
    private static $_instances = array();

    /**
     * Returns instance of the called class.
     */
    final public static function instance(/* ... */)
    {
        $class = get_called_class();

        if (!isset(self::$_instances[$class])) {
            self::$_instances[$class] = new $class;
        }

        return self::$_instances[$class];
    }

    /**
     * Disallow cloning of a singleton
     */
    final private function __clone(){}
}