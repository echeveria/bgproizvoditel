<?php
<<<<<<< HEAD

=======
>>>>>>> e53cda6c48f090bf78a5a4bd49bd8843d9ec46fc
class registry
{       
        
        private static $instance;
       
        private $object;
        
        
        private function __construct()
        {}
<<<<<<< HEAD
        
        
=======
        
        
>>>>>>> e53cda6c48f090bf78a5a4bd49bd8843d9ec46fc
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
        
<<<<<<< HEAD

        
=======
       
>>>>>>> e53cda6c48f090bf78a5a4bd49bd8843d9ec46fc
        
}

?>

