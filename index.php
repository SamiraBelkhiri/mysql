<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include 'connection.php';
include 'insert.php';


if ($_POST){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $github = $_POST['github'];
    $linkedin = $_POST['linkedin'];
    $email = $_POST['email'];
    $preferred_language = $_POST['preferred_language'];
    $avatar = $_POST ['avatar'];
    $video = ['video'];
    $quote = ['quote'];
    $quote_author = ['quote_author'];


}








?>