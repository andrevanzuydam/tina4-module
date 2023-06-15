<?php
//\Tina4\Module::addModule("Example Module", "1.0.0");

require_once "./vendor/autoload.php";

global $DBA;
$DBA = new \Tina4\DataSQLite3("test.db");

$config = new \Tina4\Config();
\Tina4\Initialize();
echo new \Tina4\Tina4Php($config);