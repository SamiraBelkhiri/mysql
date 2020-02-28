<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);


class ProfileController
{
    public function renderProfile($get){
        //Make connection
        $connection = new Connection();
        $connection->openConnection();

        //get the id of the user
        $id = $get['user'];
        //the query
        $statement = $pdo->prepare('SELECT * FROM student WHERE id=:ID');
        $statement->execute(['ID' => $id]);
        //Fetch al the info of the given id
        $information = $statement->fetch();


        require 'View/profilepage.php';
    }


}
