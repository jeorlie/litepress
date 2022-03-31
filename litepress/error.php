<?php


function lp_error_http_page($num)
{
  $arr = array(
    404 => array(
      'title' => '404 Not Found',
      'message' => 'The page you are looking for cannot be found or does not exist in the first place'
    ),

  );

  if(!isset($arr[$num])) die('ERR: HTTP_ERROR_CODE not found');

  $str ='

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>'.$arr[$num]['title'].'</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
        body{
          padding:1em; background-color:#fff;
        }
      </style>
    </head>
    <body>
      <h1 style="margin-bottom:0;padding-bottom:0;">'.$arr[$num]['title'].'</h1>
      <p style="margin-top:0;" >'.$arr[$num]['message'].'</p>
      <p>Back to <a href="/">home</a></p>
    </body>
    </html>

  ';
  echo $str;
  exit;
}
