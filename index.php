<?php
declare(strict_types=1);


require 'Controller/HomePageController.php';
require 'Model/Connection.php';
require 'Model/UserInformation.php';
require 'Controller/LoginController.php';
require 'Model/Authentication.php';


$controller = new HomePageController();
$controller->renderHomepage($_POST);

if (!empty($_POST['loginpage'])){
    $information = new ProfileController();
    $information->renderProfile($_GET);
}


