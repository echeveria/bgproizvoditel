<?php
class registry{


	private $objects = array();
	
	private $setings = array();
	
	public function __construct(){
	}
	
	public function setObject($path = NULL, $object, $key )
        {
                require_once($path. $object . '.class.php' );

                $this->objects[ $key ] = new $object( $this);
        }
        
        public function storeSetting( $setting, $key )
        {
                $this->settings[ $key ] = $setting;
        }

	public function getSetting( $key )
        {
                return $this->settings[ $key ];
        }

	public function getObject( $key )
        {
                return $this->objects[ $key ];
        }

}

$registry = new registry();

$registry->setObject('../controllers/','controller', 'controller');
$registry->getObject('controller')->getMessage();

?>
