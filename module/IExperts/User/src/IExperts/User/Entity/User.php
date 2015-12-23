<?php

namespace IExperts\User\Entity;

use ZF\OAuth2\Doctrine\Entity\UserInterface;

class User implements UserInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var ZF\OAuth2\Doctrine\Entity\Client
     */
    protected $client;

    /**
     * @var ZF\OAuth2\Doctrine\Entity\AccessToken
     */
    protected $accessToken;

    /**
     * @var ZF\OAuth2\Doctrine\Entity\AuthorizationCode
     */
    protected $authorizationCode;

    /**
     * @var ZF\OAuth2\Doctrine\Entity\RefreshToken
     */
    protected $refreshToken;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id.
     *
     * @param int $id
     * @return UserInterface
     */
    public function setId($id)
    {
        $this->id = (int) $id;
        return $this;
    }

    /**
     * Get username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set username.
     *
     * @param string $username
     * @return UserInterface
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email.
     *
     * @param string $email
     * @return UserInterface
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set password.
     *
     * @param string $password
     * @return UserInterface
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    
    /**
     * @return the $client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param \IExperts\User\Entity\ZF\OAuth2\Doctrine\Entity\Client $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return the $accessToken
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param \IExperts\User\Entity\ZF\OAuth2\Doctrine\Entity\AccessToken $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return the $authorizationCode
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * @param \IExperts\User\Entity\ZF\OAuth2\Doctrine\Entity\AuthorizationCode $authorizationCode
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;
    }

    /**
     * @return the $refreshToken
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @param \IExperts\User\Entity\ZF\OAuth2\Doctrine\Entity\RefreshToken $refreshToken
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
    }
}
