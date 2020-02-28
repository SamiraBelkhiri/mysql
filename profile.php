<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Controller/ProfileController.php';
require 'Model/Connection.php';

$information = new ProfileController();
$information->renderProfile($_GET);