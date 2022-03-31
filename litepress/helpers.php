<?php
/*

*/
if(!defined('LP_ENGINE')) exit;
$helpers_dir = LP_APPLICATION_DIR . 'helpers';

if(is_dir($helpers_dir))
{
  $helper_scan = array_slice(scandir($helpers_dir), 2);

  foreach($helper_scan as $file)
  {
    $path = $helpers_dir . LP_DR . $file;
    if(file_exists($path)) require $path;
  }

}
