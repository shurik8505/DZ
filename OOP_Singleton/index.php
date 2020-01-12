<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('test.php');

$test = new Test();
echo '<pre>';
print_r($test->getTests());
print_r($test->getTest(1));
