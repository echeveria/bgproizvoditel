<?php

define('ROOT_DIR', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR))));


?>
