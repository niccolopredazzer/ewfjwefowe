<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "phpscss/scss.inc.php";
require_once "phpscss/server/Server.php";

use ScssPhp\ScssPhp\Server;

$directory = "../scss";

$server = new Server($directory);
$server->serve();

?>