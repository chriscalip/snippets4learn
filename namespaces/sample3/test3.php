<?php

/**
 * @file avoid collision example.
 */

include 'eric/Database.php';
include 'eric/Form.php';
include 'eric/form/Validate.php';
define('SAMPLE3', 'hello world');

new eric\Database;
new eric\Form;
new eric\form\Validate;
echo eric\SAMPLE4 . PHP_EOL;
echo eric\show_output('helo world') . PHP_EOL;

$records = array();
foreach ($nodes as $node) {
  $properties = array();
  if (!empty($node->field_text[LANGUAGE_NONE][0]['value'])) {
    $properties['text'] = $node->field_text[LANGUAGE_NONE][0]['value'];
  }
  $properties['person'] = $node->field_person[LANGUAGE_NONE][0]['target_id'];
  $records[] = $properties;
}
