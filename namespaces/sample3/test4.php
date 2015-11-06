<?php

/**
 * @file avoid collision example.
 *
 * namespaces
 * ------------
 * global
 *      custom
 *      custom
 *      custom
 *        custom
 *        custom
 */

include 'another/Database.php';
include 'chrisdev/Database.php';

new Database;
new chrisdev\Database;
