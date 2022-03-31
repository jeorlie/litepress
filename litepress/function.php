<?php


function lp_func_debug($t)
{
  echo '<pre>';
  print_r($t);
  echo '</pre>';
}

//==========
function lp_func_is_string_empty($t)
{
  $i = trim($t);
  return (empty($i) && strlen($i) == 0) ? true: false;
}

//==========
function lp_func_get_url_segment($t)
{
  if($t === false) return $GLOBALS['LP_ENGINE_URL_PATH'];
  if(isset($GLOBALS['LP_ENGINE_URL_PATH'][$t])) return $GLOBALS['LP_ENGINE_URL_PATH'][$t];
  else return false;
}
//==========
function lp_redirect_homepage()
{
  header('Location: /');
  exit;
}

//==========
function lp_header_set_meta($t)
{
  $GLOBALS['LP_ENGINE_HEADER_META']['title'] = isset($t['title']) ? $t['title']: LP_CLIENT_NAME;
  $GLOBALS['LP_ENGINE_HEADER_META']['keywords'] = isset($t['keywords']) ? $t['keywords']: LP_CLIENT_NAME;
  $GLOBALS['LP_ENGINE_HEADER_META']['description'] = isset($t['description']) ? $t['description']: LP_CLIENT_NAME;
}
//==========
function lp_header_get_meta()
{
  return isset($GLOBALS['LP_ENGINE_HEADER_META']) ? $GLOBALS['LP_ENGINE_HEADER_META']: array();
}
//==========
function lp_web_set_stylesheets($css)
{
  foreach($css as $c){
    $GLOBALS['LP_ENGINE_HEADER_STYLESHEETS'][] = '<link rel="stylesheet" type="text/css" href="'. $c.'?v='. LP_ENGINE_BUILD_NUMBER.'">';
  }
}
//==========
function lp_web_get_stylesheets()
{
  $str ='';
  if(isset($GLOBALS['LP_ENGINE_HEADER_STYLESHEETS']))
  {
    foreach($GLOBALS['LP_ENGINE_HEADER_STYLESHEETS'] as $css){
      $str .= $css. PHP_EOL;
    }
  }
  return $str;
}
//==========
function lp_web_set_javascript($js)
{
  foreach($js as $c){
    $GLOBALS['LP_ENGINE_HEADER_JAVASCRIPTS'][] = '<script src="'. $c.'?v='. LP_ENGINE_BUILD_NUMBER.'"></script>';
  }
}
//==========
function lp_web_get_javascript()
{
  $str ='';
  if(isset($GLOBALS['LP_ENGINE_HEADER_JAVASCRIPTS']))
  {
    foreach($GLOBALS['LP_ENGINE_HEADER_JAVASCRIPTS'] as $js){
      $str .= $js. PHP_EOL;
    }
  }
  return $str;
}

//==========
