<?php

class vagrant_Form
{
  public function __construct()
  {
    $eol = '';
    if (php_sapi_name() == "cli") {
      $eol = PHP_EOL;
    }
    else {
      $eol = '<br />';
    }
    echo __CLASS__ . $eol;
  }
}
