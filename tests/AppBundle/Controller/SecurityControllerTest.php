<?php

namespace Tests\AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Tests\AuthenticatorWebTestCase;


class SecurityControllerTest extends AuthenticatorWebTestCase
{
    /**
     * @param string $email
     * @return Client
     */
    private $client;

    public function testloginAction()         /* Test page d'accueil */
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        
        $this->assertSame(1, $crawler->filter('html:contains("Nom d\'utilisateur")')->count());
        $this->assertSame(1, $crawler->filter('html:contains("Mot de passe")')->count());

    }

    public function testlogout()         /* Test de déconnexion */
    {
        $client = $this->logIn();

        $crawler = $client->request('POST', '/logout');

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        
        $this->assertSame(0, $crawler->filter('html:contains("Bienvenue sur ToDoList")')->count());

    }

}
