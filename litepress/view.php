<?php


class LP_View_Page {

  public function render($path, $array_of_files)
  {

      @ob_start();
      if(is_array($array_of_files)) {
        foreach($array_of_files as $file) {
          if(file_exists($file)) require $file;
        }
      }
      require LP_HTML_COMMON_DIR . 'header.php';
      require LP_HTML_TEMPLATES_DIR .LP_TEMPLATE_NAME. LP_DIR . $path .'.tpl.php';
      require LP_HTML_COMMON_DIR . 'footer.php';
      @ob_flush();
      @ob_end_flush();
      exit;
  }

}
