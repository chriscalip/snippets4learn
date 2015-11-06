<?php
namespace eric;
const SAMPLE4 = 'Tester Tester';

class Database
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
    echo SAMPLE3 . $eol;
  }
}

function show_output($parameter) {
  return rand(0,199) . ' ' .  $parameter;
}


