<?php

header('Content-Type: text/html; charset=utf-8');

@ini_set('display_errors', 'on');
@ini_set('upload_max_filesize', '100M');
@ini_set('default_charset', 'utf-8');

$raizDirectorio = dirname(__FILE__);


function autoloadClasses($className) {
    if (!class_exists($className, false)) {
        $fClass = realpath(dirname(__FILE__) . '/..') . '/classes/' . $className . '.php';

        if (strcasecmp(substr($className, 0, strlen('Api')), 'Api') === 0) {
            $fClass = realpath(dirname(__FILE__) . '/..') . '/api/' . $className . '.php';
        } else if (strcasecmp(substr($className, 0, strlen('Report')), 'Report') === 0) {
            $fClass = realpath(dirname(__FILE__) . '/..') . '/reports/' . $className . '.php';
        } else if (strcasecmp(substr($className, 0, strlen('Print')), 'Print') === 0) {
            $fClass = realpath(dirname(__FILE__) . '/..') . '/print/' . $className . '.php';
        }

        if (is_file($fClass)) {
            require_once($fClass);
        }
    }
}

spl_autoload_register('autoloadClasses');
define('APP_NOMBRE', 'electroRuedaNegocio');
define('_APP_ROOT_DIR_', realpath($raizDirectorio . '/..'));
define('_APP_ROOT_PHP_',_APP_ROOT_DIR_.'/php/' );
define('_APP_JS_DIR_', _APP_ROOT_DIR_.'/js/');
define('_APP_ROOT_PHP_API', _APP_ROOT_PHP_.'/Api/');
define('_APP_ROOT_PHP_CLASES', _APP_ROOT_PHP_.'/Clases/');
define('_APP_ROOT_PHP_UTIL', _APP_ROOT_PHP_.'/Util/');

include(_APP_ROOT_PHP_UTIL.'RouteController.php');