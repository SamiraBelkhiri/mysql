<?php


class HomePageController
{
    public function render($post){

        //Connection
        $pdo = openConnection();
        if ($pdo){
            echo 'Success';
        } else {
            echo 'Failed connection';
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $formInfo = new Post($post['firstName'], $post['lastName'], $post['userName'], $post['linkedin'], $post['github'],
                $post['email'], $post['preferred_language'], $post['avatar'], $post['video'],
                $post['quote'], $post['quote_author']);
            $sqlInsert = 'INSERT INTO student (first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author) VALUES (:firstName, :lastName, :username,:linkedin, :github, :email, :preferred_language, :avatar, :video, :quote, :quote_author)';

            $pdo->prepare($sqlInsert)->execute([
                'firstName' => $formInfo->getFirstName(),
                'lastName' => $formInfo->getLastName(), 'username' => $formInfo->getUserName(), 'linkedin' => $formInfo->getLinkedin(), 'github' => $formInfo->getGithub(),
                'email' => $formInfo->getEmail(), 'preferred_language' => $formInfo->getPreferredLang(), 'avatar' => $formInfo->getAvatar(), 'video' => $formInfo->getVideo(),
                'quote' => $formInfo->getQuote(), 'quote_author' => $formInfo->getQuoteAuthor()]);
        }


        require 'View/homepage.php';
    }
}