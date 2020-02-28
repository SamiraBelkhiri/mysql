<?php


class UserInformation
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
        $this->firstName = trim(htmlspecialchars($firstName));
        $this->lastName = trim(htmlspecialchars($lastName));
        $this->username = trim(htmlspecialchars($username));
        $this->linkedin = trim(htmlspecialchars($linkedin));
        $this->github = trim(htmlspecialchars($github));
        $this->email = trim(htmlspecialchars($email));
        $this->preferredLang = trim(htmlspecialchars($preferredLang));
        $this->avatar = trim(htmlspecialchars($avatar));
        $this->video = trim(htmlspecialchars($video));
        $this->quote = trim(htmlspecialchars($quote));
        $this->quoteAuthor = trim(htmlspecialchars($quoteAuthor));
    }

    //getters

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

    public function checkEmail() : string
    {
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return $this->email;
        }
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