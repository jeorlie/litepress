<?php

$_header_meta = lp_header_get_meta()

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=YES">
  <title><?php echo $_header_meta['title'];?></title>
  <meta name="keywords" content="<?php echo $_header_meta['keywords'];?>">
  <meta name="description" content="<?php echo $_header_meta['description'];?>">
  <?php echo lp_web_get_stylesheets(); ?>
  <?php echo lp_web_get_javascript(); ?>
</head>
<body>
