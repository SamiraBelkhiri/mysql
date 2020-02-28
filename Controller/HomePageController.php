<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

class HomePageController
{
    public function renderHomepage($post){


        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $givenUserInformation = new UserInformation($post['firstName'], $post['lastName'], $post['userName'], $post['linkedin'], $post['github'],
                $post['email'], $post['preferred_language'], $post['avatar'], $post['video'],
                $post['quote'], $post['quote_author']);
            $passwordObject = new Authentication();
            $emailObject = new Authentication();
            $sqlInsert = 'INSERT INTO student (first_name, last_name, username, password, linkedin, github, email, preferred_language, avatar, video, quote, quote_author) VALUES (:firstName, :lastName, :username, :password, :linkedin, :github, :email, :preferred_language, :avatar, :video, :quote, :quote_author)';

            if ($passwordObject->checkPassword($post['password'], $post['passwordConf']) == true && $emailObject->checkMail($post['email']) == true){
                $password = $passwordObject->setValidPassword($post['password']);
                $email = $emailObject->setValidEmail($post['email']);

                $connection = new Connection();
                $connection = $connection->openConnection();
                $connection->prepare($sqlInsert)->execute([
                    'firstName' => $givenUserInformation->getFirstName(),
                    'lastName' => $givenUserInformation->getLastName(), 'username' => $givenUserInformation->getUserName(), 'password' => $password, 'linkedin' => $givenUserInformation->getLinkedin(), 'github' => $givenUserInformation->getGithub(),
                    'email' => $email, 'preferred_language' => $givenUserInformation->getPreferredLang(), 'avatar' => $givenUserInformation->getAvatar(), 'video' => $givenUserInformation->getVideo(),
                    'quote' => $givenUserInformation->getQuote(), 'quote_author' => $givenUserInformation->getQuoteAuthor()]);
            }
        }

        require 'View/homepage.php';
    }
}