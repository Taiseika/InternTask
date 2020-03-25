<?php

include 'SocialNetworkConnector.php';
include 'SocialNetworkPoster.php';
class FacebookConnector implements SocialNetworkConnector
{
    private $login, $password;

    /**
     * FacebookConnector constructor.
     * @param $login
     * @param $password
     */
    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->login with".
        "password $this->password<br>";// TODO: Implement logIn() method.
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->login<br>";
        // TODO: Implement logOut() method.
    }

    public function createPost($content): void
    {
        echo "Send HTTP API request to create a post in Facebook timeline.<br>";
        // TODO: Implement createPost() method.
    }
}