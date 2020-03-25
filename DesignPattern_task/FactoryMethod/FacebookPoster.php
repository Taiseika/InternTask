<?php


class FacebookPoster extends SocialNetworkPoster
{
    private $login, $password;

    /**
     * FacebookPoster constructor.
     * @param $login
     * @param $password
     */
    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
        // TODO: Implement getSocialNetwork() method.
    }
}