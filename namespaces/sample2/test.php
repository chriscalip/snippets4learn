<?php

/**
 * @file avoid collision example.
 */

include 'chrisdev/Database.php';
include 'chrisdev/Form.php';
include 'chrisdev/form/Validate.php';
include 'vagrant/Database.php';
include 'vagrant/Form.php';
include 'vagrant/form/Validate.php';

new chrisdev_Database;
new chrisdev_Form;
new chrisdev_Validate;
new vagrant_Database;
new vagrant_Form;
new vagrant_Validate;
