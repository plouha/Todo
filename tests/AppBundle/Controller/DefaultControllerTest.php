<?php

namespace Tests\AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Tests\AuthenticatorWebTestCase;


class DefaultControllerTest extends AuthenticatorWebTestCase
{
    /**
     * @param string $email
     * @return Client
     */
    private $client;

    public function testIndexWithLog()     /* Si log arrivée sur la page d'accueil */
    {
        $client = $this->logIn();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertSame(1, $crawler->filter('html:contains("Bienvenue sur ToDoList")')->count());

    }

    public function testIndexNoLog()     /* sinon redirection */
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertEquals(302, $client->getResponse()->getStatusCode());

    }

}
