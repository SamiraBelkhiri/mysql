<?php

class Authentication
{
    private $isEmailValid;
    private $validEmail;
    private $isPasswordValid;
    private $validPassword;

    public function checkMail($mail): bool
    {
        $email = $mail;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->isEmailValid = true;
            return $this->isEmailValid;
        } else {
            $this->isEmailValid = false;
            return $this->isEmailValid;
        }
    }

    public function checkPassword($password, $passwordConf): bool
    {
        if ($password == $passwordConf) {
            // Validate password strength
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);

            if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                $this->isPasswordValid = false;
                return $this->isPasswordValid;
            } else {
                $this->isPasswordValid = true;
                return $this->isPasswordValid;
            }
        }
    }

    public function setValidEmail($email) : string
    {
        $this->validEmail = $email;
        return $this->validEmail;
    }

    public function setValidPassword($validPassword): string
    {
        if ($this->isPasswordValid == true){
            $this->validPassword = $validPassword;
            $this->validPassword = password_hash($validPassword, PASSWORD_DEFAULT);
            return $this->validPassword;
        }

    }

}