<?php
/*
 modules/index/index.php
*/

class Index_Class {

  public function init()
  {
    lp_header_set_meta(array(
      'title' => LP_CLIENT_NAME
    ));
    lp_web_set_stylesheets(array(
      '/public/css/w3.css'
    ));
    require LP_HTML_VIEWS_DIR . 'index'. LP_DR .'index.tpl.php';
  }


}
