<?php

namespace Tests\AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Tests\AuthenticatorWebTestCase;
use Symfony\Component\BrowserKit\Cookie;


class TaskControllerTest extends AuthenticatorWebTestCase
{

    public function testListAction()         /* Test page liste des tâches */
    {
        $client = $this->logIn($email = "user1@email.com");

        $client->request('GET', '/tasks');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

    }

    public function testListDoneAction()         /* Test page liste des tâches */
    {
        $client = $this->logIn($email = "user1@email.com");

        $client->request('GET', '/tasksdone');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

    }

    public function testCreateAction()         /* Test page liste des tâches */
    {
        $client = $this->logIn($email = "user1@email.com");

        $crawler = $client->request('GET', '/tasks/create');

        $form = $crawler->filter('form[name=task]')->form([        /* on récupère le formulaire */
            'task[title]' => "Tache15", 
            'task[content]' => "Action à faire",                 /* on récupère les données */
        ]);

        $client->submit($form);

        $this->assertEquals(302, $client->getResponse()->getStatusCode());

    }

    public function testNoEditAction()                  /* Refus d'éditer */
    {
        $client = static::createClient();

        $task= $client             
        ->getContainer()
        ->get("doctrine.orm.entity_manager")
        ->getRepository(Task::class)
        ->findOneByTitle('Tache1')
        ;

        $crawler = $client->request('GET', '/tasks/'.$task->getId().'/edit');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function testNoDeleteAction()                  /* Refus de supprimer */
    {
        $client = static::createClient();

        $task= $client             
        ->getContainer()
        ->get("doctrine.orm.entity_manager")
        ->getRepository(Task::class)
        ->findOneByTitle('Tache1')
        ;

        $crawler = $client->request('GET', '/tasks/'.$task->getId().'/delete');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function testEditAction()                   /* Edition d'une tâche */
    {
        $client = $this->logIn($email = "user1@email.com");

        $task= $client             
            ->getContainer()
            ->get("doctrine.orm.entity_manager")
            ->getRepository(Task::class)
            ->findOneByTitle('Tache1')
        ;

        $crawler = $client->request('GET', '/tasks/'.$task->getId().'/edit');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $form = $crawler->filter('form[name=task]')->form([        
            'task[title]' => "Tache1",
            'task[content]' => "Action à faire",
        ]);
        
        $this->assertSame(1, $crawler->filter('html:contains("Modifier")')->count());
        
        $client->submit($form);
        $this->assertSame(0, $crawler->filter('html:contains("La tâche a été bien été modifiée.")')->count());
        
        
    }
      
    public function testDeleteTaskAction()                   /* Supprimer une tâche */
    {
        $client = $this->logIn($email = "user1@email.com");

        $task= $client             
            ->getContainer()
            ->get("doctrine.orm.entity_manager")
            ->getRepository(Task::class)
            ->findOneByTitle('Tache1')
        ;
        $client->followRedirects(true);
        $crawler = $client->request('GET', '/tasks/'.$task->getId().'/delete');   

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $form = $crawler->filter('form')->form();       

        $client->submit($form);       

        $this->assertEquals(200, $client->getResponse()->getStatusCode()); 

    }

    public function testToggleTaskAction()                    /* Changement du toggle */
    {
        $client = $this->logIn($email = "user1@email.com");
        
        $task= $client             
        ->getContainer()
        ->get("doctrine.orm.entity_manager")
        ->getRepository(Task::class)
        ->findOneByTitle('Tache1')
        ;

        $client->followRedirects(true);
        $crawler = $client->request('GET', '/tasks/'.$task->getId().'/toggle');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

}