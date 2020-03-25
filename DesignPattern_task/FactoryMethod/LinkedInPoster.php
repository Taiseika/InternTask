<?php


class LinkedInPoster extends SocialNetworkPoster
{
    private $email, $password;

    /**
     * FacebookPoster constructor.
     * @param $email
     * @param $password
     */
    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->email, $this->password);
        // TODO: Implement getSocialNetwork() method.
    }
}