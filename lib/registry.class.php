<?php
class SingletonRegistry
{       
        
        private static $instance;
        
        /**
         * Object hash map
         *
         * @var array
         */
        private $map;
        
        /**
         * Private constructor
         *
         */
        private function __construct()
        {}
        
        /**
         * Get the single instance
         *
         * @return SingletonRegistry
         */
        public static function getInstance()
        {
                if(self::$instance === null)
                {
                        //First and only construction.
                        self::$instance = new self();
                }
                return self::$instance;
        }
        
        /**
         * Get an object by key
         *
         * @param string|int $key
         * @return object
         */
        public function get($key)
        {
                return $this->map[$key];
        }
        
        /**
         * Set an object by key
         *
         * @param string|int $key
         */
        public function set($key, $object)
        {
                return $this->map[$key] = $object;
        }
        
        /**
         * Disallow cloning
         *
         */
        private function __clone()
        {}
}

?>
