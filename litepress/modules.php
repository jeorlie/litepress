<?php
/*

*/
if(!defined('LP_ENGINE')) exit;
$modules = LP_APPLICATION_DIR . 'modules';

if(is_dir($modules))
{
  $mod_scan = array_slice(scandir($modules), 2);

  foreach($mod_scan as $dir)
  {
    $path = $modules . LP_DR . $dir . LP_DR . 'index.php';
    if(file_exists($path)) require $path;
  }

}
