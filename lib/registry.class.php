<?php
class registry
{       
        
        private static $instance;
       
        private $object;
        
        
        private function __construct()
        {}
        
        
        public static function getInstance()
        {
                if(self::$instance === null)
                {
                        //First and only construction.
                        self::$instance = new self();
                }
                return self::$instance;
        }
        
       
        public function get($key)
        {
                return $this->object[$key];
        }
        
        public function set($key, $object)
        {
                return $this->object[$key] = $object;
        }
        
       
        
}

?>
