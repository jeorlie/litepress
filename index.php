<?php
/*


RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule . index.php [L]



*/
define('LP_ENGINE', true);
require __dir__ .DIRECTORY_SEPARATOR . 'litepress' . DIRECTORY_SEPARATOR .'init.php';
