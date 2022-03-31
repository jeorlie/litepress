<?php
/*

*/
if(!defined('LP_ENGINE')) exit;
$modules = LP_APPLICATION_DIR . 'modules';

$replace = array('-', ' ', '=', '+');
$_urix = lp_func_get_url_segment(false);

if(lp_func_is_string_empty($_urix[0]))
{
  $_urix[0] = 'index';
}

$_get_whitelist_route = lp_whitelist_allowed_routes();


if(!isset($_get_whitelist_route[$_urix[0]]))
{
  if(LP_ERROR_REDIRECT_TO_HOMEPAGE_ROUTE_NOT_FOUND) lp_redirect_homepage();
  die('ERR: Route 404');
}

$_classname = $_get_whitelist_route[$_urix[0]];

if(!class_exists($_classname))
{
  if(LP_ERROR_REDIRECT_TO_HOMEPAGE_ROUTE_NOT_FOUND) lp_redirect_homepage();
  die('ERR: Route 404');
}

$route = new $_classname();

//===========================================================================

if(isset($_urix[1]))
{
  $method = $_urix[1].'_litepress_method';
  if(method_exists($route, $method))
  {
    $route->$method();
    exit;
  }
  else
  {
    if(LP_ERROR_REDIRECT_TO_HOMEPAGE_ROUTE_NOT_FOUND) lp_redirect_homepage();
    lp_error_http_page(404);
  }
}
else
{
  $route->init();
  exit;
}
//===========================================================================
