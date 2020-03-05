<?php
// config file
require_once 'config/constants.php';
// helpers
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';


// Auto Load libraries
spl_autoload_register(function ($className){
    require_once 'libraries/'.$className.'.php';
});