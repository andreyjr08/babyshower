<?php

require_once(_APP_ROOT_PHP_UTIL_SMARTY . 'libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = _APP_ROOT_TPL;
$smarty->compile_dir = _APP_ROOT_PHP_UTIL_SMARTY . 'compile';
$smarty->cache_dir = _APP_ROOT_PHP_UTIL_SMARTY . 'cache';
$smarty->config_dir = _APP_ROOT_PHP_UTIL_SMARTY . 'configs';
$smarty->caching = false;
$smarty->force_compile = true;
?>