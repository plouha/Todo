<?php

namespace Tests\AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Tests\AuthenticatorWebTestCase;
use Symfony\Component\BrowserKit\Cookie;


class UserControllerTest extends AuthenticatorWebTestCase
{

    public function testIndex()         /* Test page d'accueil */
    {
        $client = $this->logIn();

        $client->request('GET', '/users');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

    }

    public function testAdmin()         /* test Admin = oui */
    {
        $client = $this->logIn($email = "admin@email.com");
        
        $crawler = $client->request('GET', '/');
        $link = $crawler->selectLink('Administration')->link();
        $crawler = $client->click($link);
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testNoAdmin()       /* test no admin */
    {
        $client = $this->logIn($email = "user1@email.com");
        
        $crawler = $client->request('GET', '/users');
        
        $this->assertEquals(403, $client->getResponse()->getStatusCode());
    }

    public function testNoEdit()            /* test interdit d'éditer */
    {
        $client = static::createClient();

        $user= $client             
        ->getContainer()
        ->get("doctrine.orm.entity_manager")
        ->getRepository(User::class)
        ->findOneByUsername('User1')
        ;

        $crawler = $client->request('GET', '/users/'.$user->getId().'/edit');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function testNoDelete()          /* test interdit de supprimer */
    {
        $client = static::createClient();

        $user= $client             
        ->getContainer()
        ->get("doctrine.orm.entity_manager")
        ->getRepository(User::class)
        ->findOneByUsername('User1')
        ;

        $crawler = $client->request('GET', '/users/'.$user->getId().'/delete');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }
   
    public function testCreate()         /* Test création d'un user */
    {
        $client = $this->logIn();

        $crawler = $client->request('GET', '/users/create');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $form = $crawler->filter('form[name=user]')->form([        /* on récupère le formulaire */
                'user[email]' => "test@email.com",                  /* on récupère les données */
                'user[password][first]' => "password",
                'user[password][second]' => "password",
                'user[username]' => "test",
        ]);

        $client->submit($form);         /* on soumet le formulaire */

        $this->assertEquals(302, $client->getResponse()->getStatusCode()); /* on teste s'il y a redirection */
        

    }
   
    public function testEdit()          /* Test édition d'un user */
    {
        $client = $this->logIn();

        $user = $client             /* on récupère l'utilisateur */
            ->getContainer()
            ->get("doctrine.orm.entity_manager")
            ->getRepository(User::class)
            ->findOneByEmail('user1@email.com')
        ;

        $crawler = $client->request('GET', '/users/'.$user->getId().'/edit');   /* On récupère l'id du user */

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $form = $crawler->filter('form[name=user]')->form([        /* on récupère le formulaire */
                'user[email]' => "user1@email.com",                  /* on récupère les données */
                'user[password][first]' => "password",
                'user[password][second]' => "password",
                'user[username]' => "User1",
        ]);

        $client->submit($form);         /* on soumet le formulaire */

        $this->assertEquals(302, $client->getResponse()->getStatusCode()); /* on teste s'il y a redirection */
        
    }
       
    public function testDelete()          /* Test de suppression d'un user */
    {
        $client = $this->logIn();

        $user = $client             /* on récupère l'utilisateur */
            ->getContainer()
            ->get("doctrine.orm.entity_manager")
            ->getRepository(User::class)
            ->findOneByEmail('user1@email.com')
        ;

        $crawler = $client->request('GET', '/users/'.$user->getId().'/delete');   /* On supprime le user concerné */

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $form = $crawler->filter('form')->form();       

        $client->submit($form);       

        $this->assertEquals(302, $client->getResponse()->getStatusCode()); /* on teste s'il y a redirection */
        
    }
}
