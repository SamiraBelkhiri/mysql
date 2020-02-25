<?php


class Post
{
    private $firstName;
    private $lastName;
    private $username;
    private $linkedin;
    private $github;
    private $email;
    private $preferredLang;
    private $avatar;
    private $video;
    private $quote;
    private $quoteAuthor;

    public function __construct(string $firstName, string $lastName, string $username, string $linkedin,
                                string $github, string $email, string $preferredLang, string $avatar, string $video,
                                string $quote, string $quoteAuthor)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->username = $username;
        $this->linkedin = $linkedin;
        $this->github = $github;
        $this->email = $email;
        $this->preferredLang = $preferredLang;
        $this->avatar = $avatar;
        $this->video = $video;
        $this->quote = $quote;
        $this->quoteAuthor = $quoteAuthor;
    }

    //setters

    public function getFirstName() : string
    {
        return $this->firstName;
    }

    public function getLastName() : string
    {
        return $this->lastName;
    }

    public function getUserName() : string
    {
        return $this->username;
    }

    public function getLinkedin() : string
    {
        return $this->linkedin;
    }

    public function getGithub() : string
    {
        return $this->github;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getPreferredLang() : string
    {
        return $this->preferredLang;
    }

    public function getAvatar() : string
    {
        return $this->avatar;
    }

    public function getVideo() : string
    {
        return $this->video;
    }

    public function getQuote() : string
    {
        return $this->quote;
    }

    public function getQuoteAuthor() : string
    {
        return $this->quoteAuthor;
    }
}