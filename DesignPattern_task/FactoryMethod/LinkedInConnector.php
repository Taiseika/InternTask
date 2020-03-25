<?php


class LinkedInConnector implements SocialNetworkConnector
{
    private $email, $password;

    /**
     * FacebookConnector constructor.
     * @param $login
     * @param $password
     */
    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->email with".
        "password $this->password<br>";// TODO: Implement logIn() method.
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->email<br>";
        // TODO: Implement logOut() method.
    }

    public function createPost($content): void
    {
        echo "Send HTTP API request to create a post in LinkedIn timeline.<br>";
        // TODO: Implement createPost() method.
    }
}