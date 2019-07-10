<?php

namespace Tests;

use AppBundle\Entity\User;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


/**
 * Class AuthenticatorWebTestCase
 * @package Tests
 */

 Class AuthenticatorWebTestCase  extends WebTestCase   
{
    /**
     * @var User
     */
    private $user;
    
    /**
     * @param string $email
     * @return Client
     */
    private $client;

    public function logIn($email = "admin@email.com")
    {
        $client = static::createClient();

        $this->user = $client             /* on récupère l'utilisateur */
            ->getContainer()
            ->get("doctrine.orm.entity_manager")
            ->getRepository(User::class)
            ->findOneByEmail($email)
        ;
        
        $session = $client->getContainer()->get('session');
        
        $client->getCookieJar()->clear();     /* on vide les cookies */

        $token = new UsernamePasswordToken( /* on gère le token et on récupère les roles*/
            $this->user,
            null,
            "main",
            $this->user->getRoles()
        );

        $session->set('_security_main', serialize($token));
        $session->save();
        $cookie = new Cookie($session->getName(), $session->getId());
        $client->getCookieJar()->set($cookie);

        return $client;             /* on retourne le client */

    }
}