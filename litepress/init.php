<?php
/*

*/

if(!defined('LP_ENGINE')) exit;

define('LP_ENGINE_BUILD_NUMBER', 1000);

define('LP_DR', DIRECTORY_SEPARATOR); // alias
define('LP_DIR', LP_DR); // alias
define('LP_ROOT_DIR', $_SERVER['DOCUMENT_ROOT']. LP_DR);
define('LP_APPLICATION_DIR', LP_ROOT_DIR. 'lp_appl'. LP_DR);
define('LP_HTML_DIR', LP_APPLICATION_DIR . 'html'. LP_DR);
define('LP_HTML_COMMON_DIR', LP_HTML_DIR .'common'. LP_DR);
define('LP_HTML_TEMPLATES_DIR', LP_HTML_DIR .'templates'. LP_DR);
define('LP_CORE_PATH', LP_ROOT_DIR . 'litepress'. LP_DR);

/*
  `LP_ERROR_REDIRECT_TO_HOMEPAGE_ROUTE_NOT_FOUND` if set to `true` will redirect
  all invalid or not found request to homepage.

*/
define('LP_ERROR_REDIRECT_TO_HOMEPAGE_ROUTE_NOT_FOUND', false);

//=============================================================================

define('LP_TEMPLATE_NAME', 'default');

//=============================================================================


require LP_CORE_PATH . 'config.php';
require LP_CORE_PATH . 'function.php';
require LP_CORE_PATH . 'helpers.php';
require LP_CORE_PATH . 'modules.php';
require LP_CORE_PATH . 'error.php';
require LP_CORE_PATH . 'parse_url.php';
require LP_CORE_PATH . 'whitelist.php';

require LP_CORE_PATH . 'view.php';
require LP_CORE_PATH . 'routes.php';
