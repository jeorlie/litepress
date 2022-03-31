<?php
/*


*/
if(!defined('LP_ENGINE')) exit;

$GLOBALS['LP_ENGINE_URL_PARSE'] = parse_url($_SERVER['REQUEST_URI']);
$GLOBALS['LP_ENGINE_URL_PATH'] = explode('/', ltrim($GLOBALS['LP_ENGINE_URL_PARSE']['path'], '/'));
